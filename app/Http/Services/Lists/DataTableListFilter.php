<?php

namespace App\Http\Services\Lists;

use Illuminate\Support\Facades\DB;

class DataTableListFilter
{
    protected function wildCardFilter($data, $queries, $columns)
    {
        /** filter wildcard only filters */
        $wildCardFilters = collect($queries)->filter(function ($query) {
            return !empty($query['value']);
        });

        if ($wildCardFilters->isNotEmpty()) {
            $data->where(function ($query) use ($columns, $wildCardFilters) {
                foreach ($columns as $key => $column) {
                    if (empty($column['searchable'])) {
                        continue;
                    }

                    foreach ($wildCardFilters as $wildCardFilter) {
                        $keyword = $wildCardFilter['value'];
                        $searchableField = $column['searchable_field'];
                        if (empty($column['raw'])) {
                            $query->orWhere($searchableField, 'like', "%$keyword%");
                        } else {
                            $query->orWhere(DB::raw("$searchableField"), 'like', "%$keyword%");
                        }
                    }
                }
            });
        }

        return $data;
    }

    public static function paginateData($query, $request)
    {
        return $query->paginate($request->paginate);
    }

    public static function getAllData($query)
    {
        return $query->get();
    }
}

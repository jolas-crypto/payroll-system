<?php

namespace App\Http\Services\Lists;

use Illuminate\Support\Facades\DB;

class DataTableListFilter
{
    protected function wildCardFilter($data, $queries, $columns)
    {
        /** filter wildcard only filters */
        $wildCardFilters = collect($queries)->filter(function ($query) {
            return !empty($query['value']) && $query['operator'] === '%';
        });

        if ($wildCardFilters->isNotEmpty()) {
            $data->where(function ($query) use ($columns, $wildCardFilters) {
                foreach ($columns as $key => $column) {
                    #only set searchable can be searched
                    if (empty($column['searchable'])) {
                        continue;
                    }
                    #loop all through the wildcard searching
                    #accepting array and string
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

    /** paginate and sort data */
    public static function paginateData($query, $request)
    {
        return $query->orderBy($request->sort_field, $request->sort_direction)->paginate($request->paginate);
    }
}

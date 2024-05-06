import {ref} from 'vue';

export function getListCurrentDateWithLessThan(startYear) {
    const currentYear = new Date().getFullYear();
    const years = ref([]);

    for (let year = startYear; year <= currentYear; year++) {
        years.value.push(year);
    }

    years.value.sort().reverse();

    return years;
}

export function getCurrentDate() {
    return new Date().getFullYear().toString();
}

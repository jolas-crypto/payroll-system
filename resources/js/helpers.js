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

export function getCurrentURL(url) {
    const currentURL = ref('');

    if (url == '/premium') {
        currentURL.value = 'SSS';
    } else if (url == '/pag-ibig') {
        currentURL.value = 'PAG-IBIG';
    } else if (url == '/phil-health') {
        currentURL.value = 'PHIL-HEALTH';
    } else {
        currentURL.value = 'TAX';
    }

    return currentURL;
}

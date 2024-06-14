import HeaderBodyContent from "./layouts/HeaderBodyContent.vue";
import PagePremiumPagIbigList from "./pages/Premiums/PagIbig.vue";
import PagePremiumSSSList from "./pages/Premiums/SSSList.vue";
import PagePremiumPhilHealthList from "./pages/Premiums/PhilHealth.vue";

import { createApp } from "vue";

const app = createApp({});

app.component('page-premiums-sss-list', PagePremiumSSSList)
app.component('header-body-content', HeaderBodyContent)
app.component('page-premiums-pagibig-list', PagePremiumPagIbigList)
app.component('page-premiums-philhealth-list', PagePremiumPhilHealthList)

app.mount('#app');

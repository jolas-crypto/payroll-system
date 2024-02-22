import HeaderBodyContent from "./layouts/HeaderBodyContent.vue";
import PagePremiumSSSList from "./pages/Premiums/SSSList.vue";

import { createApp } from "vue";

const app = createApp({});

app.component('page-premiums-sss-list', PagePremiumSSSList)
app.component('header-body-content', HeaderBodyContent)

app.mount('#app');

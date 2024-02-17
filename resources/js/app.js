import HeaderBodyContent from "./layouts/header-body-content.vue";
import PagePremiumSSSList from "./pages/premiums/sss-list.vue";

import { createApp } from "vue";

const app = createApp({});

app.component('page-premiums-sss-list', PagePremiumSSSList)
app.component('header-body-content', HeaderBodyContent)

app.mount('#app');

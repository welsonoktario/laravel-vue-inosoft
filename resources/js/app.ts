import "../css/app.css";
import "./bootstrap";
import { store } from "./store";

import App from "./App.vue";
import { createApp } from "vue";

createApp(App).use(store).mount("#app");

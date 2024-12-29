import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import MainLayout from './Layouts/MainLayout.vue';
import {ZiggyVue} from 'ziggy';
import '../css/app.css';
import { InertiaProgress } from '@inertiajs/progress';

InertiaProgress.init({
  color: 'red',
  showSpinner: true,
  delay:0,
  includeCSS:true,
});


createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    // Recuperer les pages
    const currentPage = pages[`./Pages/${name}.vue`];
    // ajouter le template a chaque page avant de l'afficher
    currentPage.default.layout = currentPage.default.layout || MainLayout;
    return currentPage;
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(ZiggyVue)
      .mount(el)
  },
})

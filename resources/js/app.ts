import { DefineComponent, createApp, h, devtools } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';

import MainLayout from './Layouts/MainLayout.vue';

const resolve = async (name: string) => {
  const pages = import.meta.glob('./Pages/**/*.vue');

  const page = (await pages[`./Pages/${name}.vue`]()) as DefineComponent;

  page.default.layout = page.default.layout || MainLayout;

  return page;
};

createInertiaApp({
  resolve,
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el);
  },
});

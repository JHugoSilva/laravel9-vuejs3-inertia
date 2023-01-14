import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { resolvePageComponent } from 'vite-plugin-laravel/inertia'
import Layout from '@/views/layouts/default.vue';

createInertiaApp({
	resolve: async (name) => {
        const page = resolvePageComponent(name, import.meta.glob('../views/pages/**/*.vue'))
        await page.then((module)=>{
            module.layout = Layout
        })
        return page
    },
	setup({ el, app, props, plugin }) {
		createApp({ render: () => h(app, props) })
			.use(plugin)
			.mount(el)
	},
})

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import flux from './flux.plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: [
                'vendor/livewire/livewire/dist/**',
            ],
        }),
        tailwindcss(),
        flux(),
    ],
});

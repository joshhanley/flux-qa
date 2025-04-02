import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import flux from './flux.plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    server: {
        host: '0.0.0.0',
        port: 5173,
        https: false,
        // origin: 'http://192.168.4.43:5173',
        cors: {
            origin: 'http://192.168.4.43', // <- this is the actual origin (no path)
        },
        hmr: {
            host: '192.168.4.43',
            protocol: 'ws',
            port: 5173,
        },
    },
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

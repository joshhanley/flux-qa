import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import flux from './flux.plugin';
import tailwindcss from '@tailwindcss/vite';
import fs from 'fs';

export default defineConfig({
    server: {
        host: '0.0.0.0',
        port: 5173,
        // https: true,
        https: {
            key: fs.readFileSync('/Users/josh/Library/Application Support/Herd/config/valet/Certificates/fluxqa.test.key'),
            cert: fs.readFileSync('/Users/josh/Library/Application Support/Herd/config/valet/Certificates/fluxqa.test.crt'),
        },
        // origin: 'http://192.168.4.46:5173',
        origin: 'https://fluxqa.test:5173',
        cors: {
            // origin: 'http://192.168.4.46', // <- this is the actual origin (no path)
            origin: 'https://fluxqa.test', // <- this is the actual origin (no path)
        },
        hmr: {
            // host: '192.168.4.46',
            host: 'fluxqa.test',
            protocol: 'wss',
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

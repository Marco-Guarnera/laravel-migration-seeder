import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
const path = require('path');

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.js', 'resources/scss/app.scss'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~resources' : '/resources/',
            '~bootstrap' : path.resolve(__dirname, 'node_modules/bootstrap')
        }
    }
});

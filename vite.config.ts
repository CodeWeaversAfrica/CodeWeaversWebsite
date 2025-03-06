// import { defineConfig } from 'vite';
// import laravel from 'laravel-vite-plugin';
// import tailwindcss from '@tailwindcss/vite';

// export default defineConfig({
//     plugins: [
//         laravel({
//             input: ['resources/css/app.css', 'resources/js/app.jsx'],
//             refresh: true,
//         }),
//         tailwindcss(),
//     ],
//     resolve: name => {
//         const pages = import.meta.glob('./Pages/**/*.jsx', { eager: true })
//         return pages[`./Pages/${name}.jsx`]
//       },
// });

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';
import tailwindcss from 'tailwindcss';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.tsx'], // Updated to .tsx
            refresh: true,
        }),
        react(),
        tailwindcss(),
    ],
});

// import React from 'react'
// import { createInertiaApp } from '@inertiajs/react'
// import { createRoot } from 'react-dom/client'

// createInertiaApp({
//   resolve: name => {
//     const pages = import.meta.glob('./Pages/**/*.jsx', { eager: true })
//     return pages[`./Pages/${name}.jsx`]
//   },
//   setup({ el, App, props }) {
//     createRoot(el).render(<App {...props} />)
//   },
// })

import React from 'react';
import { createInertiaApp } from '@inertiajs/react';
import { createRoot } from 'react-dom/client';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';

createInertiaApp({
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.tsx`,
            import.meta.glob('./Pages/**/*.tsx')
        ),
    setup({ el, App, props }) {
        createRoot(el).render(<App {...props} />);
    },
});

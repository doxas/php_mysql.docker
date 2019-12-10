
import 'whatwg-fetch';
import Promise from 'promise-polyfill';
import App from './script.js';

import './css/style.scss';

window.addEventListener('DOMContentLoaded', () => {
    console.log(`from main.js: app version ${App.VERSION}`);
}, false);


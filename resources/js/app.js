import './bootstrap';
import 'alpinejs';
import counter from './counter.js';


document.addEventListener('alpine:init', () => {
    Alpine.data('counter', counter);
});

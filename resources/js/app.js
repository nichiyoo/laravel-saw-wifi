import 'flowbite';
import alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import { createIcons, icons } from 'lucide';

window.Alpine = alpine;
alpine.plugin(focus);
alpine.start();

createIcons({
	icons,
});


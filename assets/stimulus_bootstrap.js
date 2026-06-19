import { startStimulusApp } from '@symfony/stimulus-bundle';
import ContactRevealController from './controllers/contact_reveal_controller.js';
import MethodStackController from './controllers/method_stack_controller.js';

const app = startStimulusApp();
app.register('contact-reveal', ContactRevealController);
app.register('method-stack', MethodStackController);

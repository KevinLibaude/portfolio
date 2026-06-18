import { startStimulusApp } from '@symfony/stimulus-bundle';
import ContactRevealController from './controllers/contact_reveal_controller.js';

const app = startStimulusApp();
app.register('contact-reveal', ContactRevealController);

import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    static values = {
        openOnConnect: Boolean
    };

    static targets = ['trigger', 'panel', 'firstField'];

    connect() {
        this.isOpen = this.openOnConnectValue;
        this.refreshUi();

        if (this.isOpen) {
            window.requestAnimationFrame(() => {
                this.element.scrollIntoView({ behavior: 'smooth', block: 'start' });

                if (this.hasFirstFieldTarget) {
                    this.firstFieldTarget.focus();
                }
            });
        }
    }

    toggle() {
        this.isOpen = !this.isOpen;
        this.refreshUi();

        if (this.isOpen) {
            window.requestAnimationFrame(() => {
                if (this.hasFirstFieldTarget) {
                    this.firstFieldTarget.focus();
                }
            });
        }
    }

    refreshUi() {
        this.element.classList.toggle('is-open', this.isOpen);
        this.panelTarget.setAttribute('aria-hidden', String(!this.isOpen));
        this.panelTarget.toggleAttribute('inert', !this.isOpen);
        this.triggerTarget.setAttribute('aria-expanded', String(this.isOpen));
        this.triggerTarget.textContent = this.isOpen ? 'Masquer le formulaire' : 'Afficher le formulaire';
    }
}

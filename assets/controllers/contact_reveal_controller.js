import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    static targets = ['trigger', 'panel', 'firstField', 'name', 'email', 'project', 'message', 'mailtoLink'];

    connect() {
        this.isOpen = false;
        this.refreshUi();
        this.refreshMailto();
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

    submit(event) {
        event.preventDefault();
        this.refreshMailto();
        window.location.href = this.mailtoLinkTarget.href;
    }

    refreshMailto() {
        if (!this.hasMailtoLinkTarget) {
            return;
        }

        const name = this.hasNameTarget ? this.nameTarget.value.trim() : '';
        const email = this.hasEmailTarget ? this.emailTarget.value.trim() : '';
        const project = this.hasProjectTarget ? this.projectTarget.value.trim() : '';
        const message = this.hasMessageTarget ? this.messageTarget.value.trim() : '';

        const subject = project || 'Prise de contact portfolio';
        const lines = [
            name ? `Nom : ${name}` : '',
            email ? `Email : ${email}` : '',
            project ? `Projet : ${project}` : '',
            '',
            message || 'Bonjour, je souhaite échanger à propos de mon projet.'
        ].filter((line, index, all) => line !== '' || (index > 0 && all[index - 1] !== ''));

        const href = `mailto:kevin.libaude@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(lines.join('\n'))}`;

        this.mailtoLinkTarget.href = href;
    }

    refreshUi() {
        this.element.classList.toggle('is-open', this.isOpen);
        this.panelTarget.setAttribute('aria-hidden', String(!this.isOpen));
        this.panelTarget.toggleAttribute('inert', !this.isOpen);
        this.triggerTarget.setAttribute('aria-expanded', String(this.isOpen));
        this.triggerTarget.textContent = this.isOpen ? 'Masquer le formulaire' : 'Afficher le formulaire';
    }
}

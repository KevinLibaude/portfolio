import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    static targets = ['step'];
    static values = {
        visibleCount: { type: Number, default: 3 },
    };

    connect() {
        this.order = this.stepTargets.map((_, index) => index);
        this.mediaQuery = window.matchMedia('(max-width: 1080px)');
        this.handleViewportChange = () => this.render();
        this.mediaQuery.addEventListener('change', this.handleViewportChange);
        this.render();
    }

    disconnect() {
        this.mediaQuery?.removeEventListener('change', this.handleViewportChange);
    }

    advance(event) {
        if (event.type === 'keydown') {
            event.preventDefault();
        }

        if (this.mediaQuery?.matches) {
            return;
        }

        if (this.order.length < 2) {
            return;
        }

        this.order.push(this.order.shift());
        this.render();
    }

    render() {
        const total = this.order.length;
        const isCompact = this.mediaQuery?.matches ?? false;

        this.stepTargets.forEach((step, index) => {
            const position = this.order.indexOf(index);
            const visibleLimit = Math.max(this.visibleCountValue, 1);
            if (isCompact) {
                step.style.removeProperty('--stack-order');
                step.style.removeProperty('z-index');
                step.dataset.stackState = 'stack-inline';
                step.setAttribute('aria-hidden', 'false');
                step.removeAttribute('aria-current');
                step.tabIndex = 0;
                return;
            }

            const isVisible = position > -1 && position < visibleLimit;
            const isActive = position === 0;

            step.style.setProperty('--stack-order', String(position));
            step.dataset.stackState = isVisible ? `stack-${Math.min(position, visibleLimit - 1)}` : 'stack-hidden';
            step.setAttribute('aria-hidden', String(!isVisible));
            step.tabIndex = isActive ? 0 : -1;

            if (isActive) {
                step.setAttribute('aria-current', 'true');
            } else {
                step.removeAttribute('aria-current');
            }

            step.style.zIndex = String(total - Math.max(position, 0));
        });
    }
}

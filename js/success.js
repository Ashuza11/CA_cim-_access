const success_massage = {
    init() {
        this.hideTimeout = null;

        this.el = document.createElement('div');
        this.el.className = 'success_massage';
        document.body.appendChild(this.el);
    },
    show(message, state) {
        clearTimeout(this.hideTimeout);
        this.el.textContent = message;
        this.el.className = 'success_massage success_massage_visibility';
    }
};

document.addEventListener('DOMContentLoaded', () => success_massage.init());
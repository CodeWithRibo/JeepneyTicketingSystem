    document.addEventListener('DOMContentLoaded', () => {
        const toggleMode = document.querySelectorAll('.fa-eye, .fa-eye-slash');
        toggleMode.forEach(e => {
            e.addEventListener('click', (event) => {
                const trigger = event.target;
                trigger.classList.toggle('fa-eye');
                trigger.classList.toggle('fa-eye-slash');
    
                const input = trigger.parentNode.querySelector('input');
                if (input.getAttribute('type') === 'password') {
                    input.setAttribute('type', 'text');
                } else {
                    input.setAttribute('type', 'password');
                }
            })
        })
    });

document.addEventListener('DOMContentLoaded', function() {
    const notification = document.getElementById('notification-pop-up');
    if (notification) {
        setTimeout(function() {
            notification.classList.add('opacity-0');
            setTimeout(function() {
                notification.style.display = 'none';
            }, 1000);
        }, 3000);
    }
});

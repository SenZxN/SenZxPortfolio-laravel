var lastScrollTop;

window.addEventListener('scroll', function() {
    var navbar = document.getElementById('backnav');
    var currentScrollY = document.documentElement.scrollTop;
        if (currentScrollY > 700) {
            if (currentScrollY > lastScrollTop) {
                navbar.classList.remove('active');
                navbar.classList.add('inactive');
            }
            else {
                navbar.classList.remove('inactive');
                navbar.classList.add('active');
            }
        } else {
            return
        }
    
        lastScrollTop = currentScrollY;
});
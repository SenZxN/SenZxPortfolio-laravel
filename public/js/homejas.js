window.addEventListener('scroll', function() {
    var navbar = document.getElementById('jobsnamed');
    var currentScrollY = document.documentElement.scrollTop;

        if (currentScrollY > 400) {
            navbar.classList.remove('inactive');
            navbar.classList.add('active');
        }
        else {
            navbar.classList.remove('active');
            navbar.classList.add('inactive');
        }
});
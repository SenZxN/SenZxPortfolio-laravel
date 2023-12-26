window.addEventListener('scroll', function() {
    var navbar = document.getElementById('jobsnamed');
    var navbar2 = document.getElementById('aboutme');
    var currentScrollY = document.documentElement.scrollTop;
    
    if (currentScrollY > 210) {
        navbar.classList.remove('inactive');
        navbar.classList.add('active');
        if (currentScrollY > 310) {
            navbar2.classList.remove('inactive');
            navbar2.classList.add('active');
        }

        else {
            navbar2.classList.remove('active');
            navbar2.classList.add('inactive');
        }
    }

    else {
        navbar.classList.remove('active');
        navbar.classList.add('inactive');
    }
});
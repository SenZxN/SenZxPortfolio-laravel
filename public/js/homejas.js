window.addEventListener('scroll', function() {
    const viewportWidth = window.innerWidth;
    var navbar = document.getElementById('jobsnamed');
    var navbar2 = document.getElementById('aboutme');
    var content1pc1 = document.getElementById('profilepic');
    var currentScrollY = document.documentElement.scrollTop;

    console.log("Limited window width:", viewportWidth);

    if (viewportWidth < 630) {
        if (currentScrollY > 190 - viewportWidth * 0.5) {
            navbar.classList.remove('inactive');
            navbar.classList.add('active');
            if (currentScrollY > 320 - viewportWidth * 0.45) {
                navbar2.classList.remove('inactive');
                navbar2.classList.add('active');
                if (currentScrollY > 550 - viewportWidth * 0.35) {
                    content1pc1.classList.remove('inactive');
                    content1pc1.classList.add('active');
                }
        
                else {
                    content1pc1.classList.remove('active');
                    content1pc1.classList.add('inactive');
                }
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
    }

    else {
        if (currentScrollY > 310) {
            navbar.classList.remove('inactive');
            navbar.classList.add('active');
            if (currentScrollY > 400) {
                navbar2.classList.remove('inactive');
                navbar2.classList.add('active');
                if (currentScrollY > 450) {
                    content1pc1.classList.remove('inactive');
                    content1pc1.classList.add('active');
                }
        
                else {
                    content1pc1.classList.remove('active');
                    content1pc1.classList.add('inactive');
                }
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
    }
});



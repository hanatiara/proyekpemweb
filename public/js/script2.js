document.addEventListener("DOMContentLoaded", function() {
    var elements = document.querySelectorAll('.fade-in');

    function checkVisibility() {
        var windowHeight = window.innerHeight;
        elements.forEach(function(element) {
            var position = element.getBoundingClientRect().top;
            if (position - windowHeight <= 0) {
                element.classList.add('visible');
            }
        });
    }



    // Initial check on page load
    checkVisibility();
});

document.addEventListener("DOMContentLoaded", function() {
    var elements = document.querySelectorAll('.slide-in');

    function checkVisibility() {
        var windowHeight = window.innerHeight;
        elements.forEach(function(element) {
            var position = element.getBoundingClientRect().top;
            if (position - windowHeight <= 0) {
                element.classList.add('visible');
            }
        });
    }


    // Initial check on page load
    checkVisibility();
});

    document.addEventListener("DOMContentLoaded", function() {
        var elements = document.querySelectorAll('.flip-in-xleft');

        function checkVisibility() {
            var windowHeight = window.innerHeight;
            elements.forEach(function(element) {
                var position = element.getBoundingClientRect().top;
                if (position - windowHeight <= 0) {
                    element.classList.add('visible');
                }
            });
        }

        window.addEventListener('scroll', checkVisibility);
        window.addEventListener('resize', checkVisibility);

        // Initial check on page load
        checkVisibility();
    });

document.addEventListener("DOMContentLoaded", function() {
    var elements = document.querySelectorAll('.flip-in-xright');

    function checkVisibility() {
        var windowHeight = window.innerHeight;
        elements.forEach(function(element) {
            var position = element.getBoundingClientRect().top;
            if (position - windowHeight <= 0) {
                element.classList.add('visible');
            }
        });
    }

    window.addEventListener('scroll', checkVisibility);
    window.addEventListener('resize', checkVisibility);

    // Initial check on page load
    checkVisibility();
});

document.addEventListener("DOMContentLoaded", function() {
    var elements = document.querySelectorAll('.slide-in-left');

    function checkVisibility() {
        var windowHeight = window.innerHeight;
        elements.forEach(function(element) {
            var position = element.getBoundingClientRect().top;
            if (position - windowHeight <= 0) {
                element.classList.add('visible');
            }
        });
    }

    window.addEventListener('scroll', checkVisibility);
    window.addEventListener('resize', checkVisibility);

    // Initial check on page load
    checkVisibility();
});

document.addEventListener("DOMContentLoaded", function() {
    var elements = document.querySelectorAll('.slide-in-right');

    function checkVisibility() {
        var windowHeight = window.innerHeight;
        elements.forEach(function(element) {
            var position = element.getBoundingClientRect().top;
            if (position - windowHeight <= 0) {
                element.classList.add('visible');
            }
        });
    }

    window.addEventListener('scroll', checkVisibility);
    window.addEventListener('resize', checkVisibility);

    // Initial check on page load
    checkVisibility();
});


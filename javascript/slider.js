window.onload = function () {
    var slides = document.getElementsByClassName('slide');
    var currentIndex = 0;
    
    function time() {
        showSlides(currentIndex);
        currentIndex++;
        setTimeout(time, 6000);
    }

    time();
    

    document.getElementById('control-prev').onclick = function() {
        plusSlides(1);
    }

    document.getElementById('control-next').onclick = function() {
        plusSlides(-1);
    }

    function plusSlides(n) {
        
        showSlides(currentIndex += n);
    }

    function showSlides(n) {
        
        if (n > slides.length - 1) {
            currentIndex = 0;
        } else if (n < 0) {
            currentIndex = slides.length - 1;
        }


        for (var i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        slides[currentIndex].style.display = "block";
    }
}


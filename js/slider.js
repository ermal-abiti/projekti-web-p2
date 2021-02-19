var leftBtn = document.getElementById("leftBtnSlider");
var rightBtn = document.getElementById("rightBtnSlider");

var sliderImgs = document.getElementsByClassName('slideshow-img');
var imgCount = sliderImgs.length;

// initial left slide's right turn
var sliderTurnRight = 1;
// initial left slide's index turn
var sliderTurnLeft = imgCount - 1;
// current image index of array
var currentImage = 0;



function nextSlide(){
    if (sliderTurnRight == imgCount - 1) {
        sliderImgs[sliderTurnRight].classList.remove('hidden');
        sliderImgs[currentImage].classList.add('hidden');
        currentImage = sliderTurnRight;
        sliderTurnRight = 0;
        
        sliderTurnLeft = currentImage - 1;
        if (sliderTurnLeft < 0) {
            sliderTurnLeft = imgCount - 1;
        }
    }
    else {
        
        sliderImgs[sliderTurnRight].classList.remove('hidden');
        sliderImgs[currentImage].classList.add('hidden');
        currentImage = sliderTurnRight;
        sliderTurnRight = sliderTurnRight + 1;
        
        sliderTurnLeft = currentImage - 1;
        if (sliderTurnLeft < 0) {
            sliderTurnLeft = imgCount - 1;
        }
        
    }
}

function previousSlide(){
    if (sliderTurnLeft == 0) {
        sliderImgs[sliderTurnLeft].classList.remove('hidden');
        sliderImgs[currentImage].classList.add('hidden');
        currentImage = sliderTurnLeft;
        sliderTurnLeft = imgCount - 1;
        
        sliderTurnRight = currentImage + 1;
        if (sliderTurnRight == imgCount) {
            sliderTurnRight = 0;
        }
    }
    else {
        
        sliderImgs[sliderTurnLeft].classList.remove('hidden');
        sliderImgs[currentImage].classList.add('hidden');
        currentImage = sliderTurnLeft;
        sliderTurnLeft = sliderTurnLeft - 1;
        
        sliderTurnRight = currentImage + 1;
        if (sliderTurnRight == imgCount) {
            sliderTurnRight = 0;
        }

    } 
}

rightBtn.addEventListener('click', nextSlide);
leftBtn.addEventListener('click', previousSlide);
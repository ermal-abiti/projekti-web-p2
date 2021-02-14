<?php 
require('parts/header.php');
?>


<div class="slideshow">
    

    <div class="slideshow-img">
        <img src="img/slider_img/Pic1.png" alt="slider_img1" id="sliderImg1">
    </div>

    <div class="slideshow-img hidden">
        <img src="img/slider_img/Pic2.png" alt="slider_img1" id="sliderImg2">
    </div>

    <div class="slideshow-img hidden">
        <img src="img/slider_img/Pic3.png" alt="slider_img1" id="sliderImg3">
    </div>

</div>
<div class="slideshow-btn">
        <button class="button button-red" id="leftBtnSlider"><</button>
        <button class="button button-red" id="rightBtnSlider">></button>
</div>
<script src="js/slider.js"></script>

<main>
    
    <div class="main-content-wide">
        <div class="main-content-blank">
            <h1>About Us</h1>
            <div class="styled-hr"><div style="margin-left: 0;"></div></div>
            <p><b>Blogging</b> eshte nje platforme e bazuar ne web dhe mundeson krijimin dhe menaxhimin e blogjeve me tema te ndryshme. Ky aplikacion i mundeson shfrytezuesit te krijojne postime te ndryshme rreth fushave te ndryshme si per teknologji, sport, kulture e te tjera. Blogu eshte krijuar ne vitin 2020 nga <i>Ermal Abiti</i> dhe <i>Ensar Hamza</i></p>
        </div>

        <div class="main-content-blank">
            <h1>Contact Us</h1>
            <div class="styled-hr"><div style="margin-left: 0;"></div></div>
            <table>
                <tr>
                    <td>Ermal Abiti</td>
                    <th>ermal.abiti@gmail.com</th>
                </tr>

                <tr>
                    <td>Ensar Hamza</td>
                    <th>ensarhamza1@gmail.com</th>
                </tr>
            </table>
            <!-- <div>
                <div>Ermal Abiti: <b>ermal.abiti@gmail.com</b></div>
                <div>Ensar Hamza: <b>ensarhamza1@gmail.com</b></div>
            </div> -->
        </div>
    </div>
    
</main>

<script>
        let listaPerUser = document.getElementById('ul-userinfo');
        
        let userLoggedIn = false;
        if (userLoggedIn) {
            listaPerUser.innerHTML = '<li><a href="#">My Profile: <b>user001</b></a></li> <li><a href="#" style="color:red;"><b>Log Out</b></a></li>';
        }

</script>


<?php 
require('parts/footer.php');
?>
<?php 
require('parts/header.php');
?>
        
<div class="alerts-area">
    <div class="alert hidden" id="validation-alert">
    </div>
</div>

<main>
    
    <div class="main-content">
        
        <div class="main-content-blank">
            <h2 style="text-align:center;">Register</h2>
            <div class="styled-hr"><div ></div></div>
            <div class="form-container register-form">
                <div class="form-item"><input type="text" name="username" id="username" placeholder="Username"/></div>

                <div class="form-item"><input type="text" name="Email" id="email" placeholder="Email"/></div>

                <div class="form-item"><input type="password" name="Password" id="password" placeholder="Password"/></div>

                <div class="form-item"><input type="password" name="Repeat Password" id="repeat-password" placeholder="Repeat Password"/></div>

                <div class="form-item"> <label for="birthday">Date of Birth:</label><input type="date" name="birthday" placeholder="Date of Birth"/></div>

                <div class="form-item"><input type="submit" name="submitBtn" value="REGISTER" class="button button-yellow" onclick="formValidation()"/></div>
            </div>
        </div>
    </div>
    
</main>

<script>
    let listaPerUser = document.getElementById('ul-userinfo');
    
    let userLoggedIn = false;
    if (userLoggedIn) {
        listaPerUser.innerHTML = '<li><a href="#">My Profile: <b>user001</b></a></li> <li><a href="#" style="color:red;"><b>Log Out</b></a></li>';
    }


    // form validation - register form
    var formElements = document.getElementsByClassName("register-form")[0].children;

    console.log(formElements[0].getElementsByTagName("input")[0]);


    
    function formValidation() {
        var valAlert = document.getElementById("validation-alert");
        for (var i=0; i < formElements.length; i++) {
            var currentInput = formElements[i].getElementsByTagName("input")[0];

            if (currentInput.value == "") {
                valAlert.classList.add("alert-red");
                valAlert.classList.remove("hidden");
                valAlert.innerText = `'${currentInput.name} ' field is empty!`;
                break;
            }
            else if (currentInput.id == "email" && !currentInput.value.includes("@")) {
                valAlert.classList.add("alert-red");
                valAlert.classList.remove("hidden");
                valAlert.innerText = 'Invalid email address!';
                break;
            }
            else if (currentInput.id == "password" && currentInput.value.length < 8) {
                valAlert.classList.add("alert-red");
                valAlert.classList.remove("hidden");
                valAlert.innerText = 'Password should be longer than 8 characters!';
                break;
            }
            else if (currentInput.id == "repeat-password" && currentInput.value != document.getElementById("password").value) {
                valAlert.classList.add("alert-red");
                valAlert.classList.remove("hidden");
                valAlert.innerText = 'Passwords don\'t match';
                break;
            }
            else if (i == formElements.length - 1) {
                valAlert.classList.add("alert-green");
                valAlert.classList.remove("hidden");
                valAlert.innerText = 'You have successfully been registered as a BLOGGING user!';
                break;
            }
        }
        // setTimeout(function() { valAlert.classList.add("hidden") },5000);
    }

</script>


<?php 
require('parts/footer.php');
?>
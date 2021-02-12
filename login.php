
<?php 
require('parts/header.php');
?>       
            
        
        
<main>
    
    <div class="main-content">
        <div class="alerts-area">
            <div class="alert hidden" id="validation-alert">
            </div>
        </div>
        <div class="main-content-blank">
            <h2 style="text-align:center;">Log In</h2>
            <div class="styled-hr"><div ></div></div>
            <div class="form-container login-form">
                <div class="form-item"><input type="text" name="username" id="username" placeholder="Username"/></div>

                <div class="form-item"><input type="password" name="Password" id="password" placeholder="Password"/></div>

                <div class="form-item"><input type="submit" name="submitBtn" value="LOG IN" class="button button-green   " onclick="formValidation()"/></div>
            </div>
        </div>
    </div>
    
</main>


<script src="js/loginCheck.js"></script>
<script>
    // form validation - register form
    var formElements = document.getElementsByClassName("login-form")[0].children;

    console.log(formElements[0].getElementsByTagName("input")[0]);


    
    function formValidation() {
        var valAlert = document.getElementById("validation-alert");
        for (var i=0; i < formElements.length; i++) {
            var currentInput = formElements[i].getElementsByTagName("input")[0];
            //regex for username /[a-zA-Z][a-zA-Z0-9-_]{3,32}/
            console.log(currentInput);
            if (currentInput.name=="username" && !(/[a-zA-Z][a-zA-Z0-9-_]{3,32}/.test(currentInput.value))) {
                
                valAlert.classList.add("alert-red");
                valAlert.classList.remove("hidden");
                valAlert.innerText = `'${currentInput.name} ' field is empty!`;
                break;
            }
            //regex for password
            else if () {

            }
            
            else if (i == formElements.length - 1) {
                valAlert.classList.add("alert-green");
                valAlert.classList.remove("hidden");
                valAlert.innerText = 'You have succesfully logged in!';

                // after login
                var username = document.getElementById('username').value;
                userLoggedIn = true;
                userLoggedInAction(userLoggedIn, username);
                document.getElementsByClassName("main-content-blank")[0].classList.add("hidden");
                break;
            }
        }
        // setTimeout(function() { valAlert.classList.add("hidden") },5000);
    }

</script>


<?php 
require('parts/footer.php');
?>
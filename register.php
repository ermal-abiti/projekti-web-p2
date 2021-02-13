<?php 
require('parts/header.php');
?>
        
<div class="alerts-area">
    <?php
        if (isset($_GET['usernameExists'])){
            echo '<div class="alert" id="validation-alert">
            Username already exists!</div>';
        }
        else if (isset($_GET['emailExists'])){
            echo '<div class="alert" id="validation-alert">
            Email already exists!</div>';
        }
        else if (isset($_GET['userRegistered'])) {
            echo '<div class="alert alert-green" id="validation-alert">
            User registered successfully!</div>';
        }
    ?>
    <div class="alert hidden" id="validation-alert">
    </div>
</div>


<main>
    
    <div class="main-content">
        
        <div class="main-content-blank">
            <h2 style="text-align:center;">Register</h2>
            <div class="styled-hr"><div ></div></div>


            <form action="config/user_register.php" method="post">
                <div class="form-container register-form">
                <div class="form-item"><input type="text" name="username" id="username" pattern="^(?!.*\.\.)(?!.*\.$)[^\W][\w.]{3,29}$" placeholder="Username" required/></div>

                <div class="form-item"><input type="text" pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?" name="email" id="email" placeholder="Email" required/></div>

                <div class="form-item"><input type="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$" name="password" id="password" placeholder="Password" required/></div>


                <div class="form-item"> <label for="birthday">Date of Birth:</label><input type="date" name="birthday" placeholder="Date of Birth" required/></div>

                <div class="form-item"><input type="submit" name="register-btn" value="REGISTER" class="button button-yellow"/></div>
            </div>
            </form>
            
        </div>
    </div>
    
</main>

<script>
    // let listaPerUser = document.getElementById('ul-userinfo');

    // form validation - register form
    // var formElements = document.getElementsByClassName("register-form")[0].children;

    // console.log(formElements[0].getElementsByTagName("input")[0]);


    
    // function formValidation() {
    //     var valAlert = document.getElementById("validation-alert");
    //     for (var i=0; i < formElements.length; i++) {
    //         var currentInput = formElements[i].getElementsByTagName("input")[0];

    //         if (currentInput.value == "") {
    //             valAlert.classList.add("alert-red");
    //             valAlert.classList.remove("hidden");
    //             valAlert.innerText = `'${currentInput.name} ' field is empty!`;
    //             break;
    //         }

    //         // username: /^(?!.*\.\.)(?!.*\.$)[^\W][\w.]{3,29}$/
    //         else if (currentInput.id == "username" && !(/^(?!.*\.\.)(?!.*\.$)[^\W][\w.]{3,29}$/.test(currentInput.value))) {
    //             valAlert.classList.add("alert-red");
    //             valAlert.classList.remove("hidden");
    //             valAlert.innerText = 'Invalid username !';
    //             break;
    //         }
    //         //regex: /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/
    //         else if (currentInput.id == "email" && !(/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/.test(currentInput.value))) {
    //             valAlert.classList.add("alert-red");
    //             valAlert.classList.remove("hidden");
    //             valAlert.innerText = 'Invalid email address!';
    //             break;
    //         }

    //         //regex: /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/
    //         else if (currentInput.id == "password" && !(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/.test(currentInput.value))) {
    //             valAlert.classList.add("alert-red");
    //             valAlert.classList.remove("hidden");
    //             valAlert.innerText = 'Password should be longer than 8 characters and contain at least 1 uppercase letter and 1 number!';
    //             break;
    //         }

    //         else if (currentInput.id == "repeat-password" && currentInput.value != document.getElementById("password").value) {
    //             valAlert.classList.add("alert-red");
    //             valAlert.classList.remove("hidden");
    //             valAlert.innerText = 'Passwords don\'t match';
    //             break;
    //         }
    //         else if (i == formElements.length - 1) {
                
    //             break;
    //         }
    //     }
    //     // setTimeout(function() { valAlert.classList.add("hidden") },5000);
    // }

</script>


<?php 
require('parts/footer.php');
?>
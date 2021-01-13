let listaPerUser = document.getElementById('ul-userinfo');
        
        let userLoggedIn = false;
        function userLoggedInAction(userLoggedIn, username) {
            if (userLoggedIn) {
                listaPerUser.innerHTML = `<li><a href="#">My Profile: <b>${username}</b></a></li> <li><a href="#" style="color:red;"><b>Log Out</b></a></li>`;
            }
        }
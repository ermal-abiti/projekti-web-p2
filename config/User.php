<?php
session_start();
include_once('db_conn.php');

class User {
    public $username;
    public $password;
    public $email;
    public $birthday;
    public $privilege;

    public function __construct($username, $password, $email, $birthday, $privilege){
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->birthday = $birthday;
        $this->privilege = $privilege;
    }

    public function checkIfUsernameExists($conn){
        $sql = "SELECT * FROM user_table WHERE username='$this->username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            return true;
        }
        
        return false;

    }

    public function checkIfEmailExists($conn) {
        $sql = "SELECT * FROM user_table WHERE email='$this->email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            return true;
        }
        
        return false;
    }

    public function registerUserInDB($conn) {
        $hashed_password = password_hash($this->password, PASSWORD_BCRYPT);

        $sql = "INSERT INTO user_table (username, email, password, privilege, birthday) VALUES (?, ?, ?, ?, ?)";

        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            return false;
        }
        else {
            mysqli_stmt_bind_param($stmt, "sssis", $this->username, $this->email, $hashed_password, $this->privilege, $this->birthday);
            mysqli_stmt_execute($stmt);
            return true;
        }
        
    }


    
}





class LoginUser {
    private $username;
    private $password;

    public function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
    }

    public function authenticateUser($conn) {
        $sql = "SELECT * FROM user_table WHERE username=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            return false;
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $this->username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if($row = mysqli_fetch_assoc($result)) {
                $password_check = password_verify($this->password, $row['password']);
                if (!$password_check){
                    // header("Location:../login.php?wrongPassword=1");
                    // exit();
                    return false;
                }
                else if ($password_check) {
                    session_start();
                    $_SESSION['userLoggedIn'] = $row['username'];
                    $_SESSION['userID'] = $row['user_id'];
                    $_SESSION['privilege'] = $row['privilege'];
                    
                    return true;
                }
                // else {
                //     return false;
                // }
            }
            else {
                return false;
            }

        }
    }
}

?>
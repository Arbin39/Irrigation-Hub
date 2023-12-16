<?php
             if ($_SERVER["REQUEST_METHOD"] == "POST") {
                require_once 'connection.php';
                $email = $_POST['email'];
                $password = $_POST['password'];
                $sql = "SELECT * from signup where Email='$email' && Password='$password' ";
                $result = $mysqli->query($sql);
  
                if ($result->num_rows > 0) {
                    session_start();
                    $_SESSION['User'] = $_POST['email'];
                    $_SESSION['status'] = 'logedin';
                    echo "<script>alert('Logged in Successfully !')</script>";
                    header('Location: index.html');
                } else {
                    echo "<script>alert('Username/Password Invalid')</script>";
                    // header('Location:auth-login-basic.php');
  
                }
            }
?>
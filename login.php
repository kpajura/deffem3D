<?php
    session_start();

    if((isset($_SESSION['loggedin']))&&($_SESSION['loggedin']==true))
    {
        header('Location: index.php');
        exit();
    }

    require_once "connect.php";

    $connect = @new mysqli($host, $db_user, $db_password, $db_name);

    if($connect->connect_errno!=0){
        echo "error";   
    }
    else{
        $username = $_POST['username'];
        $password = $_POST['password'];
        $username = htmlentities($username, ENT_QUOTES, "UTF-8");
    
        $sql = "";

        if($result = @$connect->query(sprintf("SELECT * FROM users WHERE (USERNAME='%s' OR EMAIL='%s')", mysqli_real_escape_string($connect, $username),mysqli_real_escape_string($connect, $username)))){
        if($result->num_rows>0){
            $row = $result->fetch_assoc();
                if (password_verify($password, $row['PASSWORD'])){

                    $_SESSION['loggedin'] = true;
                    $_SESSION['admin'] = $row['ISADMIN'];
                    $_SESSION['userID']=$row['ID'];
                    $result->close();
                    header('Location: index.php');
                }
                else{
                    $_SESSION['error'] = "<span class='error'>Nieprawidłowy login lub hasło</span>";
                    header('Location: loginUser.php');
                }
            }
            else{
                $_SESSION['error'] = "<span class='error'>Nieprawidłowy login lub hasło</span>";
                header('Location: loginUser.php');
            }
        }
        else{
            $_SESSION['error'] = "<span class='error'>Brak połączenia</span>";
            header('Location: loginUser.php');
        }
    $connect->close();
    }   

?>
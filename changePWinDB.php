<?php
    session_start();   
    if(!(isset($_SESSION['loggedin']))||!($_SESSION['loggedin']==true))
    {
        header('Location: login.html');
        exit();
    }
    require_once "connect.php";

    $connect = @new mysqli($host, $db_user, $db_password, $db_name);

    if($connect->connect_errno!=0){
        echo "error";
    }
    else{
        $old = $_POST['oldPassword'];
        $new = $_POST['newPassword'];
        $repeat = $_POST['repeatPassword'];
        $userID= $_SESSION['userID'];

        if($new == $repeat){
            $sql = "SELECT * FROM users WHERE ID='$userID'";

            if($result = @$connect->query($sql)){
                if($result->num_rows>0){
                    $row = $result->fetch_assoc();
                    if(password_verify($old, $row['PASSWORD'])){
                        $hashed_password = password_hash($new, PASSWORD_DEFAULT);
                        $sql2 = "UPDATE USERS SET PASSWORD='$hashed_password' WHERE ID=$userID";

                    if ($connect->query($sql2) === TRUE) {
                        $_SESSION['mes']="Hasło zostało zmienione!";
                    } 
                    else {
                        $_SESSION['mes']="Error updating record: " . $connect->error;
                    }
                }
                else{
                    $_SESSION['mes']="Stare haslo jest niepoprawne!";
                }
            }
            else{
                $_SESSION['mes']="Brak użytkownika!";
            }
        }
        else{
            $_SESSION['mes']='Nieudało się nawiązać połączenia!';
        }
    
        $connect->close();
    }
    else{
        $_SESSION['mes']='Hasła nie są identyczne!';
    }

    header('Location: changePW.php');
   
}

?>
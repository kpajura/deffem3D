<?php 
    session_start();
    if(isset($_POST['email'])){
        $validated=true;
        $username = $_POST['username'];
        if((strlen($username)<3)||(strlen($username)>20)){
            $validated=false;
            $_SESSION['e_username']="Nazwa użytkownika musi mieć od 3 do 20 znaków!";
        }

        if(ctype_alnum($username)==false){
            $validated=false;
            $_SESSION['e_username'] = "Nazwa użytkownika może sładać się tylko z cyfr i liter (bez polskich znaków)";
        }

        $email = $_POST['email'];
        $email_tmp = filter_var($email, FILTER_SANITIZE_EMAIL);
        
        if(filter_var($email_tmp, FILTER_VALIDATE_EMAIL)==false || ($email_tmp !=$email)){
            $validated=false;
            $_SESSION['e_mail'] = "Podaj poprawny adress email";
        }

        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        if (strlen($password)<8 || strlen($password)>20){
            $validated=false;
            $_SESSION['e_password'] = "Hasło musi posiadać o 8 do 20 znaków";
        }

        if ($password!=$password2){
            $validated=false;
            $_SESSION['e_password'] = "Hasła muszą być identyczne";
        }

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        require_once "connect.php";
        try{
            $connect = new mysqli($host, $db_user, $db_password, $db_name);
            if($connect->connect_errno!=0){
                throw new Exception(mysqli_connect_errno());
            }
            else{

                $result = $connect -> query("SELECT id FROM users WHERE EMAIL='$email' OR USERNAME='$username'");

                if(!$result){
                    throw new Exception($connect->error);
                }

                $number = $result->num_rows;
                if($number>0){
                    $validated=false;
                    $_SESSION['e_repeat'] = "Taki użytkownik o takim mailu lub loginie już istnieje";
                }
            }
        }
        catch(Exception $e){
            echo "<span style='color:red;'> Błąd serwera: ".$e."</span>";
        }

        if($validated==true){

            $date = date('Y-m-d');
            
            $sql = "INSERT INTO users (USERNAME, EMAIL, PASSWORD, CREATIONDATE, ISADMIN) VALUES ('$username', '$email', '$hashed_password', SYSDATE(), '0')";

            if ($connect->query($sql)){
                $connect->close();
                $_SESSION['added']=$username;
                header("Location: addUser.php");

            }
            else{
                $connect->close();
                throw new Exception($connect->error);
            }


        }
        else{
            header("Location: addUser.php");
            $connect->close();

        }


    }

?>
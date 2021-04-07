<?php
    session_start();
    if(!(isset($_SESSION['loggedin']))||!($_SESSION['loggedin']==true))
    {
        header('Location: login.html');
        exit();
    }
    if(!($_SESSION['admin']==true)){
        header('Location:index.php');
        exit();
    }
    require_once "connect.php";

    $connect = @new mysqli($host, $db_user, $db_password, $db_name);

    if($connect->connect_errno!=0){
        echo "error";
    }
    else{
        $ID = intval($_POST['userid']);
        $NAME = $_POST['name'];
        $DESCRIPTION = $_POST['description'];

        $FILE = pathinfo($_FILES['file']["name"]);
        $EXT = $FILE['extension'];
        $NEWNAME = $NAME.".".$EXT;


        $path = 'downloads/'.$NEWNAME;

        if(is_uploaded_file($_FILES['file']['tmp_name'])) {
            $sql = "INSERT INTO files (`USERS_ID`, `FILE_NAME`, `FILE_DES`) VALUES ('$ID','$NEWNAME','$DESCRIPTION')";

            if ($connect->query($sql) === TRUE) {
                move_uploaded_file($_FILES['file']['tmp_name'], $path);
                header('Location: usersList.php');
            } 
            else {
                echo "Nie można dodać pliku";
            }
    
        }
        $connect->close();
    
    }   


?>
<?php
    session_start();
    if(isset($_SESSION['unique_id'])){//ako nije loginovan prebaci ga na login stranu
        include_once "config.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if(isset($logout_id)){//ako je logut id postavljen radi sledeci kod
            $status = "Offline now";
            //ako je korisnik logoutovan pisace Offline now
            //ako nije pisace da Active now
            $sql = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id={$_GET['logout_id']}");
            if($sql){
                session_unset();
                session_destroy();
                header("location: ../login.php");
            }
        }else{
            header("location: ../users.php");
        }
    }else{  
        header("location: ../login.php");
    }
?>
<?php 
    session_start();
    include_once "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($email) && !empty($password)){
        //proveravamo da li se podudaraju email i sifra u bazi
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0){//ako se slaze sa podacima u bazi radi sledeci kod
            $row = mysqli_fetch_assoc($sql);
            $user_pass = md5($password);
            $enc_pass = $row['password'];
            if($user_pass === $enc_pass){
                $status = "Active now";
                //pisace Active now ako je korisnik uspesno loginovan
                $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
                if($sql2){
                    $_SESSION['unique_id'] = $row['unique_id'];
                    echo "success";
                }else{
                    echo "Nesto nije u redu. Molimo vas pokusajte ponovo!";
                }
            }else{
                echo "Email ili sifra nisu tacni!";
            }
        }else{
            echo "$email - Ovaj email ne postoji!";
        }
    }else{
        echo "Sva polja su obavezna!";
    }
?>
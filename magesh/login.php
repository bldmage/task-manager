<?php
    include("connection1.php");
    if(isset($_POST["submit"])){
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "select * from login where username = '$username' and password = '$password'";
        $resul = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($resul ,MYSQLI_ASSOC);
        $count = mysqli_num_rows($resul); 
        if($count==1){
            header("location:home.php");
    
        }
        else{
            echo '<script>
                 window.location.href = "index.php";
                 alert("login failed. invaild username or password")
                 </script>';

        }
    }
?>
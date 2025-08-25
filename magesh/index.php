<?php
include("connection1.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"type="text/css" href="style.css">
</head>
<body>
    <div id="form">
        <h1>login page</h1>
        <form name="form" action="login.php" onsubmit = "return isvalid()" method="POST">
            <label>username :</label>
            <input type="text" id="user" name="user"><br><br>
            <label>password :</label>
            <input type="password" id="pass" name="pass"><br><br> 
            <input type="submit" id="btn" value="login" name="submit">

        </form>
        
    </div>
    <script>
        function isvalid(params) {
            var user = Document.user.value;
            var pass = Document.pass.value;
            if(user.length=="" && pass.length==""){
                alert("username and password frield is empty!!!");
                return false
            }
            else{
                if(user.length==""){
                    alert("username is empty!!!");
                    return false
                }
                if(pass.length==""){
                    alert("password is empty!!!");
                    return false
                }
            }
            
        }
    </script>
</body>
</html>
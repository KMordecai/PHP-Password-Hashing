<!doctype html>
<html>
    <body>
             <h1>Sign Up</h1>
                <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                    <label>Username</label>
                    <input type="text" name="username" required><br/>
                    <br>
                    <label>Password</label>
                    <input type="password" name="password" required><br/>
                    <input type="submit" name="submit" value="Register"><br/> 
                </form>
                
                <?php
                    include('db.php');
                    if($_SERVER['REQUEST_METHOD'] == "POST"){
                        $username = mysqli_real_escape_string($connect, $_POST['username']);
                        $password = mysqli_real_escape_string($connect, $_POST['password']);
                        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                            if(password_verify($password, $hashed_password)) {
                                $sql = "INSERT INTO user(user,password) values('$username', '$hashed_password')";
                                $result = mysqli_query($connect, $sql);
                                    echo "Registered as " . $username. '</br>';
                            }
                    }
                ?>
    </body>
</html>

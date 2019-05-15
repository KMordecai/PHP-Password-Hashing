       <?php
        
                $servername = "localhost";
                $username = "Enter your database username here. example: root";
                $password = "Enter your database password here.";
                $database = "salt";


                $connect = new mysqli($servername, $username, $password, $database);


                if ($connect->connect_error) {
                    die("Connection failed: " . $connect->connect_error);
                }
            ?>  

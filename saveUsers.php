<?php 
    switch($_REQUEST["action"]){
        case 'create':
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $date = $_POST['date'];

            $sql = "INSERT INTO users (name,email, password, date) VALUES ('{$name}','{$email}','{$password}','{$date}')";

            $res = $conn->query($sql);
            break;
        
        case 'edit':
            //code
            break;

        case 'delete':
            //code
            break;
    }
?>
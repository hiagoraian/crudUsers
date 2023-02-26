<?php 
    switch($_REQUEST["action"]){
        case 'create':
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $date = $_POST['date'];

            $sql = "INSERT INTO users (name,email, password, date) VALUES ('{$name}','{$email}','{$password}','{$date}')";

            $res = $conn->query($sql);

            if($res == true){
                echo "<script>alert('registration done.');</script>";
                echo "<script> location.href='?page=read';</script>";
            } else{
                echo "<script>alert('unregistered registration.');</script>";
                echo "<script> location.href='?page=read';</script>"; 
            }

            break;
        
        case 'edit':
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $date = $_POST['date'];

            $sql = "UPDATE  users  SET name='{$name}', email='{$email}',password='{$password}',date='{$date}' WHERE id=".$_REQUEST["id"];
            $res = $conn->query($sql);

            if($res == true){
                echo "<script>alert('Edited record.');</script>";
                echo "<script> location.href='?page=read';</script>";
            } else{
                echo "<script>alert('Unedited record.');</script>";
                echo "<script> location.href='?page=read';</script>"; 
            }

            break;

        case 'delete':
            $sql = "DELETE FROM users WHERE id=".$_REQUEST["id"];
            $res = $conn->query($sql);

            if($res == true){
                echo "<script>alert('Deleted user.');</script>";
                echo "<script> location.href='?page=read';</script>";
            } else{
                echo "<script>alert('User has not been deleted.');</script>";
                echo "<script> location.href='?page=read';</script>"; 
            }

            break;
    }
?>
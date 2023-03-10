<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <title>CRUD Users V1</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Users</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="?page=create">Create</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="?page=read">Read</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col mt-5">
                    <?php
                        include('config.php'); 
                        switch(@$_REQUEST["page"]){
                        case "create":
                            include("create.php");
                            break;
                        case "read":
                            include("read.php");
                            break;
                        case "save":
                            include("saveUsers.php");
                            break;
                        case "edit":
                            include("editUsers.php");
                            break;
                        default:
                            echo "<h1>Bem vindos!</h1>";
                        }
                    ?>
                </div>
            </div>
        </div>
        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
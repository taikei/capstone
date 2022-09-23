<?php 
session_start();
// session_destroy();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Little Hoteliers - Login Page</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary">

    <div class="container">
    <div class="row justify-content-center">
    <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="p-5">
    <div class="text-center">
    <h1 class="h4 text-gray-900 mb-4">Welcome to Little Hoteliers!</h1>
    
            <form method="POST" action="./controllers/config.php" class="user">
                    <div class="form-group">
                        <select class="form-control" name="role" id="role" placeholder="Selct Role">
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                            <option value="support">Support</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="txt_uname" placeholder="ID" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" name="txt_pwd" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login" class="btn btn-primary btn-user btn-block"/>
                    </div> 
                </div>
            </form>
        </div></div></div></div></div>

    </body>
</html>


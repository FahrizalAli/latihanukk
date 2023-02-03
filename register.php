<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.css">
</head>

<body class="bg-primary">
    <form action="login.php" method="POST">
        <div class="card col-4 offset-4 mt-5">
            <div class="card-header text-center">
                <h2>Register</h2>
            </div>
            <div class="card-body">
                <input class="form-control mb-3" type="text" name="username" placeholder="Username">
                <input class="form-control mb-3" type="password" name="password" placeholder="Password">
                <select class="form-select mb-3" name="level" id="">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
                <button type="submit" class="btn btn-primary col-12">Login</button>
            </div>
        </div>
    </form>
</body>

</html>
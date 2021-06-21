<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - RumahSakit</title>

    <!-- Bootstrap Core CSS -->
    <link href="../_assets/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
        <div class="container">
            <div align="center" style="margin-top:200px;">
                <form action="post" method="post" class="navbar-form">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></i></span>
                        <input type="text" name="user" class="form-control" placeholder="username" required>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></i></span>
                        <input type="password" name="password" class="form-control" placeholder="password" required>
                    </div>
                    <div class="input-group">
                        <input type="submit" name="login" class="btn btn-primary" value="login" required>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
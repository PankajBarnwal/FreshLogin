<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Registration</title>
</head>

<body>
        <!-- *********************Insert user form************** -->
    <div class="container">
        <form action="register" method="post">
            @csrf<br>
            <h2 class="text-info"><u> Registration Form</u></h2><a href="/" style="font-size: 20px;">Home</a>
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Enter name">
            </div>
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Enter user's email">
            </div>
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Enter username">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Enter password">
            </div>
            <button class="btn btn-primary" name="submit" >Submit</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </form>
    </div>
    <br>
</body>

</html>
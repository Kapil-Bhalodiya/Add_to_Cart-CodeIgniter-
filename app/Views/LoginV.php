<!DOCTYPE html>
<html lang="en">
<?php
if(isset($valid))   echo $valid->listErrors();
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title>Login Page</title>
</head>

<body>
    <div class="container mt-5">
        <h3 >Login Form</h3>
        <br/>
        <form action="http://localhost/CI/public/index.php/login/loginclick" method="post">
            <input class="form-control w-50" type="text" placeholder="Enter Username" name="uname">
             <!-- value="<? //set_value('uname'); ?> -->
            <br />
            <input class="form-control w-50" type="password" placeholder="Enter Password" name="pwd">
            <br />
            <button class="btn btn-info" type="submit" name="submit">Login</button>
        </form>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title>Admin Page</title>
</head>
<body>
<body>
    <div class="container-fluid bg-primary">
        <div class="row m-2 p-2 text-white">
            <div class="col-4">
                <label class="lead">Welcome to , Kapil </label>
            </div>

            <?php //echo "hey"; ?>
            <div class="col-4 text-center">
                <form action="<?php //echo $_SERVER["PHP_SELF"]; ?>" method="post">
                    <a class="btn btn-dark" href="home.php?cat=footwear">Footwear</a>
                    <a class="btn btn-dark" href="home.php?cat=clothes">Clothes</a>
                    <a class="btn btn-dark" href="home.php?cat=cosmetic">Cosmetic</a>
                </form>
            </div>
            <div class="col-4 text-center">
                <form action="<?php //echo $_SERVER["PHP_SELF"]; ?>" method="post">
                    <button name="viewcart" class="btn btn-dark float-end">Cart</button>
                    <button name="logout" class="btn btn-light">Logout</button>
                </form>
            </div>
        </div>

    </div>

    <div class="container mt-5">
        <h3 >Add item</h3>
        <br/>
        <form action="http://localhost/CI/public/additem" method="post" enctype="multipart/form-data">
            <input class="form-control w-50" type="text" placeholder="Enter Item name" name="name"><br />
            <input class="form-control w-50" type="number" placeholder="Enter price" name="price"><br />
            <input class="form-control w-50" type="number" placeholder="Enter Qauntity" name="qty"><br />
            <select name="category" class="form-select w-50">
                <option value="clothes">clothes</option>
                <option value="footware">Footware</option>
                <option value="cosmetic">Cosmetic</option>
            </select><br/>
            <input class="form-control" type="file" name="img"> 
            <button class="btn btn-success" type="submit" name="submit">Add</button>
        </form>
    </div>
    <?= $this->renderSection('content'); ?>

</body>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
    <?php $session = session(); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title>User Page</title>
</head>
<body>
<body>
    <div class="container-fluid bg-primary">
        <div class="row m-2 p-2 text-white">
            <div class="col-4">
                <label class="lead">Welcome to , <?= $session->get('user'); ?> </label>
            </div>
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
    <div class="container-fluid">
        <?php foreach($getData as $d) { ?>

           
        <div class="row m-2 p-2 text-white">
        <div class="card" style="width: 18rem;">
                <img class="card-img-top" src=".../writeable/upload<?= $d[0]->img; ?>" alt="Card image">
                <div class="card-body">
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                        <h5 class="card-title"><?= $d[0]->name; ?></h5>
                        <b><?= $d[0]->price."/-"; ?></b>
                        <a class="btn bg-secondary float-end" href="home.php?pid=<?= $d[0]->id; ?>">Add to cart</a>
                    </form>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</body>

</body>
</html>
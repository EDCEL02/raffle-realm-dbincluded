<?php
session_start();
// Check if the user is logged in
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $logoutLink = '<a href="php/db_logout.php" class="dropdown-item">Logout</a>';
    
    
} else {
    // If the user is not logged in, you can provide a different link or redirect them to the login page
    $username = 'Guest';
    $logoutLink = '';
}
?>

<head>
        <meta charset="utf-8">
        <title>Raffle Realm</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicon -->
        <link href="../img/RR.png" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
</head>


<body>
<!-- Nav Bar Start -->
<div class="nav">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="index1.php" class="nav-item nav-link">Home</a>
                    <a href="categories.php" class="nav-item nav-link">Categories</a>
                    <a href="my-account.php" class="nav-item nav-link">Dashboard</a>
                    <a href="seller-cart.php" class="nav-item nav-link">Sell</a>
                    <a href="buyer-cart.php" class="nav-item nav-link">Cart</a>
                   
                </div>

                <div class="navbar-nav ml-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $username; ?></a>
                        <div class="dropdown-menu">
                        <?php 
                            echo $logoutLink;
                        ?>                        
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index1.php">
                                <img src="img/R.gif" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">

                            <a href="my-account.php" class="btn wishlist">
                                <i class="fa fa-user"></i>
                                <span>(0)</span>
                            </a>

                            <a href="seller-cart.php" class="btn wishlist">
                                <i class="fa fa-home"></i>
                                <span>(0)</span>
                            </a>
                            
                            <a href="buyer-cart.php" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Nav Bar End -->
</body>
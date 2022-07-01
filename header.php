<?php
require_once 'vendor/autoload.php';
use App\classes\Post;
use App\classes\Site;
$ob = Site::display();
$siteData = mysqli_fetch_assoc($ob);
#$post = Post::showActivelPost();
$populer = Post::showPopulerlPost();
$page = explode('/',$_SERVER['PHP_SELF']);
$page = end($page);
$title = '';
if($page == 'login.php'){
    $title = 'Home';
}
elseif ($page == 'contact.php'){
    $title = 'Contact';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Site Metas -->
    <title><?= $title . ' | ' . $siteData['title']?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/11b126aa13.js" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="assets/style.css" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="assets/css/responsive.css" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="assets/css/colors.css" rel="stylesheet"> -->

    <!-- Version Tech CSS for this template -->
    <link href="assets/css/version/tech.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/jquery.desoslide.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	rel="stylesheet">
    <!-- bootsrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
        .bg{
            background-color: #ee9117;
        }
    </style>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="wrapper">
    <header class=" ">
        <div class="container-fluid">
            <nav class="navbar navbar-toggleable-md  fixed-top bg-inverse ">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">MENU</span>
                </button>
                <a class="navbar-brand" href="index.php"><img style="width: 40px; height:40px" src="uploads/logo.jpg" alt=""></a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="post.php">Posts </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="address.php">Our address </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mr-2">
                        <form class="form-inline" method="get">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search  posts " aria-label="Search" name="search">
                            <input type="submit" class="btn btn-outline-success my-2 my-sm-0" value="Search" style="cursor: pointer;" name="search-btn">
                        </form>
                    </ul>
                </div>
            </nav>
        </div><!-- end container-fluid -->
    </header><!-- end market-header -->
    <hr>
    <section class="section">
        <div class="container">
            <div class="row">

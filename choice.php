<?php 
session_start();
require_once('server.php');
if(!isset($_SESSION['userlogin']))
{
    header("Location: index.php");
}

if(isset($_GET['logout']))
{
    session_destroy();
    unset($_SESSION);
    header("Location: index.php");
}

$curUser=$_SESSION['userlogin'];

$query="SELECT* FROM users WHERE userName='".$curUser."' ";
$result=$db->query($query);
// $north=;
// $place=($db->query(('SELECT `pSight` FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);
// echo $place['pSight'];
while($row=$result->fetch(PDO::FETCH_ASSOC))
{
    $id=$row['id'];
    $username=$row['userName'];
    $sex=$row['sex'];
    $birthday=$row['birthday'];
    $hobby=$row['hobby'];
    $address=$row['address'];
    $sport=$row['sport'];
    $intro=$row['abouyou'];
    $email=$row['email'];
    $country=$row['country'];
    $image1=$row['image1'];
    $image2=$row['image2'];
    $image3=$row['image3'];
    $place=$row['place'];
    
    // if(!empty($row['place']))
    // {
    //     header('location:home.php');
    // }

   
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Unlock your road</title>
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="js/jQuery.SimpleCart.js"></script>
    <!-- <link rel="stylesheet" href="css/choice1.css" media="screen"> -->
    <!-- <link rel="stylesheet" href="css/choice2.css" media="screen and (min-width:1100px) and (max-width:1300px)"> -->
    <!-- <link rel="stylesheet" href="css/choice3.css" media="screen and (min-width:500px) and (max-width:1099px)"> -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/choice.js"></script>
    <style>
        body {
            position: relative;
        }

        .logo {
            position: sticky;
            width: 50px;
            height: 50px;
            /* margin: 25px; */
            margin-left: 29px;
            margin-top: 20px;
            display: inline-block;
        }

        #imglogo {
            /* position: sticky; */
            width: 50px;
            height: 50px;
            /* margin: 25px; */
        }

        #smileface {
            float: right;
            /* margin-right: 45px; */
            position: relative;
            right: 148px;
            cursor: pointer;
            top: 15px;
        }

        #next {
            position: relative;
            top: 10px;
            right: 20px;
            cursor: pointer;
            float: right;

        }

        #next:hover {
            border: none;
        }

        #skip {
            position: relative;
            top: 10px;
            left: 10px;
            cursor: pointer;
            float: left;
        }

        * {
            font-family: "???????????????";
        }

        #container {
            margin: 0 auto;
        }

        #skip_next {
            position: fixed;
            width: 100%;
        }



        #blockL {
            clear: both;
            width: 20%;
            line-height: 50px;
            float: left;
        }

        #blockR {
            clear: both;
            float: right;
            width: 70%;
            /*background-image: url('');*/
        }

        #header1 h3,
        #header2 h3,
        #header3 h3,
        #header4 h3 {
            padding: 100px 0px 0px 30px;
            cursor: pointer;
        }

        #header2,
        #header3,
        #header4,
        .Dir,
        .attration {
            display: none;
        }

        .Transportation,
        .Dir {
            position: absolute;
            width: 100px;
            background-color: rgb(183, 228, 199);
            line-height: 100px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            transition: background-color 1s;
            cursor: pointer;
            
            padding: 5px;
        }

        .Dir {
            transition: border-radius 1s;
        }

        .Transportation {
            border-radius: 50%;
            top: 100px;
        }

        .Dir {
            top: 250px;
        }

        #walk {
            left: 40%;
        }

        .col,
        .col-1,
        .col-10,
        .col-11,
        .col-12,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-auto,
        .col-lg,
        .col-lg-1,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-auto,
        .col-md,
        .col-md-1,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-auto,
        .col-sm,
        .col-sm-1,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-auto,
        .col-xl,
        .col-xl-1,
        .col-xl-10,
        .col-xl-11,
        .col-xl-12,
        .col-xl-2,
        .col-xl-3,
        .col-xl-4,
        .col-xl-5,
        .col-xl-6,
        .col-xl-7,
        .col-xl-8,
        .col-xl-9,
        .col-xl-auto {
            position: relative;
            width: 100%;
            padding-right: 33px;
            padding-left: 15px;
        }

        #car {
            left: 60%;
        }

        #n {
            left: 20%;
        }

        #c {
            left: 35%;
        }

        #s {
            left: 50%;
        }

        #e {
            left: 65%;
        }

        #islands {
            left: 80%;
        }

        .Region {
            /*    clear: both;*/
            margin: 0 auto;
            position: absolute;
            display: none;

        }

        #Region_r1 {
            top: 360px;
        }

        #Region_r2 {
            top: 450px;
        }

        .col-md-2 {
            width: 97px;
            background-color: rgb(183, 228, 199);
            line-height: 23px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 97%;
            transition: border-radius 2s;
            display: inline-flex;
            border: 1px solid rgb(178 199 188);
        }

        .card {
            display: block;
            float: right;
            width: 25%;
        }

        .c4 {
            display: none;
        }

        .s {
            font-size: 20px;
            cursor: pointer;
        }

        .color_choice {
            background-color: rgb(0, 191, 125);
        }

        .border_fadein {
            border-radius: 40%;
            border: 3px solid rgb(0, 191, 125);
        }

        .star_mousedown {
            color: burlywood;
            font-size: 20px;
        }

        li {
            list-style: none;
            font-size: 14px;
        }

        .card-text {
            font-size: 15px;
        }

        .btn_attration {
            position: absolute;
            top: 700px;
            /*????????????????????????????????????*/
            width: 100%;
            display: none;

        }

        .btn_next,
        .btn_previous {
            border-radius: 50%;
            height: 100px;
            width: 100px;
            cursor: pointer;
            background-color: rgba(183, 228, 199, 0.6);
            text-align: center;
            line-height: 90px;
            font-size: 50px;
        }

        .btn_next {
            float: right;
            right: 20px;
            position: absolute;
        }

        .btn_previous {
            float: left;
            margin: 0px 0px 0px 24px;
        }

        .intro_detail {
            margin: 0 auto;
            background-color: cadetblue;
            height: 550px;
            width: 800px;
            position: relative;
            top: 550px;
            display: none;
            box-shadow: 0px 0px 3px 3px rgba(0, 0, 0, 0.5);
        }

        .detail_img ul {
            position: relative;
            left: 15%;
        }

        .detail_img li {
            position: absolute;
            width: 100%;
        }

        .detail_img li img {
            width: 500px;
        }

        .detail_img ul li p {
            font-weight: bold;
            font-size: 20px;
            height: 50px;
        }

        .detail_img_link ul li a {
            text-indent: -9999px;
            text-decoration: none;
            border-radius: 7px;
            background-color: rgb(235, 255, 242);
            width: 14px;
            height: 14px;
        }

        .detail_img_link li {
            display: inline-flex;
        }

        /*??????????????????*/
        .detail_img_link {
            height: 30px;
            position: absolute;
            top: 330px;
            left: 320px;
        }

        /*??????????????????*/
        .detail_head {
            position: absolute;
            top: 300px;
            background-color: rgba(255, 255, 255, 0.6);
            width: 500px;
            text-align: center;
            padding: 5px;
        }

        .detail_txt {
            position: absolute;
            top: 350px;
            left: 18%;
            font-weight: bold;
        }

        .detail_txt a {
            color: aliceblue;
        }

        .detail_close {
            position: absolute;
            cursor: pointer;
            right: 0%;
            width: 50px;
            height: 50px;
            text-align: center;
            background-color: rgb(240, 248, 255);
            line-height: 40px;
            font-size: 30px;
        }

        .btn_detail {
            background-color: cadetblue;
            padding: 10px;
            border-radius: 10px;
            cursor: pointer;
        }

        .target {
            background-color: rgb(55, 181, 100);
        }

        .btn-outline-success {
            background-color: rgb(183, 228, 199);

            border: 4px solid white;
            border-radius: 18px;
            width: 80px;
            height: 40px;
            text-align: center;
            font-size: 14px;

            color: #52B788;
        }

        .btn-outline-success:hover {
            background-color: #52B788;
            border: 4px solid #52B788;

        }

        .bi-emoji-heart-eyes {
            color: #fedf30;

        }

        .bi-emoji-heart-eyes:hover {
            color: #52B788;
        }

        .btn-danger {
            height: 23px;
            font-size: 7px;
            position: absolute;
            height: 23px;
            font-size: 7px;
            right: 21px;
            right: 8px;
            color: #fff;
            background-color: #e9d526;
            border-color: #f6f3f3;
        }


        .cart-column {
            display: contents;
        }

        .btn-primary {
            color: #fff;
            background-color: #72c3bb;
            border-color: #91efe6;
        }

        .btn-primary:hover,
        .btn-primary:hover,
        .btn-primary:active {
            color: #fff;
            background-color: #72c3bb;
            border-color: #91efe6;
        }

        .cart-total-title {
            float: right;
            right: 107px;
            position: absolute;
        }

        .card-deck {
            /* display: table; */
            width: 94%;
            margin: 0, auto;
            margin: 0 auto;
            position: absolute;
            left: -84px;
            top: 566px;
            display: none;
        }

        .btn-group-sm>.btn,
        .btn-sm {
            padding: .25rem .5rem;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: 1.2rem;
            background-color: #b9eae5;
            border-color: #f8fdfd;
        }

        .swal-overlay--show-modal .swal-modal {
            opacity: 1;
            pointer-events: auto;
            box-sizing: border-box;
            -webkit-animation: showSweetAlert .3s;
            animation: showSweetAlert .3s;
            will-change: transform;
            width: 25%;
            /* font-size: 26px; */
        }

        .swal-text {
            font-size: 25px;
            position: relative;
            float: none;
            line-height: normal;
            vertical-align: top;
            text-align: left;
            display: inline-block;
            margin: 0;
            padding: 0 10px;
            font-weight: 400;
            color: rgba(0, 0, 0, .64);
            max-width: calc(100% - 20px);
            overflow-wrap: break-word;
            box-sizing: border-box;
        }

        #add-cart.btn:hover {
            color: burlywood;
        }

        .col-md-2:hover {
            cursor: pointer;
        }

    </style>

</head>

<body>
    <div id="container">

        <!--skip???next-->
        <div id="skip_next">

        </div>
        <div class="logo">
            <img src="img/web_logo.png" id="imglogo"></img>
        </div>
        <input type="button" class="btn-outline-success" data-toggle="modal" data-target="#exampleModalCenter" id="next" value="Next">
    </div>
    <form action="" method="POST">
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">??????????????????</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <section class="container content-section">

                        <!-- <div class="cart-row"> -->
                        <!-- <span class="cart-item cart-header cart-column">??????</span> -->
                        <!-- <span class="cart-price cart-header cart-column">PRICE</span> -->
                        <!-- <span class="cart-quantity cart-header cart-column">QUANTITY</span> -->
                        <!-- </div> -->
                        <div class="cart-items">
                        </div>
                        <!-- <div class="cart-total">
                                <span class="cart-total-number" style="float: right;">0</span>
                                <strong class="cart-total-title" style="float: right;">??????</strong>

                            </div> -->
                        <!-- <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button> -->
                    </section>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">??????
                        </button>
                        <!-- <button type="button" name="savebtn" class="btn btn-primary"></button> -->
                        <input type="button" name="savebtn" id="savebtn" class="btn btn-primary" value="??????">
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div id="blockR">
        <!--????????????-->
        <div class='row'>
            <img class="Transportation" id="walk" src="car.png" alt="">
            <img class="Transportation" id="car" src="walk.png" alt="">
        </div>
        
        <!--??????-->
        <div class="row">
            <div class="Dir" id="n" cid=' <?php $place=($db->query(('SELECT `pArea` FROM `place` WHERE `pArea`=1 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pArea'];?>'>
                <?php $place=($db->query(('SELECT `pAreaName` FROM `place` WHERE `pArea`=1 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pAreaName'];
                             ?>
            </div>
            <div class="Dir" id="c" cid=' <?php $place=($db->query(('SELECT `pArea` FROM `place` WHERE `pArea`=2 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pArea'];?>'>
                <?php $place=($db->query(('SELECT `pAreaName` FROM `place` WHERE `pArea`=2 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pAreaName'];?>
            </div>
            <div class="Dir" id="s" cid=' <?php $place=($db->query(('SELECT `pArea` FROM `place` WHERE `pArea`=3 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pArea'];?>'>
                <?php $place=($db->query(('SELECT `pAreaName` FROM `place` WHERE `pArea`=3 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pAreaName'];?>
            </div>
            <div class="Dir" id="e" cid=' <?php $place=($db->query(('SELECT `pArea` FROM `place` WHERE `pArea`=4 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pArea'];?>'>
                <?php $place=($db->query(('SELECT `pAreaName` FROM `place` WHERE `pArea`=4 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pAreaName'];?>
            </div>
            <div class="Dir" id="islands" cid=' <?php $place=($db->query(('SELECT `pArea` FROM `place` WHERE `pArea`=5 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pArea'];?>'>
                <?php $place=($db->query(('SELECT `pAreaName` FROM `place` WHERE `pArea`=5 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pAreaName'];?>
            </div>
        </div>

        <!--??????-->
        <div class="row Region" id="Region_r1">
            <div class="col-md-2" id="p1" ctid=' <?php $place=($db->query(('SELECT `pCity` FROM `place` WHERE `pArea`=1 AND  `pCity`=1 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pCity'];?>'><?php 
                        $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND  `pCity`=1'))->fetch(PDO::FETCH_ASSOC);
                        echo $place['pCityName'];
                        ?></div>
            <div class="col-md-2" id="p2" ctid=' <?php $place=($db->query(('SELECT `pCity` FROM `place` WHERE `pArea`=1 AND  `pCity`=2 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pCity'];?>'>
                <?php 
                        $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=2 '))->fetch(PDO::FETCH_ASSOC);
                        echo $place['pCityName'];
                        ?>
            </div>
            <div class="col-md-2" id="p3" ctid=' <?php $place=($db->query(('SELECT `pCity` FROM `place` WHERE `pArea`=1 AND  `pCity`=3 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pCity'];?>'> <?php 
                        $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=3 '))->fetch(PDO::FETCH_ASSOC);
                        echo $place['pCityName'];
                        ?></div>
        </div>
        <div class="row Region" id="Region_r2">
            <div class="col-md-2" id="p4" ctid=' <?php $place=($db->query(('SELECT `pCity` FROM `place` WHERE `pArea`=1 AND  `pCity`=4 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pCity'];?>'> <?php 
                        $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=4 '))->fetch(PDO::FETCH_ASSOC);
                        echo $place['pCityName'];
                        ?></div>
            <div class="col-md-2" id="p5" ctid=' <?php $place=($db->query(('SELECT `pCity` FROM `place` WHERE `pArea`=1 AND  `pCity`=5 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pCity'];?>'> <?php 
                        $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=5 '))->fetch(PDO::FETCH_ASSOC);
                        echo $place['pCityName'];
                        ?></div>
            <div class="col-md-2" id="p6" ctid=' <?php $place=($db->query(('SELECT `pCity` FROM `place` WHERE `pArea`=1 AND  `pCity`=6 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pCity'];?>'> <?php 
                        $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=6 '))->fetch(PDO::FETCH_ASSOC);
                        echo $place['pCityName'];
                        ?></div>

        </div>

    </div>

    <!--??????-->
    <form action="" method="POST">
        <div class="card-deck attration">

            <div class="card" id="c4">
                <img class="card-img-top" src="<?php 
                        $place=($db->query('SELECT `pSightImg` FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND  `pSight`=1'))->fetch(PDO::FETCH_ASSOC);
                        echo $place['pSightImg'];
                        ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>
                    <a class="btn_detail btn_de4">????????????</a>
                    <small class="text-muted">????????????
                        <input type="button" name="add-cart" cttid='<?php $place=($db->query(('SELECT `pSight` FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pSight'];?>' id="add-cart" class="btn" value='???'></small>

                </div>
                <div class="card-footer">

                </div>
            </div>
            <div class="card" id="c3">
                <img class="card-img-top" src="<?php 
                        $place=($db->query('SELECT `pSightImg` FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND  `pSight`=3'))->fetch(PDO::FETCH_ASSOC);
                        echo $place['pSightImg'];
                        ?>" alt="Card image cap">
                <div class="card-body">

                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>
                    <a class="btn_detail btn_de3">????????????</a>
                    <small class="text-muted">????????????
                        <input type="button" name="add-cart" cttid=' <?php $place=($db->query(('SELECT `pSight` FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pSight'];?>' id="add-cart" class="btn" value='???'></small>
                </div>
                <div class="card-footer">

                </div>
            </div>
            <div class="card" id="c2">
                <img class="card-img-top" src="<?php 
                        $place=($db->query('SELECT `pSightImg` FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND  `pSight`=3'))->fetch(PDO::FETCH_ASSOC);
                        echo $place['pSightImg'];
                        ?>">
                <div class="card-body">

                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>
                    <a class="btn_detail btn_de2">????????????</a>
                    <small class="text-muted">????????????
                        <input type="button" name="add-cart" cttid=' <?php $place=($db->query(('SELECT `pSight` FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pSight'];?>' id="add-cart" class="btn" value='???'></small>
                </div>
                <div class="card-footer">

                </div>
            </div>
            <div class="card " id="c1">
                <img class="card-img-top" src="<?php 
                        $place=($db->query('SELECT `pSightImg` FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND  `pSight`=4'))->fetch(PDO::FETCH_ASSOC);
                        echo $place['pSightImg'];
                        ?>" alt="Card image cap">
                <div class="card-body">


                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>
                    <a class="btn_detail btn_de1">????????????</a>
                    <small class="text-muted">????????????
                        <input type="button" name="add-cart" cttid=' <?php $place=($db->query(('SELECT `pSight` FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pSight'];?>' id="add-cart" class="btn" value='???'></small>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </form>
    <div class="btn_attration">
        <div class="btn_previous">???</div>
        <div class="btn_next">???</div>
    </div>

    <div class="intro_detail">
        <div class="detail_img">
            <ul>
                <li>
                    <img src="place/yilan/ban_chi_be_chi/20210317191138_98.jpg">
                    <p class="detail_head"></p>
                </li>
                <li>
                    <img src="place/yilan/ban_chi_be_chi/20210317191206_83.jpg">
                    <p class="detail_head">??????????????????</p>
                </li>
                <li>
                    <img src="place/yilan/ban_chi_be_chi/20210317191312_49.jpg">
                    <p class="detail_head">????????????</p>
                </li>
                <li>
                    <img src="place/yilan/ban_chi_be_chi/20210317191406_15.jpg">
                    <p class="detail_head">??????????????????</p>
                </li>
                <li>
                    <img src="place/yilan/ban_chi_be_chi/20210317191612_71.jpg">
                    <p class="detail_head">????????????</p>
                </li>
                <li>
                    <img src="place/yilan/ban_chi_be_chi/20210318095257_40.jpg">
                    <p class="detail_head">????????????</p>
                </li>
            </ul>
        </div>
        <div class="detail_img_link">
            <ul>
                <li><a href="" class="target">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li><a href="">5</a></li>
                <li><a href="">6</a></li>
            </ul>
        </div>
        <div class="detail_txt">
            <p>????????????????????????$200?????????6??????????????????<br>??????????????????????????????????????????????????????????????????</p>
            <br>
            <a href="https://fullfenblog.tw/bambi-land/" target="_blank">????????????</a>
        </div>
        <div class="detail_close">x</div>
    </div>

    <!--        <div class="intro_detail"></div>-->

    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        /*$("??????:not(.class??????)")>>????????????????????????class????????????????????????
            ??????:$("p:not(.intro)").css("background-color","yellow");
            >>??????<p class="intro"></p>????????????????????????p????????????????????????*/

        $(document).ready(function() {
            var added;
            var selected = false;
            $('#savebtn.btn.btn-primary').click(function() {
                console.log($('.cart-items').innerText);
                if (added != true) {
                    swal({
                        title: "Can't save?",
                        text: "??????????????????",
                        icon: "warning",
                        // buttons: true,
                        dangerMode: true,
                    })
                }
            });
            $('#add-cart.btn').click(function() {

                if (selected == false) {
                    swal({
                        title: "You've already choose place",
                        text: "?????????????????????",
                        icon: "warning",
                        // buttons: true,
                        dangerMode: true,
                    })
                }

            });
            var $cid, $ctid, $cttid;
            $('body').delegate('.Dir', 'click', function(e) {
                e.preventDefault();
                $cid = $(this).attr('cid');
                // alert(cid);

                $('body').delegate('.col-md-2', 'click', function(e) {
                    e.preventDefault();
                    $ctid = $(this).attr('ctid');

                    $('body').delegate('#add-cart.btn', 'click', function(e) {
                        added = true;
                        e.preventDefault();
                        $cttid = $(this).attr('cttid');
                        swal({
                            title: "Are you sure?",
                            text: "???????????????????????????????",
                            // icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        }).then((willDelete) => {
                            if (willDelete) {
                                swal("????????????????????????????????????Next???????????????", {
                                    icon: "success",
                                });
                                $('#next').css('background', 'red');

                                var $test = $('.cart-items')
                                console.log();
                                if ($test.children().length != 0) {
                                    swal({
                                        title: "You've already choose place",
                                        text: "?????????????????????",
                                        icon: "warning",
                                        // buttons: true,
                                        dangerMode: true,
                                    })
                                    // console.log(2);
                                } else if ($test.children().length == 0) {
                                    sendplace($cid, $ctid, $cttid);

                                }
                            } else {
                                swal("?????????");
                            }
                        });

                    })
                })
            })



            var $block = "n"; //??????????????????
            var $transport = "car"; //????????????????????????
            var $left = '20%'; //?????????????????????????????????
            var $place = 'p1'; //???????????????????????????
            var $play_where = '??????'; //?????????????????????????????????
            $('#c4').hide();
            //??????
            $('#car').click(function() {
                $transport = "car";
            });
            //?????????
            $('#walk').click(function() {
                $transport = "walk";
            });

            //?????????????????????????????????
            $('.Transportation').click(function() {
                // console.log($('#p1').text);
                if ($transport == "car") {
                    console.log("car");
                    //?????????????????????
                    $("#walk").hide("slow");
                    //????????????????????????
                    $('#header1 h3').click(function() {

                        $("#walk").fadeIn(1000);
                        $('#' + $transport).animate({
                            'left': '60%',
                            'top': '100px'
                        }, 1000, 'linear');
                    });
                } else {
                    console.log("walk");
                    $("#car").hide("slow");

                    //????????????????????????
                    $('#header1 h3').click(function() {
                        $("#car").fadeIn(1000);
                        $('#' + $transport).animate({
                            'left': '40%',
                            'top': '100px'
                        }, 1000, 'linear');
                    });
                }

                //??????????????????
                $('#header2').slideDown(2000);
                //??????????????????????????????
                $('.Dir').fadeIn(2000).hover(function() {
                    $(this).addClass('color_choice');
                }, function() {
                    $(this).removeClass('color_choice');
                });

                //???????????????????????????????????????????????????
                $(this).animate({
                    'left': $left,
                    'top': '150px'
                }, 2500, 'linear');

                //????????????????????????????????????????????????????????????
                $('.Dir').click(function() {
                    $('#' + $block).removeClass('border_fadein');
                    $('#header3').slideDown(2000);
                    $('.Region').fadeIn(2000);
                });

                //??????????????????????????????????????????(????????????????????????????????????????????????????????????????????????)
                $('#n').click(function() {
                    $left = '20%';
                    //????????????????????????
                    $('#' + $transport).animate({
                        'left': $left
                    }, 1000, 'linear');
                    //??????????????????
                    if ($block == "e" || $block == "islands") {
                        // console.log("n");
                        $('#p3').fadeIn(500);
                        $('#p4').fadeIn(500);
                        $('#p5').fadeIn(500);
                        $('#p6').fadeIn(500);
                    } else if ($block == "c" || $block == "s") {
                        $('#p6').fadeIn(500);
                    }
                    $block = "n";
                    //??????????????????
                    $name1 = ('<?php 
                                $place = ($db -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=1 ' )) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name2 = ('<?php 
                                    $place = ($db -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=2 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name3 = ('<?php 
                                    $place = ($db 
                                    -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=3 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name4 = ('<?php 
                                    $place = ($db 
                                    -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=4 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name5 = ('<?php 
                                    $place = ($db 
                                    -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=5 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name6 = ('<?php 
                                    $place = ($db 
                                    -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=6 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $('#p1').text($name1);
                    $('#p2').text($name2);
                    $('#p3').text($name3);
                    $('#p4').text($name4);
                    $('#p5').text($name5);
                    $('#p6').text($name6);

                });
                $('#c').click(function() {
                    $left = '35%';
                    //????????????????????????
                    $('#' + $transport).animate({
                        'left': $left
                    }, 1000, 'linear');
                    if ($block == "e" || $block == "islands") {
                        console.log('c');
                        $('#p3').fadeIn(500);
                        $('#p4').fadeIn(500);
                        $('#p5').fadeIn(500);
                    } else if ($block == "n") {
                        $('#p6').fadeOut(500);
                    }
                    $block = "c";
                    $name1 = ('<?php 
                                $place = ($db -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=2 AND `pCity`=1 ' )) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name2 = ('<?php 
                                    $place = ($db -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=2 AND `pCity`=2 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name3 = ('<?php 
                                    $place = ($db 
                                    -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=2 AND `pCity`=3 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name4 = ('<?php 
                                    $place = ($db 
                                    -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=2 AND `pCity`=4 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name5 = ('<?php 
                                    $place = ($db 
                                    -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=2 AND `pCity`=5 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');

                    $('#p1').text($name1);
                    $('#p2').text($name2);
                    $('#p3').text($name3);
                    $('#p4').text($name4);
                    $('#p5').text($name5);

                });
                $('#s').click(function() {
                    $left = '50%';
                    //????????????????????????
                    $('#' + $transport).animate({
                        'left': $left
                    }, 1000, 'linear');
                    if ($block == "e" || $block == "islands") {
                        console.log("s");
                        $('#p3').fadeIn(500);
                        $('#p4').fadeIn(500);
                        $('#p5').fadeIn(500);

                    } else if ($block == "n") {
                        $('#p6').fadeOut(500);
                    }
                    $block = "s";
                    //??????????????????
                    $name1 = ('<?php 
                                    $place = ($db -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=3 AND `pCity`=1 ' )) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name2 = ('<?php 
                                    $place = ($db -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=3 AND `pCity`=2 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name3 = ('<?php 
                                    $place = ($db 
                                    -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=3 AND `pCity`=3 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name4 = ('<?php 
                                    $place = ($db 
                                    -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=3 AND `pCity`=4 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name5 = ('<?php 
                                    $place = ($db 
                                    -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=3 AND `pCity`=5 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');

                    $('#p1').text($name1);
                    $('#p2').text($name2);
                    $('#p3').text($name3);
                    $('#p4').text($name4);
                    $('#p5').text($name5);
                });
                $('#e').click(function() {
                    $left = '65%';
                    //????????????????????????
                    $('#' + $transport).animate({
                        'left': $left
                    }, 1000, 'linear');
                    $block = "e";
                    //??????????????????
                    $name1 = ('<?php 
                                    $place = ($db -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=4 AND `pCity`=1 ' )) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name2 = ('<?php 
                                    $place = ($db -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=4 AND `pCity`=2 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');


                    $('#p1').text($name1);
                    $('#p2').text($name2);
                    $('#p3').fadeOut(500);
                    $('#p4').fadeOut(500);
                    $('#p5').fadeOut(500);
                    $('#p6').fadeOut(500);
                });
                $('#islands').click(function() {
                    $left = '80%';
                    $('#' + $transport).animate({
                        'left': $left
                    }, 1000, 'linear');
                    $block = "islands";
                    //??????????????????
                    $name1 = ('<?php 
                                    $place = ($db -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=5 AND `pCity`=1 ' )) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name2 = ('<?php 
                                    $place = ($db -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=5 AND `pCity`=2 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');


                    $('#p1').text($name1);
                    $('#p2').text($name2);
                    $('#p3').fadeOut(500);
                    $('#p4').fadeOut(500);
                    $('#p5').fadeOut(500);
                    $('#p6').fadeOut(500);
                });

                //??????????????????????????????????????????????????????????????????????????????

                $('.Dir').click(function() {
                    $(this).addClass('border_fadein');
                    $('.Region').animate({
                        'left': $left
                    }, 1000, 'linear').click(function() {
                        $('#header4').slideDown(2000);
                        $('.attration').fadeIn(2000);
                        $('.btn_attration').slideDown(2000);
                    });
                });
                /*??????.Region??????href????????????????????????div*/

                //?????????????????????????????????????????????
            }).hover(function() {
                $(this).animate({
                    'left': '-=2%'
                }, 500, 'linear').animate({
                    'left': '+=2%'
                }, 500, 'linear').addClass('color_choice');
            }, function() {
                $(this).removeClass('color_choice');
            });
            //?????????????????????????????????_??????

            //????????????????????????
            $('.col-md-2').click(function(e) {
                $('#' + $place).removeClass('border_fadein');
                $(this).addClass('border_fadein');
            });

            //??????????????????...
            var $play_title = ' ';
            var $Brief_description = " ";
            var $play_title2 = ' ';
            var $Brief_description2 = " ";
            var $play_title3 = " ";
            var $Brief_description3 = " ";
            var $play_title4 = " ";
            var $Brief_description4 = " ";
            var $play_title5 = " ";
            var $Brief_description5 = " ";
            var $play_title6 = " ";
            var $Brief_description6 = " ";
            $name = '';
            var $old_img;
            var $new_img;
            var $old_img2;
            var $new_img2;
            var $old_img3;
            var $new_img3;
            var $new_img4, $new_img5, $new_img6;
            var like = false;
            var $go_to;

            $('#p1').click(function() {
                $place = 'p1';
                $('.card-deck').fadeIn(1000);
                if ($block == 'n') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=1 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=1 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=1 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=1 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=1 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=1 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=1 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=1 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=1 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>?????????</span>.4???";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>?????????</span>.2???";
                    $Brief_description4 = $decs4;


                    //???
                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="<?php 
                                             $place=($db->query('SELECT `pSightImg` FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND  `pSight`=1'))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightImg'];
                                            ?>">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="<?php 
                                             $place=($db->query('SELECT `pSightImg` FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND  `pSight`=2'))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightImg'];
                                            ?>">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="<?php 
                                             $place=($db->query('SELECT `pSightImg` FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND  `pSight`=3'))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightImg'];
                                            ?>">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="<?php 
                                             $place=($db->query('SELECT `pSightImg` FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND  `pSight`=4'))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightImg'];
                                            ?>">`
                    );
                } else if ($block == 'e') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=4 AND `pCity`=1 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=4 AND `pCity`=1 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=4 AND `pCity`=1 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=4 AND `pCity`=1 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=4 AND `pCity`=1 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=4 AND `pCity`=1 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=4 AND `pCity`=1 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=4 AND `pCity`=1 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=4 AND `pCity`=1 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>?????????</span>.4???";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>?????????</span>.2???";
                    $Brief_description4 = $decs4;

                    //???
                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/hualian/feicuigu/1_QxywYShoj8YBjH7wKuP8rw.jpeg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/hualian/liyutan/play_on_liyutan.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/hualian/qixingtan/1592752528-3383462225.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/hualian/yunshanshui/1406466766-1697929898.jpg">`
                    );

                } else if ($block == 'c') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=2 AND `pCity`=1 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=1 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=1 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=1 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=1 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=1 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=1 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=1 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=1 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>?????????</span>.4???";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>?????????</span>.2???";
                    $Brief_description4 = $decs4;
                    //???
                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Miaoli/Flying_Cow_Ranch/%E9%A3%9B%E7%89%9B.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/Miaoli/Houlong_Crossing_Tunnel/%E5%BE%8C%E9%BE%8D%E9%81%8E%E6%B8%AF%E9%9A%A7%E9%81%93.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Miaoli/NanZhuang_Old_Street/%E5%8D%97%E5%BA%84%E8%80%81%E8%A1%97.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/Miaoli/Sanyi_Wood_Sculpture_Museum/%E6%9C%A8%E9%9B%95.jpg">`
                    );

                } else if ($block == 's') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=3 AND `pCity`=1 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=1 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=1 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=1 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=1 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=1 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=1 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=1 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=1 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>?????????</span>.4???";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>?????????</span>.2???";
                    $Brief_description4 = $decs4;
                    //???
                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Chiayi/Alishan_Forest_Recreation_Area/%E9%98%BF%E9%87%8C%E5%B1%B1%E5%9C%8B%E5%AE%B6%E6%A3%AE%E6%9E%97%E9%81%8A%E6%A8%82%E5%9C%92.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/Chiayi/Crystal_High_Heel_Shaped_Church/%E9%AB%98%E8%B7%9F%E9%9E%8B%E6%95%99%E5%A0%82.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Chiayi/Dongshi_Fisherman's_Wharf/%E6%9D%B1%E7%9F%B3%E6%BC%81%E4%BA%BA%E7%A2%BC%E9%A0%AD.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/Chiayi/Fenqihu_Old_Street/%E5%A5%AE%E8%B5%B7%E6%B9%96%E8%80%81%E8%A1%97.jpg">`
                    );

                } else if ($block == 'islands') {
                    $play_where = ('<?php 
                                        $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=5 AND `pCity`=1 '))->fetch(PDO::FETCH_ASSOC);
                                         echo $place['pCityName'];
                                        ?>');
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=5 AND `pCity`=1 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=5 AND `pCity`=1 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=5 AND `pCity`=1 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=5 AND `pCity`=1 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=5 AND `pCity`=1 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=5 AND `pCity`=1 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=5 AND `pCity`=1 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=5 AND `pCity`=1 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>?????????</span>.4???";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>?????????</span>.2???";
                    $Brief_description4 = $decs4;
                    //???
                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Quemoy/p1/p1_1.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/Quemoy/p2/p2_3.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Quemoy/p3/p3_1.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/Quemoy/p4/p4_3.jpg">`
                    );

                }
            });

            $('#p2').click(function() {
                $place = 'p2';
                $('.card-deck').fadeIn(1000);
                if ($block == 'e') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=4 AND `pCity`=2 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=4 AND `pCity`=2 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')

                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=4 AND `pCity`=2 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')


                    $Brief_description4 = $decs4;
                    $play_title = $name1 + '<span style="color: burlywood">?????????</span>???';
                    $Brief_description = $decs1;

                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Taitung/Dulan_sugar_factory/20180904161820_24.jpg">`
                    )

                } else if ($block == 'n') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=2 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=2 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=2 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=2 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=2 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=2 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=2 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=2 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=2 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>?????????</span>.4???";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>?????????</span>.2???";
                    $Brief_description4 = $decs4;

                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Keelung/Heping_Island_Park/20190718185546_33.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/Keelung/Lover_Lake_Park/20200914141839_100.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Keelung/Marine_Science_Technology_Museum/20190731184338_61.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/Keelung/TidelandPark/20200417130140_40.jpg">`
                    );

                } else if ($block == 'c') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=2 AND `pCity`=2 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=2 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=2 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=2 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=2 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=2 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=2 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=2 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=2 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>?????????</span>.4???";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>?????????</span>.2???";
                    $Brief_description4 = $decs4;
                    //???
                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Taichung/Wuling_Farm/%E6%AD%A6%E9%99%B5%E8%BE%B2%E5%A0%B4.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/Taichung/Fengjia_Night_Market/%E6%98%8E%E5%80%AB%E8%9B%8B%E9%A4%85.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Taichung/Houfeng_Bikeway/%E5%90%8E%E8%B1%90%E9%90%B5%E9%A6%AC%E9%81%93.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/Taichung/Dajia_Jenn_Lann_Temple/%E5%A4%A7%E7%94%B2%E9%8E%AE%E7%80%BE%E5%AE%AE.jpg">`
                    );

                } else if ($block == 's') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=3 AND `pCity`=2 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=2 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=2 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=2 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=2 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=2 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=2 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=2 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=2 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>?????????</span>.4???";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>?????????</span>.2???";
                    $Brief_description4 = $decs4;
                    //???
                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Tainan/Anping_Old_Street/%E5%AE%89%E5%B9%B3%E5%8F%A4%E5%A0%A1.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/Tainan/Ch_Mei_Museum/%E5%A5%87%E7%BE%8E%E5%8D%9A%E7%89%A9%E9%A4%A8.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Tainan/Chigu_Salt_Mountain/%E9%B9%BD%E5%B1%B1%E5%85%A8%E6%99%AF.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/Tainan/Wanpi_World_Safari_Zoo/%E9%95%B7%E9%A0%B8%E9%B9%BF.jpg">`
                    );

                } else if ($block == 'islands') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=5 AND `pCity`=2 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=5 AND `pCity`=2 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=5 AND `pCity`=2 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=5 AND `pCity`=2 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=5 AND `pCity`=2 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=5 AND `pCity`=2 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=5 AND `pCity`=2 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=5 AND `pCity`=2 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=5 AND `pCity`=2 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>?????????</span>.4???";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>?????????</span>.2???";
                    $Brief_description4 = $decs4;
                    //???
                    $old_img = $('#c1 img');
                    $new_img = $(`<img class="card-img-top" src="place/Matsu/p1/p1_3.jpg">`);
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(`<img class="card-img-top" src="place/Matsu/p2/p2_3.jpg">`);
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(`<img class="card-img-top" src="place/Matsu/p3/p3_4.jpg">`);
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(`<img class="card-img-top" src="place/Matsu/p4/p4_1.jpg">`);

                }
            });
            $('#p3').click(function() {
                $place = 'p3';
                $('.card-deck').fadeIn(1000);
                if ($block == 'n') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=3 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=3 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=3 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=3 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=3 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=3 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=3 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=3 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=3 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>?????????</span>.4???";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>?????????</span>.2???";
                    $Brief_description4 = $decs4;

                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/taipei/Restaurant_with_view_on_roof/20200416131716_52.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/taipei/True_Love_Peach_Blossom/20210503090103_6.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Keelung/Heping_Island_Park/20190718185546_33.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/taipei/Mingyang_Creeping_Leisure_Farm/20190330192123_60.jpg">`
                    );

                } else if ($block == 'c') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=2 AND `pCity`=3 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=3 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=3 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=3 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=3 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=3 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=3 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=3 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=3 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>?????????</span>.4???";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>?????????</span>.2???";
                    $Brief_description4 = $decs4;
                    //???
                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Changhua/Baguashan_Great_Buddha_Scenic_Area/%E5%85%AB%E5%8D%A6%E5%B1%B1%E5%A4%A7%E4%BD%9B%E9%A2%A8%E6%99%AF%E5%8D%80.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/Changhua/Changhua_RailwayRoundHouse/%E5%BD%B0%E5%8C%96%E6%89%87%E5%BD%A2%E8%BB%8A%E5%BA%AB.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Changhua/Lugang_Old_Street/%E9%B9%BF%E6%B8%AF%E8%80%81%E8%A1%97.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/Changhua/Xihu_Sugar_Factory_Wufen_Station/%E6%BA%AA%E6%B9%96%E7%B3%96%E5%BB%A0.jpg">`
                    );

                } else if ($block == 's') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=3 AND `pCity`=3 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=3 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=3 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=3 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=3 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=3 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=3 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=3 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=3 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>?????????</span>.4???";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>?????????</span>.2???";
                    $Brief_description4 = $decs4;
                    //???
                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Kaohsiung/Cijin/%E6%97%97%E6%B4%A5%E5%BD%A9%E8%99%B9%E6%95%99%E5%A0%82.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/Kaohsiung/LoveRiver/%E6%84%9B%E6%B2%B3.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Kaohsiung/Meinong/%E7%BE%8E%E6%BF%83%E6%B9%96.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/Kaohsiung/ThePier2ArtCenter/%E9%AB%98%E9%9B%84%E5%A4%A7%E6%B8%AF%E6%A9%8B.jpg">`
                    );

                }
            });
            $('#p4').click(function() {
                $place = 'p4';
                $('.card-deck').fadeIn(1000);
                if ($block == 'n') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=4 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=4 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=4 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=4 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=4 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=4 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=4 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=4 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=4 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>?????????</span>.4???";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>?????????</span>.2???";
                    $Brief_description4 = $decs4;

                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/newTP/Fishing_Port_Crab_Theme_Park/20210506170018_37.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/newTP/Bitan/20210319111207_78.jpg">`);
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/newTP/Yehliu_Ocean_World/20210122134628_16.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/newTP/Yunxian_Paradise/20210113232340_84.jpg">`
                    );
                    $new_img5 = $(
                        `<img class="card-img-top" src="place/newTP/Shen'ao_Rail_Bike/20181225235552_79.jpg">`
                    );
                    $new_img6 = $(
                        `<img class="card-img-top" src="place/newTP/Wang_Wang_Digua_Garden_Industry_Story_House/20210505194726_6.jpg">`
                    );

                } else if ($block == 'c') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=2 AND `pCity`=4 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=4 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=4 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=4 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=4 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=4 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=4 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=4 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=4 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>?????????</span>.4???";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>?????????</span>.2???";
                    $Brief_description4 = $decs4;
                    //???
                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Nantou/Cingjing_Farm/%E6%B8%85%E5%A2%83%E8%BE%B2%E5%A0%B4.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/Nantou/Feeling18/18%E5%BA%A6C%E5%B7%A7%E5%85%8B%E5%8A%9B%E5%B7%A5%E6%88%BF1.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Nantou/Sun_Moon_Lake/%E6%97%A5%E6%9C%88%E6%BD%AD.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/Nantou/Jiji_Railway_Station/%E9%9B%86%E9%9B%86%E7%81%AB%E8%BB%8A%E7%AB%99.jpg ">`
                    );

                } else if ($block == 's') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=3 AND `pCity`=4 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=4 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=4 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=4 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=4 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=4 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=4 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=4 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=4 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>?????????</span>.4???";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>?????????</span>.2???";
                    $Brief_description4 = $decs4;
                    //???
                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Pingtung/LiuduiHakkaCulturalPark/%E5%85%AD%E5%A0%86%E5%AE%A2%E5%AE%B6%E6%96%87%E5%8C%96%E5%9C%92%E5%8D%80.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/Pingtung/LiuqiuIsland/%E5%B0%8F%E7%90%89%E7%90%83.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Pingtung/NationalMuseumofMarineBiology_Aquarium/%E9%AF%A8%E9%AD%9A%E8%A6%AA%E6%B0%B4%E5%BB%A3%E5%A0%B4.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/Pingtung/ParadiseDeer/%E6%A2%85%E8%8A%B1%E9%B9%BF.jpg">`
                    );

                }

            });
            $('#p5').click(function() {
                $place = 'p5';
                $('.card-deck').fadeIn(1000);
                if ($block == 'n') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=5 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=5 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=5 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=5 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=5 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=5 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=5 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=5 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=5 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>?????????</span>.4???";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>?????????</span>.2???";
                    $Brief_description4 = $decs4;

                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Taoyuan/GOGOBOX/20180426152949_90.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/Taoyuan/Lixiao_Story_Forest/1532139328-806275860_l.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Taoyuan/Luoyusong_Avenue/20171226212410_20.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/Taoyuan/MaruyamaCoffee/20190625103419_81.jpg">`
                    );

                } else if ($block == 'c') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=2 AND `pCity`=5 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=5 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=5 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=5 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=5 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=5 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=5 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=5 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=5 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>?????????</span>.4???";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>?????????</span>.2???";
                    $Brief_description4 = $decs4;
                    //???
                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Yunlin/Five_Years_Chitose_Park/%E4%BA%94%E5%B9%B4%E5%8D%83%E6%AD%B2%E5%85%AC%E5%9C%92.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/Yunlin/Yanping_Old_Street/%E5%BB%B6%E5%B9%B3%E8%80%81%E8%A1%97.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Yunlin/Ylstoryhouse/%E9%9B%B2%E6%9E%97%E6%95%85%E4%BA%8B%E9%A4%A8%E9%96%80%E5%8F%A3.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/Yunlin/Yunlin_Palm_Puppets_Museum/%E6%88%B2%E5%81%B6.jpg">`
                    );

                } else if ($block == 's') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=3 AND `pCity`=5 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=5 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=5 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=5 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=5 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=5 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=5 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=5 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=5 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>?????????</span>.4???";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>?????????</span>.2???";
                    $Brief_description4 = $decs4;
                    //???
                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Penghu/AimenBeach/%E9%9A%98%E9%96%80%E6%B2%99%E7%81%98.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/Penghu/PenghuGreatBridge/%E6%BE%8E%E6%B9%96%E8%B7%A8%E6%B5%B7%E5%A4%A7%E6%A9%8B.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Penghu/PenghuTianhougong/%E6%BE%8E%E6%B9%96%E5%A4%A9%E5%90%8E%E5%AE%AE.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/Penghu/Submarinepostbox/%E6%BE%8E%E6%B9%96%E6%B5%B7%E5%BA%95%E9%83%B5%E7%AD%92.jpg">`
                    );

                }
            });
            $('#p6').click(function() {
                $place = 'p6';
                $('.card-deck').fadeIn(1000);
                if ($block == 'n') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=6 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=6 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=6 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=6 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=6 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=6 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=6 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=6 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=6 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">?????????</span>.4??? ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>?????????</span>.4???";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>?????????</span>.2???";
                    $Brief_description4 = $decs4;
                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Hsinchu/HexingStation/20210212222805_90.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/Hsinchu/MagicHouse/657147b1-e5dc-11ea-87bf-6c5baca0fb28.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Hsinchu/NeiwanLoveStoryMuseum/20180521151254_55.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/Hsinchu/WatermelonManor/20171108175641_58.jpg">`
                    );

                }
            });

            $('.Region>.col-md-2').click(function() {
                $('#c1>.card-body>h5').html($play_title);
                $('#c1>.card-body>p').html($Brief_description);

                $('#c2>.card-body>h5').html($play_title2);
                $('#c2>.card-body>p').html($Brief_description2);

                $('#c3>.card-body>h5').html($play_title3);
                $('#c3>.card-body>p').html($Brief_description3);

                $('#c4>.card-body>h5').html($play_title4);
                $('#c4>.card-body>p').html($Brief_description4);

                $('#c1').prepend($new_img);
                $old_img.hide().remove();
                $new_img.slideUp(500).slideDown(1000);
                $('#c2').prepend($new_img2);
                $old_img2.hide().remove();
                $new_img2.slideUp(500).slideDown(1000);
                $('#c3').prepend($new_img3);
                $old_img3.hide().remove();
                $new_img3.slideUp(500).slideDown(1000);
                $('#c4').prepend($new_img4);
                $old_img4.hide().remove();
                $new_img4.slideUp(500).slideDown(1000);
            });

            $('.btn_next').click(function() {
                $('#c1').hide();
                $('#c4').fadeIn(500);
            });
            $('.btn_previous').click(function() {
                $('#c4').hide();
                $('#c1').fadeIn(500);
            });

            var $de_old_img;
            var $de_p;
            var $de_new_img;
            var $de_src;

            $('.btn_de1').click(function() {
                console.log($play_where);
                if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                    <img src="place/yilan/ban_chi_be_chi/20210317191138_98.jpg">
                    <p class="detail_head"></p>
                </li>
                <li>
                    <img src="place/yilan/ban_chi_be_chi/20210317191206_83.jpg">
                    <p class="detail_head">??????????????????</p>
                </li>
                <li>
                    <img src="place/yilan/ban_chi_be_chi/20210317191312_49.jpg">
                    <p class="detail_head">????????????</p>
                </li>
                <li>
                    <img src="place/yilan/ban_chi_be_chi/20210317191406_15.jpg">
                    <p class="detail_head">??????????????????</p>
                </li>
                <li>
                    <img src="place/yilan/ban_chi_be_chi/20210317191612_71.jpg">
                    <p class="detail_head">????????????</p>
                </li>
                <li>
                    <img src="place/yilan/ban_chi_be_chi/20210318095257_40.jpg">
                    <p class="detail_head">????????????</p>
                </li>`);
                    $de_src = 'https://fullfenblog.tw/bambi-land/';
                    $de_p = '????????????<br>????????????????????????????????????285???<br>???????????????10:00 ~ 17:00<br>????????????$200?????????6????????????????????????????????????<br>????????????????????????????????????????????????';
                } else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Keelung/Heping_Island_Park/20190718190028_70.jpg">
                        <p class="detail_head">??????????????????</p>
                    </li>
                    <li>
                        <img src="place/Keelung/Heping_Island_Park/20190718185755_47.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/Keelung/Heping_Island_Park/20190718185729_61.jpg">
                        <p class="detail_head">?????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Keelung/Heping_Island_Park/20190718185732_53.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Keelung/Heping_Island_Park/20190718185636_32.jpg">
                        <p class="detail_head">?????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Keelung/Heping_Island_Park/20190718185920_60.jpg">
                        <p class="detail_head">????????????</p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/heping-island-park/';
                    $de_p = '???????????????<br>????????????????????????????????????360???<br>??????????????????????????????$80???<br>???????????????????????????$60???<br>5???~10??? 8:00 ~ 17:00<br>11???~4??? 8:00 ~ 18:00';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/taipei/Restaurant_with_view_on_roof/20200416131406_97.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/taipei/Restaurant_with_view_on_roof/20200416131716_52.jpg">
                        <p class="detail_head">??????</p>
                    </li>
                    <li>
                        <img src="place/taipei/Restaurant_with_view_on_roof/20200416131726_74.jpg">
                        <p class="detail_head">??????</p>
                    </li>
                    <li>
                        <img src="place/taipei/Restaurant_with_view_on_roof/20593439659_9af2990cdc_b.jpg">
                        <p class="detail_head">???????????? </p>
                    </li>
                    <li>
                        <img src="place/taipei/Restaurant_with_view_on_roof/proxy.png">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/taipei/Restaurant_with_view_on_roof/20200416131626_43.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/the-top/';
                    $de_p = '????????????????????????????????????????????????????????????????????????????????????<br>??????????????????????????????????????????????????????<br>??????????????????$3000??????????????????????????????????????????$350/???<br>????????????????????????($300~$1000???????????????????????????$180~$350)<br>???????????????: ????????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/newTP/Fishing_Port_Crab_Theme_Park/20210506170024_82.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/newTP/Fishing_Port_Crab_Theme_Park/20200526173255_95.jpg">
                        <p class="detail_head">??????????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/newTP/Fishing_Port_Crab_Theme_Park/20210506170110_96.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/newTP/Fishing_Port_Crab_Theme_Park/20200526173248_66.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/newTP/Fishing_Port_Crab_Theme_Park/20210506165900_51.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/newTP/Fishing_Port_Crab_Theme_Park/20210506170055_60.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://snowhy.tw/guihou-crab-park/';
                    $de_p = '??????????????????????????????????????????????????????????????????????????????<br>???????????????????????????????????????????????????????????????????????????<br>????????????????????????????????????????????????????????????????????????????????????<br>';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Taoyuan/GOGOBOX/1532139346-2015489310_l.jpg">
                        <p class="detail_head">GOGOBOX??????</p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/GOGOBOX/1532139369-154119487_l.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/GOGOBOX/1532147277-3815843822_l.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/GOGOBOX/20180426152942_30.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/GOGOBOX/20180426152949_90.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/GOGOBOX/20180426152954_89.jpg">
                        <p class="detail_head">???????????????????????????</p>
                    </li>`);
                    $de_src = 'https://as660707.pixnet.net/blog/post/463603736-taoyuan-gogobox';
                    $de_p = 'GOGOBOX???????????????????????????????????????????????????????????????<br>???????????????????????????????????????150~200?????????<br>?????????????????????????????????????????????????????????????????????<br>??????????????????????????????????????????????????????<br>???????????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Hsinchu/HexingStation/20180223190833_73.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/HexingStation/20180223190836_19.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/HexingStation/20210212222754_5.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/HexingStation/20210212222934_42.jpg">
                        <p class="detail_head">???????????????????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/HexingStation/20210212222937_33.jpg">
                        <p class="detail_head">????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/HexingStation/img_6340.jpg">
                        <p class="detail_head">????????????</p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/2014-09-17-161/';
                    $de_p = '?????????????????????????????????????????????????????????????????????????????????????????????<br>?????????????????????????????????????????????????????????????????????????????????????????????<br>???????????????????????????????????????????????????<br>?????????????????????????????????????????????????????????????????????????????????????????????????????????<br>????????????: ?????????????????????????????????????????????<br>????????????: ??????????????????????????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Miaoli/Flying_Cow_Ranch/%E9%A3%9B%E7%89%9B.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Flying_Cow_Ranch/%E9%A3%9B%E7%89%9B%E7%89%A7%E5%A0%B4.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Flying_Cow_Ranch/0cde750c29726dc76895db2118cd6c2f.jpg">
                        <p class="detail_head">??????????????????</p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Flying_Cow_Ranch/d1596c1b4ade00fa93861a9143b7950a.jpg">
                        <p class="detail_head">??????(??????)??????</p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Flying_Cow_Ranch/d4386e7901184f4b9358020c6be223e4.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Flying_Cow_Ranch/d44a74ca5d2d1cf95c311c32d4054d3e.jpg">
                        <p class="detail_head">DIY????????????</p>
                    </li>`);
                    $de_src = 'https://www.flyingcow.com.tw/';
                    $de_p = '?????????????????????????????????????????????????????????????????????????????????????????????<br>?????????????????????????????????????????????????????????????????????????????????<br>????????????(????????????????????????)???????????????(???????????????????????? )????????????????????????<br>????????????????????????????????????????????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Taichung/Wuling_Farm/7DB480A6-C1CF-45BD-A79C-54EEBE82B047_e.jpg">
                        <p class="detail_head">???????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Taichung/Wuling_Farm/F618791C-93C0-4DB1-A2EA-B0DD0D62E576_e.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taichung/Wuling_Farm/%E6%AD%A6%E9%99%B5%E8%BE%B2%E5%A0%B4.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taichung/Wuling_Farm/%E6%AD%A6%E9%99%B5%E8%BE%B2%E5%A0%B4%E6%A5%93%E8%91%89%E5%AD%A3.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/Taichung/Wuling_Farm/%E7%B9%A1%E7%90%83%E8%8A%B1.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/Taichung/Wuling_Farm/%E8%90%BD%E7%BE%BD%E6%9D%BE.jpg">
                        <p class="detail_head">?????????</p>
                    </li>`);
                    $de_src = 'https://www.travelking.com.tw/tourguide/scenery8.html';
                    $de_p = '???????????????????????????????????????????????????????????????????????????<br>??????????????????????????????????????????????????????????????????????????????<br>????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Changhua/Baguashan_Great_Buddha_Scenic_Area/20210219_143416.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Changhua/Baguashan_Great_Buddha_Scenic_Area/20210219_143631.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Changhua/Baguashan_Great_Buddha_Scenic_Area/20210219_144051.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Changhua/Baguashan_Great_Buddha_Scenic_Area/20210219_144711.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Changhua/Baguashan_Great_Buddha_Scenic_Area/%E5%85%AB%E5%8D%A6%E5%B1%B1%E5%A4%A7%E4%BD%9B%E9%A2%A8%E6%99%AF%E5%8D%80.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Changhua/Baguashan_Great_Buddha_Scenic_Area/%E5%85%AB%E5%8D%A6%E5%B1%B1%E5%A4%A7%E4%BD%9B%E9%A2%A8%E6%99%AF%E5%8D%80%E5%A4%A9%E7%A9%BA%E6%AD%A5%E9%81%93.jpg">
                        <p class="detail_head">????????????</p>
                    </li>`);
                    $de_src = 'https://www.travelking.com.tw/tourguide/scenery1.html';
                    $de_p = '????????????????????????????????????-?????????????????????????????????<br>??????????????????????????????????????????????????????????????????????????????????????????<br>?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Nantou/Cingjing_Farm/06ffcaa69066744f92578a870395ce5e.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Nantou/Cingjing_Farm/62739ae1d5957224e65b81242194765a.jpg">
                        <p class="detail_head">?????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Nantou/Cingjing_Farm/6a622198921b868213dc8e101e9a6258.jpg">
                        <p class="detail_head">?????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Nantou/Cingjing_Farm/96a75f3283a6467c640330431a8662da.jpg">
                        <p class="detail_head">?????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Nantou/Cingjing_Farm/%E6%B8%85%E5%A2%83%E8%BE%B2%E5%A0%B4.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Nantou/Cingjing_Farm/%E7%B6%BF%E7%BE%8A%E5%A4%A7%E5%9F%8E%E5%A0%A1.jpg">
                        <p class="detail_head">???????????????</p>
                    </li> `);
                    $de_src = 'https://event.chingjing.com.tw/';
                    $de_p = '??????????????????????????????????????????????????????<br>??????????????????????????????????????????????????????????????????<br>???????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Yunlin/Five_Years_Chitose_Park/1539070954-95f4f85da1fbda70a61df6cc67155eec.jpg">
                        <p class="detail_head">??????????????????</p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Five_Years_Chitose_Park/%E9%BE%8D.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Five_Years_Chitose_Park/1595228267-61c6e757f6ebcde2597f6332d813d968.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Five_Years_Chitose_Park/20180323011331_70.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Five_Years_Chitose_Park/34-2.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Five_Years_Chitose_Park/%E4%BA%94%E5%B9%B4%E5%8D%83%E6%AD%B2%E5%85%AC%E5%9C%92.jpg">
                        <p class="detail_head"></p>
                    </li> `);
                    $de_src = 'https://bunnyann.com/blog-pos-9/';
                    $de_p = '?????????????????????????????????????????????<br>????????????????????????????????????????????????<br>????????????????????????????????????????????????????????????<br>?????????????????????????????????????????????73???????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Chiayi/Alishan_Forest_Recreation_Area/03_%E9%98%BF%E9%87%8C%E5%B1%B1%E5%9C%8B%E5%AE%B6%E6%A3%AE%E6%9E%97%E9%81%8A%E6%A8%82%E5%8D%80.jpg">
                        <p class="detail_head">??????????????????</p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Alishan_Forest_Recreation_Area/52ced3c0-e1b4-11e9-abf3-7facc46df45b.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Alishan_Forest_Recreation_Area/article-6028c890dff54.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Alishan_Forest_Recreation_Area/pic_250_15.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Alishan_Forest_Recreation_Area/%E9%98%BF%E9%87%8C%E5%B1%B1%E5%9C%8B%E5%AE%B6%E6%A3%AE%E6%9E%97%E9%81%8A%E6%A8%82%E5%9C%92.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Alishan_Forest_Recreation_Area/%E9%98%BF%E9%87%8C%E5%B1%B1%E7%A5%9E%E6%9C%A8%E9%81%BA%E8%B7%A1.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://www.ali-nsa.net/zh-tw';
                    $de_p = '??????????????????????????????????????????????????????????????????<br>?????????????????????????????????????????????????????????????????????<br>???????????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Tainan/Anping_Old_Street/%E5%8A%8D%E7%8D%85%E5%AD%B8%E5%A0%82.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Anping_Old_Street/%E5%A4%95%E9%81%8A-%E5%87%BA%E5%BC%B5%E6%89%80.jpg">
                        <p class="detail_head">??????????????????</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Anping_Old_Street/%E5%AE%89%E5%B9%B3%E5%8F%A4%E5%A0%A1.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Anping_Old_Street/%E5%AE%89%E5%B9%B3%E8%80%81%E8%A1%97.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Anping_Old_Street/%E5%AE%89%E5%B9%B3%E8%80%81%E8%A1%97%E5%BA%97%E5%AE%B6.jpg">
                        <p class="detail_head">??????????????????</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Anping_Old_Street/%E9%A5%92%E5%AF%8C%E6%99%82%E4%BB%A3%E6%84%9F%E7%9A%84%E7%B4%85%E7%A3%9A%E7%89%86.jpg">
                        <p class="detail_head">???????????????????????????</p>
                    </li> `);
                    $de_src = 'https://www.twtainan.net/zh-tw/attractions/detail/812';
                    $de_p = '????????????????????????????????????????????????<br>????????????????????????????????????????????????????????????????????????<br>?????????????????????????????????-???????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Kaohsiung/Cijin/article-5ba06f673d986.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/Cijin/%E6%97%97%E6%B4%A5%E5%BD%A9%E8%99%B9%E6%95%99%E5%A0%82.jpg">
                        <p class="detail_head">??????????????????</p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/Cijin/%E6%97%97%E6%B4%A5%E6%B5%B7%E6%B0%B4%E6%B5%B4%E5%A0%B4.jpg">
                        <p class="detail_head">??????????????????</p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/Cijin/%E6%97%97%E6%B4%A5%E8%80%81%E8%A1%97.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/Cijin/%E6%97%97%E6%B4%A5%E8%B1%90%E6%94%B6%E5%BB%A3%E5%A0%B4%E5%85%A5%E5%8F%A3%E6%84%8F%E8%B1%A1.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/Cijin/%E9%AB%98%E9%9B%84%E7%87%88%E5%A1%94.jpg">
                        <p class="detail_head">????????????</p>
                    </li> `);
                    $de_src = 'https://www.taiwan.net.tw/m1.aspx?sNo=0001016&id=A12-00075';
                    $de_p = '?????????????????????????????????????????????????????????????????????<br>1967???????????????????????????????????????????????????<br>??????????????????????????????????????????????????????????????????????????????<br>????????????????????????????????????????????????????????????<br>???????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Pingtung/LiuduiHakkaCulturalPark/20191209144307_61.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Pingtung/LiuduiHakkaCulturalPark/20191209144325_32.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Pingtung/LiuduiHakkaCulturalPark/20191209144350_86.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Pingtung/LiuduiHakkaCulturalPark/20191209144403_79.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Pingtung/LiuduiHakkaCulturalPark/20191209144409_94.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Pingtung/LiuduiHakkaCulturalPark/20191209144853_2.jpg">
                        <p class="detail_head">????????????????????????</p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/liuduihakka/';
                    $de_p = '??????????????????????????????????????????????????????????????????????????????<br>???????????????????????????????????????????????????????????????????????????<br>????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Penghu/AimenBeach/f_img1.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Penghu/AimenBeach/f_img2.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Penghu/AimenBeach/f_img3.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Penghu/AimenBeach/f_img4.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Penghu/AimenBeach/f_img5.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Penghu/AimenBeach/%E9%9A%98%E9%96%80%E6%B2%99%E7%81%98.jpg">
                        <p class="detail_head"></p>
                    </li> `);
                    $de_src = 'https://www.beachcastle.com.tw/f.html';
                    $de_p = '?????????????????????????????????????????????????????????????????????????????????<br>?????????????????????????????????????????????????????????????????????????????????<br>???????????????????????????????????????????????????????????????????????????????????????????????????<br>?????????????????????????????????????????????????????????<br>?????????????????????????????????????????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/hualian/feicuigu/1405352087-1576214676_l.jpg">
                        <p class="detail_head">????????????: ???3??????</p>
                    </li>
                    <li>
                        <img src="place/hualian/feicuigu/1_QxywYShoj8YBjH7wKuP8rw.jpeg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/hualian/feicuigu/7824FD35-6EFE-4F06-B558-115440480700_e.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/hualian/feicuigu/A3D3B792-B52E-406B-AA2B-480B391BF21F_e.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/hualian/feicuigu/%E8%8A%B1%E8%93%AE%E7%BF%A1%E7%BF%A0%E8%B0%B7%E6%BA%AF%E6%BA%AA6%E6%B2%99%E8%9B%99%E6%BA%AF%E6%BA%AA.jpg">
                        <p class="detail_head">?????????????????????</p>
                    </li>
                    <li>
                        <img src="place/hualian/feicuigu/hualien-emerald-valley-05.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://www.bosomgirl.com/2017/08/emeraldvalley.html';
                    $de_p = ' ';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Taitung/Dulan_sugar_factory/091e8bd9fac68b9c7c4c857af0ec7654.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/Taitung/Dulan_sugar_factory/20180904161820_24.jpg">
                        <p class="detail_head">???11????????????</p>
                    </li>
                    <li>
                        <img src="place/Taitung/Dulan_sugar_factory/20180904161852_7.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Taitung/Dulan_sugar_factory/20180904161903_41.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taitung/Dulan_sugar_factory/6da95a306b9a3502591134eb876c7e7f.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taitung/Dulan_sugar_factory/20180904161852_7.jpg">
                        <p class="detail_head">???????????????</p>
                    </li> `);
                    $de_src = 'https://fullfenblog.tw/2014-06-17-365/';
                    $de_p = '?????????????????????<br>????????????????????????????????????61???<br>??????????????????????????????10:00~17:00';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Quemoy/p1/p1_1.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p1/p1_2.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p1/p1_3.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p1/p1_4.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p1/p1_5.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p1/p1_6.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://kinmen.travel/zh-tw/travel/attraction/517';
                    $de_p = '??????????????????????????????????????????<br>?????????????????????????????????????????????????????????<br>????????????????????????????????????????????????<br>???18????????????????????????????????????????????????????????????????????????????????????<br>?????????????????????????????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Matsu/p1/p1_1.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Matsu/p1/p1_2.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Matsu/p1/p1_3.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Matsu/p1/p1_4.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Matsu/p1/p1_5.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Matsu/p1/p1_6.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://okgo.tw/newsview.html?id=10121';
                    $de_p = '?????????????????????????????????????????????????????????????????????????????????<br>????????????????????????????????????????????????<br>????????????????????????????????????????????????????????????????????????????????????<br>??????????????????????????????????????????????????????????????????????????????<br>???????????????????????????????????????????????????????????????';
                }
                
                
                $de_old_img = $('.detail_img li');
                $de_old_p = $('.detail_img p');
                $de_old_img.hide().remove();
                $de_old_p.hide().remove();
                $('.detail_img ul').prepend($de_new_img);
                $('.detail_txt p').html($de_p);
                $('.detail_txt a').attr('href', $de_src);
            });
            
            //?????????????????????
            $('.btn_de2').click(function() {
                console.log($play_where);
                if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/yilan/Xingbao_Onion_Experience_Farm/20200710211424_70.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/yilan/Xingbao_Onion_Experience_Farm/20200710211457_27.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/yilan/Xingbao_Onion_Experience_Farm/20200710211549_58.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/yilan/Xingbao_Onion_Experience_Farm/20200710211613_1.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/yilan/Xingbao_Onion_Experience_Farm/20200710211641_60.jpg">
                        <p class="detail_head">??????DIY</p>
                    </li>
                    <li>
                        <img src="place/yilan/Xingbao_Onion_Experience_Farm/20200710211708_61.jpg">
                        <p class="detail_head">????????????</p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/sinbow-shallot/';
                    $de_p = '?????????????????????<br>????????????????????????????????????7-5???<br>???????????????9:00 ~ 17:00<br>100???/????????????DIY<br>150???/????????????DIY?????????????????????<br>200???/????????????DIY?????????????????????+????????????';
                } else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Keelung/Lover_Lake_Park/20200914141710_35.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Keelung/Lover_Lake_Park/20200914141740_82.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Keelung/Lover_Lake_Park/20200914141932_66.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Keelung/Lover_Lake_Park/20200914142011_52.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/Keelung/Lover_Lake_Park/20200914142023_22.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Keelung/Lover_Lake_Park/20200914141839_100.jpg">
                        <p class="detail_head"></p>
                    </li>
                                    `);
                    $de_src = 'https://fullfenblog.tw/lover-lake/';
                    $de_p = '???????????????<br>???????????????????????????????????????208????????????????????????<br>???????????????????????? 24????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/taipei/True_Love_Peach_Blossom/20210503090241_99.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/taipei/True_Love_Peach_Blossom/20210503090156_1.jpg">
                        <p class="detail_head">???????????????????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/taipei/True_Love_Peach_Blossom/20210503090245_87.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/taipei/True_Love_Peach_Blossom/20210503090308_90.jpg">
                        <p class="detail_head">??????????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/taipei/True_Love_Peach_Blossom/20210503090336_89.jpg">
                        <p class="detail_head">??????????????????</p>
                    </li>
                    <li>
                        <img src="place/taipei/True_Love_Peach_Blossom/20210503090638_28.jpg">
                        <p class="detail_head">???????????????????????????</p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/dearlove/';
                    $de_p = '??????????????????????????????????????????????????????????????????????????????????????????<br>???????????????$200/????????????????????????????????????16:00????????????$100/???<br>????????????????????????????????????????????????<br>????????????????????????????????????????????????????????????????????????<br>?????????????????????????????????????????????????????????????????????????????????????????????<br>??????????????????$270~$1480??????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/newTP/Bitan/20210319110650_50.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/newTP/Bitan/20210319110756_43.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/newTP/Bitan/20210319111133_74.jpg">
                        <p class="detail_head">?????????????????????</p>
                    </li>
                    <li>
                        <img src="place/newTP/Bitan/20210320042709_32.jpg">
                        <p class="detail_head">?????????????????????</p>
                    </li>
                    <li>
                        <img src="place/newTP/Bitan/20210319110750_72.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/newTP/Bitan/20210319111249_57.jpg">
                        <p class="detail_head">??????????????????</p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/bitan/';
                    $de_p = '?????????????????????????????????????????????????????????????????????????????????<br>????????????2???~6?????????$300~$700??????<br>????????????2???~4?????????$400~$600??????<br>????????????????????????????????????????????????????????????????????????<br>??????????????????????????????????????????????????????????????????????????????<br>???????????????????????????????????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Taoyuan/Lixiao_Story_Forest/1200px-%E5%A3%A2%E5%B0%8F%E6%95%85%E4%BA%8B%E6%A3%AE%E6%9E%97.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/Lixiao_Story_Forest/1614083534-2052279534-g_l.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/Lixiao_Story_Forest/20191030173844_50.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/Lixiao_Story_Forest/20191030173904_88.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/Lixiao_Story_Forest/20191030174637_69.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/Lixiao_Story_Forest/20191030175136_55.jpg">
                        <p class="detail_head">????????????</p>
                    </li>`);
                    $de_src = 'https://bobowin.blog/zhongli-forest/';
                    $de_p = '?????????????????????????????????102????????????<br>??????????????????????????????????????????<br>??????:??????(??????????????????(?????????))<br>->??????(??????????????????(?????????))<br> ->????????????->????????????->??????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Hsinchu/MagicHouse/20200827092310_56.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/MagicHouse/20200827092324_54.jpg">
                        <p class="detail_head">????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/MagicHouse/20200827092509_21.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/MagicHouse/657147b1-e5dc-11ea-87bf-6c5baca0fb28.jpg">
                        <p class="detail_head">?????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/MagicHouse/20200827092232_4.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/MagicHouse/20200827092514_14.jpg">
                        <p class="detail_head">??????????????????</p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/magic-witch/';
                    $de_p = '??????????????????$100?????????????????????<br>????????????????????????:???????????????????????????????????????????????????????????????<br>?????????????????????????????????????????????????????????<br>????????????????????????????????????????????????????????????$150~$480<br>???????????????????????????$150/?????????????????????10%???????????????<br>??????????????????????????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Miaoli/Houlong_Crossing_Tunnel/2020100703.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Houlong_Crossing_Tunnel/2020100714.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Houlong_Crossing_Tunnel/2020100719.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Houlong_Crossing_Tunnel/2020100720.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Houlong_Crossing_Tunnel/2020100722.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Houlong_Crossing_Tunnel/%E5%BE%8C%E9%BE%8D%E9%81%8E%E6%B8%AF%E9%9A%A7%E9%81%93.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://yoke918.com/oldtunnel/';
                    $de_p = '??????????????????????????????????????????????????????????????????????????????????????????<br>??????????????????????????????????????????????????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Taichung/Fengjia_Night_Market/C3388791-4DE1-4F05-92F7-5D995C6054F8_e.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taichung/Fengjia_Night_Market/D570E630-C9B5-46A9-837C-135C76746CCC_e.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taichung/Fengjia_Night_Market/%E5%8C%97%E5%9B%9E%E6%9C%A8%E7%93%9C%E7%89%9B%E5%A5%B6.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taichung/Fengjia_Night_Market/%E6%97%A5%E8%88%B9%E7%AB%A0%E9%AD%9A%E5%B0%8F%E4%B8%B8%E5%AD%90.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Taichung/Fengjia_Night_Market/%E6%98%8E%E5%80%AB%E8%9B%8B%E9%A4%85.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Taichung/Fengjia_Night_Market/%E9%80%A2%E7%94%B2%E5%A4%9C%E5%B8%82.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://www.travelking.com.tw/tourguide/scenery103309.html';
                    $de_p = '?????????????????????????????????????????????????????????????????????????????????????????????<br>????????????????????????????????????????????????????????????????????????????????????<br>???????????????????????????????????????????????????????????????????????????????????????<br>???????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Changhua/Changhua_RailwayRoundHouse/2016122617222462656.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Changhua/Changhua_RailwayRoundHouse/2017081516185043363.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Changhua/Changhua_RailwayRoundHouse/2018091910150565657.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Changhua/Changhua_RailwayRoundHouse/2019072511320931941.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Changhua/Changhua_RailwayRoundHouse/%E5%BD%B0%E5%8C%96%E6%89%87%E5%BD%A2%E8%BB%8A%E5%BA%AB.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Changhua/Changhua_RailwayRoundHouse/2018091910150565657.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://tourism.chcg.gov.tw/AttractionsContent.aspx?id=29&chk=e51a4fad-7be7-43fd-9a61-56939757426f';
                    $de_p = '???????????????????????????????????????????????????????????????????????????????????????<br>?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Nantou/Feeling18/18%E5%BA%A6C%E5%B7%A7%E5%85%8B%E5%8A%9B%E5%B7%A5%E6%88%BF.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Nantou/Feeling18/18%E5%BA%A6C%E5%B7%A7%E5%85%8B%E5%8A%9B%E5%B7%A5%E6%88%BF1.jpg">
                        <p class="detail_head">18???C???????????????(?????????)</p>
                    </li>
                    <li>
                        <img src="place/Nantou/Feeling18/20190908235340_80.jpg">
                        <p class="detail_head">18???C?????????????????????(??????)</p>
                    </li>
                    <li>
                        <img src="place/Nantou/Feeling18/20190908235412_75.jpg">
                        <p class="detail_head">18???C???????????????(?????????)</p>
                    </li>
                    <li>
                        <img src="place/Nantou/Feeling18/20190908235508_24.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Nantou/Feeling18/%E9%AF%9B%E9%AD%9A%E7%87%92.jpg">
                        <p class="detail_head">18???C???????????????(?????????)</p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/feeling18/';
                    $de_p = '18???C???????????????????????????????????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Yunlin/Yanping_Old_Street/14-12.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Yanping_Old_Street/20180323011331_70.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Yanping_Old_Street/20201014111323-eca3b18d.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Yanping_Old_Street/maxresdefault.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Yanping_Old_Street/%E5%BB%B6%E5%B9%B3%E8%80%81%E8%A1%97.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Yanping_Old_Street/%E6%9D%B1%E5%B8%82%E5%A0%B4%E4%B8%80%E9%9A%8501.jpg">
                        <p class="detail_head">???????????????</p>
                    </li> `);
                    $de_src = 'https://travelblog.tw/xiluo-old-street/';
                    $de_p = '????????????????????????????????????????????????????????????????????????<br>?????????????????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Chiayi/Crystal_High_Heel_Shaped_Church/5993fcae595df.jpg">
                        <p class="detail_head">?????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Crystal_High_Heel_Shaped_Church/chiayi06-%E9%AB%98%E8%B7%9F%E9%9E%8B%E6%95%99%E5%A0%82.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Crystal_High_Heel_Shaped_Church/images.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Crystal_High_Heel_Shaped_Church/%E9%AB%98%E8%B7%9F%E9%9E%8B%E5%94%AF%E7%BE%8E%E5%A4%A2%E5%B9%BB.jpg">
                        <p class="detail_head">?????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Crystal_High_Heel_Shaped_Church/%E9%AB%98%E8%B7%9F%E9%9E%8B%E6%95%99%E5%A0%82.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Crystal_High_Heel_Shaped_Church/%EF%BC%88%E5%9C%96%EF%BC%8F%E9%9B%B2%E7%AE%A1%E8%99%95%E6%8F%90%E4%BE%9B%EF%BC%89-1.jpg">
                        <p class="detail_head">?????????????????????</p>
                    </li> `);
                    $de_src = 'https://swcoast-nsa.travel/zh-tw/attraction/details/493';
                    $de_p = '??????????????????????????????????????????????????????????????????????????????<br>???????????????????????????????????????????????????????????????2016???6???<br>??????????????????????????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Tainan/Ch_Mei_Museum/DSC_0100.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Tainan/Ch_Mei_Museum/20151020104658970.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Ch_Mei_Museum/DSC_0179.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Tainan/Ch_Mei_Museum/DSC_0218.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Tainan/Ch_Mei_Museum/line_140264819378887.jpg">
                        <p class="detail_head">??????????????????</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Ch_Mei_Museum/%E5%A5%87%E7%BE%8E%E5%8D%9A%E7%89%A9%E9%A4%A8.jpg">
                        <p class="detail_head"></p>
                    </li> `);
                    $de_src = 'https://www.chimeimuseum.org/';
                    $de_p = '???????????????????????????????????????????????????????????????<br>???????????????????????????????????????????????????????????????<br>?????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Kaohsiung/LoveRiver/%E6%84%9B%E6%B2%B3.jpg">
                        <p class="detail_head">??????</p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/LoveRiver/%E5%8B%9E%E5%B7%A5%E5%8D%9A%E7%89%A9%E9%A4%A8.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/LoveRiver/%E6%84%9B%E6%B2%B3%E6%97%A5%E6%99%AF.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/LoveRiver/%E7%8E%AB%E7%91%B0%E8%81%96%E6%AF%8D%E8%81%96%E6%AE%BF%E4%B8%BB%E6%95%99%E5%BA%A7%E5%A0%82.jpg">
                        <p class="detail_head">???????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/LoveRiver/%E8%B2%A2%E5%A4%9A%E6%8B%89%E8%88%B9.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/LoveRiver/%E9%AB%98%E9%9B%84%E5%B8%82%E9%9B%BB%E5%BD%B1%E9%A4%A8.jpg">
                        <p class="detail_head">??????????????????</p>
                    </li>`);
                    $de_src = 'https://khh.travel/zh-tw/attractions/detail/232';
                    $de_p = '????????????????????????????????????????????????????????????????????????????????????<br>???????????????????????????????????????????????????????????????<br>?????????????????????????????????????????????????????????<br>???????????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Pingtung/LiuqiuIsland/2021-03-26-142249-13.jpg">
                        <p class="detail_head">????????????????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Pingtung/LiuqiuIsland/2021-03-26-150505-49.jpg">
                        <p class="detail_head">???????????????????????????????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Pingtung/LiuqiuIsland/2021-03-26-150439-55.jpg">
                        <p class="detail_head">????????????????????????????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Pingtung/LiuqiuIsland/2021-03-26-150324-16.jpg">
                        <p class="detail_head">????????????????????????????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Pingtung/LiuqiuIsland/2021-03-26-150254-98.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/Pingtung/LiuqiuIsland/2021-03-26-150234-54.jpg">
                        <p class="detail_head">????????????????????????????????????????????????</p>
                    </li> `);
                    $de_src = 'https://journey.tw/love-liuqiu/';
                    $de_p = '??????????????????????????????????????????????????????????????????<br>??????????????????????????????????????????????????????????????????????????????<br>????????????????????????????????????<br>????????????????????????????????????????????????!';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Penghu/PenghuGreatBridge/8EBA1926-74A1-4A79-8E48-49D6DF3727FE_e.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Penghu/PenghuGreatBridge/b631_4.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Penghu/PenghuGreatBridge/b631_6.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Penghu/PenghuGreatBridge/DE9ECB72-2CBA-4BA4-A3EB-969945544A0A_e.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Penghu/PenghuGreatBridge/F5D5D403-7589-432A-9A51-92BABAADFD0E_e.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Penghu/PenghuGreatBridge/%E6%BE%8E%E6%B9%96%E8%B7%A8%E6%B5%B7%E5%A4%A7%E6%A9%8B.jpg">
                        <p class="detail_head"></p>
                    </li> `);
                    $de_src = 'https://www.travelking.com.tw/tourguide/scenery172.html';
                    $de_p = '?????????????????????????????????????????????????????????????????????????????????<br>??????2,494???????????????????????????????????????<br>?????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/hualian/liyutan/1196664273_l.jpg">
                        <p class="detail_head">DIY???????????????</p>
                    </li>
                    <li>
                        <img src="place/hualian/liyutan/1196665069_l.jpg">
                        <p class="detail_head">?????????????????????</p>
                    </li>
                    <li>
                        <img src="place/hualian/liyutan/play_on_liyutan.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/hualian/liyutan/%E5%9C%A8%E7%92%B0%E6%BD%AD%E8%87%AA%E8%A1%8C%E8%BB%8A%E9%81%93%E4%B8%8A%E6%95%A3%E6%AD%A5%E5%81%A5%E8%A1%8C.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/hualian/liyutan/%E6%B3%A2%E5%85%89%E7%80%B2%E7%81%A9%E7%9A%84%E9%AF%89%E9%AD%9A%E6%BD%AD.jpg">
                        <p class="detail_head">???5???????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/hualian/liyutan/play_on_liyutan.jpg">
                        <p class="detail_head"></p>
                    </li> `);
                    $de_src = 'https://blog.xuite.net/cafemom2013/twblog/585371383';
                    $de_p = '???????????????????????????????????????????????????<br>1.????????????????????????(??????/1??????) $300<br>2.????????????????????????(??????/1??????) $600<br>3.??????????????????????????????(??????/1??????) $800<br>4.?????????6-10???(??????/????????????) ??????$100';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Quemoy/p2/p2_1.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p2/p2_2.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p2/p2_3.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p2/p2_4.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p2/p2_5.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p2/p2_6.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://kinmen.travel/zh-tw/travel/attraction/1530';
                    $de_p = '???????????????????????????????????????????????????????????????????????????????????????????????????<br>????????????????????????????????????????????????????????????????????????????????????????????????<br>????????????????????????????????????????????????????????????????????????<br>???????????????????????????????????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Matsu/p2/p2_1.jpg">
                        <p class="detail_head">???????????????????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Matsu/p2/p2_2.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Matsu/p2/p2_3.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Matsu/p2/p2_4.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Matsu/p2/p2_5.jpg">
                        <p class="detail_head">?????????19.5????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Matsu/p2/p2_6.jpg">
                        <p class="detail_head">????????????????????????</p>
                    </li>`);
                    $de_src = 'https://journey.tw/juguang-lighthouse/';
                    $de_p = '?????????????????????????????????????????????????????????????????????????????????????????????<br>????????????????????????????????????????????????????????????????????????????????????????????????<br>?????????????????????????????????????????????????????????<br>?????????????????????????????????????????????????????????????????????????????????';
                }
                
                
                $de_old_img = $('.detail_img li');
                $de_old_p = $('.detail_img p');
                $de_old_img.hide().remove();
                $de_old_p.hide().remove();
                $('.detail_img ul').prepend($de_new_img);
                $('.detail_txt p').html($de_p);
                $('.detail_txt a').attr('href', $de_src);
            });
            
            //?????????????????????
            $('.btn_de3').click(function() {
                console.log($play_where);
                if ($play_where == '??????') {
                    $de_new_img = $(`
                    <li>
                        <img src="place/yilan/Mingchi_Forest_Amusement_Park/20200407091557_67.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/yilan/Mingchi_Forest_Amusement_Park/20200407091610_53.jpg">
                        <p class="detail_head">??????(??????)</p>
                    </li>
                    <li>
                        <img src="place/yilan/Mingchi_Forest_Amusement_Park/20201207083117_62.jpg">
                        <p class="detail_head">??????(??????)</p>
                    </li>
                    <li>
                        <img src="place/yilan/Mingchi_Forest_Amusement_Park/20201207083127_71.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/yilan/Mingchi_Forest_Amusement_Park/20200407091750_70.jpg">
                        <p class="detail_head">??????????????????</p>
                    </li>
                    <li>
                        <img src="place/yilan/Mingchi_Forest_Amusement_Park/20200407091808_63.jpg">
                        <p class="detail_head">????????????</p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/lealeamingchih/';
                    $de_p = '?????????????????????<br>??????$120 ??????$90<br>????????????????????????????????????????????????1???<br>???????????????8:00 ~ 16:30';
                } else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Keelung/Marine_Science_Technology_Museum/20190731184307_1.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/Keelung/Marine_Science_Technology_Museum/20190731184338_61.jpg">
                        <p class="detail_head">????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Keelung/Marine_Science_Technology_Museum/20190731184428_35.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Keelung/Marine_Science_Technology_Museum/20190731184455_2.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Keelung/Marine_Science_Technology_Museum/20190731184559_59.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Keelung/Marine_Science_Technology_Museum/20190731184541_4.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/nmmst/';
                    $de_p = '?????????????????????<br>????????????????????????????????????367???<br>????????????????????? ~ ?????? 9:00 ~ 17:00<br>???????????????$200/????????????????????????$120/???';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/taipei/Dashangyuan/1591284409-445839078_l.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/taipei/Dashangyuan/1589780726-4105531226_n.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/taipei/Dashangyuan/20200518173037_87.jpg">
                        <p class="detail_head">??????????????????</p>
                    </li>
                    <li>
                        <img src="place/taipei/Dashangyuan/20200518173045_77.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/taipei/Dashangyuan/20200518173124_29.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/taipei/Dashangyuan/2021041134.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/grand-garden/';
                    $de_p = '?????????<br>???????????????????????????????????????67-7???<br>???????????????7:30 ~ 18:00<br>??????????????????6??????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/newTP/Yehliu_Ocean_World/20210122134418_35.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/newTP/Yehliu_Ocean_World/20210122161047_67.jpg">
                        <p class="detail_head">??????????????????</p>
                    </li>
                    <li>
                        <img src="place/newTP/Yehliu_Ocean_World/20210122134449_26.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/newTP/Yehliu_Ocean_World/20210122134519_74.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/newTP/Yehliu_Ocean_World/20210122134537_20.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/newTP/Yehliu_Ocean_World/20210122134534_59.jpg">
                        <p class="detail_head">DIY</p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/yehliu-oceanworld/';
                    $de_p = '????????????????????????$450???????????????$400???<br>????????????????????????$380???????????????$330???<br>??????????????????????????????????????????????????????????????????????????????<br>???????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Taoyuan/Luoyusong_Avenue/1024x768%20(1).jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/Luoyusong_Avenue/1024x768.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/Luoyusong_Avenue/1539066991-9fb3bb862e68417f0ff2ea61b39856f1.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/Luoyusong_Avenue/20201011171147_30.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/Luoyusong_Avenue/unnamed.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/Luoyusong_Avenue/20171113152232_89.jpg">
                        <p class="detail_head">????????????????????????</p>
                    </li>`);
                    $de_src = 'https://bobowin.blog/2012-09-08-856/';
                    $de_p = '????????????????????????????????????????????????????????????????????????????????????????????????<br>??????????????????????????????????????????????????????????????????????????????????????????<br>???????????????????????????????????????????????????????????????????????????????????????<br>???????????????????????????????????????????????????????????????????????????????????????<br>?????????????????????????????????????????????????????????????????????70???????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Hsinchu/NeiwanLoveStoryMuseum/20180521151254_55.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/NeiwanLoveStoryMuseum/20180521151440_33.jpg">
                        <p class="detail_head">???????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/NeiwanLoveStoryMuseum/20180521151459_70.jpg">
                        <p class="detail_head">????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/NeiwanLoveStoryMuseum/20180521151515_98.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/NeiwanLoveStoryMuseum/20180521151301_71.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/NeiwanLoveStoryMuseum/20180521151501_8.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/hc-lovestory/';
                    $de_p = '??????$150/???(???????????????$100)????????????????????????6*8???????????????<br>?????????????????????????????????????????????????????????$150/????????????$200/???<br>?????????????????????????????????????????????????????????????????????????????????????????????<br>????????????$150~$520(?????????$100???)???<br><br>';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Miaoli/NanZhuang_Old_Street/20180425071028_12.jpg">
                        <p class="detail_head">??????????????????</p>
                    </li>
                    <li>
                        <img src="place/Miaoli/NanZhuang_Old_Street/20180425075417_95.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/Miaoli/NanZhuang_Old_Street/20180425080228_80.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/Miaoli/NanZhuang_Old_Street/255448406_o.jpg">
                        <p class="detail_head">?????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Miaoli/NanZhuang_Old_Street/%E5%8D%97%E5%BA%84%E8%80%81%E8%A1%97.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Miaoli/NanZhuang_Old_Street/%E6%A1%82%E8%8A%B1%E9%87%80%E6%B9%AF%E5%9C%93.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>`);
                    $de_src = 'https://bobowin.blog/2013-04-23-763/';
                    $de_p = '?????????????????????????????????????????????????????????????????????????????????<br>???????????????????????????????????????????????????????????????????????????????????????????????????<br>?????????????????????????????????????????????????????????????????????<br>????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Taichung/Houfeng_Bikeway/%E5%90%8E%E8%B1%90%E9%90%B5%E9%A6%AC%E9%81%93.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Taichung/Houfeng_Bikeway/%E5%90%8E%E9%87%8C%E9%A6%AC%E5%A0%B41.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Taichung/Houfeng_Bikeway/%E5%90%8E%E9%87%8C%E9%A6%AC%E5%A0%B42.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Taichung/Houfeng_Bikeway/%E8%8A%B1%E6%A8%91%E9%8B%BC%E6%A9%8B.jpg">
                        <p class="detail_head">???????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Taichung/Houfeng_Bikeway/%E5%90%8E%E8%B1%90%E9%90%B5%E9%A6%AC%E9%81%93.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Taichung/Houfeng_Bikeway/%E5%90%8E%E9%87%8C%E9%A6%AC%E5%A0%B41.jpg">
                        <p class="detail_head">????????????</p>
                    </li>`);
                    $de_src = 'https://travel.taichung.gov.tw/zh-tw/Attractions/Intro/89/%E5%90%8E%E8%B1%90%E9%90%B5%E9%A6%AC%E9%81%93';
                    $de_p = '????????????????????????????????????????????????-4.5???????????????????????????-11.8?????????<br>???????????????????????????????????????????????????????????????????????????????????????????????????<br>?????????????????????????????????????????????????????????382?????????<br>????????????????????????????????????????????????????????????????????????????????????????????????<br>?????????????????????1.2???????????????????????????????????????????????????<br>???????????????10????????????03??????6???00???18:00???04????????????09??????6???00???17:00';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Changhua/Lugang_Old_Street/20200803221119_73.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Changhua/Lugang_Old_Street/20200803221132_23.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Changhua/Lugang_Old_Street/20200803221147_89.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Changhua/Lugang_Old_Street/20200804065536_22.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Changhua/Lugang_Old_Street/%E9%B9%BF%E6%B8%AF%E5%A4%A9%E5%90%8E%E5%AE%AE.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Changhua/Lugang_Old_Street/%E9%B9%BF%E6%B8%AF%E8%80%81%E8%A1%97.jpg">
                        <p class="detail_head">????????????</p>
                    </li> `);
                    $de_src = 'https://fullfenblog.tw/lukang/';
                    $de_p = '?????????????????????????????????????????????????????????????????????????????????????????????????????????<br>????????????????????????????????????????????????????????????????????????<br>????????????????????????(??????)?????????????????????????????????????????????????????????????????????????????????<br>??????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Nantou/Sun_Moon_Lake/%E5%90%91%E5%B1%B1%E8%87%AA%E8%A1%8C%E8%BB%8A%E9%81%93%E6%B0%B4%E4%B8%8A%E8%BB%8A%E9%81%93.jpg">
                        <p class="detail_head">??????????????????</p>
                    </li>
                    <li>
                        <img src="place/Nantou/Sun_Moon_Lake/%E5%90%91%E5%B1%B1%E8%A1%8C%E6%94%BF%E6%9A%A8%E9%81%8A%E5%AE%A2%E4%B8%AD%E5%BF%83.jpg">
                        <p class="detail_head">???????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Nantou/Sun_Moon_Lake/%E6%97%A5%E6%9C%88%E6%BD%AD.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/Nantou/Sun_Moon_Lake/%E6%97%A5%E6%9C%88%E6%BD%AD%E4%B9%9D%E8%9B%99.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Nantou/Sun_Moon_Lake/%E6%97%A5%E6%9C%88%E6%BD%AD%E7%AB%8B%E7%A2%91.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Nantou/Sun_Moon_Lake/%E7%B4%99%E6%95%99%E5%A0%82.jpg">
                        <p class="detail_head">?????????</p>
                    </li>`);
                    $de_src = 'https://www.sunmoonlake.gov.tw/zh-tw/attractions/detail/80';
                    $de_p = '??????????????????????????????????????????????????????????????????<br>???????????????????????????????????????????????????????????????<br>???????????????????????????????????????????????????????????????<br>???????????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Yunlin/Ylstoryhouse/162413418164768_P8144229.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Ylstoryhouse/images.jpg">
                        <p class="detail_head">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Ylstoryhouse/%E4%B8%8B%E8%BC%89%20(1).jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Ylstoryhouse/%E4%B8%8B%E8%BC%89.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Ylstoryhouse/%E9%9B%B2%E6%9E%97%E6%95%85%E4%BA%8B%E9%A4%A8.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Ylstoryhouse/%E9%9B%B2%E6%9E%97%E6%95%85%E4%BA%8B%E9%A4%A8%E9%96%80%E5%8F%A3.jpg">
                        <p class="detail_head">?????????????????????</p>
                    </li> `);
                    $de_src = 'https://udn.com/news/story/7326/4682155';
                    $de_p = '???????????????????????????????????????????????????????????????<br>???????????????100???????????????????????????????????????<br>??????????????????????????????????????????????????????<br>???????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Chiayi/Dongshi_Fisherman's_Wharf/110417_7w8wjpstzqx8thbdw5vogfk9p.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Dongshi_Fisherman's_Wharf/1548078758-ed83dc2fb15e2b48c5b9a08d1d69550c.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Dongshi_Fisherman's_Wharf/maxresdefault.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Dongshi_Fisherman's_Wharf/%E6%9D%B1%E7%9F%B3%E6%BC%81%E4%BA%BA%E7%A2%BC%E9%A0%AD.jpg">
                        <p class="detail_head">??????????????????</p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Dongshi_Fisherman's_Wharf/%E9%B3%A5%E7%9E%B0%E6%9D%B1%E7%9F%B3%E6%BC%81%E4%BA%BA%E7%A2%BC%E9%A0%AD.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Dongshi_Fisherman's_Wharf/%E7%B9%BD%E7%B4%9B%E5%BD%A9%E8%89%B2%E5%B1%8B.jpg">
                        <p class="detail_head">???????????????</p>
                    </li> `);
                    $de_src = 'https://www.taiwan.net.tw/m1.aspx?sNo=0001016&id=A12-00355';
                    $de_p = '????????????????????????????????????????????????<br>????????????????????????????????????????????????<br>?????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Tainan/Chigu_Salt_Mountain/%E4%B8%83%E8%82%A1%E9%B9%BD%E5%B1%B1.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Chigu_Salt_Mountain/%E5%90%8A%E6%A9%8B.jpg">
                        <p class="detail_head">??????</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Chigu_Salt_Mountain/%E6%9A%A2%E9%81%8A%E9%B9%BD%E5%B1%B1.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Chigu_Salt_Mountain/%E6%AD%A5%E9%81%93.jpg">
                        <p class="detail_head">??????</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Chigu_Salt_Mountain/%E9%80%B1%E9%82%8A%E9%80%A0%E6%99%AF.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Chigu_Salt_Mountain/%E9%B9%BD%E5%B1%B1%E5%85%A8%E6%99%AF.jpg">
                        <p class="detail_head">????????????</p>
                    </li> `);
                    $de_src = 'https://www.twtainan.net/zh-tw/attractions/detail/471';
                    $de_p = '????????????????????????????????????????????????????????????<br>?????????????????????????????????????????????????????????????????????????????????<br>????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Kaohsiung/Meinong/article-5ae14bc84c6a9.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/Meinong/nEO_IMG_DSC06305-3.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/Meinong/%E4%B8%8B%E8%BC%89.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/Meinong/%E7%BE%8E%E6%BF%83%E5%AE%A2%E5%AE%B6%E6%96%87%E7%89%A9%E9%A4%A8.JPG">
                        <p class="detail_head">?????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/Meinong/%E7%BE%8E%E6%BF%83%E6%B0%91%E4%BF%97%E6%9D%91.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/Meinong/%E7%BE%8E%E6%BF%83%E6%B9%96.jpg">
                        <p class="detail_head">?????????</p>
                    </li> `);
                    $de_src = 'https://fullfenblog.tw/khc-meinong/';
                    $de_p = '???????????????????????????????????????????????????<br>????????????????????????????????????????????????????????????????????????????????????????????????????????????<br>???????????????????????????????????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Pingtung/NationalMuseumofMarineBiology_Aquarium/20180724035712_79.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Pingtung/NationalMuseumofMarineBiology_Aquarium/20180724035724_77.jpg">
                        <p class="detail_head">??????????????????</p>
                    </li>
                    <li>
                        <img src="place/Pingtung/NationalMuseumofMarineBiology_Aquarium/20180724035725_85.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Pingtung/NationalMuseumofMarineBiology_Aquarium/20180724035907_3.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Pingtung/NationalMuseumofMarineBiology_Aquarium/%E5%9C%8B%E7%AB%8B%E6%B5%B7%E6%B4%8B%E7%94%9F%E7%89%A9%E5%8D%9A%E7%89%A9%E9%A4%A8.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Pingtung/NationalMuseumofMarineBiology_Aquarium/%E9%AF%A8%E9%AD%9A%E8%A6%AA%E6%B0%B4%E5%BB%A3%E5%A0%B4.jpg">
                        <p class="detail_head">??????????????????</p>
                    </li> `);
                    $de_src = 'https://www.tiffany0118.com/nmmba/';
                    $de_p = '?????????????????????????????????????????????????????????<br>??????????????????????????????????????????<br>?????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Penghu/PenghuTianhougong/107FDC59-BF45-40C0-96B5-DA7BE6CACF6C_e.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Penghu/PenghuTianhougong/603536FE-7502-4D97-82AE-5B51FCC2AF05_e.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Penghu/PenghuTianhougong/AE654DDE-92E9-4217-BFF4-F4FD07575EE0_e.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Penghu/PenghuTianhougong/%E4%B8%AD%E5%A4%AE%E8%80%81%E8%A1%97.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Penghu/PenghuTianhougong/%E5%9B%9B%E7%9C%BC%E4%BA%95.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/Penghu/PenghuTianhougong/%E6%BE%8E%E6%B9%96%E5%A4%A9%E5%90%8E%E5%AE%AE.jpg">
                        <p class="detail_head">???????????????</p>
                    </li> `);
                    $de_src = 'https://www.travelking.com.tw/tourguide/scenery1233.html';
                    $de_p = '??????????????????????????????????????????????????????????????????????????????<br>????????????????????????????????????????????????????????????<br>?????????????????????????????????????????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/hualian/qixingtan/2020082440.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/hualian/qixingtan/1232526201_o.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/hualian/qixingtan/1232526297_o.jpg">
                        <p class="detail_head">\</p>
                    </li>
                    <li>
                        <img src="place/hualian/qixingtan/1592752528-3383462225.jpg">
                        <p class="detail_head">????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/hualian/qixingtan/2020082411.jpg">
                        <p class="detail_head">???????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/hualian/qixingtan/2020082419.jpg">
                        <p class="detail_head">?????????????????????????????????????????????</p>
                    </li> `);
                    $de_src = 'https://yoke918.com/bonito/';
                    $de_p = '????????????????????????<br>????????????????????????????????????<br>?????????????????????: ???????????????????????????<br>?????????????????????????????????????????????<br>????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Quemoy/p3/p3_1.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p3/p3_2.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p3/p3_3.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p3/p3_4.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p3/p3_5.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p3/p3_6.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://kinmen.travel/zh-tw/travel/attraction/499';
                    $de_p = '???????????????????????????????????????????????????????????????????????????<br>?????????????????????????????????????????????????????????<br>??????????????????????????????????????????????????????????????????????????????<br>?????????2????????????????????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Matsu/p3/p3_1.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Matsu/p3/p3_2.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Matsu/p3/p3_3.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Matsu/p3/p3_4.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Matsu/p3/p3_5.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Matsu/p3/p3_6.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://journey.tw/matsu-blue-tears/';
                    $de_p = '??????????????????????????????????????????????????????????????????????????????<br>???????????????????????????????????????????????????????????????';
                }
                
                
                $de_old_img = $('.detail_img li');
                $de_old_p = $('.detail_img p');
                $de_old_img.hide().remove();
                $de_old_p.hide().remove();
                $('.detail_img ul').prepend($de_new_img);
                $('.detail_txt p').html($de_p);
                $('.detail_txt a').attr('href', $de_src);
            });
            
            //?????????????????????
            $('.btn_de4').click(function() {
                console.log($play_where);
                if ($play_where == '??????') {
                    $de_new_img = $(`<li><img src="place/yilan/BeiguanHaichaoPark/20201113184900_73.jpg"><p class="detail_head"></p></li>
                                    <li><img src="place/yilan/BeiguanHaichaoPark/20201113184957_74.jpg"><p class="detail_head">????????????</p></li>
                                    <li><img src="place/yilan/BeiguanHaichaoPark/20201113185002_92.jpg"><p class="detail_head">???????????????</p></li>
                                    <li><img src="place/yilan/BeiguanHaichaoPark/20201113185022_94.jpg"><p class="detail_head">??????????????????</p></li>
                                    <li><img src="place/yilan/BeiguanHaichaoPark/20201113185104_7.jpg"><p class="detail_head"></p></li>
                                    <li><img src="place/yilan/BeiguanHaichaoPark/20210320010952_78.jpg"><p class="detail_head">?????????????????????</p></li>
                                    `);
                    $de_src = 'https://bobowin.blog/beiguan-tidal-park/';
                    $de_p = '??????????????????<br>??????????????????????????????????????????10???<br>???????????????8:00 ~ 24:00';
                } else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Keelung/TidelandPark/1563332520-2192996227.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Keelung/TidelandPark/20200417130140_40.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Keelung/TidelandPark/20200417130153_22.jpg">
                        <p class="detail_head">????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Keelung/TidelandPark/20180821105038_19.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/Keelung/TidelandPark/20180821105020_92.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Keelung/TidelandPark/20180821105033_14.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/2016-11-10-465/';
                    $de_p = '????????????<br>?????????????????????????????????????????????369???';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/taipei/Mingyang_Creeping_Leisure_Farm/5d48ba72-880a-11eb-a9cf-ebc70ebd6358.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/taipei/Mingyang_Creeping_Leisure_Farm/20190330192025_74.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/taipei/Mingyang_Creeping_Leisure_Farm/20190330192034_25.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/taipei/Mingyang_Creeping_Leisure_Farm/20190330192138_86.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/taipei/Mingyang_Creeping_Leisure_Farm/20190330192123_60.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/taipei/Mingyang_Creeping_Leisure_Farm/20190330192245_59.jpg">
                        <p class="detail_head">????????????</p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/minyangpu/';
                    $de_p = '?????????????????????<br>??????????????????????????????<br>???????????????7:30 ~ 18:00<br>??????$150/??????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/newTP/Yunxian_Paradise/20210113232340_84.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/newTP/Yunxian_Paradise/20210113232522_80.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/newTP/Yunxian_Paradise/20210113232621_59.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/newTP/Yunxian_Paradise/20210113232720_62.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/newTP/Yunxian_Paradise/%E5%9C%96%E5%85%AD.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/newTP/Yunxian_Paradise/20210113232453_66.jpg">
                        <p class="detail_head">????????????</p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/yunhsien/';
                    $de_p = '??????????????????$220?????????????????????????????????<br>?????????????????????????????????????????????????????????????????????????????????<br>?????????????????????$500/??????????????????????????????????????????<br>????????????: ????????????????????????1~2??????$150??????<br>???????????????????????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Taoyuan/MaruyamaCoffee/20210519090527_90.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/MaruyamaCoffee/20190625103505_51.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/MaruyamaCoffee/20190625103556_80.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/MaruyamaCoffee/20190625103852_17.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/MaruyamaCoffee/20210519090431_11.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/MaruyamaCoffee/20210519090511_96.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/playmountain/';
                    $de_p = '????????????<br>??????????????????????????????????????????2???8??????1<br>????????????????????? ~ ?????? 10:00 ~ 18:30???<br>?????? ~ ?????? 9:00 ~ 19:00';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Hsinchu/WatermelonManor/20171108175641_58.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/WatermelonManor/20171108175645_95.jpg">
                        <p class="detail_head">??????</p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/WatermelonManor/20171108175659_100.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/WatermelonManor/20171108175706_29.jpg">
                        <p class="detail_head">??????</p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/WatermelonManor/20171108175750_79.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/WatermelonManor/20171108175723_18.jpg">
                        <p class="detail_head">????????????</p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/2013-10-07-179/';
                    $de_p = '????????????<br>??????????????????????????????????????????32??????10<br>?????????????????????&????????????10:00~18:00<br>????????????$150/?????????????????????????????????????????????$100???';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Miaoli/Sanyi_Wood_Sculpture_Museum/14793505750_44008f738b_c.jpg">
                        <p class="detail_head">??????????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Sanyi_Wood_Sculpture_Museum/14977074331_8f75e11420_c.jpg">
                        <p class="detail_head">???????????????????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Sanyi_Wood_Sculpture_Museum/14977076391_c009d95e58_c.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Sanyi_Wood_Sculpture_Museum/14980170425_11842ea308_c.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Sanyi_Wood_Sculpture_Museum/%E4%B8%89%E7%BE%A9%E6%9C%A8%E9%9B%95%E5%8D%9A%E7%89%A9%E9%A4%A8.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Sanyi_Wood_Sculpture_Museum/%E6%9C%A8%E9%9B%95.jpg">
                        <p class="detail_head">?????????</p>
                    </li>`);
                    $de_src = 'https://www.teresablog.com/blog/post/41284501';
                    $de_p = '???????????????????????????????????????????????????????????????????????????????????????<br>?????????????????????????????????????????????????????????????????????????????????<br>?????????????????????????????????????????????<br>?????????????????????????????????????????????????????????????????????????????????<br>?????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Taichung/Dajia_Jenn_Lann_Temple/Filedata635174533269013515.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taichung/Dajia_Jenn_Lann_Temple/Filedata635174533502118984.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taichung/Dajia_Jenn_Lann_Temple/Filedata635174533582656093.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taichung/Dajia_Jenn_Lann_Temple/%E5%A4%A7%E7%94%B2%E9%8E%AE%E7%80%BE%E5%AE%AE.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taichung/Dajia_Jenn_Lann_Temple/Filedata635174533269013515.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taichung/Dajia_Jenn_Lann_Temple/Filedata635174533502118984.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://travel.taichung.gov.tw/zh-tw/Attractions/Intro/609/%E5%A4%A7%E7%94%B2%E9%8E%AE%E7%80%BE%E5%AE%AE';
                    $de_p = '??????????????????????????????????????????<br>??????????????????????????????????????????????????????????????????????????????????????????<br>????????????????????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Changhua/Xihu_Sugar_Factory_Wufen_Station/2016122910434592604.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Changhua/Xihu_Sugar_Factory_Wufen_Station/2017081514301229068.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Changhua/Xihu_Sugar_Factory_Wufen_Station/DSC07845.JPG">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Changhua/Xihu_Sugar_Factory_Wufen_Station/DSC07858.JPG">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Changhua/Xihu_Sugar_Factory_Wufen_Station/%E6%BA%AA%E6%B9%96%E7%B3%96%E5%BB%A0.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Changhua/Xihu_Sugar_Factory_Wufen_Station/%E6%BA%AA%E6%B9%96%E7%B3%96%E5%BB%A0%E4%BA%94%E5%88%86%E8%BB%8A%E7%AB%99.jpg">
                        <p class="detail_head">?????????????????????</p>
                    </li>`);
                    $de_src = 'https://tourism.chcg.gov.tw/AttractionsContent.aspx?id=30&chk=b11a2980-1154-43b4-be28-59c39fb6e8c2';
                    $de_p = '??????????????????????????????????????????????????????????????????????????????????????????????????????<br>????????????????????????????????????????????????????????????????????????????????????<br>???????????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Nantou/Jiji_Railway_Station/1566124274-28b06bda6ab0c5f852b370aa608bd455.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Nantou/Jiji_Railway_Station/1568516905-877edb6be482e82abc817c7a8d68deca.jpg">
                        <p class="detail_head">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Nantou/Jiji_Railway_Station/1568551035-4ec56a98b42c64942a6b7096e5113a80.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Nantou/Jiji_Railway_Station/5E2DE5FA-226D-40E7-9736-344714765799_d.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Nantou/Jiji_Railway_Station/%E4%B8%8B%E8%BC%89.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Nantou/Jiji_Railway_Station/%E9%9B%86%E9%9B%86%E7%81%AB%E8%BB%8A%E7%AB%99.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://jatraveling.tw/blog/post/24456';
                    $de_p = '???????????????????????????????????????????????????????????????????????????????????????????????????<br>??????921???????????????????????????????????????????????????????????????????????????????????????<br>??????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Yunlin/Yunlin_Palm_Puppets_Museum/20180413235843_87.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Yunlin_Palm_Puppets_Museum/b3694_1.jpg">
                        <p class="detail_head">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Yunlin_Palm_Puppets_Museum/IMG_723-1.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Yunlin_Palm_Puppets_Museum/maxresdefault.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Yunlin_Palm_Puppets_Museum/%E9%9B%B2%E6%9E%97%E5%B8%83%E8%A2%8B%E6%88%B2%E9%A4%A8.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Yunlin_Palm_Puppets_Museum/images%20(1).jpg">
                        <p class="detail_head"></p>
                    </li> `);
                    $de_src = 'https://okgo.tw/butyview.html?id=3694';
                    $de_p = '????????????????????????????????????????????????<br>??????????????????????????????????????????????????????<br>??????????????????????????????????????????????????????<br>?????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Chiayi/Fenqihu_Old_Street/1580886236-35b03fce20105f96294e0f1cff5bff21.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Fenqihu_Old_Street/article-5cf6a8ec5634d.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Fenqihu_Old_Street/%E5%A5%AE%E8%B5%B7%E6%B9%96.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Fenqihu_Old_Street/%E5%A5%AE%E8%B5%B7%E6%B9%96%E8%80%81%E8%A1%97.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Fenqihu_Old_Street/%E5%A5%AE%E8%B5%B7%E6%B9%96%E9%90%B5%E8%B7%AF.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Fenqihu_Old_Street/%E5%A5%AE%E8%B5%B7%E6%B9%96%E9%A2%A8%E6%99%AF%E5%8D%80.jpg">
                        <p class="detail_head">??????????????????</p>
                    </li> `);
                    $de_src = 'https://www.taiwan.net.tw/m1.aspx?sNo=0001016&id=A12-00355';
                    $de_p = '??????????????????????????????????????????????????????????????????<br>???????????????????????????????????????????????????????????????<br>??????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Tainan/Wanpi_World_Safari_Zoo/1575027454-1342438641_l.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Wanpi_World_Safari_Zoo/1575027454-3673584031_l.jpg">
                        <p class="detail_head">??????</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Wanpi_World_Safari_Zoo/1575027456-735130902_l.jpg">
                        <p class="detail_head">???????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Wanpi_World_Safari_Zoo/1575027458-3290342908_l.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Wanpi_World_Safari_Zoo/%E9%A0%91%E7%9A%AE%E4%B8%96%E7%95%8C%E9%87%8E%E7%94%9F%E5%8B%95%E7%89%A9%E5%9C%92.jpg">
                        <p class="detail_head">???????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Wanpi_World_Safari_Zoo/1575027457-2128046459_l.jpg">
                        <p class="detail_head">??????</p>
                    </li> `);
                    $de_src = 'https://yoyoman822.pixnet.net/blog/post/68542880';
                    $de_p = '???????????????????????????????????????????????????????????????20?????????<br>??????300????????????????????????????????????<br>??????????????????????????????????????????????????????<br>????????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Kaohsiung/ThePier2ArtCenter/batch_P1340400-1200x800.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/ThePier2ArtCenter/Ther_Pier-2_Art_Center_Pengiai_Warehouse.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/ThePier2ArtCenter/%E9%AB%98%E9%9B%84%E5%A4%A7%E6%B8%AF%E6%A9%8B.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/ThePier2ArtCenter/%E6%A3%A7%E8%B2%B3%E5%BA%ABKW2.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/ThePier2ArtCenter/%E4%B8%8B%E8%BC%89.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/ThePier2ArtCenter/%E5%93%88%E7%91%AA%E6%98%9F%E5%8F%B0%E7%81%A3%E9%90%B5%E9%81%93%E9%A4%A8.jpg">
                        <p class="detail_head">????????????????????????</p>
                    </li>`);
                    $de_src = 'https://khh.travel/zh-tw/attractions/detail/6';
                    $de_p = '???????????????????????????????????????????????????????????????<br>????????????????????????????????????????????????????????????????????????<br>????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Pingtung/ParadiseDeer/%E9%B9%BF%E5%A2%83%E6%A2%85%E8%8A%B1%E9%B9%BF%E7%94%9F%E6%85%8B%E5%9C%92%E5%8D%80.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Pingtung/ParadiseDeer/%E6%A2%85%E8%8A%B1%E9%B9%BF.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/Pingtung/ParadiseDeer/1611378753-9d68252645e7b6004d36f678aeebf572.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Pingtung/ParadiseDeer/1611378709-f76664d63e2d88d62a070eb6ce73ddd7.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Pingtung/ParadiseDeer/1611378678-cfd9915fa36db2e91644951e270213d1.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/Pingtung/ParadiseDeer/1611378665-8228fe5aca5069ac25192edf669a807d.jpg">
                        <p class="detail_head">???????????????</p>
                    </li> `);
                    $de_src = 'https://zineblog.com.tw/blog/post/201229';
                    $de_p = '??????????????????????????????????????????????????????<br>??????????????????????????????????????????<br>???????????????????????????????????????<br>???????????????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Penghu/Submarinepostbox/5.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Penghu/Submarinepostbox/%E6%BE%8E%E6%B9%9611.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Penghu/Submarinepostbox/%E6%BE%8E%E6%B9%963.jpg">
                        <p class="detail_head">?????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Penghu/Submarinepostbox/%E6%BE%8E%E6%B9%967.jpg">
                        <p class="detail_head">???????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Penghu/Submarinepostbox/%E6%BE%8E%E6%B9%969.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Penghu/Submarinepostbox/%E6%BE%8E%E6%B9%96%E6%B5%B7%E5%BA%95%E9%83%B5%E7%AD%92.jpg">
                        <p class="detail_head"></p>
                    </li> `);
                    $de_src = 'https://www.triptaiwan.com/2018/06/12/%E6%BE%8E%E6%B9%96%E6%B5%B7%E5%BA%95%E9%83%B5%E7%AD%92-%E6%BD%9B%E6%B0%B4%E8%A6%AA%E6%89%8B%E5%AF%84%E6%98%8E%E4%BF%A1%E7%89%87-%E5%AF%84%E5%87%BA%E5%BE%9E%E6%B5%B7%E5%BA%95%E7%9A%84%E5%BF%83%E6%84%8F/';
                    $de_p = '?????????????????????????????????????????????????????????????????????????????????<br>???????????????????????????????????????????????????????????????????????????<br>???????????????150???????????????6???????????????<br>????????????????????????????????????????????????????????????<br>????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/hualian/yunshanshui/1406466766-1697929898.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/hualian/yunshanshui/1406466795-957891828.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/hualian/yunshanshui/1406466971-3667547183.jpg">
                        <p class="detail_head">\</p>
                    </li>
                    <li>
                        <img src="place/hualian/yunshanshui/20190719161401_18.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/hualian/yunshanshui/20190719161453_42.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/hualian/yunshanshui/20190719161447_74.jpg">
                        <p class="detail_head">????????????</p>
                    </li>`);
                    $de_src = 'https://www.bosomgirl.com/2017/08/emeraldvalley.html';
                    $de_p = '??????????????????<br>??????????????????????????????????????????2???201???18???<br>???????????????24???';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Quemoy/p4/p4_1.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p4/p4_2.jpg">
                        <p class="detail_head">??????????????????????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p4/p4_3.jpg">
                        <p class="detail_head">??????????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p4/p4_4.jpg">
                        <p class="detail_head">????????????</p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p4/p4_5.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p4/p4_6.jpg">
                        <p class="detail_head">???????????????</p>
                    </li>`);
                    $de_src = 'https://kinmen.travel/zh-tw/travel/attraction/1450';
                    $de_p = '????????????????????????????????????????????????????????????????????????????????????<br>?????????????????????????????????????????????????????????<br>?????????????????????????????????????????????????????????<br>??????????????????????????????????????????<br>??????????????????????????????????????????????????????';
                }else if ($play_where == '??????') {
                    $de_new_img = $(`<li>
                        <img src="place/Matsu/p4/p4_1.jpg">
                        <p class="detail_head">?????????640?????????????????????700???????????????????????????30??????</p>
                    </li>
                    <li>
                        <img src="place/Matsu/p4/p4_2.jpg">
                        <p class="detail_head">????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Matsu/p4/p4_3.jpg">
                        <p class="detail_head">?????????</p>
                    </li>
                    <li>
                        <img src="place/Matsu/p4/p4_4.jpg">
                        <p class="detail_head">????????????????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Matsu/p4/p4_5.jpg">
                        <p class="detail_head">????????????????????????</p>
                    </li>
                    <li>
                        <img src="place/Matsu/p4/p4_6.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://journey.tw/juguang-lighthouse/';
                    $de_p = '?????????????????????????????????????????????????????????????????????????????????<br>????????????????????????????????????????????????????????????????????????????????????<br>?????????????????????????????????????????????????????????????????????<br>??????????????????????????????????????????????????????????????????????????????';
                }
                
                
                $de_old_img = $('.detail_img li');
                $de_old_p = $('.detail_img p');
                $de_old_img.hide().remove();
                $de_old_p.hide().remove();
                $('.detail_img ul').prepend($de_new_img);
                $('.detail_txt p').html($de_p);
                $('.detail_txt a').attr('href', $de_src);
            });

            $('.btn_detail').click(function() {
                $('.detail_txt a').hover(function() {
                    $(this).css('color', '#2b4d4e');
                }, function() {
                    $(this).css('color', 'rgb(230, 255, 239)');
                });
                //????????????
                var img_count = $('.detail_img li').length;
                //??????????????????????????????
                var img_current = 1;
                var img_next = 2;
                //?????????
                var img_timer;
                //???????????????????????????
                $('.detail_img li:not(:first-child)').hide();

                //??????3000??????????????????
                img_timer = setInterval(img_slider, 3000);

                function img_slider() {
                    console.log(img_current);
                    console.log(img_next);
                    //????????????
                    //:nth-child()???????????????
                    $('.detail_img li:nth-child(' + img_current + ')').fadeOut(1000);
                    $('.detail_img li:nth-child(' + img_next + ')').fadeIn(1000);

                    img_current = img_next;
                    ++img_next;
                    if (img_next > img_count) {
                        img_next = 1;
                    }

                    //????????????????????????target??????
                    $('.detail_img_link li a').removeClass('target');
                    $('.detail_img_link li:nth-child(' + img_current + ') a').addClass('target');
                }

                //?????????????????????
                $('.detail_img_link li a').click(function() {
                    img_next = $(this).html();
                    clearInterval(img_timer);
                    img_timer = setInterval(img_slider, 3000);
                    img_slider();
                    return false;
                });

                $('.intro_detail').show(1000);
                $('.detail_close').click(function() {
                    $('.intro_detail').hide(1000);
                    //???????????????????????????
                    clearInterval(img_timer);
                });

            });

            var $name, $nameid, $city_id, $area_id, $image;

            function sendplace(cid, ctid, cttid) {
                if (cid == 1 && ctid == 1 && cttid == 1) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $image = ('<?php echo $place['pSightImg'];?>')
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                    <section class="mx-auto my-5" style="max-width: 23rem;">
                                    <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                    <div>
                                            <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                            </div>
                                        </div>
                                    <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                        <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                        alt="Card image cap" />
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text collapse" id="collapseContent">
                                        </p>
                                    </div>
                                    </div>
                                    </section>
                                </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })
                } else if (cid == 1 && ctid == 1 && cttid == 2) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 1 && cttid == 3) {


                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })
                } else if (cid == 1 && ctid == 1 && cttid == 4) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 2 && cttid == 1) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=2 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 2 && cttid == 2) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=2 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 2 && cttid == 3) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=2 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 2 && cttid == 4) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=2 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 3 && cttid == 1) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=3 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 3 && cttid == 2) {
                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=3 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 3 && cttid == 3) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=3 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 3 && cttid == 4) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=3 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 4 && cttid == 1) {
                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=4 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 4 && cttid == 2) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=4 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 4 && cttid == 3) {
                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=4 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })
                } else if (cid == 1 && ctid == 4 && cttid == 4) {
                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=4 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 5 && cttid == 1) {
                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=5 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 5 && cttid == 2) {
                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=5 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 5 && cttid == 3) {
                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=5 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 5 && cttid == 4) {
                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=5 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 6 && cttid == 1) {
                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=6 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 6 && cttid == 2) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=6 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 6 && cttid == 3) {
                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=6 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 6 && cttid == 4) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=6 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                }
                if (cid == 2 && ctid == 1 && cttid == 1) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=1 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $image = ('<?php echo $place['pSightImg'];?>')
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                    <section class="mx-auto my-5" style="max-width: 23rem;">
                                    <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                    <div>
                                            <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                            </div>
                                        </div>
                                    <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                        <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                        alt="Card image cap" />
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text collapse" id="collapseContent">
                                        </p>
                                    </div>
                                    </div>
                                    </section>
                                </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })
                } else if (cid == 2 && ctid == 1 && cttid == 2) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=1 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 2 && ctid == 1 && cttid == 3) {
                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=1 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })
                } else if (cid == 2 && ctid == 1 && cttid == 4) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=1 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 2 && cttid == 1) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=2 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 2 && cttid == 2) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=2 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 2 && cttid == 3) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=2 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 2 && cttid == 4) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=2 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 3 && cttid == 1) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=3 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 3 && cttid == 2) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=3 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 3 && cttid == 3) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=3 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 3 && cttid == 4) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=3 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 4 && cttid == 1) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=4 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 4 && cttid == 2) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=4 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 4 && cttid == 3) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=4 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 4 && cttid == 4) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=4 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 5 && cttid == 1) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=5 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 5 && cttid == 2) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=5 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 5 && cttid == 3) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=5 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 5 && cttid == 4) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=5 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                }
                if (cid == 3 && ctid == 1 && cttid == 1) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=1 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $image = ('<?php echo $place['pSightImg'];?>')
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                    <section class="mx-auto my-5" style="max-width: 23rem;">
                                    <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                    <div>
                                            <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                            </div>
                                        </div>
                                    <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                        <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                        alt="Card image cap" />
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text collapse" id="collapseContent">
                                        </p>
                                    </div>
                                    </div>
                                    </section>
                                </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }
                } else if (cid == 3 && ctid == 1 && cttid == 2) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=1 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 1 && cttid == 3) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=1 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }
                } else if (cid == 3 && ctid == 1 && cttid == 4) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=1 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 2 && cttid == 1) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=2 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 2 && cttid == 2) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=2 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 2 && cttid == 3) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=2 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 2 && cttid == 4) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=2 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 3 && cttid == 1) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=3 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 3 && cttid == 2) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=3 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 3 && cttid == 3) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=3 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 2 && cttid == 4) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=3 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 4 && cttid == 1) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=4 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 4 && cttid == 2) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=4 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 4 && cttid == 3) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=4 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 4 && cttid == 4) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=4 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 5 && cttid == 1) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=5 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 5 && cttid == 2) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=5 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 5 && cttid == 3) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=5 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 5 && cttid == 4) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=5 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                }
                if (cid == 4 && ctid == 1 && cttid == 1) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=4 AND  `pCity`=1 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $image = ('<?php echo $place['pSightImg'];?>')
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                    <section class="mx-auto my-5" style="max-width: 23rem;">
                                    <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                    <div>
                                            <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                            </div>
                                        </div>
                                    <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                        <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                        alt="Card image cap" />
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text collapse" id="collapseContent">
                                        </p>
                                    </div>
                                    </div>
                                    </section>
                                </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }
                } else if (cid == 4 && ctid == 1 && cttid == 2) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=4 AND  `pCity`=1 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 4 && ctid == 1 && cttid == 3) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=4 AND  `pCity`=1 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }
                } else if (cid == 4 && ctid == 1 && cttid == 4) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=4 AND  `pCity`=1 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 4 && ctid == 2 && cttid == 1) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=4 AND  `pCity`=2 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                }
                if (cid == 5 && ctid == 1 && cttid == 1) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=5 AND  `pCity`=1 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $image = ('<?php echo $place['pSightImg'];?>')
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                    <section class="mx-auto my-5" style="max-width: 23rem;">
                                    <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                    <div>
                                            <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                            </div>
                                        </div>
                                    <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                        <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                        alt="Card image cap" />
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text collapse" id="collapseContent">
                                        </p>
                                    </div>
                                    </div>
                                    </section>
                                </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }
                } else if (cid == 5 && ctid == 1 && cttid == 2) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=5 AND  `pCity`=1 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 5 && ctid == 1 && cttid == 3) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=5 AND  `pCity`=1 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }
                } else if (cid == 5 && ctid == 1 && cttid == 4) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=5 AND  `pCity`=1 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 5 && ctid == 2 && cttid == 1) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=5 AND  `pCity`=2 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 5 && ctid == 2 && cttid == 2) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=5 AND  `pCity`=2 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 5 && ctid == 2 && cttid == 3) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=5 AND  `pCity`=2 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 5 && ctid == 2 && cttid == 4) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=5 AND  `pCity`=2 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                }



                // $('#savebtn.btn.btn-primary').click(function()
                //                         {
                //                             $.ajax({
                //                                 type: 'post',
                //                                 url: 'upload_choice.php',
                //                              data: {
                //                                 name: $name,
                //                                 nameid: $nameid,
                //                                 areaid:$area_id,
                //                                 cityid:$city_id,
                //                                 id:<?php echo $id?>
                //                              },
                //                             success: function (data) {
                //                             if (data == 'ok') {
                //                              alert('All good. Everything saved!');
                //                              window.location.href = "home.php";
                //                             } 
                //                             else {
                //                                 alert('something went wrong...');
                //                             }
                //                             //  alert(data);
                //                             }
                //                             });

                //                         })
                // $('.btn.btn-secondary').click(function()
                //                         {

                //                             location.reload(true);
                //                         })

            }

        });

        //class="card bg-info text-white c1"

    </script>
</body>

</html>
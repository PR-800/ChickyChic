<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="Purchase.css">

    <style>
        /* home.css */
        * {
            font-family: 'Kanit', sans-serif;
        }

        body {
            background: url('../IMG/bg.png');
            background-size: cover;
        }

        .container-fluid {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .header-area {
            padding-top: 10px;
            padding-bottom: 20px;
        }

        .header {
            width: 94%;
            height: 110px;
            position: relative;
            background-color: rgb(254, 254, 254, 70%);
            top: 10%;
            left: 50%;
            transform: translate(-50%, 0%);
            border-radius: 20px;
            font-size: 25px;
        }

        .logo-img {
            position: absolute;
            top: 11px;
            left: 35px;
            width: 90px;
        }

        .logo-word {
            position: absolute;
            top: 23px;
            left: 160px;
            width: 110px;
        }

        .line {
            position: absolute;
            top: 20px;
            left: 310px;
            border-left: 3px solid rgb(253 165 39);
            height: 70px;
        }

        .nav {
            position: absolute;
            top: 30px;
        }

        .nav:link, .nav:visited {
            color: black;
            text-decoration: none;
        }

        .nav:hover {
            color: rgb(136, 136, 136);
        }

        .logo-basket {
            position: absolute;
            top: 35px;
            right: 380px;
            width: 38px;
            filter: brightness(100);
        }

        .basket-bg {
            position: absolute;
            top: 25px;
            right: 170px;
            width: 280px;
            height: 60px;
            border-radius: 35px;
            background-color: rgb(241 72 34);
        }

        .basket-num {
            position: absolute;
            top: 18px;
            right: 430px;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: rgb(253 165 39);
            text-align: center;
        }

        .logo-user {
            position: absolute;
            top: 32px;
            right: 70px;
            width: 50px;
        }

        .btn, .btn:hover {
            width: 100%;
            background-color: rgb(241 72 34);
            border-radius: 20px;
            border: 2px solid rgb(241 72 34);
            text-decoration: none;
        }
        .modal-title {
            color: rgb(253 165 39);
            margin-bottom: 2%;
        }

        .table {
            font-size: 30px;
        }

        .row {
            font-size: 30px;
            position: relative;
            top: 0;
            left: 50%;
            transform: translate(-50%, 0);
            width: 90%;
        }

        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }

        .pay {
            padding: 1rem;
            width: 25rem;
            height: 22rem;
            top: 5%;
            position: sticky;
            z-index: -10;
        }

    </style>

</head>
<body>
    <div class="container-fluid">
        <div class="header-area">
            <div class="header">
                <a href="../Home/Home.php">
                    <img class="logo-img"
                        src="../IMG/logo/logo-img.png">
                    <img class="logo-word"
                        src="../IMG/logo/logo-word.png">
                </a>
                <div class="bar">
                    <a class="line"></a>
                    <a class="nav" href="../Home/Home.php" style="top: 40px; left: 360px;">หน้าหลัก</a>
                    <a class="nav" href="../Menu/Menu.php" style="top: 40px; left: 505px;">เมนู</a>
                    <a class="nav" href="../Promotion/Promotion.php" style="top: 40px; left: 610px;">โปรโมชั่น</a>
                </div>
                <div class="bar-basket">
                    <a class="basket-bg"></a>
                    <img class="logo-basket"
                        src="../IMG/logo/logo-basket.png">
                    <a class="nav" style="top: 38px; right: 205px; color: white;">ออเดอร์ของคุณ</a>
                    <a class="basket-num">
                        <p style="color: white; font-size: 23px;">
                        <?php
                            class NumDB extends SQLite3{
                                function __construct(){
                                    $this->open('../Database/selectMenu.db');
                                }
                            }

                            $db = new NumDB();
                            if(!$db){
                                echo $db->lastErrorMsg();
                            }
                            $sql ="SELECT * from selectMenu";
                            $ret = $db->query($sql);
                            $num = 0;
                            while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
                                +$num += +$row['AMOUNT'];
                            }
                            echo $num;

                            $db->close();
                        ?>
                        </p>
                    </a>
                    <a class="basket-bg" href="../Purchase/Purchase.php" style="background-color: transparent;"></a>
                </div>

                <div class="dropdown">
                    <img src = "../IMG/logo/logo-user.png"
                        aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" type="button" class="logo-user" class="dropdown-toggle">
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="../User/SignIn.php">Sign in</a>
                        <a class="dropdown-item" href="../User/SignUp.php">Sign up</a>
                        <a class="dropdown-item" href="../User/Profile.php">Profile</a>
                    </div>
                </div>
            </div>
        </div>

        <?php
            class MyDB extends SQLite3{
                function __construct(){
                    $this->open('../Database/selectMenu.db');
                }
            }

            $db = new MyDB();
            if(!$db){
                echo $db->lastErrorMsg();
            }
        ?>

        <div class="row">
            <div class="col-md-9">
                <table class="table">
                    <tr>
                        <th style="width:20%;">รายการ</th>
                        <th style="width:40%;"></th>
                        <th style="width:15%;">จำนวน</th>
                        <th style="width:15%;">ราคา</th>
                        <th style="width:10%;"></th>
                    </tr>
                    <?php
                        $sql ="SELECT * from selectMenu";
                        $ret = $db->query($sql);
                        while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
                            echo "<tr>";
                            echo "<td>" . "<img src='" . $row['IMG'] . "' width='100%'></td>";
                            echo "<td style='text-align: left;'>" .$row['NAME'] . "</td>";
                            echo "<td>" . $row['AMOUNT'] . "</td>";
                            echo "<td>" . (+$row['PRICE'])*(+$row['AMOUNT']) . "</td>";
                            echo "<td></td>";
                            echo "</tr>";
                        }
                    ?>
                </table>
            </div>
            <div class="col-md-3 d-flex justify-content-center">
                <div class="pay card text-center">
                    <div class="card-body">
                        <p class="card-text">
                            <span style="float: left;">ค่าอาหาร</span>
                            <span style="float: right;">
                            <?php
                                $sql ="SELECT * from selectMenu";
                                $ret = $db->query($sql);
                                $total = 0;
                                while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
                                    +$total += +$row['PRICE'];
                                }
                                echo $total;
                            ?> บาท</span><br>
                            <span style="float: left;">ค่าจัดส่ง</span>
                            <span style="float: right;">
                            <?php
                                $sql ="SELECT * from selectMenu";
                                $ret = $db->query($sql);
                                if (empty($ret)) {
                                    $ship = 0;
                                }
                                else {
                                    $ship = 25;
                                }
                                while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
                                    +$ship += 5;
                                }
                                echo $ship ;
                            ?> บาท</span><br><br>
                            <b><span style="float: left;">ยอดรวม</span>
                            <span style="float: right;">
                            <?php
                                $sql ="SELECT * from selectMenu";
                                $ret = $db->query($sql);
                                $total = 0;
                                if (empty($ret)) {
                                    $ship = 0;
                                }
                                else {
                                    $ship = 25;
                                }
                                while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
                                    +$total += +$row['PRICE'];
                                    +$ship += 5;
                                }
                                echo +$total + +$ship ;
                            ?> บาท</span><br></b>
                        </p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#orderConfirm"
                            style="font-size: 30px; border-radius: 30px;">ดำเนินการต่อ</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="orderConfirm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document" style="font-size: 30px;">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h5 class="modal-title"><b>ที่อยู่สำหรับการจัดส่ง</b></h5>
                        <form>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">ชื่อ</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="fname">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">นามสกุล</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="lname">
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend" >
                                    <span class="input-group-text">ที่อยู่</span>
                                </div>
                                <textarea class="form-control rounded-0" rows="2"></textarea>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">ตำบล/แขวง</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="district">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">จังหวัด</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="province" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">รหัสไปรษณีย์</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="postnum">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">เบอร์โทรศัพท์</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="phone">
                                    </div>
                                </div>
                            </div>
                            <h5 class="modal-title" style="margin-bottom: 1%;"><b>รูปแบบการชำระเงิน</b></h5>
                            <div class="form-check" style="margin-left: 5%;">
                                <input class="form-check-input" type="radio" name="payment">
                                <label class="form-check-label">เก็บเงินปลายทาง</label><br>
                                <input class="form-check-input" type="radio" name="payment">
                                <label class="form-check-label">บัญชีธนาคาร</label>
                            </div>
                        </form>

                        <button type="button" class="btn btn-primary">ดำเนินการต่อ</button>

                    </div>
                </div>
            </div>
        </div>

        <?php
            $db->close();
        ?>
    </div>
</body>
</html>

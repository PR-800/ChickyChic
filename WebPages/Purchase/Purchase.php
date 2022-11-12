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
            padding-bottom: 10px;
        }

        .header {
            width: 94%;
            height: 140px;
            position: relative;
            background-color: rgb(254, 254, 254, 70%);
            top: 10%;
            left: 50%;
            transform: translate(-50%, 0%);
            border-radius: 20px;
            font-size: 30px;
        }

        .logo-img {
            position: absolute;
            top: 6px;
            left: 25px;
            width: 110px;
        }

        .logo-word {
            position: absolute;
            top: 30px;
            left: 175px;
            width: 130px;
        }

        .line {
            position: absolute;
            top: 20px;
            left: 330px;
            border-left: 3px solid rgb(253 165 39);
            height: 100px;
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
            top: 45px;
            right: 400px;
            width: 50px;
            filter: brightness(100);
        }

        .basket-bg {
            position: absolute;
            top: 35px;
            right: 170px;
            width: 310px;
            height: 70px;
            border-radius: 35px;
            background-color: rgb(241 72 34);
        }

        .basket-num {
            position: absolute;
            top: 25px;
            right: 455px;
            width: 46px;
            height: 46px;
            border-radius: 50%;
            background-color: rgb(253 165 39);
            text-align: center;
        }

        .logo-user {
            position: absolute;
            top: 40px;
            right: 70px;
            width: 60px;
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
        .col {
            align-items: center;
            text-align: center;
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
                    <a class="nav" href="../Home/Home.php" style="top: 50px; left: 380px;">หน้าหลัก</a>
                    <a class="nav" href="../Menu/Menu.php" style="top: 50px; left: 530px;">เมนู</a>
                    <a class="nav" href="../Promotion/Promotion.php" style="top: 50px; left: 630px;">โปรโมชั่น</a>
                </div>
                <a href="">
                    <div class="bar-basket">
                        <a class="basket-bg"></a>
                        <img class="logo-basket"
                            src="../IMG/logo/logo-basket.png">
                        <a class="nav" style="top: 45px; right: 195px; color: white;">ออเดอร์ของคุณ</a>
                        <a class="basket-num">
                            <p style="color: white; font-size: 28px;">55</p>
                        </a>
                        <a class="basket-bg" href="../Purchase/Purchase.php" style="background-color: transparent;"></a>
                    </div>
                </a>
                <a href="../User/SignIn.php"><img class="logo-user"
                    src="../IMG/logo/logo-user.png"></a>
            </div>
        </div>

        <?php
            class SelectMenu extends SQLite3{
                function __construct(){
                    $this->open('selectMenu.db');
                }
            }

            $db = new SelectMenu();
            if(!$db){
                echo $db->lastErrorMsg();
            }
        ?>

        <div class="row">
            <div class="col">
                <table class="table">
                    <tr>
                        <th style="width:70%;">รายการ</th>
                        <th>จำนวน</th>
                        <th>ราคา</th>
                    </tr>
                    <?php
                        // $sql ="SELECT * from selectMenu";
                        // $ret = $db->query($sql);
                        // while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
                        //     echo "<tr>";
                        //     echo "<td>" . $row['Image'] . "</td>" . $row['Menu'] . "</td>";
                        //     echo "<td>" . $row['Number'] . "</td>";
                        //     echo "<td>" . (+$row['Price'])*(+$row['Number']) . "</td>";
                        //     echo "</tr>";
                        // }
                    ?>
                </table>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card text-center" style="width: 15rem;">
                    <div class="card-body">
                        <p class="card-text">
                            <span style="float: left;">ค่าอาหาร</span>
                            <span style="float: right;">0 บาท</span><br>
                            <span style="float: left;">ค่าจัดส่ง</span>
                            <span style="float: right;">0 บาท</span><br><br>
                            <b><span style="float: left;">ยอดรวม</span>
                            <span style="float: right;">0 บาท</span><br></b>
                        </p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#orderConfirm">ดำเนินการต่อ</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="orderConfirm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
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

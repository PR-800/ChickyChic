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
                <img class="logo-img" src="./IMG/logo/logo-img.png">
                <img class="logo-word" src="./IMG/logo/logo-word.png">
                <div class="bar">
                    <a class="line"></a>
                    <a class="nav" href="Home.php" style="left: 235px; color: rgb(253 165 39);">หน้าหลัก</a>
                    <a class="nav" href="Menu.php" style="left: 320px;">เมนู</a>
                    <a class="nav" href="Promotion.php" style="left: 380px;">โปรโมชั่น</a>
                </div>
                <div class="bar-basket">
                    <a class="basket-bg"></a>
                    <img class="logo-basket" src="./IMG/logo/logo-basket.png">
                    <a class="nav" href="Purchase.php" style="right: 95px; color: white;">ออเดอร์ของคุณ</a>
                    <a class="basket-num"><p style="color: white;">55</p></a>
                </div>
                <div class="bar-dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="Home.html" style="color: rgb(253 165 39);">หน้าหลัก</a>
                        <a class="dropdown-item" href="Menu.html">เมนู</a>
                        <a class="dropdown-item" href="Promotion.html">โปรโมชั่น</a>
                        <div class="bar-dropdown-plus">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="Purchase.php">ออเดอร์ของคุณ</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown">
                <img src = "https://cdn.discordapp.com/attachments/1008922955494989965/1033046179614830622/logo-user.png" 
                        aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" type="button" class="dropdown-toggle" id="logo-user">
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="SignIn.php">Sign in</a>
                        <a class="dropdown-item" href="SignUp.php">Sign up</a>
                        <a class="dropdown-item" href="Profile.php">Profile</a>
                    </div>
                </div>
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
            <div class="col d-flex justify-content-center" id="total">
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

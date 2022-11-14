<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register SignIn</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link href="css/bootstrap.css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="cssSignIn_Up.css">
    <link rel="stylesheet" href="../Home/Home.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">

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
            position: relative;
            z-index: 10;
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

        /* SignIn.css */
        .modal-dialog{
            display: flex;
            justify-content: center;
            position: absolute;
            left: 50%;
            top: 150%;
            transform: translate(-50%, 0);
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

    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form class="form-row" action="SignIn.php" method="POST">
                <div class="left">
                    <div class="inLeft">
                        <div class="modal-header">
                            <h1 class="modal-title">ลงชื่อเข้าใช้</h1>
                        </div>

                        <div class="modal-body">
                            <div class="md-form">
                                <label>ชื่อผู้ใช้ / อีเมลล์</label><br>
                                <input type="text" class="form-control" name="userName" id="userName">
                            </div>

                            <div class="md-form">
                                <label>รหัสผ่าน</label><br>
                                <input type="text" class="form-control" name="password" id="password">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="right">
                    <div class="inRight">
                        <div class="brand">
                            <img class = "logo" src="../IMG/logo/logo-img.png" alt="logo">
                            <img class = "kaitae" src="../IMG/logo/logo-word.png" alt="brand">
                        </div>
                        <div class="btnAndlabel">
                            <button class="button" name="checkData">เข้าสู่ระบบ</button>
                            <label class="label">ยังไม่เป็นสมาชิก ? <a href = "signUp.php">สมัคร</a>เลย</label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog" id="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" id="modal-content">
                <div class="modal-header" id="modal-header">
                    <h3 class="modal-title">Your Account Was Not Found!</h3>
                </div>
                <div class="modal-body" id="modal-body">
                    <h4>Please try again.</h4>
                </div>
                <div class="modal-footer" id="modal-footer">
                    <button type="button" id="close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <?php
        if(isset($_POST['checkData'])){
            class SignIn extends SQLite3{
                function __construct(){
                    $this->open('data.db');
                }
            }
            $db = new SignIn();
            // if(!$db){
            //     echo $db->LastErrorMsg();
            // }
            // else{
            //     echo "Successfully";
            // }
            $userName = $_POST['userName'];
            $password = $_POST['password'];
            $select = "select * from UserData2";
            $allData = $db->query($select);
            $checkLast = false;
            while($row = $allData->fetchArray(SQLITE3_ASSOC)){

                if((($userName === $row['UserName']) || ($userName === $row['Email'])) && ($password === $row['Password'])){
                    $checkLast = true;
                    echo "<script type='text/javascript'>";
                        echo "window.location='../Home/Home.php'";
                    echo "</script>";
                    break;
                }
            }
            if($checkLast == false){
                echo    '<script type="text/javascript">
                                $( document ).ready(function() {
                                $("#myModal").modal("show")
                                });
                            </script>';
            }

            $db->close();
        }
    ?>

</body>

</html>

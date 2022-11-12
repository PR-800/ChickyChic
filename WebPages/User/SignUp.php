<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register SignUp</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="cssSignIn_Up.css">

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


    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form class="form-row" action="profile.php" method="POST">
                <div class="left">
                    <div class="inLeft">
                        <div class="modal-header">
                            <h1 class="modal-title">สมัครสมาชิก</h1>
                        </div>

                        <div class="modal-body">
                            <div class="md-form">
                                <label>ชื่อผู้ใช้</label><br>
                                <input type="text" class="form-control validate" name="userName" value="LINGLING">
                            </div>

                            <div class="md-form">
                                <label>อีเมลล์</label><br>
                                <input type="text" class="form-control validate" name="eMail" value="linglingppl@gmail.com">
                            </div>

                            <div class="md-form">
                                <label>รหัสผ่าน</label><br>
                                <input type="text" class="form-control validate" name="password" value="1122">
                            </div>

                            <div class="md-form">
                                <label>ยืนยันรหัสผ่าน</label><br>
                                <input type="text" class="form-control validate" name="confirmPass" value="1122">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="right">
                    <div class="inRight">
                        <div class="brand">
                            <img class = "logo" src="https://cdn.discordapp.com/attachments/969070208729899008/1038387054402355210/logo.png" alt="logo">
                            <img class = "kaitae" src="https://cdn.discordapp.com/attachments/969070208729899008/1038387053802557460/kaitae.png" alt="brand">
                        </div>
                        <div class="btnAndlabel">
                            <button class="button" name="createData">สร้างบัญชีผู้ใช้</button>
                            <label class="label">เป็นสมาชิกอยู่แล้ว ? <a href = "signIn.php">เข้าสู่ระบบ</a>เลย</label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

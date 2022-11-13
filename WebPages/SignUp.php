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
    <link rel="stylesheet" href="Home.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">

    <style>
        body {
            background: url('https://www.kfc.co.th/Content/OnlineOrderingImages/Shared/bg.jpg');
        }
    </style>
</head>
<body>
<div class="container-fluid">
        <div class="header-area">
            <div class="header">
                <img class="logo-img"
                    src="https://cdn.discordapp.com/attachments/1008922955494989965/1033040544206692372/logo.png">
                <img class="logo-word"
                    src="https://cdn.discordapp.com/attachments/1008922955494989965/1033040544605143090/logo-word.png">
                <div class="bar">
                    <a class="line"></a>
                    <a class="nav" href="Home.php" style="left: 235px; color: rgb(253 165 39);">หน้าหลัก</a>
                    <a class="nav" href="Menu.php" style="left: 320px;">เมนู</a>
                    <a class="nav" href="Promotion.php" style="left: 380px;">โปรโมชั่น</a>
                </div>
                <div class="bar-basket">
                    <a class="basket-bg"></a>
                    <img class="logo-basket"
                        src="https://cdn.discordapp.com/attachments/1008922955494989965/1033047007151013888/logo-basket.png">
                    <a class="nav" href="Purchase.php" style="right: 95px; color: white;">ออเดอร์ของคุณ</a>
                    <a class="basket-num">
                        <p style="color: white;">55</p>
                    </a>
                </div>
                <div class="bar-dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="Home.php" style="color: rgb(253 165 39);">หน้าหลัก</a>
                        <a class="dropdown-item" href="Menu.php">เมนู</a>
                        <a class="dropdown-item" href="Promotion.php">โปรโมชั่น</a>
                        <div class="bar-dropdown-plus">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="Purchase.php">ออเดอร์ของคุณ</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown">
                    <img src = "https://cdn.discordapp.com/attachments/1008922955494989965/1033046179614830622/logo-user.png" 
                        aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" type="button" id="logo-user" class="dropdown-toggle" id="logo-user">
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="SignIn.php">Sign in</a>
                        <a class="dropdown-item" href="SignUp.php">Sign up</a>
                        <a class="dropdown-item" href="Profile.php">Profile</a>
                    </div>
                </div>
            </div>
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
                            <label class="label">เป็นสมาชิกอยู่แล้ว ?<a href = "signIn.php">เข้าสู่ระบบ</a>เลย</label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
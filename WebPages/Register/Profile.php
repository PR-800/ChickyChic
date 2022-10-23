<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Profile</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="cssProfile.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="header">
            <img class="logo-img" src="https://cdn.discordapp.com/attachments/1008922955494989965/1033040544206692372/logo.png">
            <img class="logo-word" src="https://cdn.discordapp.com/attachments/1008922955494989965/1033040544605143090/logo-word.png">
            <a class="line"></a>
            <a class="nav" href="Home.html" style="left: 235px;">หน้าหลัก</a>
            <a class="nav" href="Menu.html" style="left: 320px;">เมนู</a>
            <a class="nav" href="Promotion.html" style="left: 380px;">โปรโมชั่น</a>
            <a class="basket-bg"></a>
            <img class="logo-basket" src="https://cdn.discordapp.com/attachments/1008922955494989965/1033047007151013888/logo-basket.png">
            <a class="nav" href="Purchase.html" style="right: 95px; color: white;">ออเดอร์ของคุณ</a>
            <img class="logo-user" href="User.html" src="https://cdn.discordapp.com/attachments/1008922955494989965/1033046179614830622/logo-user.png">
            <a class="basket-num"><p style="color: white;">55</p></a>
        </div>
    </div>

    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">ข้อมูลผู้ใช้</h1>
            </div>
            <form action="profile.php" method="POST">
                <div class="modal-body">
                    <div class="md-form">
                        <label>ชื่อผู้ใช้</label>
                    </div>

                    <div class="md-form" id="name">
                        <label>ชื่อ</label>
                        <input type="text" class="form-control" name="fname">
                        <label>นามสกุล</label>
                        <input type="text" class="form-control" name="lname">
                    </div>

                    <div class="md-form">
                        <label>ที่อยู่</label>
                        <textarea rows="3" class="form-control" name="address"></textarea><br>
                    </div>

                    <div class="md-form" id="location">
                        <label>จังหวัด</label>
                        <input type="text" class="form-control" name="province" value="TRANG">
                        <label>แขวง/เขต</label>
                        <input type="text" class="form-control" name="zone"><br>
                    </div>

                    <div class="md-form" id="number">
                        <label>รหัสไปรษณีย์</label>
                        <input type="text" class="form-control" name="post">
                        <label>เบอร์โทรศัพท์</label>
                        <input type="text" class="form-control" name="tel">
                    </div>
                </div>
                <button type="submit" class="submit" name="save">บันทึก</button>
            </form>
        </div>
    </div>

    <!-- <?php
    
    ?> -->
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Profile</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link href="css/bootstrap.css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="cssProfile.css">

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
            top: 15px;
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

    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">ข้อมูลผู้ใช้</h1>
            </div>
            <form action="profile.php" method="POST" id="myForm" name="Form" onsubmit="return validate()">
                <div class="modal-body">
                    <div class="md-form" id="name">
                        <label>ชื่อ</label>
                        <input type="text" class="form-control" name="fname" value="Pornpilin">
                        <label>นามสกุล</label>
                        <input type="text" class="form-control" name="lname" value="Wongsritrang">
                    </div>

                    <div class="md-form">
                        <label>ที่อยู่</label>
                        <textarea rows="3" class="form-control" name="address" value="Maung Trang"></textarea><br>
                    </div>

                    <div class="md-form" id="location">
                        <label>จังหวัด</label>
                        <input type="text" class="form-control" name="province" value="TRANG">
                        <label>แขวง/เขต</label>
                        <input type="text" class="form-control" name="zone" value="Tubteang"><br>
                    </div>

                    <div class="md-form" id="number">
                        <label>รหัสไปรษณีย์</label>
                        <input type="text" class="form-control" name="post" value="92000">
                        <label>เบอร์โทรศัพท์</label>
                        <input type="text" class="form-control" name="tel" value="075555555">
                    </div>
                </div>
                <button type="submit" class="submit" name="save" data-toggle="modal" data-target="#myModal">บันทึก</button>
            </form>
        </div>
    </div>

    <div class="modal fade" id="popUp">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body" align="center">
                    <h4><b>You have successfully registered.<b></h4>
                    <p>Let's go order food !</p>
                </div>
                <button type="button" class="backToHome"><a href = "" style="color: white">Home</a></button>
            </div>
        </div>
    </div>

    <script>
        function validate(){
            let fname = document.forms["Form"]["fname"].value;
            let lname = document.forms["Form"]["lname"].value;
            let address = document.forms["Form"]["address"].value;
            let province = document.forms["Form"]["province"].value;
            let zone = document.forms["Form"]["zone"].value;
            let post = document.forms["Form"]["post"].value;
            let tel = document.forms["Form"]["tel"].value;
            if (fname == ""){
                alert("First Name must fill out.");
                return false;
            }
            else if (lname == ""){
                alert("Last Name must fill out.");
                return false;
            }
            else if (address == ""){
                alert("Address must fill out.");
                return false;
            }
            else if (province == ""){
                alert("Province must fill out.");
                return false;
            }
            else if (zone == ""){
                alert("Zone must fill out.");
                return false;
            }
            else if (post == ""){
                alert("Postcode must fill out.");
                return false;
            }
            else if (tel == ""){
                alert("Telephone Number must fill out.");
                return false;
            }
            // else{
            //     $(document).ready(function(){
            //     $('#myForm').on('submit', function(e){
            //         $('#popUp').modal('show');
            //         e.preventDefault(); // prevent to link to next page after submit form
            //     });
            // })
            // }
        }
    </script>

    <?php

        /////////////////Create Table///////////////////
        // $table = <<<EOF
        // CREATE TABLE UserData
        // (Id INTEGER PRIMARY KEY AUTOINCREMENT,
        // UserName CHAR(50) NOT NULL,
        // Email CHAR(80) NOT NULL,
        // Password CHAR(30) NOT NULL);
        // CREATE UNIQUE INDEX unique_username ON "UserData" ("UserName");
        // CREATE UNIQUE INDEX unique_email ON "UserData" ("Email");
        // EOF;
        // $record = $db->exec($table);

        // $table2 = <<<EOF
        // CREATE TABLE UserData2
        // (UserName CHAR(50) NOT NULL,
        // Email CHAR(80) NOT NULL,
        // Password CHAR(30) NOT NULL,
        // FirstName CHAR(50) NOT NULL,
        // LastName CHAR(50) NOT NULL,
        // Address CHAR(150) NOT NULL,
        // Province CHAR(50) NOT NULL,
        // Zone CHAR(50) NOT NULL,
        // PostNumber INT NOT NULL,
        // Tel INT NOT NULL,
        // PRIMARY KEY (UserName, Email));
        // EOF;
        // $record = $db->exec($table2);

        ///////////////////Insert Data//////////////////////
        if (isset($_POST['createData'])){
            class UserData extends SQLite3{
                function __construct(){
                    $this->open('data.db');
                }
            }
            $db = new UserData();

            /////////////////////////////Create Table UserData//////////////////////////////////
            // $table = <<<EOF
            // CREATE TABLE UserData
            // (Id INTEGER PRIMARY KEY AUTOINCREMENT,
            // UserName CHAR(50) NOT NULL,
            // Email CHAR(80) NOT NULL,
            // Password CHAR(30) NOT NULL);
            // CREATE UNIQUE INDEX unique_username ON "UserData" ("UserName");
            // CREATE UNIQUE INDEX unique_email ON "UserData" ("Email");
            // EOF;
            // $record = $db->exec($table);

            /////////////////////////////Insert Data//////////////////////////////////
            $userName = $_POST['userName'];
            $eMail = $_POST['eMail'];
            $password = $_POST['password'];
            $table = <<<EOF
            insert into UserData (UserName, Email, Password)
            values ('$userName', '$eMail', '$password');
            EOF;

            $record = $db->exec($table);

            $db->close();
        }

        if (isset($_POST['save'])){
            class UserData extends SQLite3{
                function __construct(){
                    $this->open('data.db');
                }
            }
            $db = new UserData();

            /////////////////////////////Create Table UserData2//////////////////////////////////
            // $table2 = <<<EOF
            // CREATE TABLE UserData2
            // (UserName CHAR(50) NOT NULL,
            // Email CHAR(80) NOT NULL,
            // Password CHAR(30) NOT NULL,
            // FirstName CHAR(50) NOT NULL,
            // LastName CHAR(50) NOT NULL,
            // Address CHAR(150) NOT NULL,
            // Province CHAR(50) NOT NULL,
            // Zone CHAR(50) NOT NULL,
            // PostNumber INT NOT NULL,
            // Tel INT NOT NULL,
            // PRIMARY KEY (UserName, Email));
            // EOF;
            // $record = $db->exec($table2);

            /////////////////////////////Insert Data 2//////////////////////////////////
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $address = $_POST['address'];
            $province = $_POST['province'];
            $zone = $_POST['zone'];
            $post = $_POST['post'];
            $tel = $_POST['tel'];

            $sql = "SELECT * FROM UserData ORDER BY Id DESC LIMIT 1";
            $ret = $db->query($sql);

            while($row = $ret->fetchArray(SQLITE3_ASSOC)){
                $userName = $row['UserName'];
                $email = $row['Email'];
                $password = $row['Password'];
            }

            $table2 = <<<EOF
            insert into UserData2 (UserName, Email, Password, FirstName, LastName, Address, Province, Zone, PostNumber, Tel)
            values ('$userName', '$email', '$password', '$fname', '$lname', '$address', '$province', '$zone', $post, $tel);
            EOF;

            $record = $db->exec($table2);
            $db->close();
        }
    ?>
</body>
</html>

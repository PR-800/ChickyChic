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
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="Home.php" style="color: rgb(253 165 39);">หน้าหลัก</a>
                        <a class="dropdown-item" href="Menu.php">เมนู</a>
                        <a class="dropdown-item" href="Promotion.php">โปรโมชั่น</a>
                        <div class="bar-dropdown-plus">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="Purchase.php">ออเดอร์ของคุณ</a>
                        </div>
                    </div>
                </div>
                <a href="SignIn.php"><img class="logo-user" href="User.html"
                    src="https://cdn.discordapp.com/attachments/1008922955494989965/1033046179614830622/logo-user.png"></a>
            </div>
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

<!DOCTYPE html>
<html lang="en">

<?php
    session_start();
?>
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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
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
                            <img class = "logo" src="https://cdn.discordapp.com/attachments/969070208729899008/1038387054402355210/logo.png" alt="logo">
                            <img class = "kaitae" src="https://cdn.discordapp.com/attachments/969070208729899008/1038387053802557460/kaitae.png" alt="brand">
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
            while($row = $allData->fetchArray(SQLITE3_ASSOC)){

                if((($userName === $row['UserName']) || ($userName === $row['Email'])) && ($password === $row['Password'])){
                    $checkLast = true;
                    echo "<script type='text/javascript'>";
                        echo "window.location='Home.php'";
                    echo "</script>";
                    break;
                }
            }
            
            $db->close();
        }
    ?>
    
</body>

</html>

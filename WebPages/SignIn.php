<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register SignIn</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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


    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form class="form-row" action="signIn.php" method="POST">
                <div class="left">
                    <div class="inLeft">
                        <div class="modal-header">
                            <h1 class="modal-title">ลงชื่อเข้าใช้</h1>
                        </div>
        
                        <div class="modal-body">
                            <div class="md-form">
                                <label>ชื่อผู้ใช้ / อีเมลล์</label><br>
                                <input type="text" class="form-control" name="userName">
                            </div>
        
                            <div class="md-form">
                                <label>รหัสผ่าน</label><br>
                                <input type="text" class="form-control" name="password">
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
            $checkLast = false;
            while($row = $allData->fetchArray(SQLITE3_ASSOC)){
                if((($userName === $row['UserName']) || ($userName === $row['Email'])) && ($password === $row['Password'])){
                    $checkLast = true;
                    header("Location: profile.php"); //test(link to home page)////////////////////
                    exit();
                }
            }
            if ($checkLast == false){
                echo "<script>";
                
                echo "</script>";
            }
            $db->close();
        }
        
    ?>
</body>

</html>
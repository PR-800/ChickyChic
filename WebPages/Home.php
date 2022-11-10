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

    <link href="css/bootstrap.css" rel="stylesheet" media="all">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="Home.css">

</head>

<style>

body {
        background: url('https://www.kfc.co.th/Content/OnlineOrderingImages/Shared/bg.jpg');
    }

     
    .half-top-content {
        position: relative;
        z-index: -2;
        display: flex;
        background-image: url('./IMG/menu/chicken/10.jpg');
        background-position: center;
        background-size: cover;
        left: 10%;
        width: 1600px;
        height: 800px;
    }

    .half-top-left-content {
        position: absolute;
        right: 0px;
        background-color: rgb(255, 255, 255);
        opacity: 0.85;
        width: 500px;
        height: 800px;
    }

    .logo-img-content {
        width: 250px;
        display: flex;
        margin-left: auto;
        margin-right: auto;
        margin-top: 50px;

    }

    .logo-word-content {
        width: 200px;
        margin-left: auto;
        margin-right: auto;
        display: flex;
    }

    .slogan {
        position: relative;
        top: 80px;
        text-align: center;
        font-size: 30px;
    }

    .half-bottom-content {
        /* border:1px solid black; */
        position: relative; 
        width: 90%;
        left: 6%;
        height: 140%;
    }

    .half-bottom-top-content {
        position: relative;
        width: 70%;
        height: 50%;
        top: 3%;
        left: 15%;

    }

    .half-bottom-bottom-content {
        position: relative;
        width: 100%;
        height: 50%;
        left: 5%;

    }

    .d-block {
        width: 100%;
        height: 100%;
        margin-left: auto;
        margin-right: auto;
    }


    .card {
        text-align: center;
        align-items: center;
        border-radius: 40px;
        margin: 6%;
    }

    #cardd {
        border-radius: 30px;
    }

    .card-img-top {
        margin-top: 5%;
        width: 80%;
        aspect-ratio: 1/1;
        object-fit: contain;
    }

    .card-text {
        font-size: 18px;
        color: grey;
    }

    h3 {
        font-size: 25px;
    }

    #listsOfFood {
        position: relative;
        top: 50px;
        right:25;
    }

    .try-now{
        position: absolute;
        z-index: 1;
        width: 65%;
        left: -22%;
        top:-18%;
        /* border:1px solid black; */
    }

    
.logo-img-bottom {
    position: absolute;
    bottom:0%;
    right: -60px;
    width: 140px;
}

.logo-user {
    position: absolute;
    top: 25px;
    right: 15px;
    width: 33px;
}
</style>

<body>
    <div class="container-fluid">
        <div class="header-area">
            <div class="header">
                <img class="logo-img"
                    src="./IMG/logo/logo-img.png">
                <img class="logo-word"
                    src="./IMG/logo/logo-word.png">
                <div class="bar">
                    <a class="line"></a>
                    <a class="nav" href="Home.php" style="left: 235px; color: rgb(253 165 39);">หน้าหลัก</a>
                    <a class="nav" href="Menu.php" style="left: 320px;">เมนู</a>
                    <a class="nav" href="Promotion.php" style="left: 380px;">โปรโมชั่น</a>
                </div>
                <div class="bar-basket">
                    <a class="basket-bg"></a>
                    <img class="logo-basket"
                        src="./IMG/logo/logo-basket.png">
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

        <div class="content">

            <div class="half-top-content">
                <div class="half-top-left-content">
                    <img class="logo-img-content"
                        src="./IMG/logo/logo-img.png">
                    <img class="logo-word-content"
                        src="./IMG/logo/logo-word.png">
                    <div class="slogan">
                        <p>ยืนหนึ่งเรื่องความกรอบ</p>
                        <p>สะอาด ปลอดภัย น่าไว้ใจ</p>
                    </div>
                </div>
            </div>

            <div class="half-bottom-content">
            <div class="half-bottom-top-content">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block"
                                src="./IMG/menu/chicken/11.jpg"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block"
                                src="./IMG/menu/chicken/12.jpg"
                                alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block"
                                src="./IMG/menu/chicken/13.jpg"
                                alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
                </div>

                <div class="half-bottom-bottom-content">  
                <div class="row" id="listsOfFood">
                    
                    <?php
                                // Connect to Database 
                                class MyDB extends SQLite3
                                {
                                    function __construct()
                                    {
                                        $this->open('./currentMenu.db');
                                    }
                                }

                                // Open Database 
                                $db = new MyDB();
                                if (!$db) {
                                    echo $db->lastErrorMsg();
                                    return;
                                }

                                // Query process 
                                $ret = $db->query("SELECT * from chicken");
                                while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                                    if($row['ID'] == 5){
                                        echo "
    <div class='col-md-4'>
      <div class='card' style='width:70%;'>
      <a href='Menu.php'>
      <img src='{$row['IMG']}'class='card-img-top'>
      <img class='try-now' src='./IMG/logo/try-now.png'>  
      </a>  
          <div class='card-body'>
              <h3 class='card-title'>{$row['NAME']}</h3>
              <h6 class='card-subtitle mb-2 text-muted'>{$row['PRICE']} บาท</h6>
              <div><br>
              </div><br>
          </div>
      </div>
      </div>";                              
    }
}
                                // Close database
                                $db->close();
                                ?>


                    <?php
                                // Open Database 
                                $db = new MyDB();
                                if (!$db) {
                                    echo $db->lastErrorMsg();
                                    return;
                                }

                                // Query process 
                                $ret = $db->query("SELECT * from Promotion");
                                while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                                    if($row['ID'] == 41){
echo "<div class='col-md-4'>
      <div class='card' style='width: 70%;'>
      <a href='Promotion.php #burger'>   
      <img src='{$row['IMG']}'class='card-img-top'>
      <img class='try-now' src='./IMG/logo/try-now.png'>  
      </a>
     
          <div class='card-body'>
              <h3 class='card-title'>{$row['NAME']}</h3>
              <h6 class='card-subtitle mb-2 text-muted'>{$row['PRICE']} บาท</h6>
              <div><br>
              </div><br>
          </div>
      </div>
  </div>";
                                    }      
}
                                // Close database
                                $db->close();
                                ?>

                    <?php
                                // Open Database 
                                $db = new MyDB();
                                if (!$db) {
                                    echo $db->lastErrorMsg();
                                    return;
                                }

                                // Query process 
                                $ret = $db->query("SELECT * from Promotion");
                                while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                                    if($row['ID'] == 37){
                                        echo "<div class='col-md-4'>
      <div class='card' style='width: 70%;'>
              <a href='Promotion.php'>
              <img src='{$row['IMG']}'
              class='card-img-top'>
              <img class='try-now' src='./IMG/logo/try-now.png'>  
              </a>
              
          <div class='card-body'>
              <h3 class='card-title'>{$row['NAME']}</h3>
              <h6 class='card-subtitle mb-2 text-muted'>{$row['PRICE']} บาท</h6>
              <div><br>
              </div><br>    
          </div>
      </div>
  </div>";
                                    }       
}
                                // Close database
                                $db->close();
                                ?>

                </div>
                </div>

            </div>
        </div>

    </div>

</body>

</html>
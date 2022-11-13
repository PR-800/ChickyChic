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

    <link rel="stylesheet" href="../Home/Home.css">
    <link rel="stylesheet" href="menu.css">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js" integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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

        /* menu.css */
        .nav-item {
            width: 190px;
            text-align: center;
            margin-left: 5px;
        }

        .nav-tabs {
            background-color: rgb(253 165 39);
            padding: 8px;
            border-radius: 10px;
            width: 100%;
        }

        .nav-link, .nav-link:hover {
            text-decoration: none;
            border-radius: 8px;
            color: white;
        }

        .menu {
            position: relative;
            margin-top: -20px;
            top: 0%;
            left: 50%;
            transform: translate(-50%, 0%);
            width: 93%;
            font-size: 30px;
        }

        .nav-link {
            border-radius: 8px;
        }

        .card {
            text-align: center;
            align-items: center;
            border-radius: 40px;
            margin: 6%;
            /* margin: 50px; */
        }

        .card-img-top {
            margin-top: 5%;
            width: 80%;
            aspect-ratio: 1/1;
            object-fit: contain;
        }

        .card-subtitle {
            font-size: 19px;
        }

        .btn {
            width: 200px;
            border-radius: 30px;
            background-color: rgb(241 72 34);
            font-size: 16px;
        }

        .btn:active {
            transform: translateY(2px);
        }

        .butt {
            background-color: rgb(253 165 39);
            color: white;
            border: none;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            font-size: 25px;
        }

        .butt:focus {
            border: none;
            outline: none;
        }

        .page {
            position: absolute;
            top: 100px;
            left: 350px;
        }

        h3 {
            font-size: 25px;
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
                    <a class="nav" href="../Menu/Menu.php" style="top: 50px; left: 530px; color: rgb(253 165 39);">เมนู</a>
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
        <!-- <button style="background-color:red;button-active:translateY(2px);">acr</button> -->

        <div class="menu">
            <div class="menu-nav">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" id="chicken-tab" data-toggle="tab" href="#chicken" role="tab" aria-controls="menu" aria-selected="false">ไก่ทอด</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="burger-tab" data-toggle="tab" href="#burger" role="tab" aria-controls="menu" aria-selected="false">เบอร์เกอร์</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="rice-tab" data-toggle="tab" href="#rice" role="tab" aria-controls="menu" aria-selected="false">ข้าว</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="salad-tab" data-toggle="tab" href="#salad" role="tab" aria-controls="menu" aria-selected="false">สลัด</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="drink-tab" data-toggle="tab" href="#drink" role="tab" aria-controls="menu" aria-selected="false">เครื่องดื่ม</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="chicken" role="tabpanel" aria-labelledby="chicken-tab">
                    <div class="chicken-page page">
                        <div class="container mx-auto mt-4">
                            <div class="row" id="listChickens">
                                <?php
                                // Connect to Database
                                class MyDB extends SQLite3
                                {
                                    function __construct()
                                    {
                                        $this->open('../DataBase/currentMenu.db');
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
                                    if ($row['INCART'] == "NO") {
                                        echo "<div class='col-md-4'>
      <div class='card' style='width: 100%;'>
          <img src='{$row['IMG']}'
              class='card-img-top'>
          <div class='card-body'>
              <h3 class='card-title'>{$row['NAME']}</h3>
              <h6 class='card-subtitle mb-2 text-muted'>{$row['PRICE']} บาท</h6>
              <div><br>
                  <div class='amount'>
                      <span class='decrease'><button type='button' class='butt'
                              style='position:absolute;left:22%;' onclick='decrease({$row['ID']}, `chicken`)'>-</button></span>
                      <span class='num' style='font-size:22px' id='chicken-{$row['ID']}'>{$row['AMOUNT']}</span>
                      <span class='increase'><button type='button' class='butt'
                              style='position:absolute;right:22%' onclick='increase({$row['ID']}, `chicken`)'>+</button></span>
                  </div><br>
                  <button type='button' class='btn btn-danger' id='button-chicken-{$row['ID']}'
                      onclick='addToCart({$row['ID']}, `{$row['NAME']}`, {$row['PRICE']}, {$row['AMOUNT']}, `{$row['IMG']}`, `chicken`)'>เพิ่มลงตะกร้า</button>
              </div><br>
          </div>
      </div>
  </div>";
                                    } else {
                                        echo "<div class='col-md-4'>
      <div class='card' style='width: 100%;'>
          <img src='{$row['IMG']}'
              class='card-img-top'>
          <div class='card-body'>
              <h3 class='card-title'>{$row['NAME']}</h3>
              <h6 class='card-subtitle mb-2 text-muted'>{$row['PRICE']} บาท</h6>
              <div><br>
                  <div class='amount'>
                      <span class='decrease'><button type='button' class='butt'
                              style='position:absolute;left:22%;' onclick='decrease({$row['ID']}, `chicken`)'>-</button></span>
                      <span class='num' style='font-size:22px' id='chicken-{$row['ID']}'>{$row['AMOUNT']}</span>
                      <span class='increase'><button type='button' class='butt'
                              style='position:absolute;right:22%' onclick='increase({$row['ID']}, `chicken`)'>+</button></span>
                  </div><br>
                  <button type='button' class='btn btn-danger' disabled id='button-chicken-{$row['ID']}'>เพิ่มลงในตะกร้าแล้ว</button>
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
                <div name="burger" class="tab-pane fade" id="burger" role="tabpanel" aria-labelledby="burger-tab">
                    <div class="burger-page page">
                        <div class="container mx-auto mt-4">
                            <div class="row" id="listBurgers">
                                <?php
                                // Open Database
                                $db = new MyDB();
                                if (!$db) {
                                    echo $db->lastErrorMsg();
                                    return;
                                }

                                // Query process
                                $ret = $db->query("SELECT * from burger");
                                while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                                    if ($row['INCART'] == "NO") {
                                        echo "<div class='col-md-4'>
      <div class='card' style='width: 100%;'>
          <img src='{$row['IMG']}'
              class='card-img-top'>
          <div class='card-body'>
              <h3 class='card-title'>{$row['NAME']}</h3>
              <h6 class='card-subtitle mb-2 text-muted'>{$row['PRICE']} บาท</h6>
              <div><br>
                  <div class='amount'>
                      <span class='decrease'><button type='button' class='butt'
                              style='position:absolute;left:22%;' onclick='decrease({$row['ID']}, `burger`)'>-</button></span>
                      <span class='num' style='font-size:22px' id='burger-{$row['ID']}'>{$row['AMOUNT']}</span>
                      <span class='increase'><button type='button' class='butt'
                              style='position:absolute;right:22%' onclick='increase({$row['ID']}, `burger`)'>+</button></span>
                  </div><br>
                  <button type='button' class='btn btn-danger' id='button-burger-{$row['ID']}'
                      onclick='addToCart({$row['ID']}, `{$row['NAME']}`, {$row['PRICE']}, {$row['AMOUNT']}, `{$row['IMG']}`, `burger`)'>เพิ่มลงตะกร้า</button>
              </div><br>
          </div>
      </div>
  </div>";
                                    } else {
                                        echo "<div class='col-md-4'>
      <div class='card' style='width: 100%;'>
          <img src='{$row['IMG']}'
              class='card-img-top'>
          <div class='card-body'>
              <h3 class='card-title'>{$row['NAME']}</h3>
              <h6 class='card-subtitle mb-2 text-muted'>{$row['PRICE']} บาท</h6>
              <div><br>
                  <div class='amount'>
                      <span class='decrease'><button type='button' class='butt'
                              style='position:absolute;left:22%;' onclick='decrease({$row['ID']}, `burger`)'>-</button></span>
                      <span class='num' style='font-size:22px' id='burger-{$row['ID']}'>{$row['AMOUNT']}</span>
                      <span class='increase'><button type='button' class='butt'
                              style='position:absolute;right:22%' onclick='increase({$row['ID']}, `burger`)'>+</button></span>
                  </div><br>
                  <button type='button' class='btn btn-danger' disabled id='button-burger-{$row['ID']}'>เพิ่มลงในตะกร้าแล้ว</button>
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

                <div class="tab-pane fade" id="rice" role="tabpanel" aria-labelledby="rice-tab">
                    <div class="rice-page page">
                        <div class="container mx-auto mt-4">
                            <div class="row" id="listRice">
                                <?php
                                // Open Database
                                $db = new MyDB();
                                if (!$db) {
                                    echo $db->lastErrorMsg();
                                    return;
                                }

                                // Query process
                                $ret = $db->query("SELECT * from rice");
                                while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                                    if ($row['INCART'] == "NO") {
                                        echo "<div class='col-md-4'>
      <div class='card' style='width: 100%;'>
          <img src='{$row['IMG']}'
              class='card-img-top'>
          <div class='card-body'>
              <h3 class='card-title'>{$row['NAME']}</h3>
              <h6 class='card-subtitle mb-2 text-muted'>{$row['PRICE']} บาท</h6>
              <div><br>
                  <div class='amount'>
                      <span class='decrease'><button type='button' class='butt'
                              style='position:absolute;left:22%;' onclick='decrease({$row['ID']}, `rice`)'>-</button></span>
                      <span class='num' style='font-size:22px' id='rice-{$row['ID']}'>{$row['AMOUNT']}</span>
                      <span class='increase'><button type='button' class='butt'
                              style='position:absolute;right:22%' onclick='increase({$row['ID']}, `rice`)'>+</button></span>
                  </div><br>
                  <button type='button' class='btn btn-danger' id='button-rice-{$row['ID']}'
                      onclick='addToCart({$row['ID']}, `{$row['NAME']}`, {$row['PRICE']}, {$row['AMOUNT']}, `{$row['IMG']}`, `rice`)'>เพิ่มลงตะกร้า</button>
              </div><br>
          </div>
      </div>
  </div>";
                                    } else {
                                        echo "<div class='col-md-4'>
      <div class='card' style='width: 100%;'>
          <img src='{$row['IMG']}'
              class='card-img-top'>
          <div class='card-body'>
              <h3 class='card-title'>{$row['NAME']}</h3>
              <h6 class='card-subtitle mb-2 text-muted'>{$row['PRICE']} บาท</h6>
              <div><br>
                  <div class='amount'>
                      <span class='decrease'><button type='button' class='butt'
                              style='position:absolute;left:22%;' onclick='decrease({$row['ID']}, `rice`)'>-</button></span>
                      <span class='num' style='font-size:22px' id='rice-{$row['ID']}'>{$row['AMOUNT']}</span>
                      <span class='increase'><button type='button' class='butt'
                              style='position:absolute;right:22%' onclick='increase({$row['ID']}, `rice`)'>+</button></span>
                  </div><br>
                  <button type='button' class='btn btn-danger' disabled id='button-rice-{$row['ID']}'>เพิ่มลงในตะกร้าแล้ว</button>
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

                <div class="tab-pane fade" id="salad" role="tabpanel" aria-labelledby="salad-tab">
                    <div class="salad-page page">
                        <div class="container mx-auto mt-4">
                            <div class="row" id="listSalads">
                                <?php
                                // Open Database
                                $db = new MyDB();
                                if (!$db) {
                                    echo $db->lastErrorMsg();
                                    return;
                                }

                                // Query process
                                $ret = $db->query("SELECT * from salad");
                                while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                                    if ($row['INCART'] == "NO") {
                                        echo "<div class='col-md-4'>
      <div class='card' style='width: 100%;'>
          <img src='{$row['IMG']}'
              class='card-img-top'>
          <div class='card-body'>
              <h3 class='card-title'>{$row['NAME']}</h3>
              <h6 class='card-subtitle mb-2 text-muted'>{$row['PRICE']} บาท</h6>
              <div><br>
                  <div class='amount'>
                      <span class='decrease'><button type='button' class='butt'
                              style='position:absolute;left:22%;' onclick='decrease({$row['ID']}, `salad`)'>-</button></span>
                      <span class='num' style='font-size:22px' id='salad-{$row['ID']}'>{$row['AMOUNT']}</span>
                      <span class='increase'><button type='button' class='butt'
                              style='position:absolute;right:22%' onclick='increase({$row['ID']}, `salad`)'>+</button></span>
                  </div><br>
                  <button type='button' class='btn btn-danger' id='button-salad-{$row['ID']}'
                      onclick='addToCart({$row['ID']}, `{$row['NAME']}`, {$row['PRICE']}, {$row['AMOUNT']}, `{$row['IMG']}`, `salad`)'>เพิ่มลงตะกร้า</button>
              </div><br>
          </div>
      </div>
  </div>";
                                    } else {
                                        echo "<div class='col-md-4'>
      <div class='card' style='width: 100%;'>
          <img src='{$row['IMG']}'
              class='card-img-top'>
          <div class='card-body'>
              <h3 class='card-title'>{$row['NAME']}</h3>
              <h6 class='card-subtitle mb-2 text-muted'>{$row['PRICE']} บาท</h6>
              <div><br>
                  <div class='amount'>
                      <span class='decrease'><button type='button' class='butt'
                              style='position:absolute;left:22%;' onclick='decrease({$row['ID']}, `salad`)'>-</button></span>
                      <span class='num' style='font-size:22px' id='salad-{$row['ID']}'>{$row['AMOUNT']}</span>
                      <span class='increase'><button type='button' class='butt'
                              style='position:absolute;right:22%' onclick='increase({$row['ID']}, `salad`)'>+</button></span>
                  </div><br>
                  <button type='button' class='btn btn-danger' disabled id='button-salad-{$row['ID']}'>เพิ่มลงในตะกร้าแล้ว</button>
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
                <div class="tab-pane fade" id="drink" role="tabpanel" aria-labelledby="drink-tab">
                    <div class="drink-page page">
                        <div class="container mx-auto mt-4">
                            <div class="row" id="listDrinks">
                                <?php
                                // Open Database
                                $db = new MyDB();
                                if (!$db) {
                                    echo $db->lastErrorMsg();
                                    return;
                                }

                                // Query process
                                $ret = $db->query("SELECT * from drink");
                                while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                                    if ($row['INCART'] == "NO") {
                                        echo "<div class='col-md-4'>
      <div class='card' style='width: 100%;'>
          <img src='{$row['IMG']}'
              class='card-img-top'>
          <div class='card-body'>
              <h3 class='card-title'>{$row['NAME']}</h3>
              <h6 class='card-subtitle mb-2 text-muted'>{$row['PRICE']} บาท</h6>
              <div><br>
                  <div class='amount'>
                      <span class='decrease'><button type='button' class='butt'
                              style='position:absolute;left:22%;' onclick='decrease({$row['ID']}, `drink`)'>-</button></span>
                      <span class='num' style='font-size:22px' id='drink-{$row['ID']}'>{$row['AMOUNT']}</span>
                      <span class='increase'><button type='button' class='butt'
                              style='position:absolute;right:22%' onclick='increase({$row['ID']}, `drink`)'>+</button></span>
                  </div><br>
                  <button type='button' class='btn btn-danger' id='button-drink-{$row['ID']}'
                      onclick='addToCart({$row['ID']}, `{$row['NAME']}`, {$row['PRICE']}, {$row['AMOUNT']}, `{$row['IMG']}`, `drink`)'>เพิ่มลงตะกร้า</button>
              </div><br>
          </div>
      </div>
  </div>";
                                    } else {
                                        echo "<div class='col-md-4'>
      <div class='card' style='width: 100%;'>
          <img src='{$row['IMG']}'
              class='card-img-top'>
          <div class='card-body'>
              <h3 class='card-title'>{$row['NAME']}</h3>
              <h6 class='card-subtitle mb-2 text-muted'>{$row['PRICE']} บาท</h6>
              <div><br>
                  <div class='amount'>
                      <span class='decrease'><button type='button' class='butt'
                              style='position:absolute;left:22%;' onclick='decrease({$row['ID']}, `drink`)'>-</button></span>
                      <span class='num' style='font-size:22px' id='drink-{$row['ID']}'>{$row['AMOUNT']}</span>
                      <span class='increase'><button type='button' class='butt'
                              style='position:absolute;right:22%' onclick='increase({$row['ID']}, `drink`)'>+</button></span>
                  </div><br>
                  <button type='button' class='btn btn-danger' disabled id='button-drink-{$row['ID']}'>เพิ่มลงในตะกร้าแล้ว</button>
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
        </div>
    </div>




</body>

<script>
    const updateProduct = (id, type, newAmount) => {
        $.ajax({
            type: "POST",
            url: "../Database/UpdateMenu.php",
            data: {
                id: id,
                type: type,
                amount: newAmount
            },
            error: (result) => {
                console.log(result)
            },
        });
    }

    const increase = (id, type) => {

        let select = document.querySelector(`#${type}-${id}`)

        let newAmount = parseInt(select.innerText) + 1
        select.innerText = newAmount

        updateProduct(id, type, newAmount)


    }

    const decrease = (id, type) => {
        let select = document.querySelector(`#${type}-${id}`)
        let newAmount = parseInt(select.innerText) - 1

        if (newAmount < 1) return

        select.innerText = newAmount

        updateProduct(id, type, newAmount)


    }

    const addToCart = (id, name, price, amount, img, type) => {

        $.ajax({
            type: "POST",
            url: "../Database/AddToCart.php",
            data: {
                Cartid: id,
                Cartname: name,
                Cartprice: price,
                Cartamount: amount,
                Cartimg: img,
                Carttype: type
            },
            error: (result) => {
                console.log(result)
            },
            success: (result) => {

                const selectButton = document.querySelector(`#button-${type}-${id}`)
                console.log(selectButton)
                selectButton.onclick = null
                selectButton.innerText = "เพิ่มลงในตะกร้าแล้ว"
                selectButton.disabled = true
            }
        });

    }
</script>


</html>
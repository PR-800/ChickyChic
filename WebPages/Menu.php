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

    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="menu.css">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js" integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>

body {
            background: url('https://www.kfc.co.th/Content/OnlineOrderingImages/Shared/bg.jpg');
        }
        
        .card {
            text-align: center;
            align-items: center;
            border-radius: 40px;
            margin: 6%;
            /* margin: 20px; */
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
                <img class="logo-img" src="./IMG/logo/logo-img.png">
                <img class="logo-word" src="./IMG/logo/logo-word.png">
                <div class="bar">
                    <a class="line"></a>
                    <a class="nav" href="Home.php" style="left: 235px;">หน้าหลัก</a>
                    <a class="nav" href="Menu.php" style="left: 320px; color: rgb(253 165 39);">เมนู</a>
                    <a class="nav" href="Promotion.php" style="left: 380px;">โปรโมชั่น</a>
                </div>
                <div class="bar-basket">
                    <a class="basket-bg"></a>
                    <img class="logo-basket" src="./IMG/logo/logo-basket.png">
                    <a class="nav" href="Purchase.php" style="right: 95px; color: white;">ออเดอร์ของคุณ</a>
                    <a class="basket-num">
                        <p style="color: white;">55</p>
                    </a>
                </div>
                <div class="bar-dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="Home.html" style="color: rgb(253 165 39);">หน้าหลัก</a>
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
                  <button type='button' class='btn btn-danger'
                      onclick='addToCart({$row['ID']})'>เพิ่มลงตะกร้า</button>
              </div><br>
          </div>
      </div>
  </div>";
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
                  <button type='button' class='btn btn-danger'
                      onclick='addToCart({$row['ID']})'>เพิ่มลงตะกร้า</button>
              </div><br>
          </div>
      </div>
  </div>";
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
                  <button type='button' class='btn btn-danger'
                      onclick='addToCart({$row['ID']})'>เพิ่มลงตะกร้า</button>
              </div><br>
          </div>
      </div>
  </div>";
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
                  <button type='button' class='btn btn-danger'
                      onclick='addToCart({$row['ID']})'>เพิ่มลงตะกร้า</button>
              </div><br>
          </div>
      </div>
  </div>";
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
                  <button type='button' class='btn btn-danger'
                      onclick='addToCart({$row['ID']})'>เพิ่มลงตะกร้า</button>
              </div><br>
          </div>
      </div>
  </div>";
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
            url: "./UpdateMenu.php",
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

        if (newAmount < 0) return

        select.innerText = newAmount

        updateProduct(id, type, newAmount)


    }

    const addToCart = (id) => {

        console.log(id)

    }
</script>


</html>
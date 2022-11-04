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
    <link rel="stylesheet" href="Purchase.css">

</head>
<body>
    <div class="container-fluid">
    <div class="header-area">
            <div class="header">
                <img class="logo-img" src="./IMG/logo/logo-img.png">
                <img class="logo-word" src="./IMG/logo/logo-word.png">
                <div class="bar">
                    <a class="line"></a>
                    <a class="nav" href="Home.php" style="left: 235px; color: rgb(253 165 39);">หน้าหลัก</a>
                    <a class="nav" href="Menu.php" style="left: 320px;">เมนู</a>
                    <a class="nav" href="Promotion.php" style="left: 380px;">โปรโมชั่น</a>
                </div>
                <div class="bar-basket">
                    <a class="basket-bg"></a>
                    <img class="logo-basket" src="./IMG/logo/logo-basket.png">
                    <a class="nav" href="Purchase.php" style="right: 95px; color: white;">ออเดอร์ของคุณ</a>
                    <a class="basket-num"><p style="color: white;">55</p></a>
                </div>
                <div class="bar-dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="Home.html" style="color: rgb(253 165 39);">หน้าหลัก</a>
                        <a class="dropdown-item" href="Menu.html">เมนู</a>
                        <a class="dropdown-item" href="Promotion.html">โปรโมชั่น</a>
                        <div class="bar-dropdown-plus">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="Purchase.php">ออเดอร์ของคุณ</a>
                        </div>
                    </div>
                </div>
                <img class="logo-user" href="User.html" src="./IMG/logo/logo-user.png">
            </div>
        </div>

        <?php
            class SelectMenu extends SQLite3{
                function __construct(){
                    $this->open('selectMenu.db');
                }
            }

            $db = new SelectMenu();
            if(!$db){
                echo $db->lastErrorMsg();
            }
        ?>

        <div class="orders">
            <table class="table">
            <tr>
                <th style="width:70%;">รายการ</th>
                <th>จำนวน</th>
                <th>ราคา</th>
            </tr>
            <?php
                $sql ="SELECT * from selectMenu";
                $ret = $db->query($sql);
                while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
                    echo "<tr>";
                    echo "<td>" . $row['Image'] . "</td>" . $row['Menu'] . "</td>";
                    echo "<td>" . $row['Number'] . "</td>";
                    echo "<td>" . (+$row['Price'])*(+$row['Number']) . "</td>";
                    echo "</tr>";
                }
            ?>
            </table>
            <div class="purchase">

            </div>
        </div>

        <?php
            $db->close();
        ?>
    </div>
</body>
</html>

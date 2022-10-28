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

    <style>
        body {
            font-family: 'Kanit', sans-serif;
        }
        .container-fluid {
            /* background-color: black; */
            position: relative;
            width: 100%;
            height: 100%;
        }
        .header-area {
            overflow: hidden;
            /* background-color: #f1f1f1; */
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .header {
            width: 94%;
            height: 80px;
            position: relative;
            background-color: white;
            top: 4%;
            left: 50%;
            transform: translate(-50%, 0%);
        }
        .logo-img {
            position: absolute;
            top: 5px;
            left: 5px;
            width: 70px;
        }
        .logo-word {
            position: absolute;
            top: 15px;
            left: 95px;
            width: 80px;
        }
        .line {
            position: absolute;
            top: 15px;
            left: 200px;
            border-left: 3px solid rgb(253 165 39);
            height: 50px;
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
        .logo-user {
            position: absolute;
            top: 25px;
            right: 15px;
            width: 33px;
        }
        .logo-basket {
            position: absolute;
            top: 28px;
            right: 205px;
            width: 25px;
            filter: brightness(100);
        }
        .basket-bg {
            position: absolute;
            top: 22px;
            right: 79px;
            width: 170px;
            height: 38px;
            border-radius: 25px;
            background-color: rgb(241 72 34);
        }
        .basket-num {
            position: absolute;
            top: 18px;
            right: 235px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: rgb(253 165 39);
            text-align: center;
            font-size: 13.5px;
        }

        .table {
            width: 65vw;
            margin-left: 3%;
        }
    </style>

</head>
<body>
    <div class="container-fluid">
        <div class="header-area">
            <div class="header">
                <img class="logo-img" src="https://cdn.discordapp.com/attachments/1008922955494989965/1033040544206692372/logo.png">
                <img class="logo-word" src="https://cdn.discordapp.com/attachments/1008922955494989965/1033040544605143090/logo-word.png">
                <a class="line"></a>
                <a class="nav" href="Home.html" style="left: 235px; color: rgb(253 165 39);">หน้าหลัก</a>
                <a class="nav" href="Menu.html" style="left: 320px;">เมนู</a>
                <a class="nav" href="Promotion.html" style="left: 380px;">โปรโมชั่น</a>
                <a class="basket-bg"></a>
                <img class="logo-basket" src="https://cdn.discordapp.com/attachments/1008922955494989965/1033047007151013888/logo-basket.png">
                <a class="nav" href="Purchase.html" style="right: 95px; color: white;">ออเดอร์ของคุณ</a>
                <img class="logo-user" href="User.html" src="https://cdn.discordapp.com/attachments/1008922955494989965/1033046179614830622/logo-user.png">
                <a class="basket-num"><p style="color: white;">55</p></a>
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

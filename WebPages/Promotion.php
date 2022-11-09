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

    <link rel="stylesheet" href="Promotion.css">
    <link rel="stylesheet" href="Home.css">

</head>

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
                    <a class="nav" href="Home.php" style="left: 235px;">หน้าหลัก</a>
                    <a class="nav" href="Menu.php" style="left: 320px;">เมนู</a>
                    <a class="nav" href="Promotion.php" style="left: 380px; color: rgb(253 165 39)">โปรโมชั่น</a>
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

        <div class="container">
            <div class="content">

                <div class="row">
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
                        $ret = $db->query("SELECT * from Promotion");
                        while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                    echo "<div class='col-md-8'>
                        <div class='card'>
                            <img class='pic-set' src='{$row['IMG']}'>
                            <div class='price'>
                                <p>{$row['PRICE']} บาท</p>
                            </div>
                            <div class='infomation'>
                                <h2 style='color: rgb(253 165 39);'>{$row['NAME']}</h2><br>
                                <p>{$row['DESCRIPTION']}</p>
                                <p>{$row['DESCRIPTION2']}</p>
                                <p>{$row['DESCRIPTION3']}</p>
                                <p>{$row['DESCRIPTION4']}</p>
                                <p>{$row['DESCRIPTION5']}</p>
                            </div>
                            <div id='set-count-1'></div>

                            <div class='amount'>
                                <span class='minus'><button class='glyphicon' type='button'
                                style='color: rgb(255, 255, 255);' onclick='decrease({$row['ID']}, `Promotion`)'>-</button></span>
                                <span class='set-count' style='position: absolute;font-size: 25px;top: 330;right: 455px;' id='Promotion-{$row['ID']}'>{$row['AMOUNT']}</span>
                                <span class='plus'><button class='glyphicon' type='button'
                                    style='color: rgb(255, 255, 255);' onclick='increase({$row['ID']}, `Promotion`)'>+</button></span>
                            </div><br>

                            <div><button class='add' onclick='addToCart({$row['ID']})'>เพิ่มลงตะกร้า</button></div>
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
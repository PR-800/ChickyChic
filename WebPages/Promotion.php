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
                    src="https://cdn.discordapp.com/attachments/1008922955494989965/1033040544206692372/logo.png">
                <img class="logo-word"
                    src="https://cdn.discordapp.com/attachments/1008922955494989965/1033040544605143090/logo-word.png">
                <div class="bar">
                    <a class="line"></a>
<<<<<<<< HEAD:WebPages/Promotion.html
                    <a class="nav" href="Home.html" style="left: 235px;">หน้าหลัก</a>
========
                    <a class="nav" href="Home.php" style="left: 235px;">หน้าหลัก</a>
>>>>>>>> 20e2d263ca1927d31e050f43f88d0ed02a127b2d:WebPages/Promotion.php
                    <a class="nav" href="Menu.php" style="left: 320px;">เมนู</a>
                    <a class="nav" href="Promotion.php" style="left: 380px; color: rgb(253 165 39)">โปรโมชั่น</a>
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
                        <a class="dropdown-item" href="Home.html" style="color: rgb(253 165 39);">หน้าหลัก</a>
                        <a class="dropdown-item" href="Menu.php">เมนู</a>
                        <a class="dropdown-item" href="Promotion.php">โปรโมชั่น</a>
                        <div class="bar-dropdown-plus">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="Purchase.php">ออเดอร์ของคุณ</a>
                        </div>
                    </div>
                </div>
                <img class="logo-user" href="User.html"
                    src="https://cdn.discordapp.com/attachments/1008922955494989965/1033046179614830622/logo-user.png">
            </div>
        </div>

        <div class="container">
            <div class="content">

                <div class="row">



                    
                    <div class="col-md-8">
                        <div class="card">
                            <div class="price">
                                <p>125 บาท</p>
                            </div>
                            <img class="pic-set"
                                src="https://media.discordapp.net/attachments/1029750439866007613/1034127903627149462/kai_don_jai_3.png">
                            <div class="infomation">
                                <h2 style="color: rgb(253 165 39);">เซ็ต ไก่กินคนเดียว</h2><br>
                                <p>• ไก่ทอด 2 ชิ้น</p>
                                <p>• วิงซ์แซ่บ 3 ชิ้น</p>
                                <p>• เป๊ปซี่ 1 ขวด</p>
                            </div>
                            <div id="set-count-1"></div>
                            <div class="minus"><button class='glyphicon'
                                    style="color: rgb(255, 255, 255);" onclick="set1minus(this.id)"
                                    id="set-1-minus">-</button>
                                <script>
                                    document.getElementById("set-count-1").innerHTML = 0;
                                    let set_count_1 = document.getElementById("set-count-1");
                                    set_count_1 = 1;

                                    function set1minus(clicked_id) {
                                        if (clicked_id == "set-1-minus") {
                                            if (set_count_1 > 1) {
                                                set_count_1--;
                                                document.getElementById("set-count-1").innerHTML = set_count_1;
                                            }
                                        }
                                    }
                                </script>
                            </div>
                            <div class="plus"><button class='glyphicon'
                                    style="color: rgb(255, 255, 255);" onclick="set1plus(this.id)"
                                    id="set-1-plus">+</button>
                                <script>
                                    function set1plus(clicked_id) {
                                        if (clicked_id == "set-1-plus") {
                                            set_count_1++;
                                            document.getElementById("set-count-1").innerHTML = set_count_1;
                                        }
                                    }
                                </script>
                            </div>
                            <div><button class="add">เพิ่มลงตะกร้า</button></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="price">
                                <p>125 บาท</p>
                            </div>
                            <img class="pic-set"
                                src="https://media.discordapp.net/attachments/1029750439866007613/1034127903627149462/kai_don_jai_3.png">
                            <div class="infomation">
                                <h2 style="color: rgb(253 165 39);">เซ็ต ไก่กินคนเดียว</h2>
                                <p>รายละเอียดภายในชุดเซ็ต</p>
                                <p>• ไก่ทอด 2 ชิ้น</p>
                                <p>• วิงซ์แซ่บ 3 ชิ้น</p>
                                <p>• เป๊ปซี่ 1 ขวด</p>
                            </div>
                            <div id="set-count-2"></div>
                            <div class="minus"><button class='glyphicon'
                                    style="color: rgb(255, 255, 255); font-size: 25px;" onclick="set2minus(this.id)"
                                    id="set-2-minus">-</button>
                                <script>
                                    document.getElementById("set-count-2").innerHTML = 1;
                                    let set_count_2 = document.getElementById("set-count-2");
                                    set_count_2 = 1;
    
                                    function set2minus(clicked_id) {
                                        if (clicked_id == "set-2-minus") {
                                            if (set_count_2 > 1) {
                                                set_count_2--;
                                                document.getElementById("set-count-2").innerHTML = set_count_2;
                                            }
                                        }
                                    }
                                </script>
                            </div>
                            <div class="plus"><button class='glyphicon'
                                    style="color: rgb(255, 255, 255); font-size: 25px;" onclick="set2plus(this.id)"
                                    id="set-2-plus">+</button>
                                <script>
                                    function set2plus(clicked_id) {
                                        if (clicked_id == "set-2-plus") {
                                            set_count_2++;
                                            document.getElementById("set-count-2").innerHTML = set_count_2;
                                        }
                                    }
                                </script>
                            </div>
                            <div><button class="add" onclick="">เพิ่มลงตะกร้า</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="price">
                                <p>125 บาท</p>
                            </div>
                            <img class="pic-set"
                                src="https://media.discordapp.net/attachments/1029750439866007613/1034127903627149462/kai_don_jai_3.png">
                            <div class="infomation">
                                <h2 style="color: rgb(253 165 39);">เซ็ต ไก่กินคนเดียว</h2>
                                <p>รายละเอียดภายในชุดเซ็ต</p>
                                <p>• ไก่ทอด 2 ชิ้น</p>
                                <p>• วิงซ์แซ่บ 3 ชิ้น</p>
                                <p>• เป๊ปซี่ 1 ขวด</p>
                            </div>
                            <div id="set-count-3"></div>
                            <div class="minus"><button class='glyphicon'
                                    style="color: rgb(255, 255, 255); font-size: 25px;" onclick="set3minus(this.id)"
                                    id="set-3-minus">-</button>
                                <script>
                                    document.getElementById("set-count-3").innerHTML = 1;
                                    let set_count_3 = document.getElementById("set-count-3");
                                    set_count_3 = 1;
    
                                    function set3minus(clicked_id) {
                                        if (clicked_id == "set-3-minus") {
                                            if (set_count_3 > 1) {
                                                set_count_3--;
                                                document.getElementById("set-count-3").innerHTML = set_count_3;
                                            }
                                        }
                                    }
                                </script>
                            </div>
                            <div class="plus"><button class='glyphicon'
                                    style="color: rgb(255, 255, 255); font-size: 25px;" onclick="set3plus(this.id)"
                                    id="set-3-plus">+</button>
                                <script>
                                    function set3plus(clicked_id) {
                                        if (clicked_id == "set-3-plus") {
                                            set_count_3++;
                                            document.getElementById("set-count-3").innerHTML = set_count_3;
                                        }
                                    }
                                </script>
                            </div>
                            <div><button class="add" onclick="">เพิ่มลงตะกร้า</button>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="price">
                                <p>125 บาท</p>
                            </div>
                            <img class="pic-set"
                                src="https://media.discordapp.net/attachments/1029750439866007613/1034127903627149462/kai_don_jai_3.png">
                            <div class="infomation">
                                <h2 style="color: rgb(253 165 39);">เซ็ต ไก่กินคนเดียว</h2>
                                <p>รายละเอียดภายในชุดเซ็ต</p>
                                <p>• ไก่ทอด 2 ชิ้น</p>
                                <p>• วิงซ์แซ่บ 3 ชิ้น</p>
                                <p>• เป๊ปซี่ 1 ขวด</p>
                            </div>
                            <div id="set-count-4"></div>
                            <div class="minus"><button class='glyphicon'
                                    style="color: rgb(255, 255, 255); font-size: 25px;" onclick="set4minus(this.id)"
                                    id="set-4-minus">-</button>
                                <script>
                                    document.getElementById("set-count-4").innerHTML = 1;
                                    let set_count_4 = document.getElementById("set-count-4");
                                    set_count_4 = 1;
    
                                    function set4minus(clicked_id) {
                                        if (clicked_id == "set-4-minus") {
                                            if (set_count_4 > 1) {
                                                set_count_4--;
                                                document.getElementById("set-count-4").innerHTML = set_count_4;
                                            }
                                        }
                                    }
                                </script>
                            </div>
                            <div class="plus"><button class='glyphicon'
                                    style="color: rgb(255, 255, 255); font-size: 25px;" onclick="set4plus(this.id)"
                                    id="set-4-plus">+</button>
                                <script>
                                    function set4plus(clicked_id) {
                                        if (clicked_id == "set-4-plus") {
                                            set_count_4++;
                                            document.getElementById("set-count-4").innerHTML = set_count_4;
                                        }
                                    }
                                </script>
                            </div>
                            <div><button class="add" onclick="">เพิ่มลงตะกร้า</button>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="price">
                                <p>125 บาท</p>
                            </div>
                            <img class="pic-set"
                                src="https://media.discordapp.net/attachments/1029750439866007613/1034127903627149462/kai_don_jai_3.png">
                            <div class="infomation">
                                <h2 style="color: rgb(253 165 39);">เซ็ต ไก่กินคนเดียว</h2>
                                <p>รายละเอียดภายในชุดเซ็ต</p>
                                <p>• ไก่ทอด 2 ชิ้น</p>
                                <p>• วิงซ์แซ่บ 3 ชิ้น</p>
                                <p>• เป๊ปซี่ 1 ขวด</p>
                            </div>
                            <div id="set-count-5"></div>
                            <div class="minus"><button class='glyphicon'
                                    style="color: rgb(255, 255, 255); font-size: 25px;" onclick="set5minus(this.id)"
                                    id="set-5-minus">-</button>
                                <script>
                                    document.getElementById("set-count-5").innerHTML = 1;
                                    let set_count_5 = document.getElementById("set-count-5");
                                    set_count_5 = 1;
    
                                    function set5minus(clicked_id) {
                                        if (clicked_id == "set-5-minus") {
                                            if (set_count_5 > 1) {
                                                set_count_5--;
                                                document.getElementById("set-count-5").innerHTML = set_count_5;
                                            }
                                        }
                                    }
                                </script>
                            </div>
                            <div class="plus"><button class='glyphicon'
                                    style="color: rgb(255, 255, 255); font-size: 25px;" onclick="set5plus(this.id)"
                                    id="set-5-plus">+</button>
                                <script>
                                    function set5plus(clicked_id) {
                                        if (clicked_id == "set-5-plus") {
                                            set_count_5++;
                                            document.getElementById("set-count-5").innerHTML = set_count_5;
                                        }
                                    }
                                </script>
                            </div>
                            <div><button class="add" onclick="">เพิ่มลงตะกร้า</button>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="price">
                                <p>125 บาท</p>
                            </div>
                            <img class="pic-set"
                                src="https://media.discordapp.net/attachments/1029750439866007613/1034127903627149462/kai_don_jai_3.png">
                            <div class="infomation">
                                <h2 style="color: rgb(253 165 39);">เซ็ต ไก่กินคนเดียว</h2>
                                <p>รายละเอียดภายในชุดเซ็ต</p>
                                <p>• ไก่ทอด 2 ชิ้น</p>
                                <p>• วิงซ์แซ่บ 3 ชิ้น</p>
                                <p>• เป๊ปซี่ 1 ขวด</p>
                            </div>
                            <div id="set-count-6"></div>
                            <div class="minus"><button class='glyphicon'
                                    style="color: rgb(255, 255, 255); font-size: 25px;" onclick="set6minus(this.id)"
                                    id="set-6-minus">-</button>
                                <script>
                                    document.getElementById("set-count-6").innerHTML = 1;
                                    let set_count_6 = document.getElementById("set-count-6");
                                    set_count_6 = 1;
    
                                    function set6minus(clicked_id) {
                                        if (clicked_id == "set-6-minus") {
                                            if (set_count_6 > 1) {
                                                set_count_6--;
                                                document.getElementById("set-count-6").innerHTML = set_count_6;
                                            }
                                        }
                                    }
                                </script>
                            </div>
                            <div class="plus"><button class='glyphicon'
                                    style="color: rgb(255, 255, 255); font-size: 25px;" onclick="set6plus(this.id)"
                                    id="set-6-plus">+</button>
                                <script>
                                    function set6plus(clicked_id) {
                                        if (clicked_id == "set-6-plus") {
                                            set_count_6++;
                                            document.getElementById("set-count-6").innerHTML = set_count_6;
                                        }
                                    }
                                </script>
                            </div>
                            <div><button class="add" onclick="">เพิ่มลงตะกร้า</button>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="price">
                                <p>125 บาท</p>
                            </div>
                            <img class="pic-set"
                                src="https://media.discordapp.net/attachments/1029750439866007613/1034127903627149462/kai_don_jai_3.png">
                            <div class="infomation">
                                <h2 style="color: rgb(253 165 39);">เซ็ต ไก่กินคนเดียว</h2>
                                <p>รายละเอียดภายในชุดเซ็ต</p>
                                <p>• ไก่ทอด 2 ชิ้น</p>
                                <p>• วิงซ์แซ่บ 3 ชิ้น</p>
                                <p>• เป๊ปซี่ 1 ขวด</p>
                            </div>
                            <div id="set-count-7"></div>
                            <div class="minus"><button class='glyphicon'
                                    style="color: rgb(255, 255, 255); font-size: 25px;" onclick="set7minus(this.id)"
                                    id="set-7-minus">-</button>
                                <script>
                                    document.getElementById("set-count-7").innerHTML = 1;
                                    let set_count_7 = document.getElementById("set-count-7");
                                    set_count_7 = 1;
    
                                    function set7minus(clicked_id) {
                                        if (clicked_id == "set-7-minus") {
                                            if (set_count_7 > 1) {
                                                set_count_7--;
                                                document.getElementById("set-count-7").innerHTML = set_count_7;
                                            }
                                        }
                                    }
                                </script>
                            </div>
                            <div class="plus"><button class='glyphicon'
                                    style="color: rgb(255, 255, 255); font-size: 25px;" onclick="set7plus(this.id)"
                                    id="set-7-plus">+</button>
                                <script>
                                    function set7plus(clicked_id) {
                                        if (clicked_id == "set-7-plus") {
                                            set_count_7++;
                                            document.getElementById("set-count-7").innerHTML = set_count_7;
                                        }
                                    }
                                </script>
                            </div>
                            <div><button class="add" onclick="">เพิ่มลงตะกร้า</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</body>

</html>
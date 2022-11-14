<?php

    class MyDB extends SQLite3 {
        function __construct() {
            $this->open('currentMenu.db');
        }
    }

    $db = new MyDB();

    $id = $_POST['id'];
    $type = $_POST['type'];
    $sql =<<<EOF
    UPDATE $type set INCART = "NO" where ID=$id;
    EOF;

    $ret = $db->exec($sql);
    if(!$ret) {
    echo $db->lastErrorMsg();
    }

    ////////////////////////////////////////////////////////////

    class MyDB2 extends SQLite3 {
        function __construct() {
            $this->open('selectMenu.db');
        }
    }

    $db2 = new MyDB2();

    $id = $_POST['id'];
    $type = $_POST['type'];
    $amount = $_POST['amount'];
    if(!$id || !$type || !$amount || !$amount < 0) echo new Error("มีบางอย่างผิดพลาดโปรดกินไก่ 1 ชิ้น");

    $sql =<<<EOF
    DELETE FROM $type WHERE ID = $id;
    EOF;

    $ret = $db2->exec($sql);
    if(!$ret) {
        echo $db2->lastErrorMsg();
    }
    else {
        echo $db->changes();
        echo $db2->changes();
    }

    $db->close();
    $db2->close();

?>

<?php

   /* Connect and Open Database */
   class MyDB extends SQLite3
   {
       function __construct()
       {
           $this->open('../Database/selectMenu.db');
       }
   }

   // Open Database
   $db = new MyDB();

   $id = $_POST['id'];
   $amount = $_POST['amount'];
   if(!$id || !$amount || !$amount < 0) echo new Error("มีบางอย่างผิดพลาดโปรดกินไก่ 1 ชิ้น");

   $sql =<<<EOF
   UPDATE $type set AMOUNT = $amount where ID=$id;
   EOF;

   $ret = $db->exec($sql);
   if(!$ret) {
      echo $db->lastErrorMsg();
   } else {
      echo $db->changes();
   }

   // Close database
   $db->close();
?>

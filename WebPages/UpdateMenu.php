<?php 

   /* Connect and Open Database */
   class MyDB extends SQLite3
   {
       function __construct()
       {
           $this->open('./currentMenu.db');
       }
   }

   // Open Database 
   $db = new MyDB();

   $id = $_POST['id'];
   $type = $_POST['type'];
   $amount = $_POST['amount'];
   if(!$id || !$type || !$amount || !$amount < 0) echo new Error("มีบางอย่างผิดพลาดโปรดกินไก่ 1 ชิ้น");

   $sql =<<<EOF
   UPDATE chicken set AMOUNT = $amount where ID=$id;
   UPDATE burger set AMOUNT = $amount where ID=$id;
   UPDATE rice set AMOUNT = $amount where ID=$id;
   UPDATE salad set AMOUNT = $amount where ID=$id;
   UPDATE drink set AMOUNT = $amount where ID=$id;
   UPDATE Promotion set AMOUNT = $amount where ID=$id;
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

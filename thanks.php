<?php
   require "./config/db.php";
   require "./model/customer.php";
   $customer = new Customer();

   $params["last_name"] = "sample1";
   $params["first_name"] = "sample1";
   $params["last_name_kana"] = "sample1";
   $params["first_name_kana"] = "sample1";
   $params["email"] = "sample1";
   $params["phone"] = "sample1";
   $params["address"] = "sample1";
   var_dump($customer->create($params));
?>

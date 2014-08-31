<?php
   require "../config/db.php";
   require "../model/user.php";
   $user = new User();
   $users = $user->getAll();
?>
<table>
  <tr>
	<th>姓</th>
	<th>名</th>
	<th>姓(かな)</th>
	<th>名(かな)</th>
	<th>メールアドレス</th>
	<th>電話番号</th>
	<th>住所</th>
  <tr>
  <?php while ($row = mysql_fetch_assoc($users)) { ?>
   <tr>
   	<td><?php echo $row["last_name"] ?></td>
	<td><?php echo $row["first_name"] ?></td>
	<td><?php echo $row["last_name_ja"] ?></td>
	<td><?php echo $row["first_name_ja"] ?></td>
	<td><?php echo $row["email"] ?></td>
	<td><?php echo $row["phone"] ?></td>
	<td><?php echo $row["address"] ?></td>
  <tr> 
  <?php } ?>
</table>

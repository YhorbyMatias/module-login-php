<?php
include "login/config.php";
include "login/login/Get-number-reset.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $lang_reset_password["reset_password"]; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="http://code.jquery.com/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<center>
<br><br><br><br>
<h3><?php echo $lang_reset_password["reset_password"]; ?>:</h3>
<strong style="color: red;"><?php echo $msg_reset; ?></strong>
<form method="post">
<table class="table table-striped">
<tr>
<td style="text-align: right;"><?php echo $lang_reset_password["email"]; ?>:</td><td><input type="text" placeholder="<?php echo $lang_reset_password["email"]; ?>" name="email"></td>
</tr>
<tr>
<td style="text-align: right;"><?php echo $lang_reset_password["password"]; ?>:</td><td><input type="password" placeholder="<?php echo $lang_reset_password["password"]; ?>" name="password"></td>
</tr>
<tr>
<td style="text-align: right;"><?php echo $lang_reset_password["repeat_password"]; ?>:</td><td><input type="password" placeholder="<?php echo $lang_reset_password["repeat_password"]; ?>" name="repeat_password"></td>
</tr>
</table>
<input type="hidden" name="reset_password" value="<?php echo $reset; ?>">
<button type="submit" class="btn"><?php echo $lang_reset_password["reset"]; ?></button>
<br>
<a href="login.php"><?php echo $lang_reset_password["back_to_login"]; ?></a>
</form>
</center>
</body>
</html>
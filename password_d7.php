<?php

/**
 * password_d7.php
 *
 * Password reset query generator 
 *
 * @package   Password reset Query Generator
 * @category  Drupal 7 utility
 * @author     Karthikeyan Manivasagam karthikeyanm.inbox@gmail.com
 * @copyright  2019 Karthikeyan Manivasagam
 */
 
/*Use drupal's root directory to write the below script :
php ./scripts/password-hash.sh NewPassword

Note* php should be installed to execute this shell script

It will return :

password: NewPassword hash: $S$DRSUIz9NFfxOXKPveQ00UTGMzsJe62LjYvVHfYJ8I8wuy4zRqVBK

Then we just need to update this password to user table with the help of following command :

UPDATE users SET pass = '$S$DRSUIz9NFfxOXKPveQ00UTGMzsJe62LjYvVHfYJ8I8wuy4zRqVBK' WHERE uid = 1; */

if(isset($_REQUEST['password']) && isset($_REQUEST['userid']) && $_REQUEST['password'] != "" && $_REQUEST['userid'] != ""){
include("includes/password.inc");
include("includes/bootstrap.inc");
$hashed_password = user_hash_password(trim($_REQUEST['password']));
echo "User Id :".$_REQUEST['userid'];
echo "<br/>Password :".$_REQUEST['password']."<br/>You just need to update this password to user table with the help of following command <br/>";
echo "UPDATE users SET pass = '".$hashed_password."' WHERE uid =".$_REQUEST['userid'];

}else{ ?>

<html>
<body>

<form action="" method="get">
User Id: <input type="text" name="userid"><br>
Password: <input type="text" name="password"><br>
<input type="submit">
</form>

</body>
</html>
<?php
} ?>

/*Then we just need to update this password to user table with the help of following command :

UPDATE users SET pass = '$S$DRSUIz9NFfxOXKPveQ00UTGMzsJe62LjYvVHfYJ8I8wuy4zRqVBK' WHERE uid = 1; */

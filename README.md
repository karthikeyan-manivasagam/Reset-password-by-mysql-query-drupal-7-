# Reset-password-by-mysql-query-drupal-7-
This script will generate the mysql query for the password reset, If you have access to DB  then you can reset the password of any user even admin's.  

1. Move this file to root folder of your drupal 7 installation path.
2. If your site is http://example.com then navigate to the path http://example.com/password_d7.php
3. Provide user id and password  you want to set for that particular user id and submit.
4. Copy the printed query and execute it in database. (it will be like the below query, now you will be able to login with new password that is set for that user)

/* UPDATE users SET pass = '$S$DRSUIz9NFfxOXKPveQ00UTGMzsJe62LjYvVHfYJ8I8wuy4zRqVBK' WHERE uid = 1; */

<!--Programmer Name: Mr. Kong Jia Heng, UCDF2104ICT(SE) Student-->
<!--Program Name: user_logout.php-->
<!--Description: this page allow user logout his account in library system-->
<!--First Written On: Monday, 6-March-2023-->
<!--Edited On: Monday, 6-March-2023-->

<?php
session_start();
unset($_SESSION["useremail"]);
session_destroy();
header("Location:user_login.php");
?>
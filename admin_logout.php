<!--Programmer Name: Mr. Yong Zong Huang, UCDF2104ICT(SE) Student-->
<!--Program Name: admin_logout.php-->
<!--Description: this page allow admin logout the system-->
<!--First Written On: Sunday, 5-March-2023-->
<!--Edited On: Monday, 13-March-2023-->

<?php
session_start();
unset($_SESSION["staffemail"]);
session_destroy();
header("Location:admin_login.php");
?>
<!--Programmer Name: Mr. Yong Zong Huang,  UCDF2104ICT(SE) Student-->
<!--Program Name: dbconnection.php-->
<!--Description: this page allow our page can connect the database of the mysql-->
<!--First Written On: Saturday, 4-March-2023-->
<!--Edited On: Saturday, 4-March-2023-->

<?php 
    $hostname= 'localhost';//'127.0.0.1'
    $username= 'root';
    $password='';
    $database='high_performance_library_system';

    $connection= mysqli_connect($hostname,$username,$password,$database);

    if($connection == false){
        die('error connecting to database' .mysqli_connect_error());
    } else{
        echo '';
    }

?>
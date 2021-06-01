<?php  

$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_internship";

 $connection = mysqli_connect($host, $username, $passwd, $dbname);


 $q = mysqli_query($connection,
 	       "insert into table_student(tbl_name,tbl_gender,tbl_mobile) values('Bhavi','Female','123')") 
            or die("error".mysqli_error($connection));

            if ($q) {
            	echo "<script>alert('record added');</script>";
            }

?>




<?php

$server="localhost";
$user="root";
$password="Gourav@123";
$database="smartdoctor";

$conn=mysqli_connect($server,$user,$password,$database,"31595");

if(!$conn)
{
    ?>
        <script>

            alert("No Connection. Try again later..");
        </script>
    <?php
}


?>

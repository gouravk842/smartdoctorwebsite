<?php

$server="192.168.99.106";
$user="root";
$password="root";
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

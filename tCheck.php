<?php
session_start();
if(isset ($_SESSION['uName']))
{
    header("Location:tHome.php");
}
else echo"close";
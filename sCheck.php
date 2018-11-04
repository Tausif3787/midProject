<?php
session_start();
if(isset ($_SESSION['uName']))
{
    header("Location:sHome.php");
}
else echo"close";
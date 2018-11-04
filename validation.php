<?php
session_start();
$tName="Zahid";
$tPass="1234";

$users = simplexml_load_file("student.xml");
foreach ($users->user as $u)
{
    $sName= $u->studentUserName;
    $sPass= $u->studentPass;

    if($_POST['uName']==$sName && $_POST['uPass']==$sPass)
    {
        $_SESSION['uName']=$sName;
        header("Location:sCheck.php");
    }
}
if($_POST['uName']==$tName && $_POST['uPass']==$tPass)
{
    $_SESSION['uName']=$tName;
    header("Location:tCheck.php");
}

else echo "wrong";












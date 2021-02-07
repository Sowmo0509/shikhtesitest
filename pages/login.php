<?php
$username=$_POST['user'];
$password=$_POST['pass'];

if (isset($_POST['submit']))
{
    if(!empty($username) && !empty($password))
    {
        if($username=='admin' && $password=='test')
        {
            echo "Welcome, $username!";
        }
        else
        {
            echo "Incorrect Login!";
        }
    }
    else
    {
        echo "Please fill up username and password.";
    }
}
?>

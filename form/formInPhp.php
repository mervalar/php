<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = $_POST['firstname'];
    echo "hello"."". $firstname;
}
else
{
header("location:.../form.hph");
}
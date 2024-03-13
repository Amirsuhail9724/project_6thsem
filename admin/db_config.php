<?php
$server="localhost";
$username="root";
$pass="";
$database="bluestar";
$con=mysqli_connect($server,$username,$pass,$database);
if(!$con)
{
    echo "Failed to Connect".mysqli_connect_error();
}

// data filterration

function filteration ($data)
{
    foreach($data as $key => $value)
    {
        $data[$key]=trim($value);
        $data[$key]=stripslashes($value);
        $data[$key]=htmlspecialchars($value);
        $data[$key]=strip_tags($value);
    }
    return $data;
}

// login credential 

function credential($sql,$values,$datatypess)
{
    $con= $GLOBALS['con'];
    if($stmt = mysqli_prepare($con,$sql))
    {
        mysqli_stmt_bind_param($stmt,$datatypess,...$values);
        if(mysqli_stmt_execute($stmt))
        {
           $res= mysqli_stmt_get_result($stmt);
           mysqli_stmt_close($stmt);
           return $res;
        }
        else
        {
            mysqli_stmt_close($stmt);
            die("error on prepare query");
        }
    }
    else
    {
        die("error on select query");
    }
}
?>
<?php

include("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        name<input type="text" name="name"><br>
        mobile<input type="mobile" name="mobile"><br>
        company<input type="company" name="company"><br>
        purpose<input type="purpose" name="purpose"><br>
        date<input type="date" name="date"><br>
        <input type="submit" name="submit"><br>
    </form>
    <?php
if(isset($_POST['submit'])){


    $name= $_POST['name'];
    $mobile= $_POST['mobile'];
    $company= $_POST['company'];
    $purpose= $_POST['purpose'];
    $date= $_POST['date'];

    $result= mysqli_query($mysqli, "INSERT into record values('','$name','$mobile','$company','$purpose','$date')");

    if($result)
    {

        echo "success";
    }
    else{
        echo "faild";
    }


}
?>


</body>
</body>

</html>
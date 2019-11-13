<?php

if(isset($_POST['firstname'])){ 
    $connect = new mysqli('localhost','root','','eunicedb');
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $query = "insert into cus_tbl (cus_firstname, cus_surname, cus_age) values('$firstname','$surname','$age')";
    $execute = $connect->query($query);
    
    if(!empty($firstname) && !empty($surname) && !empty($age)) {
        echo 'the query executed successfully and the data is inserted into database';
    }else{
               echo  'all field are required';
    }
}


?>

<form action="<?php $_PHP_SELF; ?>" method="POST">
customer firstname: <input type="text" value="" name="firstname"><br><br>
customer surname: <input type="text" value="" name="surname"><br><br>
customer age: <input type="text" value="" name="age"><br><br>
<input type="submit" value="Register" name="collect"><br>
</form>

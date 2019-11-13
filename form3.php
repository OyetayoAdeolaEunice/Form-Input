<?php

if(isset($_POST['username'])){ 
    $connect = new mysqli('localhost','root','','eunicedb');
    $username = $_POST["username"];
    $password = $_POST["password"];
    $gender= $_POST["gender"];
    $email= $_POST["email"];
    $phone= $_POST["phone"];
    $state= $_POST["state"];
    $department= $_POST["department"];
    $level= $_POST["level"];
    
    $query = "INSERT INTO customer (username, password, gender, email, phone, state, department, level)         
     VALUES ('$username', '$password', '$gender', '$email', '$phone', '$state', '$department', '$level')";
    $execute = $connect->query($query);

    if($execute){
        echo 'the query executed successfully and the data is inserted into database';
    }else{
        echo $connect->error;
    }
}

?>

<form action="<?php $_PHP_SELF; ?>" method="POST">
username<input type="text" value="" name="username">
password<input type="password" value="" name="password">
gender<input type="radio" value="Male" name="gender">male <input type="radio" value="Female" name="gender">female
email<input type="email" name="email">
phone no<input type="text" name="phone">
state<input type="text" name="state">
department<input type="text" name="department">
level<input type="text" name="level">
<input type="submit" value="Register" name="collect">
</form>
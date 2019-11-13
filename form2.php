<?php

if(isset($_POST['gender'])){ 
    $connect = new mysqli('localhost','root','','eunicedb');
    $username = $_POST["username"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $state = $_POST["state"];
    $department = $_POST["department"];
    $level = $_POST["level"];
    
    $query = "INSERT INTO customer (username, password, gender, email, phone, state, department, level)         
     VALUES ('$username', '$password', '$gender', '$email', '$phone', '$state', '$department', '$level')";
    $execute = $connect->query($query);
	
    if($execute){
        echo 'the query executed successfully and the data is inserted into database';
    }else{
        //echo 'Oops problem has occur in inserting the data to the database or execution of the query';
        echo $connect->error;
	}

}

?>

<form action="<?php $_PHP_SELF; ?>" method="POST">
<table>
					
	<tr>
	    <td>username:</td>
		<td><input type="text" value="" name="username" placeholder="name"></td>
	</tr>
    <tr>
	    <td>password:</td>
		<td><input type="password" value="" name="password" placeholder="password"></td>
	</tr>
    <tr>
	    <td>gender:</td>
		<td><input type="radio" value="Male" name="gender">male 
		<input type="radio" value="Female" name="gender">female</td>
	</tr>
    <tr>
	    <td>email:</td>
		<td><input type="email" name="email" placeholder="email"></td>
	</tr>
    <tr>
	    <td>phone no:</td>
		<td><input type="text" name="phone"></td>
	</tr>
    <tr>
		<td>state:</td>
		<td><select type="text" name="state">
		    <option select hidden value="">select state</option>
			<option value="Osun">Osun</option>
			<option value="Sokoto">Sokoto</option>
			<option value="Kebbi">Kebbi</option>
			<option value="Oyo">Oyo</option>
			<option value="Ogun">Ogun</option>
			<option value="Adamawa">Adamawa</option>
			<option value="Zanfara">Zanfara</option>
			<option value="Kano">Kano</option>
			<option value="Bayelsa">Bayelsa</option>
			<option value="Benue">Benue</option>
		</td>
	</tr>
    <tr>
		<td>department:</td>
		<td><select type="text" name="department">
			<option select hidden value="">choose department</option>
			<option value="computer science">computer science</option>
			<option value="computer engineering">computer engineering</option>
			<option value="mathematics and statistic">mathematics and statistic</option>
			<option value="science laboratory technology">science laboratory technology</option>
			<option value="mechanical engineering">mechanical engineering</option>
			<option value="electrical electronics engieering">electrical electronics engieering</option>
			<option value="bussiness administration">bussiness administration</option>
			<option value="banking and finance">banking and finance</option>
			<option value="accounting">accounting</option>
			<option value="agricultural science">agricultural science</option>
		</td>
	</tr>
    <tr>
		<td>level:</td>
		<td><select type="text" name="level">
			<option select hidden value="">choose level</option>
			<option value="ND1">ND1</option>
			<option value="ND2">ND2</option>
			<option value="HND1">HND1</option>
			<option value="HND2">HND2</option>
        </td>
	</tr>
       <td> <input type="submit" value="Register" name="collect"></td>
</table>
</form>

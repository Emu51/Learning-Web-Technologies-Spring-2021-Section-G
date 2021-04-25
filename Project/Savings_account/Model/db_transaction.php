<?php
	
require_once('db.php');


function validateUser($name, $password,$AccountNumber){
	$conn = getConnection();
	$sql = "select * from login where myname='{$name}' , password='{$password}', AccountNumber='{$AccountNumber}' ";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	if(count($row) > 0){
		return true;
	}else{
		return false;
	}
}

function transactionShow($user){
	$conn = getConnection();
	$sql = "Insert into transaction values('', '{$user['first_name']}', '{$user['last_name']}', '{$user['company_name']}','{$user['salary']}')";

	$result = mysqli_query($conn, $sql);
	

	if($result){

		return true;
	}
	else{
		return false;
	}

}

function deleteTransaction($id){
	$conn = getConnection();
	$sql = "delete from transaction where first_name='{$firstname}'";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		return true;
	}else{
		return false;
	}
}

function getUserByName($username){
	$conn = getConnection();
	$sql = "select * from transaction where first_name='{$firstname}'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row;
}





function insertUser($user){
	$conn = getConnection();
	$sql = "insert into login values('', '{$user['username']}', '{$user['password']}', '{$user['email']}')";

	$result = mysqli_query($conn, $sql);
	echo $result;
	
/*
	if($result){

		return true;
	}else{
		return false;
	}*/

}








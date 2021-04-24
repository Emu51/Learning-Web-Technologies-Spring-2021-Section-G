<?php
	
require_once('db.php');

function validateUser($name, $password){
	$conn = getConnection();
	$sql = "select * from users where name='{$name}' and password='{$password}'";
	echo $sql;
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	if(count($row) > 0){
		return true;
	}else{
		return false;
	}
}

function insertUser($user){
	$conn = getConnection();
	$sql = "insert into users values('', '{$user['name']}', '{$user['password']}', '{$user['email']}','{$user['type']}','{$user['phone']}')";

	$result = mysqli_query($conn, $sql);
	

	if($result){

		return true;
	}else{
		return false;
	}

}

function getUserbyId($id){
	
	$conn = getConnection();
	$sql = "select * from users where id='{$id}'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	return $row;
}

function getAllUser(){

	$conn = getConnection();
	$sql = "select * from users";
	$result = mysqli_query($conn, $sql);
	$users = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($users, $row);
	}
	return $users;
}

function updateUser($user,$id1){
	$conn = getConnection();
	$sql = "update users set name='{$user['name']}', password='{$user['password']}', email='{$user['email']}',type='{$user['type']}', Phone='{$user['Phone']}' where id='{$id1}'";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		return true;
	}else{
		return false;
	}
}

function deleteUser($id){
	$conn = getConnection();
	$sql = "delete from users where id={$id}";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		return true;
	}else{
		return false;
	}
}

function getUserByName($username){
	$conn = getConnection();
	$sql = "select * from users where username='{$name}";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row;
}

?>
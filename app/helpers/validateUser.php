<?php

function validateUser($user)
{

	$errors = array();

  if(empty($user['username'])){
  	array_push($errors, 'Username is required');
  }

  if(empty($user['email'])){
  	array_push($errors, 'email is required');
  }

  if(empty($user['password'])){
  	array_push($errors, 'password is required');
  }

  if($user['passwordConf']!==$user['password']){
  	array_push($errors, 'password do not match');
  }


  $existingUser = selectOne('users', ['email' => $user['email']]);

  if ($existingUser) {
  	array_push($errors, 'Email already exists');
  }


	return $errors;
}
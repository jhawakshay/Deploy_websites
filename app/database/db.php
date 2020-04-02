<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
require('connect.php');


function dd($value)
{
    echo "<pre>" , print_r($value, true), "</pre>";
    die();
}


function executeQuery($sql, $data)
{
   global $conn;
   $stmt   = $conn->prepare($sql);
   $values = array_values($data);
   $types  = str_repeat('s', count($values));
   $stmt->bind_param($types ,...$values);
   $stmt->execute();		
   return $stmt;
}


function selectAll($table, $conditions = [])
{
	global $conn;
    $records = $conn->query("SELECT  * FROM $table");
    $outp = array();
	$sql = "SELECT  * FROM $table";
	if(empty($conditions)) {
    	//$stmt = $conn->prepare($sql);
		//$stmt->execute();
		
        //$records = $stmt-> get_result() -> fetch_array(MYSQLI_ASSOC);
        while ($row    = $records->fetch_array(MYSQLI_ASSOC)) {
               $outp[] = $records->fetch_array(MYSQLI_ASSOC);
              }
		//return $records;
        return $outp;
	}else{

        $i=0;
        foreach($conditions as $key => $value){
        	if($i===0){
        		$sql = $sql ." WHERE $key =?";
        	} else{ 
                $sql = $sql ." AND $key =?";
        	}  
        	$i++;
        }
        $stmt   = $conn->prepare($sql);
        $values = array_values($conditions);
        $types  = str_repeat('s', count($values));
        $stmt-> bind_param($types, ...$values);
        $stmt->execute();
        //$stmt = executeQuery($sql, $conditions);	
        $records = $stmt-> get_result()->fetch_all(MYSQLI_ASSOC);
		return $records;
	}

}

//Select one  function

function selectOne($table, $conditions)
{
	global $conn;
	$sql = "SELECT  * FROM $table";
        // return records on basis of conditions....
        //$sql = "SELECT * FROM $table WHERE ";

        $i=0;
        foreach($conditions as $key => $value){
        	if($i===0){
        		$sql = $sql ." WHERE $key =?";
        	} else{
                $sql = $sql ." AND $key =?";
        	} 
        	$i++;
        }

//$sql = "Select * FROM users Where admin=0 AND username="
        $sql = $sql . " LIMIT 1";

        if($stmt = $conn->prepare($sql)) { // assuming $mysqli is the connection
             $values = array_values($conditions);
             $types  = str_repeat('s', count($values));
             $stmt-> bind_param($types, ...$values);
             $stmt->execute();
        //$stmt = executeQuery($sql, $conditions);
             $records = $stmt-> get_result()->fetch_assoc();
             return $records;
        // any additional code you need would go here.
           }else{
             $error = $conn->errno . ' ' . $conn->error;
             echo $error;
}

}


function create($table, $data)
{
	global $conn;
	$sql = "INSERT INTO $table SET ";

	$i=0;
        foreach($data as $key => $value)
        {
        	if($i===0){
        		$sql = $sql ." $key =?";
        	} else{
                $sql = $sql .", $key =?";
        	} 
        	$i++;
        }
    
    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id; 
    return $id;
}


function update($table, $id, $data)
{
	global $conn;
	$sql = "UPDATE 	$table SET ";

	$i=0;
        foreach($data as $key => $value)
        {
        	if($i===0){
        		$sql = $sql ." $key =?";
        	} else{
                $sql = $sql .", $key =?";
        	} 
        	$i++;
        }
     
    $sql = $sql . " WHERE id=?";
    $data['id'] = $id;

    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id; 
    return $stmt->affected_rows;
}


function delete($table, $id)
{
	global $conn;
	$sql = "DELETE from $table WHERE id=?";
    $stmt = executeQuery($sql, ['id'=> $id]);
    return $stmt->affected_rows;
}


//$conditions = array(
//'admin' => 0,
//'username' => 'abc'
//);

//$users =selectOne('users', $conditions);
//dd($users);


function searchPosts($term)
{

    $match = '%'  . $term . '%';
    global $conn;
    $sql = "SELECT 
                p.*
                FROM posts as p
                JOIN users as u
                ON p.user_id = u.id
                WHERE p.published=?
                AND p.title LIKE ?
                OR p.body LIKE ?
                ";

    $stmt    = executeQuery($sql, ['published' =>1, 'title' => $match, 'body' => $match]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;

}


function getPostsByTopicId($topic_id)
{
    global $conn;
    $sql   = "SELECT p.*, u.username FROM posts AS p  JOIN users AS u ON p.user_id = u.id WHERE p.published=? AND topic_id = ?";

    $stmt  = executeQuery($sql, ['published' =>1, 'topic_id' => $topic_id]);
    $records = $stmt-> get_result()-> fetch_all(MYSQLI_ASSOC);
    return $records;

}
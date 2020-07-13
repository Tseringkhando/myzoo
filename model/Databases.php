<?php
//functions created to perform database operations
class Databases{
	public $table_name;
	public function __construct($table_name){$this->table_name = $table_name;}
	//insert or update operation
	function insertUpdate($record, $pk = ''){
	    try{
	        $success = $this->insert_only($record);
	        return $success;
	    }
	    catch(Exception $e){
	        $success = $this->update_only($record, $pk);
	    	return $success;
    	}
	}

	//to insert a row only
	function insert_only($record) {
	    global $pdo;
	    $keys = array_keys($record);
	    $keysWC = implode(', ', $keys);
	    $keysWCAC = implode(', :', $keys);
	    $query = "INSERT INTO $this->table_name($keysWC) VALUES(:$keysWCAC)";
	    $stmt = $pdo->prepare($query);
	    $stmt->execute($record);
	    return true;
	}
	//to update a row only
	function update_only($record, $pk){
	    global $pdo;
	    $para = [];
	    foreach ($record as $key => $value) {
	        $para[] = $key . ' = :' . $key;
	    }
	    $paraList = implode(', ', $para);
	    $query = "UPDATE $this->table_name SET $paraList WHERE $pk = :pk";
	    $record['pk'] = $record[$pk];
	    $stmt = $pdo->prepare($query);
	    $stmt->execute($record);
	    return true;
	}

	//select query with value
	function search($field, $value) {
	    global $pdo;
	    $stmt = $pdo->prepare("SELECT * FROM $this->table_name WHERE $field = :value");
	    $criteria = [
	            'value' => $value
	    ];
	    $stmt->execute($criteria);
	    return $stmt;
	}

	//select query with limit and by descending order of id
	function searchNumber($howmany,$field, $value){
			global $pdo;
			$stmt = $pdo->prepare("SELECT * FROM $this->table_name WHERE $field = :value ORDER BY id DESC LIMIT $howmany");
			$criteria = [
		            'value' => $value
		    ];
		    $stmt->execute($criteria);
			return $stmt;
		}

	//select all 
	function searchAll() {
	    global $pdo;
	    $stmt = $pdo->prepare("SELECT * FROM $this->table_name");
	    $stmt->execute();
	    return $stmt;
	}

	//to delete a row from the table
	function delete($field, $value) {
	    global $pdo;
	    $stmt = $pdo->prepare("DELETE FROM $this->table_name WHERE $field = :value");
	    $criteria = ['value' => $value ];
	    $stmt->execute($criteria);
	    return $stmt;
	}

	// to get the last id 
	function lastPostId(){
		global $pdo;
		return $pdo->lastInsertId();
	}

	// user search 
		function searchAnimal($field, $value) {
	    global $pdo;
	    $stmt = $pdo->prepare("SELECT * FROM $this->table_name WHERE  $field LIKE '%".$value."%'");
	    $stmt->execute();
	    return $stmt;
	}

		function searchTwo($field1, $field2, $value1,$value2) {
	    global $pdo;
	    $stmt = $pdo->prepare("SELECT * FROM $this->table_name WHERE  $field1 = :value1 AND $field2=:value2");
	   	$criteria = ['value1' => $value1, 'value2'=>$value2 ];
	    $stmt->execute($criteria);
	    return $stmt;
	}

		function searchTwoWithName($field1, $field2, $value1,$value2) {
	    global $pdo;
	    $stmt = $pdo->prepare("SELECT * FROM $this->table_name WHERE  $field1 = :value1 AND $field2 LIKE '%".$value2."%' ");
	   	$criteria = ['value1' => $value1];
	    $stmt->execute($criteria);
	    return $stmt;
	}


		function searchThree($field1, $field2, $field3, $value1,$value2, $value3) {
	    global $pdo;
	    $stmt = $pdo->prepare("SELECT * FROM $this->table_name WHERE  $field1 = :value1 AND $field2=:value2 AND $field3 LIKE '%".$value3."%'");
	   	$criteria = ['value1' => $value1, 'value2'=>$value2 ];
	    $stmt->execute($criteria);
	    return $stmt;
	}


  	
  
}
<?php 

	include_once 'my-PDO.php';

	class Model extends MyPDO{

		protected static $class_name;
		protected static $primary_key;
		protected static $table_name;
		protected static $table_fields;

		public function __construct(){
			parent::__construct();
		}

// Turn the table fields into objects
		public static function instantiate($record){
			$obj = new static();
			foreach ($record as $key => $value) {
				if(in_array($key,static::$table_fields))
					$obj->$key = $value;
			}
			return $obj;
		}

// Turn the table fields into arrays
		private function attributes(){
			$attributes = array();
			foreach (static::$table_fields as $field) {
				if($this->$field != NULL)
					$attributes [$field] = $this->$field;
			}
			return $attributes;
		}

// Create a new entry into the database
		public function create(){
			$obj_attributes_array = $this->attributes();
			$obj_attributes_array_keys = array_keys($obj_attributes_array);
			$sql = "INSERT INTO ".static::$table_name;
			$sql .= " (". join(',',$obj_attributes_array_keys) .") ";
			$sql .= "VALUES ('".join("','",$obj_attributes_array) ."')";
			return $this->connection->query($sql);
		}

// redirect to another page
		public function redirect($location = ''){
			header("location: $location");
		}

		public static function findBySql($sql){
			$obj = new static();
			$objects = $obj->connection->query($sql)->fetchAll(PDO::FETCH_CLASS,static::$class_name);
			return ($objects) ? ($objects) : false;
		}

// find an item in database
		public static function find($id){
			$sql = "SELECT * FROM ".static::$table_name." WHERE " .static::$primary_key." = '$id'";
			$obj = new static();
			$object = $obj->connection->query($sql)->fetchAll(PDO::FETCH_CLASS,static::$class_name);
			return ($object) ? array_shift($object) : false;
		}

// update an Entry in database
		public function update(){
			$sql = "UPDATE ".static::$table_name." SET ";
			$attributes = $this->attributes();
			$attributes_pairs = array();
			foreach ($attributes as $field => $value) {
				$attributes_pairs[] = "$field = '$value'";
			}
			$primary_key = static::$primary_key;
			$sql .= join(',',$attributes_pairs);
			$sql .= " WHERE $primary_key = '{$this->$primary_key}'";
			return $this->connection->query($sql);
		}

		public function where($attributes){
			$sql = "SELECT * FROM ".static::$table_name." WHERE ";
			foreach ($attributes as $field => $value) {
				$attributes_pairs[] = "$field = '$value'";
			}
			$sql .= join(' AND ', $attributes_pairs);
			return static::findBySql($sql);
		}
 
	}

?>
<?php 

	include_once ('generalClass.php');

	class User extends Model{
		public $first_name;
		public $last_name;
		public $username;
		public $sex;
		public $dob;
		public $email;
		public $password;
		public $role;
		public $address;
		public $about_me;
		public $profile_pic;
		public $error = array();

		protected static $class_name = 'User';
		protected static $primary_key = 'username';
		protected static $table_name = 'users';
		protected static $table_fields = array('first_name','last_name','username','sex','dob','email','password','role','address','about_me');

		public function __construct(){
			parent::__construct();
		}

// Insert new user into database
		public function insertUser(){
			$this->password = md5($this->password);
			return ($this->create()) ? true : false;
		}

// Verify Login details before login
		public static function authenticate($password, $username){
			$password = md5($password);
			$sql = "SELECT * FROM ".static::$table_name." WHERE username = '$username' AND password = '$password' LIMIT 1";
			$user = static::findBySql($sql);
			return ($user) ? array_shift($user) : false;
			// return $sql;
		}

// Calculate Age
		public static function getAge($dob){
			$yearOfBirth = explode('-', $dob);
			$presentDate = date("Y");
			return ($presentDate - $yearOfBirth[0]);
		}

		// protected $upload_errors = array(
		// 	UPLOAD_ERR_OK  => "No errors.",
		// 	UPLOAD_ERR_INI_SIZE => "Larger than upload max filesize",
		// 	UPLOAD_ERR_FROM_SIZE => "Larger than form MAX_FILE_SIZE",
		// 	UPLOAD_ERR_PARTIAL => "Partial Upload",
		// 	UPLOAD_ERR_NO_FILE => "No file",
		// 	UPLOAD_ERR_NO_TMP_DIR => "No temporary directory",
		// 	UPLOAD_ERR_CANT_WRITE => "Cant write to disk",
		// 	UPLOAD_ERR_EXTENSION => "File upload stopped by extension");

		// public function attachFile($file){
		// 	if(!$file || empty($file) || !is_array($file)){
		// 		$this->errors[] = "No file was Uploaded";
		// 		return false;
		// 	}elseif ($file['error'] != 0) {
		// 		$this->errors[] = $this->upload_errors[$file['error']];
		// 		return false;
		// 	}else{
		// 		$this->temp_path = $file['tmp_name'];
		// 		$this->profile_pic = str_replace("/", "_", $this->username).".".basename($file["type"]);
		// 		$this->type = $file['type'];
		// 		$this->size = $file['size'];

		// 		return true;
		// 	}
		// }

		// public function save_with_file(){
		// 	if (!empty($this->errors)) {return false;}
		// 	if(empty($this->profile_pic) || empty($this->temp_path)){
		// 		$this->errors[] = "The file location was not avilable.";
		// 		return false;
		// 	}

		// 	$target_path = "img/usersProfilePic/".$this->profile_pic;
		// 	if (move_uploaded_file($this->temp_path, $target_path)) {
		// 		if (static::find($this->username)) {
		// 			$this->update();
		// 		}else{
		// 			$this->password = md5($this->password);
		// 			$this->create();
		// 		}
		// 		unset($this->temp_path);
		// 		return true;
		// 	} else{
		// 		$this->errors[] = "The file uploaded failed, possible due to incorrect permissions on the upload folder";
		// 		return false;
		// 	}
		// }
	}

?>
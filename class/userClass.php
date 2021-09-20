<?php  
 include "db.php";
/**
 * 
 */
class UserClass
{
	
	function __construct($username, $password)
	{
		$this->username = $username;
		$this->password = $password;
		$this->db = new db();
	}

	public function getData(){
		$data = $this->db->query("select * from Rol")->fetchAll();
		var_dump($data);

	}

	public function login() {
		if ($this->username == "gert" && $this->password == "123") {
			print("loggedin");

		} else {
			print("wrong");
		}
	}

	public function register($username, $password, $email, $phone) {

	}

	public function passwordHash($password){
		$salt = "Secret salt";

	}

	public function existUser($username, $email){
		
	}

	public function sessionSetter() {
	
	}

	public function generateToken() {
		

	}

	public function checkUser($username, $password) {

	}

}

?>
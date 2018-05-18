<?php 

class user {
	
	private $id;
	private $mail;
	private $password;
	private $regDate;

	public function setId($id) {
		if (is_numeric($id)) {
			$this->id = $id;
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	public function getId() {
		return $this->$id;
	}
	
	public function setMail($mail) {
		$this->mail = $mail;
	}	
	public function getMail() {
		return $this->mail;
	}
	public function setPassword($password) {
		$this->password = $password;
	}	
	public function getPassword() {
		return $this->password;
	}
	public function setRegDate($regDate) {
		$this->regDate = $regDate;
	}	
	public function getRegDate() {
		return $this->regDate;
	}
	public function addUser() {
		if (!empty($this->mail)
			&& !empty($this->password)
			&& !empty($this->regDate))
			 
			 {
        	$query = "INSERT INTO anuki SET  mail='".$this->mail."', password='".md5($this->password)."', regdate ='".$this->regDate."'";
        	mysql_query($query);
  		}
	}
}
?>
if(!empty($_POST["login"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {	
	$user->email = $_POST["email"];
	$user->password = $_POST["password"];	
	if($user->login()) {		
		header("Location: dashboard.php");		
	} else {
		$loginMessage = 'Invalid login! Please try again.';
	}
}

public function login(){
	if($this->email && $this->password) {
		$sqlQuery = "
			SELECT * FROM ".$this->userTable." 
			WHERE email = ? AND password = ?";			
		$stmt = $this->conn->prepare($sqlQuery);
		$password = md5($this->password);
		$stmt->bind_param("ss", $this->email, $password);	
		$stmt->execute();
		$result = $stmt->get_result();
		if($result->num_rows > 0){
			$user = $result->fetch_assoc();
			$_SESSION["userid"] = $user['id'];
			$_SESSION["role"] = $user['role'];
			$_SESSION["name"] = $user['first_name']." ".$user['last_name'];					
			return 1;		
		} else {
			return 0;		
		}			
	} else {
		return 0;
	}
}
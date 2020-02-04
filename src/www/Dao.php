<?php
require_once("../db/config.php");
class Dao
{
	/**
	 * Creates and returns a PDO connection using the database connection
	 * url specified in the CLEARDB_DATABASE_URL environment variable.
	 */
	public function getConnection()
	{
		$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

		$host = $url["host"];
		$db   = substr($url["path"], 1);
		$user = $url["user"];
		$pass = $url["pass"];

		$conn = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);

		// Turn on exceptions for debugging. Comment this out for
		// production or make sure to use try-catch statements.
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $conn; 
	}
	/**
	 * Returns the database connection status string.
	 */
	public function getConnectionStatus()
	{
		$conn = $this->getConnection();
		return $conn->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
  }
  public function getUsers()
	{
    $conn = $this->getConnection();
    return $conn->query("select * from users");
  }
  public function getUserByEmail($email)
	{
    $conn = $this->getConnection();
    return $conn->query("select * from users where email = '$email");
  }
  public function checkCredentials ($username, $password) {
	    //$digist = password_hash($password,PASSWORD_DEFAULT);
		$conn = $this->getConnection();
		$stmt = $conn->prepare("SELECT password FROM users WHERE username = :username");

		$stmt->bindParam(":username", $username);
		$stmt->execute();
		$row = $stmt->fetch();
		$digist = $row['password'];
		return password_verify($password,$digist);
  	}
  public function checkUsername ($username){
		$conn = $this->getConnection();
		$select_query = "SELECT username FROM users WHERE username = :username";
		$stmt = $conn->prepare($select_query);
		$stmt->bindParam(":username", $username);
		$stmt->execute();
		return reset($stmt->fetchAll());
	}

	public function createUser ($username, $password){
		$conn = $this->getConnection();
		$saveQuery = "INSERT INTO users (username, password) values (:username, :password)";
		$stmt = $conn->prepare($saveQuery);
		$stmt->bindParam(":username", $username);
		$stmt->bindParam(":password", $password);
		$stmt->execute();
	}

}



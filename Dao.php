
  <?php
require_once 'KLogger.php';

class Dao{
  private $host = "us-cdbr-iron-east-01.cleardb.net";
  private $db = "heroku_470e46bcfd224d6";
  private $user = "b6654bc7a1a313";
  private $pass = "bf0523a8";
  private $log;
  public function __construct(){
    $this ->log = new KLogger("log.txt", KLogger::INFO);
  	}

  public function getConnection () {
    $conn= new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
          $this->pass);
    return $conn;
}

public function addUser($username, $password){
      $this->log->LogInfo("Save comment [{$name}][{$comment}]");
      $conn=$this->getConnection();
			$saveQuery = $conn->prepare(
				"INSERT INTO accounts (username, password) VALUES (:username, :password)");
			$saveQuery->bindParam(":username", $username);
			$saveQuery->bindParam(":passwords", $password);
      $saveQuery->execute();
  }

  public function getUsername($username){
  		$conn=$this->getConnection();
      $stmt = $conn->prepare("SELECT username FROM accounts WHERE username = :username");
      $stmt->bindparam(":username", $username);
      $stmt->execute();
  		return $stmt->fetch();
}

  public function getUserPassword($username, $password){
		$conn=$this->getConnection();
		$q=$conn->prepare("SELECT username FROM accounts WHERE username=:username AND password=:password");
		$q->bindParam(":username", $username);
		$q->bindParam(":passwords", $password);
		$q->setFetchMode(PDO::FETCH_ASSOC);
		$q->execute();
		$result=$q->fetchAll();
		return $result;
	}

  //	public function deleteUser($username, $password){
  //	}

    public function validateUser($username, $password){
      $conn=$this->getConnection();
      $stmt = $conn->prepare("SELECT * FROM accounts WHERE username = :username");
      $stmt->bindparam(":username", $username);
      $stmt->execute();
      $user = $stmt->fetch();
      if ($user){
        $digest = $user['password'];
          if($password == $digest){
            return true;
          }
          return false;
      }
      return false;
    }
}
?>

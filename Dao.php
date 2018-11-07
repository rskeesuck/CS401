
  <?php
class Dao{
  private $host = "us-cdbr-iron-east-01.cleardb.net";
  private $db = "heroku_470e46bcfd224d6";
  private $user = "b6654bc7a1a313";
  private $pass = "bf0523a8";
  public function __construct(){
  	}
  public function getConnection () {
    return new PDO("mysql:host=us-cdbr-iron-east-01.cleardb.net;dbname=heroku_470e46bcfd224d6", "b6654bc7a1a313",
          "bf0523a8");
}
public function addUser($username, $password){
			$conn=$this->getConnection();
			$saveQuery = $conn->prepare(
				"INSERT INTO accounts (username, passwords) VALUES (:username, :password)");
			$saveQuery->bindParam(":username", $username);
			$saveQuery->bindParam(":password", $password);
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
		$q=$conn->prepare("SELECT username FROM users WHERE username=:username AND passwords=:password");
		$q->bindParam(":username", $username);
		$q->bindParam(":passwords", $password);
		$q->setFetchMode(PDO::FETCH_ASSOC);
		$q->execute();
		$result=$q->fetchAll();
		return $result;
	}
  //public function saveDestination($city, $country, $state){
			//$conn=$this->getConnection();
			//$saveQuery=
			//	"INSERT INTO destinations_input (city, country, state) VALUES (:city, :country, :state)";
			//$q=$conn->prepare($saveQuery);
		//	$q->bindParam(":city", $city);
		//	$q->bindParam(":country", $country);
		//	$q->bindParam(":state", $state);
	//		$q->execute();
	}

  	public function deleteUser($username, $password){
  	}
    public function validateUser($username, $password){
      $conn=$this->getConnection();
      $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
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

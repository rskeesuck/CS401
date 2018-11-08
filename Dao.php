
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
      //$this->log->LogInfo("Save comment [{$name}][{$comment}]");
      $conn=$this->getConnection();
			$saveQuery = $conn->prepare(
				"INSERT INTO accounts (username, password) VALUES (:username, :password)");
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
		$q=$conn->prepare("SELECT username FROM accounts WHERE username=:username AND password=:password");
		$q->bindParam(":username", $username);
		$q->bindParam(":passwords", $password);
		$q->setFetchMode(PDO::FETCH_ASSOC);
		$q->execute();
		$result=$q->fetchAll();
		return $result;
	}

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

    public function addStudent($student_first, $student_last, $student_gender, $student_grade){
      $conn=$this->getConnection();
			$saveQuery = $conn->prepare(
				"INSERT INTO student_records (student_first, student_last, gender, grade) VALUES (:student_first, :student_last, :student_gender, :student_grade)");
			$saveQuery->bindParam(":student_first", $student_first);
			$saveQuery->bindParam(":student_last", $student_last);
      $saveQuery->bindParam(":student_gender", $student_gender);
      $saveQuery->bindParam(":student_grade", $student_grade);

      $saveQuery->execute();
    }

    public function getStudent($student_first, $student_last){
    		$conn=$this->getConnection();
        $q = $conn->prepare("SELECT student_first, student_last FROM student_records WHERE (student_first = :student_first, student_last = :student_last");
        $q->bindParam(":student_first", $student_first);
        $q->bindparam(":student_last", $student_last);
        $q->setFetchMode(PDO::FETCH_ASSOC);
    		$q->execute();
    		$result=$q->fetchAll();
    		return $result;
  }

}
?>

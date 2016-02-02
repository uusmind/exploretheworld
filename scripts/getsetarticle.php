 <?php

 function getArticle($id){

 	session_start();
 	$servername = $_SESSION["servername"];
 	$dbname = $_SESSION["dbname"];
 	$username = $_SESSION["username"];
 	$password = $_SESSION["password"];

 	try {
 		if (filter_var($id, FILTER_VALIDATE_INT) === $id) {
 			$sql = "SELECT * FROM articles WHERE articleid = " . $id;
 		} else {
 			throw new Exception('ErrorId');
 		}

 		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 		$stmt = $conn->prepare($sql); 
 		$stmt->execute();
 		$stmt->setFetchMode(PDO::FETCH_ASSOC); 
 		$prer = $stmt->fetchAll();

 		$result["articleid"] = $prer[0]["articleid"];
 		$result["author"] = $prer[0]["author"];
 		$result["ainfo"] = $prer[0]["ainfo"];
 		$result["email"] = $prer[0]["email"];
 		$result["privat"] = $prer[0]["privat"];
 		$result["imgurl"] = $prer[0]["imgurl"];
 		$result["article"] = $prer[0]["article"];
 	}
 	catch(Exception $e) {
 		return false;
 	}
 	$conn = null;
 	return $result;
 }

 function setArticle($content){

 	session_start();
 	$servername = $_SESSION["servername"];
 	$dbname = $_SESSION["dbname"];
 	$username = $_SESSION["username"];
 	$password = $_SESSION["password"];

 	try {
 		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 		$sql = "INSERT INTO articles (firstname, lastname, email)
 		VALUES ('John', 'Doe', 'john@example.com')";
 		$conn->exec($sql);
 	$conn = null;
 	return true;
 	}
 	catch(PDOException $e)
 	{
 		return false;
 	}
 }

 ?>
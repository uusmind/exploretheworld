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
 		$result["title"] = $prer[0]["title"];
 		$result["article"] = $prer[0]["article"];
 		$result["publicatedate"] = $prer[0]["publicatedate"];
 		$result["visitings"] = $prer[0]["visitings"];

 	}
 	catch(Exception $e) {
 		return false;
 	}
 	$conn = null;
 	return $result;
 }

 function newVisit($id){

 	session_start();
 	$servername = $_SESSION["servername"];
 	$dbname = $_SESSION["dbname"];
 	$username = $_SESSION["username"];
 	$password = $_SESSION["password"];

  	try {
   		if (filter_var($id, FILTER_VALIDATE_INT) === $id) {
 			$sql = "UPDATE articles SET visitings = visitings + 1 WHERE articleid = " . $id;
 		} else {
 			throw new Exception('ErrorId');
 		}

 		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 		$conn->exec($sql);
 	$conn = null;
 	return true;
 	}
 	catch(PDOException $e)
 	{
 		return false;
 	}
 		
 }

 function getlastid(){
 	session_start();
 	$servername = $_SESSION["servername"];
 	$dbname = $_SESSION["dbname"];
 	$username = $_SESSION["username"];
 	$password = $_SESSION["password"];

  	try {
  		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 		$sql = "SELECT MAX( articleid ) as id FROM articles";
 		$stmt = $conn->prepare($sql); 
 		$stmt->execute();
 		$stmt->setFetchMode(PDO::FETCH_ASSOC); 
 		$prer = $stmt->fetchAll();

 		$result = $prer[0]["id"]; 		
 		return $result;
 	}
 	catch(PDOException $e)
 	{
 		return false;
 	}		
}

function printHeader($id){
	$art = getArticle($id);
	$text = $art['article'];
	$part = substr($text, 0, 300);
	echo '<div class="article_header">';
	echo '<a href="/articles/'.$id.'.php">';
	echo '<p>' . $part .'...</p></a>';
	echo '</div>';
}


/* to be fixed */
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
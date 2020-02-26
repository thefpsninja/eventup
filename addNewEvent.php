<?

require('database.php');

if($conn->connect_error){
  echo "Oops något gick fel här!";
} else {
  header ("Location: index.php");
  
  $userID = 1;
  $sql = "INSERT INTO events (eventName, content, dates, category, images, userID)
  VALUES (:eName, :eContent, :eDates, :eCategory, :eImages, $userID)";

  $stmt = $conn->prepare($sql);

  $stmt->bindParam(':eName', $_POST['eventName']);
  $stmt->bindParam(':eContent', $_POST['content']);
  $stmt->bindParam(':eDates', $_POST['dates']);
  $stmt->bindParam(':eCategory', $_POST['category']);
  $stmt->bindParam(':eImages', $_POST['images']);
  // $stmt->bindParam(':eUserID', $_POST['userID']);
  
  $stmt->execute();}



<?PHP

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "simplon";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // mode exception d'erreur PDO 
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $sql = "INSERT INTO `participant` ( `nom`, `prenoms`, `tel`, `email`)
VALUES( '$_POST[nom]','$_POST[prenom]','$_POST[tel]','$_POST[mail]')
";
    $conn->exec($sql);
  echo "Felicitations, un nouvel ajout reussi <a href='http://localhost/testsimplon/PROJET/%e2%80%8cindex.php '>Revenir au formulaire</a><br/>";
  echo "Voir la liste <a href='http://localhost/testsimplon/PROJET/CONNEXIONBD.php'>ici</a>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;

?>
<?php
  $host = 'localhost';
  $dbname = 'simplon';
  $username = 'root';
  $password = '';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  // récupérer tous les Participants Simplon
  $sql = "SELECT * FROM participant";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);
   
   if($stmt === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>

<h1>Liste des Participants Simplon</h1>

<table>
   <thead>
     <tr>
       <th>Ordre</th>
       <th>Nom</th>
       <th>Prenom</th>
       <th>Telephone</th>
       <th>Email</th>
     </tr>
   </thead>
   <tbody>
     <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr>
       <td><?php echo htmlspecialchars($row['id']); ?></td>
       <td><?php echo htmlspecialchars($row['nom']); ?></td>
       <td><?php echo htmlspecialchars($row['prenoms']); ?></td>
       <td><?php echo htmlspecialchars($row['tel']); ?></td>
       <td><?php echo htmlspecialchars($row['email']); ?></td>
     </tr>
     <?php endwhile; ?>
   </tbody>
 </table>
 <br/>
<?php
 echo "<h1> <a href='http://localhost/testsimplon/PROJET/%e2%80%8cindex.php '>Revenir au formulaire</a></h1>";
?>
    </body> 
</html>
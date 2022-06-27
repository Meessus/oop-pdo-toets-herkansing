<?php
require '../functions.php';

$db  = new Database();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BE PDO herkansing</title>
</head>
<body>
<h2> De vijf rijkste mensen ter wereld</h2>
<table>
    <thead>
    <tr>
    <th>Naam</th>
    <th>Vermogen</th>
    <th>Leeftijd</th>
    <th>Bedrijf</th>
    </tr>
  </thead>
  <tbody>
  <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
    <tr>
    <td><?php echo ($row['name']); ?></td>
    <td><?php echo ($row['networth']); ?></td>
    <td><?php echo ($row['age']); ?></td>
    <td><?php echo ($row['company']); ?></td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>



</body>
</html>
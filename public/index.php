<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=submissions_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement = $pdo->prepare('SELECT * FROM submissions');
$statement->execute();
$submissions = $statement->fetchAll(PDO::FETCH_ASSOC);

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Tech Task</title>
    <link rel="stylesheet" href="app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <h1>PHP Tech Task</h1>

    <p>
      <a href="create.php" type="button" class="btn  btn-success">Add</a>
    </p>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"></th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Create Date</th>
    </tr>
  </thead>
  <tbody>
<?php foreach  ($submissions as $i => $submission) { ?>
    <tr>
      <th scope="row"><?php echo $i + 1 ?></th>
      <td></td>
      <td><?php echo $submission['name'] ?></td>
      <td><?php echo $submission['email'] ?></td>
      <td><?php echo $submission['message'] ?></td>
      <td><?php echo $submission['create_date'] ?></td>
      <td></td>

    </tr>
<?php } ?>
  </tbody>
</table>

  </body>
</html>
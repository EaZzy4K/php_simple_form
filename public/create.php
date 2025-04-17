<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=submissions_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$date = date('Y-m-d H:i:s');

$errors = [];

$name = '';
$email = '';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    if (!$name) {
      $errors[] = 'Name is required';
    }

    if (!$email) {
      $errors[] = 'Email is required';
    }

    if (empty($errors)) {
      $stmt = $pdo->prepare("INSERT INTO submissions (name, email, message, create_date) VALUES (:name, :email, :message, :date)");
      $stmt->bindParam(':name', $name);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':message', $message);
      $stmt->bindParam(':date', $date);

      $stmt->execute();
      header('Location: index.php');
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PHP Tech Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body class="p-4">
    <h1>Simple Form</h1>

  <?php if(!empty($errors)): ?>
    <div class="alert alert-danger">
      <?php foreach ($errors as $error): ?>
        <div><?php echo $error ?></div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

    <form method="POST" action="">
      <div class="mb-3">
        <label class="form-label">Name</label><br>
        <input type="text" name="name" class="form-control" value="<?php echo $name ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email" value="<?php echo $email ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Message</label>
        <textarea class="form-control" name="message"><?php echo $message ?></textarea>
        </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </body>
</html>

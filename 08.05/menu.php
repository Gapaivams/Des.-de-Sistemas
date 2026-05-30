<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Login</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

  <link rel="stylesheet" href="css/style.css">

</head>



<body>

  <header class="container-fluid text-center header-border bg-secondary p-4">

    <?php echo"<h1>Menu - $pagename</h1>"; ?>

  </header>

  <nav class="link-unstyled nav-flex justify-content-center mt-4">

    <a class="nav-link nav-border-style" href="index.php">Home</a>

    <a class="nav-link nav-border-style" href="login.php">Login</a>

    <a class="nav-link nav-border-style" href="result.php">Resultado</a>

  </nav>



  <div class="container card p-4 mx-auto mt-5">

    <?php echo $body;?>

  </div>

</body>

</html>
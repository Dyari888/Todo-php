<?php
  $db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "todo";
	$db_conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
	if($db_conn->connect_error){
    echo "Connection Failed: ".$db_conn->connect_error;
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <!-- CSS only-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"crossorigin="anonymous">
  </head>
  <body>
  
  <nav class="navbar navber-expand-ig
  navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" link="./index.php">
        Todo
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
      <div class="collapse
      navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav
        me-auto mb-2 mb-1g-0">
          <li class="nav-item">
            <a class="nav-link" href="./index.php">
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./addTodo.php">
              Add Todo
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

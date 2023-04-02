<?php 
	require "./includ/head.php";
	if(isset($_POST["submit"])){
		$sql = "INSERT INTO post (title, text) VALUES ('{$_POST['title']}', '{$_POST['text']}')";
		if($db_conn-> query($sql) === TRUE){
			header("Location: ./index.php?msg=success");
		}else{
			echo "Error:".$sql."<br>".$db_conn->error;
		}
	}
?>

  <h1 class="m-4">Add Todo</h1>
    <form action="./addTodo.php" method="POST" class="m-4">
      <div class="form-group">
        <label for="title" class="form-label">Title :</label>
        <input type="text" name="title" class="form-control"
        id="title" placeholder="study" require>
      </div>
      <div class="form-group">
        <label for="text" class="form-label">Text :</label>
        <textarea class="form-control" name="text" id="text" cols="30" rows="10" require>
        </textarea>
      </div>
      <input type="submit" name="submit" class="btn btn-info mt-5" value="save">
    </form>


<?php require "./includ/footer.php" ?>
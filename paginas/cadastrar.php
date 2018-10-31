<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
 <form action="/action_page.php">
 	<div class="form-group">
    <label for=""> Nome:</label>
    <input type="text" name="nome" class="form-control" >
  </div>
  <div class="form-group">
    <label for="email">Email :</label>
    <input type="email" name="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for=""> Endereço:</label>
    <input type="text" name="endereco" class="form-control" >
  </div>
  <div class="form-group">
    <label for=""> telefone:</label>
    <input type="text" name="telefone" class="form-control" >
  </div>
  <div class="form-group">
    <label for="pwd">senha:</label>
    <input type="password" name="senha " class="form-control" id="pwd">
  </div>
 
  <button type="submit" class="btn btn-primary">cadastrar</button>
</form> 
</body>
</html>
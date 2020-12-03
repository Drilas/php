 <!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <style>
	.grid-container {
	  display: grid;
	  grid-template-columns: auto auto auto auto;
	  background-color: #2196F3;
	  padding: 10px;
	}
	.grid-item {
	  background-color: rgba(255, 255, 255, 0.8);
	  border: 1px solid rgba(0, 0, 0, 0.8);
	  padding: 20px;
	  font-size: 30px;
	  text-align: center;
	}
</style>
<?php include("data.php")?>
</head> 
<body>

<div class="grid-container">
  <div class="grid-item"><?php echo $szereplok[1]['nev']; echo $szereplok[1]['leiras'];  ?></div>
  <div class="grid-item">2</div>
  <div class="grid-item">3</div>  
  <div class="grid-item">4</div>  
</div>

</body>
</html> 
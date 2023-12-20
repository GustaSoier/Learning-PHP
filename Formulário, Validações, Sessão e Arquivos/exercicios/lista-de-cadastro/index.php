

<form action="" method="get">
<label >
   NOVO NOME:
   <br>
   <input type="text"name="nomes">
   <button>Adicionar</button>
</label>
</form>
<h1>Listas de nomes</h1>


<?php

$nomes = filter_input(INPUT_GET,'nomes');
if($nomes){
  $texto = file_get_contents('nomes.txt');
  $texto .= "\n$nomes";
  file_put_contents('nomes.txt',$texto);
 
}else{
   header('Location:');
}

$lendo = file_get_contents('nomes.txt');
$convert = explode("\n",$lendo);

foreach($convert as $todos){
   echo "<ul>";
   echo "<li>".$todos."</li>";
   echo "</ul>";
}
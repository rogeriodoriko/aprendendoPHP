<?php 
  $host = 'mysql:dbname=judaiada;host=localhost'; // atenção para o nome do banco de dados
  $user = 'root';
  $password = '';
try{
 $conn = new PDO($host,$user,$password);
}catch(Exception $exception){
    var_dump($exception);
}
   if($host==true){
       echo "ta funcionando";
   }
  /* $sql = "SELECT nome From usuario";

   $query = $conn->prepare($sql);
   $query->execute();
 */
    echo "<h1>Titulo</h1>";
    echo "<p>paragrafo</p>";
    echo "<a href:#>link</a>";
    $nome = "joão";
    $idade = 25;
    echo "<p>" . $nome . " possui " . $idade . " anos</p>";
    
    $nomes = ["joao", "carol", "guilherme"];
    echo "<ul>";
    foreach($nomes as $nome){
        echo "<li>$nome</li>";
    }
    echo "</ul>";

    $num = rand(0,10);
    echo "$num";
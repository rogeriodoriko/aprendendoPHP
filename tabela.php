<style>
    table {
      border-collapse: collapse;
      width: 50%;
      margin: auto;
    }
    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: center;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
<?php 
echo "<table>";
//linha 1
echo "<tr>";
for($i = 0; $i < 10; $i++){
 $num = rand(0,1000);
   if($num % 5 == 0 || $num % 3 == 0){
    do {
        $num = rand(0, 1000);
    } while ($num % 3 == 0 || $num % 5 == 0);

}
echo "<td>$num</td>";
}
echo "</tr>";

//linha 2
echo "<tr>";
for($i = 0; $i < 10; $i++){
$num = rand(0,1000)*2;
echo "<td>$num </td>";
}
echo "</tr>";

//linha 3
echo "<tr>";
for($i = 0; $i < 10; $i++){
 $num = rand(0,1000);
   if($num % 5 == 0 || $num % 3 == 0){
    do {
        $num = rand(0, 1000);
    } while ($num % 3 == 0 || $num % 5 == 0);

}
echo "<td>$num</td>";
}
echo "</tr>";

//linha 4
echo "<tr>";
for($i = 0; $i < 10; $i++){
$num = rand(0,1000)*2;
echo "<td>$num </td>";
}
echo "</tr>";

//linha 5
echo "<tr>";
for($i = 0; $i < 10; $i++){
 $num = rand(0,1000);
   if($num % 5 == 0 || $num % 3 == 0){
    do {
        $num = rand(0, 1000);
    } while ($num % 3 == 0 || $num % 5 == 0);

}
echo "<td>$num</td>";
}
echo "</tr>";

//linha 6
echo "<tr>";
for($i = 0; $i < 10; $i++){
$num = rand(0,1000)*2;
echo "<td>$num </td>";
}
echo "</tr>";

//linha 7
echo "<tr>";
for($i = 0; $i < 10; $i++){
 $num = rand(0,1000);
   if($num % 5 == 0 || $num % 3 == 0){
    do {
        $num = rand(0, 1000);
    } while ($num % 3 == 0 || $num % 5 == 0);

}
echo "<td>$num</td>";
}
echo "</tr>";

//linha 8
echo "<tr>";
for($i = 0; $i < 10; $i++){
$num = rand(0,1000)*2;
echo "<td>$num </td>";
}
echo "</tr>";

//linha 9
echo "<tr>";
for($i = 0; $i < 10; $i++){
 $num = rand(0,1000);
   if($num % 5 == 0 || $num % 3 == 0){
    do {
        $num = rand(0, 1000);
    } while ($num % 3 == 0 || $num % 5 == 0);

}
echo "<td>$num</td>";
}
echo "</tr>";

//linha 10
echo "<tr>";
for($i = 0; $i < 10; $i++){
$num = rand(0,1000)*2;
echo "<td>$num </td>";
}
echo "</tr>";

echo "<table>";
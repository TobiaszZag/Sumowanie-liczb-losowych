<!DOCTYPE html>
<html lang="Pl-pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumowanie-liczb-losowych</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
<?php

$wynik1 = 0;
$wynik2 = 0;


if (isset($_POST['Send'])) {
  $a = $_POST["Pole_0"];
  $b = $_POST["Pole_1"];
  $c = $_POST["Pole_2"];


}


for($i=0; $i<$c; $i++) 
{
   
 $tab[$i] = rand($a,$b);

 
if($tab[$i]%2==0 ){
   
  echo '<span style="color: blue;">' . $tab[$i]."<br>".  "</span>";
  $wynik1 += $tab[$i];
echo "<span style='color: green;'> " ."Wynik sumy wynosi"." ". $wynik1."<br>". "</span>";
}

else
{
    echo '<span style="color: red;">' . $tab[$i]."<br>". "</span>";  
    $wynik2 += $tab[$i];
    echo '<span style="color: orange;">' ."Wynik sumy wynosi"." ".$wynik2."<br>". "</span>";
}

}








?>
<form method = "Post">
<div class="mb-1">
    <label  class="form-label">Przedział od</label>
    <input type="number" class="form-control" name="Pole_0">
</div>


<div class="mb-1">
    <label  class="form-label">Przedział do </label>
    <input type="number" class="form-control" name="Pole_1">
    

</div>
    <label  class="form-label">Ilość liczb</label>
    <input type="number" class="form-control" name="Pole_2">
    <div class="mb-1">

    <button type="submit" class="btn btn-primary" name="Send">Send</button>
  </div>
</form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>

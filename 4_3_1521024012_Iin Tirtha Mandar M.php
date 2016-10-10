<!DOCTYPE html>
<html>
<head>
	<title>Studi kasus 4_3 iin </title>

</head>
<body>

	<?php
  $d=5;
  echo "PIRAMIDA SETENGAH KANAN";
  echo "<br>";
    for ($a= 1;$a<=$d;$a++){
      echo "<br>";
	   	for ($b=1;$b<=$a;$b++){
       echo "*";
      }
    }

echo "<br>";
echo "<br>";
echo "PIRAMIDA SETENGAH KIRI";
echo "<br>";
  for ($a= 1;$a<=$d;$a++){
      echo "<br>";
    for ($b=$a;$b<=$d-1;$b++){
    echo "&nbsp ";  
    }
      for ($c=$d+1-$a;$c<=$d;$c++){
      echo "*";
      }
  }

echo "<br>";
echo "<br>";
echo "PIRAMIDA PENUH";
echo "<br>";
echo "<br>";
for ($a= 1;$a<=$d;$a++){
    
  for ($b=$a;$b<=$d-1;$b++){
     echo "&nbsp ";
  }
    for ($c=$d+1-$a;$c<=$d+$a-1;$c++){
      echo "*";
    }
echo "<br>";
}

  ?>
</body>
</html>
<?php
include ("./autoloader.php");

$maVoiture = new Voiture('BMW', 'JSP', 12, 233, 333);
$maVoiture->setMarque("BMW");
echo $maVoiture->getMarque() . "<br>";

$monAvion = new Avion('jsp','jsp',10,0,0,0,1000);


echo $monAvion->getAltitudeMax() . "<br>";
echo $monAvion->getKilometrage() . "<br>";

echo $monAvion -> deplace(). " à une altitude de " . $monAvion -> getAltitudeMax() . "<br>";

$monAvion -> deplace(); echo ", "; $monAvion -> accelere(); echo ", "; $monAvion -> freine(); echo ", "; $monAvion -> bruit();





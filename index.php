<h1> Mon Titre1 </h1> 
<?php
echo "<h2> Mon Petit Titre</h2>";
print_r("<h2> Mon Deuxieme Titre</h2>");
/*Je suis un commentaire

*/
$toto="Toto";
$nb1="4";
$concat=$toto.$nb1;
echo '</br>';
echo '</br>';
echo $nb1;
$prenom="Guillaume";
$nom="Harvey";
$age="40 ans";
$ville="Chicoutimi";
$pays="Canada";
echo'<ul>';
echo'<li>';
print_r("Prénom :".$prenom);
echo'</li>';
echo'<li>';
print_r("Nom :".$nom);
echo'</li>';
echo'<li>';
print_r("Age: ".$age);
echo'</li>';
echo'<li>';
print_r("Ville de naissance : ".$ville);
echo'</li>';
echo'<li>';
print_r("Pays de Naissance: ".$pays);
echo'</li>';
echo'</ul>';
?> 


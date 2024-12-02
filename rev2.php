<?php
$etd = array(
  "etd1"=>array("nom"=>"erragragui" , "prenom"=>"meryem" , "matricule"=>"jgt15" , "note"=>19),
"etd2"=>array("nom"=>"tazi" , "prenom"=>"omar" , "matricule"=>"uty89" ,"note"=>18 ),
"etd3"=>array("nom"=>"bouya" , "prenom"=>"reda" , "matricule"=>"lop05jkl9" , "note"=>17)
);
echo "<table border=1>";
echo "<tr><th>Nom</th><th>Prenom</th><th>Matricule</th></tr>";
foreach($etd as $k=>$v)
{
    echo "<tr>";
    echo "<td>".$v["nom"]."</td>";
    echo "<td>".$v["prenom"]."</td>";
    echo "<td>".$v["matricule"]."</td>";
    echo "</tr>";
}
echo "</table>";
echo "<hr>";
echo "<table border=1>";
echo "<tr><th>Nom</th><th>Prenom</th><th>Matricule</th><th>Note</th></tr>";
foreach($etd as $k=>$v)
{
    echo "<tr>";
    echo "<td>".$v["nom"]."</td>";
    echo "<td>".$v["prenom"]."</td>";
    echo "<td>".$v["matricule"]."</td>";
    echo "<td>".$v["note"]."</td>";
    echo "</tr>";
}
echo "</table>";
echo "<hr>";
function modifier(&$etd){
    foreach($etd as $k=>&$v){
        if($v["nom"] == "erragragui")
        {
            $v["note"] = 20 ;
        }
}
}
modifier($etd);
echo "<h3>Apres modification de la note de meryem :</h3>";
echo "<table border=1>";
echo "<tr><th>Nom</th><th>Prenom</th><th>Matricule</th><th>Note</th></tr>";
foreach($etd as $k=>$v)
{
    echo "<tr>";
    echo "<td>".$v["nom"]."</td>";
    echo "<td>".$v["prenom"]."</td>";
    echo "<td>".$v["matricule"]."</td>";
    echo "<td>".$v["note"]."</td>";
    echo "</tr>";
}
echo "</table>";
echo "<hr>";
$p = [
    ["produit"=>"zen" , "prix"=>45],
    ["produit"=>"agrado" , "prix"=>75],
    ["produit"=>"snonas" , "prix"=>20]
];
echo "<table border=1>";
echo "<tr><th>Produit</th><th>Prix</th></tr>";
foreach($p as $v){
    echo "<tr>";
    echo "<td>".$v["produit"]."</td>";
    echo "<td>".$v["prix"]."</td>";
    echo "</tr>";
}
echo "</table>";
echo "<hr>";
echo "<table border=1>";
echo "<tr><th>Nom</th><th>Prenom</th><th>Matricule</th></tr>";
foreach($etd as $k=>$v)
{
    echo "<tr>";
    echo "<td>".$v["nom"]."</td>";
    echo "<td>".$v["prenom"]."</td>";
    echo "<td>".$v["matricule"]."</td>";
    echo "</tr>";
}
echo "</table>";
echo "<br>";
function score($etd){
    $s =0;
    $m = 0;
    foreach($etd as $v){
        $s = $s + $v["note"];
    }
    echo "la moyenne est :" .$m = number_format(($s / 3),2) ;
}
score($etd);
echo "<hr>";
$ville = [
    ["rabat" => 50000],
    ["casablanca" => 200000],
    ["agadir" => 30000]
];
echo "<table border=1>";
echo "<tr><th>Ville</th><th>Population</th></tr>";
foreach($ville as $v){
    foreach ($v as $villeName => $population) {
        echo "<tr>";
        echo "<td>" . $villeName . "</td>";
        echo "<td>" . $population . "</td>";
        echo "</tr>";
}
    }
echo "</table>";
usort($ville, function ($a, $b) {
    return reset($b) - reset($a); 
});
echo "<hr>";
echo "<h3>Apres le tri :</h3>";
echo "<table border=1>";
echo "<tr><th>Ville</th><th>Population</th></tr>";
foreach($ville as $v){
    foreach ($v as $villeName => $population) {
        echo "<tr>";
        echo "<td>" . $villeName . "</td>";
        echo "<td>" . $population . "</td>";
        echo "</tr>";
}  
    }
echo "</table>";
echo "<hr>";
if(isset($_POST["envoyer"])){
    if($_POST["age"] < 0 || is_numeric(!$_POST["age"])){
        echo "Erreur ! il faut saisir un nombre positif .";
   }else{
    echo "Bienvenue,"." ".$_POST["nom"]." "."vous avez"." ".$_POST["age"]." "."ans .";
   }
}
echo "<hr>";
if(isset($_POST["env"])){
    $c = $_POST["color"];
        echo "Votre couleur preferee est :".implode(",",$c);
}
echo "<hr>";
if(isset($_GET["en"])){
    $a = $_GET["nbr1"];
    $b = $_GET["nbr2"];
    $s =  $a + $b;
    echo "la somme de ces deux nombres est :" .$s;
}
if(isset($_POST["e"])){
        if($_POST["choix"] === "ad")
    {
        echo "<h3>Bienvenu,administrateur !</h3>";
    }
    else
    {
        echo "<h3>Bienvenu,utilisateur simple.</h3> ";
    }
    }

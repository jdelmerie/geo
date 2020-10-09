<?
$indexPays = $_GET['pays'] ?? '';

if (!empty($indexPays)) {
    if (array_key_exists($indexPays, $liste_pays)) {
        $pays = $liste_pays[$indexPays];
        $paysNom = ucfirst($pays['nom']);?>

<div class="container ">
    <div class="text-center m-4 test">
        <h3><?=$paysNom?></h3>
        <img src="img/<?=$pays['drapeau']?>" width="50px">
    </div>
  

    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-md-4 test">
            <img src="img/<?=$pays['image']?>" width="300px">
        </div>

        <div class="col-md-4 test">
            <table border="2">
                <tr>
                    <td><strong>Climat</strong></td>
                    <td><?=ucfirst($pays['climat'])?></td>
                </tr>
                <tr>
                    <td><strong>Continent</strong></td>
                    <td><?=ucfirst($pays['continent'])?></td>
                </tr>
                <tr>
                    <td><strong>Altitude Minimum</strong></td>
                    <td><?=$pays['alt_min']?> m</td>
                </tr>
                <tr>
                    <td><strong>Altitude Maximum</strong></td>
                    <td><?=$pays['alt_max']?> m</td>
                </tr>
            </table>
        </div>

        <div class="col-md-4 test">
        <h5>Pays Frontalier</h5>
                <ul>
                    <?if (count($pays['voisins']) > 0) {
    foreach ($pays['voisins'] as $voisin => $distance) {
        echo "<li>$voisin : $distance km</li>";
    }
} else {
    echo "<li>Ce pays n'a pas de voisin</li>";
}?>
                </ul>  
        </div>
  
            </div>
        </div>
    </div>
</div>        
    <?} else {
        exit("Ce pays n'existe pas.");
    }
}
?>




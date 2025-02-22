<?php
    function ConnectionToggle($isConnection) {
        printf('<div class="toggle">
                    <button class="left %s" onclick="window.location.href=\'connection.php\'">Connection</button>
                    <button class="right %s" onclick="window.location.href=\'inscription.php\'">Inscription</button>
                </div>',
            $isConnection ? 'isSelect' : '',
            !$isConnection ? 'isSelect' : ''
        );
    }
?>

<!-- MESSAGE À L'ATTENTION DE JOSSUA, IL VA FALLOIR RENOMMER CE COMPOSANT PARCE QUE
  "CONNECTION" (d'ailleurs conneXion !) PEUT ÊTRE CONFONDUE AVEC LA CONNEXION À LA BASE DE DONNÉES ! -->

<!-- PAS DE PRINTF ! 
 
    WHY ?

    - printf est principalement conçu pour formater des chaînes simples. Pour du HTML, cela rend le code plus difficile à lire car il faut gérer les échappements et les quotes.
    - printf est plus difficile à déboguer car il est difficile de voir les valeurs des variables dans le code.
    - printf est plus sujet aux attaques XSS car il ne gère pas les échappements de manière automatique.
-->


<!-- ex de truc bien : -->

<?php
function toggleAuth($isConnexion) {
    $connexionActive = $isConnexion ? 'active' : '';
    $inscriptionActive = !$isConnexion ? 'active' : '';
    
    echo "
    <div class='toggle'>
        <a href='connexion.php' class='btn $connexionActive'>Connexion</a>
        <a href='inscription.php' class='btn $inscriptionActive'>Inscription</a>
    </div>
    ";
}
?>
<?php
    use MemoryKermit\Entity\Image;
    use MemoryKermit\Entity\Joueur;
    use MemoryKermit\Entity\Partie;
    require_once(dirname(__FILE__).'/global.php');
    $daoImage = $entityManager->getRepository(Image::class);
    $tabImage = $daoImage->findAll();
    $daoJoueur = $entityManager->getRepository(Joueur::class);
    $tabJoueur = $daoJoueur->findAll();
    $daoPartie = $entityManager->getRepository(Partie::class);
    $tabPartie = $daoPartie->findAll();
    $nbI = count($tabImage);
    $nbP = count($tabPartie);
    $y = 0;
    for($i=0;$i<$nbI-1;$i++){
        for($x=0;$x<2;$x++){
            $tabmemory[$y] = $tabImage[$i];
            $y++;
        }
    }
    shuffle($tabmemory);
    echo '<head>'
    . '<link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAArnpEADARBACGFdACARAIAYkypACeqowAkrKkAQHVfABlwYwAosKwAJW5dAHQ5BgAll48AcFKyAC62tQBEw9IAOImJACN3eAB+QwAAMpGYAIFGAAAyvcEAJ6SkAC7CxwAiinsAPpWSAIZMAAALBAQAik8AAAIQFgCOUgAAj1IAACyQhACQVQAAdjsEAB1QTQBmSRMA3t7GAJJYAACTWAAAlFgAAJVYAACWWwAAKZ6TACt4agAqenAAml4AACB0lACbXgAAJ315ADIckgAXSUIANHx/AB50aACPUgEAkVUBAHc9AgCSWAEAlVgBAELH1wAkenEAKXRxADG9wwAwIZAANJ+XABAqJgApi4AALLCmAIVYAgAsjX0AEi8sACmytQAwQDoAm6eSAC+0sgAvtMQAHYZ7AH1IAACARQAANJ2SAIVIAAAxnp4AhUsAAIZOAAAnin4AI4yEACRlYQCJTgAAI2thAEDAxAAqsLAAjVEAAG5hMAAbeG0AkFQAAJBVAwCQVwAALrSzAJJXAAAnHIwAKbi/ACh3agCWWgAAGYN8ABoSZgCYXQAAmV0AADGTmQAreXAALYBzACenqABwu74AM6mlACFzaABzOwgAkFQBAETAzgAxj4UAQ8LUABguNAAieG4AlFcBACOelwDAsJwAlloBAHpFAgArnZQAK3prABmKgABIyN0AKIF3ACOqqQAeFRcAMJyjAFyfogAkrK8A7OXWADWhqQAmsrgAjFIFAEOanQAqs7IAPJ+sAJhnMQAgmJgAkFQCACxuYwAod2wAK3lpADKPmAAnfHIAe2g1AIRKAAArhXsAHJOKACitqgBNr7gAi1AAACZAPgCRVgAANLKnAJJWAAC+sJUAj1oDAObYwwAndWcAejwEAJNZAAArGIwAI3ptAJRZAACVWQAAl1wAADG3vwCZXAAAmlwAAJlfAAApoZkAKIFwADQblQAxmaUAf1MKAIpNAQAibF8AMId5AI9TAQAwrq4AIk8/AEu5xQCRUwEANot8ACaVkQCRVgEAklYBADWpugAomJEAOYx/ACWflAAovcAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQXJlk2xxAiCAegkOxSK7QwodlDUIqZYYfnAWWiumXYYkIyyCPJmOQAwzm41Gvm4LErJ3GZ54tLwAdAZMdmF9OE5NLVaVjIWJnA/EO4dQmAOYUrZIEBOSMWtRgX9LbxoUV1cci1gRPzKzL5tEHldTmFtbHwdCaAEEDajCxr0cV1Jec3OlPTRFbZBHYxe1Np0cnyFgt7h1VZpKZK2gl5G5W3k6q1xUZ7/Dg4o+FV83N15mq6ure6KxBbpZJaOrYmKffKurq4+EpE9JG4irqyYmJ6spq6sosK4uLjCwq6unpyYoKSirqyqsaq6vKqvAwSYpqig5J6soZqywaaynn5/AoQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=" rel="icon" type="image/x-icon" />'
    . '<title>Memory Kermit</title>'
    . '<style>'
    . 'h1,h2,h3,p{color:white;}'
    . 'html{-webkit-user-select: none; -khtml-user-select: none;-moz-user-select: none; -o-user-select: none; user-select: none;}'
    . '</style>'
    . '</head>';
    echo '<html style="margin:0;padding:0;background: url(https://zupimages.net/up/18/02/9oiv.jpg) no-repeat center fixed; -webkit-background-size: cover; background-size: cover;">'
    . '<form action="Jeu.php" method="post" id="formpartie">';
    if(!empty($_GET['Joueur'])){
    $Jr = $_GET['Joueur'];
    echo '<input type="text" name="idJr" value="'.$Jr.'" style="visibility: hidden; position: absolute">'
    .'<h3 style="margin: 5px;">Joueur choisi : '.$tabJoueur[$Jr-1]->getPseudo().'</h3>';
    }
    echo '<table>'
    . '<tr>'
    . '<td style="width: 45%; height: 70%;">';
    for($i = 0;$i<$y;$i++){
        echo '<img class="imageMemo" name="imageMemo" id="img'.$i.'" style="width: 90; margin: 4px;"src="'.$tabImage[14]->getLienImage().'"  onclick="showImage('.$tabmemory[$i]->getIdImage().','.$i.');countcoups()">';
    }
    echo '</td>'
    . '<td style ="vertical-align: initial;">'
    . '<h2 style="text-align: center;">Tableau des scores</h2>';
    for($j=0;$j<$nbP;$j++){
        $x = $tabPartie[$j]->getIdJoueur();
        echo '<p style="text-align: center;"> - Joueur : '.$tabJoueur[$x-1]->getPseudo().', Partie : '.$tabPartie[$j]->getIdPartie().', Nombre de coups : '.$tabPartie[$j]->getNbCoups().'</p>';
    }
    echo '</td>'
    . '</tr>'
    . '<tr>'
    . '<td>'
    . '<p style="margin: 3px;">Nombre de coups : <input id="nombrecoups" type="number" name="scorenbcoups" min="0" value="0" readonly></td>'
    . '</form>'
    . '</tr>'
    . '</table>'
    . '</html>';
    
?>
<script>
    
    var i = 0;
    var z = 0;
    var coups = 0;
    var prems;
    var idx;
    
    function showImage(c,x){
        switch(c){
            case 1:
                document.getElementById('img'+x).src = '<?php echo $tabImage[0]->getLienImage()?>';
                break; 
            case 2:
                document.getElementById('img'+x).src = '<?php echo $tabImage[1]->getLienImage()?>';
                break; 
            case 3:
                document.getElementById('img'+x).src = '<?php echo $tabImage[2]->getLienImage()?>';
                break; 
            case 4:
                document.getElementById('img'+x).src = '<?php echo $tabImage[3]->getLienImage()?>';
                break; 
            case 5:
                document.getElementById('img'+x).src = '<?php echo $tabImage[4]->getLienImage()?>';
                break; 
            case 6:
                document.getElementById('img'+x).src = '<?php echo $tabImage[5]->getLienImage()?>';
                break; 
            case 7:
                document.getElementById('img'+x).src = '<?php echo $tabImage[6]->getLienImage()?>';
                break; 
            case 8:
                document.getElementById('img'+x).src = '<?php echo $tabImage[7]->getLienImage()?>';
                break; 
            case 9:
                document.getElementById('img'+x).src = '<?php echo $tabImage[8]->getLienImage()?>';
                break; 
            case 10:
                document.getElementById('img'+x).src = '<?php echo $tabImage[9]->getLienImage()?>';
                break; 
            case 11:
                document.getElementById('img'+x).src = '<?php echo $tabImage[10]->getLienImage()?>';
                break; 
            case 12:
                document.getElementById('img'+x).src = '<?php echo $tabImage[11]->getLienImage()?>';
                break; 
            case 13:
                document.getElementById('img'+x).src = '<?php echo $tabImage[12]->getLienImage()?>';
                break; 
            case 14:
                document.getElementById('img'+x).src = '<?php echo $tabImage[13]->getLienImage()?>';
                break;
        }
        verifcores(c,x);
    }
    
    function verifcores(deux,id){
        if(prems == null){
        prems = deux;
        idx = id;
        tps = 1;
        document.getElementById('img'+idx).style = "width: 90; margin: 4px; pointer-events: none;";
        }
        else{
            if(prems == deux){
                document.getElementById('img'+id).onclick = null;
                document.getElementById('img'+idx).onclick = null;
                setTimeout(function(){
                },100);
                prems = null;
                i = -1;
                z++;
            }
            else{
                document.getElementById('img'+id).style = "width: 90; margin: 4px; pointer-events: none;";
                action(id,idx);
                prems = null;
            }
        }
        if(z == 14){
            setTimeout(function(){
            alert("fin de partie");
            },100);
            termine();
        }
    }
 
    
    function countcoups(){
    i++;
        if(i == 2){
           coups++;
           document.getElementById('nombrecoups').value = coups;
           i = 0;
        }
    }
    
    function action(id,idx){
       setTimeout(function(){
            document.getElementById('img'+idx).src = '<?php echo $tabImage[14]->getLienImage()?>';
            document.getElementById('img'+id).src = '<?php echo $tabImage[14]->getLienImage()?>';
       },500);
       document.getElementById('img'+idx).style = "width: 90; margin: 4px;";
       document.getElementById('img'+id).style = "width: 90; margin: 4px;";
    }
    function termine(){
      document.getElementById('formpartie').submit();
    }
    function retour(){
        location.href = "index.php";
    }
</script>

<?php

if(!empty($_POST['scorenbcoups'])){
                $Jrf = $_POST['idJr'];
                $nbP = count($tabPartie)+1;
                $nbcoups = $_POST['scorenbcoups'];
                $Partie = new Partie();
                $Partie->setIdPartie($nbP);
                $Partie->setNbcoups($nbcoups);
                $Partie->setIdJoueur($Jrf);
                $entityManager->persist($Partie);
                $entityManager->flush(); 
                echo '<script>retour()</script>';
    }
<!DOCTYPE html>
<?php 
    use MemoryKermit\Entity\Joueur;
    require_once(dirname(__FILE__).'/global.php');
    $daoJoueur = $entityManager->getRepository(Joueur::class);
    $tabJoueur = $daoJoueur->findAll();    
?>
<html style="margin:0;padding:0;background: url(https://zupimages.net/up/18/02/9oiv.jpg) no-repeat center fixed; -webkit-background-size: cover; background-size: cover;">
    <head>
        <title>Memory Kermit</title>
        <link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAArnpEADARBACGFdACARAIAYkypACeqowAkrKkAQHVfABlwYwAosKwAJW5dAHQ5BgAll48AcFKyAC62tQBEw9IAOImJACN3eAB+QwAAMpGYAIFGAAAyvcEAJ6SkAC7CxwAiinsAPpWSAIZMAAALBAQAik8AAAIQFgCOUgAAj1IAACyQhACQVQAAdjsEAB1QTQBmSRMA3t7GAJJYAACTWAAAlFgAAJVYAACWWwAAKZ6TACt4agAqenAAml4AACB0lACbXgAAJ315ADIckgAXSUIANHx/AB50aACPUgEAkVUBAHc9AgCSWAEAlVgBAELH1wAkenEAKXRxADG9wwAwIZAANJ+XABAqJgApi4AALLCmAIVYAgAsjX0AEi8sACmytQAwQDoAm6eSAC+0sgAvtMQAHYZ7AH1IAACARQAANJ2SAIVIAAAxnp4AhUsAAIZOAAAnin4AI4yEACRlYQCJTgAAI2thAEDAxAAqsLAAjVEAAG5hMAAbeG0AkFQAAJBVAwCQVwAALrSzAJJXAAAnHIwAKbi/ACh3agCWWgAAGYN8ABoSZgCYXQAAmV0AADGTmQAreXAALYBzACenqABwu74AM6mlACFzaABzOwgAkFQBAETAzgAxj4UAQ8LUABguNAAieG4AlFcBACOelwDAsJwAlloBAHpFAgArnZQAK3prABmKgABIyN0AKIF3ACOqqQAeFRcAMJyjAFyfogAkrK8A7OXWADWhqQAmsrgAjFIFAEOanQAqs7IAPJ+sAJhnMQAgmJgAkFQCACxuYwAod2wAK3lpADKPmAAnfHIAe2g1AIRKAAArhXsAHJOKACitqgBNr7gAi1AAACZAPgCRVgAANLKnAJJWAAC+sJUAj1oDAObYwwAndWcAejwEAJNZAAArGIwAI3ptAJRZAACVWQAAl1wAADG3vwCZXAAAmlwAAJlfAAApoZkAKIFwADQblQAxmaUAf1MKAIpNAQAibF8AMId5AI9TAQAwrq4AIk8/AEu5xQCRUwEANot8ACaVkQCRVgEAklYBADWpugAomJEAOYx/ACWflAAovcAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQXJlk2xxAiCAegkOxSK7QwodlDUIqZYYfnAWWiumXYYkIyyCPJmOQAwzm41Gvm4LErJ3GZ54tLwAdAZMdmF9OE5NLVaVjIWJnA/EO4dQmAOYUrZIEBOSMWtRgX9LbxoUV1cci1gRPzKzL5tEHldTmFtbHwdCaAEEDajCxr0cV1Jec3OlPTRFbZBHYxe1Np0cnyFgt7h1VZpKZK2gl5G5W3k6q1xUZ7/Dg4o+FV83N15mq6ure6KxBbpZJaOrYmKffKurq4+EpE9JG4irqyYmJ6spq6sosK4uLjCwq6unpyYoKSirqyqsaq6vKqvAwSYpqig5J6soZqywaaynn5/AoQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=" rel="icon" type="image/x-icon" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>h1,h3{color:white;} input{height: 30px; border: 0px; border-radius: 10px; margin-bottom: 5px;} 
               select{width: 165px;border: 0px; border-radius: 10px; height: 30px; margin-bottom: 5px;}
               button{border: 0px; border-radius: 10px; background: #ffffff; height:30px; width: 165px; text-decoration: none;}
               button:hover {background: #2ead15;background-image: -webkit-linear-gradient(top, #2ead15, #2ccf57);background-image: -o-linear-gradient(top, #2ead15, #2ccf57);background-image: linear-gradient(to bottom, #2ead15, #2ccf57);text-decoration: none;}
               html{-webkit-user-select: none; -khtml-user-select: none;-moz-user-select: none; -o-user-select: none; user-select: none;}
               .inptpseudo{padding-left: 4px; width: 161px;}
        </style>
    </head>
    <body>
        <div>
            <h1>Jeu de Memory (garanti sans AJAX)</h1>
            <h3>Nouveau joueur ?</h3>
            <form action="index.php" method="post" id="formJoueur">
                <input type="text" class="inptpseudo" name="newPseudo" placeholder="Pseudo"></br>
            </form>
            <button type="submit" form="formJoueur" value="Submit" id="addJoueur">Ajouter</button>
            <h3>Choisir un joueur : </h3>
            <select id="slctJr">
            <?php
                foreach($tabJoueur as $Joueur)
                {
                    echo '<option value='.$Joueur->getIdJoueur().'>'.$Joueur->getPseudo().'</option>';
                }
            ?> 
            </select></br>
            <a href="javascript:openPage()"><button>Start</button></a>
        </div>
    </body>
</html>
<?php
if(!empty($_POST['newPseudo'])){
        $nbJ = count($tabJoueur)+1;
        $pseudo = $_POST['newPseudo'];
        $Joueur = new Joueur();
        $Joueur->setIdJoueur($nbJ);
        $Joueur->setPseudo($pseudo);
        $entityManager->persist($Joueur);
        $entityManager->flush(); 
        header('Refresh: 1; url=index.php');
    }
?>
<script language="javascript" type="text/javascript">
openPage = function() {
var scrt_var = document.getElementById('slctJr').value; 
location.href = "Jeu.php?Joueur="+scrt_var;
}
</script>
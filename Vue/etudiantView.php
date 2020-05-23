<?php

function displayEtudiantAvecPage($nom,$prenom,$spe,$picture,$page){
    $contenu = '<div class="card mr-5 text-center">';
    $contenu = $contenu.'<form action="'.$page.'">';
    $contenu= $contenu.'<img class="card-img-top " src="'.$picture.'" alt="Card image">';
	$contenu= $contenu.'<div class="card-body">';
	$contenu= $contenu.'<h4 class="card-title">'.$nom.' '.$prenom.'</h4>';
	$contenu= $contenu.'<p class="card-text">'.$spe.'</p>';
    $contenu= $contenu.'<button type=submit class="btn myBtn">Page personnelle</button> </div> </form></div>';
    echo $contenu;
}
function displayEtudiantClassic($nom,$prenom,$spe,$picture){
    $contenu = '<div class="card mr-5 text-center">';
    $contenu= $contenu.'<img class="card-img-top " src="'.$picture.'" alt="Card image">';
	$contenu= $contenu.'<div class="card-body">';
	$contenu= $contenu.'<h4 class="card-title">'.$nom.' '.$prenom.'</h4>';
	$contenu= $contenu.'<p class="card-text">'.$spe.'</p>';
    $contenu= $contenu.'</div> </div>';
    echo $contenu;
}

?>
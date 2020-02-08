<?php
  require("GestionBD.php");
  $tab_GestionBD[]=null;
  $rep = 0;


  function add_postulant()
 {
    global $tab_GestionBD;
    global $rep;
    while($rep==0)
    {

      $code =readline("code du postulant : ");
      $nom =readline("nom du postulant :");
      $prenom =readline("prénom du postulant : ");
	  $sexe =readline("sexe du postulant : ");
	  $nationalité =readline("nationalité du postulant : ");
      $tel =readline("tel du postulant : ");
	  $date_naissance =readline("date_naissance du postulant : ");
	  $email =readline("email du postulant : ");
      $Typeper =readline("Typeper du postulant : ");
      
      $p =new postulant($code,$nom,$prénom,$sexe,$tel,$date_naissance,$discipline);
    
      $postulant=[
        "code"=>$p->getcode(),
        "nom"=>$p->getnom(),
        "prénom"=>$p->getprénom(),
		"sexe"=>$p->getsexe(),
		"nationalité "=>$p->getnationalité (),
        "tel"=>$p->gettel(),
		"datenais"=>$p->getdate_naissance(),
		"email"=>$p->getemail(),
        "discipline"=>$p->getdiscipline()];

        $tab_GestionBD[]=$postulant;
        $rep = readline("0 pour continuer, 1 pour teminer : ");
    }
  }
  add_postulant();
  foreach($tab_GestionBD as $p)
  {
  echo($p['nom']."\n");
  }

?>
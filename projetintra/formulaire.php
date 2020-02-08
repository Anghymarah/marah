
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<ul class="navbar navbar-dark bg-dark">
  <li class="nav-item"> <a class="nav-link " href="GestionBD.php">Liste</a> </li>
  <li class="nav-item"> <a class="nav-link" href="formulaire.php">Nouveau Menbres</a> </li>
  
</ul>
<br>
<form action="personne.php" method="post" >
        <fieldset>
            <legend><h2>Gestion Ressources humaine ESIH</h2></legend>
            <table>
                <tr>
                    <td>Code</td>
                    <td>
                        <input type="text" class="form-control col-sm-14" name="code" id="">
                    </td>
                </tr>
                <tr>
                    <td>Nom</td>
                    <td><input type="text" class="form-control col-sm-14" name="nom" id=""></td>
                </tr>
                <tr>
                    <td>Prénom</td>
                    <td>
                        <input type="text" class="form-control col-sm-14" name="prenom" id="">
                    </td>
                </tr>
                <tr>
                    <td>Sexe</td>
                    <td>
                        <input type="radio" name="sexe" id="" value="Masculin">
                        <label for="">Masculin</label>
                        <input type="radio" name="sexe" id="" value="Feminin">
                        <label for="">Feminin</label>
                    </td>
                </tr>
                <tr>
                    <td>Date de Naissance</td>
                    <td>
                        <input type="date" name="datenaiss" id="">
                    </td>
                </tr>
                <tr>
                    <td>Nationalité</td>
                    <td>
                    <select name="nationalite" id="">
                    
                            <option value="Francais">Francais</option>
                            <option value="Canadien">Canadien</option>
                            <option value="Haitien">Haitien</option>
                            <option value="Brésilien">Brésilien</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tel</td>
                    <td>
                        <input type="tel" class="form-control col-sm-11" name="tel" id="">
                    </td>
                    <tr>
                      <td>Email</td>
                    <td> 
                          <input type="email" class="form-control col-sm-14" name="email" id="">
                    </td>
                    <br>
                <tr>
                    <td>Type-personne</td>
                    <td>
                        <select name="typers" id="">
                        <option value=""></option>
                            <option value="Etudiant">Etudiant</option>
                            <option value="Professeur">Professeur</option>
                            <option value="Personne">Personne</option>
                            <option value="Administratif">Administratif</option>
                        </select>
                    </td>
                </tr>
            </table>
            <br>
            <input type="submit" class="btn btn-primary" value="Valider" name="valider" >
        
        </fieldset>
        
    </form>
    <style>
        body
{
    background-image:url(logo_esih.png) ;
    background-repeat: no-repeat;
    background-attachment:fixed;
    background-size: 99% 100%;
}
</style>
</body>
</html>
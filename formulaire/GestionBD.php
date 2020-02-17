<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Liste ESIH</title>
    <style type="text/css">
    .srch
    {
      padding-left: 1000px;
    }
    </style>

</head>
<body>
<ul class="navbar navbar-dark bg-dark">
  <li class="nav-item"> <a class="nav-link " href="GestionBD.php">Liste</a> </li>
  <li class="nav-item"> <a class="nav-link" href="formulaire.php">Nouveau Menbres</a> </li>
  
</ul>
<br>
<h2>Liste </h2>
      <div class="srch">
           <form  class="navrbar-form"  method="post">
               <input Type="text" name="searching" placeholder="search Personnes...">
               <button class="" type="submit" name="enter" >  search </button>
           </form>
      </div>
   <br>


<?php
    
		if(isset($_POST['enter']))
		{
			$q=mysqli_query($connect,"SELECT * from personne where `Nom` like '%$_POST[searching]%' ");

			if(mysqli_num_rows($q)==0)
			{
				echo "Sorry! No one found. Try searching again.";
			}
			else
			{
		echo "<table class='table table-striped table-bordered  table-hover' >";
            echo "<thead>";
            echo "<tr class='table-active'>";
				//Table header
				echo "<th>"; echo "ID";	echo "</th>";
				echo "<th>"; echo "Nom";  echo "</th>";
				echo "<th>"; echo "Prenom";  echo "</th>";
				echo "<th>"; echo "Sexe";  echo "</th>";
				echo "<th>"; echo "Nationalite";  echo "</th>";
				echo "<th>"; echo "DateNaissance";  echo "</th>";
                echo "<th>"; echo "Telephone";  echo "</th>";
                echo "<th>"; echo "Email";  echo "</th>";
                echo "<th>"; echo "TypePersonne";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
			{
            echo "<tr class='table-success'>";
        echo "<td>"; echo $row['Code']; echo "</td>";
        echo "<td>"; echo $row['Nom']; echo "</td>";
        echo "<td>"; echo $row['Prenom']; echo "</td>";
            echo "<td>"; echo $row['Sexe']; echo "</td>";
            echo "<td>"; echo $row['Nationalite']; echo "</td>";
        echo "<td>"; echo $row['DateNaissance']; echo "</td>";
        echo "<td>"; echo $row['Telephone']; echo "</td>";
            echo "<td>"; echo $row['Email']; echo "</td>";
            echo "<td>"; echo $row['TypePersonne']; echo "</td>";
            echo "</tr>";
			}
		echo "</table>";
			}
    }
			/*if button is not pressed.*/
		else
		{
			 
           
      
            echo " <form method='GET' >
            
            <table class='table table-striped table-bordered  table-hover'>
      <thead>
           <tr class='table-active'>
                 <th> code</th>
                 <th> Nom </th>
                 <th> Prenom </th>
                 <th> Sexe </th>
                 <th> Nationalite </th>
                 <th> Date de Naissance </th>
                 <th> Tel </th>
                 <th> Email </th>
                 <th> Type Personne </th>
              
           </tr>
      </thead>";
      
       
      
      echo "</table>";
      echo "</form>";
		}
		

  ?>
      <style>
        body
{
    background-image:url(gestion.jpg) ;
    background-repeat: no-repeat;
    background-attachment:fixed;
    background-size: 99% 100%;
}

</body>
</html>
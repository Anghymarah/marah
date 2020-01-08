<?php
$age=Readline("entrer une va leur");
		 
             if(($age>=55))
             {
                 echo("Agée");
             }
             elseif(($age>=18))
             {
                 echo("Majeur");
             }
             elseif (($age>=13))
              {
                 echo("Mineur");
             }
             elseif (($age>=3) OR ($age>=12)) 
             {
                 echo("Enfant");
             }
             ?>
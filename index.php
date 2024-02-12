<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Formulaire d'inscription</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/style.css"/>
    </head>
    <body>
        <form method="post" id="leForm" action="#">
        <fieldset>
             <legend>Informations requises pour s'inscrire</legend>
             <div class="zoneDeSaisie">
             <label for="login">Login :</label>  
             <input type="text" name="txtLogin" id="login"/> <br/>
             </div>      
              <div class="zoneDeSaisie">
             <label for="pwd">mot de passe :</label>  
             <input type="password" name="txtPassword" id="pwd" /> <br>
              </div>
                         
        </fieldset> 
        <input type="submit" class="btnValider" name="submit" value="Envoyer"> 
        
      </form>
    </body>
 </html>

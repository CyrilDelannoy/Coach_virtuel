<link rel="stylesheet" href="createAccount.css" />

<div id="content-wrap">
    <div class='formulaire'>
        <div class='Creation'>
            <h1> Créez votre compte !</h1>
            
            <form method="post" action="createAccount.php">
                <br />
                <label> Nom : </label>
                <input type="text" placeholder="Nom"/><br /><br />
                <label> Prénom : </label>
                <input type="text" placeholder="Prénom"/><br /><br />
                <label> E-Mail : </label>
                <input type="mail" placeholder="e-mail"/><br /><br />
                <label> Date de naissance : </label>
                <input type="date" placeholder="2000-01-O1"/><br /><br />
                <label> Mot de passe :</label>
                <input type="password" placeholder="Mot de passe"/><br /><br />
                <label> Confirmez votre mot de passe : </label>
                <input type="password" placeholder="Confirmez votre mot de passe"/><br /><br />
        
                <input type="submit" class= bouton value="Valider" />
                <br />
                <br />  
            </form>
        </div>

        <div class='Connection'>
            <h1> Connectez-vous !</h1>

            <form method="POST" action=<?php echo("index.php?page=trait")?>>
                <br />
                <label for="email"> E-Mail :  </label>
                <input type="mail" placeholder="e-mail" name="email"/><br /><br />
                
                <label for="password"> Mot de passe :</label>
                <input type="password" placeholder="Mot de passe" name="password"/><br /><br />           
                
                <input type="submit" class= bouton value="Valider"/>
                <br />
                <br />  
            </form>
        </div>
    </div>
    
    
</div>
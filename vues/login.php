<!--<div class="Form form1">
        <img src="img/logoSite.png" class="logo-form">
        <h1>Identifiez-vous !</h1>
        <form method="post" action="/traitement/connexion.php">
            <input type="email" required name="mail-address" placeholder="Entrez votre adresse mail">
            <input type="password" required name="password" placeholder="Enter your password">

            <input type="submit" name="send" value="Entrez sur FoxBook !">
        </form>
    </div>
    <br>




    <div class="Form form2">
        <h1>Créez votre compte !</h1>
        <form method="post" action="/traitement/register.php">
            <input type="text" required name="login" placeholder="Entrez votre nom">
            <input type="email" required name="mail-address" placeholder="Entrez votre adresse e-mail">
            <input type="password" required name="password" placeholder="Entrez votre mot de passe">
            <input type="password" required name="passwordcf" placeholder="Vérifiez votre mot de passe">
            <input type="submit" name="send" value="Entrez sur FoxBook !">
        </form>
    </div>
</div>

-->
<?php
echo "<br><br><br><br><br><br>";
echo "<form action=\"index.php?action=connexion\" method=\"POST\">
<input type=\"text\" placeholder=\"Login\" name=\"login\" required>
<input type=\"password\" placeholder=\"Password\" name=\"mdp\" required>
    
<input type=\"submit\" value=\"Se connecter\">
</form>";

echo "<br><br><br><br><br><br>";

?>

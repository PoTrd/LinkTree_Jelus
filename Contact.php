<form action="submit_contact.php" method="GET"> <!-- Formulaire avec méthode HTTP GET -->
        <div class=preferences>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div class=preferences>
            <label for="mail">e-mail&nbsp;:</label>
            <input type="email" id="mail" name="user_mail">
        </div>
        <div class=preferences>
            <label for="msg">Message :</label>
            <textarea id="msg" name="user_message"></textarea>
        </div>
        <div class=preferences class="button">
            <button type="submit">Envoyer le message</button>
        </div>
</form>

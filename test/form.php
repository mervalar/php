<!-- Formulaire -->
<div id="formulaire">
    <form method="post" action="form.php">
    <p>
    Votre prénom :
        <input type="text" name="prenom" /><br /><br />
             
    Votre note (/5) :
    <select name="choix">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            </select>
            <br /><br />
                                         
    Votre message :
        <textarea name="message" rows="8" cols="45"></textarea><br /><br />
             
    <input type="submit" value="Valider" />
    </p>
    </form>
                 
    <!-- / -->
                 
             
    <!-- Commentaires -->
    <p><div class="element_corps">
    <p>
    <u><?php echo   $_POST['prenom'] . ''; ?></u>
    (<?php echo  strip_tags ( isset ($_POST['choix']) ) ? $_POST['choix'] : ''; ?>/5) :<br />
    «<?php echo strip_tags ( isset ($_POST['message']) ) ? $_POST['message'] : ''; ?>»<br />
    </p>
    </div></p>
    </div>
    <!-- / -->
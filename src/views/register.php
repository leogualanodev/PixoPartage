<?php

ob_start();

?>


<body>
  <form action="" method="POST">
    <div>
      <label for="pseudo">Pseudo :</label>
      <input type="text" name="pseudo" id="pseudo">
    </div>
    <div>
      <label for="mail">Email :</label>
      <input type="mail" name="mail" id="mail">
    </div>
    <div>
      <label for="password">Mot de passe :</label>
      <input type="text" name="password" id="password">
    </div>
    <div>
      <label for="confirmPass">Confirmez votre mot de passe :</label>
      <input type="text" name="confirmPass" id="confirmPass">
    </div>
    <input type="submit" name="register" value="S'inscrire">
  </form>
</body>












<?php
$content = ob_get_clean();
// echo $content;

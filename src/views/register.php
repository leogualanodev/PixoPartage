<?php

require_once __DIR__ . './../controllers/registerC.php';

ob_start();

?>

<body>
  <form action="<?= htmlspecialchars($_SERVER['REQUEST_URI']); ?>" method="POST">
    <div>
      <label for="pseudo">Pseudo :</label>
      <input type="text" name="pseudo" id="pseudo">
      <p class="errors"><?= $errors['pseudo']; ?></p>
    </div>
    <div>
      <label for="mail">Email :</label>
      <input type="mail" name="mail" id="mail">
      <p class="errors"><?= $errors['mail']; ?></p>
    </div>
    <div>
      <label for="password">Mot de passe :</label>
      <input type="text" name="password" id="password">
      <p class="errors"><?= $errors['password']; ?></p>
    </div>
    <div>
      <label for="confirmPass">Confirmez votre mot de passe :</label>
      <input type="text" name="confirmPass" id="confirmPass">
      <p class="errors"><?= $errors['confirmPass']; ?></p>
    </div>
    <input type="submit" name="register" value="S'inscrire">
  </form>
</body>


<?php
$content = ob_get_clean();
require_once('./src/templates/head.php');



<?php

require_once __DIR__ . './../controllers/loginC.php';

ob_start();
?>
<form action="">
    <input type="text" name="pseudo-mail">
    <input type="text" name="password">
    <input type="submit">
</form>

<?php
$content = ob_get_clean();
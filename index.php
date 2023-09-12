<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_POST;
    $user = $data['user'];
    $password = $data['password'];
    //encriptacion base64 de password y user
    $user_encrypted = base64_encode($user);
    $password_encrypted = base64_encode($password);
    // token de relleno
    $token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c';
    // composicion de url
    $query_string = "token=" . urlencode($token) . "&encrypted=true" . "&user=" . urlencode($user_encrypted) . "&password=" . urlencode($password_encrypted);
    // Redirige al usuario a la nueva URL con los datos en formato GET
    header("Location: https://safer-safer-7892.ci.intermundial.com/login?$query_string");
    exit;
}
?>
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>Archivo intermediario</p>'; ?> 
  </body>
</html>

<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>User Agent</title>
</head>
<body>
  <h1>Your browser user agent is this:</h1>
  <p><?php echo htmlspecialchars($userAgent, ENT_QUOTES, 'UTF-8'); ?></p>
</body>
</html>

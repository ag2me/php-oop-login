<?php
    $config = require_once __DIR__ . '/app/config/config.php';
?>
<link rel="stylesheet" type="text/css" href="<?php echo $config['base_url']; ?>/public/css/style.css">

<div class="form-container">
    <form action="app/views/login.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>

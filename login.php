<?php
session_start();

// Kalau sudah login, langsung arahkan sesuai role
if (isset($_SESSION['is_login']) && $_SESSION['is_login'] === true) {
    if ($_SESSION['role'] === 'admin') {
        header("Location: admin.php");
        exit();
    } else {
        header("Location: index.html");
        exit();
    }
}

$error = '';

// Proses login
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    // AKUN ADMIN
    if ($username === "admin" && $password === "12345") {

        $_SESSION["is_login"] = true;
        $_SESSION["username"] = "admin";
        $_SESSION["role"] = "admin";

        header("Location: admin.php");
        exit();
    }

    // AKUN PUBLIC
    elseif ($username === "user" && $password === "12345") {

        $_SESSION["is_login"] = true;
        $_SESSION["username"] = "user";
        $_SESSION["role"] = "public";

        header("Location: index.html");
        exit();
    }

    // Login salah
    else {
        $error = "Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — Fachrieocean</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <main class="login-page">

        <div class="login-container" style="grid-template-columns: 1fr; justify-items: center; max-width: 460px;">

            <!-- LOGIN CARD -->
            <div class="login-card" style="width: 100%;">

                <div class="login-card-top">
                    <span>LOGIN / 001</span>
                    <span>● SECURE</span>
                </div>

                <div class="login-card-content">

                    <div class="login-heading">
                        <p>ACCOUNT ACCESS</p>
                        <h2>Sign in.</h2>
                    </div>

                    <?php if ($error): ?>
                        <p class="login-message" style="color:#b64b4b;"><?php echo $error; ?></p>
                    <?php endif; ?>

                    <form method="POST" action="login.php">

                        <div class="input-group">
                            <label for="username">USERNAME</label>
                            <input type="text" id="username" name="username" placeholder="Masukkan username" autocomplete="username" required>
                        </div>

                        <div class="input-group">
                            <label for="password">PASSWORD</label>
                            <input type="password" id="password" name="password" placeholder="Masukkan password" autocomplete="current-password" required>
                        </div>

                        <button type="submit" class="login-button">
                            <span>LOGIN</span>
                            <span>→</span>
                        </button>

                    </form>

                    <div class="login-footer">
                        <span>Admin: admin / 12345</span>
                    </div>
                    <div class="login-footer">
                        <span>Public: user / 12345</span>
                    </div>

                </div>

            </div>

        </div>

    </main>

    <div class="meteor-container">
        <div class="meteor" style="left: 15%; top: 10%; animation-duration: 3s;"></div>
        <div class="meteor" style="left: 40%; top: 20%; animation-duration: 4s;"></div>
        <div class="meteor" style="left: 70%; top: 5%; animation-duration: 3.5s;"></div>
        <div class="meteor" style="left: 85%; top: 35%; animation-duration: 4.5s;"></div>
    </div>

</body>
</html>
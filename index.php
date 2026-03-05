<?php
    session_start();
    $errors = [
        'login' => $_SESSION['login_error'] ?? '',
        'register' => $_SESSION['register_error'] ?? ''
    ];
    $active_form = $_SESSION['active_form'] ?? 'login';

    session_unset();

    function ShowError($error) {
        return !empty($error) ? "<p class='error_message'>$error</p>" : '';
    }

    function isActiveForm($formName, $active_form){
        return $formName === $active_form ? 'active' : '';
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form-box <?= isActiveForm('login',$active_form)  ?>" id="login-form">
            <form action="login_register.php"  method="post">
                <h2 class="login-title"> Login </h2>
                <?= ShowError($errors['login']); ?>
                <input type="email" name="email" placeholder="Digite seu email" required>
                <input type="password" name="password" placeholder="Digite sua senha" required>
                <button type="submit" name="login"> Login </button>
                <p> Não tem uma conta ? <a href="#" onclick="MostrarFormulario('register-form')"> cadastre-se aqui </a> </p>
            </form>
        </div>
        <div class="form-box <?= isActiveForm('register',$active_form)  ?>" id="register-form">
            <form action="login_register.php" method="post">
                <h2 class="login-title"> Registre-se </h2>
                <?= ShowError($errors['register']); ?>
                <input type="text" name="name" placeholder="Digite seu nome" required>
                <input type="email" name="email" placeholder="Digite seu email" required>
                <input type="password" name="password" placeholder="Digite sua senha" required>
                <select name="role" required>
                    <option value=""> Selecione uma função </option>
                    <option value="admin"> Administrador </option>
                    <option value="user "> Usuario </option>
                </select>
                <button type="submit" name="register"> Registre </button>
                <p> Já tem uma conta ? <a href="#" onclick="MostrarFormulario('login-form')"> faça login aqui </a> </p>
            </form>
        </div>
    </div>

    <script src="script.js"> </script>
</body>
</html>
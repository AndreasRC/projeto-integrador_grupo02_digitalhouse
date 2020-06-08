<html>

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">
    <title>Veduta</title>
    <link rel="icon" href="./img/logo_veduta-sem-letras.png">
</head>

<body class="body-login">
    <section class="form-section">
        <a href="home.html" class="link-login flex justify"><img src="./img/logo_colorido.png" alt="logo" class="logo-login"></a>

        <div class="form-wrapper">
            <form action="">
                <div class="input-block">
                    <label for="login-email">Email</label>
                    <input type="email" id="login-email" />
                </div>
                <div class="input-block">
                    <label for="login-password">Senha</label>
                    <input type="password" id="login-password" />
                </div>
                <div>
                    <div class="cadastro">
                        <div class="casatro-1">
                            <span>Não tem login?</span> <a href="cadastro">cadastre-se</a>
                            <span>agora!</span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn-login">entrar</button>
            </form>
        </div>
    </section>

</body>

</html>
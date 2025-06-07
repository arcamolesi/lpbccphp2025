<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>

    <script src="./js/init.js"></script>


    <title>Página de Login</title>

    <style type="text/css">
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

        body {
            background: #fff;
        }
    </style>

</head>

<body>

    <div class="container light-blue darken-3 white-text">
        <h2 class="center">SISTEMA BIBLIOTECA</h2>
        <div class="row center-align">
           
            <div class="section"></div>
            <main>
                <center>
                    <div class="container">
                        <div class="z-depth-3 y-depth-3 x-depth-3 grey green-text lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px; margin-top: 20px; margin-bottom: 100px; solid #EEE;">

                            <div class="section"><i class="mdi-alert-error red-text"></i></div>

                            <form action="opLogin.php" method="POST">
                                <div class='row'>
                                    <div class='input-field col s12'>
                                        <input class='validate' type="text" name='username' id='email' required />
                                        <label for='email'>Usuário</label>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='input-field col m12'>
                                        <input class='validate' type='password' name='password' id='password' required />
                                        <label for='password'>Senha</label>
                                    </div>
                                    <label style='float: right;'>
                                        <a><b style="color: #F5F5F5;">Esqueceu a Senha?</b></a>
                                    </label>
                                </div>
                                <br />
                                <center>
                                    <div class='row'>
                                        <button style="margin-left:65px;" type='submit' name='btn_login' class='col  s6 btn btn-small white black-text  waves-effect z-depth-1 y-depth-1'>Acessar</button>
                                    </div>
                                </center>
                            </form>

                        </div>
                </center>
            </main>

        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        funtion estaLogado(){
            idUsuario = localStorage.getItem('UsuarioLogadoID');
            NomeUsuario = localStorage.getItem('UsuarioLogadoNome');
            if(idUsuario === undefined || idUsuario === '' || NomeUsuario === undefined || NomeUsuario === ''){
                window.location.href = '.index.php';
                console.log('usuario não está logado!!!')
            }
        }

        function deslogar(){
            localStorage.setItem('UsuarioLogadoID','');
            localStorage.setItem('UsuarioLogadoNome','');
            window.location.href = '.index.php';
        }

        estaLogado();
    </script>
    <?php
    
    
    ?>
</head>
<body>
    <button onclick="deslogar();">SAIR</button>
</body>
</html>
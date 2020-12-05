<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        session_start();
        if (!isset($_SESSION["auth"])){
            echo "Debes iniciar sesión";
            echo "<a href='index.php'>autentificar</a>";
        }
        else {
            $usuario = $_SESSION["usuario"];
         echo "   
            <h1>Bienvenido: $usuario !!!</h1>
            <ul>
                <li><a href='pagina-01.php'> Pagina 01</a></li>
                <li><a href='pagina-02.php'> Pagina 02</a></li>
                <li><a href='pagina-03.php'> Pagina 03</a></li>
         </ul>";
            }
    ?>        
</body>
</html>
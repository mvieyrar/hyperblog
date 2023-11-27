<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Prueba de PHP</title>
    </head>
    <body>
          <p>
            Esta pagina ha sido creada a las <b>
            <?php
                echo date("h:i:s a", time());
            ?>
            </b> es un computador ejecutando PHP
          </p>  
        
    </body>
</html>
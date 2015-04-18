<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>practica 1</title>
    </head>
    <body>
        <form method="post" action="#">
            <input type="text" value="" name="txt_prueba" />
            
            <?php
                if(isset($empty)):
                    echo $empty;
                else:
                    echo "<pre>";
                    print_r($value);
                    echo "</pre>";
                    echo $value[0]->user;
                endif;
            ?>
            <button type="submit">ENVIAR</button>
            <?php
                if(isset($_REQUEST['txt_prueba'])):
                    echo "<br><b>" . $_REQUEST['txt_prueba'] . "</b> ROLI PRUEBA";
                endif;
            ?>
        </form>
    </body>
</html>

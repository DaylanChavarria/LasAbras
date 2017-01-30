<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>CRUD Empresa</title>
    </head>
    <body>
        <a href="../../index.php"><h3>Inicio</h3></a>
        <h2>Empresa &rarr;listado</h2>
        <br>
        <?php
            include '../../Business/Empresa/EmpresaBusiness.php';
            $instEmpresaBusiness = new EmpresaBusiness();
            $tem = $instEmpresaBusiness->getEmpresaEsBusiness();

            echo  "<b>id: </b>". $tem->Id . "<br>".
                "<b>historia: </b>". $tem->historia . "<br>".
                "<b>quinesSomos: </b>". $tem->quinesSomos . "<br>".
                "<b>descripcionGaleria: </b>". $tem->descripcionGaleria . "<br>".
                "<b>elaboracion: </b>". $tem->elaboracion . "<br>".
                "<b>descripcionProductoA: </b>". $tem->descripcionProductoA . "<br>".
                "<b>elaboracionProductoB: </b>". $tem->elaboracionProductoB . "<br>".
                "<b>denominacion: </b>". $tem->denominacion . "<br>".
                "<b>descripcionContactos: </b>". $tem->descripcionContactos . "<br>".
                "<b>direccion: </b>". $tem->direccion . "<br>".
                "<b>correo: </b>". $tem->correo . "<br>".
                "<b>telefonoA: </b>". $tem->telefonoA . "<br>".
                "<b>telefonoB: </b>". $tem->telefonoB . "<br>".
                "<b>encargadoA: </b>". $tem->encargadoA . "<br>".
                "<b>encargadoB: </b>". $tem->encargadoB . "<br>".
                "<b>idioma: </b>". $tem->idioma  . "<br>";
        ?>

        <!--========================================================================================-->
        <h2>Empresa &rarr;Actualizar</h2> 

        <!-- Form -->
        <form method="POST" action="../../Business/Empresa/ActualizarEmpresaAccion.php">
            <label>ID</label>
            <input type="text" name="id" value="<?php echo $tem->Id ?>" readonly="readonly">
            
            <label>historia</label>
            <input type="text" name="historia" value="<?php echo $tem->historia ?>">
            
            <label>quinesSomos</label>
            <input type="text" name="quinesSomos" value="<?php echo $tem->quinesSomos ?>">
            
            <label>descripcionGaleria</label>
            <input type="text" name="descripcionGaleria" value="<?php echo $tem->descripcionGaleria ?>">
           
            <label>elaboracion</label>
            <input type="text" name="elaboracion" value="<?php echo $tem->elaboracion ?>">
            <br><br>

            <label>descripcionProductoA</label>
            <input type="text" name="descripcionProductoA" value="<?php echo $tem->descripcionProductoA ?>">

            <label>elaboracionProductoB</label>
            <input type="text" name="elaboracionProductoB" value="<?php echo $tem->elaboracionProductoB ?>">

            <label>denominacion</label>
            <input type="text" name="denominacion" value="<?php echo $tem->denominacion ?>">

            <label>descripcionContactos</label>
            <input type="text" name="descripcionContactos" value="<?php echo $tem->descripcionContactos ?>">
            <br><br>

            <label>direccion</label>
            <input type="text" name="direccion" value="<?php echo $tem->direccion ?>">

            <label>correo</label>
            <input type="text" name="correo" value="<?php echo $tem->correo ?>">

            <label>telefonoA</label>
            <input type="text" name="telefonoA" value="<?php echo $tem->telefonoA ?>">

            <label>telefonoB</label>
            <input type="text" name="telefonoB" value="<?php echo $tem->telefonoB ?>">

            <label>encargadoA</label>
            <input type="text" name="encargadoA" value="<?php echo $tem->encargadoA ?>">
            <br><br>
            
            <label>encargadoB</label>
            <input type="text" name="encargadoB" value="<?php echo $tem->encargadoB ?>">

            <label>Mision</label>
            <input type="text" name="mision" value="<?php echo $tem->mision ?>">

            <label>Vision</label>
            <input type="text" name="vision" value="<?php echo $tem->vision ?>">

            <label>idioma</label>
            <input type="text" name="idioma" value="<?php echo $tem->idioma ?>">
            <br><br>
            <input type="submit" value="Actualizar" >   

        </form>
    </body>
</html>
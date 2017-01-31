<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>CRUD Producto</title>
    </head>
    <body>
        <a href="../../index.php"><h3>Inicio</h3></a>
        <a href="./CRUD_Empresa.php"> CRUD Empresa </a>
        <h2>Producto &rarr;listado</h2>
        <br>
        <?php
            include '../../Business/Producto/ProductoBusiness.php';
            $instProductoBusiness = new ProductoBusiness();
            $listadoProductos = $instProductoBusiness->obtenerProductosEsBusiness();


            foreach ($listadoProductos as $tem) {
                echo  "<b>id: </b>". $tem->id . "<br>".
                    "<b>nombre: </b>". $tem->nombre . "<br>".
                    "<b>precio: </b>". $tem->precio . "<br>".
                    "<b>descripción: </b>". $tem->descripcion . "<br>".
                    "<b>idioma: </b>". $tem->idioma . "<br>";
            }
        ?>

        <!--========================================================================================-->
        <h2>Producto &rarr;Actualizar</h2> 

        <!-- Form -->
        <?php foreach ($listadoProductos as $tem) { ?>
        
            <form method="POST" action="../../Business/Producto/ActualizarProductoAccion.php">

                <label>ID</label>
                <input type="text" name="id" value="<?php echo $tem->id ?>" readonly="readonly">

                <label>codigoProducto</label>
                <input type="text" name="codigoProducto" value="<?php echo $tem->codigoProducto ?>" readonly="readonly">
                
                <label>nombre</label>
                <input type="text" name="nombre" value="<?php echo $tem->nombre ?>">
                
                <label>precio</label>
                <input type="text" name="precio" value="<?php echo $tem->precio ?>">
                
                <label>descripcion</label>
                <input type="text" name="descripcion" value="<?php echo $tem->descripcion ?>">

                <label>idioma</label>
                <input type="text" name="idioma" value="<?php echo $tem->idioma ?>">
                <br><br>

                <input type="submit" value="Actualizar" >   

            </form>
            <?php }?>

            <!--========================================================================================-->
        <h2>Producto &rarr;Insertar </h2>

        <h4>Español</h4> 
        <form method="POST" action="../../Business/Producto/ProductoInsertarAccion.php">            
            <label>precio</label>
            <input type="text" name="precio" placeholder="precio">
            <br><br>

            <label>nombreEs</label>
            <input type="text" name="nombreEs" placeholder="nombreEs">
            
            <label>descripcionEs</label>
            <input type="text" name="descripcionEs" placeholder="descripcionEs">
            <br><br>

            <h4>Ingles</h4>

            <label>nombreIn</label>
            <input type="text" name="nombreIn" placeholder="nombreIn">
            
            <label>descripcionIn</label>
            <input type="text" name="descripcionIn" placeholder="descripcionIn">
            <br><br>

            <input type="submit" value="Insertar" > 
        </form>
    </body>
</html>
<?php

session_start();
if (!empty($_SESSION["ID"])){
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <style>
        #salir{
            margin-left: 15px;
            color: #39DB7D;
        }
        #usuarioName{
            margin-left: 70px;
            display: flex;
            align-items: center;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/inventario.css">
    <link rel="stylesheet" href="./css/inventoryProducts.css">
    <link rel="stylesheet" href="./css/añadirItem.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>inventary</title>
</head>
<body>
    <header>
        <div><span id="fechaYHora"></span></div>
        <img class="logo" src="./logo/LOGO_INVENTARIO.png" alt="">
    </header>
    <main>
<div id="line3Info">
<div id="h2Product">
    <h2 >Productos </h2>
</div>
    <div id="todos_los_productos_stock"  class="todosP"><span id="totalProductos">1</span> en Stock</div>
    <div id="contenedor_buscar">
        <label for="buscar">
            <span  id="lupaSearchItem" class="material-symbols-outlined">search</span>
        </label>
        <input type="search" name="buscador" id="buscar" placeholder="Buscar...">
        <div class="linea_separador"></div>
        <div id="barcode">
            <span id="barcode_icon" class="material-symbols-outlined">barcode_scanner</span>
            <span>Scanear</span>
        </div>
    </div>

    <!-- <div id="inventory_mode">
        <span id="list_mode" class="material-symbols-outlined">format_list_bulleted</span>
        <span id="gird_mode" class="material-symbols-outlined">grid_view</span> 
    </div> -->
    <div id="añadir_productoAncore">Añadir productos</div>
    <div id="usuarioName">
    <?php
        echo "<div id='usuario'>".$_SESSION["usuario"]."</div>";
    ?>
        <img class="userImg" src="./image/usuario.png" alt="">
    </div>
        <a id="salir" href="./controlador/cerrar_session.php"><span class="material-symbols-outlined">logout</span></a>
</div>
<div id="body_inventary">
    <div id="filtro">
        <div class="headerWithIcon">
        <h4>estado de producto:</h4></div>
        <div class="statusSection">
            <div class="status">Todos <span id="todosCategory" class="numerosFiltro">1</span></div>
            <div class="status">Disponible</div>
            <div class="status">No Disponible</div>
            <div class="status">Bajo</div>
            <div class="status">Alto</div>
        </div>
        <!-- <div class="headerWithIcon">
            <h4> Ordenar por:</h4>
        </div> -->
        <!-- <div>
            <select  name="orderBy" id="ordenarPor">
                <option value="A-Zd">A-Z Ascendente</option>
                <option value="A-Za">A-Z descendente</option>
                <option value="price-">Menor Precio</option>
                <option value="price+">Mayor Precio</option>
            </select>
        </div> -->
        <div class="headerWithIcon">
            <span class="material-symbols-outlined">notifications_active</span>
            <h4> Stock Alert</h4>
        </div>
        <div>
            <select name="stockAlert" id="stockAlert">
                <option value="10">10%</option>
                <option value="15">15%</option>
                <option value="20">20%</option>
                <option value="1">cantidad especifica</option>
            </select>
        </div>
        <div class="headerWithIcon">
            <span class="material-symbols-outlined"> category</span>
                <h4>Categoria</h4>
        </div>
        <div id="categorizar" class="statusSection">
            <div class="status" >Madera</div>
            <div class="status">Muebles</div>
            <span id="agregar_categoria" class="material-symbols-outlined addCategory">add_box</span>
        </div>
        </div>
    <div id="contenedor">
        <div id="productosList">
            <div class="contenedor_de_productos">
                <img class="imgDelProducto madera" src="./image/tabla-de-madera.png" alt="">
                <div class="labelProduct">
                  <div class="nameProduct"><h2>Picada</h2></div>
                  <div class="infoProduct">
                    <h4 class="variantesProduct"><span id="perCalienteVariante">3</span> Variant</h4>
                    <h4 class="cantInStock">Almacenado: <span class="inStock" id="perCalienteStock">$20</span> En inventario</h4>
                  </div>
                </div>
                <div>
                  <div class="priceContent">
                    <h3>Precio al publico</h3>
                    <h5 class="valorString">$ <span class="precioDetail">7.000</span></h5>
                  </div>
                </div>
                <div class="priceContent">
                <h3>Dinero Total a recaudar</h3>
                <h5 class="valorString">$ <span class="precioDetail">140.000</span></h5>
              </div>
        
            </div>
        </div>
        <div id="contenedorProductos">

        </div>
    </div>
    <div id="AñadirItemBox">
        <form action="">
            <fieldset id="productType">
                <legend >Agregar Producto</legend>
                <input id="nuevoProducto"  type="button" value="Nuevo Producto">
                <input type="button" id="productoExistente" value="Producto Existente">
                <span  id="cancelarAñadirProducto" class="btnFormAddP text cancelar">cancelar</span>
            </fieldset>
            <fieldset id="newProduct">
                <legend>Producto Nuevo</legend>
                <input type="text" name="nombreP" id="inptNombreP" placeholder="Nombre del Producto">
                <input type="number" min="1000" name="precioP" id="inptPrecioP" placeholder="Precio Kg/Unidad">
                <input type="number" name="cantidadP" id="inptCantidadP" placeholder="Cantidad">
                <input id="categoriaSelect" type="text" list="categoria_de_producto" placeholder="tipo de producto" name="tipo_producto">
                    <datalist id="categoria_de_producto" name="categoria_de_producto">
                        <option value="Mobilarios">Mobilarios</option>
                        <option value="madera">madera</option>
                        <option value="puertas">puertas</option>
                        <option value="muebles">muebles</option>
                        <option value="otros">otros</option>
                    </datalist>
                <div>
                    <span id="addNewP" class="btnFormAddP text">añadir Producto</span>
                    <span id="backBtnNewP" class="btnFormAddP text">atras</span>
                </div>

            </fieldset>
        </form>
    </div>
    <div id="formCategory">
        <form id="categoryNew" action="">
            <label for="nombreCategoria">Nombre de la nueva categoria</label>
            <input name="categoryP" id="nombreCategoria" type="text" placeholder="categoria">
            <div id="botones">
                <span id="canelarNewCategory" class="btnsCategory">cancelar</span>
                <span id="AddCategory" class="btnsCategory">Añadir</span>
            </div>
        </form>
    </div>
    <div id="capaBody"></div>
</div>

    </main>
    <footer>
    </footer>
    <script src="./js/agregarcategory.js"></script>
    <script src="./js/inventory.js"></script>
    <script src="./js/fecha-hora.js"></script>
</body>
</html>
//filtro de productos//

const categoryTodos = document.getElementById("todosCategory");
const allProductsHeader = document.getElementById("totalProductos");

categoryTodos.innerHTML=document.querySelectorAll('.contenedor_de_productos').length;
allProductsHeader.innerHTML=document.querySelectorAll('.contenedor_de_productos').length;

const galery = document.getElementById("gird_mode");
const list = document.getElementById("list_mode");

// list.addEventListener('click',listMode);
// galery.addEventListener('click',galeryMode);

// function galeryMode(){
//     galery.style.color="#39DB7D";
//     galery.style.border="2px solid #39DB7D"
//     list.style.color="#fff";
//     list.style.border="none"
// let productosVist = document.querySelectorAll('.contenedor_de_productos');
//     for (let index = 0; index < productosVist.length; index++) {
//         const element = productosVist[index];
//         const info = document.querySelectorAll('.labelProduct');
//         info[index].style.display="flex";
//         info[index].style.flexDiretion="column";
//         element.style.display="flex";
//         element.style.flexDiretion="column";
//         element.style.width="200px";
//         element.style.height="150px"
//         document.getElementById("contenedor").style.display="flex";
//         document.querySelectorAll('.infoProduct')[index].style.display="none";
//         document.querySelectorAll('.priceContent')[index].style.display="none";
//         document.querySelectorAll('.precios')[index].style.display="none";
  
//     }

// }
// function listMode(){
//     list.style.color="#39DB7D";
//     list.style.border="2px solid #39DB7D"
//     galery.style.color="#fff";
//     galery.style.border="none"
//     let productosVist = document.querySelectorAll('.contenedor_de_productos');
//     for (let index = 0; index < productosVist.length; index++) {
//         const element = productosVist[index];

//         element.style.width="1000px";
//         element.style.height="80px"
//     }
// }

//acciones al AÑADIR PRODUCTO //

const cuadro = document.getElementById("AñadirItemBox");
    cuadro.style.display="none";

const newProduct = document.getElementById("newProduct"); // cuadro de nuevo producto//
        newProduct.style.display="none";
        newProduct.style.opacity="0";
const tipoDeProducto = document.getElementById("productType"); // seleccionar nuevo o existente//
const nuevoPbtn = document.getElementById("nuevoProducto");
const añadir = document.getElementById("añadir_productoAncore");
const cancelar = document.getElementById("cancelarAñadirProducto");
const atras = document.getElementById("backBtnNewP");
const productoExistente = document.getElementById("productoExistente");

cancelar.addEventListener('click',cancelar_Añadir);
function cancelar_Añadir(){
    cuadro.style.scale="10%";
    cuadro.style.opacity="0%";
    setTimeout(() => {
        cuadro.style.display="none";
    }, 100);

}
añadir.addEventListener('click',añadir_box);
function añadir_box(){
   
    cuadro.style.display="flex";
    setTimeout(() => {
        cuadro.style.opacity="1";
        cuadro.style.scale="1";
    }, 100);
}



function atrasTipoP(){
    newProduct.style.opacity="0";
    newProduct.style.display="none";
    tipoDeProducto.style="flex";
    tipoDeProducto.style.opacity="1";
    añadir_box()
}
atras.addEventListener('click', atrasTipoP);

nuevoPbtn.addEventListener('click',nuevoProducto);

function nuevoProducto(){
    cuadro.style.width="500px";
    cuadro.style.height="250px";
    tipoDeProducto.style.opacity="0";
    tipoDeProducto.style.display="none";
    newProduct.style.display="flex";
    newProduct.style.opacity="1";
}

// ejecutar nuevo product //

const nombre_del_producto = document.getElementById("inptNombreP");
const precio_del_producto = document.getElementById("inptPrecioP");
const cantidad_ingresada = document.getElementById("inptCantidadP");
const añadirProducto = document.getElementById("addNewP");
const categoria = document.getElementById("categoriaSelect");

document.addEventListener("DOMContentLoaded", function() {
    // Obtener referencia al contenedor de productos
    var contenedorProductos = document.getElementById("contenedorProductos");
  

  
    // Agregar evento click al botón de agregar producto
    añadirProducto.addEventListener("click", function() {
      // Solicitar datos al usuario
      var nombreProducto = nombre_del_producto.value;
      let precioProducto = precio_del_producto.value;
      var cantidadProducto = cantidad_ingresada.value;
        let precioPublico = parseInt(precioProducto).toLocaleString();
    var capital_retorno = parseInt(precioProducto*cantidadProducto).toLocaleString();
  
      // Crear la estructura del producto
      var nuevoProducto = document.createElement("div");
      nuevoProducto.className="contenedor_de_productos " + categoria.value;
      nuevoProducto.innerHTML = `
        <img class="imgDelProducto" src="./image/tendedero.png" alt="">
        <div class="labelProduct">
          <div class="nameProduct"><h2>${nombreProducto}</h2></div>
          <div class="infoProduct">
            <h4 class="variantesProduct"><span id="perCalienteVariante">3</span> Variant</h4>
            <h4 class="cantInStock">Almacenado: <span class="inStock" id="perCalienteStock">${cantidadProducto}</span> En inventario</h4>
          </div>
        </div>
        <div>
          <div class="priceContent">
            <h3>Precio al publico</h3>
            <h5 class="valorString">$ <span class="precioDetail">${precioPublico}</span></h5>
          </div>
        </div>
        <div class="precios">
        <h3>Dinero Total a recaudar</h3>
        <h5 class="valorString">$ <span class="precioDetail">${capital_retorno}</span></h5>
      </div>
      `;
      // Agregar el producto al contenedor de productos
      contenedorProductos.appendChild(nuevoProducto);

      

      cancelar_Añadir();
      setTimeout(() => {
      allProductsHeader.innerHTML=document.querySelectorAll('.contenedor_de_productos').length;
      categoryTodos.innerHTML=document.querySelectorAll('.contenedor_de_productos').length;
      nombre_del_producto.value="";
      cantidad_ingresada.value="";
      precio_del_producto.value="";
      categoria.value="";
      newProduct.style.opacity="0";
      newProduct.style.display="none";
      }, 100);

    });

  });

  //inventory mode //


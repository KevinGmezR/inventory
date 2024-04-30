const boton_categoria = document.getElementById("agregar_categoria");
const CONTENEDOR = document.getElementById("categorizar");
const cuadro_form = document.getElementById("formCategory");
const formulario = document.getElementById("categoryNew");
const nombreDeCategoria = document.getElementById("nombreCategoria");
const capa = document.getElementById("capaBody");
const añadirCategoria = document.getElementById("AddCategory");
const cancelarCategoriaNueva = document.getElementById("canelarNewCategory");

    capa.style.display="none";
    cuadro_form.style.display="none";


boton_categoria.addEventListener('click', ()=>{
    cuadro_form.style.display="flex";
    capa.style.display="block";
})
cancelarCategoriaNueva.addEventListener('click',()=>{
    cuadro_form.style.display="none";
    capa.style.display="none";
})

añadirCategoria.addEventListener('click',añadirCategoriaNueva);
    
function añadirCategoriaNueva(){
    const nuevaCategoria = document.createElement("div");
    nuevaCategoria.className="status";
    nuevaCategoria.innerHTML=nombreDeCategoria.value;
    CONTENEDOR.appendChild(nuevaCategoria);
    capa.style.display="none";
    cuadro_form.style.display="none";
}



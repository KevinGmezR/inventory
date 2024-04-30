const VER = document.getElementById("viewPassword");
const OCULTAR = document.getElementById("hiddenPassword");
const contraseña = document.getElementById("contraseña");
const texto = document.getElementById("textoFlotante");
const usuarioINPT = document.getElementById("user");  //Campor para llenar usuario//
const contraseñaINPT = document.getElementById("contraseña");  //Campor para llenar contraseña//

function ver_password(){
    contraseña.type="text";
    VER.style.display="none";
    OCULTAR.style.display="inline-block";
}
function ocultar_password(){
    contraseña.type="password";
    OCULTAR.style.display="none";
    VER.style.display="inline-block";
}

VER.addEventListener('click',ver_password);
OCULTAR.addEventListener('click',ocultar_password);

VER.addEventListener('mouseover',()=>{
    texto.innerHTML="Ver Contraseña";
    texto.style.display="block";
})
VER.addEventListener('mouseout',()=>{
    texto.innerHTML="";
    texto.style.display="none";
})

OCULTAR.addEventListener('mouseover',()=>{
    texto.innerHTML="Ocultar Contraseña";
    texto.style.display="block";
    texto.style.left="66%";
})
OCULTAR.addEventListener('mouseout',()=>{
    texto.innerHTML="";
    texto.style.display="none";
    texto.style.left="65%";
})

usuarioINPT.addEventListener('click',()=>{
    usuarioINPT.style.borderBottom="3px solid #39DB7D";
    contraseñaINPT.style.borderBottom="";
})
usuarioINPT.addEventListener('mouseover',()=>{
    usuarioINPT.style.borderBottom="3px solid #39DB7D";
    contraseñaINPT.style.borderBottom="";
})

contraseñaINPT.addEventListener('click',()=>{
    contraseñaINPT.style.borderBottom="3px solid #39DB7D";
    usuarioINPT.style.borderBottom="";
})
contraseñaINPT.addEventListener('mouseover',()=>{
    contraseñaINPT.style.borderBottom="3px solid #39DB7D";
    usuarioINPT.style.borderBottom="";
})
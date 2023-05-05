
//Confirmar borrar vista
function confirmarBorrar(nombre, id) {
    if (confirm("¿Quieres eliminar al cliente:  " + nombre + "?")) {
        document.location.href = "?orden=Borrar&userid=" + id;
    }
}

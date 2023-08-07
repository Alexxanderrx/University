var tablaCalificaciones = document.querySelector("#tablaCalificaciones");

var dataTable01 = new DataTable(tablaCalificaciones, {
    perPageSelect: false,
});



var tablaClasesInscritas = document.querySelector("#tablaClasesInscritas");

var dataTable02 = new DataTable(tablaClasesInscritas, {
    perPageSelect: true,
});
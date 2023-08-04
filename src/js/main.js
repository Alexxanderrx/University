const toggleBar = document.getElementById("toggle");

const toggleSpin = document.getElementById("spin");

const btnOpen = document.getElementById("open");

let spin = false;

btnOpen.addEventListener("click", () => {
    toggleBar.classList.toggle("collapse");
    spin = (!spin);
    // console.log(spin);
    if (spin == true) {
        toggleSpin.style.transform = "rotate(180deg)";
    } else if (spin == false) {
        toggleSpin.style.transform = "rotate(0deg)";
    }
});

const toggleMenu = document.getElementById("toggleMenu");
const toggleMenuU = document.getElementById("toggleMenuU");
const CARGO = document.getElementById("CARGO");
const Uni = document.getElementById("Uni");
const MENU_AD = document.getElementById("MENU_AD");
const pPermisos = document.getElementById("pPermisos");
const pMaestros = document.getElementById("pMaestros");
const pAlumnos = document.getElementById("pAlumnos");
const pClases = document.getElementById("pClases");
const section01 = document.getElementById("section01");

const btnTree = document.getElementById("btnOpen");

btnTree.addEventListener("click", () => {
    section01.classList.toggle("w-4/5");
    section01.classList.toggle("w-full");
    toggleMenu.classList.toggle("w-1/5");
    toggleMenu.classList.toggle("w-[250px]");
    toggleMenuU.classList.toggle("md:justify-start");
    toggleMenuU.classList.toggle("md:pl-4");
    toggleMenuU.classList.toggle("justify-center");
    CARGO.classList.toggle("md:flex");
    Uni.classList.toggle("md:flex");
    MENU_AD.classList.toggle("md:flex");
    pPermisos.classList.toggle("md:flex");
    pMaestros.classList.toggle("md:flex");
    pAlumnos.classList.toggle("md:flex");
    pClases.classList.toggle("md:flex");
});

// document.getElementById("btnSubmit").addEventListener("click", function () {
//     setTimeout(function () {
//         document.getElementById("messageError").classList.add("hidden");
//     }, 2000);
// });


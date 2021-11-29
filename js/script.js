var x = document.getElementById("contain");

x.addEventListener("click", myFunction);

function myFunction() {
    var element = document.querySelector(".menu");
    element.classList.toggle("open");

    x.classList.toggle("change");

    element.addEventListener("click", myFunction);

    function sa() {
        element.classList.remove("open");
    }
}
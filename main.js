let traerDatos = async(file)=>{
    let config = {
        method: "POST", 
        body: JSON.stringify({file: file})
    }
    let petecion = await fetch("api.php", config);
    let datos = await petecion.text();
    return datos;
}

addEventListener("DOMContentLoaded", async(e)=>{
    document.querySelector(".logo").insertAdjacentHTML("beforeend", await traerDatos("icono"));
    document.querySelector(".menu").insertAdjacentHTML("beforeend", await traerDatos("menu"));
    document.querySelector(".home-content").insertAdjacentHTML("beforeend", await traerDatos("inicio"));


    let about = JSON.parse(await traerDatos("sobre_mi"));
    document.querySelector(".about-content").insertAdjacentHTML("beforebegin", about.titulo);
    document.querySelector(".about-content").insertAdjacentHTML("beforeend", about.secion);

   
    
    let services = JSON.parse(await traerDatos("servicios"));
    document.querySelector(".serv-content").insertAdjacentHTML("beforebegin", services.service);
    document.querySelector(".serv-content").insertAdjacentHTML("beforeend", services.card);

    let tecnologias = JSON.parse(await traerDatos("tecnologias"));
    document.querySelector(".skills-content").insertAdjacentHTML("beforebegin", tecnologias.sof);
    document.querySelector(".skills-content").insertAdjacentHTML("afterbegin", tecnologias.herramientas);
    document.querySelector(".skills-content").insertAdjacentHTML("beforeend", tecnologias.barras);
    document.querySelector("footer").insertAdjacentHTML("beforeend", await traerDatos("footer"));







    // typing text animation script

    console.log();
    var typed = new Typed(".typing", {
        strings: JSON.parse(document.querySelector(".typing").dataset.lista),
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });
    
    var typed = new Typed(".typing-2", {
        strings: JSON.parse(document.querySelector(".typing-2").dataset.lista),
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });
})
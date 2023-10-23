const openModalBtn = document.getElementById("openModal");
const closeModalBtn = document.getElementById("closeModal");
const modal = document.getElementById("myModal");
const loginBtn = document.getElementById("loginBtn");
const registerBtn = document.getElementById("registerBtn");
const updateBtn = document.getElementById("updateBtn");
const deleteBtn = document.getElementById("deleteBtn");

const btnEnviar = document.getElementById("btnEnv")

openModalBtn.addEventListener("click", () => {
    modal.style.display = "block";
});

closeModalBtn.addEventListener("click", () => {
    modal.style.display = "none";
});

window.addEventListener("click", (event) => {
    if (event.target == modal) {
        modal.style.display = "none";
    }
});

loginBtn.addEventListener("click", () => {
    window.location.href = "login.php"; 
});

registerBtn.addEventListener("click", () => {
    window.location.href = "registro.php"; 
});

var mymap = L.map('mapa').setView([4.54050055,  -75.6657981481088], 30);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 19,
}).addTo(mymap);

var marker = L.marker([4.54050055,  -75.6657981481088]).addTo(mymap);
marker.bindPopup("Unicentro, Armenia, Quindío").openPopup();

btnEnviar.addEventListener("click", ()=>{
    alert("tu solicitud ha sido enviada, pronto te contactaremos");
    window.location.href = "index.html"; 
})
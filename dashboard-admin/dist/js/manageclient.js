var tdNom = document.createElement("td");
var tdEmail = document.createElement("td");
var tdPhone = document.createElement("td");

trObject = document.createElement("tr");

tdNom.innerHTML = "Vatea Grasset";
tdEmail.innerHTML = "vateagrasset@gmail.com";
tdPhone.innerHTML = "15143462233";

document.getElementById("tableBodyClient").appendChild(trObject);
trObject.appendChild(tdNom);
trObject.appendChild(tdEmail);
trObject.appendChild(tdPhone);


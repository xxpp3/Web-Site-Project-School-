/* function Stop(e) {
  event.preventDefault();
}

let change = document.getElementById("change");
let index = 0;
change.addEventListener("click", () => {
  if (index % 2 === 0) {
    change.setAttribute("value", "0");
    index++;
  } else {
    change.setAttribute("value", "1");
    index++;
  }
  alert("i got clicked" + change.getAttribute("value"));
});

let add = document.getElementById("adding");
add.innerText = 0;
let sub = 0;
add.addEventListener("click", () => {
  add.innerText = sub++;
});
 */

let container = document.querySelectorAll(".Container10");
let body = document.body; /* document.getElementById("body"); */
let bodye = document.getElementById("bodye");

let clicked = document.getElementById("change");

/* changing css class every click */
clicked.addEventListener("click", () => {
  body.classList.toggle("dark");
  container.forEach((el) => {
    el.classList.toggle("sbon");
  });
  bodye.classList.toggle("darke");
  index.classList.toggle("try");
});

/* ################################# i am trying  ################################# */
let phoneInput = document.getElementById("first");
let modelName = document.getElementById("second");
let disponibilite = document.getElementById("third");
phoneInput.addEventListener("keyup", filterPrice);
modelName.addEventListener("keyup", filterModel);
disponibilite.addEventListener("keyup", filterDispo);

function filterPrice() {
  let phoneValue = document.getElementById("first").value.toLowerCase();
  let container = document.querySelectorAll(".Container10");
  container.forEach((box) => {
    let value = box.children[2].innerText.split(" ")[0];
    if (value >= phoneValue) {
      box.style.display = "";
    } else {
      box.style.display = "none";
    }
  });
}

function filterModel() {
  let phoneModel = document.getElementById("second").value.toLowerCase();
  let container = document.querySelectorAll(".Container10");
  container.forEach((box) => {
    let model = box.children[1].innerText.toLowerCase();
    if (phoneModel === "") {
      box.style.display = "";
    } else if (model === phoneModel) {
      box.style.display = "";
    } else {
      box.style.display = "none";
    }
    console.log("in ended");
  });
}

function filterDispo() {
  let phoneDispo = document.getElementById("third").value.toLowerCase();
  let container = document.querySelectorAll(".Container10");
  container.forEach((box) => {
    let dispo = box.children[3].innerText.toLowerCase();

    if (phoneDispo === "yes") {
      if (dispo > 0) {
        box.style.display = "";
      } else {
        box.style.display = "none";
      }
    } else if (phoneDispo === "no") {
      if (dispo == 0) {
        box.style.display = "";
      } else {
        box.style.display = "none";
      }
    } else {
      box.style.display = "";
    }
  });
}

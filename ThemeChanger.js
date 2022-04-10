let clicked = document.getElementById("change");

let body = document.body;
let forContainer = document.getElementById("Theme0");

let theme1 = document.getElementById("Theme1");
let theme2 = document.getElementById("Theme2");
let theme3 = document.getElementById("Theme3");

/* forContainer.forEach((el) => {
    el.classList.toggle("Dark1");
  });
  forContainer1.forEach((el1) => {
    el1.classList.toggle("Dark2");
  });
 */

clicked.addEventListener("click", () => {
  body.classList.toggle("Dark");
  theme1.classList.toggle("Dark1");
  theme2.classList.toggle("Dark2");
  theme3.classList.toggle("Dark3");
});

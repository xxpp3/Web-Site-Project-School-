let price = document.getElementById("subPrice");
let quantity = document.querySelectorAll(".Table");
let subAmount = 0;
quantity.forEach((row) => {
  let money = Number(row.children[2].innerText.split(" ")[0]);
  subAmount += money;
});
price.innerText = subAmount + " $";

let totalPrice = document.getElementById("Total");
let shipping = document.getElementById("shipping");
totalPrice.innerText =
  subAmount + Number(shipping.innerText.split(" ")[0]) + " $";

/* function totalPriceHandler() {
  const newPrice = document.querySelectorAll(".item-price");
  let totalAmount = 0;

  newPrice.forEach((el) => {
    let money = Number(el.children[1].innerText.split(" ")[0]);
    totalAmount += money;
  });

  totalPrice.innerText = totalAmount + " DA";
}
 */

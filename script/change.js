let change_1 = document.getElementById("A");
let change_2 = document.getElementById("B");
let nextbtn = document.getElementById("btn1");
let backbtn = document.getElementById("btn2");
nextbtn.addEventListener("click", (e) => {
  e.preventDefault();
  change_1.classList.add("setActive");
  change_2.classList.remove("setActive");
});
backbtn.addEventListener("click", (e) => {
  e.preventDefault();
  change_1.classList.remove("setActive");
  change_2.classList.add("setActive");
});

const form = document.querySelector("form"),
  nextbtn = form.querySelector(".btn"),
  backbtn = form.querySelector(".bbtn"),
  allInput = form.querySelectorAll(".first input");

nextbtn.addEventListener("click", (e) => {
  e.preventDefault();
  form.classList.add("setActive");
});
backbtn.addEventListener("click", () => {
  form.classList.remove("setActive");
});
document.getElementById("btn").addEventListener("click", (e) => {
  e.preventDefault();
});

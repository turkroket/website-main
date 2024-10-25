const options = document.querySelectorAll(".option");
options.forEach(option => {
  option.addEventListener("click", () => {
    options.forEach(option => {
      option.classList.remove("active");
    });
    option.classList.add("active");
  });
});


const optionsm = document.querySelectorAll(".option-mobile");
optionsm.forEach(optionm => {
  optionm.addEventListener("click", () => {
    optionsm.forEach(optionm => {
      optionm.classList.remove("active");
    });
    optionm.classList.add("active");
  });
});
// client Validtions

let submit = document.getElementById("formSubmit");
let password = document.getElementById("exampleInputPassword1");
let conPwd = document.getElementById("exampleInputPassword2");
let show = document.getElementById("show");

submit.addEventListener("submit", (e) => {
  console.log(password.value);
  console.log(conPwd.value);
  if (password.value == conPwd.value) {
    console.log(" matche");
    show.style.display = "none";
  } else {
    console.log("nahi he matche ");
    e.preventDefault();
    show.style.display = "block";
  }
});

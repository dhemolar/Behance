function openNav() {
  document.getElementById("myNav").style.width = "100%";
  // alert("ukffkfj");
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

// form validation

function validation() {
  var email = document.getElementById("email").value;
  if (email == "") {
    document.getElementById("emailErrorMessage").innerHTML =
      "Whoops, make sure it's an email";
    return false;
  }
  if (email.indexOf("@") <= 0) {
    document.getElementById("emailErrorMessage").innerHTML =
      "** @ Invalid position";
    return false;
  }
}

const navButton = document.querySelector(".nav-container");
const mobileNavigation = document.querySelector(".mobile__nav");
const body = document.querySelector("body");
const overlay = document.querySelector(".overlay");

function showNav() {
  body.classList.toggle("no-scroll");
  mobileNavigation.classList.toggle("show");
  mobileNavigation.classList.toggle("width");
  overlay.classList.toggle("hide");
}
navButton.addEventListener("click", showNav);

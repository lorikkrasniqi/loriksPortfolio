const menuBtn = document.querySelector(".menu-btn");
const hamburger = document.querySelector(".menu-btn__burger");
const nav = document.querySelector(".nav");
const menuNav = document.querySelector(".menu-nav");
const navItems = document.querySelectorAll(".menu-nav__item");
const navLinks = document.querySelectorAll(".menu-nav__link");

let showMenu = false;

menuBtn.addEventListener("click", toggleMenu);

navLinks.forEach((link) => {
  link.addEventListener("click", () => {
    hamburger.classList.remove("open");
    nav.classList.remove("open");
    menuNav.classList.remove("open");
    navItems.forEach((item) => item.classList.remove("open"));
  });
});

function toggleMenu() {
  if (!showMenu) {
    hamburger.classList.add("open");
    nav.classList.add("open");
    menuNav.classList.add("open");
    navItems.forEach((item) => item.classList.add("open"));

    showMenu = true;
  } else {
    hamburger.classList.remove("open");
    nav.classList.remove("open");
    menuNav.classList.remove("open");
    navItems.forEach((item) => item.classList.remove("open"));

    showMenu = false;
  }
}
$(document).ready(function () {
  $("#all-button").click(function () {
    $("#projects__items").load("./partials/project-ajax.php", {
      type: "all",
    });
  });
  $("#java-button").click(function () {
    $("#projects__items").load("./partials/project-ajax.php", {
      type: "java",
    });
  });
  $("#php-button").click(function () {
    $("#projects__items").load("./partials/project-ajax.php", {
      type: "php",
    });
  });

  // $(".editBtn").click(function () {
  //   var id = $(this).attr("data-id");
  //   $.ajax({
  //     url: "edit_statusi.php?id=" + id,
  //     cache: false,
  //     success: function (result) {
  //       $("#modal-content").html(result);
  //     },
  //   });
  // });

  $("#editBtn").click(function () {
    var id = $(this).attr("data-id");
    $("#editContainer").load("../partials/editEducation.php", { id: id });
  });

  $("#editBtnEx").click(function () {
    var id = $(this).attr("data-id");
    $("#editContainer").load("../partials/editExperience.php", { id: id });
  });
});

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function () {
  modal.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};

// Get the modal
var editModal = document.getElementById("editModal");

// Get the button that opens the modal
var editBtn = document.getElementById("editBtn");

// Get the <span> element that closes the modal
var editSpan = document.getElementsByClassName("closeEdit")[0];

// When the user clicks the button, open the modal
editBtn.onclick = function () {
  editModal.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
editSpan.onclick = function () {
  editModal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == editModal) {
    editModal.style.display = "none";
  }
};

// var modalBtns = document.querySelectorAll(".modal-open");

// modalBtns.forEach(function (btn1) {
//   btn1.onclick(function () {
//     var modal1 = btn1.getAttribute("data-modal");
//     document.getElementById(modal1).style.display = "block";
//   });
// });

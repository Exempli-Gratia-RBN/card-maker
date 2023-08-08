$(function () {
  "use strict";
  // button
  $("#btncoming").on("click", function () {
    swal.info("Coming soon!");
  });
  $("#btnLogout").on("click", function () {
    swal.confirm("Are You Sure ? Want to logout ?").then(function (x) {
      if (x.isConfirmed) window.location = "./logout";
    });
  });
});

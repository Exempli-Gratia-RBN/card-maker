var swal = {
  success: function (t) {
    Swal.fire({ title: "Success", text: t, timer: 3000, icon: "success", customClass: { confirmButton: "btn btn-primary" }, buttonsStyling: false });
  },
  check: function (t) {
    Swal.fire({ title: "Checking...", text: "Please wait", timer: 3000, showConfirmButton: false, allowOutsideClick: false });
  },
  info: function (t) {
    Swal.fire({ title: "Information", text: t, timer: 3000, icon: "info", customClass: { confirmButton: "btn btn-primary" }, buttonsStyling: false });
  },
  err: function (t) {
    Swal.fire({ title: "Error!", text: t, timer: 3000, icon: "error", customClass: { confirmButton: "btn btn-primary" }, buttonsStyling: false });
  },
  confirm: function (t) {
    return Swal.fire({
      title: "Confirmation",
      text: t,
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Yes",
      cancelButtonText: "No",
      customClass: { confirmButton: "btn btn-primary", cancelButton: "btn btn-outline-danger ms-1" },
      buttonsStyling: false,
    });
  },
};

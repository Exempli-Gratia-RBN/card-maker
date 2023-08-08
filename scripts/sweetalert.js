$("#confirm").on("click", function () {
  Swal.fire({
    title: "Apakah anda yakin?",
    text: "akan keluar dari layanan ini!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Keluar",
    cancelButtonText: "Batal",
  }).then((result) => {
    if (result.isConfirmed) {
      window.location = "logout.php";
      Swal.fire("Logout!", "Kamu berhasil Logout dari halaman ini", "success");
    }
  });
});
$("#delete").on("click", function () {
  Swal.fire({
    title: "Apakah anda yakin?",
    text: "akan menghapus data ini!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Hapus",
    cancelButtonText: "Batal",
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire("Hapus!", "Kamu berhasil menghapus data", "success");
    }
  });
});

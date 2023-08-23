function editberhasil() {
    swal({
      title: "Edit Berhasil!",
      text: "Data berhasil diubah.",
      icon: "success",
      showConfirmButton: true,
      timer: 1500
    }).then(function() {
      window.location = "../../pages/about/about.php";
    });
  }
  
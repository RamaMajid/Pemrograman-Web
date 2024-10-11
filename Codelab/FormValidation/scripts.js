function validateForm() {
    var nama = document.getElementById("nama").value;
    var alamat = document.getElementById("alamat").value;
    var email = document.getElementById("email").value;

    if (nama == "" || alamat == "" || email == "") {
        alert("Semua field harus diisi!");
        return false;
    } else {
        alert("Form berhasil dikirim!");
        return true;
    }
}

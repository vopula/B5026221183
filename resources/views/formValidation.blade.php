<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="latihanweek5.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Nunito:wght@500&display=swap" rel="stylesheet">
    <title>Tugas Week 5</title>
    <script>
        function validateForm()
        {
            var nrp = document.getElementById("nrp");
        //cek hanya yang invalid
        if ( nrp.value == "") {
            nrp.focus();
            nrp.placeholder = "contoh : 5206100126";
            alert("NRP harus diisi!");
            return false;
        }
// hanya angka tidak boleh huruf
        if (isNan(nrp.value) == true) {
         nrp.focus();
         msg.innerHTML = "NRP harus angka";
         return false;
        }
        if (nrp.value.length != 10){
            alert("NRP harus 10 digit!, Anda Memasukkan " + nrp.value.length + " digit ");
            return false;
        }
        }
    </script>

</head>
<body>
    <div class="container">
<div class="jumbotron">
    Form Validasi ialah mencegah pengiriman data ke server jika ada yang invalid tidak sesai constraint database
</div>
<script>
    function validate()
    {
        console.log("baris 27");
      return false ;
        console.log("baris 29");
      return true ;
        console.log("baris 31");
      return false ;
    }
</script>
<form action="https://www.programiz.com/java-programming/deque" method="get" onsubmit="return validateForm();">
    <div class="form-group">
        <label for="NRP">NRP:</label>
        <input type="text" class="form-control" id="nrp" class="text-danger">
    </div>
    <input type="submit" value="daftar" class="btn btn-primary" >
    <input type="reset" value="ulangi" class="btn btn-warning">
</form>
    </div>
</body>
</html>

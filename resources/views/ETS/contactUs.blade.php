<html>

<head>
    <title>Contact Us</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Montserrat:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="5026221183_CSS.css">
    <script>
        function validateForm() {
            var nama = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var noHp = document.getElementById("noHP").value;
            var kota = document.getElementById("kota").value;
            var emailregex = /@gmail.(com|org)/;
            var namaregex = /([A-Z]|[a-z]){1}/;
            var specialCharRegex = /([!@#$%^&*()_+=[]{}\|'";:<,>.?]|[0-9]){*}/;

            if (nama == "" || email == "" || noHp == "" || kota == "") {
                alert("Mohon isi data dengan penuh");
                return false;
            }

            if (!email.match(emailregex)){
                alert("mohon isi email dengan benar");
                return false;
            }

            if (!nama.match(namaregex) || nama.match(specialCharRegex)){
                alert("Mohon isi nama dengan benar");
                return false;
            }

            if (isNaN(noHp) || noHp.length > 14 || noHp.length <9){
                alert("Mohon isi nomor handphone dengan benar");
                return false;
            }

            if (kota.match(specialCharRegex)){
                alert("Mohon isi nama kota dengan benar");
                return false;
            }

            return true
        }
    </script>
</head>

<body>

    <section class="container-fluid">
        <img class="logo" src="Logo_MNC.png" alt="Logo MNC">
        <nav>
            <ul class="nav_links">
                <li><a href="welcome">Tentang kami</a></li>
                <li><a href="visiMisi">Program</a></li>
                <li><a href="https://www.mncvision.id/payment">Pembayaran online</a></li>
                <li><a href="program">Channel tersedia</a></li>
                <li><a href="special">Promo</a></li>
                <li><a href="contactUs">Contact Us</a></li>
            </ul>
        </nav>
    </section>

    <div class="centerContent">
        <div class="formValid layerSeparator">
            <form action="https://google.com" method="get" onsubmit="return validateForm();">
                <h4>Silahkan Masukkan data diri dibawah ini</h4> <br>
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input class="form-control" type="text" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" id="email">
                </div>
                <div class="form-group">
                    <label for="noHP">Nomor Handphone</label>
                    <input class="form-control" type="text" id="noHP">
                </div>
                <div class="form-group">
                    <label for="kota">Nama Kota</label>
                    <input class="form-control" type="text" id="kota">
                </div>
                <input type="submit" value="Submit" class="btn-primary">
            </form>
        </div>
    </div>
</body>

</html>

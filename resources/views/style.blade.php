<html>
    <head>
        <link rel="stylesheet" href="mystyle.css"> <!--bagian href dapat berbeda dan perlu comment click untuk validasi file kodingan, eksplorasi jenis stylesheet-->
        <!-- div diseluruh halaman ini (universal), dibuat seperti i block -->
        <style>
            div{
                color:green;
                font-weight: bold;
                text-align: justify;
            }
            .judul_halaman {
                text-align: center;
                font-size: x-large;
                color: pink;
            }
            span{
                color:aqua;
            }
        </style>
    </head>

    <body>
        <div class="judul_halaman">Selamat Datang</div>
        <!--Inline CSS digunakan ketika ada spesifik ke 1 bagian saja-->
        <p style=
        "text-decoration: line-through;
        color:red;">
        Hallo apa kabar ?
        </p>
        <!--Inpage CSS digunakan ketika ada yang spesifik ke 1 halaman khusus-->
        <div>Hallo apa Kabar ?</div>
        <!--External CSS digunakan untuk format umum 1 website-->
        <span>Hallo apa Kabar ?</span>
    </body>

</html>

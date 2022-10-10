<html>
    <head>
        <title>Test Penyisipan PHP pada HTML</title>
    </head>
    <body>
        Kapal Asing, Silahkan indentifikasikan diri Anda!<br>
        <?php
        // Berikut ini adalah inisiasi beberapa variabel
            $namad = "Jean";
            $namat = "Luc";
            $namab = "Piccard";
        ?>
        <b>Ini adalah kapal Federasi Planet USS Enterprise.<br>
        <?php  
            print "Saya $namab, $namad $namat $namab, kapten kapal.</b>";
        ?>
    </body>
</html>
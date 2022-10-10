<html>
    <body>
    <?php
       echo "Selamat Datang ".$_GET['nama']."<br>";
    ?>    

    <?= "Alamat: ".$_GET['alamat'] ?>
    <br>
    <?= "Gender: ".$_GET['gender'] ?>
    
    <br>
    Hobi: 
    <ul>
     <?php
        if(isset($_GET['hobi1']))
        echo '<li>'.$_GET['hobi1']."</li>";
        if(isset($_GET['hobi2']))
        echo '<li>'.$_GET['hobi2']."</li>";
        if(isset($_GET['hobi3']))
        echo '<li>'.$_GET['hobi3']."</li>";
        if(isset($_GET['hobi4']))
        echo '<li>'.$_GET['hobi4']."</li>";
    ?>
    </ul>
    </body>
</html>
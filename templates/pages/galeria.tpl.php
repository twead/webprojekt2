<?php
    // Alkalmazás logika:
    include('./includes/config.inc.php');
    $uzenet = array();   

// adatok összegyűjtése:    
    $kepek = array();
    $olvaso = opendir($MAPPA);
    while (($kepfajl = readdir($olvaso)) !== false) {
        if (is_file($MAPPA.$kepfajl)) {
            $vege = strtolower(substr($kepfajl, strlen($kepfajl)-4));
            if (in_array($vege, $TIPUSOK)) {
                $kepek[$kepfajl] = filemtime($MAPPA.$kepfajl);
            }
        }
    }
    closedir($olvaso);

    // Űrlap ellenőrzés:
    if (isset($_POST['kuld'])) {
        foreach($_FILES as $kepfajl) {
            if ($kepfajl['error'] == 4);   // Nem töltött fel fájlt
            elseif (!in_array($kepfajl['type'], $MEDIATIPUSOK))
                $uzenet[] = " Nem megfelelő típus: " . $kepfajl['name'];
            elseif ($kepfajl['error'] == 1   // A fájl túllépi a php.ini -ben megadott maximális méretet
                        or $kepfajl['error'] == 2   // A fájl túllépi a HTML űrlapban megadott maximális méretet
                        or $kepfajl['size'] > $MAXMERET) 
                $uzenet[] = " Túl nagy állomány: " . $kepfajl['name'];
            else {
                $vegsohely = $MAPPA.strtolower($kepfajl['name']);
                if (file_exists($vegsohely))
                    $uzenet[] = " Már létezik: " . $kepfajl['name'];
                else {
                    move_uploaded_file($kepfajl['tmp_name'], $vegsohely);
                    $uzenet[] = " Feltöltve: " . $kepfajl['name'];
                }
            }
        }        
    }


    // Megjelenítés logika:
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Galéria</title>
    
    <style type="text/css">
        label { display: block; }
        
        div#galeria {margin: 0 auto; width: 100%; }
        div.kep { display: inline-block; }
        div.kep img { width: 200px; }
    </style>
    
</head>
    
<body>
    <div class="container" style="margin-top:30px">
    <h1>Feltöltés a galériába:</h1>
    
    
    <div id="galeria" align="center">
    <h1>Galéria</h1>
    <?php
    arsort($kepek);
    foreach($kepek as $kepfajl => $datum)
    {
    ?>
        <div class="kep">
            <a href="<?php echo $MAPPA.$kepfajl ?>">
                <img src="<?php echo $MAPPA.$kepfajl ?>">
            </a>            
            <p>Név:  <?php echo $kepfajl; ?></p>
            <p>Dátum:  <?php echo date($DATUMFORMA, $datum); ?></p>
        </div>
    <?php
    }
    ?>
    </div>
    
    
<?php
    if (!empty($uzenet))
    {
        echo '<ul>';
        foreach($uzenet as $u)
            echo "<li>$u</li>";
        echo '</ul>';
    }
?>
    <form action="?oldal=galeria" method="post"
                enctype="multipart/form-data">
        <label>Fájl:
            <input type="file" name="elso" required>
        </label>     
        <input type="submit" name="kuld" value="Feltölt">
      </form>    
    </div>
</body>
</html>
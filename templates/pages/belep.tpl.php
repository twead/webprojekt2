<?php if(isset($row)) { ?>
    <?php if($row) { ?>
        <h1>Bejelentkezett:<br>
        <?= $row['csaladi_nev']." ".$row['uto_nev']." (".$_SESSION['login'].")" ?>
        </h1>
    <?php } else { ?>
        <h1>A bejelentkezés nem sikerült!</h1>
        <a href="?oldal=belepes" >Próbálja újra!</a>
    <?php } ?>
<?php } ?>
<?php if(isset($errormessage)) { ?>
    <h2><?= $errormessage ?></h2>
<?php } ?>

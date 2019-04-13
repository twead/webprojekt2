<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Magyar Gyermekmentő Alapítvány</title>
	<link rel="stylesheet" href="./styles/style.css" type="text/css">

</head>
<body>
	<header>
		<img src="./images/<?=$fejlec['kepforras']?>" alt="<?=$fejlec['kepalt']?>">
            
                <ul class="topnav" id="dropdownClick">
					<?php foreach ($oldalak as $url => $oldal) { ?>
						<li class="one" <?= (($oldal == $keres) ? ' class="active"' : '') ?>>
						<a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
						<?= $oldal['szoveg'] ?></a>
						</li>
					<?php } ?>
                    
                    <li class="three"><a href="javascript:void(0);" onclick="dropdownMenu()"> &#9776;</a></li>
                    <div class="main">
                        <form action="http://www.google.com/search" method="get">
                            <input type="text" name="q" size="31" maxlength="=255" value="" />
                            <input type="submit" value="Search" />
                        </form>
                    </div>
                </ul>
    
                    <script>
                    function dropdownMenu(){
                        var x =document.getElementById("dropdownClick");
                        if(x.className === "topnav") {
                            x.className += " responsive";
                        } else{
                            x.className = "topnav";
                        }
                    }
                    </script>          
	</header>

        <div id="content">
            <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
        </div>
    
    <footer>
        <?php include("./templates/basics/footer.php"); ?>
    </footer>
</body>
</html>

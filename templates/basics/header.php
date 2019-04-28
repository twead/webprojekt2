<img src="./images/<?=$fejlec['kepforras']?>" alt="<?=$fejlec['kepalt']?>">                

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav" id="dropdownClick">
        <?php foreach ($oldalak as $url => $oldal) { ?>
        <?php if(! isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
      <li class="nav-item">
          <a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>"> <?= $oldal['szoveg'] ?></a>
      </li>
    <?php } ?>
    <?php } ?>
      <li class="nav-item" id="three"><a href="javascript:void(0);" onclick="dropdownMenu()"> &#9776;</a></li>
          </ul>    
    </div>
            <div class="searchbar">
                  <form action="http://www.google.com/search" method="get">
                     <input type="text" name="q" size="31" maxlength="=255" value="" />
                    <input type="submit" value="Search" />
                 </form>
            </div>
</nav>

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
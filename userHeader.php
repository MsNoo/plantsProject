<header>
    <div class="tb">
        <h1 class="titleh1">Invasive Plants Encyclopedia</h1>
        <h2 class="titleh2">These species are not inherently bad. They're just in the wrong place</h2>
    </div>
    <div class="navigationBar">
        <nav>
            <a href="./index.php" class="navBarFonts" style="text-decoration: none;"><b>Home</b></a>
            <a href="./glossary.php" class="navBarFonts " style="text-decoration: none;">Glossary</a>
            <a href="./galleryUser.php" class="navBarFonts" style="text-decoration: none;">Invasive plants</a>
            <a href="./notifyPageForm.php" class="navBarFonts" style="text-decoration: none;">Notify Us</a>
            <a href="./logout.php" class="navBarFonts" style="text-decoration: none;"><b>Logout</b></a>
        </nav>
        <div class="child1">
            <img src="./Images/user.png" alt="iconForSearch" width="27" height="27">
            <a href="" class="navBarFonts" style="text-decoration: none; "><?php echo $_SESSION["name"] ?></a>
        </div>
    </div>
    <div class="quoteFeat">
        <?php
        if (strpos($_SERVER['REQUEST_URI'], 'index.php') !== false) { ?>
            <h2 class="titleh2">Welcome <?php echo $_SESSION["name"] ?></h2>
        <?php } else { ?>
            <h2 class="titleh2">Why do we care? Invasive species are the threat to global biodiversity?</h2>
        <?php
        }
        ?>
    </div>
</header>
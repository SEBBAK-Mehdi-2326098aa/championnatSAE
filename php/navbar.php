<header>
    <!--     le header avec le menu hamburger et le menu deroulant-->
    <button aria-label="Changer de thème" id="changementTheme"></button>

    <nav>
        <ul class="menu">
            <li><a <?php if (isset ($presentation)) {
                    echo "class = 'actual'";
                } ?>href="index.php">Presentation</a></li>
            <li><a <?php if (isset ($departement)) {
                    echo "class = 'actual'";
                } ?> href="Departement.php"> Département</a></li>
            <li><a <?php if (isset ($etudiant)) {
                    echo "class = 'actual'";
                } ?> href="Etudiants.php"> Etudiants</a></li>
            <li><a <?php if (isset ($connexion)) {
                    echo "class = 'actual'";
                } ?> href="connexion.php">Connexion</a></li>
        </ul>
    </nav>
    <img alt="menu déroulant" class=menuHamburger src="https://cdn-icons-png.flaticon.com/512/54/54630.png">
    <ul class="menuDeroulantActif">

            <li><a <?php if (isset ($presentation)) {
                    echo "class = 'actual'";
                } ?>href="index.php">Presentation</a></li>
            <li><a <?php if (isset ($departement)) {
                    echo "class = 'actual'";
                } ?> href="Departement.php"> Département</a></li>
            <li><a <?php if (isset ($etudiant)) {
                    echo "class = 'actual'";
                } ?> href="Etudiants.php"> Etudiants</a></li>
            <li><a <?php if (isset ($connexion)) {
                    echo "class = 'actual'";
                } ?> href="connexion.php">Connexion</a></li>

    </ul>
    <img alt="logo Aix en provence" class="logo" src=../assets/logo_iut.png>

</header>


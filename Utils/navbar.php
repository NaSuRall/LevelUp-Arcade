<?php
session_start();
?>
<nav>
    <h1>LevelUP Arcade</h1>
    <div class="onglets">
        <a href="">Accueil</a>
        <a href="">Jeu</a>
        <a href="">Contact</a>

        <?php
                if (isset($_SESSION['user_id'])) {
                    echo '<a href=>My Account</a>';
                    echo '
                        <a href="logout.php">Déconnexion</a>
                         ';
                }else
                {
                    echo '<a href="../../LevelUp-Arcade/login.php">Login</a>';
                }
        ?>


    </div>
</nav>

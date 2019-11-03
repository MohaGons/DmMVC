<nav>
    <div>
        <div>
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
            </ul>

            <?php
            if(isset($_SESSION['username'])){
                ?>
                <button type="submit">
                    <a href="index.php?action=logout">Se déconnecter</a>
                </button>
                <?php
            }
            else{
                ?>
                <li><a href="index.php?action=createAccount">
                        <button type="button">Create account</button>
                    </a></li>

                <li><a href="index.php?action=connexion">
                        <button type="button">Connexion</button>
                    </a></li>

                <?php
            }
            ?>
            </ul>
        </div>
    </div>
</nav>
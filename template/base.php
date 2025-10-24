
<!DOCTYPE html>
<html lang="it">
<!-- Ricorda: html non lo usiamo per presentare (estetica) ma solo per dare la struttura del contenuto -->
<head>
    <title><?php echo $templateParams["titolo"]; ?></title>
    <link rel="stylesheet" href="./css/style.css" />
    <!-- meta tag per il responsive design, in particolare =1 significa che il contenuto si adatta alla larghezza del dispositivo e parte al 100% (molto utile per dispositivi come tablet)-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
    <header>
        <h1>Blog di Tecnologie Web</h1>
    </header>

    <nav>
        <!-- La lista ci permette di mantenere gli elementi coerenti tra di loro quando li impaginiamo (cosi non rimangono da soli floating) -->
        <ul>
            <!-- shortcut: li*4>a -->
            <!-- # puo essere usato per self-reference e per puntare a una sezione specifica-->
            <!-- modifica per il css: tolgo le andate a capo se no la proprieta "inline" mi aggiunge uno spazio tra i list items-->
            <li><a href="#">Home</a></li><li><a href="#">Archivio</a></li><li><a href="#">Contatti</a></li><li><a href="#">Login</a></li>
        </ul>
    </nav>

    <!-- Usiamo main poiche tra una pagina e l'altra del sito cambia solo il contenuto dentro questo contenitore-->
    <main>
        <?php
            require_once($templateParams["nome"]);
        ?>
    </main><!-- Non nel senso che sta di fianco ma nel senso che non e' il contenuto principale della pagina--><aside>
        <!-- aside e main sono sullo stesso livello, quindi posso usare h2 senza problemi-->
        <section>
            <h2>Post Casuali</h2>
            <ul>
                <?php foreach($templateParams["articolicasuali"] as $articolocasuale): ?>
                <li>
                    <img src="<?php echo UPLOAD_DIR.$articolocasuale["imgarticolo"] // Concatena la costante upload_dir con il nome del file?>" alt=""/>
                    <a href="#"><?php echo $articolocasuale["titoloarticolo"]?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section>
            <h2>Categorie</h2>
            <ul>
                <?php foreach($templateParams["categorie"] as $categoria): ?>
                <li><a href="#"><?php echo $categoria["nomecategoria"] ?></a></li>
                <?php endforeach; ?>
            </ul>
        </section>
    </aside>

    <footer>
        <p>Tecnologie Web - A.A. 2025/2026</p>
    </footer>
</body>
</html>
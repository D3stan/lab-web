
<!DOCTYPE html>
<html lang="it">
<!-- Ricorda: html non lo usiamo per presentare (estetica) ma solo per dare la struttura del contenuto -->
<head>
    <title>Home | Blog TW</title>
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
        <h2>Ultimi Articoli</h2>
        <article>
            <!-- lasciamo l'alt vuoto poiche riteniamo l'immagine decorativa-->
            <img src="./img/html5-js-css3.png" alt=""/> <!-- ricordarsi di mettere sempre "/" in chiusura di un empty tag per essere xml compliant-->
            <h3>Intro alle Tecnologie Web Client Side</h3>
            <p>3 Ottobre 2025 - Gino Pino</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae consectetur voluptate doloribus inventore velit, harum quisquam. Quaerat temporibus placeat commodi optio et, porro cumque nulla labore repellendus magnam recusandae fugiat?</p>
            <a href="#">Leggi tutto</a>
        </article>

        <!-- per ora duplichiamo il codice, quando useremo PHP useremo lui per rimepire i dati e generare dinamicamente il contenuto e il numero di articoli-->
        <article>
            <img src="./img/php.png" alt=""/>
            <h3>Intro alle Tecnologie Web Server Side</h3>
            <p>3 Ottobre 2025 - Cippa Lippa</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae consectetur voluptate doloribus inventore velit, harum quisquam. Quaerat temporibus placeat commodi optio et, porro cumque nulla labore repellendus magnam recusandae fugiat?</p>
            <a href="#">Leggi tutto</a>
        </article>
    </main><!-- Non nel senso che sta di fianco ma nel senso che non e' il contenuto principale della pagina--><aside>
        <!-- aside e main sono sullo stesso livello, quindi posso usare h2 senza problemi-->
        <section>
            <h2>Post Popolari</h2>
            <ul>
                <li>
                    <img src="./img/html5-js-css3.png" alt=""/>
                    <a href="#">Intro alle Tecnologie Web Client Side</a>
                </li>
                <li>
                    <img src="./img/php.png" alt=""/>
                    <a href="#">Intro alle Tecnologie Web Server Side</a>
                </li>
            </ul>
        </section>

        <section>
            <h2>Categorie</h2>
            <ul>
                <li><a href="#">HTML</a></li>
                <li><a href="#">CSS</a></li>
                <li><a href="#">PHP</a></li>
                <li><a href="#">Javascript</a></li>
                <li><a href="#">JQuery</a></li>
                <li><a href="#">Apache</a></li>
            </ul>
        </section>
    </aside>

    <footer>
        <p>Tecnologie Web - A.A. 2025/2026</p>
    </footer>
</body>
</html>
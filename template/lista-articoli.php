
        <h2>Ultimi Articoli</h2>
        <?php foreach($templateParams["articoli"] as $articolo): ?>
        <article>
            <!-- lasciamo l'alt vuoto poiche riteniamo l'immagine decorativa-->
            <img src="./img/html5-js-css3.png" alt=""/> <!-- ricordarsi di mettere sempre "/" in chiusura di un empty tag per essere xml compliant-->
            <h3><?php</h3>
            <p>3 Ottobre 2025 - Gino Pino</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae consectetur voluptate doloribus inventore velit, harum quisquam. Quaerat temporibus placeat commodi optio et, porro cumque nulla labore repellendus magnam recusandae fugiat?</p>
            <a href="#">Leggi tutto</a>
        </article>
        <?php endforeach; ?>
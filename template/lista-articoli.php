
        <h2>Ultimi Articoli</h2>
        <?php foreach($templateParams["articoli"] as $articolo): ?>
        <article>
            <!-- lasciamo l'alt vuoto poiche riteniamo l'immagine decorativa-->
            <img src="<?php echo UPLOAD_DIR.$articolo["imgarticolo"]; ?>" alt=""/> <!-- ricordarsi di mettere sempre "/" in chiusura di un empty tag per essere xml compliant-->
            <h3><?php echo $articolo["titoloarticolo"]; ?></h3>
            <p><?php echo $articolo["dataarticolo"]; ?> - <?php echo $articolo["nome"]; ?></p>
            <p><?php echo $articolo["anteprimaarticolo"]; ?></p>
            <a href="#">Leggi tutto</a>
        </article>
        <?php endforeach; ?>
        <h2>Autori del Blog</h2>
        <section>
            <table>
                <tr>
                    <!-- instestazioni-->
                    <th id="autore">Autore</th>
                    <th id="email">Email</th>
                    <th id="argomenti">Argomenti</th>
                </tr>
                <?php foreach($templateParams["autori"] as $authors): ?>
                    <tr>
                        <th id="<?php echo getIdFromName($authors["nome"]); ?>"><?php echo $authors["nome"]; ?></th>
                        <td headers="email"><?php echo $authors["username"]; ?></td>
                        <td headers="argomenti"><?php echo $authors["argomenti"]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </section>
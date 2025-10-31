<?php
    class DatabaseHelper {
        private $db;

        public function __construct($servername, $username, $password, $dbname, $port) {
            $this->db = new mysqli($servername, $username, $password, $dbname, $port);
            if ($this->db->connect_error) {
                die("Connessione fallita al db");
            }
        }

        private function fetch($stmt) {
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_all(MYSQLI_ASSOC);
        }

        /* Chiamo al plurale metodi che restituiscono molteplici dati e viceversa */
        public function getRandomPosts($n = 2) {
            $stmt = $this->db->prepare("SELECT idarticolo, titoloarticolo, imgarticolo FROM articolo ORDER BY RAND() LIMIT ?");
            $stmt->bind_param("i", $n); /* con i si intende che il tipo di variabile e' intero */
            
            $stmt->execute();
            $result = $stmt->get_result(); /* abbiamo solo un riferimento al risultato, per i risultati ci serve usare fetch */
            
            return $result->fetch_all(MYSQLI_ASSOC); /* accetta un parametro che indica come deve essere impostato il parametro (array di array, key value, etc) */
        }

        public function getCategories() {
            $stmt = $this->db->prepare("SELECT idcategoria, nomecategoria FROM categoria");
            return $this->fetch($stmt);
        }

        public function getPosts($n = -1) {
            $query = "SELECT idarticolo, titoloarticolo, imgarticolo, anteprimaarticolo, dataarticolo, nome FROM articolo, autore WHERE autore=idautore ORDER BY dataarticolo DESC";
            if ($n > 0) {
                $query .= " LIMIT ?"; 
            }
            
            $stmt = $this->db->prepare($query);

            if ($n > 0) {
                $stmt->bind_param("i", $n);
            }

            return $this->fetch($stmt);
        }

        public function getAuthors() {
            $query = "SELECT username, nome, GROUP_CONCAT(DISTINCT nomecategoria) as argomenti
                      FROM categoria, articolo, autore, articolo_ha_categoria
                      WHERE idarticolo=articolo
                      AND categoria=idcategoria
                      AND autore=idautore
                      AND attivo=1
                      GROUP BY username, nome";
            
            $stmt = $this->db->prepare($query);
            return $this->fetch($stmt);
        }

        public function getArticles() {
            $query = "SELECT a.idarticolo, a.titoloarticolo, a.testoarticolo, a.dataarticolo, a.anteprimaarticolo, a.imgarticolo, au.nome
                      FROM articolo a, autore au
                      WHERE a.autore = au.idautore";

            $stmt = $this->db->prepare($query);
            return $this->fetch($stmt);
        }

    }
?>
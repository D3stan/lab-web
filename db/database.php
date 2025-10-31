<?php
    class DatabaseHelper {
        private $db;

        public function __construct($servername, $username, $password, $dbname, $port) {
            $this->db = new mysqli($servername, $username, $password, $dbname, $port);
            if ($this->db->connect_error) {
                die("Connessione fallita al db");
            }
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
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_all(MYSQLI_ASSOC);
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
        }
    }
?>
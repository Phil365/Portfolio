<?php

/**
 * @file article.php
 * @brief classe Article
 * @author 
 * @version 1.0.0
 */

class Texte {

    /**
     * @var int autoincrement identifiant automatique d'un article
     */
    public $id_txt;

    /**
     * @var string titre de l'article
    */
    public $texte_fr;
    
    /**
     * @var string résumé de l'article
     */
    public $texte_en;
   
    /**
     * @var BaseDeDonnee objet base de données qui permet la connexion
     */
    static $database;




     /*
     * @brief Constructeur de la classe Article
     * @param string $titreArticle
     * @param string $resumeArticle
     * @param string $contenuArticle
     * @param string $dateArticle
     */
    public function __construct($id_txt, $texte_fr, $texte_en) {
        if (!isset(self::$database)){
            self::$database = new BaseDeDonnees();
        }
        $this->id_txt = $id_txt;
        $this->texte_fr = $texte_fr;
        $this->texte_en = $texte_en;
    }

       
     /**
     * @return Array tableau contenant la liste de tous les articles
     */
    public static function listerTousArticles($idtexte) {
        self::$database->query('SELECT * FROM texte  WHERE  id_txt =:idtexte ORDER BY id_txt DESC');
        self::$database->bind(':idtexte', $idtexte);
        $lignes = self::$database->resultset();
        foreach ($lignes as $ligne){
            $unArticle = new Texte($ligne['id_txt'],$ligne['texte_fr'], $ligne['texte_en']);
            $articles[] = $unArticle;
        }
        return $articles;
    }


   

     /**
     * @brief méthode qui affiche un objet produit
     */
    public function afficher() {
             echo "<article>";
             echo "<p>".$this->texte_fr."</p>"; 
             
             
             echo "</article>";
       
    }
 
     public static function affichemodifarticle($idArt)
    {   self::$database->query(" SELECT * FROM articles  WHERE  id_art= :idarticle");
        self::$database->bind(':idarticle', $idArt);
        $ligne = self::$database->uneLigne();
        return $ligne;        
    }
 
}


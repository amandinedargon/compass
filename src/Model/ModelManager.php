<?php
/**
 * Created by PhpStorm.
 * User: Florian
 * Date: 08/11/17
 * Time: 14:51
 */

namespace compass\Model;
use compass\Services\GoogleServices;


class ModelManager
{

    /**
     * Récupère toutes les citations de la base
     * @return [array] Tableau de citations
     */
    public function getallCitations()
    {
        // Récuperation de la connection à la base de donnée
        // Rappel: pour récupérer une variable défini en dehors de la fonction, on préfixera la variable par "global"
        global $bdd;

        // Requete qui récupère toutes les citations
        $req = mysqli_query($bdd, 'SELECT * FROM citation');

        // Traitement du resultat retourné par la requete
        $citations = mysqli_fetch_all($req, MYSQLI_ASSOC);

        // Renvoie du tableau contenant toutes les citations
        return $citations;
    }

    /**
     * Permet d'ajouter une citation
     * @param [string] $author Auteur de la citation
     * @param [string] $chapter Chapitre de la citation
     * @param [string] $content Contenu de la citation
     * @param [string] $date Date de la citation
     * @param [string] $image Image de la citation
     */
    public function addCitation($author, $chapter, $content, $date, $image){
        // Récuperation de la connection à la base de donnée
        // Rappel: pour récupérer une variable défini en dehors de la fonction, on préfixera la variable par "global"
        global $bdd;

        // Requete d'ajout en base de donnée
        mysqli_query($bdd, "INSERT INTO citation (author, chapter, content, date, image) VALUES ('$author', '$chapter', '$content', '$date', '$image')");
    }


}

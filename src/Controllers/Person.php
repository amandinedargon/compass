<?php
/**
 * Created by PhpStorm.
 * User: LN-T
 * Date: 10/11/2017
 * Time: 09:46
 */

namespace compass\Controllers;
use Datetime;

class person {

    private $content;
    private $author;
    private $chapter;
    private $date;
    private $url;

    /**
     * person constructor.
     * @param $lastName
     * @param $firstName
     * @param $email
     * @param $birthDate
     */
    public function __construct($content, $author, $chapter, $url, $date) {
        $this->content = $content;
        $this->author = $author;
        $this->chapter = $chapter;
        $this->date = $date;
        $this->email= $url;
    }

    public function birthday() {
        $date = new DateTime(date($this->date));
        $now = new DateTime();
        if ($now->format('m-d')==($date->format('m-d'))){
            echo "Happy Birthday";
        } else {
            echo "Rien";
        }
    }

}
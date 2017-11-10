<?php
/**
 * Created by PhpStorm.
 * User: LN-T
 * Date: 10/11/2017
 * Time: 02:54
 */

namespace compass\Services;
use GuzzleHttp\Client;

class GoogleServices
{
    public function convertzipcode($chapter){

        $url = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . $chapter . '&key=AIzaSyB9ulPJnt5zY7ad0R2D9CCvEywbIoxWtTM';

        $client = new Client();
        $google = $client->request("GET", $url);
        $google = json_decode($google->getBody()->getContents());
        // Traitement du resultat retourné par la requete

        // Renvoie du tableau contenant toutes les citations
        $chapter_converted['lat'] = $google->results[0]->geometry->location->lat;
        $chapter_converted['lng'] = $google->results[0]->geometry->location->lng;
        $chapter_converted = '{lat: ' . $chapter_converted['lat'] . ', lng: ' . $chapter_converted['lng'] . '}';
        return $chapter_converted;
    }

}
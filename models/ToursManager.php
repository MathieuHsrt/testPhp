<?php

require_once './models/DBConnexion.php';
require_once './models/Tours.php';

class ToursManager extends DBConnexion {

    public function getTours(){
        $req = $this->getBdd()->prepare("SELECT * FROM tour");
        $req->execute();
        $tours = $req->fetchAll(PDO::FETCH_CLASS, 'Tours');
        $req->closeCursor();

        return $tours;
    }

    public function getToursBySlug($slug){
       
        $req = $this->getBdd()->prepare("SELECT * FROM tour WHERE slug = :slug");
        $req->execute([
            'slug' => $slug
        ]);
        $tour = $req->fetchObject('Tours');
      
        $req->closeCursor();

        return $tour;
    }
}
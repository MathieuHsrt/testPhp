<?php

require_once 'models/ToursManager.php';

class ToursController {
   
   public function getTours()
   {
         $toursM = new ToursManager();
         $tours = $toursM->getTours();

         require 'views/toursList.php';

   }

   public function getToursBySlug($params)
   {
         $toursM = new ToursManager();
         $tour = $toursM->getToursBySlug($params['slug']);

         require 'views/tour.php';

   }


}
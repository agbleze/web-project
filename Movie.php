<?php 
    class Movie{
        // Add class members here
        private $id;
        private $title;
        public $rentalPrice;

        const DISCOUNT = 10;

        public function _construct($pId, $pTitle, $pRentalPrice) {
            $this->id = $pId;
            $this->title = $pTitle;
            $this->rentalPrice = $pRentalPrice;
        }

        public function conversion($country) {
            $rate = 1;
            switch($country) {
                case 'UK':
                    $rate = 0.76;
                    break;
                case 'Japan':
                    $rate = 110;
                    break;
            }

            return round($rate*$this->rentalPrice, 2);
        }

        public function displayHeading($tag) {
            if (substr($this->id, 0, 1) == "N") 
                return "<$tag>Movies</$tag>";
            else
                return "<$tag>Award Winning Movies </$tag>";
            
        }

        public function _get($propertyRequested) {
            if ($propertyRequested == 'id') 
                return 'You do not have permission to access id. <BR>';
            else
                return $this->$propertyRequested;
        }

        public function _set($propertyToModify, $value) {
            if ($propertyToModify == 'rentalPrice' && $value > $this->rentalPrice)
                $this->rentalPrice = $value;
            else
                echo 'Failed to modify' . $properToModify . '<BR>';
        }

        public function _toString() {
            return
            'Discount = '.self::DISCOUNT .'%'.
            '<BR>Id = '.$this->id.
            '<BR>Title = '.$this->title.
            '<BR>Rental Price (USD) = '.$this->rentalPrice;
        }
    }

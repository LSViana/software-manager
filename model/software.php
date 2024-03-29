<?php
    class Software {
        private $id;
        private $color;
        private $name;
        private $logo;
        private $description;
    
        public function __construct($id, $color, $name, $logo, $description){
            $this->id = $id;
            $this->color = $color;
            $this->name = $name;
            $this->logo = $logo;
            $this->description = $description;
        }
    
        public function getColor()
        {
            return $this->color;
        }
    
        public function setColor($color)
        {
            $this->color = $color;
        }
    
        public function getName()
        {
            return $this->name;
        }
    
        public function setName($name)
        {
            $this->name = $name;
        }
    
        public function getLogo()
        {
            return $this->logo;
        }
    
        public function setLogo($logo)
        {
            $this->logo = $logo;
        }
    
        public function getDescription()
        {
            return $this->description;
        }
    
        public function setDescription($description)
        {
            $this->description = $description;
        }
    
        public function getId()
        {
            return $this->id;
        }
    
        public function setId($id)
        {
            $this->id = $id;
        }
    }
?>
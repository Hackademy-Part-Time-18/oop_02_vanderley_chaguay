<?php
class Animal
{
    public function __construct(){
        $this->PrintAnimalType();
    }

    protected function PrintAnimalType(){
        echo "sono un animale\n";
    }
}

class Vertebrates extends Animal{
    protected function PrintAnimalType()
    {
        parent::PrintAnimalType();
        echo "sono un vertebrado\n";
    }
}

class WarmBlooded extends Vertebrates{
    protected function PrintAnimalType()
    {
        parent::PrintAnimalType();
        echo "Di sangue calda\n";
    }
}

class ColdBlooded extends Vertebrates{
    protected function PrintAnimalType()
    {
        parent::PrintAnimalType();
        echo "Di sangue fredda\n";
    }
}

class Mammals extends WarmBlooded{
    protected function PrintAnimalType()
    {
        parent::PrintAnimalType();
        echo "mammifero\n";
    }
}

class Bird extends WarmBlooded{
    protected function PrintAnimalType()
    {
        parent::PrintAnimalType();
        echo "uccello\n";
    }
}

class Fish extends ColdBlooded{
    protected function PrintAnimalType()
    {
        parent::PrintAnimalType();
        echo "sono un pesce\n";
    }
}

class Reptiles extends ColdBlooded{
    protected function PrintAnimalType()
    {
        parent::PrintAnimalType();
        echo "sono un reptile\n";
    }
}

class Amphibian extends ColdBlooded{
    protected function PrintAnimalType()
    {
        parent::PrintAnimalType();
        echo "sono un amphibio\n";
    }
}


$magikard = new Fish();
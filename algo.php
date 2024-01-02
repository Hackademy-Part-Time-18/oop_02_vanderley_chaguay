<?php
class Continent {
    public $namecontinent;

    public function __construct($namecontinent)
    {
        $this->namecontinent = $namecontinent;
    }
}

class Country extends Continent {
    public $namecountry;

    public function __construct($namecontinent, $namecountry)
    {
        parent::__construct($namecontinent);
        $this->namecountry = $namecountry;
    }
}

class Region extends Country {
    public $nameregion;

    public function __construct($namecontinent, $namecountry, $nameregion)
    {
        parent::__construct($namecontinent, $namecountry);
        $this->nameregion = $nameregion;
    }
}

class Provency extends Region {
    public $nameprovency;

    public function __construct($namecontinent, $namecountry, $nameregion, $nameprovency)
    {
        parent::__construct($namecontinent, $namecountry, $nameregion);
        $this->nameprovency = $nameprovency;
    }
}

class City extends Provency {
    public $namecity;

    public function __construct($namecontinent, $namecountry, $nameregion, $nameprovency, $namecity)
    {
        parent::__construct($namecontinent, $namecountry, $nameregion, $nameprovency);
        $this->namecity = $namecity;
    }
}

class Street extends City {
    public $namestreet;

    public function __construct($namecontinent, $namecountry, $nameregion, $nameprovency, $namecity, $namestreet)
    {
        parent::__construct($namecontinent, $namecountry, $nameregion, $nameprovency, $namecity);
        $this->namestreet = $namestreet;
    }
    public function __toString()
    {
        return "{$this->namecontinent}, {$this->namecountry}, {$this->nameregion}, {$this->nameprovency}, {$this->namecity}, {$this->namestreet}";
    }
}

$mylocation = new Street("sudamerica", "ecuador", "costa", "guayaquil", "guayas", "24 y la p");
echo "mi trovo in ",$mylocation;



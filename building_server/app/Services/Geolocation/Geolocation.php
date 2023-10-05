<?php

namespace App\Services\Geolocation;
use App\Servies\Satellite\Satellite;
use App\Services\Map\Map;

class Geolocation{

    private $map;
    private $satellite;
    public function __construct(Map $map, Satellite $satellite){
        $this->map = $map;
        $this->satellite = $satellite;
    }

    public function search(string $val){
        $locInfo = $this->map->findAddress($val);
        return $this->satellite->pinpoint($locInfo);
    }
}

?>
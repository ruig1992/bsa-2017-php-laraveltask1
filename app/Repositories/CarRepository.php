<?php

namespace App\Repositories;

use App\Repositories\Contracts\Repository;

class CarRepository implements Repository
{
    public function all()
    {
        return [
            [
                'model' => 'BMW 1 Series 3-door',
                'image' => 'https://www.bmw.ua/content/dam/bmw/common/all-models/2-series/coupe/2013/model-card/BMW-2-Series-Coup%C3%A9_ModelCard.png'
            ],
            [
                'model' => 'BMW M140i 3-door',
                'image' => 'https://www.bmw.com/content/dam/bmw/common/all-models/1-series/3-door/2017/navigation/bmw-mperformance-m140i-3-door-flyout-890x501.png'
            ],
            [
                'model' => 'BMW 1 Series 5-door',
                'image' => 'https://www.bmw.com/content/dam/bmw/common/all-models/1-series/5-door/2017/navigation/BMW-1-Series%205-door_Modelcard.png'
            ],
            [
                'model' => 'BMW 2 Series Coupé',
                'image' => 'https://www.bmw.com/content/dam/bmw/common/all-models/2-series/coupe/2017/navigation/bmw-2-series-coupe-stage2-890x501.png'
            ],
            [
                'model' => 'BMW 2 Series Convertible',
                'image' => 'https://www.bmw.com/content/dam/bmw/common/all-models/2-series/convertible/2017/navigation/BMW-2series-cabrio-modelfinder-stage2-890x501-01.png'
            ]
        ];
    }
}
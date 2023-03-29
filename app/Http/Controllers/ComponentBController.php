<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentBController extends Controller
{
    public function loadData()
    {
        $uoms = collect([
            [
                'label' => 'SHP',
                'value' => 'shp',
            ],
            [
                'label' => 'Meter',
                'value' => 'm',
            ],
            [
                'label' => 'Kg',
                'value' => 'kg',
            ],
        ]);

        $currencies = collect([
            [
                'label' => 'AED',
                'value' => 'aed',
            ],
            [
                'label' => 'USD',
                'value' => 'usd',
            ],
            [
                'label' => 'IDR',
                'value' => 'idr',
            ],
        ]);

        $chargeTo = collect([
            [
                'label' => 'CS 1',
                'value' => 1,
            ],
            [
                'label' => 'CS 2',
                'value' => 2,
            ],
            [
                'label' => 'CS 3',
                'value' => 3,
            ],
        ]);

        $data = collect([
            'uoms' => $uoms,
            'currencies' => $currencies,
            'chargeTo' => $chargeTo
        ]);

        return $data->toJson(JSON_NUMERIC_CHECK);
    }
}

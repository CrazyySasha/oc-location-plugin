<?php

namespace Crazy\Location\Api;

use Crazy\Location\Models\Location;
use Illuminate\Routing\Controller;

class Locations extends Controller
{

    public function get()
    {
        return response()->json([
            'data' => \Crazy\Location\Models\Location::getNested()->values(),
        ]);
    }


    // public function create()
    // {
    //     $data = \Input::only('name', 'translations', 'parent_id');

    //     $location = new Location;

    //     $location->name = $data['name'];

    //     foreach ($data['translations'] as $locale => $translated) {
    //         $location->setAttributeTranslated('name', $translated, $locale);
    //     }
    //     $location->parent_id = array_get($data, 'parent_id', null);
    //     $location->save();

    //     return response()->json($location);
    // }
}

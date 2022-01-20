<?php

namespace Crazy\Location\Api;

use Illuminate\Routing\Controller;

class Locations extends Controller
{

    public function get()
    {
        return response()->json(\Crazy\Location\Models\Location::getNested()->values());
    }

}

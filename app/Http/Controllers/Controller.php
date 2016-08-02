<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    //
    public $layout;
    public $prefix;
     
    
    public function view($view, $data = []) {
        return view($this->layout, [
            'view' => $this->prefix.'.'.$view,
            'data' => $data
        ]);     
    }
}

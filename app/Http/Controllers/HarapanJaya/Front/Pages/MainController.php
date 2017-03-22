<?php

namespace App\Http\Controllers\HarapanJaya\Front\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Services\Api\Response as ResponseService;

class MainController extends BaseController
{
	

	public function index(Request $request)
	{
		$blade = self::URL_BLADE_SITE. '.main';
        
        if(view()->exists($blade)) {
        
            return view($blade);

        }

        return abort(404);
	}
}
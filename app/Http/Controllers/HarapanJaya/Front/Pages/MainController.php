<?php

namespace App\Http\Controllers\HarapanJaya\Front\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Services\Bridge\Pasien as PasienService;
use App\Services\Api\Response as ResponseService;

class MainController extends BaseController
{
	
	protected $pasien;
	protected $response;

	public function __construct(PasienService $pasien, ResponseService $response)
	{

    	$this->pasien = $pasien;
    	$this->response = $response;
	}

	public function index(Request $request)
	{
		$blade = self::URL_BLADE_SITE. '.pasien';
        
        if(view()->exists($blade)) {
        
            return view($blade);

        }

        return abort(404);
	}

	public function getData(Request $request)
	{
		$data['pasien'] = $this->pasien->getDataPasien();

		return $this->response->setResponse(trans('success_get_data'), true, $data);
	}
}
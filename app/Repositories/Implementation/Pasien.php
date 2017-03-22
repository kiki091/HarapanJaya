<?php

namespace App\Repositories\Implementation;

use App\Repositories\Contracts\Pasien as PasienInterface;
use App\Repositories\Implementation\BaseImplementation;
use App\Models\Pasien as PasienServices;
use App\Services\Transformation\Pasien as PasienTransformation;
use Cache;
use Session;
use DB;

class Pasien extends BaseImplementation implements PasienInterface
{
	protected $pasien;
    protected $pasienTransformation;

    function __construct(PasienServices $pasien, PasienTransformation $pasienTransformation)
    {

    	$this->pasien = $pasien;
    	$this->pasienTransformation = $pasienTransformation;
    }

    public function getDataPasien()
    {

        $pasienData = $this->pasien();

        return $this->pasienTransformation->getPasienTransform($pasienData);
    }

    /**
     * Get All Data 
     * Warning: this function doesn't redis cache
     * @param array $params
     * @return array
     */
    protected function pasien($params = array(), $orderType = 'asc', $returnType = 'array', $returnSingle = false)
    {
        $pasien = $this->pasien;

        if(!$pasien->count())
            return array();

        switch ($returnType) {
            case 'array':
                if(!$returnSingle) 
                {
                    return $pasien->get()->toArray();
                } 
                else 
                {
                    return $pasien->first()->toArray();
                }

            break;
        }
    }
}
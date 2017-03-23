<?php

namespace App\Services\Bridge;

use App\Repositories\Contracts\Pasien as PasienInterface;

class Pasien
{
	protected $pasien;

    public function __construct(PasienInterface $pasien)
    {
        $this->pasien = $pasien;
    }

    /**
     * Get Data Pasien
     * @param $params
     * @return mixed
     */
    public function getDataPasien()
    {
        return $this->pasien->getDataPasien();
    }
}
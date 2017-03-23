<?php

namespace App\Services\Transformation;
 
class Pasien
{
	/**
     * Get Category Overview Transformation
     * @param $data
     * @return array
     */
    public function getPasienTransform($data)
    {
        if(!is_array($data) || empty($data))
            return array();

        return $this->setPasienTransform($data);
    }

    protected function setPasienTransform($data)
    {
    	if(!is_array($data) || empty($data))
            return array();

        $dataTransform =  array_map(function($data)
        {
            return [
                'id'                => isset($data['id']) ? $data['id'] : '',
                'no_rim'            => isset($data['no_rim']) ? $data['no_rim'] : '',
                'no_kk'             => isset($data['no_kk']) ? $data['no_kk'] : '',
                'no_ktp'            => isset($data['no_ktp']) ? $data['no_ktp'] : '',
                'nama_pasien'       => isset($data['nama_lengkap']) ? $data['nama_lengkap'] : '',
            ];
        }, $data);
        
        return $dataTransform;
    }

}
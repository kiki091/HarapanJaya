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
                'id' => isset($data['id']) ? $data['id'] : '',
                'nama_pasien' => isset($data['nama_lengkap']) ? $data['nama_lengkap'] : ''
            ];
        }, $data);
        
        return $dataTransform;
    }

}
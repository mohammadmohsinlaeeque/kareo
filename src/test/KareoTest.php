<?php

use PHPUnit\Framework\TestCase;
use Mohammadmohsinlaeeque\Kareo\Kareo;

class SweetAlertNotifierTest extends TestCase
{

    public function getPatients()
    {
        $kareo    = new Kareo();
        $kareo->setFilters([
            'PracticeName' => 'American Surgery Associates'
        ]);
        $kareo->setFieldsFilters([
            'ID',
            'PracticeName',
            'PatientFullName'
        ]);
        $response = $kareo->GetPatients();
        return $response;
    }

}

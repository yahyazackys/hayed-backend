<?php

namespace App\Services;

use App\Models\Service;

class ServiceService
{
    public function getAllService()
    {
        return Service::all();
    }

    public function getServiceById($id)
    {
        return Service::find($id);
    }
}

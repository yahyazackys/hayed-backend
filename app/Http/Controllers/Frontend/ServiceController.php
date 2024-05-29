<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function show($id)
    {
        $service = Service::find($id);

        if (!$service) {
            abort(404, 'Service not found');
        }

        return view('frontend.service.service', compact('service'));
    }
}

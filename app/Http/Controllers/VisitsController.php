<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Http\Request;

class VisitsController extends Controller
{

    public function __construct(Visit $visit)
    {   
        $this->visit = $visit;
    }

    public function index()
    {
        
    }
}

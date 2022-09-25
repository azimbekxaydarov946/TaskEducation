<?php

namespace App\Http\Controllers;

use App\Services\ReportService;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    protected $service;
    public function __construct(ReportService $service)
    {
        $this->service = $service;
    }
    public function index()
    {
      return  response()->json(['data'=>$this->service->getIndex()],201);
    }
}

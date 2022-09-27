<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    use ApiControllerTrait;

    protected $model;
    protected $relationships;

    public function __construct(Report $model)
    {
        $this->model = $model;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Risk;
use Illuminate\Http\Request;

class RisksController extends Controller
{
    use ApiControllerTrait;

    protected $model;
    protected $relationships = [];

    public function __construct(Risk $model)
    {
        $this->model = $model;
    }
}

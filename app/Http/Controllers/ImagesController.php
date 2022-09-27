<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    use ApiControllerTrait;

    protected $model;
    protected $relationships = [];

    public function __construct(Image $model)
    {
        $this->model = $model;
    }
}

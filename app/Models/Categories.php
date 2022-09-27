<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable;

class Categories extends Model
{
    use HasFactory, Auditable, SoftDeletes;

    protected $dates = [
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    protected $fillable = [
        "description"
    ];

    public function images()
    {
        return $this->belongsToMany(Image::class, 'categories_images', 'category_id', 'image_id');
    }

    public function reports()
    {
        return $this->belongsToMany(Report::class, 'categories_reports', 'category_id', 'report_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable;

class Image extends Model
{
    use HasFactory, Auditable, SoftDeletes;

    protected $dates = [
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    protected $fillable = [
        "original_name",
        "path_name",
        "mime_type",
        "size",
        "comments",
        "risk_id",
        "latitude",
        "longitude"
    ];

    public function categories()
    {
        return $this->belongsToMany(Categories::class, 'categories_images', 'image_id', 'category_id');
    }

    public function report()
    {
        return $this->belongsToMany(Report::class, 'images_reports', 'image_id', 'report_id');
    }
}

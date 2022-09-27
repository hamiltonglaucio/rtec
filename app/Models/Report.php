<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable;

class Report extends Model
{
    use HasFactory, Auditable, SoftDeletes;

    protected $dates = [
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    protected $fillable = [
        "description",
        "user_id",
        "address_id"
    ];

    public function address()
    {
        return $this->hasOne(Address::class, 'id', 'address_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function images()
    {
        return $this->belongsToMany(Image::class, 'images_reports', 'report_id', 'image_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Categories::class, 'categories_reports', 'report_id', 'category_id');
    }

}

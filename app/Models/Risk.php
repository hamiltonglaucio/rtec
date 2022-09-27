<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable;

class Risk extends Model
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

    public function image()
    {
        return $this->belongsTo(Image::class, 'id', 'risk_id');
    }
}

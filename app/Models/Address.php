<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContracts;

class Address extends Model implements AuditableContracts
{
    use HasFactory, Auditable, SoftDeletes;

    protected $dates = [
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    protected $fillable = [
        "public_place",
        "complement",
        "district",
        "city",
        "uf",
        "postal_code"
    ];

    public function report()
    {
        return $this->belongsTo(Report::class, 'address_id', 'id');
    }
}

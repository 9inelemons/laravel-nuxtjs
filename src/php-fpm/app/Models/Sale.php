<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Sale extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'amount',
        'client_id',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public static function boot(){
        parent::boot();

        static::creating(function ($clientWebsite) {
            $clientWebsite->id = Str::uuid();
        });
    }
}

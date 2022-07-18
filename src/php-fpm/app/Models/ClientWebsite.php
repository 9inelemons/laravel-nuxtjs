<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class ClientWebsite extends Model
{
    use HasFactory;

    protected $table = 'client_websites';

    public $timestamps = false;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'url',
        'client_id',
    ];

    public function client(): BelongsTo
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

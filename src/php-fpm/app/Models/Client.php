<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Str;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';

    public $timestamps = false;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'last_name',
        'first_name',
        'country_id',
    ];

    public function mainEmail(): HasOne
    {
        return $this->hasOne(ClientEmail::class)
            ->where('main', '=', true);
    }

    public function emails(): HasMany
    {
        return $this->hasMany(ClientEmail::class);
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function sales(): HasMany
    {
        return $this->hasMany(Sale::class);
    }

    public static function boot(){
        parent::boot();

        static::creating(function ($client) {
            $client->id = Str::uuid();
        });
    }
}

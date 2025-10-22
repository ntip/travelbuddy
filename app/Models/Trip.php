<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Trip extends Model
{
    protected $table = 'tripdata';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'takeoff_time','takeoff_date','takeoff_iata',
        'landing_time','landing_date','landing_iata',
        'trip_duration',
        'trip_partner','trip_source','trip_class',
        'trip_points','trip_tax',
        'origin','destination','route',
        'extras',
    ];

    protected $casts = [
        'takeoff_date' => 'date:Y-m-d',
        'landing_date' => 'date:Y-m-d',
        'takeoff_time' => 'datetime:H:i:s',
        'landing_time' => 'datetime:H:i:s',
        'trip_duration' => 'integer',
        'trip_points' => 'integer',
        'trip_tax' => 'decimal:2',
        'extras' => 'array',
    ];

    protected static function booted(): void
    {
        static::creating(function (self $m) {
            if (!$m->id) $m->id = (string) Str::uuid();
        });
    }

    public function flights()
    {
        return $this->hasMany(Flight::class, 'trip_id', 'id')->orderBy('slice_index')->orderBy('segment_index');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Flight extends Model
{
    protected $table = 'flightdata';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id','trip_id',
        'flight_airline','flight_number','flight_class','flight_duration',
        'takeoff_time','takeoff_date','takeoff_iata',
        'landing_time','landing_date','landing_iata',
        'rules',
        'slice_index','segment_index',
    ];

    protected $casts = [
        'takeoff_date' => 'date:Y-m-d',
        'landing_date' => 'date:Y-m-d',
        'takeoff_time' => 'datetime:H:i:s',
        'landing_time' => 'datetime:H:i:s',
        'flight_duration' => 'integer',
        'rules' => 'array',
        'slice_index' => 'integer',
        'segment_index' => 'integer',
    ];

    protected static function booted(): void
    {
        static::creating(function (self $m) {
            if (!$m->id) $m->id = (string) Str::uuid();
        });
    }

    public function trip()
    {
        return $this->belongsTo(Trip::class, 'trip_id', 'id');
    }
}

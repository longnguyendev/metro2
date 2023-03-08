<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StationModel extends Model
{
    use HasFactory;
    protected $table = 'stations';
    protected $primaryKey = 'station_id';
    public $incrementing = true;
    protected $keyType = 'integer';

    // protected $table = 'stations';
    // protected $primaryKey = 'station_id';
    // protected $keyType = 'integer';
    // public $incrementing = true;
}

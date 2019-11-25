<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Csd extends Model
{
    //
    public $primaryKey='csd_id';

    protected $table='csd';

    public $timestamps=false;

    protected $guarded=[];
}

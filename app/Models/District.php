<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use DB;

class District extends Model
{
    protected $table = 'dist_mst';
    protected $primaryKey = 'id';
    protected static function abc(){
        DB::table('dist_mst')->get();
    }
}

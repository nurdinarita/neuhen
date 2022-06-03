<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MigrantsInOneVillage extends Model
{
    use HasFactory;
    protected $table = 'migrants_in_one_village';
    protected $guarded = ['id'];
}

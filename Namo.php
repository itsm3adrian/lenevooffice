<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Controllers\NewController;
use Illuminate\Contracts\Auth\Authenticatable;

class Namo extends Model
{
    use HasFactory;
    protected $table = "namo";
    protected $primaryKey = "id";

    

    
    
}
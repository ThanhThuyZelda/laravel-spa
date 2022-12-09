<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $table = 'tb_feedback';
    protected $primaryKey = 'PH_id';
    // public $incrementing = false;
    protected $fillable = ['PH_fullname', 'PH_service', 'PH_img', 'PH_content'];
}

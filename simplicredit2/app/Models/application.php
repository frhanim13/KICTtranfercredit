<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class application extends Model
{
    use HasFactory;


    protected $table = 'applications';
	public $timestamps = true;


    protected $fillable = [
		'id','matric_id','user_id','courseName','courseTitle','credit','grade','cciium','courseOutline','status'
	];



}

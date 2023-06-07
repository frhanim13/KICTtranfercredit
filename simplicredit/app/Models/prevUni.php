<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prevUni extends Model
{
    use HasFactory;


    protected $table = 'prev_unis';
	public $timestamps = true;


    protected $fillable = [
		'id','matric_id','user_id','dipName','yearStudy','reason','cgpa','transcript','nameUni'
	];

}

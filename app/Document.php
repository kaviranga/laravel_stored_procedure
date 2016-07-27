<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Document extends Model
{
	protected $table = 'document_details';
    protected $fillable = ['document_name','document_path'];
}

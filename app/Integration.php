<?php

namespace Sisec;

use Illuminate\Database\Eloquent\Model;

class Integration extends Model
{
    
    protected $table = 'integrations';
	protected $dates = ['deleted_at'];
 	protected $fillable = ['typecontract','ep','name','description','fort','weight'];
}

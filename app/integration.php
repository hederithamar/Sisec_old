<?php

namespace Sisec;

use Illuminate\Database\Eloquent\Model;

class integration extends Model


{
	   protected $table = 'integrations';
	   protected $dates = ['deleted_at'];
    protected $fillable = ['id','typecontract','typeprocess','name','description','fort','weight','route'];
}

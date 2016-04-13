<?php

namespace Sisec;

use Illuminate\Database\Eloquent\Model;

class Integration extends Model
{
    protected $table = 'integrations';

	protected $dates = ['deleted_at'];

 	protected $fillable = ['ep','type','name','description','format','weight','route'];

}

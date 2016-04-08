<?php

namespace Sisec;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "roles";

    protected $dates = ['deleted_at'];

    protected $fillable = ['desc'];

    public function users()
    {
    	return $this->HasMany('Sisec\User');
    }

}

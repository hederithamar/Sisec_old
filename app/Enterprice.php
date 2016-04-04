<?php

namespace Sisec;

use Illuminate\Database\Eloquent\Model;

class Enterprice extends Model
{
    protected $table = "enterprices";

    protected $dates = ['deleted_at'];

    protected $fillable = ['rfc', 'name', 'legalagent', 'type', 'status', 'email', 'address', 'phone'];
}

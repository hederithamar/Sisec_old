<?php

namespace Sisec;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_curp', 'name', 'firstlastname', 'secondlastname', 'cellphone', 'phone','email', 'password', 'role_id', 'enterprise_id', 'state', 'zone', 'status'];
    
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    protected $dates = ['deleted_at'];

    public function setPasswordAttribute($valor)
    {
        if(!empty($valor)){
            $this->attributes['password'] = \Hash::make($valor);
        }
    }

    public function enterprise()
    {
        return $this->belongsTo('Sisec\Enterprise');
    }

    public function role()
    {
        return $this->belongsTo('Sisec\Role');
    }

    public function scopeEmp($query, $desc)
    {
        $query->where('role_id', $desc);
    }

}

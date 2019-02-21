<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['id', 'fname', 'lname', 'email', 'password','status','role_id','licensenum','cpnum','phone','balance','q1answer','q2answer','q3answer', 'added_by', 'license_type', 'phone_type'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    // The User model Roles function start
    /**
     * Description : check user role which type of users login
     */
    public function role() {
        return $this->hasOne('App\Role', 'id', 'role_id');
    }
    /**
     * Description : check has role if user has any role assigned
     */
    public function hasRole($roles) 
    {
        $this->have_role = $this->getUserRole();
        // Check if the user is a root account
        if ($this->have_role->name == 'SuperAdmin') {
            return true;
        }
        if (is_array($roles)) {
            foreach ($roles as $need_role) {
                if ($this->checkIfUserHasRole($need_role)) {
                    return true;
                }
            }
        } else {
            return $this->checkIfUserHasRole($roles);
        }
        return false;
    }

    /**
     * Description : check role from database
     */
    private function getUserRole() {
        return $this->role()->getResults();
    }

    private function checkIfUserHasRole($need_role) {
        return (strtolower($need_role) == strtolower($this->have_role->name)) ? true : false;
    }

    /**
     * Check if this user belongs to a role
     *
     * @return bool
     */
    public function hasRoles($role) {
        return $this->role->name == $role;
    }
    // The User model Roles function End
    
}

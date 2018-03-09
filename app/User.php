<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

//Timesheets


    public function timesheets()
    {
        return $this->hasMany(Timesheets::class);
    }
    
    public function post_timesheet(Timesheets $timesheet)
    {
            $this->timesheets()->save($timesheet);
     }
     public function update_timesheet(Timesheets $timesheet)
    {
            $this->timesheets()->save($timesheet);
     }


//overtimes
     
    public function overtimes()
    {
        return $this->hasMany(Overtime::class);
    }
    public function post_overtime(Overtime $overtime)
    {
            $this->overtimes()->save($overtime);
    }
}

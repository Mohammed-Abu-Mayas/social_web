<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Profile extends Model
{
    //$guarded=['*'];
    protected $guarded=[];


    public function profileimage()
    {
        $imagepath1=($this->image) ? $this->image :'profile/Gv54NnD0PBOOnBRsuqQ5HvcnLxvYr572WhxhiW1D.jpeg';

        return '/storage/'.$imagepath1;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {

    	return $this->belongsTo(User::class);
    }
}

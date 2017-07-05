<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';
    public $user_id = 1;
    public $timestamps = false;

    public static function create_default($id)
    {
//        $id = Users::find($id);
        $profile = new Profile;
        $profile['user_id'] = $id;
        $profile->save();
        return true;
    }
    public function rel_user()
    {
        return $this->belongsTo(\App\User::class, 'user_id');
    }
}

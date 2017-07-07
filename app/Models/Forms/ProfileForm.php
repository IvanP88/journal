<?php

namespace App\Models\Forms;

use App\Models\Profile;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Validator;

class ProfileForm extends Model
{
    // protect from mass assignment vulnerabilities
    protected $fillable = ['name', 'last_name', 'sex_id', 'coordinate', 'cell_phone', 'address', 'birthday'];

    public static function validate_form($request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:2|max:64',
            'last_name' => 'required|string|min:2|max:64',
            'sex_id' => 'required|integer|exists:sex,id',
            'coordinate' => 'required|string|max:256',
            'cell_phone' => 'string|max:15',
            'address' => 'string|max:256',
            'birthday' => 'date'
        ]);
        return $validator;
    }
    public static function profile_save($profile_save, $id)
    {
        $user = new User;
        $profile = new Profile;
        $user_update = $user::find($id);
            $user_update->name = $profile_save->name;
        $user_update->save();

        $profile_update = $profile::where('user_id', $id)->first();
        $profile_update->last_name = $profile_save->last_name;
        $profile_update->sex_id = $profile_save->sex_id;
        $profile_update->coordinate = $profile_save->coordinate;
        $profile_update->cell_phone = $profile_save->cell_phone;
        $profile_update->address = $profile_save->address;
        $profile_update->birthday = $profile_save->birthday;
        $profile_update->save();

        return True;
    }
    public static function validate_role($request)
    {
        $validator = Validator::make($request->all(), [
            'role_id' => 'required|integer|exists:roles,id',
        ]);
        return $validator;
    }
    public static function role_save($role_save)
    {
        $user = new User;
        $user_update = $user::find($role_save->user_id);
        $user_update->role_id = $role_save->role_id;
        $user_update->save();
        return True;
    }
}

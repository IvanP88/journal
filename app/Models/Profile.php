<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';
    protected $fillable = ['user_id', 'last_name', 'age', 'sex_id', 'coordinate', 'cell_phone', 'address', 'birthday'];
    public $timestamps = false;

    public function create_default($id)
    {
        $this->create([
            'user_id' => $id,
            'last_name' => '_',
            'sex_id' => 1,
            'coordinate' => '1',
            'cell_phone'=>'1',
            'address'=>'address'
        ]);
        return $this;
    }
    public function user()
    {
        return $this->hasOne(\App\User::class, 'user_id');
    }
}

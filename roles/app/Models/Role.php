<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name',
    ];

    /**
     * Summary of users
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<User, Role, \Illuminate\Database\Eloquent\Relations\Pivot>
     */
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}

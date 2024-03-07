<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "users";

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = "uid";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["username", "password", "email", "fname", "lname", "phone", "role"];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        "phone" => "integer",
        "role" => "boolean",
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    // ... any additional model configurations you desire
}

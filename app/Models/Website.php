<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'url',
        'status'
    ];

    public static function getValidationRules()
    {
        return [
            'name' => 'required',
            'url'  => 'required'
        ];
    }

    public function subscribers()
    {
        return $this->belongsToMany(User::class, 'website_subscriber','website_id','subscriber_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}

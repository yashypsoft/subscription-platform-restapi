<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'website_id',
        'title',
        'description',
        'slug',
        'is_mail_send',
        'status'
    ];

    public static function getValidationRules()
    {
        return [
            'title'             => 'required',
            'description'       => 'required'
        ];
    }
}

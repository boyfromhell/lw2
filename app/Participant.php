<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    /**
     * Participant T-Shirt Sizes
     */
    const SHIRT_SMALL = 1;
    const SHIRT_MEDIUM = 2;
    const SHIRT_LARGE = 3;
    const SHIRT_EXTRA_LARGE = 4;
    const SHIRT_2XL = 5;

    public static $tShirtSizes = [
        self::SHIRT_SMALL => 'Small',
        self::SHIRT_MEDIUM => 'Medium',
        self::SHIRT_MEDIUM => 'Large',
        self::SHIRT_EXTRA_LARGE => 'Extra Large',
        self::SHIRT_2XL => '2XL',
    ];

    /**
     * Participant Events
     */
    const WOMENS_SINGLES = 1;
    const MENS_SINGLES = 2;
    const MENS_A_SINGLES = 3;
    const WOMENS_DOUBLES = 4;
    const MENS_DOUBLES = 5;
    const MENS_A_DOUBLES =6;
    const MIXED_DOUBLES = 7;

    public static $events = [
        self::WOMENS_SINGLES => 'Women\'s Open Singles',
        self::MENS_SINGLES => 'Men\'s Open Singles',
        self::MENS_A_SINGLES => 'Men\'s A Singles',
        self::WOMENS_DOUBLES => 'Women\'s Open Doubles',
        self::MENS_DOUBLES => 'Men\'s Open Doubles',
        self::MENS_A_DOUBLES => 'Men\'s A Doubles',
        self::MIXED_DOUBLES => 'Mixed Doubles',
    ];

    /**
     * Dates that will be automatically turned into Carbon objects.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        // All values are mass assignable for this model
    ];

}

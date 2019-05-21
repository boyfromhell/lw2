<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    /**
     * Participant T-Shirt Sizes
     */
    const SHIRT_SMALL = "SM";
    const SHIRT_MEDIUM = "MD";
    const SHIRT_LARGE = "LG";
    const SHIRT_EXTRA_LARGE = "XL";
    const SHIRT_2XL = "2X";

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
    const WOMENS_SINGLES = "WOS";
    const MENS_SINGLES = "MOS";
    const MENS_A_SINGLES = "MAS";
    const WOMENS_DOUBLES = "WOD";
    const MENS_DOUBLES = "MOD";
    const MENS_A_DOUBLES = "MAD";
    const MIXED_DOUBLES = "MXD";

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

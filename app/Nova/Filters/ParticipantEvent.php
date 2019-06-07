<?php

namespace App\Nova\Filters;

use Illuminate\Http\Request;
use Laravel\Nova\Filters\Filter;

class ParticipantEvent extends Filter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'select-filter';

    /**
     * Apply the filter to the given query.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function apply(Request $request, $query, $value)
    {
        return $query->where('event1', '=', $value)
            ->orWhere('event2', '=', $value);
    }

    /**
     * Get the filter's available options.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function options(Request $request)
    {
        return [
            'Mens Open Singles' => 'MOS',
            'Mens A Singles' => 'MAS',
            'Womens Open Singles' => 'WOS',
            'Mens Open Doubles' => 'MOD',
            'Mens A Doubles' => 'MAD',
            'Womens Open Doubles' => 'WOD',
            'Mixed Open Doubles' => 'MXD',
        ];
    }
}

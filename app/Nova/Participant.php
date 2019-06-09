<?php

namespace App\Nova;

use App\Address;
use App\Participant as ParticipantModel;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Participant extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Participant';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
//    public static $title = 'id';

    /**
     * Get the value that should be displayed to represent the resource.
     *
     * @return string
     */
    public function title()
    {
        return "$this->first_name $this->last_name";
    }

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable()->hideFromDetail(),

            Heading::make('<h4>Player Information</h4>')
                ->asHtml()
                ->hideFromDetail(),

            Number::make('Event Year', 'event_year')
                ->exceptOnForms()
                ->rules('required'),

            Text::make('First Name', 'first_name')
                ->sortable()
                ->rules('required', 'max:50'),

            Text::make('Last Name', 'last_name')
                ->sortable()
                ->rules('required', 'max:50'),

            Text::make('Email')
                ->sortable()
                ->rules('required', 'email', 'max:100')
                ->creationRules('unique:users,email')
                ->updateRules('unique:users,email,{{resourceId}}'),

            Text::make('Phone Number', 'phone_number')
                ->rules('required', 'max:15'),

            Text::make('Address', 'address1')
                ->sortable()
                ->hideFromIndex()
                ->rules('required', 'max:100'),

            Text::make('Address 2', 'address2')
                ->hideFromIndex()
                ->rules('max:50'),

            Text::make('City')
                ->sortable()
                ->rules('required', 'max:50'),

            Text::make('State/Province', 'state', function() {
                return Address::$usStates[$this->state];
                })
                ->sortable()
                ->onlyOnDetail(),

            Select::make('State/Province', 'state')
                ->onlyOnForms()
                ->displayUsing(function ($state) {
                    return Address::$usStates[$state];
                })
                ->options(Address::$usStates)
                ->rules('required', 'max:2'),

            Text::make('Zip/Postal Code', 'zip')
                ->hideFromIndex()
                ->rules('required', 'max:10'),

            Number::make('Fees', 'tournament_fees')
                ->rules('required'),

            Boolean::make('Fees Paid', 'fees_paid')
                ->rules('required'),

            Text::make('Shirt Size', 'shirt_size', function() {
                return ParticipantModel::$tShirtSizes[$this->shirt_size];
                })
                ->exceptOnForms()
                ->rules('required', 'max:15'),

            Select::make('T Shirt Size', 'shirt_size')
                ->onlyOnForms()
                ->displayUsing(function($size) {
                    return ParticipantModel::$tShirtSizes[$size];
                })
                ->options(ParticipantModel::$tShirtSizes)
                ->rules('required', 'max:15'),

            Heading::make('<h4>Event Information</h4>')
                ->asHtml()
                ->hideFromDetail(),

            Text::make('Event 1', 'event1', function() {
                return ParticipantModel::$events[$this->event1];
                })
                ->sortable()
                ->onlyOnDetail()
                ->rules('required', 'max:3'),

            Select::make('Event 1', 'event1')
                ->onlyOnForms()
                ->displayUsing(function($event) {
                    return ParticipantModel::$events[$event];
                })
                ->options(ParticipantModel::$events)
                ->rules('required', 'max:3'),

            Text::make('Event 1 Partner', 'event1_partner')
                ->sortable()
                ->hideFromIndex()
                ->rules('max:50'),

            Text::make('Event 2', 'event2', function() {
                return isset($this->event2) ? ParticipantModel::$events[$this->event2] : null;
            })
                ->sortable()
                ->onlyOnDetail()
                ->rules('max:3'),

            Select::make('Event 2', 'event2')
                ->onlyOnForms()
                ->displayUsing(function($event) {
                    return ParticipantModel::$events[$event];
                })
                ->options(ParticipantModel::$events)
                ->rules('max:3'),

            Text::make('Event 2 Partner', 'event2_partner')
                ->sortable()
                ->hideFromIndex()
                ->rules('max:50'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [
            new Filters\ParticipantEvent,
            new Filters\ParticipantFeesPaid,
            new Filters\TShirtSize,
        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [
            new Actions\ExportParticipantsToExcel,
            new Actions\MarkParticipantPaid,
            new Actions\MarkParticipantUnpaid,
        ];
    }
}

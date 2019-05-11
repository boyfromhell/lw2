@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="content">
            <div class="title">
                {{ config('app.name', 'Litchfield Watercade Tennis Tournament') }}
            </div>
            <div class="subtitle">
                {{ config('app.event_date', 'July 12-14, 2019') }}
            </div>
            <div class="sponsored_by m-b-md">
                Sponsored By: Meeker Memorial Hospital & Clinics
            </div>
        </div>
    </div>
@endsection

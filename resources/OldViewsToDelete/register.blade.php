@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="content">
            <div class="title">
                2019 Watercade Tennis Tournament
            </div>
            <div class="subtitle">
                Player Registration
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="first_name" class="col-form-label float-left">{{ __('First Name') }}<span class="text-danger"> *</span></label>
                            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                                @error('first_name')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                        </div>
                        <div class="col-md-3">
                            <label for="last_name" class="col-form-label float-left">{{ __('Last Name') }}<span class="text-danger"> *</span></label>
                            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="col-form-label float-left">{{ __('E-Mail Address') }}<span class="text-danger"> *</span></label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8">
                            <label for="street_address" class="col-form-label float-left">{{ __('Street Address') }}<span class="text-danger"> *</span></label>
                            <input id="street_address" type="text" class="form-control @error('street_address') is-invalid @enderror" name="street_address" value="{{ old('street_address') }}" required autocomplete="street_address" autofocus>
                            @error('street_address')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-5">
                            <label for="city" class="col-form-label float-left">{{ __('City') }}<span class="text-danger"> *</span></label>
                            <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>
                            @error('city')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="col-md-2">
                            <label for="state" class="col-form-label float-left">{{ __('State') }}<span class="text-danger"> *</span></label>
                            <input id="state" type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}" required autocomplete="state" autofocus>
                            @error('state')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <label for="zip_code" class="col-form-label float-left">{{ __('Zip Code') }}<span class="text-danger"> *</span></label>
                            <input id="zip_code" type="text" class="form-control @error('zip_code') is-invalid @enderror" name="zip_code" value="{{ old('zip_code') }}" required autocomplete="zip_code" autofocus>
                            @error('zip_code')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="phone_number" class="col-form-label float-left">{{ __('Phone Number') }}<span class="text-danger"> *</span></label>
                            <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
                            @error('phone_number')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="shirt_size" class="col-form-label float-left">{{ __('T-Shirt Size') }}<span class="text-danger"> *</span></label>
                            <select id="shirt_size" class="form-control @error('shirt_size') is-invalid @enderror" name="shirt_size" value="{{ old('shirt_size') }}" required autocomplete="shirt_size" autofocus>
                                <option>-- Please Select --</option>
                                <option>Small</option>
                                <option>Medium</option>
                                <option>Large</option>
                                <option>Extra-Large</option>
                                <option>2XL</option>
                            </select>
                            @error('shirt_size')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-md-5">
                        <div class="col-md-3">
                            <label for="event1" class="col-form-label float-left">{{ __('Event Selection') }}<span class="text-danger"> *</span></label>
                            <select id="event1" class="form-control @error('event1') is-invalid @enderror" name="event1" value="{{ old('event1') }}" required autocomplete="event1" autofocus>
                                <option>-- Please Select --</option>
                                <option>Women's Open Singles</option>
                                <option>Men's Open Singles</option>
                                <option>Men's A Singles</option>
                                <option>Women's Open Doubles</option>
                                <option>Men's Open Doubles</option>
                                <option>Men's A Doubles</option>
                                <option>Mixed Open Doubles</option>
                            </select>
                            @error('event1')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <label for="event1_partner" class="col-form-label float-left">{{ __('Partner') }}</label>
                            <input id="event1_partner" type="text" class="form-control @error('event1_partner') is-invalid @enderror" name="event1_partner" value="{{ old('event1_partner') }}" autocomplete="event1_partner" autofocus>
                            @error('event1_partner')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <label for="event2" class="col-form-label float-left">{{ __('Event Selection') }}</label>
                            <select id="event2" class="form-control @error('event2') is-invalid @enderror" name="event2" value="{{ old('event2') }}" autocomplete="event2" autofocus>
                                <option>-- Please Select --</option>
                                <option>Women's Open Singles</option>
                                <option>Men's Open Singles</option>
                                <option>Men's A Singles</option>
                                <option>Women's Open Doubles</option>
                                <option>Men's Open Doubles</option>
                                <option>Men's A Doubles</option>
                                <option>Mixed Open Doubles</option>
                            </select>
                            @error('event2')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <label for="event2_partner" class="col-form-label float-left">{{ __('Partner') }}</label>
                            <input id="event2_partner" type="text" class="form-control @error('event2_partner') is-invalid @enderror" name="event2_partner" value="{{ old('event2_partner') }}" autocomplete="event2_partner" autofocus>
                            @error('event2_partner')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <h3>Waiver & Release</h3>
                            <p class="waiver mb-md-0">I hereby apply to enter the 2019 Litchfield Watercade Tennis Tournament and in consideration of my acceptance as a participant,
                                I, the undersigned intending to be legally bound, do hereby, for myself, my heirs, my executors and administrators, forever
                                waive & release any & all rights & claims for damages against the Litchfield Watercade, Inc., the City of Litchfield,
                                District #465 Community Education, Litchfield Tennis Association, Meeker Memorial Hospital, or any agent, employee,
                                official or elected officer of these organizations and any sponsoring or co-sponsoring agencies, for any & all injuries,
                                illness and/ or property loss which I may suffer as a direct or indirect result of my participation in this event.</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="signed_name" class="col-form-label float-left">{{ __('Signed Name') }}<span class="text-danger"> *</span></label>
                            <input id="signed_name" type="text" class="form-control @error('signed_name') is-invalid @enderror" name="signed_name" value="{{ old('signed_name') }}" required autocomplete="signed_name" autofocus>
                            @error('signed_name')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="col-md-9">
                            <p class="float-left mb-md-0 pt-md-5"><b>Parent/Guardian signed name required if under 18 years of age</b></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_PUBLIC_KEY') }}"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary float-left">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

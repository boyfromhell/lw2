<template>
    <form autocomplete="off" v-on:submit.prevent="submit(form)" class="form">
        <div class="flex form-row">
            <div class="col-md-3">
                <label for="first_name">First Name <span class="required_field_tag">*</span></label>
                <input id="first_name" type="text" placeholder="First Name" name="first_name"
                       v-model="form.first_name" v-validate="'required|max:50'">
                <span v-if="errors.has('first_name')">{{ errors.first('first_name') }}</span>
            </div>
            <div class="col-md-3">
                <label for="last_name">Last Name <span class="required_field_tag">*</span></label>
                <input id="last_name" type="text" placeholder="Last Name" name="last_name" v-model="form.last_name"
                       v-validate="'required|max:50'">
                <span v-if="errors.has('last_name')">{{ errors.first('last_name') }}</span>
            </div>
            <div class="col-md-6">
                <label for="email">Email Address <span>*</span></label>
                <input id="email" type="text" placeholder="Email Address" name="email"
                       v-model="form.email" v-validate="'required|email|max:100'">
                <span v-if="errors.has('email')">{{ errors.first('email') }}</span>
            </div>
        </div>
        <div class="flex form-row">
            <div class="col-md-8">
                <label for="address1">Street Address <span>*</span></label>
                <input id="address1" type="text" placeholder="Address" name="address1" v-model="form.address1"
                       v-validate="'required|max:100'">
                <span v-if="errors.has('address1')">{{ errors.first('address1') }}</span>
            </div>
            <div class="col-md-4">
                <label for="address2">Address 2</label>
                <input id="address2" type="text" placeholder="Apt/Unit #" name="address2" v-validate="'max:50'" v-model="form.address2">
                <span v-if="errors.has('address2')">{{ errors.first('address2') }}</span>
            </div>
        </div>
        <div class="flex form-row">
            <div class="col-md-4">
                <label for="city">City <span>*</span></label>
                <input id="city" type="text" placeholder="City" name="city" v-model="form.city"
                       v-validate="'required|max:100'">
                <span v-if="errors.has('city')">{{ errors.first('city') }}</span>
            </div>
            <div class="col-md-2">
                <label for="state">State/Province <span>*</span></label>
                <div class="inline-block relative w-full">
                    <select id="state" type="text" name="state" v-model="form.state" v-validate="'required|length:2'">
                        <option disabled></option>
                        <option v-if="form.country !== 'CA'" v-for="(state, key, index) of states" :value="state" :key="index">{{ state }}</option>
                        <option v-if="form.country === 'CA'" v-for="(state, key, index) of provinces" :value="state" :key="index">{{ state }}</option>
                    </select>
                    <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
                <span v-if="errors.has('state')">{{ errors.first('state') }}</span>
            </div>
            <div class="col-md-3">
                <label for="zip">Zip/Postal Code <span>*</span></label>
                <input id="zip" type="text" placeholder="Zip/Postal Code" name="zip" v-model="form.zip"
                       v-validate="'required'" data-vv-as="zip/postal code">
                <span v-if="errors.has('zip')">{{ errors.first('zip') }}</span>
            </div>
        </div>
        <div class="flex form-row pt-3 mb-0">
            <div class="col-md-4">
                <vue-recaptcha
                    name="recaptcha"
                    ref="recaptcha"
                    @verify="onCaptchaVerified"
                    @expired="onCaptchaExpired"
                    size="normal"
                    sitekey="6LczHaMUAAAAAFClGpCVOduY6SmOi93QwePThjkE"
                    v-model="form.recaptcha"
                    v-validate="'required|min:1'">
                </vue-recaptcha>
                <span v-if="errors.has('recaptcha')">{{ errors.first('recaptcha') }}</span>
            </div>
        </div>
        <div class="flex form-row">
            <button class="btn btn-primary" :disabled="pending || errors.any()">Submit</button>
        </div>
    </form>
<!--        <form method="POST" action="{{ route('register') }}">-->
<!--            @csrf-->

<!--            <div class="form-group row">-->
<!--                <div class="col-md-4">-->
<!--                    <label for="phone_number" class="col-form-label float-left">{{ __('Phone Number') }}<span class="text-danger"> *</span></label>-->
<!--                    <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>-->
<!--                    @error('phone_number')-->
<!--                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>-->
<!--                    @enderror-->
<!--                </div>-->
<!--                <div class="col-md-4">-->
<!--                    <label for="shirt_size" class="col-form-label float-left">{{ __('T-Shirt Size') }}<span class="text-danger"> *</span></label>-->
<!--                    <select id="shirt_size" class="form-control @error('shirt_size') is-invalid @enderror" name="shirt_size" value="{{ old('shirt_size') }}" required autocomplete="shirt_size" autofocus>-->
<!--                        <option>&#45;&#45; Please Select &#45;&#45;</option>-->
<!--                        <option>Small</option>-->
<!--                        <option>Medium</option>-->
<!--                        <option>Large</option>-->
<!--                        <option>Extra-Large</option>-->
<!--                        <option>2XL</option>-->
<!--                    </select>-->
<!--                    @error('shirt_size')-->
<!--                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>-->
<!--                    @enderror-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="form-group row mb-md-5">-->
<!--                <div class="col-md-3">-->
<!--                    <label for="event1" class="col-form-label float-left">{{ __('Event Selection') }}<span class="text-danger"> *</span></label>-->
<!--                    <select id="event1" class="form-control @error('event1') is-invalid @enderror" name="event1" value="{{ old('event1') }}" required autocomplete="event1" autofocus>-->
<!--                        <option>&#45;&#45; Please Select &#45;&#45;</option>-->
<!--                        <option>Women's Open Singles</option>-->
<!--                        <option>Men's Open Singles</option>-->
<!--                        <option>Men's A Singles</option>-->
<!--                        <option>Women's Open Doubles</option>-->
<!--                        <option>Men's Open Doubles</option>-->
<!--                        <option>Men's A Doubles</option>-->
<!--                        <option>Mixed Open Doubles</option>-->
<!--                    </select>-->
<!--                    @error('event1')-->
<!--                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>-->
<!--                    @enderror-->
<!--                </div>-->
<!--                <div class="col-md-3">-->
<!--                    <label for="event1_partner" class="col-form-label float-left">{{ __('Partner') }}</label>-->
<!--                    <input id="event1_partner" type="text" class="form-control @error('event1_partner') is-invalid @enderror" name="event1_partner" value="{{ old('event1_partner') }}" autocomplete="event1_partner" autofocus>-->
<!--                    @error('event1_partner')-->
<!--                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>-->
<!--                    @enderror-->
<!--                </div>-->
<!--                <div class="col-md-3">-->
<!--                    <label for="event2" class="col-form-label float-left">{{ __('Event Selection') }}</label>-->
<!--                    <select id="event2" class="form-control @error('event2') is-invalid @enderror" name="event2" value="{{ old('event2') }}" autocomplete="event2" autofocus>-->
<!--                        <option>&#45;&#45; Please Select &#45;&#45;</option>-->
<!--                        <option>Women's Open Singles</option>-->
<!--                        <option>Men's Open Singles</option>-->
<!--                        <option>Men's A Singles</option>-->
<!--                        <option>Women's Open Doubles</option>-->
<!--                        <option>Men's Open Doubles</option>-->
<!--                        <option>Men's A Doubles</option>-->
<!--                        <option>Mixed Open Doubles</option>-->
<!--                    </select>-->
<!--                    @error('event2')-->
<!--                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>-->
<!--                    @enderror-->
<!--                </div>-->
<!--                <div class="col-md-3">-->
<!--                    <label for="event2_partner" class="col-form-label float-left">{{ __('Partner') }}</label>-->
<!--                    <input id="event2_partner" type="text" class="form-control @error('event2_partner') is-invalid @enderror" name="event2_partner" value="{{ old('event2_partner') }}" autocomplete="event2_partner" autofocus>-->
<!--                    @error('event2_partner')-->
<!--                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>-->
<!--                    @enderror-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="form-group row">-->
<!--                <div class="col-md-12">-->
<!--                    <h3>Waiver & Release</h3>-->
<!--                    <p class="waiver mb-md-0">I hereby apply to enter the 2019 Litchfield Watercade Tennis Tournament and in consideration of my acceptance as a participant,-->
<!--                        I, the undersigned intending to be legally bound, do hereby, for myself, my heirs, my executors and administrators, forever-->
<!--                        waive & release any & all rights & claims for damages against the Litchfield Watercade, Inc., the City of Litchfield,-->
<!--                        District #465 Community Education, Litchfield Tennis Association, Meeker Memorial Hospital, or any agent, employee,-->
<!--                        official or elected officer of these organizations and any sponsoring or co-sponsoring agencies, for any & all injuries,-->
<!--                        illness and/ or property loss which I may suffer as a direct or indirect result of my participation in this event.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="form-group row">-->
<!--                <div class="col-md-3">-->
<!--                    <label for="signed_name" class="col-form-label float-left">{{ __('Signed Name') }}<span class="text-danger"> *</span></label>-->
<!--                    <input id="signed_name" type="text" class="form-control @error('signed_name') is-invalid @enderror" name="signed_name" value="{{ old('signed_name') }}" required autocomplete="signed_name" autofocus>-->
<!--                    @error('signed_name')-->
<!--                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>-->
<!--                    @enderror-->
<!--                </div>-->
<!--                <div class="col-md-9">-->
<!--                    <p class="float-left mb-md-0 pt-md-5"><b>Parent/Guardian signed name required if under 18 years of age</b></p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="form-group row">-->
<!--                <div class="col-md-3">-->
<!--                    <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_PUBLIC_KEY') }}"></div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="form-group row">-->
<!--                <div class="col-md-12">-->
<!--                    <button type="submit" class="btn btn-primary float-left">-->
<!--                        {{ __('Register') }}-->
<!--                    </button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </form>-->
</template>

<script>
    import { usStates } from '../../utils/us-states';
    import VueRecaptcha from 'vue-recaptcha';

    export default {
        name: 'RegistrationForm',
        components: {
            'vue-recaptcha': VueRecaptcha
        },
        props: ['pending'],
        data: function () {

            return {
                form: {
                    first_name: null,
                    last_name: null,
                    recaptcha: null,
                },
                states: usStates,
            }
        },
        methods: {
            submit() {
                if(this.form.institution_type !== '3') {
                    this.form.institution_type_other = null;
                }
                this.$validator.validateAll().then((valid) => {
                    if (valid) {
                        this.$refs.recaptcha.reset();
                        this.$emit('submit', this.form);
                    }
                });
            },
            onCaptchaVerified(recaptchaToken) {
                this.form.recaptcha = recaptchaToken;
            },
            onCaptchaExpired: function () {
                this.$refs.recaptcha.reset();
            }
        }
    };
</script>

<style>
    .required_field_tag {
        color: #ff0000;
    }
</style>

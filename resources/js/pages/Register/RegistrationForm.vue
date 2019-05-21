<template>
    <form autocomplete="off" v-on:submit.prevent="submit(form)" class="form">
        <div class="flex form-row form-group">
            <div class="col-md-3">
                <label for="first_name" class="col-form-label float-left">First Name <span class="required_field_tag">*</span></label>
                <input id="first_name" type="text" placeholder="First Name" name="first_name" class="form-control"
                       v-model="form.first_name" v-validate="'required|max:50'">
                <span v-if="errors.has('first_name')">{{ errors.first('first_name') }}</span>
            </div>
            <div class="col-md-3">
                <label for="last_name" class="col-form-label float-left">Last Name <span class="required_field_tag">*</span></label>
                <input id="last_name" type="text" placeholder="Last Name" name="last_name" class="form-control"
                       v-model="form.last_name" v-validate="'required|max:50'">
                <span v-if="errors.has('last_name')">{{ errors.first('last_name') }}</span>
            </div>
            <div class="col-md-6">
                <label for="email" class="col-form-label float-left">Email Address <span class="required_field_tag">*</span></label>
                <input id="email" type="text" placeholder="Email Address" name="email" class="form-control"
                       v-model="form.email" v-validate="'required|email|max:100'">
                <span v-if="errors.has('email')">{{ errors.first('email') }}</span>
            </div>
        </div>
        <div class="flex form-row form-group">
            <div class="col-md-8">
                <label for="address1" class="col-form-label float-left">Street Address <span class="required_field_tag">*</span></label>
                <input id="address1" type="text" placeholder="Address" name="address1" class="form-control"
                       v-model="form.address1" v-validate="'required|max:100'">
                <span v-if="errors.has('address1')">{{ errors.first('address1') }}</span>
            </div>
            <div class="col-md-4">
                <label for="address2" class="col-form-label float-left">Address 2</label>
                <input id="address2" type="text" placeholder="Apt/Unit #" name="address2" class="form-control"
                       v-validate="'max:50'" v-model="form.address2">
                <span v-if="errors.has('address2')">{{ errors.first('address2') }}</span>
            </div>
        </div>
        <div class="flex form-row form-group">
            <div class="col-md-4">
                <label for="city" class="col-form-label float-left">City <span class="required_field_tag">*</span></label>
                <input id="city" type="text" placeholder="City" name="city" class="form-control"
                       v-model="form.city" v-validate="'required|max:100'">
                <span v-if="errors.has('city')">{{ errors.first('city') }}</span>
            </div>
            <div class="col-md-2">
                <label for="state" class="col-form-label float-left">State <span class="required_field_tag">*</span></label>
                <div class="inline-block relative w-full">
                    <select id="state" type="text" name="state" v-model="form.state" class="form-control"
                            v-validate="'required|length:2'">
                        <option disabled>Please Select</option>
                        <option v-for="(state, key, index) of states" :value="key" :key="index">{{ state }}</option>
                    </select>
                </div>
                <span v-if="errors.has('state')">{{ errors.first('state') }}</span>
            </div>
            <div class="col-md-3">
                <label for="zip" class="col-form-label float-left">Zip Code <span class="required_field_tag">*</span></label>
                <input id="zip" type="text" placeholder="Zip/Postal Code" name="zip" class="form-control"
                       v-model="form.zip" v-validate="'required'" data-vv-as="zip/postal code">
                <span v-if="errors.has('zip')">{{ errors.first('zip') }}</span>
            </div>
        </div>
        <div class="flex form-row form-group">
            <div class="col-md-4">
                <label for="phone_number" class="col-form-label float-left">Phone Number <span class="required_field_tag">*</span></label>
                <input id="phone_number" type="text" placeholder="Phone Number" name="phone_number" class="form-control"
                       v-model="form.phone_number" v-validate="'required'" data-vv-as="phone number">
                <span v-if="errors.has('phone_number')">{{ errors.first('phone_number') }}</span>
            </div>
            <div class="col-md-4 offset-md-2">
                <label for="shirt_size" class="col-form-label float-left">Shirt Size <span class="required_field_tag">*</span></label>
                <div class="inline-block relative w-full">
                    <select id="shirt_size" type="text" name="shirt_size" class="form-control"
                            v-model="form.shirt_size" v-validate="'required|length:2'">
                        <option disabled></option>
                        <option v-for="(shirtSize, key, index) of shirtSizes" :value="key" :key="index">{{ shirtSize }}</option>
                    </select>
                </div>
                <span v-if="errors.has('shirt_size')">{{ errors.first('shirt_size') }}</span>
            </div>
        </div>
        <div class="flex form-row form-group">
            <div class="col-md-3">
                <label for="event1" class="col-form-label float-left">Event 1 <span class="required_field_tag">*</span></label>
                <div class="inline-block relative w-full">
                    <select id="event1" type="text" name="event1" class="form-control"
                            v-model="form.event1" v-validate="'required|length:3'" data-vv-as="primary event">
                        <option disabled></option>
                        <option v-for="(event1, key, index) of primary_events" :value="key" :key="index">{{ event1 }}</option>
                    </select>
                </div>
                <span v-if="errors.has('event1')">{{ errors.first('event1') }}</span>
            </div>
            <div class="col-md-3">
                <label for="event1_partner" class="col-form-label float-left">Doubles Partner</label>
                <input id="event1_partner" type="text" placeholder="Doubles Partner Name (if known)" name="event1_partner" class="form-control"
                       v-model="form.event1_partner" v-validate="'required'" data-vv-as="doubles partner">
                <span v-if="errors.has('event1_partner')">{{ errors.first('event1_partner') }}</span>
            </div>
            <div class="col-md-3">
                <label for="event2" class="col-form-label float-left">Event 2</label>
                <div class="inline-block relative w-full">
                    <select id="event2" type="text" name="event2" class="form-control"
                            v-model="form.event2" v-validate="'required|length:3'" data-vv-as="second event">>
                        <option disabled></option>
                        <option v-for="(event2, key, index) of secondary_events" :value="key" :key="index">{{ event2 }}</option>
                    </select>
                </div>
                <span v-if="errors.has('event2')">{{ errors.first('event2') }}</span>
            </div>
            <div class="col-md-3">
                <label for="event2_partner" class="col-form-label float-left">Doubles Partner</label>
                <input id="event2_partner" type="text" placeholder="Doubles Partner Name (if known)" name="event2_partner" class="form-control"
                       v-model="form.event2_partner" v-validate="'required'" data-vv-as="doubles partner">
                <span v-if="errors.has('event2_partner')">{{ errors.first('event2_partner') }}</span>
            </div>
        </div>
        <div class="flex form-row form-group">
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
        <div class="flex form-row form-group">
            <div class="col-md-4">
                <label for="signed_name" class="col-form-label float-left">Signed Name <span class="required_field_tag">*</span></label>
                <input id="signed_name" type="text" placeholder="Authorized Signee" name="signed_name" class="form-control"
                       v-model="form.signed_name" v-validate="'required'" data-vv-as="authorized signed">
                <span v-if="errors.has('signed_name')">{{ errors.first('signed_name') }}</span>
            </div>
            <div class="col-md-8">
                <p class="float-left mb-md-0 pt-md-5"><b>Parent/Guardian signed name required if under 18 years of age</b></p>
            </div>
        </div>
        <div class="flex form-row form-group pt-2 mb-4">
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
        <div class="flex form-row form-group mb-5">
            <div class="col-md-3">
                <button class="btn btn-primary" :disabled="pending || errors.any()">Submit My Registration</button>
            </div>
        </div>
    </form>
</template>

<script>
    import { usStates } from '../../utils/us-states';
    import { tshirtSizes } from "../../utils/tshirt_sizes";
    import { primary_events } from "../../utils/primary_events";
    import { secondary_events } from "../../utils/secondary_events";
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
                    email: null,
                    address1: null,
                    address2: null,
                    city: null,
                    state: null,
                    zip: null,
                    phone_number: null,
                    shirt_size: null,
                    event1: null,
                    event1_partner: null,
                    event2: null,
                    event2_partner: null,
                    signed_name: null,
                    recaptcha: null,
                },
                states: usStates,
                shirtSizes: tshirtSizes,
                primary_events: primary_events,
                secondary_events: secondary_events,
            }
        },
        methods: {
            submit() {
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

<style scoped>
    .required_field_tag {
        color: #ff0000;
    }
</style>

<template>
    <div class="container">
        <nav-bar :pending="pending"></nav-bar>
        <div class="content">
            <div class="title">
                2019 Watercade Tennis Tournament
            </div>
            <div class="subtitle">
                Player Registration<hr />
            </div>
        </div>
        <registration-form v-on:submit="submitRegistration"></registration-form>
        <app-footer></app-footer>
    </div>
</template>

<script>
    import RegistrationForm from "./RegistrationForm";
    import AppFooter from "../../components/AppFooter";
    import NavBar from "../../components/NavBar";
    import RegistrationService from "../../services/registration.service";

    export default {
        name: 'Register',
        components: {
            NavBar,
            AppFooter,
            RegistrationForm,
        },
        data: () => {
            return {
                pending: false
            }
        },

        methods: {
            submitRegistration(registrationData) {
                this.pending = true;

                RegistrationService.registerUser(registrationData)
                    .then(() => this.$router.push({name: 'register-acknowledge'}))
                    .catch(e => this.$store.dispatch(SHOW_NOTIFICATION, {type: 'error', message: getError(e)}))
                    .finally(() => this.pending = false);
            }
        },
    }
</script>

<style>
    /*.content {*/
    /*    min-height: calc(100vh - 300px);*/
    /*}*/
</style>

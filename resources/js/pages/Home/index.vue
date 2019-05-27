<template>
    <div class="container primary-container">
        <nav-bar></nav-bar>
        <div class="container content ">
            <div class="title">
                {{ title }}
            </div>
            <div class="subtitle">
                {{ eventDate }}
            </div>
            <div class="sponsored_by m-b-md">
                {{ sponsoredBy }}
            </div>
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <p class="normal-text">Welcome to the 41st Annual Litchfield Watercade Tennis Tournament!</p>
                    <p class="normal-text">We hope you'll join us for this summer's event!</p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <p class="normal-text">We are now offering online registration - but unfortunately no online payment at this time.</p>
                    <p class="normal-text">Or you can download the full registration form to fill out.</p>
                    <p class="normal-text">Registration is due July 7th.  Register today!</p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <router-link to="/register" tag="button" class="btn btn-primary mr-md-2" >Register Online</router-link>
                    <a href="assets/docs/2019_Watercade_Registration.pdf" target="_blank"><button class="btn btn-primary ml-md-2">Get PDF Registration Form</button></a>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <app-footer></app-footer>
    </div>
</template>

<script>
    import NavBar from "../../components/NavBar";
    import AppFooter from "../../components/AppFooter";
    export default {
        name: 'Home',
        components: {
            AppFooter,
            NavBar
        },
        data: function() {
            return {
                title: 'Litchfield Watercade Tennis Tournament',
                eventDate: 'July 12-14, 2019',
                sponsoredBy: 'Sponsored By: Meeker Memorial Hospital & Clinics',
            }
        },
    }
</script>

<style scoped>
    .content {
        min-height: calc(100vh - 200px);
    }
</style>

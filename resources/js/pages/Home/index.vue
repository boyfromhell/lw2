<template>
    <div class="container">
        <nav-bar></nav-bar>
        <div class="content">
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
                    <p>Welcome to the 41st Annual Litchfield Watercade Tennis Tournament!</p>
                    <p>We hope you'll join us for this summer's event!</p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <p>You can register online
                        <router-link to="/register">
                            here
                        </router-link>
                    </p>
                    <p>Or you can download the registration form <a href="assets/docs/2019_Watercade_Registration.pdf" target="_blank">here</a></p>
                </div>
                <div class="col-md-2"></div>
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

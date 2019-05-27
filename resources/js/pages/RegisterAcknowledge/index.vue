<template>
    <div class="container primary-container">
        <nav-bar></nav-bar>
        <div class="content container">
            <div class="title">
                {{ title }}
            </div>
            <div class="subtitle">
                <p>Please check your e-mail for an entry confirmation.</p>
                <p>We look forward to seeing you at the 41st Annual Litchfield Watercade Tennis Tournament!</p>
            </div>
            <div class="sponsored_by m-b-md">
                <p>Please <a href="mailto:watercadetennis@gmail.com?subject=Litchfield%20Watercade%20Registration">email</a>
                    us if you have any questions.</p>
            </div>
        </div>
        <app-footer></app-footer>
    </div>
</template>

<script>
    import NavBar from "../../components/NavBar";
    import AppFooter from "../../components/AppFooter";
    export default {
        name: 'RegisterAcknowledge',
        components: {
            AppFooter,
            NavBar
        },
        data: function() {
            return {
                title: 'Thank You!',
            }
        },
    }
</script>

<style scoped>
    .content {
        min-height: calc(100vh - 200px);
    }
</style>

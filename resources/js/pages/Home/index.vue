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

<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <router-link to="/" class="navbar-brand">Watercade Tennis</router-link>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarSinglesDrawsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Singles Draws
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="assets/draws/2018/MOS.pdf" target="_blank">Men's Open</a>
                        <a class="dropdown-item" href="assets/draws/2018/MOSc.pdf" target="_blank">Men's Open - Consolation</a>
                        <a class="dropdown-item" href="assets/draws/2018/WS.pdf" target="_blank">Women's Open</a>
                        <a class="dropdown-item" href="assets/draws/2018/WSc.pdf" target="_blank">Women's Open - Consolation</a>
                        <a class="dropdown-item" href="assets/draws/2018/MAS.pdf" target="_blank">Men's A</a>
                        <a class="dropdown-item" href="assets/draws/2018/MASc.pdf" target="_blank">Men's A - Consolation</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDoublesDrawDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Doubles Draws
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="assets/draws/2018/MOD.pdf" target="_blank">Men's Open</a>
                        <a class="dropdown-item" href="assets/draws/2018/MODc.pdf" target="_blank">Men's Open - Consolation</a>
                        <a class="dropdown-item" href="assets/draws/2018/WD.pdf" target="_blank">Women's Open</a>
                        <a class="dropdown-item" href="assets/draws/2018/WDc.pdf" target="_blank">Women's Open - Consolation</a>
                        <a class="dropdown-item" href="assets/draws/2018/MXD.pdf" target="_blank">Mixed Open</a>
                        <a class="dropdown-item" href="assets/draws/2018/MXDc.pdf" target="_blank">Mixed Open - Consolation</a>
                        <a class="dropdown-item" href="assets/draws/2018/MAD.pdf" target="_blank">Men's A</a>
                        <a class="dropdown-item" href="assets/draws/2018/MADc.pdf" target="_blank">Men's A - Consolation</a>
                    </div>
                </li>
                <li class="nav-item">
                    <router-link to="/info" class="nav-link">
                        Tournament Info
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/register" class="nav-link">
                        Player Registration
                    </router-link>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
    export default {
        name: 'NavBar',
    }
</script>

<style>

</style>

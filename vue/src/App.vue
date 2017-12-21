<template>
    <div id="container" class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <img v-bind:src="logo" alt="logo">
            </div>
            <div class="col-md-8">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 color-line"></div>
        </div>
        <nav aria-label="breadcrumb" role="navigation" class="gap-top">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
        </nav>
        <router-view></router-view>
    </div>
</template>

<script>
    import logo from './assets/logo.png'
    /* eslint-disable */
    export default {
        name: 'app',
        data() {
            return {
                logo: logo
            }
        }
    }
</script>

<style lang="scss" scoped>
    #container {
        -webkit-font-smoothing: antialiased;
        img {
            width: 64px;
        }

        /*.color-line {*/
            /*height: 3px;*/
            /*background: -webkit-linear-gradient(left, #3023AE, #BDE3F5, #B4EC51); !* Safari 5.1-6.0 *!*/
            /*background: -o-linear-gradient(right,  #3023AE, #BDE3F5, #B4EC51); !* Opera 11.1-12.0 *!*/
            /*background: -moz-linear-gradient(right,  #3023AE, #BDE3F5, #B4EC51); !* Firefox 3.6 -15 *!*/
            /*background: linear-gradient(to right,  #3023AE, #BDE3F5, #B4EC51); !* Standard syntax *!*/
        /*}*/
    }
</style>

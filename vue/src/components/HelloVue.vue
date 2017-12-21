<template>
    <div class="hello-vue">
        {{ hello }}
        <notice></notice>
    </div>
</template>

<script>
    /* eslint-disable */
    import Notice from "./notice"
    import Vue from 'vue'

    export default {
        name: "HelloVue",
        data() {
            return  {
                hello: 'Hello, Vue!'
            }
        },
        components: {
            'notice': Notice
        }
    }
</script>

<style scoped>
    .hello-vue {
        color: red;
    }
</style>
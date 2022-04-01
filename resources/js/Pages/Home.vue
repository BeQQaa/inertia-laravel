<template>
    <Head :title="'Home'"/>
    <Layout/>
</template>

<script>
import {Head} from '@inertiajs/inertia-vue3'
import Layout from "../Shared/Layout";
export default {
    components: {
        Head,
        Layout
    },
    props: {
    }
}
</script>

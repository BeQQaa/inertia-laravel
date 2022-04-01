<template>
<h1>{{title}}</h1>
</template>

<script>
import NavBar from "../Layout/NavBar";
export default {
    components: {NavBar},
    props:{
        title:String
    }
}
</script>

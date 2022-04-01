<template>
    <header class="body-font sm:h-9 flex">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <span class="ml-3 text-xl text-gray-600">Test</span>
            </a>
            <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
                <a :href="route('home')" class="mr-5 hover:text-red-900 text-gray-600">Main</a>
                <a :href="route('people.index')" class="mr-5 hover:text-red-900 text-gray-600">People</a>
            </nav>
        </div>
    </header>
</template>

<script>
import {Head} from '@inertiajs/inertia-vue3'


export default {
    components: {
        Head,
    },
    props: {
        title: String
    },
}
</script>


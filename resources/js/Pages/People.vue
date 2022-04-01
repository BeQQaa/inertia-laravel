<template>
    <Head :title="'People'"/>
    <div class="fixed ">
        <Layout/>
    </div>
    <div class="container mx-auto md:px-4 md:space-x-8 p-20">
        <div class="grid grid-cols-3 gap-4 p-2">
            <div v-for="people in peoples['results']" :key="people.id">
                <div class="flex justify-center">
                    <div class="block p-6 rounded-lg shadow-lg bg-gray-200 max-w-sm">
                        <div class="flex justify-center">
                            <ul class="bg-gray-200 rounded-lg w-96 text-gray-900">
                                <li class="px-6 py-2 w-full">
                                    <h2 class="italic">Name:</h2>{{ people.name }}
                                </li>
                                <li class="px-6 py-2 w-full">
                                    <h2 class="italic">Height:</h2>{{ people.height }}
                                </li>
                                <li class="px-6 py-2 w-full">
                                    <h2 class="italic">Mass:</h2>{{ people.mass }}
                                </li>
                                <li class="px-6 py-2 w-full">
                                    <h2 class="italic">Hair Color:</h2>{{ people.hair_color }}
                                </li>
                                <li class="px-6 py-2 w-full">
                                    <h2 class="italic">Skin Color:</h2>{{ people.skin_color }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="inline-flex rounded-md shadow-sm pl-6" role="group">
            <button type="button"
                    class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-l-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                <a v-on:click="$inertia.get(peoples['previous'])">Back</a>
            </button>
            <button type="button"
                    class="py-2 px-4 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                <a :href="route('people.index')">First</a>
            </button>
            <button type="button"
                    class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-r-md border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                <a v-on:click="$inertia.get(peoples['next'])">Next</a>
            </button>
        </div>
    </div>
</template>

<script>
import Layout from "../Shared/Layout";
import {Head} from "@inertiajs/inertia-vue3";

export default {
    components: {
        Head,
        Layout
    },
    props: {
        peoples: Object,
        next: String,
        prev: String
    }
}

</script>

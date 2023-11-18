<template>
    <div class="text-gray-600">
        <Entete />
        <!------fin du nav-->

        <ModeleIngredient/>

        <div>
            <div>
                <div>
                    <img src="@/components/images/arranger.jpg" alt="" class="w-full" height="200">
                </div>
            </div>
        </div>
        <!-----fin de l'image    -->

        <ouverture />
        <main class="px-12 pt-4 w">
            <!---debut du header-->

        </main>
        <!----footer-->

        <pied />
        <button type="button" class="p-2 bg-orange-500 text-white rounded-lg" v-on:click="verifier">afficher data</button>


    </div>
</template>

<script>

import ModeleIngredient from './ModeleIngredient.vue';
import ouverture from './ouverture.vue';
import pied from './footer.vue';
import Entete from './Entete.vue';

export default {
    name: "index",

    data() {
        return {
        }
    },
    setup() {

        

    },
   
    components: { ouverture, pied, Entete, ModeleIngredient},

    methods: {

    }

    
}
</script>

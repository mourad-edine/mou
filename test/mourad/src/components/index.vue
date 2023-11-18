<template>
    <div class="text-gray-600">
        <Entete />
        <!------fin du nav-->

        <model :produits="produits"/>

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
import model from './model.vue';
import ouverture from './ouverture.vue';
import pied from './footer.vue';
import Entete from './Entete.vue';
import pro from '../db.json'

export default {
    name: "index",

    data() {
        return {
            produits: pro
        }
    },
    setup() {

        

    },
   
    components: { ouverture, pied, Entete, model},

    methods: {
        verifier(){
            console.log(this.produits)
        }
    }

    
}
</script>

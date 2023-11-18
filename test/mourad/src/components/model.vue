<template>
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-blue-500 text-white">
                    <h5 class="text-white-700" id="exampleModalLabel">choissiez dans le menu</h5>
                    <div class="flex">
                        <img src="@/components/images/panier.png" alt="" class="w-10">
                        <img src="@/components/images/menu.png" alt="" class="w-10 ml-4 active">
                    </div>
                    <button type="button" class="text-white" data-bs-dismiss="modal" aria-label="Close">X
                    </button>
                </div>
                <div class="modal-body">
                    <!----liste des recettes-->

                    <div class="grid grid-cols-2">
                        <div v-for="item in prodice"  v-on:click="consolier">
                            <div>
                                <img src="./images/tacos.jpg" alt="" class="w-16 h-16">
                                <div class="m-2">
                                    <span class="text-semibold m-2 text-gray-700">{{ item.nom_produit }}</span>
                                    <span class="text-gray-400">prix :{{ item.prix }}  $</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!---fin de la liste des recettes-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="bg-rose-500 p-2" data-bs-dismiss="modal">annuler
                        commmande</button>
                    <button type="button" class="bg-green-500 p-2" v-on:click="sho">enregistrer comande</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import pro from '../database.json'
export default {


    name: 'model',
    data() {
        return {
           prodice : pro
        }
    },
    methods: {
        sho() {
            console.log(this.produits)
        },
        consolier(){
            console.warn(this.valeur)
        }
    },

    props : ['produits']
}
</script>
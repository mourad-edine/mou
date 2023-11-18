<template>
    <div class="modal fade " id="mode" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-blue-500 text-white">
                    <h5 class="text-white-700" id="exampleModalLabel">choissiez dans le menu</h5>
                    <div class="flex">
                        <img src="@/components/images/panier.png" alt="" class="w-10 bg-gray-400"><span class="  text-rose-600 text-lg font-bold">{{  }}</span>
                        <img src="@/components/images/menu.png" alt="" class="w-10 ml-4 active"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-dismiss="modal">
                    </div>
                    <button type="button" class="text-white" data-bs-dismiss="modal" aria-label="Close">X
                    </button>
                </div>
                <div class="modal-body">
                    <!----liste des recettes-->

                liste des cartes

                    <!---fin de la liste des recettes-->
                </div>
                <div class="modal-footer text-white">
                    <button type="button" class="bg-rose-500 p-2" data-bs-dismiss="modal">annuler
                        commmande</button>
                    <button type="button" class="bg-green-500 p-2" >enregistrer comande</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    

    name: 'ModelCart',
    data() {
        return {

        }
    },
    methods: {
       
    },

    props : {
        
    }
}
</script>
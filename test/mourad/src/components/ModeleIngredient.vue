<template>
    <div class="modal fade " id="pas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-blue-500 text-white">
                    <h5 class="text-white-700" id="exampleModalLabel">supplement</h5>
                    <button type="button" class="text-white" data-bs-dismiss="modal" aria-label="Close">X
                    </button>
                </div>
                <div class="modal-body">
                    <!----liste des recettes-->

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="pain">
                        <label class="form-check-label" for="pain">
                            pain
                        </label>
                    </div>


                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="salade">
                        <label class="form-check-label" for="salade">
                            salade
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="mayo">
                        <label class="form-check-label" for="mayo">
                            mayonnaise
                        </label>
                    </div>
                    <hr>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="piment">
                        <label class="form-check-label" for="piment">
                            piment
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="ketchup">
                        <label class="form-check-label" for="ketchup">
                            ketchup
                        </label>
                    </div>
                    <!---fin de la liste des recettes-->
                </div>
                <div class="modal-footer text-white">
                    <button type="button" class="bg-orange-500 p-2" data-bs-dismiss="modal" @click="sho">Ajouter au
                        panier</button>
                </div>
            </div>
        </div>
    </div>
    <model/>
</template>

<script>
import model from './model.vue';
export default {


    name: 'ModeleIngredient',
    data() {
        return {
        }
    },
    methods: {
        sho() {

        }
    },

    components : {
        model
    },

    props : {

    }
}
</script>
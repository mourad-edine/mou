<template>
    <div>
        <h1 v-on:click="naviguer" class="bg-red-400 text-white p-2 w-40 rounded-lg cursor-pointer hover:bg-slate-400 transition">retour au menue precedent</h1>
        <div class="flex justify-center mt-20">
            <div>
                <h1 class="text-lg font-semibold m-3 flex justify-center">Ajouter</h1>

                <form action="">
                <div>
                    <input type="text" placeholder="nom" v-model="nom" class = "focus:ring-2 ring-1 ring-inset focus:ring-inset focus:ring-indigo-600  border-solid border-1 border-blue-500 m-4 mt-2 p-2 w-80" required>
                </div>
                <div>
                    <input type="text" placeholder="prenom" v-model="prenom" class = "focus:ring-2 ring-1 ring-inset focus:ring-inset focus:ring-indigo-600 border-solid border-1 border-blue-500 m-4 mt-2 p-2 w-80" required>
                </div>
                <div>
                    <input type="text" placeholder="numero" v-model="numero" class = "focus:ring-2 ring-1 ring-inset focus:ring-inset focus:ring-indigo-600 border-solid border-1 border-blue-500 m-4 mt-2 p-2 w-80" required>
                </div>
                <div class="flex justify-center">
                    <p v-on:click="connecter" class="flex bg-green-500 text-white rounded-lg p-2 hover:bg-green-700 cursor-pointer">Ajouter</p>
                </div>
            </form>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default{
    name : "index2",
    data(){
        return{
            nom:"",
            prenom:"",
            numero :""
        }
    },

    methods : {
        async connecter(){
            let resultat = await axios.post("http://localhost:3000/utilisateur",{
                nom : this.nom,
                prenom : this.prenom,
                numero : this.numero
            });

            console.warn(resultat)
            if(resultat.status == 201){
                alert("ajouté avec success");
                localStorage.setItem("information-utilisateur",JSON.stringify(resultat.data));
            }
            else{
                alert("error");
            }
        },
        naviguer(){
            this.$router.push({name : 'Home'});
        }
    }
}
</script>
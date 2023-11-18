<template>
    <!------debut du nav-->
    <div class="bg-rose-500">
            <nav class="navbar navbar-expand flex justify-between text-white">
                <div class="flex">
                    <h1>
                        <a href="#" class="text-2xl font-thin m-5 mt-3 hover:text-white">Le Rosée</a>
                    </h1>
                    <img src="@/components/images/fleur.png" alt="" class="w-10">
                </div>

                <div class="m-3">
                   <router-link to='/about'  class="mr-3 p-2 border-yellow-300 rounded-lg border-2 border-solid hover:bg-yellow-300 hover:text-white transition ease-out duration-500">commander
                        en ligne
                        
                    </router-link>
                    <a href="#"
                        class="p-2 border-yellow-300 rounded-lg border-2 border-solid hover:bg-yellow-300 hover:text-white transition ease-out duration-500">à
                        propos
                    </a>
                    <!-----debut du modal-->
                    <!-- Button trigger modal -->
                    <button type="button" class="bg-green-400 text-white rounded-lg p-2 ml-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        voir menu
                    </button>

                    <!-- Modal -->
                    <!------fin du modal-->
                </div>

            </nav>
        </div>
</template>

<script>
export default{
    name : 'Entete',
    components : {
    }
}

</script>
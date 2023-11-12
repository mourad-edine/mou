<template>
    <Tailwi>
        <div class="text-gray-600">
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
                        <a href="#"
                            class="mr-3 p-2 border-yellow-300 rounded-lg border-2 border-solid hover:bg-yellow-300 hover:text-white transition ease-out duration-500">commander
                            en ligne
                        </a>
                        <a href="#"
                            class="p-2 border-yellow-300 rounded-lg border-2 border-solid hover:bg-yellow-300 hover:text-white transition ease-out duration-500">à
                            propos
                        </a>
                        <!-----debut du modal-->
                        <!-- Button trigger modal -->
                        <button type="button" class="bg-green-400 text-white rounded-lg p-2 ml-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            voir menu
                        </button>

                        <!-- Modal -->
                        <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-blue-500 text-white">
                                        <h5 class="text-white-700" id="exampleModalLabel">choissiez dans le menu</h5>
                                        <div class="flex">
                                            <img src="@/components/images/panier.png" alt="" class="w-10">
                                            <img src="@/components/images/menu.png" alt="" class="w-10 ml-4 active">
                                        </div>
                                        <button type="button" class="text-white" data-bs-dismiss="modal"
                                            aria-label="Close">X
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!----liste des recettes-->

                                        <div class="grid grid-cols-2">
                                            <div>
                                                <!---debut de la carte-->
                                                <div>
                                                    <img src="@/components/images/tacos.jpg" alt="" class="w-16 h-16">
                                                    <div class="m-2">
                                                        <span class="text-semibold m-2 text-gray-700">Tacos</span>
                                                        <span class="text-gray-400">prix : 12 $</span>
                                                    </div>
                                                </div>
                                            </div>


                                            <div>
                                                <div>
                                                    <img src="@/components/images/pizza.jpg" alt="" class="w-16 h-16">
                                                    <div class="m-2">
                                                        <span class="text-semibold m-2 text-gray-700">pizza</span>
                                                        <span class="text-gray-400">prix : 12 $</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <!---debut de la carte-->
                                                <div>
                                                    <img src="@/components/images/crème.jpg" alt="" class="w-16 h-16">
                                                    <div class="m-2">
                                                        <span class="text-semibold m-2 text-gray-700">crème glacé</span>
                                                        <span class="text-gray-400">prix : 12 $</span>
                                                    </div>
                                                </div>
                                            </div>






                                            <div>
                                                <div>
                                                    <img src="@/components/images/pain.jpg" alt="" class="w-16 h-16">
                                                    <div class="m-2">
                                                        <span class="text-semibold m-2 text-gray-700">pain au
                                                            chocolat</span>
                                                        <span class="text-gray-400">prix : 12 $</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <!---debut de la carte-->
                                                <div>
                                                    <img src="@/components/images/curry.jpg" alt="" class="w-16 h-16">
                                                    <div class="m-2">
                                                        <span class="text-semibold m-2 text-gray-700">macaroni</span>
                                                        <span class="text-gray-400">prix : 12 $</span>
                                                    </div>
                                                </div>
                                            </div>


                                            <div>
                                                <div>
                                                    <img src="@/components/images/croissant.jpg" alt=""
                                                        class="w-16 h-16">
                                                    <div class="m-2">
                                                        <span class="text-semibold m-2 text-gray-700">croissant</span>
                                                        <span class="text-gray-400">prix : 12 $</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <!---debut de la carte-->
                                                <div>
                                                    <img src="@/components/images/tiramisu.jpg" alt=""
                                                        class="w-16 h-16">
                                                    <div class="m-2">
                                                        <span class="text-semibold m-2 text-gray-700">tiramisu</span>
                                                        <span class="text-gray-400">prix : 12 $</span>
                                                    </div>
                                                </div>
                                            </div>


                                            <div>
                                                <div class="hover:bg-slate-500">
                                                    <a href="#" class="text-gray-700">
                                                        <img src="@/components/images/burger.jpg" alt=""
                                                            class="w-16 h-16">
                                                        <div class="m-2">
                                                            <span class="text-semibold m-2">humberger</span>
                                                            <span class="text-gray-400">prix : 12 $</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                        <!---fin de la liste des recettes-->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="bg-rose-500 p-2" data-bs-dismiss="modal">annuler
                                            commmande</button>
                                        <button type="button" class="bg-green-500 p-2">enregistrer comande</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!------fin du modal-->
                    </div>

                </nav>
            </div>
            <!------fin du nav-->

            <div>
                <div>
                    <div>
                        <img src="@/components/images/arranger.jpg" alt="" class="w-full" height="200">
                    </div>
                </div>
            </div>
            <!-----fin de l'image    -->
            <div class="flex justify-center mt-8">
                <div class="bg-blue-200 p-9 py-20">
                    <p class="font-semibold text-lg hidden">heure d'ouverture</p>
                    <div class="ml-3">
                        <span class="block font-bold text-lg">
                            lundi - vendredi
                        </span>
                        <span class="ml-3">
                            07 : 00 - 12 : 00
                        </span>
                        <span class="block ml-3">
                            15 : 00 - 21 : 00
                        </span>
                    </div>
                </div>
                <div>
                    <img src="@/components/images/ouverture.jpg" alt="">
                </div>
            </div>


            <main class="px-12 pt-4 w">
                <!---debut du header-->
                <!--<div>
                    <h1 class="text-lg font-bold just">Methode de payement disponible</h1>
                    <hr class="mb-4 mt-2">
                    <div class="flex justify-around">
                        <div>
                            <img src="@/components/images/telma.png" alt="" class="w-80 h-50">
                        </div>
                        <div>
                            <img src="@/components/images/orange.jpg" alt="" class="h-50">
                        </div>
                    </div>  
                </div>
                -->
                <!---fin du header-->
            </main>
            <!----footer-->


            <footer class="bg-white rounded-lg dark:bg-gray-900">
                <div class="w-full max-w-screen-xl mx-auto p-4 md:py-2">
                    <div class="sm:flex sm:items-center sm:justify-between">
                        <a href="#"
                            class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                            <span
                                class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                        </a>
                        <ul
                            class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                            <li>
                                <a href="#" class="hover:underline me-4 md:me-6">à propos</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline me-4 md:me-6">Licence</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                    <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a
                            href="#" class="hover:underline">chams edine</a>. Tout droits reservé.</span>
                </div>
            </footer>


        </div>

    </Tailwi>
</template>

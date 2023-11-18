<template>
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

</template>

<script>
export default{
    name : 'ouverture'
}
</script>
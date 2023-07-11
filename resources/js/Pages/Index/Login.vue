<template>

<body class="h-screen w-full bg-grey-300 flex-nowrap">

 <div id="main" class="w-full h-full bg-gray-100 flex items-center justify-center"> 

  <div class="w-1/4 h-3/5 border mb-12 flex-nowrap shadow-lg"> 

    <div class="h-1/5 bg-white flex items-center justify-center text-2xl text-gray-400">
        <div class="h-1/2">𝔾𝔹𝕂 </div>
    </div>

    <div class=" bg-white h-3/5">
           


            <form class="h-full flex-nowrap">

                <div class="flex justify-start border-t border-red-300">
                        <label class="my-2  ml-4 font-bold" for="email"> Email </label>
                </div>

                <div class="w-full flex items-center justify-center mt-0.5"> 
                        <input type="email" name="email" id="email" class="ml-4 mr-4 w-full rounded-sm" placeholder="name@company.com" required="">
                </div>

                <div class="flex justify-start mt-6">
                        <label class="my-2 ml-4 font-bold" for="password"> Password </label>
                </div>

                <div class="w-full flex items-center justify-center mt-0.5"> 
                        <input type="password" name="password" id="password" class="ml-4 mr-4 w-full rounded-sm" placeholder="password" required="">
                </div>
                       
                



            </form>
    </div>

    <div class="bg-red-300 h-1/5">
            hello 3
    </div>

  </div>


 </div>
    
</body>


</template>

<script setup>
import { Link } from '@inertiajs/vue3'

</script>
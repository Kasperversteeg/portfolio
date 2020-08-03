<template>
  <div>
     <div class="hidden md:block">
         <ul class="h-full flex-row flex justify-end text-lg font-bold text-primary">
            <li class="border-transparent hover:border-primary border-b-4 flex items-center cursor-pointer transition ease-out duration-200"><a class="px-3 py-6" href="/">Home</a></li>
            <li class="border-transparent hover:border-primary border-b-4 flex items-center cursor-pointer transition ease-out duration-200"><a class="px-3 py-6" href="portfolio">Portfolio</a></li>
            <li class="border-transparent hover:border-primary border-b-4 flex items-center cursor-pointer transition ease-out duration-200"><a class="px-3 py-6" href="overmij">Over mij</a></li>
         </ul>
     </div>
      <div class="block md:hidden">
         <svg class="text-primary fill-current h-12 w-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 20"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg>
      </div>
   </div>
</template>

<script>
export default {
   name: 'Navigation',
}
</script>

<style>

</style>
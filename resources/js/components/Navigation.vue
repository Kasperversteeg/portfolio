<template>
  <div class="pr-4 md:pr-0 h-full flex items-center justify-end">
     <div class="hidden h-full md:block">
         <ul class="h-full flex-row flex justify-end text-2xl font-bold text-primary">
            <li class="border-transparent hover:border-primary border-b-4 flex items-center cursor-pointer transition ease-out duration-200"><a class="px-3 py-6" href="/">Home</a></li>
            <li class="border-transparent hover:border-primary border-b-4 flex items-center cursor-pointer transition ease-out duration-200"><a class="px-3 py-6" href="portfolio">Portfolio</a></li>
            <li class="border-transparent hover:border-primary border-b-4 flex items-center cursor-pointer transition ease-out duration-200"><a class="px-3 py-6" href="overmij">Over mij</a></li>
         </ul>
     </div>
     <div class="block md:hidden">
         <div id="btn-dropdown" class="select-none w-12 cursor-pointer flex flex-col relative justify-center z-40" @click="toggleMenu()" :class="btnDropdownActive">
            <span class="w-full bg-primary rounded"></span>
            <span class="w-full bg-primary rounded"></span>
            <span class="w-full bg-primary rounded"></span>
         </div>
         <transition name="slideFromRight">
            <div id="toggle-btn" v-if="menuToggled" class="fixed h-full w-3/4 bg-gray-400 top-0 right-0 z-20 flex items-center">
               <ul class="w-full flex flex-col">
                  <li><a class="btn-dropdown" href="/">Home</a></li>
                  <li><a class="btn-dropdown" href="portfolio">Portfolio</a></li>
                  <li><a class="btn-dropdown" href="overmij">Over mij</a></li>
               </ul>
            </div>
         </transition>
     </div>
   </div>
</template>

<script>
export default {
   name: 'Navigation',
   data () {
    return {
       menuToggled: false,
       btnDropdownActive: ''
    }  
   },
   methods: {
      toggleMenu(){
         this.menuToggled = !this.menuToggled;
         if (this.menuToggled) {
            this.btnDropdownActive = 'btn-dropdown-active';
         } else {
            this.btnDropdownActive = '';
         }
      }
   }
}
</script>

<style lang="scss" scoped>
   #btn-dropdown {
      span {
         height: 8px;
         margin: 4px 0;
         transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
                     background 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
                     opacity 0.55s ease;
         &:first-child {
            transform-origin: 0% 0%;
         }
         &:last-child{
            transform-origin: 0% 100%;
         }
      }
   }
   .btn-dropdown-active {
      span {
         background: #36383F;
         &:first-child {
            transform: rotate(45deg) translate(7px, -6px);
         }
         &:nth-last-child(2){
            opacity: 0;
            transform: rotate(0deg) scale(0.2, 0.2);
         }
         &:nth-last-child(1){
    transform: rotate(-45deg) translate(9px, 4px);
            
         }
      }
   }
   .slideFromRight-enter-active, .slideFromRight-leave-active {
       transition: all 0.5s ease-in-out;
   }
   .slideFromRight-enter, .slideFromRight-leave-to {
      transform: translateX(600px);
   }
   
   .slideFromRight-leave, .slideFromRight-enter-to {
      transform: translateX(0px);
   }
</style>
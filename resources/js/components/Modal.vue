<template>
  <transition name="fade">
    <div class="fixed w-full h-screen bg-black bg-opacity-25 flex justify-center items-center" @click.self="closeModal">
       <div class="flex flex-row flex-wrap lg:flex-no-wrap,s w-full lg:w-4/5 xl:w-3/4 items-center justify-center">
          <div class="p-2 bg-white text-primary font-bold text-center mx-1  w-1/4 lg:w-auto rounded">
            <button @click="prev">Vorige</button>
          </div>
         <div class="relative bg-white rounded p-4 w-full m-1 lg:flex-1 order-first lg:order-none">
            <div class="absolute top-0 right-0 px-4 cursor-pointer z-40" @click="closeModal">
               <a class="text-3xl">&times</a>
            </div>
            <div class="relative">
               <ContentSlide v-for="(item, index) in portfolioItems" :key='index' :id='item.id' ref='visable'>
               </ContentSlide>
            </div>
         </div>
         <div class="p-2 bg-white text-primary font-bold text-center m-1 w-1/4 lg:w-auto rounded">
            <button @click="next">Volgende</button>
         </div>
       </div>

    </div>
  </transition>
</template>

<script>
import { mapGetters, mapActions, mapState } from 'vuex';
import ContentSlide from './ContentSlide.vue';

export default {
   name: 'Modal',
   components: {
    ContentSlide
   },
   methods:{
      ...mapActions('modal', ['fetchActiveIndex', 'closeModal']),
      changeItemTo(from, to) {
         // console.log('current : ' + from + ' switching to : ' + to);
         // Find out the direction we're moving.
         // This is useful for animations.
         const direction = from < to ? `left` : `right`;
         // // Call the `hide()` method on the current
         this.$refs.visable[from].hide(direction);
         // // Call the `show()` method on the `contentslide`
         this.$refs.visable[to].show(direction);
         // component with the correspondign index.
         this.fetchActiveIndex(to);

     },
     next() {
         let nextIndex = this.activeIndex + 1; 
         if (nextIndex >= this.maxIndex){
            console.log('changing index to 0');
            nextIndex = 0;
         };
         this.changeItemTo(this.activeIndex, nextIndex);
     },
     prev() {
         let prevIndex = this.activeIndex - 1;
         if (prevIndex < 0){
            console.log('changing index to maxIndex');
            prevIndex = this.maxIndex - 1;
         };
         this.changeItemTo(this.activeIndex, prevIndex);
     },
   },
   computed: {
     maxIndex(){
        return this.portfolioItems.length;
     },
      ...mapState({
         activeIndex: state => state.modal.activeIndex,
         portfolioItems: state=> state.portfolioItems.items
      })
   }
}
</script>

<style>

.fade-enter-active, .fade-leave-active {
  transition: opacity 0.25s ease-out;
}

.fade-enter, .fade-leave-to {
  opacity: 0;
}
</style>
<template>
  <transition name="fade">
    <div class="fixed w-full h-screen bg-black bg-opacity-50 flex justify-center items-center z-50" @click.self="closeModal">
       <div class="max-h-screen flex flex-row flex-wrap lg:flex-no-wrap,s w-full lg:w-4/5 xl:w-3/4 items-center justify-center"  @click.self="closeModal">
          <div class="w-1/4 text-2xl lg:text-xl lg:w-auto flex justify-center" >
            <a class="btn btn-primary" @click="prev">Vorige</a>
          </div>
         <div class="relative bg-white rounded p-6 w-full m-1 lg:flex-1 order-first lg:order-none">
            <div id="btn-close" class="absolute cursor-pointer select-none w-12 h-12 z-50" @click="closeModal">
               <span class="block rounded"></span>
               <span class="block rounded"></span>
            </div>
            <div class="relative">
               <ContentSlide v-for="(item, index) in portfolioItems" :key='index' :id='item.id' ref='visable'>
               </ContentSlide>
            </div>
         </div>
         <div class="w-1/4 text-2xl lg:text-xl lg:w-auto flex justify-center">
            <a class="btn btn-primary" @click="next">Volgende</a>
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
            nextIndex = 0;
         };
         this.changeItemTo(this.activeIndex, nextIndex);
     },
     prev() {
         let prevIndex = this.activeIndex - 1;
         if (prevIndex < 0){
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

<style lang="scss" scoped>
   #btn-close {
      top: 1rem;
      right: 1rem;
      span {
         transition: all .2s ease-in-out;
         background: #36383F;
         height: 8px;
         margin: 4px 0;
         &:first-child {
            transform: rotate(45deg) translate(7px, -6px);
            transform-origin: 0% 0%;
         }
         &:last-child{
            transform-origin: 0% 100%;
            transform: rotate(-45deg) translate(-5px, 18px);
         }
      }
      &:hover {
         span {
            background:#AF1B1B; 
         }
      }
   }

.fade-enter-active, .fade-leave-active {
  transition: opacity 0.25s ease-out;
}

.fade-enter, .fade-leave-to {
  opacity: 0;
}
</style>
<template>
  <transition name="fade">
    <div class="absolute w-full h-screen bg-black bg-opacity-25 flex justify-center items-center" @click.self="$emit('close-modal')">
      <div class="w-3/4 bg-white shadow-sm rounded p-4">
        <div class="flex justify-between">
          <h1>{{ this.data.title }}</h1>
          <a class="cursor-pointer text-3xl" @click="$emit('close-modal')">&times</a>
        </div>
        <img :src=this.data.img alt="">
        <a :href=this.data.url>{{ this.data.url }}</a>
        <p>{{ this.data.description }}</p>
      </div>
    </div>
  </transition>
</template>

<script>
export default {
   name: 'Modal',
   data () {
      return{
         data: {}
      }
   },
   methods:{      
      getData(){
         this.data = this.$root.$data.modalData;        
         console.log('modal data = '+this.data);
      }
   },
   watch:{
      '$root.$data.modalData': function(){
         this.getData();
      }
      
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
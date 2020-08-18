<template>
  <div class="py-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
      <div class="has-hover rounded relative cursor-pointer shadow p-3" v-for="(item, index) in portfolioItems" :key='index'  @click="open(index)">
            <div class="content-overlay rounded absolute inset-0 bg-primary w-full h-full opacity-0 transition-all duration-200 ease-in-out"></div>
            <img :src="'img/'+item.thumb" />   
            <div class="-translate-y-1/2 -translate-x-1/2 content-details text-white absolute text-center px-1 opacity-0 w-full transition-all duration-300 ease-in-out">
               <p class="mb-2 text-lg font-bold">{{ item.title }}</p>
               <p>Klik voor meer info</p>
            </div>
         </div>
   </div>
</template>

<script>
import { mapActions, mapState } from 'vuex';

export default {
   name: 'featured',
   methods:{
      ...mapActions('modal', ['openModal']), 
      open(index){
         this.openModal(index);      
      },
   },
   computed: mapState({portfolioItems: state=>state.portfolioItems.portfolioItems}),
   created (){
      this.$store.dispatch('portfolioItems/fetchFeatured');
   }
   
}
</script>

<style lang="scss">
.content-details {
  top: 20%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.has-hover:hover .content-overlay{
  opacity: 1;
}
.has-hover:hover .content-details{
  top: 50%;
  opacity: 1;
}
</style>
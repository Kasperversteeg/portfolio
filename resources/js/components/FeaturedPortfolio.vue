<template>
  <div class="py-4 grid grid-cols-4 gap-4">
      <div class="has-hover relative cursor-pointer shadow p-3" v-for="(item, index) in portfolioItems" :key='index'  @click="open(index)">
            <div class="content-overlay absolute inset-0 bg-primary w-full h-full opacity-0 transition-all duration-200 ease-in-out"></div>
            <img :src="'img/'+item.thumb+'.png'" />   
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
      ...mapActions('modal', ['openModalFeatured']), 
      open(index){
         this.openModalFeatured(index);      
      },
},
   computed: mapState({portfolioItems: state=>state.portfolioItems.featured}),
   created (){
      this.$store.dispatch('portfolioItems/fetchFeatured')
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
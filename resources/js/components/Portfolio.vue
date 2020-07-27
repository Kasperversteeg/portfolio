<template>
  <div class="grid grid-cols-4 gap-2">

      <div class="border border-primary" v-for="portfolioItem in portfolioItems" :key='portfolioItem.id'>
         {{ portfolioItem.title }}
         <a class="cursor-pointer" @click="$emit('open-modal')">{{ portfolioItem.url }}</a>
      </div>

   </div>
</template>

<script>
import axios from 'axios';

export default {
   name: 'Portfolio',
   data () {
      return {
         portfolioItems: []
      }
   },
   methods:{
      async getItems() {
         try {
            let response = await axios.get('/p-items');
            this.portfolioItems = response.data;
         } catch(err){
            console.log(err);
         }
      }
   },
   created (){
      console.log('getting items');
      this.getItems();
   }
}
</script>

<style>

</style>
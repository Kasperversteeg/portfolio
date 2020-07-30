<template>
  <div class="py-4 grid grid-cols-4 gap-4">
      <div class="cursor-pointer shadow p-3" v-for="item in portfolioItems" :key='item.id'  @click="$emit('open-modal', item)">
         <div class="">
            <!-- <h1>{{ item.title }}</h1> -->
            <img :src="'img/'+item.thumb+'.png'" />
         </div>
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
      this.getItems();
   }
}
</script>

<style>


</style>
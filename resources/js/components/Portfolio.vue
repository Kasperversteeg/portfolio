<template>
  <div class="grid grid-cols-4 gap-2">

      <div class="border border-primary">
         <div class="">
            <img src="img/port-3-thumb.png">
         </div>
         <div class="">
            <h3>Kasper Versteeg</h3>
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
      console.log('getting items');
      this.getItems();
   }
}
</script>

<style>

</style>
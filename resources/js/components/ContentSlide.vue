<template>
  <transition :name="transition" mode="out-in">
    <div v-show="item.active">
      <h3>{{item.title}}</h3>
      <img :src=item.img alt="">
      <a :href=item.url target="_blank">{{ item.url }}</a>
      <p>{{ item.description }}</p>
    </div>
  </transition>
</template>

<script>
import {mapGetters, mapActions} from 'vuex';

export default {
  name: `ContentSlide`,
  props:['id', 'featured'],
  data() {
    return { 
      transition: ``
    };
  },
  methods: {
     ...mapActions('portfolioItems', ['showItem', 'hideItem', 'showFeatured', 'hideFeatured']),
    // Deactivate and hide the slide and
    // also activate the correct transition.
    hide(direction) {
      this.transition = `ContentSlide--transition-${direction}`;
      
       if(this.featured){
          this.hideFeatured(this.id);
       } else {
         this.hideItem(this.id);
       }
    },
    // Activate and show the slide and
    // also activate the correct transition.
    show(direction) {
      this.transition = `ContentSlide--transition-${direction}`;
      if(this.featured){
         this.showFeatured(this.id);
      } else {
         this.showItem(this.id);
      }
    },
  },
  computed:{
     ...mapGetters('portfolioItems',['portfolioItem', 'featuredItem']),
     item(){
        if(this.featured){
           return this.featuredItem(this.id);
        } else {
         return this.portfolioItem(this.id);
        } 
     }
  },
};
</script>

<style lang="scss">
.ContentSlide--transition-left-enter-active,
.ContentSlide--transition-left-leave-active,
.ContentSlide--transition-right-enter-active,
.ContentSlide--transition-right-leave-active {
  transition-duration: 0.5s;
  transition-property: height, opacity, transform;
  transition-timing-function: cubic-bezier(0.55, 0, 0.1, 1);
  overflow: hidden;
}

.ContentSlide--transition-left-leave-active,
.ContentSlide--transition-right-leave-active {
  top: 0;
  position: absolute;
}

.ContentSlide--transition-left-enter,
.ContentSlide--transition-right-leave-active {
  opacity: 0;
  transform: translate(2em, 0);
}

.ContentSlide--transition-left-leave-active,
.ContentSlide--transition-right-enter {
  opacity: 0;
  transform: translate(-2em, 0);
}
</style>
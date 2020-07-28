<template>
  <transition name="fade">
    <div class="absolute w-full h-screen bg-black bg-opacity-25 flex justify-center items-center" @click.self="$emit('close-modal')">
      <div class="w-3/4 bg-white shadow-sm rounded p-4">
        <div class="flex justify-between">
          <h1>Title</h1>
          <a class="cursor-pointer text-3xl" @click="$emit('close-modal')">&times</a>
        </div>
        <img src="" alt="">
        <h3>Url</h3>
        <p>Description</p>
      </div>
    </div>
  </transition>
</template>

<script>
export default {

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
<template>


  <div class="grid grid-cols-12 relative">
    <side-bar></side-bar>

    <div class="col-span-9 p-5 ">

      <router-view></router-view>
    </div>
  </div>

  <notification-bar> </notification-bar>

</template>
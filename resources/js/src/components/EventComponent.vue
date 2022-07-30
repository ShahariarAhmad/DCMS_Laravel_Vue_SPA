<template>
  <section name="event" class="container mx-auto my-14" id="event">
    <h1 class="py-8 text-4xl">Events</h1>

    <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-6">
      <div class="bg-slate-100 rounded-xl shadow-2xl" v-for="event in eventList" :key="event.id">
        <img :src="event.img_url" class="rounded-t-xl" />
        <div class="p-4">
          <h1 class="text-2xl pb-4">{{ event.name }}</h1>
          <p> {{ event.house_no }},{{ event.road_no }},{{ event.area }},{{ event.district }}</p>
          <p>{{ event.time }}</p>
        </div>
      </div>

    </div>
  </section>
</template>


<script>
export default {
  props: ['eventList'],
  //   props: {
  //   eventList: {
  //     type: Object,
  //     required: true
  //   }
  // },


}


</script>
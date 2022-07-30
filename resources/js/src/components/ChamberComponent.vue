<template>


  <section name="chamber" class="container mx-auto mt-14" id="chamber">
    <h1 class="py-8 text-4xl">Chambers</h1>

    <div  class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-6">
      <div class="bg-slate-100 rounded-xl shadow-2xl" v-for="chamber in chamberList" :key="chamber.id">
        <img
          :src="chamber.img_url"
          class="rounded-t-xl"
        />
        <div class="p-4">
          <h1 class="text-2xl pb-4">{{chamber.name}}</h1>
              <p> {{chamber.house_no}},{{chamber.road_no}},{{chamber.area}},{{chamber.district}}</p>
              <p>{{chamber.time}}</p>
        </div>
      </div>

    </div>
  </section>
</template>

<script>
export default {
props: ['chamberList'],
//   props: {
//   chamberList: {
//     type: Object,
//     required: true
//   }
// },
 

}


</script>
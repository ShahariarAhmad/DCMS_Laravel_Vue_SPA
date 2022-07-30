<template>

  <section
    name="blogs"
    class="container mx-auto grid md:grid-cols-2 gap-3"
    id="blog"
  >
  
  <h1 class="py-8 text-4xl">Blogs</h1> <br>
    <div v-for="article in articleList" :key="article.id"  class="grid grid-cols-12 shadow-2xl rounded-xl border-solid border-2 border-indigo-300">
      <img
        class=" col-span-12 lg:col-span-4 md:col-span-4 sm:col-span-12 object-cover md:rounded-l-xl h-full"
        :src="article.img_url"
        alt="No image..."
      />
      <div
        class="
          col-span-12
          lg:col-span-8
          md:col-span-8
          sm:col-span-12
          grid grid-cols-12
        "
      >
        <div class="col-span-12 p-3 sm:col-span-12">
          <h1>{{article.title}}</h1>
          <p>
            {{article.article}}
          </p>
        </div>
        <router-link class="bg-blue-500 col-span-12 text-center hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-br-lg" :to="{ name: 'post', params: { id: article.id }}">Read More..</router-link>


      </div>
    </div>

  </section>
</template>

<script>

export default{
  props:['articleList']
}

</script>
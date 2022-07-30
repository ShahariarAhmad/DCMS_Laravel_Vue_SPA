<template>
  <div class="grid grid-cols-12">
    <side-bar></side-bar>
    <div class="col-span-8 p-5 ">
      <div v-if="bool" class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md"
        role="alert">
        <div class="flex">
          <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20">
              <path
                d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
            </svg></div>
          <div>
            <p class="font-bold">Our privacy policy has changed</p>
            <p class="text-sm">Make sure you know how these changes affect you.</p>
          </div>
        </div>
      </div>



      <div class="bg-indigo-300 mb-10" v-if="preview != null">
        <img class="object-cover h-48 w-full" :src="preview">
      </div>
      <div class="grid grid-cols-4 shadow-2xl">
        <div class="col-span-3">

          <input v-model.lazy="title" type="text" class="px-2 py-3 w-full mb-5 border border-gray-400"> <br>
          <textarea v-model.lazy="article" class="w-full p-2 border border-gray-400" rows="15"></textarea>

          <div class="grid grid-cols-2 gap-4 shadow-2xl mb-5">
            <input type="file" @change="onChange">
            <button @click="draft"
              class="w-1/2 mx-auto sm:inline-block text-white bg-indigo-300 dark:hover:bg-gray-700 rounded-lg text-sm p-1.5"
              type="button"> Save As Drafts </button>
            <button @click="post"
              class="w-1/2 mx-auto sm:inline-block text-white bg-indigo-300 dark:hover:bg-gray-700 rounded-lg text-sm p-1.5"
              type="button"> Post </button>

          </div>


        </div>
        <div class="col-span-1 px-2 pt-5">
          <h1>Category</h1>
          <div class="grid grid-cols-1 mt-5">
            <div v-for="category in categories" :key="category.id" class="grid grid-cols-12 gap-1 mb-2 ">
              <input v-model="checked" :value="category.id" type="checkbox" class="col-span-2">
              <label class="col-span-10"> {{ category.category }} </label>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</template>

<script>
// import FormData from 'form-data';

export default {

  data() {
    return {
      preview: null,
      img: null,
      title: null,
      article: null,
      categories: null,
      checked: [],
      bool: false,
      status: null
    }
  },
  
    created() {
    document.title = "Write Article"
    },
  mounted() {
    axios.get('/api/article/category_list').then(response => {
      this.categories = response.data;
      // console.log(this.categories)
    })
  },

  methods: {
    onChange(e) {

      this.img = e.target.files[0]
      this.preview = URL.createObjectURL(this.img);
      console.log(this.preview)

    },
    post() {
      this.status = 1
      this.onSubmit()
    },
    draft() {
      this.status = 0
      this.onSubmit()
    },

    onSubmit() {
      const form = new FormData();

      form.append('file', this.img);
      form.append('title', this.title);
      form.append('article', this.article);
      form.append('categories', [this.checked]);
      form.append('status', this.status);


      axios.post('/api/article', form).then(res => {
        if (res.status == 200) {
          //  window.location.reload()
          this.bool = true,
            // this.preview = null,
            this.img = null,
            this.title = null,
            this.article = null,
            this.preview = null,
            this.checked = null

        } else {
          this.bool = false
        }

      })


    }

  }
}
</script>



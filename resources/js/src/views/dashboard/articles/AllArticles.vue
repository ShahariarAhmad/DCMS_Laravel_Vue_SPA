<template>
    <div class="grid grid-cols-12">
        <side-bar></side-bar>

        <div class="col-span-8 p-5">

            <div v-if="bool" class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md"
                role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                        </svg></div>
                    <div>
                        <p class="font-bold">Our privacy policy has changed</p>
                        <p class="text-sm">Make sure you know how these changes affect you.</p>
                    </div>
                </div>
            </div>







            <div class="grid grid-cols-12 gap-6 shadow-2xl p-5 rounded-2xl mb-5 border border-gray-400">
                <div class="col-span-8">
                    <div v-for="article in articles" :key="article.id">
                        <p>{{ article.img_url.img_url }}</p>
                        <br>
                        <div class="float-right shadow-md hover:shadow-lg focus:shadow-lg">
                            <button @click="destroy(article.id)"
                                class="rounded-l px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase hover:bg-blue-700 focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-blue-800 transition duration-150 ease-in-out">
                                Delete
                            </button>

                            <router-link class="
           px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase hover:bg-blue-700 focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-blue-800 transition duration-150 ease-in-out
              " :to="{ name: 'EditArticle', params: { id: article.id } }"> Edit </router-link>
                        </div>
                        <br>
                        <br>
                        <span
                            class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                                :src="article.img_url" />
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ article.title }}
                                </h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                    {{ article.article }}
                                </p>
                            </div>
                        </span>
                    </div>
                </div>

                <div class="col-span-4">
                    <div class="grid grid-cols-1">
                        <div v-for="article in dratfs" :key="article.id"
                            class="flex flex-col justify-between p-4 mb-2 leading-normal shadow-2xl">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                {{ article.title }}
                            </h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                {{ article.article.substring(0, 50) + '...' }}
                            </p>
                            <button @click="destroy(article.id)"
                                class="sm:inline-block text-white bg-red-300 dark:hover:bg-red-700  rounded-lg text-sm p-1.5 mb-2"
                                type="button">
                                Delete
                            </button>

                            <router-link
                                class="sm:inline-block text-white bg-indigo-300 dark:hover:bg-gray-700  rounded-lg text-sm p-1.5"
                                :to="{ name: 'EditArticle', params: { id: article.id } }"> Write Again </router-link>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            articles: {},
            dratfs: {},
            bool: false,
            loop: false
        }
    },
    
    created() {
    document.title = "All Article"
    },
    mounted() {
        axios.get("/api/article").then(response => {

            this.articles = response.data.article,
                this.dratfs = response.data.dratfs
            // console.log(this.articles.length);

        });
    },
    methods: {
        destroy(id) {



            axios.delete(`/api/article/${id}`).then(res => {
                if (res.status == 200) {
                    //  window.location.reload()
                    this.bool = true

                    this.articles.forEach((element, index) => {
                        console.log(element.id + "===" + index)
                        element.id == id ? this.articles.splice(index, 1) : this.loop = true
                    });

                    if (this.loop) {
                        this.dratfs.forEach((element, index) => {
                            console.log(element.id + "===" + index)
                            element.id == id ? this.dratfs.splice(index, 1) : false
                        });
                    }


                    // console.log("After delete :" + this.articles.length);

                } else {
                    this.bool = false
                }

            });
        }
    }
}
</script>
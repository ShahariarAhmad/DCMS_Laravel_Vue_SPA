<template>


    <div class="grid grid-cols-12 gap-6 shadow-2xl p-5 rounded-2xl my-5 border border-gray-400">
        <div class="col-span-6">
            <div class="inline-flex">
                <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-2 rounded-md">
                    edit
                </button>

            </div>
        </div>

        <div class="col-span-12">
            <div class="grid grid-cols-1">
                <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                    <p class="border border-slate-200 col-span-1  p-1">Facebook:</p>

                    <input v-model="facebook" type="text" class="border border-slate-200 col-span-1 p-1">
                </div>

                <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                    <p class="border border-slate-200 col-span-1  p-1">Linkedin:</p>

                    <input v-model="linkedin" type="text" class="border border-slate-200 col-span-1 p-1">
                </div>
                <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                    <p class="border border-slate-200 col-span-1  p-1">Youtube:</p>

                    <input v-model="youtube" type="text" class="border border-slate-200 col-span-1 p-1">
                </div>


                <button @click="store" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Update
                </button>
            </div>
        </div>

    </div>

</template>

<script>
export default {
    data() {
        return {
            facebook: null,
            youtube: null,
            linkedin: null
        }
    },
    created() {
    document.title = "Social Media"
    },
    methods: {
        store() {



            axios.post("/api/social", {
                facebook: this.facebook,
                youtube: this.youtube,
                linkedin: this.linkedin

            }).then(() => {
                this.facebook = this.facebook,
                    this.youtube = this.youtube,
                    this.linkedin = this.linkedin
                // console.log(response);
            }).catch(function (error) {
                console.log(error);
            });




            axios.get("/api/social").then(response => {

                this.facebook = response.data.f_link,
                    this.youtube = response.data.y_link,
                    this.linkedin = response.data.l_link

                // console.log(response.data);

            });
        }
    },
    mounted() {



        axios.get("/api/social").then(response => {

            this.facebook = response.data.f_link,
                this.youtube = response.data.y_link,
                this.linkedin = response.data.l_link

            // console.log(response.data);

        });
    },



}
</script>

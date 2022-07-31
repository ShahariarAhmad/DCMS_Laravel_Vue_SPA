<template>
    <div
        class="min-h-screen w-fullr sm:justify-center items-center pt-6 sm:pt-0"
    >
        <div class="w-full flex flex-col items-center justify-center">
            <div class="text-center">
                <a href="/">
                    <h1 class="font-semibold text-3xl">DCMS</h1>
                </a>
                <br />
            </div>
            <div
                class="w-full border border-sky-300 sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"
            >
                <!---->
                <!--v-if-->
                <!--v-if-->
                <div class="my-10">
                    <div>
                        <label
                            class="mb-3 block font-medium text-sm text-gray-700"
                            ><span>Email</span></label
                        >
                        <input
                            v-model.lazy="form.email"
                            class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full"
                        />
                    </div>
                    <div class="mt-4">
                        <label
                            class="mb-3 block font-medium text-sm text-gray-700"
                            ><span>Password</span></label
                        >
                        <input
                            v-model="form.password"
                            class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full"
                        />
                    </div>
                    <div class="block mt-4">
                        <label class="flex items-center"
                            ><input
                                type="checkbox"
                                @click="checked"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="remember"
                            /><span class="ml-2 text-sm text-gray-600"
                                >Remember me</span
                            ></label
                        >
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <router-link
                            :to="{ name: 'forgot' }"
                            class="underline text-sm text-gray-600 hover:text-gray-900"
                            >Forgot your password ?
                        </router-link>

                        <button
                            @click.prevent="submit"
                            class=" inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150 ml-4"
                        >
                          <svg class="animate-spin h-5 w-5 mr-3 ..." viewBox="0 0 24 24">
    <!-- ... -->
  </svg>
                            Log in
                        </button>
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
            form: {
                email: null,
                password: null,
                remember: false,
            },
        };
    },

    methods: {
        submit() {
            axios.post("/api/login", this.form).then((r) => {
            
                axios.get("api/user").then((res) => {
                   $cookies.set('auth', JSON.stringify (res.data))
                   if (res.data.role_id == 1) {
                           this.$router.push({name:"AllArticles"})
                   } 
                   if (res.data.role_id == 2) {
                           this.$router.push({name:"AllRecords"})
                   }
                   if (res.data.role_id == 3) {
                           this.$router.push({name:"Appointments"})
                   }
              
            
                });
            });
        },

        checked() {
            this.form.remember = !this.form.remember;
            console.log(this.form.remember);
        },
       
    },




};
</script>

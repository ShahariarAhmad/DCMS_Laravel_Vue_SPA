<template>
    <div class="my-32 w-full flex flex-col items-center justify-center">
        <div class="text-center">
            <a href="/">
                <h1 class="font-semibold text-3xl">DCMS</h1>
            </a>
            <br />
        </div>
            <div class="w-full border border-sky-300 sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <!---->
            <!--v-if-->
            <!--v-if-->
            <div class="my-10">
                <div>
                    <label class="mb-3 block font-medium text-sm text-gray-700"><span>Email</span></label>
                    <input v-model.lazy="email" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
                </div>
                <div class="mt-4">
                    <label class="mb-3 block font-medium text-sm text-gray-700"><span>Password</span></label>
                    <input v-model.lazy="password" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
                </div>
                <div class="mt-4">
                    <label class="mb-3 block font-medium text-sm text-gray-700"><span>Password</span></label>
                    <input v-model.lazy="confirmPassword"
                        class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
                </div>
                <div class="flex items-center justify-end mt-4">
                    <router-link :to="{ name: 'forgot' }" class="underline text-sm text-gray-600 hover:text-gray-900">
                        Forgot your password ?</router-link>

                    <button @click.prevent="submit"
                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150 ml-4">
                        Change Password
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            // email: this.$route.query.email.trim(),
            email: this.$route.fullPath.split("/")[3],
            password: null,
            confirmPassword: null,
            token: this.$route.fullPath.split("/")[2],
        };
    },
    methods: {
        submit() {
            const obj = new FormData()
            obj.append('email', this.email)
            obj.append('password', this.password)
            obj.append('confirmPassword', this.confirmPassword)
            obj.append('token', this.token)

            axios.post('/api/reset-password', obj).then(()=>{
                this.$router.push({name:'login'})
            });
        }
    },
    mounted() {

    },
};
</script>

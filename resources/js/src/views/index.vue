<template>
    <section class="h-16 bg-slate-100">
        <nav class="container mx-auto">
            <ul class="p-4 float-right text-center">
                <li
                    class="text-center inline-block hover:bg-cyan-700 hover:text-white p-2 mx-2 rounded-md"
                >
                    <a href="/"> Home </a>
                </li>
                <li
                    class="text-center inline-block hover:bg-cyan-700 hover:text-white p-2 mx-2 rounded-md"
                >
                    <a href="/#chamber"> chamber </a>
                </li>
                <li
                    class="text-center inline-block hover:bg-cyan-700 hover:text-white p-2 mx-2 rounded-md"
                >
                    <a href="/#event"> event </a>
                </li>
                <li
                    class="text-center inline-block hover:bg-cyan-700 hover:text-white p-2 mx-2 rounded-md"
                >
                    <a href="/#appointment"> appointment </a>
                </li>
                <li
                    class="text-center inline-block hover:bg-cyan-700 hover:text-white p-2 mx-2 rounded-md"
                >
                    <a href="/#blog"> blog </a>
                </li>
                <li
                    class="text-center inline-block hover:bg-cyan-700 hover:text-white p-2 mx-2 rounded-md"
                >
                    <a href="/#gallery"> gallery </a>
                </li>
                <li
                    class="text-center inline-block hover:bg-cyan-700 hover:text-white p-2 mx-2 rounded-md"
                >
                    <a href="/#about"> about </a>
                </li>
                <li
                    class="text-center inline-block hover:bg-cyan-700 hover:text-white p-2 mx-2 rounded-md"
                >
                    <a href="/#contact"> contact </a>
                </li>
                <li
                    v-if="!$cookies.get('auth')"
                    class="text-md inline-block ml-10 px-2 py-1 bg-cyan-700 rounded-lg text-white"
                >
                    <router-link :to="{ name: 'login' }">Login</router-link>
                </li>

                <li
                    v-if="!$cookies.get('auth')"
                    class="text-md inline-block ml-10 px-2 py-1 bg-cyan-700 rounded-lg text-white"
                >
                    <router-link :to="{ name: 'register' }">
                        Register
                    </router-link>
                </li>
                <li
                    v-if="$cookies.get('auth')"
                    class="text-md inline-block ml-10 px-2 py-1 bg-cyan-700 rounded-lg text-white"
                >
                    <router-link :to="{ name: 'AllEvents' }">
                        Dashboard
                    </router-link>
                </li>

                <li
                    @click="logout"
                    v-if="$cookies.get('auth')"
                    class="cursor-pointer text-md inline-block ml-10 px-2 py-1 bg-red-700 rounded-lg text-white"
                >
                    Logout
                </li>
            </ul>
        </nav>
    </section>
    <section class="container mx-auto" id="#home">
        <router-view></router-view>
    </section>

    <footer class="bg-cyan-900 text-white" id="contact">
        <footer class="container mx-auto py-20">
            <div>
                <h1 class="text-4xl mb-12">Chambers Address</h1>
                <div
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"
                >
                    <div
                        class="w-full"
                        v-for="(chamber, index) in chambers"
                        :key="index"
                    >
                        <h3 class="text-lg mb-4">
                            <b> {{ chamber.name }} </b>
                        </h3>
                        <div class="pl-5">
                            <p>
                                {{ chamber.house_no }},{{ chamber.road_no }},{{
                                    chamber.area
                                }},{{ chamber.district }}
                            </p>
                            <p>{{ chamber.time }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </footer>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
      
            chambers: {},
        };
    },
    methods: {
        logout() {
            axios.post("api/logout").then((r) => {
                console.log(r.status)
                $cookies.remove("auth")
           
                this.$router.push('/');
            });
          
        },
    },
    mounted() {
        axios.get("api/home").then((response) => {
            this.chambers = response.data.chamber;
        });

     

        console.table('..........................');

// this.$route.meta.role.includes($cookies.get('auth').role_id)
    console.log()
// const data = 
        console.log($cookies.get('auth'));
 console.table('..........................');
       
    },



};
</script>

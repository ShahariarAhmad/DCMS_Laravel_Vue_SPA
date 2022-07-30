<template>
    <section class="container mx-auto" id="#home">
        <div class="grid overflow-hidden grid-cols-2 grid-rows-1 gap-2">
            <div class="box row-span-2"></div>
            <div class="box col-start-2 col-span-2"></div>
        </div>
    </section>

    <section class="container mx-auto" id="#home">
        <div class="grid grid-cols-2 h-[400px] py-10">
            <div class="py-14 col-span-1">
                <h1 class="text-6xl">{{ banner.title }}</h1>
                <p class="text-xl pt-5">
                    {{ banner.subtitle }}
                </p>
                <a :href="banner.link">Make an appointment</a>
            </div>
            <div>
                <img
                    :src="banner.bg_image"
                    class="float-right object-scale-down object-fit h-[400px] w-full pt-20"
                    alt="Not image"
                />
            </div>
        </div>
    </section>

    <chamber-component :chamber-list="chambers" />
    <event-component :event-list="events" />

    <section
        name="appointment"
        class="container mx-auto py-10"
        id="appointment"
    >
        <div class="grid grid-cols-3 gap-6 shadow-2xl p-4 rounded-xl">
            <div
                class="lg:col-span-2 p-4 md:col-span-3 col-span-3 md:text-center"
            >
                <h1 class="text-4xl py-10">
                    Looking For A Appointment Or Diet ?
                </h1>
                <p>
                    Do you know you can make an appointment for any of my
                    chamber online ?
                </p>
                <p>
                    Do you know you can order a diet chart custom made just for
                    you online
                </p>
            </div>
            <div class="p-4 lg:col-span-1 md:col-span-3 col-span-3">
                <form
                    action=""
                    class="shadow-xl rounded-xl p-5 grid grid-cols-1 border border-indigo-500 md:w-1/2 mx-auto"
                >
                    <input
                        type="text"
                        placeholder="email"
                        class="py-2 mb-5 border border-indigo-200 px-2 col-span-1 rounded-xl"
                    />
                    <input
                        type="text"
                        placeholder="password"
                        class="py-2 mb-5 border border-indigo-200 px-2 col-span-1 rounded-xl"
                    />
                    <br />
                    <input
                        type="checkbox"
                        name="remember"
                        value="me"
                        class="col-span-1"
                    />
                    Remember Me
                    <button
                        type="submit"
                        class="block bg-indigo-500 py-2 px-5 rounded-xl mx-auto mt-5 text-white"
                    >
                        Login
                    </button>
                </form>
            </div>
        </div>
    </section>
    <blog-component :article-list="blogs"></blog-component>

    <gallery-component :gallery-list="gallery"></gallery-component>

    <section class="container mx-auto py-10" id="about">
        <div class="grid grid-cols-1 shadow-2xl rounded-xl">
            <img
                class="col-span-1 object-cover h-96 w-full relative overflow-hidden"
                src="https://wallpaperaccess.com/full/175987.jpg"
                alt=""
            />
            <div class="absolute mt-14 ml-10 col-span-1 text-white">
                <img
                    :src="about.profile_img"
                    class="w-48 rounded-xl mb-5"
                    alt=""
                />
                <h3 class="text-4xl">{{ about.name }}</h3>
                <p class="text-xl">{{ about.degree }}</p>
                <ul class="bg-white rounded-sm grid grid-cols-3">
                    <li class="inline-block p-4">
                        <svg 
                            class="w-6 m-0 h-6 text-blue-600 fill-current"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                        >
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"
                            />
                        </svg>
                    </li>
                    <li class="inline-block p-4">
                        <svg
                            class="w-6 h-6 text-blue-500 fill-current"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512"
                        >
                            <path
                                d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"
                            ></path>
                        </svg>
                    </li>
                    <li class="inline-block p-4">
                        <svg
                            class="w-6 h-6 text-red-500 fill-current"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M12 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0zm5.01 4.744c.688 0 1.25.561 1.25 1.249a1.25 1.25 0 0 1-2.498.056l-2.597-.547-.8 3.747c1.824.07 3.48.632 4.674 1.488.308-.309.73-.491 1.207-.491.968 0 1.754.786 1.754 1.754 0 .716-.435 1.333-1.01 1.614a3.111 3.111 0 0 1 .042.52c0 2.694-3.13 4.87-7.004 4.87-3.874 0-7.004-2.176-7.004-4.87 0-.183.015-.366.043-.534A1.748 1.748 0 0 1 4.028 12c0-.968.786-1.754 1.754-1.754.463 0 .898.196 1.207.49 1.207-.883 2.878-1.43 4.744-1.487l.885-4.182a.342.342 0 0 1 .14-.197.35.35 0 0 1 .238-.042l2.906.617a1.214 1.214 0 0 1 1.108-.701zM9.25 12C8.561 12 8 12.562 8 13.25c0 .687.561 1.248 1.25 1.248.687 0 1.248-.561 1.248-1.249 0-.688-.561-1.249-1.249-1.249zm5.5 0c-.687 0-1.248.561-1.248 1.25 0 .687.561 1.248 1.249 1.248.688 0 1.249-.561 1.249-1.249 0-.687-.562-1.249-1.25-1.249zm-5.466 3.99a.327.327 0 0 0-.231.094.33.33 0 0 0 0 .463c.842.842 2.484.913 2.961.913.477 0 2.105-.056 2.961-.913a.361.361 0 0 0 .029-.463.33.33 0 0 0-.464 0c-.547.533-1.684.73-2.512.73-.828 0-1.979-.196-2.512-.73a.326.326 0 0 0-.232-.095z"
                            />
                        </svg>
                    </li>
                </ul>
            </div>
            <div class="col-span-1 p-7">
                <h3 class="text-4xl mb-5">About</h3>
                <p>
                    {{ about.brife_description }}
                </p>
            </div>
        </div>
    </section>
</template>

<script>
import ChamberComponent from "../components/ChamberComponent.vue";
import EventComponent from "../components/EventComponent.vue";
import GalleryComponent from "../components/GalleryComponent.vue";
import BlogComponent from "../components/BlogComponent.vue";
// import axios from "axios";

export default {
    components: {
        ChamberComponent,
        EventComponent,
        GalleryComponent,
        BlogComponent,
    },
    data() {
        return {
            banner: {},
            gallery: {},
            chambers: {},
            blogs: {},
            events: {},
            about: {},
            admin: {},
        };
    },

    mounted() {
        axios.get("api/home").then((response) => {
            (this.banner = response.data.banner[0]),
                (this.gallery = response.data.gallery),
                (this.chambers = response.data.chamber),
                (this.blogs = response.data.blog),
                (this.events = response.data.event),
                (this.about = response.data.about[0]);
            console.log(response.data);
        });
    },
};
</script>

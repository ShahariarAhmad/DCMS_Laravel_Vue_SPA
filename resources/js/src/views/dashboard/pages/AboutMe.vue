<template>
    <div class="grid grid-cols-2 gap-6 my-5">
        <div
            class="col-span-1 shadow-2xl p-5 rounded-2xl border border-gray-400"
        >
            <div class="grid grid-cols-2">
                <label
                    for="teal-toggle"
                    class="inline-flex relative items-center mr-5 cursor-pointer mb-10"
                >
                    <input
                        type="checkbox"
                        @click="isActive"
                        id="teal-toggle"
                        class="sr-only peer"
                    />
                    <div
                        class="w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:ring-4 peer-focus:ring-teal-300 dark:peer-focus:ring-teal-800 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-teal-600"
                    ></div>
                    <span
                        class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-900"
                        >{{ toggle ? "Edit Mode" : "Preview Mode" }}</span
                    >
                </label>

                <div class="col-span-2 block mb-4 font-bold">About You</div>
                <div class="col-span-2">
                    <img
                        class="object-cover rounded-xl shadow-2xl"
                        :src="previewOne"
                    />
                </div>

                <div v-if="!toggle" class="col-span-2 mt-5">
                    <div class="grid grid-cols-1">
                        <div class="grid grid-cols-2 gap-2 col-span-2 mb-3">
                            <p class="col-span-1 p-1 font-bold">Your Name:</p>

                            <p class="col-span-1 p-1">{{ about.name }}</p>
                        </div>

                        <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                            <p class="col-span-1 p-1 font-bold">
                                Your Designation:
                            </p>

                            <p class="col-span-1 p-1">{{ about.degree }}</p>
                        </div>

                        <div class="grid grid-cols-2 col-span-2 mb-3">
                            <p class="col-span-2 p-1 font-bold">
                                Brife Description:
                            </p>
                            <p
                                class="col-span-2 mb-3 p-1 focus:bg-slate-100 focus:outline-violet-500"
                            >
                                {{ about.brife_description }}
                            </p>
                        </div>
                    </div>
                </div>
                <div v-if="toggle" class="col-span-2 mt-5">
                    <div class="grid grid-cols-1">
                        <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                            <p class="font-bold col-span-1 p-1">Your Name:</p>

                            <input
                                v-model="about.name"
                                type="text"
                                class="border border-slate-200 col-span-1 p-1 focus:outline-violet-500"
                                :placeholder="about.name"
                            />
                        </div>

                        <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                            <p class="font-bold col-span-1 p-1">
                                Your Designation:
                            </p>

                            <input
                                v-model="about.degree"
                                type="text"
                                class="border border-slate-200 col-span-1 p-1 focus:outline-violet-500"
                                :placeholder="about.degree"
                            />
                        </div>

                        <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                            <p class="font-bold col-span-2 p-1">
                                Brife Description:
                            </p>
                            <textarea
                                v-model="about.brife_description"
                                cols="30"
                                rows="10"
                                class="grid grid-cols-2 gap-2 col-span-2 mb-3 border border-slate-200 p-1 focus:bg-slate-100 focus:outline-violet-500"
                                :placeholder="about.brife_description"
                            ></textarea>
                        </div>

                        <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                            <p class="col-span-1 p-1 font-bold">Cover Photo</p>

                            <input
                                type="file"
                                @change="onChangeAbout"
                                class="col-span-1 p-1 indent-4 focus:outline-violet-500"
                            />
                        </div>

                        <button
                            @click="onSubmitAbout"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                        >
                            Update
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="col-span-1 shadow-2xl p-5 rounded-2xl border border-gray-400"
        >
            <div class="grid grid-cols-2">
                <label
                    for="teal-toggle1"
                    class="inline-flex relative items-center mr-5 cursor-pointer mb-10"
                >
                    <input
                        type="checkbox"
                        @click="isActiveTwo"
                        id="teal-toggle1"
                        class="sr-only peer"
                    />
                    <div
                        class="w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:ring-4 peer-focus:ring-teal-300 dark:peer-focus:ring-teal-800 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-teal-600"
                    ></div>
                    <span
                        class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-900"
                        >{{ toggleTwo ? "Edit Mode" : "Preview Mode" }}</span
                    >
                </label>

                <div class="col-span-2 block mb-4 font-bold">
                    Where I give my services ?
                </div>

                <div class="col-span-2">
                    <img
                        class="object-cover rounded-xl shadow-2xl"
                        :src="previewTwo"
                    />
                </div>
                <div v-if="!toggleTwo" class="grid grid-cols-2 col-span-2">
                    <div class="col-span-2 mt-5">
                        <div class="grid grid-cols-1">
                            <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                                <p class="col-span-1 p-1 font-bold">Degree:</p>

                                <p class="col-span-1 p-1">
                                    {{ services.degree }}
                                </p>
                            </div>

                            <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                                <p class="col-span-1 p-1 font-bold">Title:</p>

                                <p class="col-span-1 p-1">
                                    {{ services.title }}
                                </p>
                            </div>

                            <div class="grid grid-cols-2 col-span-1 mb-3">
                                <p class="col-span-2 p-1 font-bold">
                                    Short Description:
                                </p>
                                <p class="col-span-2 mb-3 p-1">
                                    {{ services.short_description }}
                                </p>
                            </div>
                        </div>
                        <!-- ========================== -->
                    </div>
                </div>

                <div v-if="toggleTwo" class="grid grid-cols-2 col-span-2">
                    <div class="grid grid-cols-2 gap-2 col-span-2 my-3">
                        <p class="col-span-1 p-1 font-bold">Degree:</p>

                        <input
                            v-model="services.degree"
                            type="text"
                            class="border border-slate-200 col-span-1 p-1 focus:outline-violet-500"
                        />
                    </div>

                    <div class="grid grid-cols-2 gap-2 col-span-2 mb-3">
                        <p class="col-span-1 p-1 font-bold">Title:</p>

                        <input
                            v-model="services.title"
                            type="text"
                            class="border border-slate-200 col-span-1 p-1 focus:outline-violet-500"
                        />
                    </div>

                    <div class="grid grid-cols-2 gap-2 col-span-2 mb-3">
                        <p class="col-span-2 p-1 font-bold">
                            Short Description:
                        </p>
                        <textarea
                            v-model="services.short_description"
                            cols="30"
                            rows="10"
                            class="grid grid-cols-2 gap-2 col-span-2 mb-3 border border-slate-200 p-1 focus:bg-slate-100 focus:outline-violet-500"
                        ></textarea>
                    </div>

                    <div class="grid grid-cols-2 gap-2 col-span-2 mb-3">
                        <p class="col-span-1 p-1 font-bold">Cover Photo</p>

                        <input
                            type="file"
                            @change="onChangeService"
                            class="col-span-1 p-1 indent-4 focus:outline-violet-500"
                        />
                    </div>

                    <button
                        @click="onSubmitService"
                        class="col-span-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    >
                        Update
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            about: {},
            services: {},
            toggle: false,
            toggleTwo: false,
            previewOne: null,
            previewTwo: null,
            image: null,
            PreviousImage: null,
            PreviousImageTwo: null,
        };
    },
created() {
    document.title = "About Me"
    },
    methods: {
        isActive() {
            this.toggle = !this.toggle;
            console.log("out :" + this.toggle);
        },

        isActiveTwo() {
            this.toggleTwo = !this.toggleTwo;
            console.log("out :" + this.toggleTwo);
        },

        onChangeAbout(e) {
            this.previewOne = URL.createObjectURL(e.target.files[0]);
            this.image = e.target.files[0];
            console.log(this.previewOne);
        },

        onChangeService(e) {
            this.previewTwo = URL.createObjectURL(e.target.files[0]);
            this.image = e.target.files[0];
            console.log(this.previewTwo);
        },

        onSubmitService() {
            const obj = new FormData();
            obj.append("image_url", this.image);
            obj.append("PreviousImage", this.PreviousImageTwo);
            obj.append("title", this.services.title);
            obj.append("degree", this.services.degree);
            obj.append("short_description", this.services.short_description);
            obj.append("_method", "PUT");

            axios.post(`/api/service/${1}`, obj).then((res) => {
                console.log(res);
            });
        },

        onSubmitAbout() {
            const obj = new FormData();
            obj.append("profile_img", this.image);
            obj.append("PreviousImage", this.PreviousImage);
            obj.append("name", this.about.name);
            obj.append("degree", this.about.degree);
            obj.append("brife_description", this.about.brife_description);
            obj.append("_method", "PUT");
            axios.post(`/api/about/${1}`, obj).then((res) => {
                console.log(res);
            });
        },
    },

    mounted() {
        // Service
        axios.get("/api/service").then((response) => {
            this.services = response.data;
            this.previewTwo = response.data.image_url;

            this.PreviousImageTwo = response.data.image_url;

            console.table(response.data);
        });

        // About
        axios.get("/api/about").then((response) => {
            this.about = response.data;
            this.previewOne = response.data.profile_img;
            this.PreviousImage = response.data.profile_img;

            console.table(response.data.profile_img);
        });
    },
};
</script>

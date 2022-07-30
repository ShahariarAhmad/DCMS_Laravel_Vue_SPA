<template>
    <div v-if="previewToggleSwitch"
        class="grid grid-cols-12 gap-6 shadow-2xl p-5 rounded-2xl my-5 border border-gray-400">
        <div class="col-span-6">
            <div class="inline-flex">
                <button @click="switchToCreate"
                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-2 rounded-l">
                    Switch To Create / Update
                </button>
            </div>
        </div>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 col-span-12 gap-6">
            <div class="bg-slate-100 rounded-xl shadow-2xl" v-for="event in events" :key="event.id">
                <img :src="event.img_url" class="rounded-t-xl" />
                <div class="p-4 break-words">
                    <h1 class="text-2xl pb-4">{{ event.name }}</h1>
                    <p>
                        {{ event.house_no }},{{ event.road_no }},{{
                                event.area
                        }},{{ event.district }}
                    </p>
                    <p>{{ event.time }}</p>
                </div>
                <button @click="deleteEvent(event.id)" class="bg-red-500 text-white font-bold p-2 rounded">
                    Delete
                </button>
            </div>
        </div>
    </div>

    <div v-if="toggleSwitch && crossCheck"
        class="grid grid-cols-12 gap-6 shadow-2xl p-5 rounded-2xl my-5 border border-gray-400">
        <div class="col-span-6">
            <div class="inline-flex">
                <button @click="switchToUpdate"
                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-2 rounded-l">
                    Switch To Update
                </button>
                <button @click="previewToggle"
                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-2 rounded-r">
                    Preview
                </button>
            </div>
        </div>
        <div class="col-span-6" v-if="!toggleSwitch">
            <select class="w-1/2 float-right border border-slate-300 p-1 rounded-xl" v-model="selectedNo" name="select">
                <option></option>
                <option v-for="x in count" :key="x" :value="--x">
                    {{ ++x }}
                </option>
            </select>
        </div>

        <div class="col-span-12">
            <img class="object-cover rounded-xl shadow-2xl" :src="object.preview" />
        </div>
        <div class="col-span-12">
            <div class="grid grid-cols-1">
                <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                    <p class="border border-slate-200 col-span-1 p-1">
                        Chamber Name:
                    </p>

                    <input v-model="object.name" type="text" class="border border-slate-200 col-span-1 p-1" />
                </div>

                <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                    <p class="border border-slate-200 col-span-1 p-1">
                        House No:
                    </p>

                    <input v-model="object.house_no" type="text" class="border border-slate-200 col-span-1 p-1" />
                </div>
                <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                    <p class="border border-slate-200 col-span-1 p-1">Road:</p>

                    <input v-model="object.road_number" type="text" class="border border-slate-200 col-span-1 p-1" />
                </div>
                <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                    <p class="border border-slate-200 col-span-1 p-1">Area:</p>

                    <input v-model="object.area" type="text" class="border border-slate-200 col-span-1 p-1" />
                </div>
                <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                    <p class="border border-slate-200 col-span-1 p-1">
                        District:
                    </p>

                    <input v-model="object.district" type="text" class="border border-slate-200 col-span-1 p-1" />
                </div>
                <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                    <p class="border border-slate-200 col-span-1 p-1">Time :</p>

                    <input v-model="object.time" type="text" class="border border-slate-200 col-span-1 p-1" />
                </div>
                <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                    <p class="border border-slate-200 col-span-1 p-1">Days :</p>

                    <input v-model="object.date" type="text" class="border border-slate-200 col-span-1 p-1" />
                </div>

                <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                    <p class="border border-slate-200 col-span-1 p-1">
                        Description :
                    </p>

                    <textarea v-model="object.description" type="text" class="border border-slate-200 col-span-1 p-1"
                        rows="10">
                    </textarea>
                </div>

                <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                    <div>
                        <p class="border border-slate-200 col-span-1 p-1">
                            Cover Photo
                        </p>
                    </div>

                    <input @change="onChangeStore" type="file" class="border border-slate-200 col-span-1 p-1" />
                </div>
                <button @click="onSubmitStore" class="bg-blue-500 text-white font-bold py-2 px-4 rounded">
                    Update
                </button>
            </div>
        </div>
    </div>

    <div v-if="!toggleSwitch && crossCheck"
        class="grid grid-cols-12 gap-6 shadow-2xl p-5 rounded-2xl my-5 border border-gray-400">
        <div class="col-span-6">
            <div class="inline-flex">
                <button @click="switchToCreate"
                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-2 rounded-l">
                    Switch To Create
                </button>
                <button @click="previewToggle"
                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-2 rounded-r">
                    preview
                </button>
            </div>
        </div>

        <div class="col-span-6">
            <select @change="onChangeSelect" class="w-1/2 float-right border border-slate-300 p-1 rounded-xl">
                <option></option>
                <option v-for="(event, index) in events" :key="index" :value="index">
                    {{ ++index }}
                </option>
            </select>
        </div>

        <div class="col-span-12">
            <img class="object-cover rounded-xl shadow-2xl" :src="img_url" />
        </div>
        <div class="col-span-12">
            <div class="grid grid-cols-1">
                <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                    <p class="border border-slate-200 col-span-1 p-1">
                        Event Name:
                    </p>

                    <input v-model="name" type="text" class="border border-slate-200 col-span-1 p-1" />
                </div>

                <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                    <p class="border border-slate-200 col-span-1 p-1">
                        House No:
                    </p>

                    <input v-model="house_no" type="text" class="border border-slate-200 col-span-1 p-1" />
                </div>
                <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                    <p class="border border-slate-200 col-span-1 p-1">Road:</p>

                    <input v-model="road_number" type="text" class="border border-slate-200 col-span-1 p-1" />
                </div>
                <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                    <p class="border border-slate-200 col-span-1 p-1">Area:</p>

                    <input v-model="area" type="text" class="border border-slate-200 col-span-1 p-1" />
                </div>
                <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                    <p class="border border-slate-200 col-span-1 p-1">
                        District:
                    </p>

                    <input v-model="district" type="text" class="border border-slate-200 col-span-1 p-1" />
                </div>
                <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                    <p class="border border-slate-200 col-span-1 p-1">Time :</p>

                    <input v-model="time" type="text" class="border border-slate-200 col-span-1 p-1" />
                </div>
                <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                    <p class="border border-slate-200 col-span-1 p-1">Days :</p>

                    <input v-model="date" type="text" class="border border-slate-200 col-span-1 p-1" />
                </div>

                <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                    <p class="border border-slate-200 col-span-1 p-1">
                        Description :
                    </p>

                    <textarea v-model="description" type="text" class="border border-slate-200 col-span-1 p-1"
                        rows="10">
                    </textarea>
                </div>

                <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                    <div>
                        <p class="border border-slate-200 col-span-1 p-1">
                            Cover Photo
                        </p>

                        <img class="object-cover rounded-xl shadow-2xl" :src="preview" />
                    </div>

                    <input @change="onChange" type="file" class="border border-slate-200 col-span-1 p-1" />
                </div>
                <button @click="onSubmitUpdate" class="bg-blue-500 text-white font-bold py-2 px-4 rounded">
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
            name: null,
            id: null,
            house_no: null,
            road_number: null,
            area: null,
            district: null,
            date: null,
            time: null,
            img_url: null,
            description: null,
            events: {},
            file: null,
            preview: null,
            toggleSwitch: null,
            previewToggleSwitch: true,
            crossCheck: false,
            object: {
                name: null,
                house_no: null,
                road_number: null,
                area: null,
                district: null,
                date: null,
                time: null,
                file: null,
                description: null,
            },
        };
    },
    created() {
        document.title = "All Events";
    },
    methods: {
        onSubmitStore() {
            const obj = new FormData();
            obj.append("name", this.object.name);
            obj.append("house_no", this.object.house_no);
            obj.append("road_number", this.object.road_number);
            obj.append("area", this.object.area);
            obj.append("district", this.object.district);
            obj.append("date", this.object.date);
            obj.append("time", this.object.time);
            obj.append("file", this.object.file);
            obj.append("description", this.object.description);

            axios.post("/api/event", obj).then((response) => {
                console.log(response.data);
            });
        },
        onChangeStore(e) {
            this.object.file = e.target.files[0];
            this.object.preview = URL.createObjectURL(e.target.files[0]);
        },
        deleteEvent(id) {
            axios.delete(`/api/event/${id}`).then((R) => {
                const projectIndex = this.events.findIndex((p) => p.id === id);
                this.events.splice(projectIndex, 1);
            });
        },
        switchToUpdate() {
            this.toggleSwitch = false;
            this.previewToggleSwitch = false;
            this.crossCheck = true;
        },
        switchToCreate() {
            this.toggleSwitch = true;
            this.previewToggleSwitch = false;
            this.crossCheck = true;
        },
        previewToggle() {
            this.previewToggleSwitch = true;
            this.toggleSwitch = null;
            this.crossCheck = true;
        },

        onChange(e) {
            this.file = e.target.files[0];
            this.preview = URL.createObjectURL(e.target.files[0]);
        },
        onChangeSelect(event) {
            const dynamicId = event.target.value;
            console.log(dynamicId);
            if (parseInt(dynamicId) >= 0) {
                this.name = this.events[dynamicId].name;
                this.id = this.events[dynamicId].id;
                this.house_no = this.events[dynamicId].house_no;
                this.road_number = this.events[dynamicId].road_number;
                this.area = this.events[dynamicId].area;
                this.district = this.events[dynamicId].district;
                this.date = this.events[dynamicId].date;
                this.time = this.events[dynamicId].time;
                this.img_url = this.events[dynamicId].img_url;
                this.description = this.events[dynamicId].description;
            }
        },
        onSubmitUpdate() {
            const obj = new FormData();
            obj.append("name", this.name);
            obj.append("house_no", this.house_no);
            obj.append("road_number", this.road_number);
            obj.append("area", this.area);
            obj.append("district", this.district);
            obj.append("date", this.date);
            obj.append("time", this.time);
            obj.append("file", this.file);

            obj.append("url", this.img_url);
            obj.append("description", this.description);
            obj.append("_method", "PUT");
            console.log(this.name);
            axios
                .post(`/api/event/${this.id}`, obj)
                .then((response) => {
                    console.log(response.data);
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },
    mounted() {
        axios.get("/api/event").then((response) => {
            this.events = response.data;
        });

            //   console.log(this.$route);
    },
};
</script>

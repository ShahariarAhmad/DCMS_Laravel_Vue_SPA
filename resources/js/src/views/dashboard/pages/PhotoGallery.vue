<template>


    <form>
        <div class="grid grid-cols-12 gap-6 rounded-br-xl shadow-2xl p-5 mb-10">
            <img class="col-span-12 rounded-xl shadow-2xl" :src="preview" />
            <input
                type="file"
                @change="onChange"
                class="col-span-10 p-2 border border-gray-400 rounded-lg"
            />
            <button
                @click="onSubmit"
                class="col-span-2 p-2 border border-gray-400 rounded-lg"
            >
                Upload
            </button>
        </div>
    </form>

    <div class="grid grid-cols-12 gap-6 shadow-2xl p-5 rounded-2xl">
        <div
            v-for="(photo, index) in photos"
            :key="index"
            class="col-span-4 relative"
        >
            <img
                class="object-cover rounded-xl shadow-2xl"
                :src="photo.image_url"
            />
            <a
                @click="onClickDelete(photo.id)"
                class="absolute right-0 bottom-0 p-3 bg-slate-900 opacity-75 rounded-br-xl rounded-tl-xl"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512"
                    fill="#FF5733"
                    class="w-3 opacity-100"
                >
                    <path
                        d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM31.1 128H416V448C416 483.3 387.3 512 352 512H95.1C60.65 512 31.1 483.3 31.1 448V128zM111.1 208V432C111.1 440.8 119.2 448 127.1 448C136.8 448 143.1 440.8 143.1 432V208C143.1 199.2 136.8 192 127.1 192C119.2 192 111.1 199.2 111.1 208zM207.1 208V432C207.1 440.8 215.2 448 223.1 448C232.8 448 240 440.8 240 432V208C240 199.2 232.8 192 223.1 192C215.2 192 207.1 199.2 207.1 208zM304 208V432C304 440.8 311.2 448 320 448C328.8 448 336 440.8 336 432V208C336 199.2 328.8 192 320 192C311.2 192 304 199.2 304 208z"
                    />
                </svg>
            </a>
        </div>
    </div>
</template>

<script>
import Swal from "sweetalert2";
export default {
    data() {
        return {
            photos: {},
            id: null,
            preview: null,
            image: null,
        };
    },
    created() {
        document.title = "Photo Gallery";
    },
    mounted() {
        axios.get("/api/gallery").then((response) => {
            this.photos = response.data;
            // console.log(response.data);
        });
    },

    methods: {
        onClickDelete(id) {
            Swal.fire({
                icon: "warning",

                title: "Are you sure that you want to deleted the photo...",
             
               
                timer: 10000,
                timerProgressBar: true,
                allowOutsideClick: true,
                showConfirmButton: true,

                preConfirm: (login) => {
                     axios
                        .delete(`/api/gallery/${id}`)
                        .then((response) => {
                            const index = this.photos.findIndex(
                                (p) => p.id === id
                            );
                            this.photos.splice(index, 1);

                            Swal.fire({
                                icon: "warning",

                                title: "Photo Deleted...",
                                toast: true,
                                position: "bottom-end",
                                timer: 3000,
                                timerProgressBar: true,
                                allowOutsideClick: false,
                                showConfirmButton: false,
                            });
                        });
                },
                allowOutsideClick: () => !Swal.isLoading(),
            });
        },
        onChange(e) {
            this.preview = URL.createObjectURL(e.target.files[0]);
            this.image = e.target.files[0];
            console.log(this.preview);
        },
        onSubmit() {
            const obj = new FormData();
            obj.append("file", this.image);
            axios.post("/api/gallery/", obj);
        },
    },


};
</script>

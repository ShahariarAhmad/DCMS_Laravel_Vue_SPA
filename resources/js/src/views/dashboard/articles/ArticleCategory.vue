<template>
    <div class="grid grid-cols-12">
        <side-bar></side-bar>
        <div class="col-span-8 p-5">
            <Transition>
                <div v-show="toggle" class="flex justify-center items-center">
                    <div
                        class="w-full max-w-xs bg-white flex flex-col py-5 px-8 rounded-lg shadow-lg"
                        action=""
                    >
                        <label class="text-gray-700 font-bold py-2"
                            >Category Name</label
                        >
                        <input
                            v-model="category"
                            class="text-gray-700 shadow border rounded border-gray-300 focus:outline-none focus:shadow-outline py-1 px-3 mb-3"
                            type="text"
                        />

                        <div class="flex justify-between items-center my-4">
                            <button
                                @click="onClickCreate"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold rounded py-2 px-4"
                            >
                                Create
                            </button>
                            <button
                                @click="toggleSwitch"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold rounded py-2 px-4"
                            >
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </Transition>

            <Transition>
                <div
                    v-show="toggleEdit"
                    class="flex justify-center items-center"
                >
                    <div
                        class="w-full max-w-xs bg-white flex flex-col py-5 px-8 rounded-lg shadow-lg"
                        action=""
                    >
                        <label class="text-gray-700 font-bold py-2"
                            >Edit Category</label
                        >
                        <input
                            v-model="categoryName.name"
                            class="text-gray-700 shadow border rounded border-gray-300 focus:outline-none focus:shadow-outline py-1 px-3 mb-3"
                            type="text"
                        />

                        <div class="flex justify-between items-center my-4">
                            <button
                                @click="onSubmitEdit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold rounded py-2 px-4"
                            >
                                Update
                            </button>
                            <button
                                @click="toggleSwitchEditTo"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold rounded py-2 px-4"
                            >
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </Transition>

            <div class="flex items-center justify-center my-10">
                <button
                    @click="toggleSwitch"
                    type="button"
                    class="rounded inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase hover:bg-blue-700 focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-blue-800 transition duration-150 ease-in-out"
                >
                    Create Category
                </button>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table
                    class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
                >
                    <thead
                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                    >
                        <tr>
                            <th scope="col" class="px-6 py-3 text-white">
                                Sl.
                            </th>
                            <th scope="col" class="px-6 py-3 text-white">
                                Category name
                            </th>
                            <th
                                colspan="2"
                                class="px-6 py-3 text-white text-center"
                            >
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            v-for="(data, index) in categories"
                            :key="data.id"
                            class="bg-white dark:bg-gray-100"
                        >
                            <th scope="row" class="px-6 py-4 whitespace-nowrap">
                                {{ index + 1 }}
                            </th>

                            <th scope="row" class="px-6 py-4 whitespace-nowrap">
                                {{ data.category }}
                            </th>

                            <td
                                class="px-6 py-4 text-right"
                                @click="onClickDelete(data.id)"
                            >
                                <a class="cursor-pointer">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 448 512"
                                        fill="#FF0000"
                                        class="w-3 inline-block"
                                    >
                                        <path
                                            d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM31.1 128H416V448C416 483.3 387.3 512 352 512H95.1C60.65 512 31.1 483.3 31.1 448V128zM111.1 208V432C111.1 440.8 119.2 448 127.1 448C136.8 448 143.1 440.8 143.1 432V208C143.1 199.2 136.8 192 127.1 192C119.2 192 111.1 199.2 111.1 208zM207.1 208V432C207.1 440.8 215.2 448 223.1 448C232.8 448 240 440.8 240 432V208C240 199.2 232.8 192 223.1 192C215.2 192 207.1 199.2 207.1 208zM304 208V432C304 440.8 311.2 448 320 448C328.8 448 336 440.8 336 432V208C336 199.2 328.8 192 320 192C311.2 192 304 199.2 304 208z"
                                        />
                                    </svg>
                                </a>
                            </td>

                            <td class="px-6 py-4 text-right">
                                <a
                                    @click="
                                        toggleSwitchEdit(data.category, data.id)
                                    "
                                    class="cursor-pointer"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512"
                                        fill="#007882"
                                        class="w-3 inline-block"
                                    >
                                        <path
                                            d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z"
                                        />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            categories: {},
            toggle: false,
            category: null,
            toggleEdit: false,
        };
    },

    created() {
    document.title = "Article Categories"
    },

    mounted() {
        axios.get("/api/category").then((res) => {
            this.categories = res.data;
            console.log(res.data);
        });
    },
    update() {
        console.log(this.category);
    },
    computed: {
        categoryName: {
            get() {
                return {
                    name: this.category,
                    id: 6,
                };
            },
        },
        set(val) {
            this.category = val;
        },
    },
    updated() {
        console.log(this.category);
    },
    methods: {
        onClickDelete(id) {
            axios.delete(`/api/category/${id}`);
            console.log("delete ID : " + id);
        },
        onClickEdit(id) {
            console.log("Edit ID : " + id);
        },
        toggleSwitch() {
            this.toggle = !this.toggle;
        },

        toggleSwitchEdit(cat, id) {
            console.log(cat);
            this.categoryName.name = cat;
            this.categoryName.id = id;

            this.toggle = false;
            this.toggleEdit = true;
        },
        toggleSwitchEditTo() {
            this.toggleEdit = !this.toggleEdit;
        },
        onSubmitEdit() {
            console.log(this.categoryName);
            axios.put(`/api/category/${this.categoryName.id}`, {
                name: this.categoryName.name,
            });
        },
        onClickCreate() {
            axios.post("/api/category", {
                name: this.category,
            });
            console.log(this.category);
        },
    },
};
</script>

<style scoped>
/* we will explain what these classes do next! */
.v-enter-active,
.v-leave-active {
    transition: opacity 0.5s ease;
}

.v-enter-from,
.v-leave-to {
    opacity: 0;
}
</style>

<template>
    <div class="grid grid-cols-12">
        <side-bar></side-bar>
        <div class="col-span-8 p-5 my-10">
            <menu-group></menu-group>
            <div class="grid grid-cols-1">

                <table class="table-auto text-center shadow-2xl rounded-3xl">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="draft in drafts" :key="draft.id">
                            <td>Diet ID . {{draft.id}}</td>
                            <td>
                                <div class="inline-flex">
                                    <button
                                        class="bg-red-300 hover:bg-red-400 hover:text-white text-gray-800 px-2 rounded-l">
                                        Delete
                                    </button>
                                    <button
                                        class="bg-blue-300 hover:bg-blue-400 hover:text-white text-gray-800 px-2 rounded-r">
                                        Edit
                                    </button>
                                </div>
                            </td>
                        </tr>
              
                    </tbody>
                </table>



            </div>


        </div>
    </div>
</template>
<script>
import MenuGroup from "../../../components/dashboard/diet/MenuGroupButton.vue";
export default {
    components: {
        MenuGroup

    },

    data() {
        return {
            drafts: {}
        }
    },
created() {
    document.title = "Diet Drafts"
    },
    mounted() {
        axios.get("/api/diet/drafts").then(response => {
            this.drafts = response.data
          
        });
    },
}
</script>


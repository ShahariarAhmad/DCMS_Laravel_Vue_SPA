<template>
    <div class="grid grid-cols-12">
        <side-bar></side-bar>
        <div class="col-span-8 p-5 ">
            <menu-group></menu-group>
            <div class="grid grid-cols-12 gap-5">
                <!-- card  -->
                <div v-for="request in requests" :key="request.id" class="col-span-6 shadow-xl rounded-lg">
                    <div class="grid grid-cols-12 grid-rows-2">
                        <div class="col-span-4 row-span-2">
                            <img class="object-fit"
                                src="data:image/png;base64,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"
                                alt="">
                        </div>

                        <div class="col-span-7 row-span-2">
                            <span class="indent-4">
                                <p class="font-semibold"> {{ request.f_name }}  {{ request.l_name }} <small>( {{ request.age }}  )</small> </p>
                                <p>5"8'</p>
                                <address class="text-xs">
                                    <p>Transaction Id: {{ request.trix_id }}</p>
                                    <p>Amount Sent: {{ request.amount }}/=</p>
                                    <p>Sent From: {{ request.sent_from }}</p>
                                    <p>Sent To: {{ request.sent_to }}</p>
                                </address>

                            </span>

                        </div>
                        <div class="col-span-1 row-span-2">
                            <div class="grid grid-rows-2">
              
                                <div class="bg-red-600 p-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#fff">
                                        <path
                                            d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM99.5 144.8C77.15 176.1 64 214.5 64 256C64 362 149.1 448 256 448C297.5 448 335.9 434.9 367.2 412.5L99.5 144.8zM448 256C448 149.1 362 64 256 64C214.5 64 176.1 77.15 144.8 99.5L412.5 367.2C434.9 335.9 448 297.5 448 256V256z" />
                                    </svg>
                                </div>
                                <div class="bg-green-600 p-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#fff">
                                        <path
                                            d="M438.6 105.4C451.1 117.9 451.1 138.1 438.6 150.6L182.6 406.6C170.1 419.1 149.9 419.1 137.4 406.6L9.372 278.6C-3.124 266.1-3.124 245.9 9.372 233.4C21.87 220.9 42.13 220.9 54.63 233.4L159.1 338.7L393.4 105.4C405.9 92.88 426.1 92.88 438.6 105.4H438.6z" />
                                    </svg>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

           

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
            requests: {}
        }
    },
created() {
    document.title = "Diet Requests"
    },
    mounted() {
        axios.get("/api/diet/requests").then(response => {
            this.requests = response.data
          
        });
    },
}
</script>

<style scoped>
</style>
<template>
    <div class="grid grid-cols-12">
         <side-bar></side-bar>

        <div class="col-span-9 p-5">

            <div class="grid grid-cols-1  shadow-2xl p-5 rounded-2xl my-5 border border-gray-400">


                <table class="table-auto text-center">
                    <caption class="text-xl mb-5 ">Patient Serial | Only Today's Serials</caption>

                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Serial Number
                            </th>
                            <th>
                                Transaction ID
                            </th>
                            <th>
                                Amout
                            </th>
                            <th>
                                Payment Method
                            </th>
                            <th>
                                Payment Stats
                            </th>
                            <th>
                                Sent To
                            </th>
                          
                            <th>
                                Handled By
                            </th>

                        </tr>
                    </thead>
                    <tbody>

                        <tr v-for="(data,index) in tableData" :key="index">
                            <td class="px-6 py-3">
                                {{++index}}
                            </td>
                            <td class="px-6 py-3">
                                {{data.f_name}}
                            </td>
                            <td class="px-6 py-3">
                                 {{data.desired_serial_date}}
                            </td>
                            <td class="px-6 py-3">
                                {{data.trix_id}}
                            </td>
                            <td class="px-6 py-3">
                                {{data.amount}}
                            </td>
                            <td class="px-6 py-3">
                                {{data.payment_method}}
                            </td>

                            <td class="px-6 py-3">
                              {{data.payment_status}}
                            </td>

                            <td class="px-6 py-3">
                                {{data.sent_from}}
                            </td>
                            <td class="px-6 py-3">
                                {{data.handler}}
                            </td>
                        </tr>

                        <tr>
                            <td class="px-6 py-3">
                                4
                            </td>
                            <td class="px-6 py-3">
                                সুলতানা
                            </td>
                            <td class="px-6 py-3">
                                5M414P1C04
                            </td>
                            <td class="px-6 py-3">
                                সুলতানা
                            </td>
                            <td class="px-6 py-3">
                                500
                            </td>
                            <td class="px-6 py-3">
                                dbbl
                            </td>

                            <td class="px-6 py-3">
                                <span class="badge bg-primary p-2">
                                    pending
                                </span>
                            </td>

                            <td class="px-6 py-3">
                                diet
                            </td>
                            <td class="px-6 py-3">
                                মিস্টার
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {

    data(){
return {
    tableData : null
}
    },

    created() {
        document.title = "Today's Serials"
    },

mounted(){
    axios.get('api/appointment/create').then(r=>{
        this.tableData = r.data 
       
    })
}

}
</script>


<style scoped>
</style>
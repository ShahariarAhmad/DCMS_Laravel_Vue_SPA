
<template>
  <div class="grid grid-cols-12">
    <side-bar></side-bar>

    <div class="col-span-9 p-5">
    <div class="grid grid-cols-1 shadow-2xl p-5 rounded-2xl my-5 border border-gray-400">
        <div class="flex flex-col">
          <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
              <div class="overflow-x-auto">
                <table class="min-w-full" id="example">
                  <thead class="border-b">
                    <tr>
                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        #
                      </th>
                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Name
                      </th>
                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Trix ID
                      </th>
                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Date
                      </th>
                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Amout
                      </th>
                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Payment Method
                      </th>
                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Payment Stats
                      </th>

                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Handled By
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="( record, index ) in records" :key="index" class="border-b">
                      <td class="capitalize text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ ++index }}
                      </td>
                      <td class="capitalize text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ record.name }}
                      </td>
                      <td class="capitalize text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ record.trix_id }}
                      </td>
                      <td class="capitalize text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ record.created_at }}
                      </td>
                      <td class="capitalize text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ record.amount }}
                      </td>
                      <td class="capitalize text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ record.payment_method }}
                      </td>
                      <td :class="{
                        'bg-emerald-500 text-white':
                          record.payment_status ==
                          'approved',
                        'bg-orange-500':
                          record.payment_status ==
                          'pending',
                        'bg-rose-500 text-white':
                          record.payment_status ==
                          'withdrawn',
                        'bg-gray-500 text-white':
                          record.payment_status ==
                          'notfound',
                      }" class="font-medium capitalize text-sm px-6 py-4 whitespace-nowrap">
                        {{
                            record.payment_status ==
                              "notfound"
                              ? "Not Found"
                              : record.payment_status
                        }}
                      </td>
                      <td class="capitalize text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ record.handler }}
                      </td>
                    </tr>
                
                  </tbody>
                </table>
     
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>


export default {

  data() {
    return {
      records: {}
    };
  },
  created() {
    document.title = "All Records";
  },


  mounted() {
    // Fetch initial results
   axios
        .get('api/others/all_records')
        .then(r => {
          this.records = r.data;
          // console.table(response.data);
        });


  },
};
</script>




<template>
  <div class="inline-flex rounded-md shadow-sm mb-10" role="group">
    <router-link :to="{ name: 'CreateDiet' }"
      type="button"
      class="
        py-2
        px-4
        text-sm
        font-medium
        text-gray-900
        bg-white
        rounded-l-lg
        border border-gray-200
        hover:bg-gray-100 hover:text-blue-700
        focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700
        dark:bg-gray-700
        dark:border-gray-600
        dark:text-white
        dark:hover:text-white
        dark:hover:bg-gray-600
        dark:focus:ring-blue-500
        dark:focus:text-white
      "
    >
      Create 
    </router-link>
    <router-link :to="{ name: 'DietDrafts' }"
      type="button"
      class="
        py-2
        px-4
        text-sm
        font-medium
        text-gray-900
        bg-white
        border-t border-b border-gray-200
        hover:bg-gray-100 hover:text-blue-700
        focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700
        dark:bg-gray-700
        dark:border-gray-600
        dark:text-white
        dark:hover:text-white
        dark:hover:bg-gray-600
        dark:focus:ring-blue-500
        dark:focus:text-white
      "
    >
      Drafts
    </router-link>
       <router-link :to="{ name: 'DietRecords' }"
      type="button"
      class="
        py-2
        px-4
        text-sm
        font-medium
        text-gray-900
        bg-white
        border-t border-b border-gray-200
        hover:bg-gray-100 hover:text-blue-700
        focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700
        dark:bg-gray-700
        dark:border-gray-600
        dark:text-white
        dark:hover:text-white
        dark:hover:bg-gray-600
        dark:focus:ring-blue-500
        dark:focus:text-white
      "
    >
      Records
    </router-link>
  
     
    <router-link  :to="{ name: 'DietRequests' }"
      type="button"
      class="
        py-2
        px-4
        text-sm
        font-medium
        text-gray-900
        bg-white
        rounded-r-md
        border border-gray-200
        hover:bg-gray-100 hover:text-blue-700
        focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700
        dark:bg-gray-700
        dark:border-gray-600
        dark:text-white
        dark:hover:text-white
        dark:hover:bg-gray-600
        dark:focus:ring-blue-500
        dark:focus:text-white
      "
    >
      Requests
    </router-link>
  </div>
</template>


<style scoped>
a.router-link-active{
  background-color: skyblue;
}
</style>
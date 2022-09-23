<template>
    <div class="col-span-3 bg-slate-800 text-white min-h-screen">
        <aside>
            <div class="overflow-y-auto py-4 px-3 rounded bg-gray-800">
                <ul class="space-y-2">
                    <li>
                        <router-link
                            class="flex items-center p-2 text-base font-normal rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
                            :to="{ name: 'DietRecords' }">
                            <span class="ml-3">Diet records </span>
                        </router-link>
                    </li>
                    <li v-if="gate.includes(1)">
                        <router-link
                            class="flex items-center p-2 text-base font-normal rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
                            :to="{ name: 'CreateDiet' }">

                            <span class="ml-3">CreateDiet </span>
                        </router-link>
                    </li>

                    <li v-if="gate.includes(1)">
                        <router-link
                            class="flex items-center p-2 text-base font-normal rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
                            :to="{ name: 'DietDrafts' }">

                            <span class="ml-3">DietDrafts </span>
                        </router-link>
                    </li>

                    <li v-if="gate.includes(1 || 2)">
                        <router-link
                            class="flex items-center p-2 text-base font-normal rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
                            :to="{ name: 'AllRecords' }">

                            <span class="ml-3">AllRecords </span>
                        </router-link>
                    </li>

                    <li v-if="gate.includes(1 || 2)">
                        <router-link
                            class="flex items-center p-2 text-base font-normal rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
                            :to="{ name: 'DietRecords' }">

                            <span class="ml-3">DietRecords </span>
                        </router-link>
                    </li>


                    <li v-if="gate.includes(3)">
                        <router-link
                            class="flex items-center p-2 text-base font-normal rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
                            :to="{ name: 'PaymentHistory' }">

                            <span class="ml-3"> Payment History </span>
                        </router-link>
                    </li>


                    <li v-if="gate.includes(1 || 2)">
                        <router-link
                            class="flex items-center p-2 text-base font-normal rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
                            :to="{ name: 'Appointments' }">

                            <span class="ml-3">Appointments </span>
                        </router-link>
                    </li>

                    <li v-if="gate.includes(1 || 2)">
                        <router-link
                            class="flex items-center p-2 text-base font-normal rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
                            :to="{ name: 'AppointmentSerials' }">

                            <span class="ml-3">Today's Serials </span>
                        </router-link>
                    </li>

                    <li v-if="gate.includes(1)">
                        <router-link
                            class="flex items-center p-2 text-base font-normal rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
                            :to="{ name: 'DietRequests' }">

                            <span class="ml-3">Diet Requests </span>
                        </router-link>
                    </li>
                    <li v-if="gate.includes(3)">
                        <router-link
                            class="flex items-center p-2 text-base font-normal rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
                            :to="{ name: 'RequestDiet' }">

                            <span class="ml-3">Requests Diet</span>
                        </router-link>
                    </li>
                    <li v-if="gate.includes(1 || 2)">
                        <router-link
                            class="flex items-center p-2 text-base font-normal rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
                            :to="{ name: 'AllArticles' }">

                            <span class="ml-3">AllArticles </span>
                        </router-link>
                    </li>

                    <li v-if="gate.includes(1 || 2)">
                        <router-link
                            class="flex items-center p-2 text-base font-normal rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
                            :to="{ name: 'WriteArticle' }">

                            <span class="ml-3">WriteArticle </span>
                        </router-link>
                    </li>

                    <li v-if="gate.includes(1 || 2)">
                        <router-link
                            class="flex items-center p-2 text-base font-normal rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
                            :to="{ name: 'ArticleCategory' }">

                            <span class="ml-3">ArticleCategory </span>
                        </router-link>
                    </li>

                    <li v-if="gate.includes(1 || 3)">
                        <router-link
                            class="flex items-center p-2 text-base font-normal rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
                            :to="{ name: 'PhotoGallery' }">

                            <span class="ml-3">PhotoGallery </span>
                        </router-link>
                    </li>

                    <li v-if="gate.includes(1 || 2)">
                        <router-link
                            class="flex items-center p-2 text-base font-normal rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
                            :to="{ name: 'AboutMe' }">

                            <span class="ml-3">AboutMe </span>
                        </router-link>
                    </li>

                    <li v-if="gate.includes(1 || 2)">
                        <router-link
                            class="flex items-center p-2 text-base font-normal rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
                            :to="{ name: 'ChamberDetails' }">

                            <span class="ml-3">ChamberDetails </span>
                        </router-link>
                    </li>

                    <li v-if="gate.includes(1 || 2)">
                        <router-link
                            class="flex items-center p-2 text-base font-normal rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
                            :to="{ name: 'SocialMedia' }">

                            <span class="ml-3">SocialMedia </span>
                        </router-link>
                    </li>

                    <li v-if="gate.includes(1 || 2)">
                        <router-link
                            class="flex items-center p-2 text-base font-normal rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
                            :to="{ name: 'AllEvents' }">

                            <span class="ml-3">AllEvents </span>
                        </router-link>
                    </li>

                    <li>

                        <div class="inline-flex rounded-md shadow-sm" role="group">
                            <router-link :to="{ name: 'ProfilePage' }"
                                class="py-2 px-4 text-sm font-medium bg-white rounded-l-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                <svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" fill="white"></path>
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"
                                        fill="white"></path>
                                </svg>
                            </router-link>
                            <router-link :to="{ name: 'ProfileSetting' }"
                                class="py-2 px-4 text-sm font-medium bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-settings">
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <path
                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                    </path>
                                </svg>
                            </router-link>
                            <button @click="logout"
                                class="py-2 px-4 text-sm font-medium bg-white rounded-r-md border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                <svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 32 32">
                                    <path
                                        d="M16 0c-1.765 0-3.197 1.432-3.197 3.197v11.204c0 1.765 1.432 3.197 3.197 3.197s3.197-1.432 3.197-3.197v-7.453c3.729 1.317 6.401 4.869 6.401 9.052 0 5.297-4.301 9.599-9.599 9.599s-9.599-4.296-9.599-9.599c0-2.651 1.072-5.052 2.812-6.787 1.251-1.249 1.251-3.281 0-4.531-1.249-1.251-3.281-1.251-4.531 0-2.891 2.901-4.683 6.901-4.683 11.317 0 8.839 7.161 16 16 16s16-7.161 16-16c0-8.839-7.161-16-16-16z"
                                        fill="white"></path>
                                </svg>
                            </button>
                        </div>



                    </li>
                </ul>
            </div>
        </aside>
    </div>
</template>

<script>
export default {
    data() {
        return {
            gate: [$cookies.get("auth").role_id]
            // gate: this.$route.meta.role.includes($cookies.get("auth").role_id),

        };
    },
    methods: {
        logout() {
            axios.post("api/logout").then((r) => {
                console.log(r.status)
                $cookies.remove("auth")

                this.$router.push('/');
            });

        },
    },
};
</script>
<style scoped>
.router-link-active {
    background-color: indigo;
}
</style>

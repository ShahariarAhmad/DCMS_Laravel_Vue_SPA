<template>
    <div class="w-full sm:justify-center items-center pt-6 sm:pt-0">
        <div class="w-full flex flex-col items-center justify-center">
            <div class="mt-10 text-center">
                <a href="/">
                    <h1 class="font-semibold text-3xl">DCMS | Register</h1>
                </a>
                <br />
            </div>
            <div
                class="mb-10 w-full border border-sky-300 sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"
            >
                <!---->
                <div class="mb-4 text-sm text-gray-600">
                    Thanks for signing up! Before getting started, could you
                    verify your email address by clicking on the link we just
                    emailed to you? If you didn't receive the email, we will
                    gladly send you another.
                </div>
                <!--v-if-->

                <div
                    v-show="bool"
                    class="mb-4 inline-flex items-center font-medium text-sm text-green-600"
                >
                    A new verification link has been sent to the email address
                    you provided during registration.
                </div>

                <div class="mt-4 flex items-center justify-between">
                    <p
                        @click="sendVerification"
                        class="cursor-pointer inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150"
                    >
                        Resend Verification Email
                    </p>

                    <button
                        @click.prevent="logout"
                        class="underline text-sm text-gray-600 hover:text-gray-900"
                    >
                        Log Out
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            bool: false,
        };
    },

    methods: {
        sendVerification() {
            axios.post("/api/email/verification-notification").then((res) => {
                this.bool = true;
            });
        },
        logout() {
            axios.post("/api/logout").then((res) => {
                this.$router.push({ path: "/login" });
            });
        },
    },
};
</script>

<template>
    <div
        class="min-h-screen w-full sm:justify-center items-center pt-6 sm:pt-0"
    >
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
                <div class="my-10">
                    <div>
                        <label
                            for="email"
                            class="block mb-3 text-gray-600 font-semibold"
                            >First Name</label
                        >
                        <input
                            v-model.lazy="form.f_name"
                            type="text"
                            class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full"
                        />
                    </div>
                    <div class="mt-4">
                        <label
                            for="email"
                            class="block mb-3 text-gray-600 font-semibold"
                            >Last Name</label
                        >
                        <input
                            v-model.lazy="form.l_name"
                            type="text"
                            class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full"
                        />
                    </div>

                    <div class="mt-4">
                        <label
                            for="email"
                            class="block mb-3 text-gray-600 font-semibold"
                            >Age</label
                        >
                        <input
                            v-model.lazy="form.age"
                            type="text"
                            class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full"
                        />
                    </div>
                    <div class="mt-4">
                        <label
                            for="email"
                            class="block mb-3 text-gray-600 font-semibold"
                            >Height</label
                        >
                        <input
                            v-model.lazy="form.height"
                            type="text"
                            class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full"
                        />
                    </div>

                    <div class="mt-4">
                        <label
                            for="email"
                            class="mb-3 block text-gray-600 font-semibold"
                            >Gender</label
                        >

                        <select
                            v-model="form.gender"
                            class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full"
                        >
                            <option :value="1">Male</option>
                            <option :value="0">Female</option>
                        </select>
                    </div>
                    <div class="mt-4">
                        <label
                            class="mb-3 block font-medium text-sm text-gray-700"
                            for="email"
                            ><span>Email</span></label
                        >
                        <input
                            v-model="form.email"
                            class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full"
                        />
                    </div>
                    <div class="mt-4">
                        <label
                            class="mb-3 block font-medium text-sm text-gray-700"
                            for="password"
                            ><span>Password</span></label
                        >
                        <input
                            v-model.lazy="form.password"
                            class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full"
                            type="password"
                        />
                    </div>
                    <div class="mt-4">
                        <label
                            class="mb-3 block font-medium text-sm text-gray-700"
                            for="password_confirmation"
                            ><span>Confirm Password</span></label
                        >
                        <input
                            v-model.lazy="form.confirm_password"
                            class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full"
                            type="password"
                        />
                    </div>
                    <div class="flex items-center justify-end mt-8">
                        <a
                            class="underline text-sm text-gray-600 hover:text-gray-900"
                            href="http://127.0.0.1:8000/login"
                        >
                            Already registered? </a
                        ><button
                            @click.prevent="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150 ml-4"
                        >
                            Register
                        </button>
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
            form: {
                email: null,
                password: null,
                confirm_password: null,
                f_name: null,
                l_name: null,
                gender: null,
                age: null,
                height: null,
                bool: false,
            },
        };
    },

    methods: {
        submit() {
            console.log(this.form);
            axios.post("/api/register", this.form).then((r) => {
                axios.get("api/user").then((res) => {
                    $cookies.set("auth", JSON.stringify(res.data));
                    if (res.data.role_id == 1) {
                        this.$router.push({ name: "AllArticles" });
                    }
                    if (res.data.role_id == 2) {
                        this.$router.push({ name: "AllRecords" });
                    }
                    if (res.data.role_id == 3) {
                        this.$router.push({ name: "Appointments" });
                    }
                });

                $cookies.set("auth", JSON.stringify(res.data));
                axios.post("/api/email/verification-notification").then((r) => {
                    this.$router.push({ path: "/verify-email" });
                });
            });
        },
    },
};
</script>

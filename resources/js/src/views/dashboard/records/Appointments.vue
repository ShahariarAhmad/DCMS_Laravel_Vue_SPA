<template>
    <div class="grid grid-cols-12">
        <side-bar></side-bar>

        <div class="col-span-8 p-5">
            <div
                class="grid grid-cols-12 gap-6 shadow-2xl p-5 rounded-2xl my-5 border border-gray-400"
            >
                <div class="col-span-6">
                    <div class="inline-flex">
                        <p class="text-xl">Book an appointment</p>
                    </div>
                </div>

                <div class="col-span-12">
                    <div class="grid grid-cols-1">
                        <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                            <p class="col-span-1 p-1">Desired serial date</p>

                            <input
                                v-model="desired_date"
                                type="date"
                                class="border border-slate-200 col-span-1 p-1"
                            />
                        </div>

                        <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                            <p class="col-span-1 p-1">Select Chamber</p>

                            <select
                                v-model="chamber_id"
                                class="border border-slate-200 col-span-1 p-1"
                            >
                                <option
                                    v-for="chamber in chambers"
                                    :key="chamber.id"
                                    :value="chamber.id"
                                >
                                    {{ chamber.name }}
                                </option>
                            </select>
                        </div>
                        <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                            <p class="col-span-1 p-1">Payment Method</p>

                            <select
                                v-model="payment_method"
                                class="border border-slate-200 col-span-1 p-1"
                            >
                                <option value="bkash">Bkash</option>
                                <option value="nagad">Nagad</option>
                                <option value="dbbl">DBBL</option>
                            </select>
                        </div>

                        <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                            <p class="col-span-1 p-1">Transaction ID</p>

                            <input
                                v-model="trix_id"
                                type="text"
                                class="border border-slate-200 col-span-1 p-1"
                            />
                        </div>
                        <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                            <p class="col-span-1 p-1">Money send from</p>

                            <input
                                v-model="sent_from"
                                type="text"
                                class="border border-slate-200 col-span-1 p-1"
                            />
                        </div>
                        <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                            <p class="col-span-1 p-1">Money send to</p>

                            <input
                                v-model="sent_to"
                                type="text"
                                class="border border-slate-200 col-span-1 p-1"
                            />
                        </div>
                        <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                            <p class="col-span-1 p-1">Amount</p>

                            <input
                                v-model="amount"
                                type="text"
                                class="border border-slate-200 col-span-1 p-1"
                            />
                        </div>

                        <button
                            @click="onSubmit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                        >
                            Make an appointment
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
            desired_date: "2022-07-07",
            chamber_id: 1,
            payment_method: "nagad",
            trix_id: null,
            sent_from: 134352354,
            sent_to: 345234,
            amount: 500,
            chambers: null,
        };
    },
    created() {
        document.title = "Appointments";
    },
    mounted() {
        axios.get("api/appointment").then((res) => {
            this.chambers = res.data;
            // console.table(res.data);
        });
    },
    methods: {
        onSubmit() {
            const form = new FormData();
            form.append("desired_date", this.desired_date);
            form.append("chamber_id", this.chamber_id);
            form.append("payment_method", this.payment_method);
            form.append("trix_id", this.trix_id);
            form.append("sent_from", this.sent_from);
            form.append("sent_to", this.sent_to);
            form.append("amount", this.amount);

            axios.post("/api/appointment", form).then((res) => {
                console.log(res.data);
            });
        },
    },
};
</script>

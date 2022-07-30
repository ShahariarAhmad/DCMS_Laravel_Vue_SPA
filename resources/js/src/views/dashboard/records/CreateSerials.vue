<template>
    <div class="grid grid-cols-12">
    <side-bar></side-bar>


        <div class="col-span-8 p-5 ">

            <div class="grid grid-cols-12 gap-6 shadow-2xl p-5 rounded-2xl my-5 border border-gray-400">

                <p class="text-2xl col-span-12">
                    Create serials
                </p>

                <div class="grid grid-cols-2 col-span-1">
                    
                </div>

                <div class="col-span-12">
                    <div class="grid grid-cols-1 p-16">
                        <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                            <p class="border border-slate-200 col-span-1  p-1 indent-4">Name:</p>

                            <p class="border border-slate-200 col-span-1 p-1 text-center">001 <a href="#"
                                    class="float-right mr-"> <sup>Edit</sup> </a></p>
                        </div>
                        <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                            <p class="border border-slate-200 col-span-1  p-1 indent-4">Name:</p>

                            <p class="border border-slate-200 col-span-1 p-1 text-center">001 <a href="#"
                                    class="float-right mr-"> <sup>Edit</sup> </a></p>
                        </div>

                        <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                            <p class="border border-slate-200 col-span-1  p-1 indent-4">Name:</p>

                            <p class="border border-slate-200 col-span-1 p-1 text-center">001 <a href="#"
                                    class="float-right mr-"> <sup>Edit</sup> </a></p>
                        </div>


                    </div>
                </div>

            </div>

            <div class="grid grid-cols-12 gap-6 shadow-2xl p-5 rounded-2xl my-5 border border-gray-400">

                <p class="text-2xl col-span-12">
                    Create serials
                </p>



                <div class="col-span-12">
                    <div class="grid grid-cols-1">
                        <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                            <p class="border border-slate-200 col-span-1  p-1">Name:</p>

                            <input type="text" class="border border-slate-200 col-span-1 p-1">
                        </div>

                        <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                            <p class="border border-slate-200 col-span-1  p-1">Age:</p>

                            <input type="text" class="border border-slate-200 col-span-1 p-1">
                        </div>
                        <div class="grid grid-cols-2 gap-2 col-span-1 mb-3">
                            <p class="border border-slate-200 col-span-1  p-1">Date:</p>

                            <input type="date" class="border border-slate-200 col-span-1 p-1">
                        </div>


                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Create
                        </button>
                    </div>
                </div>

            </div>

        </div>
    </div>
</template>

<script>
export default {
    created() {
    document.title = "Create Serials"
    },
}
</script>


<style scoped>
</style>
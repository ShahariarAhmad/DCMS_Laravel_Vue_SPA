<template>
    <div class='grid grid-cols-12'>
        <side-bar></side-bar>

        <div class='col-span-8 p-5 '>
            <menu-group></menu-group>
            <div class='grid grid-cols-12 gap-6 shadow-2xl p-5 rounded-2xl my-5 border border-gray-400'>

                <p class='text-2xl col-span-12 text-center'>
                    Keto Diet
                </p>


                <div class='col-span-12'>
                    <div class='grid grid-cols-1 px-16 mt-10'>
                        <div class='grid grid-cols-3  col-span-1 mb-3 text-center'>
                            <p class='border border-slate-200 col-span-1  p-1 '>Date</p>

                            <p class='border border-slate-200 col-span-1 p-1'> Food & Amount </p>


                            <p class='border border-slate-200 col-span-1 p-1'> days </p>
                        </div>


                    </div>

                    <div class='grid grid-cols-1 px-16' >
                        <div class='grid grid-cols-3  col-span-1' id='addrow'>
                            <p class='border border-slate-200 col-span-1  p-1 indent-4'>20-10-1998</p>

                            <div class='border border-slate-200 col-span-1 py-1 px-5 '>

                                <p>Rice</p>
                                <ul>
                                    <li class='indent-8'>1</li>
                                    <li class='indent-8'>1</li>

                                </ul>
                                <p>Rice</p>
                                <ul>
                                    <li class='indent-8'>1</li>
                                    <li class='indent-8'>1</li>

                                </ul>
                            </div>
                            <div class='border border-slate-200 col-span-1 py-1 px-5 '>
                                <p>sat</p>
                            </div>
                            

                        </div>
  <button @click='add' class='bg-grey-300' >+</button>
                    </div>
                  


                    <div class='grid grid-cols-1 px-16'>
                        <div class='grid grid-cols-3  col-span-1 '>

                            <div class='border border-slate-200 col-span-3 p-5 '>

                                <p class='text-xl mb-5'>Note</p>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates nemo maiores qui
                                    eaque optio laudantium laboriosam explicabo? Ullam quo iure magni commodi, officia
                                    incidunt deleniti. Repudiandae, quasi? Harum, est optio.</p>

                            </div>

                        </div>


                    </div>
                </div>

            </div>



        </div>
    </div>
</template>

<script>
import MenuGroup from '../../../components/dashboard/diet/MenuGroupButton.vue';
export default {
    components: {
        MenuGroup

    },
created() {
    document.title = "Create Diet"
    },
    methods: {
        add() {
            //  document.getElementById('add').insertAdjacentHTML('afterend',
            //             '<h3>This is the text which has been inserted by JS</h3>');

            document.getElementById('addrow').insertAdjacentHTML('afterend',
                "<div class='grid grid-cols-3  col-span-1 '> <p class='border border-slate-200 col-span-1  p-1 indent-4'>20-10-1998</p> <div class='border border-slate-200 col-span-1 py-1 px-5 '> < p > Rice</p > <ul> <li class='indent-8'>1</li> <li class='indent-8'>1</li> </ul> <p>Rice</p> <ul> <li class='indent-8'>1</li> <li class='indent-8'>1</li></ul> </div> <div class='border border-slate-200 col-span-1 py-1 px-5'> <p>sat</p> </div> </div>");

        }
    }
}
</script>


<style scoped>
</style>



<!-- 

        <div class='grid grid-cols-3  col-span-1 '>
                            <p class='border border-slate-200 col-span-1  p-1 indent-4'>20-10-1998</p>

                            <div class='border border-slate-200 col-span-1 py-1 px-5 '>

                                <p>Rice</p>
                                <ul>
                                    <li class='indent-8'>1</li>
                                    <li class='indent-8'>1</li>

                                </ul>
                                <p>Rice</p>
                                <ul>
                                    <li class='indent-8'>1</li>
                                    <li class='indent-8'>1</li>

                                </ul>
                            </div>
                            <div class='border border-slate-200 col-span-1 py-1 px-5 '>
                                <p>sat</p>
                            </div>
                        </div> -->
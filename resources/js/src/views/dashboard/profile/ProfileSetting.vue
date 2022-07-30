<template>
    <!-- component -->
    <!-- component -->
  
        <div class="container mx-auto">
            <div class="inputs w-full max-w-2xl p-6 mx-auto">
                <h2 class="text-2xl text-gray-900">Account Setting</h2>
                <form class="mt-6 border-t border-gray-400 pt-4">
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-full px-3 mb-6">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-text-1">email address</label>
                            <input
                                class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none focus:border-gray-500"
                                id="grid-text-1" type="text" placeholder="Enter email" required>
                        </div>
                        <div class="w-full md:w-full px-3 mb-6">
                            <label
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">password</label>
                            <button
                                class="appearance-none bg-gray-200 text-gray-900 px-2 py-1 shadow-sm border border-gray-400 rounded-md">
                                change your password
                            </button>
                        </div>
                        <div class="w-full md:w-full px-3 mb-6">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">pick your
                                country</label>
                            <div class="flex-shrink w-full inline-block relative">
                                <select
                                    class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded">
                                    <option>choose ...</option>
                                    <option>USA</option>
                                    <option>France</option>
                                    <option>Spain</option>
                                    <option>UK</option>
                                </select>
                            </div>
                        </div>
                        <div class="w-full md:w-full px-3 mb-6">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">fav
                                language</label>
                            <div class="flex-shrink w-full inline-block relative">
                                <select
                                    class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded">
                                    <option>choose ...</option>
                                    <option>English</option>
                                    <option>France</option>
                                    <option>Spanish</option>
                                </select>
                            </div>
                        </div>
                        <div class="personal w-full border-t border-gray-400 pt-4">
                            <h2 class="text-2xl text-gray-900">
                                Personal info:
                            </h2>
                            <div class="flex items-center justify-between mt-4">
                                <div class="w-full md:w-1/2 px-3 mb-6">
                                    <label
                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">first
                                        name</label>
                                    <input
                                        class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none focus:border-gray-500"
                                        type="text" required>
                                </div>
                                <div class="w-full md:w-1/2 px-3 mb-6">
                                    <label
                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">last
                                        name</label>
                                    <input
                                        class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none focus:border-gray-500"
                                        type="text" required>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <div class="w-full md:w-1/2 px-3 mb-6">
                                    <label
                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Phone
                                        Number</label>
                                    <input
                                        class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none focus:border-gray-500"
                                        type="text" required>
                                </div>
                                <div class="w-full md:w-1/2 px-3 mb-6">
                                    <label
                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Gender</label>
                                    <select
                                        class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded">
                                        <option>Choose ...</option>

                                        <option>Male</option>
                                        <option>Female</option>

                                    </select>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <div class="w-full md:w-1/2 px-3 mb-6">
                                    <label
                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Age</label>
                                    <input
                                        class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none focus:border-gray-500"
                                        type="text" required>
                                </div>
                                <div class="w-full md:w-1/2 px-3 mb-6">
                                    <label
                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Height</label>
                                    <select
                                        class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded">
                                        <option>Choose ...</option>

                                        <option>Male</option>
                                        <option>Female</option>

                                    </select>
                                </div>
                            </div>
                       
                            <div class="flex justify-end">
                                <button
                                    class="appearance-none bg-gray-200 text-gray-900 px-2 py-1 shadow-sm border border-gray-400 rounded-md mr-3"
                                    type="submit">
                                    save changes
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
 
</template>

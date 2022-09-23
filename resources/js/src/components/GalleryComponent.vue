<template>
     <section name="gallery" class="container mx-auto py-10" id="gallery">
         <h1 class="py-8 text-4xl">Gallery</h1> <br>
        <div class="grid grid-cols-12 gap-6 ">
            <img v-for="gallery in galleryList" :key="gallery.id" class="col-span-12 sm:col-span-6 md:col-span-3 lg:col-span-3 xl:col-span-4 rounded-xl shadow-2xl  w-full object-cover h-full"
            :src="gallery.image_url" alt="Image Here...">
        </div>

    </section>
</template>

<script>
export default{
    props:['galleryList']
}
</script>


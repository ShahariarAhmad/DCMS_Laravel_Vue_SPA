
<template>
    

          <article class="shadow my-4" v-if="post">
                <!-- Article Image -->
            
                    <img :src="post.img_url">
              
                <div class="bg-white flex flex-col justify-start p-6">
                    <!-- <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">Technology</a> -->
                    <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">{{post.title}}</a>
                    <p href="#" class="text-sm pb-3">
                    Published on {{new Date(post.created_at).toDateString()}}
                    </p>
                    <div class="pb-6">{{post.article}}</div>
                </div>
            </article>

   
   
</template>



<script>
import axios from 'axios'

export default {
    data(){
        return {
            post:null
        }
    },

    async created(){










        await axios.get(`/api/article/${this.$route.params.id}`).then(res=>{

            this.post = res.data[0]
             console.table(res.data[0])
        })
       
    }
}

</script>
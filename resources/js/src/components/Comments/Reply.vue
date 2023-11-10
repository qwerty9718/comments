<template>
    <div class="card-body">
        <div class="d-flex flex-start align-items-center">
            <img class="rounded-circle shadow-1-strong me-3"
                 src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWaHBzhbO_5td7ftBcbh-8qThZ0OAHKpYXzkNFW3op&s" alt="avatar" width="60"
                 height="60" />
            <div>
                <h6 class="fw-bold text-primary mb-1">{{reply.user_name}} {{reply.id}}</h6>
                <p class="text-muted small mb-0">
                    {{reply.time_create}}
                </p>
            </div>
        </div>

        <p class="mt-3 mb-4 pb-2">
            {{reply.body}}
        </p>

        <div class="small d-flex justify-content-start">
            <a href="#!" class="d-flex align-items-center me-3 text-decoration-none">
                <i class="far fa-thumbs-up me-2"></i>
                <p class="mb-0">Like</p>
            </a>
            <a href="#!" class="d-flex align-items-center me-3 text-decoration-none">
                <i class="far fa-comment-dots me-2"></i>
                <p class="mb-0">Comment</p>
            </a>
<!--            <a v-if="comment.replies_count" @click.prevent="getRepliesDB({id:comment.id})" data-bs-toggle="collapse" :href="'#collapseExample' + comment.id" role="button" aria-expanded="false" aria-controls="collapseExample" class="d-flex align-items-center me-3 text-decoration-none" >-->
<!--                <i class="fas fa-share me-2"></i>-->
<!--                <p class="mb-0">Replies <strong>{{comment.replies_count}}</strong></p>-->
<!--            </a>-->
        </div>

    </div>
</template>

<script>
import {defineComponent} from 'vue'

export default defineComponent({
    name: "Reply",
    props:{
        reply:{type:Object, required:true}
    }
})
</script>



<style scoped>

</style>

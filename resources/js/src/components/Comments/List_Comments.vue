<template>

    <div v-if="comments" v-for="comment in comments" :key="comment.id">

        <Comment :comment="comment">
            <template v-slot:list_replies>
                <div class="collapse" :id="'collapseExample' + comment.id">
                    <div class="card card-body reply_block" v-for="reply in replies[comment.id]"
                         :key="reply.id">
                        <Reply :reply="reply"></Reply>
                    </div>
                </div>
            </template>
        </Comment>


    </div>

    <div class="container">
        <button class="btn btn-success btn-sm" @click="loadMoreComments">load more</button>
    </div>
</template>

<script>
import {defineComponent} from 'vue'
import {mapActions, mapGetters} from "vuex";
import Comment from "@/src/components/Comments/Comment.vue";
import Reply from "@/src/components/Comments/Reply.vue";

export default defineComponent({
    name: "List_Comments",
    components: {Reply, Comment},

    computed: {
        ...mapGetters({
            comments: "comments_module/getComments",
            getPageData: "comments_module/getPageData",
            replies: 'replies_Module/getReplies'
        })
    },

    methods: {
        ...mapActions({
            getCommentsDB: "comments_module/getCommentsDB",
            loadMoreComments: 'comments_module/loadMoreComments',
            getRepliesDB: 'replies_Module/getRepliesDB'
        })
    },


    mounted() {
        this.getCommentsDB();
    }
})
</script>


<style scoped>
.reply_block {
    width: 85%;
    margin: auto;
    margin-top: 10px;
}
</style>

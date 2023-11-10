<template>
    <section style="background-color: #eee;">
        <div class="container-fluid my-5 py-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-lg-10 col-xl-8">
                    <div class="card">
                        <Input_Comment/>
                        <List_Comments/>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import {defineComponent} from 'vue'
import List_Comments from "@/src/components/Comments/List_Comments.vue";
import Input_Comment from "@/src/components/Comments/Input_Comment.vue";

export default defineComponent({
    name: "Comments",
    components: {Input_Comment, List_Comments}
})
</script>


<style scoped>

</style>

<template>
    <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
        <div class="d-flex flex-start w-100">
            <img class="rounded-circle shadow-1-strong me-3"
                 src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWaHBzhbO_5td7ftBcbh-8qThZ0OAHKpYXzkNFW3op&s" alt="avatar" width="40"
                 height="40" />
            <div class="form-outline w-100">
                <textarea class="form-control" id="textAreaExample" rows="4"
                          style="background: #fff;"></textarea>
                <label class="form-label" for="textAreaExample">Message</label>
            </div>
        </div>
        <div class="float-end mt-2 pt-1">
            <button type="button" class="btn btn-primary btn-sm">Post comment</button>
            <button type="button" class="btn btn-outline-primary btn-sm">Cancel</button>
        </div>
    </div>
</template>

<script>
import {defineComponent} from 'vue'

export default defineComponent({
    name: "Input_Comment"
})
</script>



<style scoped>

</style>

<template>
    <div>
        <span class="text-muted">{{ postDate }}</span>
        <div class="media mt-2">
            <a v-bind:href="user.url" class="pr-2">
                <img :src="user.avatar">
            </a>
            <div class="media-body mt-1">
                <a :href="user.url">{{ user.name }}</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "UserInfo",
        // <user-info :model="..." label=""></user-info>
        props: ['model', 'label'],
        computed: {
            postDate() {
                return this.label + " " + this.model.created_date;
            }
        },
        data(){
            return{
                user: this.model.user,
            }
        }
    }
</script>

<style scoped>

</style>

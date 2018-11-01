<template>
    <div class="my-dashboard">
       
    </div>
</template>

<script>
    export default {
        data() {
            return {
            skills: []
        }
        },
    	mounted() {
            axios.get('/skills').then(response => console.log(response.data));
        }
        }
</script>

<style lang="scss" scoped>
</style>
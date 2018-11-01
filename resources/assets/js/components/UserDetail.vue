<template>
    <div class="user-detail">
        <div class="user-detail-container" v-if="Object.keys(userDetailInfor).length != 0">
        	<div class="user-name">
        		Name: {{ userDetailInfor.name.last }} {{ userDetailInfor.name.first}}
        	</div>
        	<div class="user-email">
        		Email: {{ userDetailInfor.email }}
        	</div>
        	<div class="user-dob">
        		DOB: {{ userDetailInfor.dob }}
        	</div>
        	<div class="user-gender">
        		Gender: {{ userDetailInfor.gender }}
        	</div>
        	<div class="user-address">
        		Address: {{ userDetailInfor.location.city }}
        	</div>
        </div>
    </div>
</template>

<script>
    export default {
    	props: {
    		userDetailInfor:{
    			type: Object
    		}
    	}
    }
</script>

<style lang="scss" scoped>
</style>
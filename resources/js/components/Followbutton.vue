<template>
    <div class="align-items-center">
        <button class="btn ml-4"
                v-bind:class="{ 'btn btn-primary': (!this.status) , 'btn': (this.status) }"
                style="border:1px solid #dbdbdb ;font-weight: bold;height: 30px;line-height: 1px"
                @click="followUser"  v-text="buttonText"></button>

        <button class="btn ml-2 align-items-center"  v-bind:class="{ 'btn btn-primary': (!this.status) , 'btn': (this.status) }"
                style="width: 40px;border:1px solid #dbdbdb ;font-weight: bold;height: 30px;line-height: 1px"><i class="fa fa-caret-down"></i> </button>

    </div>
</template>

<script>
    export default
    {
        props: ['user_id','follows'],

        mounted() {
            console.log('Component mounted.')
        },

        data: function() {

            return {
                status: this.follows,
            }
        },
        methods: {
            followUser(){
                axios.post('/follow/' + this.user_id)
                    .then(response=>{
                        this.status=! this.status;
                        console.log(response.data);
                        //Toast.fire({
                        //    icon: 'success',
                        //    title:(this.status) ? 'Follow'+' successfully' : 'Following'+' successfully'
                        //})
                        Toast.fire(
                            (this.status) ? 'Good job!' : 'Bad job!',
                            (this.status) ? 'Follow'+' successfully' : 'Unfollow'+' successfully',
                            (this.status) ? 'success' : 'warning'
                        )
                    })
                .catch(errors =>{
                    if(errors.response.status==401){
                        window.location='/login';
                    }
                });
            }
        },

        computed:{
            buttonText(){
                return (this.status) ? 'Following' : 'Follow';
            }
        },
    }
</script>

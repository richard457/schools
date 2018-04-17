<template>
    <div class="container">

    <div class="col-xs-4 col-md-4 col-lg-4" style="margin-top:220px;max-width:400px;margin-left:350px;">
       <input placeholder="user name" class="form-control"/><br>
       <input placeholder="password" class="form-control"/><br>
       <button style="border-radius:0px;width:100px;margin-left:120px;" class="btn">Login</button>
    </div>
    </div>
</template>
<script>
    export default {
        name: 'left-side',

        props: ['name'],
        data: () => {



        },
        methods: {
            login(){

            }
        },
        mounted: function () {
            console.log('mounted nav header component');
        }

    }
</script>


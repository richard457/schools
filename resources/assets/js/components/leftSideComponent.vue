
<template>
    <div class="col-md-2">

        <tree-component :data="treeData" show-checkbox multiple allow-batch whole-row
                        @item-click="addAccount"></tree-component>

        <div class="col-md-2 add_account" data-toggle="modal" data-target="#exampleModal">
            <button class="btn">Add Account</button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Account</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form v-on:submit="addAccount" action="#">

                            <input class="form-control" v-model="account_name" placeholder="name"><br>

                            <button   type="submit" class="btn btn-primary">Save changes</button>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

</template>
<script>
    export default {
        name: 'left-side',

        props: ['name'],
        data: () => {
            return {
                mapName: this.name + "-map",
                account_name:'',
                treeData: [] ,
            }

        },
        created(){
            axios.get('get_accounts')
            .then(accounts=>{
               
                this.treeData = accounts.data;
            })
        },
        methods: {
            
            addAccount(event) {
                this.getUser();
                //TODO: now implement api to submit data on backend
                axios.get('get_user')
                .then(user=>{
                    // console.log(user.data.id)
                    axios.post('add_account',{name:this.account_name,user_id:user.data.id})
                    .then(response => {
                      console.log(response);
                    });
                })

                
            },
            getUser(){
                axios.get('get_user')
                .then(user=>{
                    this.user = user.data;
                })
            }
        },
        mounted: function () {
            console.log('mounted nav header component');
        }

    }
</script>


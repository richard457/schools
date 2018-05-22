
<template>
    <div class="col-md-2">

        <tree-component :data="treeData" show-checkbox multiple allow-batch whole-row
                        @item-click="extraOption"></tree-component>
        <!-- Modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" id="modal_one" style="display: none;" data-target="#exampleModal">
            Launch demo modal
        </button>
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
                            <multiselect v-model="selected_parent" tag-placeholder="To account" placeholder="Search" label="name" track-by="value" :options="options" :multiple="true" :taggable="true" @tag="addTag"></multiselect><br>

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
        <fab
            :position="position"
            :bg-color="bgColor"
            :actions="fabActions"
            @cache="cache"
            @alertMe="showModal"
            
            ></fab>
    </div>

</template>
<script>
import Multiselect from 'vue-multiselect'
import fab from 'vue-fab'
    export default {
        name: 'left-side',
        props: ['name'],
        components: { Multiselect,fab },
        data: () => {
            return {
                selected_parent: [],
                mapName: this.name + "-map",
                account_name:'',
                treeData: [] ,
                options:[],
                bgColor: '#778899',
                position: 'bottom-right',
                iconSize: 'small',
                fabActions: [
                    {
                        name: 'cache',
                        icon: 'cached'
                    },
                    {
                        name: 'alertMe',
                        icon: 'user_group',
                        iconSize: 'small',
                    }
                ]
            }
        },
        created(){

            document.getElementById("sidebarCollapse").click();
            axios.get('get_accounts')
            .then(accounts=>{

                this.treeData = accounts.data;
                this.options = accounts.data[0].children.map(e=>{return {"name": e.value,"id":e.id}});
            })
        },
        methods: {
            addTag (newTag) {
                const tag = {
                    name: newTag,
                    code: newTag.substring(0, 2) + Math.floor((Math.random() * 10000000))
                }
                this.options.push(tag)
                this.selected_parent.push(tag)
            },
            addAccount() {
                this.getUser();
                //TODO: now implement api to submit data on backend
                axios.get('get_user')
                .then(user=>{
                    // console.log(user.data.id)
                    axios.post('add_account',{name:this.account_name,user_id:user.data.id,selected_parent:this.selected_parent})
                    .then(() => {
                        //refresh the tree
                        axios.get('get_accounts')
                            .then(accounts=>{
                                this.treeData = accounts.data;
                                this.options = accounts.data[0].children.map(e=>{return {"name": e.value,"id":e.id}});
                            })
                    });
                })
            },
            getUser(){
                axios.get('get_user')
                .then(user=>{
                    this.user = user.data;
                })
            },
            cache(){
                
            },
            showModal(){
                document.getElementById("modal_one").click();
            },
            extraOption(event){

            }
        },
        mounted: function () {
            console.log('mounted nav header component');
        }

    }
</script>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>


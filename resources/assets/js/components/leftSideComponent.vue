
<template>
    <div class="col-md-2">

        <tree-component :data="treeData" show-checkbox multiple allow-batch whole-row
                        @item-click="itemClick"></tree-component>

    </div>
</template>
<script>
    export default {
        name: 'left-side',

        props: ['name'],
        data: () => {
            return {
                mapName: this.name + "-map",
                treeData:   [
                    {
                        "id": 0,
                        "text": "Kigali",
                        "value": "Kigali",
                        "icon": "",
                        "opened": true,
                        "selected": false,
                        "disabled": false,
                        "loading": false,
                        "children": [
                            {
                                "id": 1,
                                "text": "Excel",
                                "value": "Excel",
                                "icon": "",
                                "opened": false,
                                "selected": true,
                                "disabled": false,
                                "loading": false,
                                "children": [
                                    {
                                        "text": "RRA-450B",
                                        "value": "RRA-450B",
                                        "icon": "",
                                        "opened": false,
                                        "selected": true,
                                        "disabled": false,
                                        "loading": false,
                                    }
                                ]
                            },
                            {
                                "id": 2,
                                "text": "Volcon",
                                "value": "Volcon",
                                "icon": "",
                                "opened": false,
                                "selected": false,
                                "disabled": false,
                                "loading": false,
                                "children": [{
                                    "text": "RRA-450B",
                                    "value": "RRA-450B",
                                    "icon": "",
                                    "opened": false,
                                    "selected": true,
                                    "disabled": false,
                                    "loading": false,
                                }]
                            },


                        ]
                    }
                ],
            }

        },
        methods: {
            itemClick(node) {
                console.log(node.model.text + ' clicked !')
            }
        },
        mounted: function () {
            console.log('mounted nav header component');
        }

    }
</script>


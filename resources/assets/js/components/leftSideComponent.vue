
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
                                "text": "custom icon",
                                "value": "custom icon",
                                "icon": "fa fa-warning icon-state-danger",
                                "opened": false,
                                "selected": false,
                                "disabled": false,
                                "loading": false,
                                "children": []
                            },
                            {
                                "id": 3,
                                "text": "initially open",
                                "value": "initially open",
                                "icon": "fa fa-folder icon-state-default",
                                "opened": true,
                                "selected": false,
                                "disabled": false,
                                "loading": false,
                                "children": [
                                    {
                                        "id": 4,
                                        "text": "Another node",
                                        "value": "Another node",
                                        "icon": "",
                                        "opened": false,
                                        "selected": false,
                                        "disabled": false,
                                        "loading": false,
                                        "children": []
                                    }
                                ]
                            },
                            {
                                "id": 5,
                                "text": "custom icon",
                                "value": "custom icon",
                                "icon": "fa fa-warning icon-state-warning",
                                "opened": false,
                                "selected": false,
                                "disabled": false,
                                "loading": false,
                                "children": []
                            },
                            {
                                "id": 6,
                                "text": "disabled node",
                                "value": "disabled node",
                                "icon": "fa fa-check icon-state-success",
                                "opened": false,
                                "selected": false,
                                "disabled": true,
                                "loading": false,
                                "children": []
                            }
                        ]
                    },
                    {
                        "id": 7,
                        "text": "Same but with checkboxes",
                        "value": "Same but with checkboxes",
                        "icon": "",
                        "opened": true,
                        "selected": false,
                        "disabled": false,
                        "loading": false,
                        "children": [
                            {
                                "id": 8,
                                "text": "initially selected",
                                "value": "initially selected",
                                "icon": "",
                                "opened": false,
                                "selected": true,
                                "disabled": false,
                                "loading": false,
                                "children": []
                            },
                            {
                                "id": 9,
                                "text": "custom icon",
                                "value": "custom icon",
                                "icon": "fa fa-warning icon-state-danger",
                                "opened": false,
                                "selected": false,
                                "disabled": false,
                                "loading": false,
                                "children": []
                            },
                            {
                                "id": 10,
                                "text": "initially open",
                                "value": "initially open",
                                "icon": "fa fa-folder icon-state-default",
                                "opened": true,
                                "selected": false,
                                "disabled": false,
                                "loading": false,
                                "children": [
                                    {
                                        "id": 11,
                                        "text": "Another node",
                                        "value": "Another node",
                                        "icon": "",
                                        "opened": false,
                                        "selected": false,
                                        "disabled": false,
                                        "loading": false,
                                        "children": []
                                    }
                                ]
                            },
                            {
                                "id": 12,
                                "text": "custom icon",
                                "value": "custom icon",
                                "icon": "fa fa-warning icon-state-warning",
                                "opened": false,
                                "selected": false,
                                "disabled": false,
                                "loading": false,
                                "children": []
                            },
                            {
                                "id": 13,
                                "text": "disabled node",
                                "value": "disabled node",
                                "icon": "fa fa-check icon-state-success",
                                "opened": false,
                                "selected": false,
                                "disabled": true,
                                "loading": false,
                                "children": []
                            }
                        ]
                    },
                    {
                        "id": 14,
                        "text": "And wholerow selection",
                        "value": "And wholerow selection",
                        "icon": "",
                        "opened": false,
                        "selected": false,
                        "disabled": false,
                        "loading": false,
                        "children": []
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


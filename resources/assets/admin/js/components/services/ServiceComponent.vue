<template>
    <div class="content">
        <el-tabs v-model="activeTab" v-loading="loading">
            <el-tab-pane label="Ver" name="list">
                <list-service-component @service:delete="serviceDelete"  @service:edit="editService" ref="ListService"></list-service-component>
            </el-tab-pane>
            <el-tab-pane label="Nuevo" name="create">
                <create-service-component  @service:refresh="serviceListRefresh"></create-service-component>
            </el-tab-pane>
        </el-tabs>
        <edit-service-component ref="EditService" @service:refresh="serviceListRefresh"></edit-service-component>
    </div>
</template>
<script>
    import ListService from './ListService.vue'
    import CreateService from './CreateService.vue'
    import EditService  from './EditService.vue'

    export default {
        components: {
            'list-service-component': ListService,
            'create-service-component': CreateService,
            'edit-service-component': EditService,
        },
        data() {
            return {
                laravelData: {},
                activeTab: 'list',
                id_service: '',
                childState: false,
                loading: false
            }
        },
        created() {
        },
        methods: {
            serviceDelete(id){
                this.$routeLaravel('api.service.destroy',{id}).post()
                .then(response => {
                    if(response.status==200){
                        this.$message({  message: 'El serivicio se elimino',  showClose: true,  type: 'success'});
                        this.$refs.ListService.refresh();
                    }
                    else{   
                        this.$message({ message: 'Ocurrio un error', showClose: true, type: 'error' });
                        console.error(response.data);
                    }
                })
                .catch(response => { 
                    this.$message({   message: 'Ocurrio un error',   showClose: true,   type: 'error' });
                    console.error(response.data);
                })
            },
            serviceListRefresh: function () {
                this.loading= true;
                this.$refs.ListService.refresh();
                this.loading= false;
            },
            editService: function (service) {
                this.$refs.EditService.edit(service);
            },
        }
    }
</script>
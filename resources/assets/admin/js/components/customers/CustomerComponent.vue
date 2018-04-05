<template>
    <div class="content">
        <el-tabs v-model="activeTab" v-loading="loading">
            <el-tab-pane label="Ver" name="list">
                <list-customer-component ref="ListCustomer"></list-customer-component>
            </el-tab-pane>
            <el-tab-pane label="Nuevo" name="create">
                <h1>hola2</h1>
            </el-tab-pane>
        </el-tabs>
        <!-- <edit-service-component ref="EditCustomer"></edit-service-component> -->
    </div>
</template>
<script>
    import ListCustomer from './ListCustomer.vue'
    // import EditCustomer  from './EditCustomer.vue'

    export default {
        components: {
            'list-customer-component': ListCustomer,
            // 'edit-customer-component': EditCustomer,
        },
        data() {
            return {
                laravelData: {},
                activeTab: 'list',
                id_service: '',
                loading: false
            }
        }
    }
</script>
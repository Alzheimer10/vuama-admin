<template>
	<!-- END BEGIN PROFILE SIDEBAR -->
	<el-tabs v-model="activeTab" v-loading="loading" class="col-xs-12 col-md-8 col-lg-9">
	    <!-- PERSONAL INFO TAB -->
	    <el-tab-pane label="Datos personales" name="information">
	    	<information-account-component @account:user="userData" :user="user"  ref="informationComponent" :route="route"></information-account-component>
	    </el-tab-pane>
	    <el-tab-pane label="Cambiar contraseña" name="password">
	    	<password-account-component  class="col-xs-12 col-md-8 col-lg-6 mx-auto"></password-account-component>
	    </el-tab-pane>
	    <el-tab-pane label="Configuración" name="config">
	    </el-tab-pane>
	</el-tabs>
</template>
<script>
    import informationAccount  from './informationAccount.vue'
    import PasswordAccount  from './PasswordAccount.vue'
    export default {
        props: ['user','route'],
        components: {
            'information-account-component': informationAccount,
            'password-account-component': PasswordAccount
        },
        data() {
            return {
                activeTab: 'information',
                loading: false
			}
		},
		mounted() {
			console.log(this.$root.user);
		},
		methods:{
			userData(){
				this.$refs.informationComponent.user = this.user;
			},

		}
	}
</script>
<template>
	<div class="row" v-if="laravelData">
		<!-- {{ laravelData }} -->
		<div class="container">
			<div class="row">
				
			    <el-date-picker
			    	v-model="dataPicker"
			    	type="daterange"
			    	start-placeholder="Start date"
			    	end-placeholder="End date"
			    	class="col-xs-12 col-sm-6 mx-auto"
	    			format="yyyy/MM/dd"
	    			value-format="yyyy-MM-dd"
			    	:default-time="['00:00:00', '23:59:59']">
			    </el-date-picker>

<!-- 			    <el-checkbox-group v-model="listTypes" class="col-12">
			      <el-checkbox-button v-for="type in types" :label="type" :key="type">{{type}}</el-checkbox-button>
			    </el-checkbox-group> -->

				<!-- <span>Checked names: {{ listTypes }} dataPicker: {{dataPicker}}</span> -->
				<div class="container pt-2">
					<button v-on:click="filtar" class="btn btn-info">Filtrar</button>
					<button v-on:click="reset" class="btn btn-secondary">Reiniciar</button>
				</div>

				<hr class="w-100 d-block">
			</div>
		</div>
		<div v-for="project in laravelData.data">
			<project-card-component :project="project"></project-card-component>
		</div>
        <pagination :data="laravelData" v-on:pagination-change-page="getLaravelData">
    		<span slot="prev-nav">&lt;</span>
			<span slot="next-nav">&gt;</span>
        </pagination>
	</div>
</template>


<script>
	import axios from 'axios';
	import projectCardComponent from './projectCardComponent.vue';
	import projectDatapickerComponent from './ProjectDatapickerComponent.vue';
    export default {
    	components: {
    	    'project-card-component' : projectCardComponent,
    	    'project-datapicker-component' : projectDatapickerComponent
    	},
    	props: ['route'],
	 	data() {
			return {
				laravelData: {},
        		dataPicker: [],
        		types: ['Mañana', 'Tarde'],
        		listTypes: ['Mañana', 'Tarde']
			}
		},
		created() {
			this.dataPicker  = [];
			this.getLaravelData();
		},
		methods: {
			reset(){
				this.dataPicker = [];
				this.getLaravelData();
			},
			filtar(){
	            axios.get(this.route+'?page=1' + '&types='+this.types+ '&dataPicker='+this.dataPicker)
	            .then(response => {
	                this.laravelData = response.data;
	            });
			},
			getLaravelData(page) {
				if (typeof page === 'undefined') {
					page = 1;
				}
	            axios.get(this.route+'?page=' + page)
	            .then(response => {
	                this.laravelData = response.data;
	            });
			}
		}
    }
</script>
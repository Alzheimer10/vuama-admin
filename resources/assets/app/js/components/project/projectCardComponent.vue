<template>
	<div class="card-proyecto mb-3 border-bottom">
		<div class="col-12">
			<div class="row">
				<div class="pl-3 pr-0">	
					<h2 class="display-4 mb-0">
						<span class="badge badge-secondary">
							{{ project.created_at | formatDateD}}
							<p class="mb-0 pb-0" style="font-size: 1rem">{{ project.created_at | formatDateMY}}</p>
						</span>
					</h2>
				</div>
				<div class="col pr-2">
					<h3 class="text-uppercase mb-0 tippy" :title="project.title">
						<a :href="'/proyecto/' + project.id"><strong>{{ project.title | truncate(100) }}</strong></a>
					</h3>
				</div>
			</div>
		</div>
		<div class="container">	
			<ul class="list-inline mb-0">
				<li class="list-inline-item tippy badge badge-secondary p-1 text-uppercase" title="Tipo de proyecto">{{project.type}}</li>
				<li class="list-inline-item tippy badge badge-secondary p-1" title="Calificación promedio por todos los proyectos completados">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="far fa-star"></i>
				</li>
				<li class="list-inline-item tippy badge p-1 text-uppercase" 
				title="Estatus del proyecto" :class="{ 'badge-success' : project.status, 'badge-danger' : !project.status}">{{project.status | projectStatus}}</li>
			</ul>
			<p class="mb-0">{{project.description | truncate(300) }}</p>
		</div>
	</div>
</template>

<script>
    export default {
        props: ['project']
    }
</script>
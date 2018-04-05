<template>
    <div class="content" v-if="laravelData">
      <el-table :data="laravelData.data" stripe v-loading="loading" class="w-100">
          <el-table-column  type="index"> </el-table-column>

          <el-table-column label="Nombre" prop="scope.row.name" sortable>
            <template slot-scope="scope">
              <span style="margin-left: 10px">{{ scope.row.name }}</span>
            </template>
          </el-table-column>

          <el-table-column label="Descripción" prop="scope.row.description" sortable>
            <template slot-scope="scope">
              <span style="margin-left: 10px">{{ scope.row.description | truncate(150) }}</span>
            </template>
          </el-table-column>

          <el-table-column label="Estatus" prop="scope.row.status" sortable>
            <template slot-scope="scope">
              <span style="margin-left: 10px">{{scope.row.status | status }}</span>
            </template>
          </el-table-column>

          <el-table-column label="Operaciones">
            <template slot-scope="scope">
              <el-button size="mini" @click="handleEdit(scope.row)">Editar</el-button>
              <el-button size="mini" type="danger" @click="DialogDelete(scope.row.id)">Eliminar</el-button>
            </template>
          </el-table-column>
      </el-table>

      <el-dialog title="Warning" :visible.sync="DialogVisibleDelete" class="col-xs-12 col-sm-8 col-md-6 mx-auto" center>
        <span>¿Está seguro de que desea eliminar permanentemente el Servicio?</span>
        <span slot="footer" class="dialog-footer">
          <el-button @click="DialogVisibleDelete = false">Cancel</el-button>
          <el-button type="primary" @click="handleDelete()">Confirm</el-button>
        </span>
      </el-dialog>

      <pagination :data="laravelData" v-on:pagination-change-page="getLaravelData">
          <span slot="prev-nav">&lt;</span>
          <span slot="next-nav">&gt;</span>
      </pagination>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                laravelData: {},
                loading: true,
                DialogVisibleDelete: false,
                id_delete: '',
            }
        },
        created() {
          this.getLaravelData();
        },
        methods: {
            getLaravelData(page) {
              if (typeof page === 'undefined')
                  page = 1;
              this.$routeLaravel('api.services',{page}).get()
              .then(response => {
                this.laravelData = response.data;
                this.loading = false;
              }).catch(response => {
                this.$message({
                  message: 'Ocurrio un error',
                  showClose: true,
                  type: 'error'
                });
                console.error(response.data);
              })
            },
            refresh(){
              this.getLaravelData();
            },
            DialogDelete(id){
              this.id_delete = id;
              this.DialogVisibleDelete = true;
            },
            handleEdit(service){
              this.$emit('service:edit', service)
            },
            handleDelete(){ 
              this.DialogVisibleDelete = false;
              this.$emit('service:delete',this.id_delete)
            }
        }
    }
</script>
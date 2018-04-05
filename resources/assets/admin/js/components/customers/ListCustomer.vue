<template>
    <div class="content" v-if="laravelData">
      <el-table :data="laravelData.data" stripe v-loading="loading" class="w-100">
          <el-table-column  type="index">
            <template slot-scope="scope">
              <span>{{ scope.row.id }}</span>
            </template>
          </el-table-column>

          <el-table-column label="Nombre" prop="scope.row.name" sortable>
            <template slot-scope="scope">
              <span style="margin-left: 10px">{{ scope.row.name }}, {{ scope.row.lastname }}</span>
            </template>
          </el-table-column>

          <el-table-column label="Email" prop="scope.row.email" sortable>
            <template slot-scope="scope">
              <span style="margin-left: 10px">{{ scope.row.email }}</span>
            </template>
          </el-table-column>

          <el-table-column label="Phone" prop="scope.row.phone" sortable>
            <template slot-scope="scope">
              <span style="margin-left: 10px">{{ scope.row.phone }}</span>
            </template>
          </el-table-column>

          <el-table-column label="Estatus" prop="scope.row.status" sortable>
            <template slot-scope="scope">
              <span style="margin-left: 10px">{{scope.row.status | status }}</span>
            </template>
          </el-table-column>

      </el-table>
      <pagination :data="laravelData" v-on:pagination-change-page="getLaravelData" :limit="1">
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
          this.$routeLaravel('api.customers',{page}).get()
          .then(response => {
            this.laravelData = response.data;
            this.loading = false;
          }).catch(response => {
            this.$message({  message: 'Ocurrio un error',  showClose: true,  type: 'error'});
            console.error(response.data);
          })
        },
        refresh(){
          this.getLaravelData();
        },
    }
  }
</script>
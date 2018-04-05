<template>
  <div>
      <el-dialog title="Editar Servicio" :visible.sync="DialogVisibleEdit" class="col-xs-12 col-sm-8 col-md-6 mx-auto" center>
        <el-form :model="service" :rules="rules" ref="ruleForm" label-width="120px" class="demo-ruleForm pt-5" v-loading="loading">

          <el-form-item label="Nombre" prop="name">
            <el-input v-model="service.name"></el-input>
          </el-form-item>

          <el-form-item label="Descripción" prop="description">
            <el-input type="textarea" class="inline-input" v-model="service.description"></el-input>
          </el-form-item>

          <el-form-item label="Estatus" prop="status">
            <el-switch v-model.bool="service.status" :true-value="1" :false-value="0"></el-switch>
          </el-form-item>

          <el-form-item>
            <el-button @click="close">Cancel</el-button>
            <el-button type="primary" @click="submitForm('ruleForm')">Aceptar</el-button>
          </el-form-item>

        </el-form>
      </el-dialog>
  </div>
</template>
<script>
  export default {
    data() {
      return {
        DialogVisibleEdit: false,
        loading: true,
        service: {
          id: '',
          name: '',
          description: '',
          status: '',
        },
        rules: {
          name: [
            { required: true, message: 'Por favor introduce el nombre del Servicio', trigger: 'blur' },
            { min: 3, message: 'La longitud debe ser mayor a 3', trigger: 'blur' }
          ],
          description: [
            { required: true, message: 'Por favor ingrese una descripción', trigger: 'blur' },
            { min: 10, message: 'La longitud debe ser mayor a 10', trigger: 'blur' }
          ]
        }
      };
    },
    methods: {
      close(){
        this.DialogVisibleEdit = false;
        this.loading = false;
        this.resetForm();
      },
      submitForm(formName) {
        this.$refs[formName].validate((valid) => {
          if (valid) {
            this.loading = true;
            this.$routeLaravel('api.service.store').put(this.service)
            .then(response => {
              if(response.status==200){
                this.$message({
                  message: 'El servicio se creo',
                  showClose: true,
                  type: 'success'
                });
                this.resetForm();
                this.$emit('service:refresh');
              }
              else{
                this.$message({  message: 'Ocurrio un error',  showClose: true,  type: 'error'});
              }
              this.loading = false;
            })
            .catch(response => { 
                this.$message({   message: 'Ocurrio un error',   showClose: true,   type: 'error' });
                console.error(response.data);
            });
            this.DialogVisibleEdit = false;
            return true;
          }else {
            return false;
          }
        });
      },
      edit(service){
        this.$routeLaravel('api.service',{'id' : service.id}).get()
        .then(response => {
            if(response.status==200){
              this.service = response.data;
              if(service.status)
                this.service.status = true;
              else
                this.service.status = false;
              this.DialogVisibleEdit = true;
            }
        })
        .catch(response => { 
            this.$message({   message: 'Ocurrio un error',   showClose: true,   type: 'error' });
            console.error(response.data);
        })
        this.loading = false;
      },
      resetForm(){
        this.service = {
          id: '',
          name: '',
          description: '',
          status: true,
        }
      }
    }
  }
</script>
<template>
  <el-form :model="ruleForm" :rules="rules" ref="ruleForm" label-width="120px" class="demo-ruleForm pt-5">

    <el-form-item label="Nombre" prop="name">
      <el-input v-model="ruleForm.name"></el-input>
    </el-form-item>

    <el-form-item label="Descripción" prop="description">
      <el-input type="textarea" class="inline-input" v-model="ruleForm.description"></el-input>
    </el-form-item>

    <el-form-item label="Estatus" prop="status">
      <el-switch v-model="ruleForm.status"></el-switch>
    </el-form-item>

    <el-form-item>
      <el-button type="primary" @click="submitForm('ruleForm')">Crear</el-button>
      <el-button @click="resetForm('ruleForm')">Reiniciar</el-button>
    </el-form-item>

  </el-form>
</template>
<script>
  export default {
    data() {
      return {
        ruleForm: {
          name: '',
          description: '',
          status: true,
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
      submitForm(formName) {
        this.$refs[formName].validate((valid) => {
          if (valid) {
            var data = this.ruleForm;
            this.$routeLaravel('api.service.store').post(data)
            .then(response => {
                if(response.status==200){
                  console.log(response);
                    this.resetForm('ruleForm');
                    this.$message({
                      message: 'El servicio se creo',
                      showClose: true,
                      type: 'success'
                    });
                    this.$emit('service:refresh');
                }
                else{
                    this.$message({
                      message: 'Ocurrio un error',
                      showClose: true,
                      type: 'error'
                    });
                }
            });
            return true;
          }else {
            return false;
          }
        });
      },
      resetForm(formName) {
        this.$refs[formName].resetFields();
      }
    }
  }
</script>
<template>
    <div class="container">
      <el-form label-position="top" :model="ruleForm" status-icon :rules="rules2" ref="ruleForm" label-width="120px" class="demo-ruleForm" size="medium">
        <el-form-item label="Contraseña nueva" prop="pass">
          <el-input type="password" v-model="ruleForm.pass" auto-complete="off"></el-input>
        </el-form-item>
        <el-form-item label="Confirmar contraseña" prop="checkPass">
          <el-input type="password" v-model="ruleForm.checkPass" auto-complete="off"></el-input>
        </el-form-item>
        <el-form-item>
          <el-button type="primary" @click="submitForm('ruleForm')">Aceptar</el-button>
          <el-button @click="resetForm('ruleForm')">Cancelar</el-button>
        </el-form-item>
      </el-form>
    </div>
</template>
<script>
    export default {
        data() {
            var validatePass = (rule, value, callback) => {
              if (value === '') {
                callback(new Error('Por favor ingrese la contraseña nueva'));
              } else {
                if (this.ruleForm.checkPass !== '') {
                  this.$refs.ruleForm.validateField('checkPass');
                }
                callback();
              }
            };
            var validatePass2 = (rule, value, callback) => {
              if (value === '') {
                callback(new Error('Por favor ingrese la contraseña nuevamente'));
              } else if (value !== this.ruleForm.pass) {
                callback(new Error('Two inputs don\'t match!'));
              } else {
                callback();
              }
            };
            return {
              ruleForm: {
                pass: '',
                checkPass: ''
              },
              rules2: {
                pass: [
                  { validator: validatePass, trigger: 'blur' }
                ],
                checkPass: [
                  { validator: validatePass2, trigger: 'blur' }
                ]
              }
            };
        },
        methods: {
            submitForm(formName) {
              this.$refs[formName].validate((valid) => {
                if (valid) {
                  alert('submit!');
                } else {
                  console.log('error submit!!');
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
<template>
    <el-form label-position="top" :model="user" :rules="rules" ref="user" size="medium" class="row">
        <el-form-item label="Nombre" prop="name" class="col-6 col-md-4">
            <el-input v-model="user.name" placeholder="Nombre" maxlength="30"></el-input>
        </el-form-item>

        <el-form-item label="Apellido" prop="lastname" class="col-6 col-md-4">
            <el-input v-model="user.lastname" placeholder="Apellido" maxlength="30"></el-input>
        </el-form-item>

        <el-form-item label="Correo eléctronico" prop="email" class="col-12 col-md-4">
            <el-input v-model="user.email" placeholder="email"></el-input>
        </el-form-item>

        <el-form-item label="Cédula" prop="ci" class="col-12 col-md-4 col-lg-3">
            <el-input v-model="user.ci" placeholder="cedula"></el-input>
        </el-form-item>

        <el-form-item label="Número de teléfono" prop="phone" class="col-12 col-md-4 col-lg-3">
          <el-input v-model="user.phone" placeholder="phone"></el-input>
        </el-form-item>

        <el-form-item label="Número de teléfono adicional" prop="additional_phone" class="col-12 col-md-4 col-lg-3">
            <el-input v-model="user.additional_phone" placeholder="additional_phone" maxlength="20"></el-input>
        </el-form-item>
     
        <el-form-item label="Fecha de nacimiento" prop="dbirth" class="col-12 col-md-6 col-lg-3">
            <el-date-picker v-model="user.dbirth" type="date" placeholder="Fecha de nacimiento" :picker-options="dbirthOption">
            </el-date-picker>
        </el-form-item>

        <div class="col-12 col-md-6 col-lg-3">
            <masked-input v-model="user.phone" mask="\+\ 1 (111) 1111-11" placeholder="Phone" class="el-input__inner"/>
        </div>
      <el-form-item size="large" class="col-12 mt-2">
        <el-button type="primary" @click="submitForm('user')">Actualizar</el-button>
        <el-button @click="resetForm('user')">Cancel</el-button>
      </el-form-item>
    </el-form>


</template>

<script>
import MaskedInput from 'vue-masked-input'
  export default {
    components: { 
      MaskedInput 
    },
    props: ['route'],
    data() {
      return {
        user:{},
        phone:'',
        dbirthOption: {
          disabledDate(time) {
            return time.getTime() > Date.now();
          }
        },
        rules: {
          name: [
            { required: true, message: 'Este campo es requerido', trigger: 'blur' },
            { min: 3, max: 30, message: 'La longitud debe ser de 3 a 30', trigger: 'blur' }
          ],
          lastname: [
            { required: true, message: 'Este campo es requerido', trigger: 'blur' },
            { min: 3, max: 30, message: 'La longitud debe ser de 3 a 30', trigger: 'blur' }
          ],
          email: [
            { required: true, message: 'Este campo es requerido', trigger: 'blur' },
            { type: 'email', message: 'Ingrese la dirección de correo electrónico correcta', trigger: 'blur,change' }
          ],
          ci: [
            { required: true, message: 'Este campo es requerido', trigger: 'blur' }
          ],
          phone: [
            { required: true, message: 'Este campo es requerido', trigger: 'blur' },
            { min: 9, message: 'La longitud minima es de 9 digitos', trigger: 'blur' }
          ]
        },
      };
    },
    mounted() {
        this.$emit('account:user')
    },
    methods: {
        submitForm(formName) {
            this.loading = true
            this.$refs[formName].validate((valid) => {
                if (valid) {
                    this.$routeLaravel('api.users.update',{user: this.user.id}).put(this.user)
                    .then(response => {
                        this.$message({  message: 'Sus datos se actualizaron',  showClose: true,  type: 'success'});
                        this.loading = false
                    });
                } else {
                  return false;
                }
            });
        },
        resetForm(formName) {
            this.$routeLaravel('api.users.show',{user: this.user.id}).get()
            .then(response => {
                this.$refs[formName].resetFields();
                this.user = response.data
                this.loading = false
            })

        }
    }
  };
</script>
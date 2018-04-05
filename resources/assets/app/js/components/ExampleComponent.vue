<template>
    <form-wizard @on-complete="onComplete" class="container p-5" title="SOLICITAR" subtitle="SERVICIO" back-button-text="Atras" next-button-text="Siguiente" finish-button-text="Públicar mi proyecto">
        <tab-content title="Paso 1" :before-change="validateFirstTab"  class="row">
            <h4>Seleccione el tipo de Servicio</h4>
            <div class="col-xs-12 col-sm-6 offset-sm-3" >
                <vue-form-generator :model="model"  :schema="firstTabSchema" :options="formOptions" ref="firstTabForm">
                </vue-form-generator>
            </div>
        </tab-content>

        <tab-content title="Paso 2" :before-change="validateSecondTab" class="row">
            <h4>¿Cómo quieres que trabajen?!</h4>
            <div  class="col-xs-12 col-sm-6 offset-sm-3">
                <vue-form-generator :model="model"  :schema="secondTabSchema" :options="formOptions" ref="secondTabForm"></vue-form-generator>
            </div>
        </tab-content>

        <tab-content title="Paso 3" :before-change="validateThirdTab" class="row">
            <h4>Cuéntanos más sobre lo que necesitas!</h4>
            <div  class="col-xs-12 col-sm-10 offset-sm-1">
                <vue-form-generator :model="model"  :schema="thirdTabSchema" :options="formOptions" ref="thirdTabForm"></vue-form-generator>
            </div>
        </tab-content>
    </form-wizard>
</template>

<script>
    //global registration
    import VueFormWizard from 'vue-form-wizard'
    import {FormWizard, TabContent} from 'vue-form-wizard'
    import 'vue-form-wizard/dist/vue-form-wizard.min.css'
    Vue.use(VueFormWizard)
    //local registration
    import 'vue-form-wizard/dist/vue-form-wizard.min.css'
    import VueFormGenerator from 'vue-form-generator'
    Vue.use(VueFormGenerator)
    import axios from 'axios';

    export default {
        props: ['user_id'],
        beforeCreate: function () {
        },
        mounted: function () {
        },
        created: function () { 
            axios.get('/api/servicesSelect')
            .then(response => {
                this.firstTabSchema.fields[0].values = response.data;
            })
            .catch(e => {
              this.errors.push(e)
            })
        },
        data() {
            return {
                model:{
                    title: '',
                    description: '',
                    type: '',
                    status: 1,
                    maximum: '',
                    service_id: '',
                    user_id: this.user_id
                },
                formOptions: {
                    validationErrorClass: "has-error",
                    validationSuccessClass: "has-success",
                    validateAfterChanged: true,
                    validateAfterLoad: false
                },
                firstTabSchema:{
                    fields:[{
                        type: "vueMultiSelect",
                        model: "service_id",
                        label: 'Si no encuentra el servicio que solicita puede seleccionar "Otros".',
                        placeholder: "Servicios",
                        required:true,
                        validator:VueFormGenerator.validators.required.locale({
                             fieldIsRequired: "Este campo es requerido!"
                        }),
                        values: [],
                        styleClasses: ['col-xs-12'],
                        selectOptions: {
                            multiSelect: false,
                            closeOnSelect: true,
                            searchable: true,
                            showLabels: false,
                            label: "name",
                            key: "id"
                        }
                    }]
                },
                secondTabSchema:{
                    fields:[
                        {
                            type: "input",
                            inputType: "text",
                            label: "Su presupuesto máximo.",
                            placeholder: "Presupuesto",
                            model: "maximum",
                            required:false,
                            validator: VueFormGenerator.validators.string.locale({
                                fieldIsRequired: "Este campo es requerido!"
                            }),
                            styleClasses:'col-xs-6'
                        },
                        {
                            type: "vueMultiSelect",
                            label: "Horario",
                            model: "schedule",
                            required:true,
                            validator:VueFormGenerator.validators.required.locale({
                                 fieldIsRequired: "Este campo es requerido!"
                            }),
                            values:['Emergencia','Tandas','Indefinido'],
                            styleClasses: ['col-xs-12'],
                            selectOptions: {
                                multiSelect: false,
                                closeOnSelect: true,
                                searchable: false,
                                showLabels: false
                            },
                        },
                        {
                            type: "vueMultiSelect",
                            label: "Tipo de servicio",
                            model: "type",
                            required:true,
                            validator:VueFormGenerator.validators.required.locale({
                                 fieldIsRequired: "Este campo es requerido!"
                            }),
                            values:['Mañana','Tarde'],
                            styleClasses: ['col-xs-12'],
                            selectOptions: {
                                multiSelect: true,
                                closeOnSelect: true,
                                searchable: false,
                                showLabels: false
                            },
                        }
                    ]
                },
                thirdTabSchema:{
                    fields:[
                        {
                            type: "input",
                            inputType: "text",
                            label: "Elige un nombre para tu proyecto.",
                            placeholder: "Ej: Quiero pintar un apartamento..",
                            model: "title",
                            min: 15,
                            required:true,
                            validator: VueFormGenerator.validators.string.locale({
                                fieldIsRequired: "Este campo es requerido!",
                                textTooSmall: "Min. 15 caracteres"
                            }),
                            styleClasses:'col-xs-6'
                        },
                        {
                            type: "textArea",
                            placeholder: "Escribe algo...",
                            label: "Las grandes descripciones incluyen un poco sobre tu proyecto, detalles de lo que quieres obtener, y cualquier decisión que hayas tomado sobre el proyecto.",
                            max: 2000,
                            min: 100,
                            rows: 4,
                            model: "description",
                            required:true,
                            validator: VueFormGenerator.validators.string.locale({
                                fieldIsRequired: "Este campo es requerido!",
                                textTooSmall: "Min. 100 caracteres",
                                textTooBig: "Max. 2000 caracteres"
                            }),
                            styleClasses:'col-xs-6'
                        },
                    ]
                }
           }
        },
        methods: {
            onComplete: function(){
                this.model.service_id =  this.model.service_id.id;
                axios.post('/api/projects', this.model)
                .then(response => {
                    console.log(response.data);
                    window.location.href = '/';
                })
                .catch(e => {
                  this.errors.push(e)
                })
            },
            validateFirstTab: function(){
              return this.$refs.firstTabForm.validate();
            },
            validateSecondTab: function(){
              return this.$refs.secondTabForm.validate();
            },
            validateThirdTab: function(){
              return this.$refs.thirdTabForm.validate();
            }
        }
    }
</script>
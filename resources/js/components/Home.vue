<template>
    <div>
        <v-row>
            <v-col cols="12" md="3" lg="3" xl="3">
            <v-card>
                <v-card-title style="background-color:#B2DFDB">Input Here</v-card-title>
                    <v-card-text>
                        <br/>
                        <v-form ref="saveData" @submit.prevent="saveData">
                            <v-text-field 
                                label="ID Number"
                                dense
                                outlined
                                v-model="form.idNumber"
                                :rules="rules.required"
                                :value="capitalizedForm.idNumber"
                            />
                            <label><b>Full Name</b></label>
                            <v-text-field 
                                label="Last Name"
                                dense
                                outlined
                                v-model="form.lastName"
                                :rules="rules.required"
                                :value="capitalizedForm.lastName"
                            />
                            <v-text-field 
                                label="First Name"
                                dense
                                outlined
                                v-model="form.firstName"
                                :rules="rules.required"
                                :value="capitalizedForm.firstName"
                            />
                            <v-text-field 
                                label="Middle Name"
                                dense
                                outlined
                                v-model="form.middleName"
                                :rules="rules.required"
                                :value="capitalizedForm.middleName"
                            />
                            <v-btn type="submit" color="success" block>SAVE</v-btn>
                        </v-form>
                            
                    </v-card-text>
            </v-card>
        </v-col>
        <v-col cols="12" md="9" lg="9" xl="9">
            <v-card>
                <v-card-title style="background-color:#B2DFDB">Summary</v-card-title>
                    <v-card-text>
                        <br/>
                            <v-simple-table
                                fixed-header
                                height="60vh"
                            >
                                <thead>
                                    <tr>
                                        <th>ID No.</th>
                                        <th>Last Name</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Position</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item,i) in tableData" :key="i">
                                        <td>{{ item.idNumber }}</td>
                                        <td>{{ item.lastName }}</td>
                                        <td>{{ item.firstName }}</td>
                                        <td>{{ item.middleName }}</td>
                                        <td></td>
                                    </tr>
                                </tbody>

                            </v-simple-table>
                    </v-card-text>
            </v-card>
        </v-col>
        </v-row>
        
        
    </div>
    
</template>
<script>
export default {
    data:()=>({
        tableData:[],
        form:{
            idNumber:'',
            lastName:'',
            firstName:'',
            middleName:''
        },
        rules:{
            required: [
                v => !!v || 'Field is required'
            ],
        },
    }),
    methods:{
        saveData(){
            if(this.$refs.saveData.validate()){
                this.tableData.push(this.capitalizedForm)
                this.form = {}
                this.$refs.saveData.resetValidation();
            }
            
            // console.log(this.tableData)
       
        },
        capitilizedFirst(str){
            if(str){
                return str.charAt(0).toUpperCase() + str.slice(1).toLowerCase()
            }else{
                return '';
            }
           
        }
    },
    computed:{
        capitalizedForm(){
            return{
                idNumber: this.form.idNumber,
                firstName: this.capitilizedFirst(this.form.firstName),
                lastName: this.capitilizedFirst(this.form.lastName),
                middleName: this.capitilizedFirst(this.form.middleName),
            }
        }
    },
    watch:{
        // capitalizedForm(val){
        //     console.log(val)
        // },
        // form(val){
        //     console.log(val,'form')
        // }
    }
}
</script>
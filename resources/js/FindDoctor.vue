<template>
    <div>
        <div class="container-fluid">
            <div class="banner-wrapper">
                <div class="search-box">
                    <div class="form-group search-location">
                            <datepicker :format="customDate" v-model="time" :inline=true></datepicker>
                        </div>
                </div>



        <div class="card mt-1">
            <div class="card-header"> Doctors available today</div>
            <div class="card-body">

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Department</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(d, index) in doctors">
                        <th scope="row" hidden>{{ index+1 }}</th>
                        <th scope="row">{{ d.doctor.id }}</th>

                        <td>{{ d.doctor.name }}</td>
                        <td>{{ d.doctor.department }}</td>
                        <td>
                            <a :href="'/new-appointment/'+ d.user_id+'/'+d.date ">
                                <button class="btn btn-success">
                                    Book Appointment
                                </button>
                            </a>
                        </td>
                    </tr>
                    <td v-if="doctors.length==0">No doctors available for: <p class="bold">{{this.time}}</p> </td>



                    </tbody>
                </table>
                <div class="text-center">
                    <beat-loader :loading="loading" :color="color" :size="size"></beat-loader>
                </div>


            </div>

        </div>
    </div>
        </div>
    </div>
</template>


<script type="text/javascript">
import datepicker from 'vuejs-datepicker'
import axios from 'axios';
import moment from 'moment';
import PulseLoader from 'vue-spinner/src/PulseLoader.vue';
import BeatLoader from 'vue-spinner/src/BeatLoader.vue';
    export default {
        data(){
            return{
                time:'',
                doctors:[],
                loading:false
            }
        },
        components:{
            datepicker,
            PulseLoader,
            BeatLoader
        },
        methods:{
            customDate(date){
                //make loader appear
                this.loading = true
                this.time = moment(date).format('YYYY-MM-DD');
                axios.post('/api/finddoctors',{date:this.time}).then((response)=>{
                    setTimeout(()=>{
                        this.doctors = response.data
                        this.loading = false
                    }, 500)
                }).catch((error)=>{alert('error')})
            }
        },
        mounted(){
            this.loading = true
            axios.get('/api/doctors/today').then((response)=>{
                this.doctors = response.data
                this.loading = false
            })
        }
    }
</script>

<style scoped>

/*
style the date picker to take full space.
.my-datepicker .my-datepicker_calendar{
    width: 100%;
    height: 330px;
    font-weight: bold;
}*/

</style>

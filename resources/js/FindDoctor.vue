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
                    <p>No doctors today</p>



                    </tbody>
                </table>


            </div>

        </div>
    </div>
        </div>
    </div>
</template>


<script type="text/javascript">
import datepicker from 'vuejs-datepicker'
import axios from 'axios';
import moment from 'moment'
    export default {
        data(){
            return{
                time:'',
                doctors:[]
            }
        },
        components:{
            datepicker
        },
        methods:{
            customDate(date){
                this.time = moment(date).format('YYYY-MM-DD')
            }
        },
        mounted(){
            axios.get('/api/doctors/today').then((response)=>{
                this.doctors = response.data
            })
        }
    }
</script>

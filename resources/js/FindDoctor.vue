<template>
    <div>
        <div class="container-fluid">
            <div class="banner-wrapper">
                <div class="search-box">
                    <div class="form-group search-location">
                            <datepicker :format="customDate"></datepicker>
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
                    <tr>
                        <th scope="row">1</th>

                        <td>Ben</td>
                        <td>Heart</td>
                        <td>
                            <a href="#">
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
import moment from 'moment'
    export default {
        data(){
            return{

            }
        },
        components:{
            datepicker
        }
    }
</script>

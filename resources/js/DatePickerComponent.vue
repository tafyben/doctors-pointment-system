<template>
    <div class="form-group search-info">
        <DatePicker
            v-model="selectedDate"
            :model-config="{ type: 'string', format: 'YYYY-MM-DD' }"
            :enable-time-picker="false"
            :auto-apply="true"
            placeholder="Search Doctors"
        />
        <span class="form-text">Ex: Check available doctors</span>
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
                    <th scope="row">efewfwef</th>

                    <td>fewfwf</td>
                    <td>wfwfewfwe</td>
                    <td>
                        <a href="#">
                            <button class="btn btn-success">
                                Book Appointment
                            </button>
                        </a>
                    </td>
                </tr>



                </tbody>
            </table>
        </div>
    </div>
</template>
<script>
import DatePicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css';
export default {
    components: {
        DatePicker,
    },
    data() {
        return {
            selectedDate: null, // Bind this to form submission if needed
            customFormat: 'YYYY-MM-DD', // Set desired date format
        };
    },

};
</script>

<style scoped>
/* Add any custom styling here if needed */
</style>

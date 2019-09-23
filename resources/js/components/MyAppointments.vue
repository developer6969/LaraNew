<template>
    <div>
        <div class="row justify-content-center">
            
            <!-- Side Menu -->
            <div class="col-md-3">
                <!-- Book Appointment -->
                <div class="card mp-0 menu-card">
                    <a class="card-link" @click="togglePageSection(appointment)">
                        <div class="card-header">
                            <p class="list-group-title mp-0">Book Appointment</p>
                        </div>
                    </a>
                </div>
                <!-- Upcoming -->
                <div class="card mp-0 menu-card" 
                    style="border-top: 0 !important; border-bottom: 0 !important;">
                    <a class="card-link" @click="togglePageSection(upcoming)">
                        <div class="card-header">
                            <p class="list-group-title mp-0">Upcoming</p>
                        </div>
                    </a>
                </div>
                <!-- Previous -->
                <div class="card mp-0 menu-card">
                    <a class="card-link" @click="togglePageSection(previous)">
                        <div class="card-header">
                            <p class="list-group-title mp-0">Previous</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Book Appointment -->
            <div class="col-md-9 shrink" v-show="activePageSection == this.appointment">  
                <div class="card mp-0">

					<div class="card-header mb-0 pb-0">
                        <p class="card-title">Book Appointment</p>
                        <div class="card-tools">
                            <a class="btn btn-tool" title="Update Defaults" @click="actionUpdateUserDefaults">
                                <i class="fas fa-user-cog"></i>
                            </a>
                        </div>
					</div>

                    <!-- Clinic & Doctor Selection -->
                    <div class="card-body" v-if="formStep === 1">
                        <form class="form">                              
                            <!-- Clinic -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-clinic-medical"></i></span>
                                </div>
                                <select id="clinic" class="form-control" name="clinic" v-model="form.clinic">
                                    <option :value="clinic.id" v-for="clinic in listClinics" :key="clinic.id">
                                        {{ clinic.nick }}
                                    </option>
                                </select>
                            </div>
                            <!-- Doctor -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user-md"></i></span>
                                </div>
                                <select id="doctor" class="form-control" name="doctor" v-model="form.doctor">
                                    <option :value="doctor.id" v-for="doctor in listDoctors" :key="doctor.id">
                                        {{ doctor.name }}
                                    </option>
                                </select>
                            </div>
                            <!-- Proceed Button -->
                            <div class="form-group">
                                <div style="float: right">
                                    <input type="submit" class="btn btn-outline-info" :value="formButtonLable">  
                                </div>                         
                            </div>
                        </form>
                    </div>

                    <!-- Day & Session Selection -->
                    <div class="card-body" v-if="formStep === 2">
                        <form class="form">
                            <!-- Day -->
                            <div class="form-group flex-container">
                                <div class="card day-card mb-0"
                                    v-for="schedule in listSchedules" :key="schedule.id"
                                    v-bind:style="markDaySelected(schedule.dayid)"
                                    v-bind:class="(schedule.status) ? 'available' : 'unavailable'"
                                    @click="clickedDayCard(schedule)">
                                    <div class="card-body table-responsive p-0">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="table-text font-weight-lighter text-uppercase">
                                                        {{ (schedule.month).substr(0, 3) }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-text font-weight-bolder text-primary">
                                                        {{ schedule.date }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-text font-weight-lighter text-uppercase">
                                                        {{ (schedule.day).substr(0, 3) }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Session -->
                            <div class="form-group flex-container" style="justify-content: flex-start !important;">
                                <div class="session-card"
                                    v-for="session in listSessions" :key="session.id"
                                    v-bind:style="markSessionSelected(session.id)"
                                    @click="clickedSessionCard(session)">
                                    <!-- Case 1 : After card clicked -->
                                    <div class="card mp-0" v-show="isSessionAvailableForSelectedDay(session.id)">
                                        <div class="card-body table-responsive p-2">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="table-text font-weight-lighter text-capitalize text-secondary">
                                                            <small>{{ session.title }}</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-text font-weight-bolder text-primary p-1">
                                                            {{ session.start + " - " + session.end }}
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <td class="table-text font-weight-lighter text-capitalize text-secondary"> 
                                                            <small>fees ₹ {{ session.charge }}/-</small>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Case 2 : After card clicked -->
                                <div class="center-in-div" v-if="eventDayCardClicked && !eventSessionAvailableForThisDay">
                                    No schedule available :}
                                </div>
                                <!-- Default : Before any action -->
                                <div class="center-in-div" v-else-if="!eventSessionAvailableForThisDay">
                                    Choose available day to get session
                                </div>
                                <!-- <div class="center-in-div" v-else>
                                    Choose dfdsfsdfd
                                </div> -->
                            </div>
                            <!-- Proceed Button -->
                            <div class="form-group">
                                <div style="float: left">
                                    <input type="button" class="btn btn-outline-info" @click="moveFormBackward" value="Back">
                                </div>
                               <div style="float: right">
                                    <input type="button" class="btn btn-outline-info" @click="moveFormForward" :value="formButtonLable">
                                </div>                         
                            </div>
                        </form>
                    </div>

                    <!-- Member Selection & Purpose -->
                    <div class="card-body" v-if="formStep === 3">
                        <form class="form">                                       
                            <!-- Member -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <select id="member" class="form-control" name="member" v-model="form.member">
                                    <option :value="member.id" v-for="member in listMembers" :key="member.id">
                                        {{ member.name }}
                                    </option>
                                </select>
                            </div>
                            <!-- Purpose -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-notes-medical"></i></span>
                                </div>
                                <input id="purpose" class="form-control" name="purpose" v-model="form.purpose" 
                                    placeholder="Purpose of visit" :class="{'is-invalid': form.errors.has('purpose')}">
                                <has-error :form="form" field="purpose"></has-error>
                            </div>
                            <!-- Proceed Button -->
                            <div class="form-group">
                                <div style="float: left">
                                    <input type="button" class="btn btn-outline-info" @click="moveFormBackward" value="Back">
                                </div>
                                <div style="float: right">
                                    <input type="button" class="btn btn-outline-info" @click="moveFormForward" :value="formButtonLable">
                                </div>                         
                            </div>
                        </form>
                    </div>

                    <!-- Form data confirmation -->
                    <div class="card-body" v-if="formStep === 4">
                        <form id="appointmentform" class="form" @keydown="form.onKeydown($event)" @submit.prevent="createAppointment" >
                            
                            <!-- Clinic -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-clinic-medical"></i></span>
                                </div>
                                <select id="clinic" class="form-control hide-dropdown" name="clinic" v-model="form.clinic" disabled>
                                    <option :value="clinic.id" v-for="clinic in listClinics" :key="clinic.id">
                                        {{ clinic.nick }}
                                    </option>
                                </select>
                            </div>
                            <!-- Doctor -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user-md"></i></span>
                                </div>
                                <select id="doctor" class="form-control hide-dropdown" name="doctor" v-model="form.doctor" disabled>
                                    <option :value="doctor.id" v-for="doctor in listDoctors" :key="doctor.id">
                                        {{ doctor.name }}
                                    </option>
                                </select>
                            </div> 
                            <!-- Day -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-calendar-check"></i></span>
                                </div>
                                <select id="day" class="form-control hide-dropdown" name="day" v-model="form.day" disabled>
                                    <option :value="form.day">
                                        {{ dateString }}
                                    </option>
                                </select>
                            </div> 
                            <!-- Session -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-clock"></i></span>
                                </div>
                                <select id="session" class="form-control hide-dropdown" name="session" v-model="form.session" disabled>
                                    <option :value="form.session">
                                        {{ sessionString }}
                                    </option>
                                </select>
                            </div>                                     
                            <!-- Member -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <select id="member" class="form-control" name="member" v-model="form.member" disabled>
                                    <option :value="member.id" v-for="member in listMembers" :key="member.id">
                                        {{ member.name }}
                                    </option>
                                </select>
                            </div>
                            <!-- Purpose -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-notes-medical"></i></span>
                                </div>
                                <input id="purpose" class="form-control" name="purpose" v-model="form.purpose" disabled 
                                    placeholder="Purpose of visit" :class="{'is-invalid': form.errors.has('purpose')}">
                                <has-error :form="form" field="purpose"></has-error>
                            </div>
                            <!-- Proceed Button -->
                            <div class="form-group">
                                <div style="float: left">
                                    <input type="button" class="btn btn-outline-info" @click="moveFormBackward" value="Edit">
                                </div>
                                <div style="float: right">
                                    <input type="submit" class="btn btn-outline-info" :disabled="form.busy" :value="formButtonLable">  
                                </div>                         
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <!-- Upcoming -->
            <div class="col-md-9 shrink" v-show="activePageSection == this.upcoming">
               <div class="card mp-0">
					<div class="card-header mb-0 pb-0">
                        <p class="card-title">Upcoming Appointments</p>
					</div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Queue</th>
                                    <th>Purpose</th>
                                    <th>Doctor</th>
                                    <th>Clinic</th>
                                    <th>Date</th>
                                    <th style="width: 40px">Status</th>                            
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="appointment in listAppointments" :key="appointment.id" 
                                    v-show="assertUpcomingAppointment(appointment.status)">
                                    <td>{{ appointment.queue }}</td>
                                    <td>{{ appointment.purpose }}</td>
                                    <td>{{ appointment.doctor }}</td>
                                    <td>{{ appointment.clinic }}</td>
                                    <td :title="appointment.datelable">{{ getAppointmentDate(appointment.date) }}</td>
                                    <td><span class="badge badge-pill badge-status" :class="appointment.color">
                                        {{ appointment.status_title }}</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
				</div>
            </div>

            <!-- Previous -->
            <div class="col-md-9 shrink" v-show="activePageSection == this.previous">
               <div class="card mp-0">
					<div class="card-header mb-0 pb-0">
                        <p class="card-title">Previous Appointments</p>
					</div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Member</th>
                                    <th>Purpose</th>
                                    <th>Doctor</th>
                                    <th>Clinic</th>
                                    <th>Date</th>
                                    <th style="width: 40px">Status</th>                            
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="appointment in listAppointments" :key="appointment.id" 
                                    v-show="assertPreviousAppointment(appointment.status)">
                                    <td>{{ appointment.member }}</td>
                                    <td>{{ appointment.purpose }}</td>
                                    <td>{{ appointment.doctor }}</td>
                                    <td>{{ appointment.clinic }}</td>
                                    <td :title="appointment.datelable">{{ getAppointmentDate(appointment.date) }}</td>
                                    <td><span class="badge badge-pill badge-status" :class="appointment.color">
                                        {{ appointment.status_title }}</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
				</div>
            </div>

            <!-- User Default Modal -->
             <div
                id="userDefaultsModal"
                class="modal fade"
                tabindex="-1"
                role="dialog"
                aria-labelledby="userDefaultsModalTitle"
                aria-hidden="true"
            >
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="userDefaultsModalTitle">Set User Defaults</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="userDefaultFrom" class="form"
                                @keydown="form.onKeydown($event)"
                                @submit.prevent="updateUserDefaults()" >
                                <!-- Clinic -->
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-clinic-medical"></i></span>
                                    </div>
                                    <select id="clinic" class="form-control" name="clinic" v-model="form.clinic">
                                        <option :value="clinic.id" v-for="clinic in listClinics" :key="clinic.id">
                                            {{ clinic.nick }}
                                        </option>
                                    </select>
                                </div>
                                <!-- Doctor -->
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-md"></i></span>
                                    </div>
                                    <select id="doctor" class="form-control" name="doctor" v-model="form.doctor">
                                        <option :value="doctor.id" v-for="doctor in listDoctors" :key="doctor.id">
                                            {{ doctor.name }}
                                        </option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button :disabled="form.busy" type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'days',
            'clinics',
            'doctors',
            'members',
            'sessions',
            'schedules',
            'userdefaults',
            'appointments',
            'queriedclinicid',
            'querieddoctorid',
            ],
        data() {
            return {
                listDays : JSON.parse(this.days),
                listClinics : JSON.parse(this.clinics),
                listDoctors : JSON.parse(this.doctors),
                listMembers : JSON.parse(this.members),
                listSessions : JSON.parse(this.sessions),
                listSchedules : JSON.parse(this.schedules),
                listUserDefaults : JSON.parse(this.userdefaults),
                listAppointments : JSON.parse(this.appointments),

                // Constants
                appointment: 'book-appointment-section',
                upcoming: 'upcoming-appointments-section',
                previous: 'previous-appointments-section',

                // Variable
                activePageSection: this.appointment,
                activeMember: {},
                activeMemberId: 0,
                activeSessions: [],
                scheduleFetched: '',
                eventDayCardClicked: false,
                eventSessionAvailableForThisDay: false,
                dateString : '',
                sessionString: '',

                // csrf: '',
                formStep: '',
                formButtonLable: "Proceed", 
                form: new Form({
                    clinic: "",
                    doctor: "",
                    day: "",
                    session: "",
                    member: "",
                    purpose: "",
                    date_db: "",
                    time_db: "",
                }),
                selectionStyle: 'border-bottom: 2px solid #2196f3;',          
                
                response: '',
                errors: '',
                
            };
        },
        methods: {
            isSessionAvailableForSelectedDay(selectedItemId) {
                if (typeof this.activeSessions !== 'undefined' && this.activeSessions.length > 0) {
                    this.eventSessionAvailableForThisDay = true;
                    return this.activeSessions.includes(selectedItemId);
                } else {
                    return false;
                }
            },
            markDaySelected(itemId) {
                if (this.form.day == itemId) {
                    return this.selectionStyle;
                } 
            },
            markSessionSelected(itemId) {
                if (this.form.session == itemId) {
                    return this.selectionStyle;
                } 
            },
            clickedDayCard(selectedItem) {
                this.activeSessions = selectedItem.sessions;
                this.form.day = selectedItem.dayid;
                this.dateString = selectedItem.day + ", " + selectedItem.date + " " + selectedItem.month; 
                this.form.date_db = selectedItem.year + "-" + selectedItem.mon + "-" + selectedItem.date;
                this.eventDayCardClicked = true;
                if (!this.isSessionAvailableForSelectedDay(this.form.day)) {
                    this.eventSessionAvailableForThisDay = false;
                }
            },
            clickedSessionCard(selectedItem) {
                this.form.session = selectedItem.id;
                this.form.time_db = selectedItem.start;
                this.sessionString = "In " + selectedItem.title + ", at " + selectedItem.start + " and charges Rs." + selectedItem.charge; 
            },
            assertUnconfirmedAppointment(status) {
                return (status == 1);
            },
            assertUpcomingAppointment(status) {
                return (status == 2 || status == 3 || status == 4 || status == 5);
            },
            assertPreviousAppointment(status) {
                return (status == 6 || status == 7);
            },
            getAppointmentDate(dateArray) {
                return this.getMonthString(dateArray['month']) + "-" + dateArray['day'] + " at " + dateArray['hour'] + ":" + dateArray['minute'];
            },
            getAppointmentStatusColor(status) {
                switch (status) {
                    case 1:
                        return 'bg-warning';
                        break;
                    case 2:
                        return 'bg-primary';
                        break;
                    case 6:
                        return 'bg-success';
                        break;
                    case 7:
                        return 'bg-danger';
                        break;
                    default:
                        return 'bg-secondary';
                        break;
                }
            },
            getMonthString(month) {
                switch (month) {
                    case 1 : return 'Jan'; break;
                    case 2 : return 'Feb'; break;
                    case 3 : return 'Mar'; break;
                    case 4 : return 'Apr'; break;
                    case 5 : return 'May'; break;
                    case 6 : return 'Jun'; break;
                    case 7 : return 'Jul'; break;
                    case 8 : return 'Aug'; break;
                    case 9 : return 'Sept'; break;
                    case 10 : return 'Oct'; break;
                    case 11 : return 'Nov'; break;
                    case 12 : return 'Dec'; break;                
                    default: break;
                }
            },
            togglePageSection(clickedSection) {
                this.activePageSection = clickedSection;
            },
            // Form Controls
            resetForm() {
                window.history.pushState({}, document.title, "/" + "my-appointments");
                this.scheduleFetched = false;
                this.formStep = 1;
                this.form.reset();
            },
            moveFormBackward() {
                this.formStep--;
            },
            moveFormForward() {
                this.formStep++;
                if (this.formStep == 3) {
                    this.formButtonLable = 'Submit';
                }
                if (this.formStep == 4) {
                    this.formButtonLable = 'Confirm';
                }
            },
            actionUpdateUserDefaults() {
                $("#userDefaultsModal").modal("show");
            },
            updateUserDefaults() {
                alert('updating..');
                this.form
                    .post("api/updateuserdefaults")
                    .then((response) => {
                        this.$Progress.finish();
                        Fire.$emit("reloadData");
                        Toast.fire({
                            type: (this.response["success"]) ? 'success' : 'info',
                            title: this.response["message"]
                        });
                    })
                    .catch((error) => {
                        this.$Progress.fail();
                        if (error.response.status === 422) {
                            this.errors = error.response.data.errors || {};
                        }
                    });
            },
            createAppointment() {
                this.$Progress.start();
                this.form
                    .post("api/appointment")
                    .then((response) => {
                        this.$Progress.finish();
                        this.response = response.data;
                        Fire.$emit("reloadData");
                        Toast.fire({
                            type: (this.response["success"]) ? 'success' : 'info',
                            title: this.response["message"]
                        });
                    })
                    .catch((error) => {
                        this.$Progress.fail();
                        if (error.response.status === 422) {
                            this.errors = error.response.data.errors || {};
                        }
                    });
            },
            //Start-up
            loadDefaultValues() {
                if(this.queriedclinicid == "" && this.querieddoctorid == "") {
                    this.scheduleFetched = false;
                    this.formStep = 1;
                } else {
                    this.scheduleFetched = true;
                    this.formStep = 2;
                }
                // Get the initial objects of list and set as default
                // this.activeMemberId = this.listUserDefaults[0].member;
                // this.activeMember = this.listMembers[this.activeMemberId];
                
    
                
            },
            loadDefaultForm() {
                this.form.clinic = this.listUserDefaults[0].clinic;
                this.form.doctor = this.listUserDefaults[0].doctor;
                this.form.member = this.listUserDefaults[0].member;
                this.form.day = this.listUserDefaults[0].day;
                this.form.session = this.listUserDefaults[0].session;
                if(this.queriedclinicid != "" && this.querieddoctorid != "") {
                    this.form.clinic = Number(this.queriedclinicid);
                    this.form.doctor = Number(this.querieddoctorid);
                }
            },
            loadDefaults() {
                // Default page menu
                this.activePageSection = this.appointment;
                this.loadDefaultForm();
                this.loadDefaultValues();
            },
            loadAppointments() {
                this.activePageSection = this.upcoming;
            }
        },
        created() {
            this.loadDefaults();
            Fire.$on("reloadData", () => {
                this.loadAppointments();
            });
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style scoped>

    .badge-status {
        padding: 4px !important;
        text-transform: capitalize;
        width: 70px !important;
        font-weight: 500 !important;  
    }

    .hide-dropdown-icon::-ms-expand {
        -webkit-appearance: none;
        -moz-appearance: none;
        text-indent: 1px;
        text-overflow: '';
    }

    .menu-card:hover {
        cursor: pointer;
        background-color: #0090b820;
    }

    .day-card {
        width: 14%;
        display: flex;
        cursor: pointer;
    }

    .day-card:hover {
        background-color: #efefef;
    }

    .session-card {
        width: auto;
        height: 78px;
        display: flex;
        cursor: pointer;
    }

    @media screen and (max-width: 600px) {
        .session-card {
            height: 68px;
        }
    }
    .session-card .card:hover {
        background-color: #efefef;
    }

    table {
        font-size: 15px !important;
        width: 100%;
        text-align: center;
    }

    .table-text {
        font-family: 'Roboto', sans-serif;
    }

     .available {
        background-color: #00ee0010;
        /* border-bottom: 2px solid #06a13586; */
    }

    .unavailable {
        background-color: #ee000010;
        /* border-bottom: 2px solid red; */
    }


</style>

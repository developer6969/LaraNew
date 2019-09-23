<template>
    <div>
        <div class="row justify-content-center">
            
            <!-- Member's List (Left) -->
            <div class="col-md-3">
                <!-- Members List -->
                <div class="card mp-0 menu-card">
                    <a class="card-link bg-secondary" @click="showModalAddMember()">
                        <div class="card-body pl-3 pt-3 pb-2">
                            <p class="list-group-title mp-0">Add New Member</p>
                        </div>
                    </a>
                </div>
                <div class="card mp-0 menu-card"
                    style="border-top-color: transparent;"
                    v-for="member in listMembers" :key="member.id"
                    v-bind:style="markMemberSelected(member.id)" >
                    <a class="card-link" @click="actionClickMemberCard(member)">
                        <div class="card-body pl-3 pt-3 pb-2">
                            <p class="list-group-title mp-0">{{ member.name }}</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Member's Profile -->
            <div class="col-md-9 shrink">  
                <div class="row">

                    <!-- Member Details (Center) -->
                    <div class="col-md-9">

                        <!-- Member Header Widget -->
                        <div class="card card-widget widget-user">
                            <div class="widget-user-header">
                                <p class="widget-user-username text-capitalize">{{ activeMember.name }}</p>
                                <p class="widget-user-desc"># {{ activeMember.patient_id }}</p>
                            </div>
                            <div class="widget-user-image">
                                <img class="img-circle" :src="getProfilePhoto()" alt="User Avatar">
                            </div>
                            <div class="widget-user-link">
                                <a href="/my-appointments" class="btn btn-link text-dark">
                                    <span class="text-responsive">Appointments</span>
                                </a>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    
                                    <div class="col-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header text-capitalize">{{ activeMember.gender }}</h5>
                                            <span class="description-text">Gender</span>
                                        </div>
                                    </div>
                                    
                                    <div class="col-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">{{ activeMember.age }} yrs</h5>
                                            <span class="description-text">Age</span>
                                        </div>
                                    </div>
                                    
                                    <div class="col-4">
                                        <div class="description-block">
                                            <h5 class="description-header">{{ activeMember.blood }}</h5>
                                            <span class="description-text">Blood</span>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <!-- Tabs Heading -->
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link text-capitalize active" href="#health" data-toggle="tab">health</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-capitalize" href="#events" data-toggle="tab">events
                                            <span class="badge badge-pill badge-success">2</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-capitalize" href="#profile" data-toggle="tab">profile</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Tabs Content -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <!-- Health -->
                                    <div class="tab-pane active" id="health">
                                        <div class="row">
                                            <div class="col-md-6 col-12"
                                            v-for="health in listHealths"
                                            :id="health.id" :key="health.id"
                                            v-show="health.member == activeMemberId">
                                                <div class="info-box" 
                                                v-bind:style="getHealthCardBgColor(health.title)">
                                                    <span class="info-box-icon"><i :class="health.icon"></i></span>

                                                    <div class="info-box-content">
                                                        <span class="info-box-text font-weight-light text-capitalize">{{ health.title }}</span>
                                                        <span class="info-box-number">{{ health.value }} {{ health.unit }}</span>

                                                        <div class="progress">
                                                            <div class="progress-bar" style="width: 70%"></div>
                                                            </div>
                                                        <span class="progress-description font-weight-lighter text-capitalize">
                                                            {{ health.average }}% change in 30 days
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Events -->
                                    <div class="tab-pane" id="events">
                                        <!-- Timeline -->
                                        <ul class="timeline timeline-inverse">

                                            <!-- Latest -->
                                            <li class="time-label">
                                                <span class="bg-secondary">10 Sept. 2019</span>
                                            </li>
                                            <!-- Doctor Prescription -->
                                            <li>
                                                <div class="timeline-icon prescription">
                                                    <i class="fas fa-prescription"></i>
                                                </div>
                                                <div class="timeline-item">
                                                    <span class="time">
                                                        <i class="fa fa-clock-o"></i> 12:05
                                                    </span>

                                                    <h3 class="timeline-header">
                                                        <a href="/doctors">Dr. Asha Gupta</a> prescribed as follows
                                                    </h3>

                                                    <div class="timeline-body">
                                                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                                        quora plaxo ideeli hulu weebly balihoo...
                                                    </div>
                                                    <div class="timeline-footer">
                                                        <a href="#" class="btn btn-outline-secondary btn-sm">Read more</a>
                                                        <a href="#" class="btn btn-outline-primary btn-sm">Print Report</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- Appointment Notification -->
                                            <li>
                                                <div class="timeline-icon appointment">
                                                    <i class="far fa-calendar-check"></i>
                                                </div>
                                                <div class="timeline-item">
                                                    <span class="time">
                                                        <i class="fa fa-clock-o"></i> 15 mins ago
                                                    </span>
                                                    <h3 class="timeline-header">
                                                        <a href="/my-appointments/">Appointment</a> confirmed (Queue No. 15)
                                                    </h3>
                                                    <div class="timeline-body">
                                                        Take me to your leader!
                                                        Switzerland is small and neutral!
                                                        We are more like Germany, ambitious and misunderstood!
                                                    </div>
                                                    <div class="timeline-footer">
                                                        <a href="#" class="btn btn-outline-danger btn-sm">Cancel</a>
                                                        <a href="#" class="btn btn-outline-success btn-sm">Pay Online</a>
                                                    </div>
                                                </div>
                                            </li>

                                            <!-- Previous -->
                                            <li class="time-label">
                                                <span class="bg-secondary">6 Sept. 2019</span>
                                            </li>
                                            <!-- Appointment Notification -->
                                            <li>
                                                <div class="timeline-icon appointment">
                                                    <i class="far fa-calendar-check"></i>
                                                </div>
                                                <div class="timeline-item">
                                                    <span class="time">
                                                        <i class="fa fa-clock-o"></i> 4 days ago
                                                    </span>
                                                    <h3 class="timeline-header">
                                                        <a href="/my-appointments/">Appointment</a> booked (#15646554)
                                                    </h3>
                                                    <div class="timeline-body">
                                                        Take me to your leader!
                                                        Switzerland is small and neutral!
                                                        We are more like Germany, ambitious and misunderstood!
                                                    </div>
                                                    <div class="timeline-footer">
                                                        <a href="#" class="btn btn-outline-danger btn-sm">Cancel</a>
                                                        <a href="#" class="btn btn-outline-primary btn-sm">Re-schedule</a>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                    <!-- Profile -->
                                    <div class="tab-pane" id="profile">
                                        <form id="memberProfile" class="form" @keydown="form.onKeydown($event)"
                                            @submit.prevent="actionUpdateMember()" >
                                            <!-- Name -->
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-user"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control"
                                                        type="text" 
                                                        name="name"
                                                        placeholder="Name"
                                                        v-model="form.name"
                                                        title="Enter your full name"
                                                        :class="{ 'is-invalid': form.errors.has('name') }"
                                                    >
                                                    <has-error :form="form" field="name"></has-error>
                                                </div>
                                            </div>

                                            <!-- Mobile -->
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-phone"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control"
                                                        type="tel" 
                                                        name="mobile"
                                                        placeholder="Mobile"
                                                        v-model="form.mobile"
                                                        title="Enter working mobile no."
                                                        :class="{ 'is-invalid': form.errors.has('mobile') }"
                                                    >
                                                    <has-error :form="form" field="mobile"></has-error>
                                                </div>
                                            </div>
                                          
                                            <!-- Email -->
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-at"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control"
                                                        type="email" 
                                                        name="email"
                                                        placeholder="Email"
                                                        v-model="form.email"
                                                        title="Enter email-id"
                                                        :class="{ 'is-invalid': form.errors.has('email') }"
                                                    >
                                                    <has-error :form="form" field="email"></has-error>
                                                </div>
                                            </div>

                                            <!-- DOB -->
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-birthday-cake"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control"
                                                        type="date" 
                                                        name="dob"
                                                        placeholder="Date of Birth"
                                                        v-model="form.dob"
                                                        title="Enter date of birth for age calculation"
                                                        :class="{ 'is-invalid': form.errors.has('dob') }"
                                                    >
                                                    <has-error :form="form" field="dob"></has-error>
                                                </div>
                                            </div>
                                            
                                            <!-- Gender -->
                                            <div class="form-group row">
                                                <div class="input-group col-md-6">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-male"></i>
                                                            <i class="fas fa-female"></i>
                                                        </span>
                                                    </div>
                                                    <select id="gender" class="form-control" name="gender" v-model="form.gender">
                                                        <option value="" disabled selected>Select your gender</option>
                                                        <option :value="gender.title" v-for="gender in listGenders" :key="gender.id">
                                                            {{ gender.title }}
                                                        </option>
                                                    </select>
                                                    <has-error :form="form" field="gender"></has-error>
                                                </div>
                                                <div class="input-group col-md-6">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-vial"></i>
                                                        </span>
                                                    </div>
                                                    <select id="blood" class="form-control" name="blood" v-model="form.blood">
                                                        <option value="" disabled selected>Select your blood group</option>
                                                        <option :value="blood.title" v-for="blood in listBloods" :key="blood.id">
                                                            {{ blood.title }}
                                                        </option>
                                                    </select>
                                                    <has-error :form="form" field="blood"></has-error>
                                                </div>
                                            </div>

                                            <!-- File Attachment -->
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-camera"></i>
                                                        </span>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputProfilePhoto" @change="processFile($event)">
                                                        <label class="custom-file-label" for="inputProfilePhoto">{{ uploadFileName }}</label>
                                                    </div>
                                                    <has-error :form="form" field="photo"></has-error>
                                                </div>
                                            </div>

                                            <!-- Bio -->
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <textarea class="form-control"
                                                        type="textarea"
                                                        rows="4"
                                                        name="bio"
                                                        placeholder="Any important information(s) that your doctor must know."
                                                        v-model="form.bio"
                                                        :class="{ 'is-invalid': form.errors.has('bio') }"
                                                    ></textarea>
                                                    <has-error :form="form" field="bio"></has-error>
                                                </div>
                                            </div>
 
                                            <!-- Button -->
                                            <div class="form-group">
                                                <div style="float: left">
                                                    <input type="reset" class="btn btn-outline-info" @click="resetProfileForm" value="Reset">
                                                    <a class="btn btn-link text-danger" @click="actionDeleteMember">Delete Member</a>
                                                </div>
                                                <div style="float: right">
                                                    <input type="submit" class="btn btn-outline-success" value="Update">
                                                </div>                         
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Member Statistics (Right) -->
                    <div class="col-md-3">
                        <div class="small-box bg-info">
                            <div class="inner">
                            <h3>150</h3>

                            <p>New Orders</p>
                            </div>
                            <div class="icon">
                            <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                            More info
                            <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                        <div class="small-box bg-red">
                            <div class="inner">
                            <h3>150</h3>

                            <p>New Orders</p>
                            </div>
                            <div class="icon">
                            <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                            More info
                            <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                        <div class="small-box bg-green">
                            <div class="inner">
                            <h3>150</h3>

                            <p>New Orders</p>
                            </div>
                            <div class="icon">
                            <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                            More info
                            <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                        <div class="small-box bg-gold">
                            <div class="inner">
                            <h3>150</h3>

                            <p>New Orders</p>
                            </div>
                            <div class="icon">
                            <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                            More info
                            <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Add Member Modal -->
        <div id="addMemberModal"
            class="modal fade"
            tabindex="-1"
            role="dialog"
            aria-labelledby="addMemberModalTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addMemberModalTitle">Add New Member</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="addMemberForm" class="form" @keydown="form.onKeydown($event)"
                            @submit.prevent="actionAddMember" >
                            <!-- Name -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </span>
                                    </div>
                                    <input class="form-control"
                                        type="text" 
                                        name="name"
                                        placeholder="Name"
                                        v-model="form.name"
                                        title="Enter your full name"
                                        :class="{ 'is-invalid': form.errors.has('name') }"
                                    >
                                    <has-error :form="form" field="name"></has-error>
                                </div>
                            </div>

                            <!-- Mobile -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-phone"></i>
                                        </span>
                                    </div>
                                    <input class="form-control"
                                        type="tel" 
                                        name="mobile"
                                        placeholder="Mobile"
                                        v-model="form.mobile"
                                        title="Enter working mobile no."
                                        :class="{ 'is-invalid': form.errors.has('mobile') }"
                                    >
                                    <has-error :form="form" field="mobile"></has-error>
                                </div>
                            </div>
                            
                            <!-- Email -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-at"></i>
                                        </span>
                                    </div>
                                    <input class="form-control"
                                        type="email" 
                                        name="email"
                                        placeholder="Email"
                                        v-model="form.email"
                                        title="Enter email-id"
                                        :class="{ 'is-invalid': form.errors.has('email') }"
                                    >
                                    <has-error :form="form" field="email"></has-error>
                                </div>
                            </div>

                            <!-- DOB -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-birthday-cake"></i>
                                        </span>
                                    </div>
                                    <input class="form-control"
                                        type="date" 
                                        name="dob"
                                        placeholder="Date of Birth"
                                        v-model="form.dob"
                                        title="Enter date of birth for age calculation"
                                        :class="{ 'is-invalid': form.errors.has('dob') }"
                                    >
                                    <has-error :form="form" field="dob"></has-error>
                                </div>
                            </div>
                            
                            <!-- Gender & Blood -->
                            <div class="form-group row">
                                <!-- Gender -->
                                <div class="input-group col-md-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-male"></i>
                                            <i class="fas fa-female"></i>
                                        </span>
                                    </div>
                                    <select id="gender" class="form-control" name="gender" v-model="form.gender">
                                        <option value="" disabled selected>Select your gender</option>
                                        <option :value="gender.title" v-for="gender in listGenders" :key="gender.id">
                                            {{ gender.title }}
                                        </option>
                                    </select>
                                    <has-error :form="form" field="gender"></has-error>
                                </div>
                                <!-- Blood -->
                                <div class="input-group col-md-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-vial"></i>
                                        </span>
                                    </div>
                                    <select id="blood" class="form-control" name="blood" v-model="form.blood">
                                        <option value="" disabled selected>Select blood group</option>
                                        <option :value="blood.title" v-for="blood in listBloods" :key="blood.id">
                                            {{ blood.title }}
                                        </option>
                                    </select>
                                    <has-error :form="form" field="blood"></has-error>
                                </div>
                            </div>

                            <!-- File Attachment -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-camera"></i>
                                        </span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputProfilePhoto" @change="processFile($event)">
                                        <label class="custom-file-label" for="inputProfilePhoto">{{ uploadFileName }}</label>
                                    </div>
                                    <has-error :form="form" field="photo"></has-error>
                                </div>
                            </div>

                            <!-- Bio -->
                            <div class="form-group">
                                <div class="input-group">
                                    <textarea class="form-control"
                                        type="textarea"
                                        rows="4"
                                        name="bio"
                                        placeholder="Any important information(s) that your doctor must know."
                                        v-model="form.bio"
                                        :class="{ 'is-invalid': form.errors.has('bio') }"
                                    ></textarea>
                                    <has-error :form="form" field="bio"></has-error>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                                <div style="float: left">
                                    <input type="reset" class="btn btn-outline-info" @click="resetProfileForm" value="Reset">
                                </div>
                                <div style="float: right">
                                    <input type="submit" class="btn btn-outline-success" value="Create">
                                </div>                         
                            </div>
                 
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        props: [
            'members',
            'genders',
            'bloods',
            'healths',
            'records',
            ],
        data() {
            return {
                // listMembers: JSON.parse(this.members),
                listGenders: JSON.parse(this.genders),
                listBloods: JSON.parse(this.bloods),
                listHealths: JSON.parse(this.healths),
                listRecords: JSON.parse(this.records),
                listMembers: {},
                authenticated: false,
                activeMember: {},
                activeMemberId: 0,

                formMode: '',
                uploadFileName: '',
                uploadFileSize: '',
                form: new Form({
                    name: "",
                    mobile: "",
                    email: "",
                    dob: "",
                    gender: "",
                    blood: "",
                    bio: "",
                    photo: "default.jpg",
                }),

                healthform: new Form({
                    record: "",
                    value: "",
                }),

                selectionStyle: 'color: #2196f3',          
                response: '',
                errors: '',
            };
        },
        methods: {
            showModalAddMember() {
                $("#addMemberModal").modal("show");
                this.resetProfileForm();
            },
            actionAddMember() {
                this.$Progress.start();
                this.form
                .post('api/members')
                .then((response) => {
                    this.$Progress.finish();
                    this.response = response.data;
                    Fire.$emit("reloadData", 'test data');
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
            actionUpdateMember() {
                this.$Progress.start();
                this.form
                .put('api/members/' + this.activeMemberId)
                .then((response) => {
                    this.$Progress.finish();
                    this.response = response.data;
                    Fire.$emit("reloadData", 'test data');
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
            markMemberSelected(selectedItemId) {
                if (this.activeMemberId == selectedItemId) {
                    return this.selectionStyle;
                } 
            },
            actionClickMemberCard(selectedItem) {
                this.form.fill(selectedItem);
                this.activeMember = selectedItem;
                this.activeMemberId = selectedItem.id;
            },
            resetProfileForm() {
                this.form.reset();
            },
            getHealthCardBgColor(key) {
                let base = 'color: #555566; background-color:';
                switch (key) {
                    case 'weight': return base + '#ea000050';
                    case 'height': return base + '#ea550050';                
                    default: return base + '#00000010';
                }
            },
            processFile(event) {
                this.$Progress.start();
                let file = event.target.files[0];
                if (file['size'] < (1*1024*1024)) { // MAX FILE UPLOAD 1MB
                    this.uploadFileName = file['name'];
                    this.uploadFileSize = file['size'];
                    let reader = new FileReader();
                    reader.onloadend = (file) => {
                        this.form.photo = reader.result;
                        this.$Progress.finish();
                    }
                    reader.readAsDataURL(file);
                } else {
                    this.$Progress.fail();
                    Swal.fire({
                        type: 'error',
                        title: '422 Unprocessable',
                        text: 'Max 1 mb (1024 kb) file size allowed for image upload'
                    });
                }   
            },
            getProfilePhoto() {
                if(this.form.photo != null) {
                    return this.form.photo.length > 200
                        ? this.form.photo
                        : "img/profile/" + this.form.photo;
                } else {
                    return "img/profile/default.png";
                }
            },
            getMemberPhoto(photo) {
                if(photo == 'default.png') {
                    return "img/profile/default.png";
                } else {
                    return "img/profile/" + photo;
                }
            },
            assertUserAuthentication() {
                // pending login
                this.authenticated = true;
            },
            actionDeleteMember() {
                if(this.authenticated) {
                    Swal.fire({
                        title: "Are you sure?",
                        text: "You won't be able to revert this!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Yes, delete it!"
                        }).then(result => {
                            if (result.value) {
                                // Send request to server
                                this.form.delete("api/members/" + this.activeMemberId).then(() => {
                                    Fire.$emit("reloadData");
                                    Swal.fire("Deleted!", "Member has been deleted.", "success");
                                });
                            }
                        });
                } else {
                    Swal.fire({
                        title: "Unauthorized Action",
                        text: "Contact your administrator to perform this action",
                        type: "warning"
                    });
                }
            },
            loadMembersData() {
                axios.get("api/members").then(({ data }) => {
                    this.listMembers = data.data;
                    setTimeout(() => {
                        this.setActiveMember(0);   
                    }, 1000);
                });
            },
            setActiveMember(count) {
                this.listMembers.forEach(element => {
                    if(count < 1) {
                        count++;
                        this.activeMember = element;
                        this.activeMemberId = element.id;
                        this.form.fill(element);
                    }
                });
            },
        },
        created() {
            this.assertUserAuthentication();
            this.loadMembersData();
            Fire.$on("reloadData", () => {
                this.loadMembersData();
            });
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style scoped>

    .input-button:hover {
        color: #ffffff;
        background-color: lightseagreen;
    }

    .appointment {
        background-color: lightcoral;
    }

    .prescription {
        background-color: lightseagreen;
    }

    .timeline-icon {
        padding: 7px; 
        float: left; 
        margin-left: 17px; 
        font-size: 20px; 
        color: white; 
        border-radius: 20px; 
        width: 35px; 
        height: 35px; 
        text-align: center;
    }

    .nav-item > .active {
        border: 0px !important;
        color: dodgerblue !important;
        font-weight: bolder !important;
        background-color: #0090b820 !important;
    }

    .active {
        background-color: transparent !important;
    }

    .menu-card:hover {
        cursor: pointer;
        background-color: #0090b820;
    }

    .widget-user-link {
        position: absolute;
        top: 82px;
        right: 0;
        padding: 0px !important;
        margin: 0px !important;
    }

    .widget-user .widget-user-image > img {
        width: 100px;
        height: auto;
        border: 3px solid #ffffff; 
    }

    @media screen and (max-width: 600px) {
        /*  */
    }
  


</style>


 <!-- <div class="card">
    <div class="card-header pb-0">
        <div class="card-title pb-0">Documents</div>
        <div class="card-tools pb-0">
            <a href="#" class="btn btn-tool"><i class="fas fa-user-cog" style="font-size: 1.2rem;"></i></a>
        </div>
    </div>
    <div class="card-body table-responsive p-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nihil unde iste earum! Deleniti illum tempore consequuntur fugiat id debitis qui? Minus, ipsum harum maxime nesciunt animi ex aut sed!
    </div>
        <form>
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text">
                        <i class="fas fa-plus"></i>
                    </label>
                </div>
                <select id="clinic" class="custom-select" name="clinic" v-model="healthform.record">
                    <option value="" disabled selected>Select Record</option>
                    <option :value="record.id" v-for="record in listRecords" :key="record.id">
                        {{ record.title }}
                    </option>
                </select>
                <input class="form-control"
                    type="text" 
                    name="value"
                    placeholder="Enter Value"
                    v-model="healthform.value"
                    :class="{ 'is-invalid': form.errors.has('value') }">
                <div class="input-group-append" @click="addNewHealthRecord">
                    <label class="input-group-text input-button">Submit</label>
                </div>
                <has-error :form="form" field="value"></has-error>
            </div>
        </div>
    </form>
</div> -->
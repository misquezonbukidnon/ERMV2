<div class="modal fade" id="recordshowEmployee" tabindex="-1" role="dialog" aria-labelledby="recordshowEmployee"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div id="addUserStepConfirmation" class="card card-lg border-0">
                <!-- Profile Cover -->
                <div class="profile-cover">
                    <div class="profile-cover-img-wrapper">
                        <img class="profile-cover-img" src="../assets/img/1920x400/img3.jpg" alt="Image Description">
                    </div>
                </div>
                <!-- End Profile Cover -->

                <!-- Avatar -->
                <div class="avatar avatar-xxl avatar-circle avatar-border-lg profile-cover-avatar">
                    <img class="avatar-img" src="../assets/img/160x160/img9.jpg" alt="Image Description">
                </div>
                <!-- End Avatar -->

                <!-- Body -->
                <div class="card-body ">
                    <dl class="row ">
                        <dt class="col-sm-6 text-sm-right">Employment Date: :</dt>
                        <dd class="col-sm-6">{{ $employment_date }}</dd>

                        <dt class="col-sm-6 text-sm-right">Employee Identification Number:</dt>
                        <dd class="col-sm-6">{{ $employee_number }}</dd>

                        <dt class="col-sm-6 text-sm-right">Full name:</dt>
                        <dd class="col-sm-6">{{ $firstname }} {{ $middlename }} {{ $lastname }} {{ $suffix }}</dd>

                        <dt class="col-sm-6 text-sm-right">Email:</dt>
                        <dd class="col-sm-6">{{ $email }}</dd>

                        <dt class="col-sm-6 text-sm-right">Address:</dt>
                        <dd class="col-sm-6">{{ $address }}</dd>

                        <dt class="col-sm-6 text-sm-right">Phone:</dt>
                        <dd class="col-sm-6">{{ $contact_number }}</dd>

                        <dt class="col-sm-6 text-sm-right">Emergency Contact Person:</dt>
                        <dd class="col-sm-6">{{ $emergency_contact_person }}</dd>

                        <dt class="col-sm-6 text-sm-right">Emergency Contact #: </dt>
                        <dd class="col-sm-6">{{ $ecp_contact_number }}</dd>

                        <dt class="col-sm-6 text-sm-right">Emergency Contact Person Email: </dt>
                        <dd class="col-sm-6">{{ $ecp_email }}</dd>

                        <dt class="col-sm-6 text-sm-right">Position: </dt>
                        <dd class="col-sm-6">{{ $positions_name }}</dd>

                        <dt class="col-sm-6 text-sm-right">Office: </dt>
                        <dd class="col-sm-6">{{ $offices_name }}</dd>

                        <dt class="col-sm-6 text-sm-right">Classification: </dt>
                        <dd class="col-sm-6">{{ $classifications_name }}</dd>

                        <dt class="col-sm-6 text-sm-right">Status: </dt>
                        <dd class="col-sm-6">{{ $employment_statuses_name }}</dd>

                    </dl>
                    <!-- End Row -->
                </div>
                <!-- End Body -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
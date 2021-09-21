<div wire:ignore class="modal fade" id="recordshowEmployee" tabindex="-1" role="dialog" aria-labelledby="recordshowEmployee" aria-hidden="true">
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
                <div class="card-body">
                    <dl class="row ">
                        <dt class="col-sm-6 text-sm-right">Employment Date:</dt>
                        <input type="text" placeholder="Loading..." class="viewEmployeeCustomField" wire:model="employment_date" disabled>


                        <dt class="col-sm-6 text-sm-right">Employee Identification Number:</dt>
                        <input type="text" placeholder="Loading..." class="viewEmployeeCustomField" wire:model="employee_number" disabled>


                        <dt class="col-sm-6 text-sm-right">First name:</dt>
                        <input type="text" placeholder="Loading..." class="viewEmployeeCustomField" wire:model="firstname" disabled>

                        <dt class="col-sm-6 text-sm-right">Middle name:</dt>
                        <input type="text" placeholder="Loading..." class="viewEmployeeCustomField" wire:model="middlename" disabled>

                        <dt class="col-sm-6 text-sm-right">Last name:</dt>
                        <input type="text" placeholder="Loading..." class="viewEmployeeCustomField" wire:model="lastname" disabled>

                        <dt class="col-sm-6 text-sm-right">Suffix:</dt>
                        <input type="text" placeholder="Loading..." class="viewEmployeeCustomField" wire:model="suffix" disabled>


                        <dt class="col-sm-6 text-sm-right">Email:</dt>
                        <input type="text" placeholder="Loading..." class="viewEmployeeCustomField" wire:model="email" disabled>

                        <dt class="col-sm-6 text-sm-right">Address:</dt>
                        <input type="text" placeholder="Loading..." class="viewEmployeeCustomField" wire:model="address" disabled>

                        <dt class="col-sm-6 text-sm-right">Phone:</dt>
                        <input type="text" placeholder="Loading..." class="viewEmployeeCustomField" wire:model="contact_number" disabled>

                        <dt class="col-sm-6 text-sm-right">Emergency Contact Person:</dt>
                        <input type="text" placeholder="Loading..." class="viewEmployeeCustomField" wire:model="emergency_contact_person" disabled>

                        <dt class="col-sm-6 text-sm-right">Emergency Contact #: </dt>
                        <input type="text" placeholder="Loading..." class="viewEmployeeCustomField" wire:model="ecp_contact_number" disabled>

                        <dt class="col-sm-6 text-sm-right">Emergency Contact Person Email: </dt>
                        <input type="text" placeholder="Loading..." class="viewEmployeeCustomField" wire:model="ecp_email" disabled>

                        <dt class="col-sm-6 text-sm-right">Position: </dt>
                        <textarea id=textareashow type="text" placeholder="Loading..." class="viewEmployeeCustomField textareaCustom"  wire:model="positions_name" disabled></textarea>

                        <dt class="col-sm-6 text-sm-right">Office: </dt>
                        <textarea id=textareashow type="text" placeholder="Loading..." class="viewEmployeeCustomField textareaCustom"  wire:model="offices_name" disabled></textarea>

                        <dt class="col-sm-6 text-sm-right">Classification: </dt>
                        <input type="text" placeholder="Loading..." class="viewEmployeeCustomField" wire:model="classifications_name" disabled>

                        <dt class="col-sm-6 text-sm-right">Status: </dt>
                        <input type="text" placeholder="Loading..." class="viewEmployeeCustomField" wire:model="employment_statuses_name" disabled>

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
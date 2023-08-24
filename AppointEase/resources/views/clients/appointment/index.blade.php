<x-layout>
    @include('clients._sidebar')
    <style>
        .centered {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        
        @media (max-width: 768px) {
            .col-lg-6 {
                max-width: 100%;
            }
        }
        .no-resize {
    resize: none;
}

    </style>

    <section class="section">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center"
                            style="font-size: 24px; font-weight: bold; margin-bottom: 20px;">Appointment Form</h4>
                        <form id="appointmentForm">
                            <!-- Personal Information -->
                            <!-- Personal Information -->
                            <div class="section-container">
                                <h5 class="section-header" style="margin-top: 0;">Personal Information</h5>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{ auth()->user()->name }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" value="{{ auth()->user()->email }}">
                                    </div>
                                </div>
                                <!-- Add other personal information fields here -->
                                <div class="row mb-3">
                                    <label for="inputStudentNumber" class="col-sm-2 col-form-label">Student
                                        Number</label>
                                    <div class="col-sm-10">
                                        <input type="studentnumber" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Number</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="inputDate"
                                            name="appointmentDate">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
                                    <div class="col-sm-10">
                                        <input type="time" class="form-control" id="inputTime"
                                            name="appointmentTime">
                                    </div>
                                </div>
                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="male"
                                                value="male">
                                            <label class="form-check-label" for="male">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="female"
                                                value="female">
                                            <label class="form-check-label" for="female">
                                                Female
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="other"
                                                value="other">
                                            <label class="form-check-label" for="other">
                                                Other
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <button type="button" class="btn btn-primary next-section">Continue</button>
                            </div>
                            <!-- Request Information -->
                            <div class="section-container" style="display: none;">
                                <h5 class="section-header" style="margin-top: 0;">Request Information</h5>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Services</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="services">
                                            <option value="" disabled selected>Select a service</option>
                                            <option value="service1">Official Transcript of Records</option>
                                            <option value="service2">Diploma Renewal</option>
                                            <option value="service2">Honorable Dismissal </option>
                                            <option value="service2">Authentication</option>
                                            <option value="service2">Authentication, Certification & Verification</option>
                                            <option value="service2">Certification of Grades</option>
                                            <option value="service1">Certification of Earned Units</option>
                                            <option value="service2">Certification General Weighted Average</option>
                                            <option value="service2">Certification as Graduate</option>
                                            <option value="service2">Certification as Currently Enrolled</option>
                                            <option value="service2">Certification of Enrollment</option>
                                            <option value="service2">Certification as Graduating Student</option>
                                            <option value="service1">Adding/Dropping of Subjects</option>
                                            <option value="service2">School Grading System</option>
                                            <option value="service2">PGO Verification Slip </option>
                                            <option value="service2">Certification of English as a Medium of Instruction</option>
                                            <option value="service2">Certification as Latin Honor</option>
                                            <option value="service2">Certification as Completed Academic Requirements</option>
                                            <option value="service2">Certification as Bonafide Student</option>
                                            <option value="service2">Certification GSIS Educational Subsidy Program</option>
                                            <option value="service2">Certification as Has been a Student</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                  <label for="serviceDetails" class="col-sm-2 col-form-label">Service Details</label>
                                  <div class="col-sm-10">
                                      <textarea class="form-control no-resize" id="serviceDetails" name="serviceDetails" rows="4" cols="50"></textarea>
                                  </div>
                              </div>
                              <div class="row mb-3">
                                  <label for="inputReason" class="col-sm-2 col-form-label">Reason for Requesting</label>
                                  <div class="col-sm-10">
                                      <textarea class="form-control no-resize" id="inputReason" name="reason" style="height: 100px"></textarea>
                                  </div>
                              </div>
                              <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile" accept=".pdf">
                                    <button type="button" class="btn btn-sm btn-danger mt-2" id="removeFileButton">Remove File</button>
                                </div>
                            </div>                            
                                <button type="button" class="btn btn-secondary prev-section">Previous</button>
                                <button type="button" class="btn btn-primary next-section">Continue</button>
                            </div>

                            <!-- Payment Method -->
                            <div class="section-container" style="display: none;">
                                <h5 class="section-header" style="margin-top: 0;">Payment Method</h5>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Payment Type</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="paymentType">
                                            <option value="" disabled selected>Select a payment type</option>
                                            <option value="gcash">GCash</option>
                                            <option value="bayadCenter">Bayad Center</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-secondary prev-section">Previous</button>
                                <button type="submit" class="btn btn-primary">Submit Form</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>

<script>
    const sections = document.querySelectorAll('.section-container');
    const nextButtons = document.querySelectorAll('.next-section');
    const prevButtons = document.querySelectorAll('.prev-section');
    const form = document.getElementById('appointmentForm');

    nextButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
            sections[index].style.display = 'none';
            sections[index + 1].style.display = 'block';

            // Hide all sections before the current one
            for (let i = 0; i < index; i++) {
                sections[i].style.display = 'none';
            }
        });
    });

    prevButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
            sections[index].style.display = 'none';
            sections[index - 1].style.display = 'block';

            // Hide all sections after the current one
            for (let i = index + 1; i < sections.length; i++) {
                sections[i].style.display = 'none';
            }
        });
    });

    form.addEventListener('submit', () => {
        // Handle form submission here
    });

    const formFileInput = document.getElementById('formFile');
    const removeFileButton = document.getElementById('removeFileButton');

    removeFileButton.addEventListener('click', () => {
        formFileInput.value = null;
    });

    
</script>

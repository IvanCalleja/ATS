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

        #serviceDetails {
            list-style-type: disc;
            padding-left: 20px;
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
                                        <select class="form-select" name="services" id="serviceSelect">
                                            <option value="" disabled selected>Select a service</option>
                                            <option value="service1">Official Transcript of Records</option>
                                            <option value="service2">Diploma Renewal</option>
                                            <option value="service3">Honorable Dismissal </option>
                                            <option value="service4">Authentication</option>
                                            <option value="service5">Authentication, Certification & Verification
                                            </option>
                                            <option value="service6">Certification of Grades</option>
                                            <option value="service7">Certification of Earned Units</option>
                                            <option value="service8">Certification General Weighted Average</option>
                                            <option value="service9">Certification as Graduate</option>
                                            <option value="service10">Certification as Currently Enrolled</option>
                                            <option value="service11">Certification of Enrollment</option>
                                            <option value="service12">Certification as Graduating Student</option>
                                            <option value="service13">Adding/Dropping of Subjects</option>
                                            <option value="service14">School Grading System</option>
                                            <option value="service15">PGO Verification Slip </option>
                                            <option value="service16">Certification of English as a Medium of
                                                Instruction</option>
                                            <option value="service17">Certification as Latin Honor</option>
                                            <option value="service18">Certification as Completed Academic Requirements
                                            </option>
                                            <option value="service19">Certification as Bonafide Student</option>
                                            <option value="service20">Certification GSIS Educational Subsidy Program
                                            </option>
                                            <option value="service21">Certification as Has been a Student</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="serviceDetails" class="col-sm-2 col-form-label">Service
                                        Requirements </label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control no-resize" id="serviceDetails" name="serviceDetails" rows="6" cols="50"
                                            readonly></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputReason" class="col-sm-2 col-form-label">Reason for
                                        Requesting</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control no-resize" id="inputReason" name="reason" style="height: 100px"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" id="formFile" accept=".pdf">
                                        <button type="button" class="btn btn-sm btn-danger mt-2"
                                            id="removeFileButton">Remove File</button>
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
    function resetServiceDropdown() {
                const serviceSelect = document.getElementById('serviceSelect');
                // Set the dropdown value to its default option
                serviceSelect.value = '';
            }

            // Function to reset the "Service Requirements" textarea
            function resetServiceRequirements() {
                const serviceDetailsTextarea = document.getElementById('serviceDetails');
                // Clear the textarea
                serviceDetailsTextarea.value = '';
            }

            // Call the resetServiceDropdown and resetServiceRequirements functions when the page loads
            window.addEventListener('load', () => {
                resetServiceDropdown();
                resetServiceRequirements();
            });

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

    const serviceSelect = document.getElementById('serviceSelect');
    const serviceDetailsTextarea = document.getElementById('serviceDetails');

    // Define an object to map service values to their details
    const serviceDetails = {
        'service1': "Receipt of payment from Cashier's Office: ₱ 50.00 per page\n" +
            "Fully accomplished Clearance & Request Form from Accounting and Billing Office\n" +
            "1 Documentary Stamp (Violet)\n" +
            "Passport Size & White Background (Formal Attire)\n" +
            "For Board examination purposes (refer to PRC LERIS required picture)\n" +
            "Verification Form (for international purposes) (ex. ICES, CGFNS, WES, NNAS, NCLEX and etc.)\n" +
            "For those with copies of their OTR already, kindly send us a scanned copy of your OTR\n" +
            "Return Slip of Honorable Dismissal (for transferee/TOR copy for other school)",

        'service2': "Receipt of Payment from Cashier's office: ₱ 100.00 per copy\n" +
            "Fully accomplished Clearance & Request Form from Accounting and Billing office\n" +
            "1 Documentary Stamp (Violet)\n" +
            "Duly notarized affidavit",

        'service3': "Receipt of Payment from Cashier's office: ₱ 30.00\n" +
            "Fully accomplished Clearance & Request Form from Accounting and Billing office\n" +
            "1 Documentary Stamp (Violet)",

        'service4': "Clear copy of documents to be authenticated\n" +
            "Receipt of Payment from Cashier’s office – ₱ 10.00 per page",

        'service5': "Receipt of Payment from Cashier’s office\n" +
            "Certification fee – ₱ 30.00\n" +
            "CAV fee – ₱ 40.00\n" +
            "Authentication fee – ₱ 10.00 per page\n" +
            "Clear copy of documents (OTR & Diploma) to be authenticated\n" +
            "Fully accomplished Clearance & Request Form from Accounting and Billing office\n" +
            "1 Documentary Stamp (Violet)\n" +
            "Long Size Brown Envelope & Long Size White Mailing Envelope",

        'service6': "Receipt of Payment from Cashier’s office – ₱ 30.00 per Semester or per School Year",

        'service7': "Receipt of Payment from Cashier’s office – ₱ 30.00 per copy\n" +
            "For those with copies of their OTR already, kindly send us scanned copy of your OTR\n" +
            "Fully accomplished Clearance & Request Form from Accounting and Billing office",

        'service8': "Receipt of Payment from Cashier’s office – ₱ 30.00 per copy\n" +
            "For those with copies of their OTR already, kindly send us scanned copy of your OTR\n" +
            "Fully accomplished Clearance & Request Form from Accounting and Billing office",

        'service9': "Receipt of Payment from Cashier’s office – ₱ 30.00 per copy\n" +
            "Fully accomplished Clearance & Request Form from Accounting and Billing office",

        'service10': "Receipt of Payment from Cashier’s office – ₱ 30.00 per copy",

        'service11': "Receipt of Payment from Cashier’s office – ₱ 30.00 per copy",

        'service12': "Receipt of Payment from Cashier’s office – ₱ 30.00 per copy",

        'service13': "Receipt of Payment from Cashier’s office – ₱ 15.00 per subject",

        'service14': "Receipt of Payment from Cashier’s office – ₱ 30.00 per copy",

        'service15': "Receipt of Payment from Cashier’s office – ₱ 30.00 per copy",

        'service16': "Receipt of Payment from Cashier’s office – ₱ 30.00 per copy\n" +
            "Fully accomplished Clearance & Request Form from Accounting and Billing office",

        'service17': "Receipt of Payment from Cashier’s office – ₱ 30.00 per copy\n" +
            "Fully accomplished Clearance & Request Form from Accounting and Billing office",

        'service18': "Receipt of Payment from Cashier’s office – ₱ 30.00 per copy\n" +
            "Fully accomplished Clearance & Request Form from Accounting and Billing office",

        'service19': "Receipt of Payment from Cashier’s office – ₱ 30.00 per copy\n" +
            "Fully accomplished Clearance & Request Form from Accounting and Billing office",

        'service20': "Receipt of Payment from Cashier’s office – ₱ 30.00 per copy",

        'service21': "Receipt of Payment from Cashier’s office – ₱ 30.00 per copy\n" +
            "Fully accomplished Clearance & Request Form from Accounting and Billing office",
    };

 serviceSelect.addEventListener('change', function() {
        // Get the selected value from the select element
        const selectedService = serviceSelect.value;

        // Update the textarea with the corresponding service details
        serviceDetailsTextarea.value = serviceDetails[selectedService] || '';
    });

    // Function to reset the "Services" dropdown to its default option
    function resetServiceDropdown() {
        const serviceSelect = document.getElementById('serviceSelect');
        // Set the dropdown value to its default option
        serviceSelect.value = '';
    }

    // Call the resetServiceDropdown function when the page loads
    window.addEventListener('load', resetServiceDropdown);

      // Function to handle form submission
      function handleSubmit(event) {
        event.preventDefault(); // Prevent the default form submission behavior

        // Get form data
        const formData = new FormData(form);

        // You can access form fields like this:
        const name = formData.get('name');
        const email = formData.get('email');
        const studentNumber = formData.get('studentnumber');
        const appointmentDate = formData.get('appointmentDate');
        const appointmentTime = formData.get('appointmentTime');
        const gender = formData.get('gender');
        const services = formData.get('services');
        const reason = formData.get('reason');
        const paymentType = formData.get('paymentType');
        const file = formData.get('formFile');

        // Now, you can do something with the form data, such as sending it to a server using AJAX or fetch.

        // For example, you can create an object to hold the data and send it as JSON:
        const requestData = {
            name,
            email,
            studentNumber,
            number,
            appointmentDate,
            appointmentTime,
            gender,
            services,
            reason,
            paymentType,
            file, // This is the file input value, you may need to handle file uploads differently
        };

        // Send the data to the server using fetch or AJAX
        // Replace 'your-api-endpoint' with the actual endpoint where you want to send the data
        fetch('your-api-endpoint', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(requestData),
        })
        .then(response => {
            if (response.ok) {
                // Handle a successful response, e.g., show a success message to the user
                console.log('Form submitted successfully');
            } else {
                // Handle errors or validation failures from the server
                console.error('Form submission failed');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }

    // Add an event listener to the form for form submission
    form.addEventListener('submit', handleSubmit);
</script>

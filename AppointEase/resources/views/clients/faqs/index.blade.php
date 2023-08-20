<x-layout>
    @include('clients._sidebar')
    <style>
        .centered {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 80px);
            padding: 20px;
        }

        .card {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            overflow-y: auto;
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
        }

        .accordion-button {
            transition: background-color 0.3s ease-in-out;
        }

        .accordion-button:hover {
            background-color: #007bff;
        }
    </style>

    <!-- F.A.Q Group 1 -->
    <div class="centered">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Frequently Asked Questions</h5>

                <div class="accordion accordion-flush" id="faq-group-1">

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-target="#faqsOne-1" type="button"
                                data-bs-toggle="collapse">
                                What is the appointment scheduling system?
                            </button>
                        </h2>
                        <div id="faqsOne-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                            <div class="accordion-body">
                                The appointment scheduling system is an online platform that enables users to easily
                                schedule and manage appointments with various service providers, professionals, or
                                businesses. It streamlines the booking process, making it convenient for users to select
                                suitable time slots and services.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-target="#faqsOne-2" type="button"
                                data-bs-toggle="collapse">
                                How does the appointment scheduling system work?
                            </button>
                        </h2>
                        <div id="faqsOne-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                            <div class="accordion-body">
                                The system works by allowing users to browse available service providers, view their
                                schedules, and select preferred appointment slots. Users can then input their
                                information, select the desired service, and confirm the appointment. The system sends
                                notifications and reminders to users and service providers to ensure smooth
                                coordination.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-target="#faqsOne-3" type="button"
                                data-bs-toggle="collapse">
                                Who can use the appointment scheduling system?
                            </button>
                        </h2>
                        <div id="faqsOne-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                            <div class="accordion-body">
                                The appointment scheduling system is designed for both service providers and clients.
                                Service providers use it to manage their availability and appointments, while clients
                                use it to book appointments for the services they need.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-target="#faqsOne-4" type="button"
                                data-bs-toggle="collapse">
                                Is the appointment scheduling system available 24/7?
                            </button>
                        </h2>
                        <div id="faqsOne-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                            <div class="accordion-body">
                                Yes, the appointment scheduling system is available for use 24 hours a day, 7 days a
                                week. You can access it whenever it's convenient for you to schedule or manage your
                                appointments.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-target="#faqsOne-5" type="button"
                                data-bs-toggle="collapse">
                                Do I need to create an account to use the system?
                            </button>
                        </h2>
                        <div id="faqsOne-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                            <div class="accordion-body">
                                Yes, creating an account is necessary to use the appointment scheduling system. This
                                account allows you to manage your appointments, receive notifications, and easily access
                                your booking history.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- End F.A.Q Group 1 -->
</x-layout>
 
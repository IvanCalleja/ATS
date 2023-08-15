<x-layout>
    <x-sidebar />
    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(8.5px);
            -webkit-backdrop-filter: blur(8.5px);
            border-radius: 10px;
            padding: 20px;
            color: white;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
        }

        #calendar {
            max-width: 1100px;
            margin: 40px auto;
        }
        
    </style>
    <section class="section dashboard">
        <div class="row">
            <div class="col-xxl-4 col-md-6">
                <div class="card glass-card">
                    <div class="card-body">
                        <h5 class="card-title text-white"><strong>Today's Total Appointment</strong></span></h5>
                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <h6>145</h6>
                                <span class="text-success small pt-1 fw-bold">12%</span>
                                <span class="text-white">increase</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card glass-card">
                    <div class="card-body">
                        <h5 class="card-title text-white"><strong>Weekly Total Appointment</strong></span></h5>
                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <h6>3,264</h6>
                                <span class="text-success small pt-1 fw-bold">8%</span>
                                <span class="text-white">increase</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-12">
                <div class="card glass-card">
                    <div class="card-body">
                        <h5 class="card-title text-white"><strong>Total Number of Clients</strong></span></h5>
                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <h6>1244</h6>
                                <span class="text-danger small pt-1 fw-bold">12%</span>
                                <span class="text-white">decrease</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id='calendar'></div>
    </section>
</x-layout>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth'
        });
        calendar.render();
    });
</script>

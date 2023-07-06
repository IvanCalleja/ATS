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
    </style>
    <section class="section dashboard">
      <div class="row">
        <div class="col-xxl-4 col-md-6">
          <div class="card glass-card">
            <div class="card-body">
              <h5 class="card-title text-white">Today's Total Appointment</h5>
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
              <h5 class="card-title text-white">Weekly Total Appointment</span></h5>
              <div class="d-flex align-items-center">
                <div class="ps-3">
                  <h6>$3,264</h6>
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
              <h5 class="card-title text-white">Total Number of Clients</span></h5>
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
                <!-- Recent Activity -->
                <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Upcoming Activities <span>| Today</span></h5>

              <div class="activity">

            <div class="activity-item d-flex">
              <div class="activite-label">August 21</div>
              <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
              <div class="activity-content">
               <a href="#" class="fw-bold text-dark">Ninoy Aquino Day</a>
              </div>
            </div><!-- End activity item-->

            <div class="activity-item d-flex">
              <div class="activite-label">August 28</div>
              <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
              <div class="activity-content">
                National Heroes Day
              </div>
            </div><!-- End activity item-->

            <div class="activity-item d-flex">
              <div class="activite-label">November 1</div>
              <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
              <div class="activity-content">
                All Saint's Day
              </div>
            </div><!-- End activity item-->

          <div class="activity-item d-flex">
            <div class="activite-label">November 30</div>
            <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
            <div class="activity-content">
              <a href="#" class="fw-bold text-dark">Bonifacio Day</a>
            </div>
          </div><!-- End activity item-->

          <div class="activity-item d-flex">
            <div class="activite-label">December 25</div>
            <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
            <div class="activity-content">
              Christmas Day
            </div>
          </div><!-- End activity item-->

          <div class="activity-item d-flex">
            <div class="activite-label">December 30</div>
            <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
            <div class="activity-content">
              Rizal's Day
            </div>
          </div><!-- End activity item-->

          <div class="activity-item d-flex">
            <div class="activite-label">January 1</div>
            <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
            <div class="activity-content">
              New Year
            </div>
          </div><!-- End activity item-->

          </div>

          </div>
          </div><!-- End Recent Activity -->
    </section>
  </x-layout>
  
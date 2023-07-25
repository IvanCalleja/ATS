<x-layout>
    <x-sidebar />

    <div class="col-12">
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
            <h5 class="card-title">Reports <span>/Today</span></h5>

            <!-- Line Chart -->
            <div id="reportsChart"></div>

            <script>
              document.addEventListener("DOMContentLoaded", () => {
                new ApexCharts(document.querySelector("#reportsChart"), {
                  series: [{
                    name: 'Transaction',
                    data: [31, 40, 28, 51, 42, 82, 56],
                  }, {
                    name: 'Services',
                    data: [11, 32, 45, 32, 34, 52, 41]
                  }, {
                    name: 'Clients',
                    data: [15, 11, 32, 18, 9, 24, 11]
                  }],
                  chart: {
                    height: 350,
                    type: 'area',
                    toolbar: {
                      show: false
                    },
                  },
                  markers: {
                    size: 4
                  },
                  colors: ['#4154f1', '#2eca6a', '#ff771d'],
                  fill: {
                    type: "gradient",
                    gradient: {
                      shadeIntensity: 1,
                      opacityFrom: 0.3,
                      opacityTo: 0.4,
                      stops: [0, 90, 100]
                    }
                  },
                  dataLabels: {
                    enabled: false
                  },
                  stroke: {
                    curve: 'smooth',
                    width: 2
                  },
                  xaxis: {
                    type: 'datetime',
                    categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                  },
                  tooltip: {
                    x: {
                      format: 'dd/MM/yy HH:mm'
                    },
                  }
                }).render();
              });
            </script>
            <!-- End Line Chart -->

          </div>

        </div>
      </div>
      <div class="col-12">
        <div class="card recent-sales overflow-auto">

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
            <h5 class="card-title">Recent Sales <span>| Today</span></h5>

            <table class="table table-borderless datatable">
              <thead>
                <tr>
                  <th scope="col">Transaction Number</th>
                  <th scope="col">Client</th>
                  <th scope="col">Staff</th>
                  <th scope="col">Service</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><a >#2457</a></th>
                  <td>Lisa</td>
                  <td><a href="#" class="text-primary">Zarina Kate Lagatic</a></td>
                  <td>Official Transcript of Records</td>
                  <td><span class="badge bg-success">Approved</span></td>
                </tr>
                <tr>
                  <th scope="row"><a >#2147</a></th>
                  <td>Jennie</td>
                  <td><a href="#" class="text-primary">Zarina Kate Lagatic</a></td>
                  <td>Diploma Renewal</td>
                  <td><span class="badge bg-warning">Pending</span></td>
                </tr>
                <tr>
                  <th scope="row"><a >#2049</a></th>
                  <td>Jisoo</td>
                  <td><a href="#" class="text-primary">Zarina Kate Lagatic</a></td>
                  <td>Honorable Dismissal</td>
                  <td><span class="badge bg-success">Approved</span></td>
                </tr>
                <tr>
                  <th scope="row"><a >#2644</a></th>
                  <td>Rose</td>
                  <td><a href="#" class="text-primary">Zarina Kate Lagatic</a></td>
                  <td>Authentication</td>
                  <td><span class="badge bg-danger">Rejected</span></td>
                </tr>
                <tr>
                  <th scope="row"><a >#2644</a></th>
                  <td>Cody</td>
                  <td><a href="#" class="text-primary">Zarina Kate Lagatic</a></td>
                  <td>Authentication, Certification & Verification</td>
                  <td><span class="badge bg-success">Approved</span></td>
                </tr>
              </tbody>
            </table>

          </div>

        </div>
      </div>

  </x-layout>
<x-layout>
  @include('clients._sidebar')
  <style>
      /* Custom styling for card */
      .card {
          margin: 20px;
          padding: 20px;
          border-radius: 10px;
          box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }

      /* Custom styling for table */
      .table {
          font-size: 16px;
      }

      /* Style for table headers */
      .table th {
          font-weight: 600;
      }

      /* Style for hoverable rows */
      .table-hover tbody tr:hover {
          background-color: #f5f5f5;
      }

      /* Custom styling for card title */
      .card-title {
          font-size: 24px;
          font-weight: bold;
      }
  </style>
  <div class="card">
      <div class="card-body">
          <h5 class="card-title">Transaction History</h5>
          <div class="table-responsive">
              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                  <thead>
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Student Number</th>
                          <th scope="col">Course & Section</th>
                          <th scope="col">Contact Number</th>
                          <th scope="col">Email</th>
                          <th scope="col">Service</th>
                          <th scope="col">Requirements</th>
                          <th scope="col">Status</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <th scope="row">1</th>
                          <td>Zarina Kate D. Lagatic</td>
                          <td>20111272367</td>
                          <td>BSIT 3A</td>
                          <td>09617368775</td>
                          <td>lagaticzarinakate@gmail.com</td>
                          <td>Official Transcript of Records</td>
                          <td>
                              <ul>
                                  <li>Receipt of payment form Cashier's Office - ₱ 50.00 per page</li>
                                  <li>Fully accomplished Clearance & Request Form from Accounting and Billing Office</li>
                                  <li>1 Documentary Stamp (Violet)</li>
                                  <li>Passport Size & White Background (Formal Attire)</li>
                                  <li>For Board examination purposes (refer to PRC LERIS required picture)</li>
                                  <li>Verification Form (for international purposes) (ex. ICES, CGFNS, WES, NNAS, NCLEX and etc.)</li>
                                  <li>For those with copies of their OTR already kindly send us scanned copy of your OTR</li>
                                  <li>Return Slip of Honorable Dismissal (for transferee/TOR copy for other school)</li>
                              </ul>
                          </td>
                          <td>Pending</td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</x-layout>

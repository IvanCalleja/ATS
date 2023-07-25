<x-layout>
    @include('clients._sidebar')
  <style>
    .centered {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
  </style>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Transaction History</h5>

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
                        <td><li>Receipt of payment form Cashier's Office - ₱ 50.00 per page</li>
                          <li>Fully accomplished Clerance & Request Form from Accounting and Billing Office</li>
                          <li>1 Documentary Stamp (Violet)</li>
                          <li>Passport Size & White Background (Formal Attire)</li>
                          <li>For Board examination purposes (refer to PRC LERIS required picture)</li>
                          <li>Verification Form (for international purposes) (ex. ICES, CGFNS, WES, NNAS, NCLEX and etc.)</li>
                          <li>For those with copies of their OTR already kindly send us scanned copy of your OTR</li>
                          <li>Return Slip of Honorable Dismissal (for transferee/TOR copy for other school)</li></td>
                        <td>Pending</td>
                    </tr>
    
                </tbody>
            </table>
        </div>
    </div>
</x-layout>

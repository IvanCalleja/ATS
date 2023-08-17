<x-layout>
    <x-sidebar />
    <div class="container">
        <div class="card">
            <div class="card-body">
    <div class="card-body d-flex justify-content-between align-items-end">
      <div class="mb-3">
        <h2 class="card-title fw-bold" style="font-size: 24px; font-weight: bold;">Alumnus List</h2> 
      </div>
      <div class="dropdown">
        <button class="btn btn-primary mb-3" type="button" id="addButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Add
        </button>
        <div class="dropdown-menu" aria-labelledby="addButton">
          <a class="dropdown-item" href="#">Admin</a>
          <a class="dropdown-item" href="#">Staff</a>
        </div>
      </div>
    </div>


                <!-- Table with hoverable rows -->
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Student Number</th>
                                <th scope="col">Course & Section</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">Email</th>
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
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Ivan Jefferson O. Calleja</td>
                                <td>20111272141</td>
                                <td>BSIT 3A</td>
                                <td>09511036109</td>
                                <td>ivancalleja143@gmail.com</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layout>

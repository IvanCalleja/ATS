<x-layout>
  <x-sidebar/>
  <div class="card">
      <div class="card-body">
          <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="card-title">Staff's List</h5>
              <div class="btn-group">
                  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Add
                  </button>
                  <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Admin</a>
                      <a class="dropdown-item" href="#">Staff</a>
                  </div>
              </div>
          </div>
          <table class="table table-hover">
              <thead>
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Staff Number</th>
                      <th scope="col">Position</th>
                      <th scope="col">Contact Number</th>
                      <th scope="col">Email</th>
                      <th scope="col">Status</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <th scope="row">1</th>
                      <td>Zarina Kate Lagatic</td>
                      <td>20111272367</td>
                      <td>Project Head</td>
                      <td>09617368775</td>
                      <td>lagaticzarinakate@gmail</td>
                      <td>Active</td>
                  </tr>
                  <tr>
                      <th scope="row">2</th>
                      <td>Ivan Jefferson Calleja</td>
                      <td>20111272141</td>
                      <td>Developer</td>
                      <td>09511036109</td>
                      <td>ivancalleja@gmail.com</td>
                      <td>Active</td>
                  </tr>
              </tbody>
          </table>
      </div>
  </div>
</x-layout>

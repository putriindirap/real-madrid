@extends("_layouts.app")

@section('content')
<section>
  <div class="container my-5">
      <div class="row">
          <div class="col-md-12">
              <a href="" class="btn btn-outline-warning mb-4">Kembali ke halaman sebelumnya</a>
              
              <div class="card border-warning mb-3">
                  <div class="card-body">
                      <h3 class="mb-4">Daftar Member</h3>
                      <table class="table table-success table-striped">
                          <thead>
                              <tr class="table-warning">
                                  <th scope="col">ID</th>
                                  <th scope="col">Nama</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">Jenis User</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($users as $user)
                                <tr class="table-warning">
                                  <td>{{ $user->id }}</td>
                                  <td>{{ $user->name }}</td>
                                  <td>{{ $user->email }}</td>
                                  <td>{{ ($user->type == 0) ? "Member" : "Admin" }}</td>
                                </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
    
@endsection
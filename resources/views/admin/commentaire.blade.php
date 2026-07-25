@extends('admin.index')

@section('content')
<!-- Header -->
    <div style="background-image: url(assets/img/theme/restro00.jpg); background-size: cover;" class="header  pb-8 pt-5 pt-md-8">
      <span class="mask bg-gradient-dark opacity-8"></span>
        <div class="container-fluid">
          <div class="header-body"></div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--8">
      <!-- Table -->
      <div class="row">
      <div class="col">
          <div class="card shadow">
          <div class="card-header border-0">
              <h2><i class="fa-solid fa-comment-dots text-primary mx-2"></i>Commentaire</h2>
          </div>
          <div class="table-responsive">
              @if (Session::has('message'))
                  <div class="alert alert-success" role="alert">
                      {{ Session::get('message') }}
                  </div>
              @endif
              <table class="table table-striped table-bordered mb-2">
                <thead class="text-primary">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Message</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($commentaires as $commentaire )
                    <tr>
                      <td>{{ $commentaire->id }}</td>
                      <td>{{ $commentaire->name }}</td>
                      <td>{{Str::limit($commentaire->message,30 ) }}</td>
                      <td>{{ $commentaire->created_at }}</td>
                      <td>
                        <form action="{{ route('admin.delete.commentair',$commentaire->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button  class="btn btn-danger btn-sm">Delete</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
            {{ $commentaires->links() }}
          </div>
          </div>
        </div>
      </div>
</div>
@endsection
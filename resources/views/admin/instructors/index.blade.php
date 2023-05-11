@extends("admin.layouts.master")
@section("content")
@if (Session::has('success'))
<div class="alert alert-primary">{{ Session::get('success') }}</div>
@endif
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">instructors </h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">ALL instructors</h6>
        <a class="btn btn-primary" href="{{ route('instructors.create') }}">Add instructor</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>instructorimg</th>
                        <th>instructorname</th>
                        <th>instructorsubgect</th>
                    </tr>
                </thead>
            @foreach ($instructors as $instructor )
            <td>{{ $instructor->id}}</td>
            <td>
                <img src="/uploads/instructor/{{ $instructor->instruct_img }}" width="70" height="65" >
            </td>
            <td> {{ $instructor->instreuct_nam}}</td>
            <td>{{ $instructor->instruct_subject}}</td>
            <td>
                <a href="{{ route('instructors.edit', $instructor->id ) }} "class="btn btn-info">Edit</td>
            <td>
                <form action="{{ route('instructors.destroy', $instructor->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>
@endsection

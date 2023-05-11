@extends("admin.layouts.master")
@section("content")
@if (Session::has('success'))
<div class="alert alert-primary">{{ Session::get('success') }}</div>
@endif
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Courses </h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">ALL Courses</h6>
        <a class="btn btn-primary" href="{{ route('courses.create') }}">Add Course</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>img</th>
                        <th>Price</th>
                        <th>title</th>
                        <th>description</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td> {{ $course->id }}</td>
                            <td>
                                <img src="/uploads/courses/{{ $course->img_course }}" width="150" >
                            </td>
                            <td>{{ $course->price }}</td>
                            <td>{{ $course->title }}</td>
                            <td> {{ $course->description}}</td>
                            <td>
                                <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-info">Edit</a>
                            </td>
                        <td>
                                <form action="{{ route('courses.destroy', $course->id) }}" method="POST" class="d-inline">
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

@extends('admin.layouts.master')

@section('content')

@if (Session::has('success'))
<div class="alert alert-primary">{{ Session::get('success') }}</div>
@endif

<a href="{{ route('news.create') }}" class="btn btn-primary mb-2">Add</a>

<table class="table table-grid">
<thead>
    <th>#</th>
    <th>day</th>
    <th>month</th>
    <th>year</th>
    <th>title</th>
    <th>Description</th>
    <th>Image</th>
</thead>
<tbody>
    @foreach ($news as $new)
        <tr>
            <td>{{ $new->id }}</td>
            <td>{{ $new->day }}</td>
            <td>{{ $new->month }}</td>
            <td>{{ $new->year }}</td>
            <td>{{ $new->title }}</td>
            <td>
                <img src="/uploads/news/{{ $new->image }}" width="150" alt="" srcset="">
            </td>
            <td>{{ $new->description }}</td>
        </tr>

        <td>
            <a href="{{ route('news.edit', $new->id) }}" class="btn btn-info">Edit</a>
        </td>

        <td>
            <form action="{{ route('news.destroy', $new->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>

    @endforeach
</tbody>
</table>
@endsection

@extends('admin.layouts.master')

@section("content")
<a href="{{ route('contactus.create') }}" class="btn btn-primary mb-2">Add contact us</a>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>#</th>
            <th>name</th>
            <th>email</th>
            <th>message</th>
            <th>subject</th>

        </tr>
    </thead>
    <tbody>
            <tr>
                <td> </td>
                <td></td>
                <td></td>
                <td> </td>
            </tr>
    </tbody>
</table>


@endsection

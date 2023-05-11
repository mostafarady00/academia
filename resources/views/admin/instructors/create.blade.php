@extends("admin.layouts.master")
@section('content')
@if (Session::has('success'))
<div class="alert alert-primary">{{ Session::get('success') }}</div>
@endif
<form action="{{ route('instructors.store') }}" method="POST" enctype="multipart/form-data" class="form-group">
    @csrf
<input type="file" name="instruct_img" class="form-input">
@error('instruct_img')
    <div class="alert alert-danger">يرجى الحاق الصورة</div>
@enderror

<input type="text" name="instreuct_nam" placeholder="Enter New instreuctnam" class="form-input">
@error('instreuct_nam')
    <div class="alert alert-danger">يرجى ادخال الاسم</div>
@enderror
<input type="text" name="instruct_subject" placeholder="Enter New instruct_subject" class="form-input">
@error('instruct_subject')
    <div class="alert alert-danger">الحد الاقصى 400 حرف</div>
@enderror

<button class="btn btn-primary" type="submit">Save</button>
</form>
@endsection

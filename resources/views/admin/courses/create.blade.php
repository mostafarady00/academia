@extends("admin.layouts.master")
@section('content')
@if (Session::has('success'))
<div class="alert alert-primary">{{ Session::get('success') }}</div>
@endif
<form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data" class="form-group">
    @csrf
    <input type="file" name="img_course" class="form-input">
    @error('img_course')
        <div class="alert alert-danger">يرجى الحاق الصورة</div>
    @enderror

    <input type="text" name="price" placeholder="Enter New price" class="form-input">
    @error('price')
        <div class="alert alert-danger">يرجى ادخال السعر </div>
    @enderror
    <input type="text" name="title" placeholder="Enter New title" class="form-input">
    @error('title')
        <div class="alert alert-danger">يرجى ادخال العنوان </div>
    @enderror
    <input type="text" name="description" placeholder="Enter New description" class="form-input">
    @error('description')
        <div class="alert alert-danger">الحد الاقصى 400 حرف</div>
    @enderror
     {{-- <input type="file" name="instruct_img" class="form-input">
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
    @enderror --}}

    <button class="btn btn-primary" type="submit">Save</button>
</form>
@endsection


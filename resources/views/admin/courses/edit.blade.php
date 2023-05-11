@extends("admin.layouts.master")
@section("content")
@if (Session::has('success'))
<div class="alert alert-primary">{{ Session::get('success') }}</div>
@endif
<form action="{{ route('courses.update',$course->id) }}" method="POST" enctype="multipart/form-data" class="form-group">
    @csrf
    @method('PUT')
    <input type="file" name="img_course"   class="form-input">
    @error('img_course')
        <div class="alert alert-danger">يرجى الحاق الصورة</div>
    @enderror

    <input type="text" name="price" value="{{ $course->price }}"  placeholder="Enter New price" class="form-input">
    @error('price')
        <div class="alert alert-danger">يرجى ادخال السعر </div>
    @enderror
    <input type="text" name="title" value="{{ $course->title}}"  placeholder="Enter New title" class="form-input">
    @error('title')
        <div class="alert alert-danger">يرجى ادخال العنوان </div>
    @enderror
    <input type="text" name="description"  value="{{ $course->description }}" placeholder="Enter New description" class="form-input">
    @error('description')
        <div class="alert alert-danger">الحد الاقصى 400 حرف</div>
    @enderror
    <button class="btn btn-primary" type="submit">Save</button>
</form>
@endsection

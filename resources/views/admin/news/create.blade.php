@extends('admin.layouts.master')

@section('content')
    @if (Session::has('success'))
        <div class="alert alert-primary">{{ Session::get('success') }}</div>
    @endif

    <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data" class="form-group">
        @csrf

        <input type="text" name="day" placeholder="Enter New day" class="form-input">
        @error('day')
            <div class="alert alert-danger">يرجى ادخال اليوم</div>
        @enderror

        <input type="text" name="month" placeholder="Enter New month" class="form-input">
        @error('month')
            <div class="alert alert-danger">يرجى ادخال الشهر</div>
        @enderror


        <input type="text" name="year" placeholder="Enter New year" class="form-input">
        @error('year')
            <div class="alert alert-danger">يرجى ادخال السنه</div>
        @enderror


        <input type="text" name="title" placeholder="Enter New title" class="form-input">
        @error('title')
            <div class="alert alert-danger">يرجى ادخال العنوان</div>
        @enderror



        <input type="file" name="image" class="form-input">
        @error('image')
            <div class="alert alert-danger">يرجى الحاق الصورة</div>
        @enderror

        <textarea id="" name="description" cols="30" class="form-input" rows="10"
            placeholder="Enter Description New"></textarea>
        @error('description')
            <div class="alert alert-danger">الحد الاقصى 400 حرف</div>
        @enderror
        <button class="btn btn-danger" type="submit">Save</button>
    </form>
@endsection

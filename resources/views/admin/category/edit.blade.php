@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="com-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center"><b>Edit Category - {{$category->category_title}}</b></h2>
                    </div>
                <div class="card-body">
                @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                        <div class="col-md-12">
                        <div class="form-group mb-2">
                                    <label for="title">Category Title*</label>
                                    <input type="text" class="form-control @error('category_title') is-invalid @enderror"
                                        id="title" name="category_title" placeholder="Enter Category Title"
                                        value="{{ $category->category_title }}" required />

                                    @error('category_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        </div>
                        <div class="col-md-12">
                        <div class="form-group">
                            <label for="image">Category Image<span class="text-danger">*</span></label>
                            <input type="file" class="form-control  @error('category_image') is-invalid @enderror" id="image" name="category_image"
                                placeholder="Enter Category image"/>
                                @if($category->category_image!=null)
                                <img src="{{ asset('uploads/category/' . $category->category_image) }}"
                                            class="img-responsive img-fluid" width="150" height="150" />
                                    @else
                                        <span class="text-danger">Image not available</span>
                                    @endif
                                @error('category_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                       </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="status">Status<span class="text-danger">*</span></label>
                            <select name="status" id="status" class="form-control  @error('status') is-invalid @enderror" required>
                                <option value="active" <?php if ($category->status=='active'){
                                    echo 'selected';
                                    }?>>🟢</option>
                                <option value="inactive"<?php if ($category->status=='inactive'){
                                    echo 'selected';
                                    }?>>🔴</option>
                            </select>
                            @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                         </div>
                        <div class="form-group">
                            <label for="category_description">Description</label>
                            <textarea  name="category_description" id="category" cols="30" rows="10" class="form-control  @error('category_description') is-invalid @enderror">{{$category->category_description}}</textarea>
                            @error('category_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Save changes">
                        </div>
</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection 
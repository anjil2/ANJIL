@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="com-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center"><b>Manage Category</b></h2>
                            <div class="col-md-12 text-end">
                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#addCategoryModal">Add Category</button>
                            </div>
                    </div>
                <div class="card-body">
                @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                    <div class="border">
                        <table class="table table-stripped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Created Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $item)
                                <?php
                                    // dd($item);
                                    ?>
                                <tr>
                                    <td>{{$item->id}}</td>
                                    
                                    <td>
                                    @if ($item->category_image != null)
                                                <img src="{{ asset('uploads/category/' . $item->category_image) }}"
                                                    class="img-responsive img-fluid" width="150" height="150" />
                                            @else
                                                <span class="text-danger">Image not available</span>
                                            @endif</td>
                                            <td>{{ $item->category_title }}</td>
                                    <td class="text-success">
                                        @if($item->status=='active')
                                        🟢
                                        @else
                                        🔴
                                        @endif
                                    </td>
                                    <td>{{$item->created_at->format('M d, Y')}}</td>
                                    <td>
                                        <a href="" class="btn btn-success btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                               @endforeach
                            </tbody>
                        </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Modal -->
     <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class=" col-md-6 text-end modal-title fs-5" id="addCategoryModalLabel"><b>Add Category</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="{{ route('admin.postAddCategory') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                               <label for="title">Category Title<span class="text-danger">*</span></label>
                              <input type="text" class="form-control @error('category_title') is-invalid @enderror" id="title" name="category_title"
                                placeholder="Enter Category Title" value="{{old('category_title')}}">
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
                                placeholder="Enter Category Title"/>
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
                            <select name="status" id="status" class="form-control  @error('status') is-invalid @enderror" >
                                <option value="active">🟢</option>
                                <option value="hidden">🔴</option>
                            </select>
                            @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                         </div>
                         <div class="col-md-6">
                        <div class="form-group">
                            <label for="status">Created Date<span class="text-danger">*</span></label>
                            <input type="date" class="form-control  @error('created_date') is-invalid @enderror">
                            @error('created_at')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                         </div>
                        <div class="form-group">
                            <label for="category_description">Description</label>
                            <textarea  name="category_description" id="category" cols="30" rows="10" class="form-control  @error('category_description') is-invalid @enderror">{{old('category_description')}}</textarea>
                            @error('category_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Save hanges">
                        </div>
</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection 
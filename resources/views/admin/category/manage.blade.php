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
                    <div class="border">
                        <table class="table table-stripped">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Created Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img src="{{asset('site/image/watch.png')}}" alt="watch"  style="width:50px;"></td>
                                    <td>Smart Watch</td>
                                    <td class="text-success">
                                        🟢
                                    </td>
                                    <td>20 May, 2023</td>
                                    <td>
                                        <a href="" class="btn btn-success btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><img src="{{asset('site/image/watch.png')}}" alt="watch"  style="width:50px;"></td>
                                    <td>Laptop</td>
                                   
                                    <td class="text-danger">
                                        🔴
                                    </td>

                                    <td>20 May, 2023</td>
                                    <td>
                                        <a href="" class="btn btn-success btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
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
                    <form action="">
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                               <label for="title">Category Title<span class="text-danger">*</span></label>
                              <input type="text" class="form-control" id="title" name="category_title"
                                placeholder="Enter Category Title" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                        <div class="form-group">
                            <label for="image">Category Image<span class="text-danger">*</span></label>
                            <input type="file" class="form-control" id="image" name="category_image"
                                placeholder="Enter Category Title" required>
                        </div>
                       </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="status">Status<span class="text-danger">*</span></label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="active">🟢</option>
                                <option value="hidden">🔴</option>
                            </select>
                        </div>
                         </div>
                         <div class="col-md-6">
                        <div class="form-group">
                            <label for="status">Created Date<span class="text-danger">*</span></label>
                            <input type="date" class="form-control">
                        </div>
                         </div>
                        <div class="form-group">
                            <label for="category_description">Description</label>
                            <textarea name="category_description" id="category_description" cols="30" rows="10" class="form-control"></textarea>
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
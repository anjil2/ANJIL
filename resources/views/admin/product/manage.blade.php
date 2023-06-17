@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="com-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center"><b>Manage Product</b></h2>
                            <div class="col-md-12 text-end">
                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#addProductModal">Add Product</button>
                            </div>
                    </div>
                <div class="card-body">
                    <div class="border">
                        <table class="table table-stripped">
                                <tr>
                                    <th>SN</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Stock</th>
                                    <th>Origial Cost</th>
                                    <th>Discounted Cost</th>
                                    <th>Status</th>
                                    <th>Created Date</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Image xa hai</td>
                                    <td>Smart Watch</td>
                                    <td>Watch</td>
                                    <td>
                                25
                                    </td>
                                    <td>$1200</td>
                                    <td>$1150</td>
                                    <td class="text-success">🟢</td>
                                    <td>20 may, 2100</td>
                                    <td>
                                        <a href="" class="btn btn-success btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Image xa hai</td>
                                    <td>Smart Watch</td>
                                    <td>Laptop</td>
                                    <td>20</td>
                                    <td>$255</td>
                                    <td>$248</td>
                                    <td>
                                        <span class="text-danger">🔴</span>
                                    </td>
                                    <td>20 May, 2023</td>
                                    <td>
                                        <!-- <a href="" class="btn btn-success btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Delete</a> -->
                                        <button class="btn btn-success btn-sm">Edit</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                        </table>
                    </div>
                </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="col-md-6 text-end modal-title fs-5" id="addProductModalLabel"><b>Add Product</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="title">Product Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="title" name="product_title"
                                        placeholder="Enter Category Title" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image">Product Image<span class="text-danger">*</span></label>
                                    <input type="file" class="form-control" id="image" name="product_image"
                                        placeholder="Enter Category Title" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="category_id">Category<span class="text-danger">*</span></label>
                                    <select name="category_id" id="category_id" class="form-control" required>
                                        <option class="text-center" value="">Choose Category</option>
                                        <option value="1">Laptop</option>
                                        <option value="2">Hedphone</option>
                                    </select>
                                </div>
                            </div>
                           
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="status">Status<span class="text-danger">*</span></label>
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="active">🟢</option>
                                        <option value="hidden">🔴</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                 <label for="creared_at">Created Date<span class="text-danger">*</span></label>
                                 <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="stock">Stock<span class="text-danger">*</span></label>
                                    <input type="number" name="stock" id="stock" class="form-control" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="orginal_cost">Orginal Cost<span class="text-danger">*</span></label>
                                    <input type="number" name="orginal_cost" id="orginal_cost" class="form-control"
                                        required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-2">
                                    <label for="discounted_cost">Discounted Cost<span class="text-danger">*</span></label>
                                    <input type="number" name="discounted_cost" id="discounted_cost" class="form-control"
                                        required />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label for="category_description">Description</label>
                                    <textarea name="category_description" id="category_description" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Save changes">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
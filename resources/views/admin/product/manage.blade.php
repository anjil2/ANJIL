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
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <div class="border">
                                <table class="table table-stripped">
                                    <tr>
                                        <th>Sn</th>
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
                                    @foreach ($products as $item)
                                        <?php
                                        // dd($item);
                                        ?>
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                @if ($item->product_image != null)
                                                    <img src="{{ asset('uploads/product/' . $item->product_image) }}"
                                                        class="img-responsive img-fluid" width="150" height="150" />
                                                @else
                                                    <span class="text-danger">Image not available</span>
                                                @endif
                                            </td>
                                            <td>{{ $item->product_title }}</td>

                                            <td>{{ $item->category->category_title }}</td>
                                            <td>{{ $item->product_stock }}</td>
                                            <td>${{ $item->orginal_cost }}</td>
                                            <td>${{ $item->discounted_cost }}</td>
                                            <td class="text-success">
                                                @if ($item->status == 'active')
                                                    🟢
                                                @else
                                                    🔴
                                                @endif
                                            </td>
                                            <td>{{ $item->created_at->format('M d, Y') }}</td>
                                            <td>
                                                <a href="{{ route('admin.getEditProduct', $item->slug) }}"
                                                    class="btn btn-success btn-sm">Edit</a>
                                                <a href="{{ route('admin.getDeleteProduct', $item->slug) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach

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
                    <form action="{{ route('admin.postAddProduct') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="title">Product Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('category_title') is-invalid @enderror"
                                        id="title" name="product_title" placeholder="Enter Category Title">
                                    @error('category_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image">Product Image<span class="text-danger">*</span></label>
                                    <input type="file" class="form-control @error('product_image') is-invalid @enderror"
                                        id="image" name="product_image" placeholder="Enter Category Title" />
                                    @error('product_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="category_id">Category*</label>
                                    <select name="category_id" id="category_id"
                                        class="form-control @error('product_image') is-invalid @enderror" required>
                                        <option value="" class="text-center">Choose Category</option>
                                        <!-- <option value="1">Laptop</option>
                                            <option value="2">Hedphone</option> -->
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_title }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="status">Staus<span class="text-danger">*</span></label>
                                    <select name="status" id="status"
                                        class="form-control @error('status') is-invalid @enderror" required>
                                        <option value="active">🟢</option>
                                        <option value="inactive">🔴</option>
                                    </select>
                                    @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="product_stock">Stock<span class="text-danger">*</span></label>
                                    <input type="number" name="product_stock" id="product_stock"
                                        class="form-control @error('product_stock') is-invalid @enderror" required />
                                    @error('product_stock')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="orginal_cost">Orginal Cost<span class="text-danger">*</span></label>
                                    <input type="number" name="orginal_cost" id="orginal_cost"
                                        class="form-control @error('orginal_cost') is-invalid @enderror" required />
                                    @error('orginal_cost')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-2">
                                    <label for="discounted_cost">Discounted Cost<span class="text-danger">*</span></label>
                                    <input type="number" name="discounted_cost" id="discounted_cost"
                                        class="form-control @error('discounted_cost') is-invalid @enderror" required />
                                    @error('discounted_cost')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label for="product_description">Description</label>
                                    <textarea name="product_description" id="product_description" cols="30" rows="10"
                                        class="form-control  @error('product_description') is-invalid @enderror"></textarea>
                                    @error('product_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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

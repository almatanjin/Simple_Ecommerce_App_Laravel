<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <b>Categories</b>

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <div class="card">


                        @if(session('success'))

                        
                        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                             <strong>{{ session('success')}}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
                        </div>

                        @endif
                        <div class="card-header">
                            All Categoty
                        </div>

                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Created At</th>
                                </tr>
                            </thead>
                            <tbody>




                            @foreach($categories as $categories)


                                <tr>
                                    <th scope="row">{{$categories->id}}</th>
                                    <td>{{$categories->category_name}}</td>
                                    <td>{{$categories->user_id}}</td>
                                    <td>{{$categories->created_at->diffForHumans()}}</td>
                                </tr>

                                @endforeach


                            </tbody>
                        </table>
                        
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Add Categoty
                        </div>
                        <div class="card-body">
                            <form action="{{route('store.category')}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label"></label>
                                    <input type='text' class="form-control" name="category_name">
                                    @error('category_name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <button class="btn btn-light">Add Category</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <b>Categories</b>

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
  

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Edit Categoty
                        </div>
                        <div class="card-body">
                            <form action="{{route('store.category')}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label"></label>
                                    <input type='text' class="form-control" name="category_name" value="{{$categories->category_name}}">
                                    @error('category_name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <button class="btn btn-light">Save</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
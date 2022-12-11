<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div >{{ Auth::user()->name }}
            <Total style="float: right;" >Total Users: 
            <span >{{count($users)}}</span>
</b>
</div>
            
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
           <div class="row">
           <table class="table table-dark table-striped" >
           <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Created At</th>
    </tr>
  </thead>
  <tbody>

     @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->created_at->diffForHumans()}}</td>
    </tr>

    @endforeach
  </tbody>
           </table>
           </div>
        </div>
    </div>
</x-app-layout>

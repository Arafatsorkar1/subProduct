@extends('master')

@section('body')

<section class="py-5">
    <div class="container">


        <div class="card">
            <div class="card-header">
               <span class="text-center">
                   Hospital
               </span>
            </div>
            <div class="card-body">
                @if (Session::get('msg'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ Session::get('msg') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="{{route('categorys.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 text-end">Hospital :</div>
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control">
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-4 text-end">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>

                    </div>
                </form>

            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="card">
            <div class="card-header">
               <span class="text-center">
                 Manage  Hospital
               </span>
            </div>
            <div class="card-body">
               <table id="example" class="table table-hover table-striped table-bordered">

                   <thead>
                   <tr>
                       <th width="10%">sl</th>
                       <th width="70%">Name</th>
                       <th width="20%">Action</th>
                   </tr>
                   </thead>

                   <tbody>
                   @foreach($hospitals as $hospital)
                   <tr>
                       <td>{{$loop->iteration}}</td>
                       <td>{{$hospital->name}}</td>
                       <td>
                           <a href="javascript:void(0)" onclick="confirmDelete({{$hospital->id}})" class="btn btn-danger btn-sm">
                               <i class="fa-solid fa-trash"></i>
                           </a>
                           <form id="confirmDelete{{$hospital->id}}" action="{{route('categorys.destroy',$hospital->id) }}" method="post">
                               @csrf
                               @method('delete')
                           </form>

                       </td>
                   </tr>
                       @endforeach
                   </tbody>
               </table>
            </div>
        </div>

    </div>
</section>


@endsection

@extends('master')


@section('body')


    <section class="py-5">
        <div class="container">
            <div class="card">
                <div class="card-header">
               <span class="text-center">
                    <div class="d-flex">


<span>
    <a href="{{route('categorys.index')}}" class="btn btn-info">Hospital List</a>
</span>

                     </div>
               </span>
                </div>
                <div class="card-body">
                    @if (Session::get('msg'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ Session::get('msg') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form action="{{route('categorys.update', $hospital->id)}}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="row">

                            <div class="col-md-4 text-end">Hospital :</div>
                            <div class="col-md-6">
                                <input type="text" name="name" value="{{$hospital->name}}" class="form-control">
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-4 text-end">
                                <button type="submit" class="btn btn-info">Update</button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>

        </div>
    </section>
@endsection

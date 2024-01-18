@extends('master')

@section('body')


    <section class="py-5">
        <div class="container">
            <div class="card">
                <div class="card-header">
               <span class="text-center">
                   <a href="{{route('deparments.create')}}" class="btn btn-info">back</a>
               </span>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-hover table-striped table-bordered">

                        <thead>
                        <tr>
                            <th width="10%">sl</th>
                            <th width="30%">Hospital</th>
                            <th width="40%">Department</th>
                            <th width="20%">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($hospitals as $hospital)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{optional($hospital->hospital)->name}}</td>
                                <td>{{ $hospital->department }}</td>
                                <td>
                                    <a href="javascript:void(0)" onclick="confirmDelete({{$hospital->id}})" class="btn btn-danger btn-sm">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                    <form id="confirmDelete{{$hospital->id}}" action="{{route('deparments.destroy',$hospital->id) }}" method="post">
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

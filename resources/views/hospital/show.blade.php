@extends('master')

@section('body')


    <section class="py-5">
        <div class="container">
            <div class="card">
                <div class="card-header">
               <span class="text-center">

               </span>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-hover table-striped table-bordered">

                        <thead>
                        <tr>
                            <th width="10%">sl</th>
                            <th width="70%">Hospital</th>
                            <th width="20%">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($hospitals as $hospital)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$hospital->name}}</td>
                                <td>

                                    <a href="{{ route('categorys.show', $hospital->id) }}" class="btn btn-info btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>


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

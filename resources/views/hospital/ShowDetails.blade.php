@extends('master')

@section('body')


    <section class="py-5">
        <div class="container">
            <div class="card">
                <div class="card-header">
               <span class="text-center">
                 <span class="font-weight-bolder">{{$hospital->name}}</span>
               </span>
                </div>
                <div class="card-body">

                    <div class="row">
                        @foreach($departments as $department)
                        <div class="col-md-3 mt-2">
                            <div class="card-border bg-dark rounded text-center" style="color: white">{{$department->department}}</div>
                        </div>
                        @endforeach
                    </div>


                </div>
            </div>
        </div>
    </section>

@endsection

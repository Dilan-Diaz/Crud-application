@extends('students.layout')
@section('content')

    <div class="row">
 
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Students Details</h2>
            </div>
        
            <div class="pull-right">
            <a class="btn btn-primary" href="{{route('students.index')}}">Back</a>
            </div>
        </div>
    </div>

        @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Oops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)

                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                    
                </div>
            @endif
                                          
                <form action="{{ route('students.update',$student->id) }}" method="POST">
                              
                    @csrf

                    @method('PUT')

                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12">

                            <div class="form-group">
                                <strong>StudentName:</strong>
                                <input type="text" name="studname" value="{{ $student->studname }}" class="form-control" placeholder="Name">
                            </div>

                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">

                            <div class="form-group">
                                <strong>Email:</strong>
                                <input type="text" name="studemail" value="{{ $student->studemail }}" class="form-control" placeholder="Email">
                            </div>

                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">

                            <div class="form-group">
                                <strong>Country:</strong>
                                <input type="text" name="studcountry" value="{{ $student->studcountry }}" class="form-control" placeholder="Country">
                            </div>

                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">

                            <div class="form-group">
                                <strong>Telephone:</strong>
                                <input type="text" name="studtelephone" value="{{ $student->studtelephone }}"class="form-control" placeholder="Telephone">
                            </div>

                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </div>

                </form>

                @endsection
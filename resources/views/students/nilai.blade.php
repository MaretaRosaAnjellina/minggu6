@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header" align="center"><b>{{ __('JURUSAN TEKNOLOGI INFORMASI POLITEKNIK NEGERI MALANG') }}</b></div>

            <h4 align="center">STUDENT REPORT</h4>
 Name: {{ $student->name }} <br>
 NIM: {{ $student->nim }} <br>
 Class : {{ $student->kelas->class_name }} <br><br>
 <table class="table table-responsive table-striped">
 <thead>
 <tr>
 <th>Course Name</th>
 <th>Semester</th>
 <th>SKS</th>
 <th>Score</th>
 </tr>
 </thead>
 <tbody>
 @foreach ($student->courses as $sc)
 <tr>
 <td>{{ $sc->course_name }}</td>
 <td>{{ $sc->semester }}</td>
 <td>{{ $sc->sks }}</td>
 <td>{{$sc->pivot->nilai}}</td>
 </tr>
 @endforeach
 </tbody>
 </table>
 <a href="/students/{{$student->id}}/report" class="btn btnprimary" target="_blank">PRINT PDF</a>


            </div>
        </div>
    </div>
</div>
@endsection
@extends('layout.master')
@section('content')
    <div class="col-md-12" style="min-height: 70vh">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="rose">
                <i class="material-icons">assignment</i>
            </div>
            <div class="card-content">
                <h4 class="card-title">{{ $title }}</h4>
            </div>
            <div class="card-content">
                <form action="{{ route('students.update', $student) }}" method="post">
                    @csrf
                    <div class="form-group">
                        Name
                        <input type="text" name="name" value="{{ $student->name }}">
                    </div>
                    <div class="form-group">
                        <br>
                        Gender
                        <input type="radio" name="gender" value="1" checked>Nam
                        <input type="radio" name="gender" value="0">Nữ
                    </div>
                    <br>
                    <div class="form-group">
                        Birth Date
                        <input type="date" name="birthdate">
                        <br>
                    </div>
                    <div class="form-group">
                        Status
                        <br>
                        @foreach ($arrEnum as $option => $value)
                            <input type="radio" name="status" value="{{ $value }}"
                                @if ($loop->first) checked @endif>
                            {{ $option }} <br>
                        @endforeach
                    </div>
                    <div class="form-group">
                        Courses
                        <select name="course_id">
                            @foreach ($courses as $each)
                                <option value="{{ $each->id }}">{{ $each->name }}</option>
                            @endforeach
                        </select>
                        <br>
                    </div>
                    <button>Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('project.layouts.app')
@section('content')
    <form action="{{ route('projects.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <!-- Project Information -->
        <label for="project_title">Project Title:</label>
        <input type="text" name="project_title" required>

        <label for="department_office">Department/Office:</label>
        <input type="text" name="department_office" required>

        <label for="project_description">Project Description:</label>
        <textarea name="project_description" required></textarea>

        <label for="person_in_charge">Person in Charge:</label>
        <input type="text" name="person_in_charge" required>

        <label for="project_date">Project Date:</label>
        <input type="date" name="project_date" required>

        <!-- Document Inputs -->
        <h2>Document Inputs:</h2>
        <p>Upload the specified files:</p>
        <ul>
            @foreach($documentInputs as $inputName)
                <li>
                    {{ $inputName }}
                    <input type="file" name="other_files[]">
                </li>
            @endforeach
        </ul>

        <!-- Other Files -->
        <h2>Other Files:</h2>
        <p>Upload additional files:</p>
        <input type="file" name="other_files[]">
        <input type="text" name="other_files_names[]" placeholder="Enter name">

        <button type="submit">Create Project</button>
    </form>
@endsection
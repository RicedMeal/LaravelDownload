@extends('project.layouts.app')

@section('content')
    <form action="{{ route('projects.update', $project) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <!-- Project Information -->
        <label for="project_title">Project Title:</label>
        <input type="text" name="project_title" value="{{ $project->project_title }}" required>

        <label for="department_office">Department/Office:</label>
        <input type="text" name="department_office" value="{{ $project->department_office }}" required>

        <label for="project_description">Project Description:</label>
        <textarea name="project_description" required>{{ $project->project_description }}</textarea>

        <label for="person_in_charge">Person in Charge:</label>
        <input type="text" name="person_in_charge" value="{{ $project->person_in_charge }}" required>

        <label for="project_date">Project Date:</label>
        <input type="date" name="project_date" value="{{ $project->project_date }}" required>

        <!-- Document Inputs -->
        <h2>Document Inputs:</h2>
        <p>Upload the specified files:</p>
        <ul>
            @foreach($project->documentInputs as $documentInput)
                <li>
                    {{ $documentInput->input_name }}
                    <input type="file" name="other_files[]">
                    <input type="text" name="other_files_names[]" value="{{ $documentInput->input_name }}" placeholder="Enter name">
                </li>
            @endforeach
        </ul>

        <button type="submit">Update Project</button>
    </form>
@endsection
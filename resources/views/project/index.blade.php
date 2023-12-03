@extends('project.layouts.app')

@section('content')
    <h1>Projects</h1>

    <a href="{{ route('projects.create') }}">Create New Project</a>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Project Title</th>
                <th>Department/Office</th>
                <th>Person in Charge</th>
                <th>Project Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->project_title }}</td>
                    <td>{{ $project->department_office }}</td>
                    <td>{{ $project->person_in_charge }}</td>
                    <td>{{ $project->project_date }}</td>
                    <td>
                        <a href="{{ route('projects.edit', $project) }}">Edit</a>
                        <form action="{{ route('projects.destroy', $project) }}" method="post" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No projects found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
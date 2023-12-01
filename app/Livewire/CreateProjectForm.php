<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Projects;
class CreateProjectForm extends Component
{
    public $project_title;
    public $department_office;
    public $project_description;
    public $person_in_charge;
    public $project_date;

    public function render()
    {
        return view('livewire.Projects.create-project');
    }

    public function submitForm()
    {
        $validatedData = $this->validate([
            'project_title' => 'required|max:75',
            'department_office' => 'required|max:75',
            'project_description' => 'required|max:75',
            'person_in_charge' => 'required|max:75',
            'project_date' => 'required|date'
        ]);
        // If validation passes, continue with the logic
        // Save the data to the database using Eloquent
        Projects::create([
            'project_title' => $validatedData['project_title'],
            'department_office' => $validatedData['department_office'],
            'project_description' => $validatedData['project_description'],
            'person_in_charge' => $validatedData['person_in_charge'],
            'project_date' => $validatedData['project_date'],
        ]);

        // Optionally, you can show a success message or redirect the user
        session()->flash('success', 'Project created successfully!');
        return redirect()->to('/projects'); // Redirect to the projects page or any other route
    }
}


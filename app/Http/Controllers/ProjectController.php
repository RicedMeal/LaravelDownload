<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\DocumentInput;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('documentInputs')->get();
        return view('project.index', compact('projects'));
    }

    public function create()
    {
        $documentInputs = [
            'market_study_file',
            'purchase_request_file',
            'rfq_file',
            'abstract_of_canvass_file',
            'materials_and_cost_estimates_file',
            'budget_utilization_request_file',
            'project_initiation_proposal_file',
            'annual_procurement_plan_file',
            'purchase_request_number_file',
            'certificate_of_fund_allotment_file',
            'csw_file',
            'supplementary_document_file',
        ];

        return view('project.create', compact('documentInputs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'project_title' => 'required',
            'department_office' => 'required',
            'project_description' => 'required',
            'person_in_charge' => 'required',
            'project_date' => 'required|date',
            'other_files.*' => 'file|mimes:pdf', // Adjust file validation as needed
            'other_files_names.*' => 'required',
        ]);

        $project = Project::create($request->except('_token'));

        $documentInputs = [
            'market_study_file',
            'purchase_request_file',
            'rfq_file',
            'abstract_of_canvass_file',
            'materials_and_cost_estimates_file',
            'budget_utilization_request_file',
            'project_initiation_proposal_file',
            'annual_procurement_plan_file',
            'purchase_request_number_file',
            'certificate_of_fund_allotment_file',
            'csw_file',
            'supplementary_document_file',
        ];

        foreach ($documentInputs as $inputName) {
            $project->documentInputs()->create([
                'input_name' => $inputName,
            ]);
        }

        // Upload other files
        if ($request->hasFile('other_files')) {
            foreach ($request->file('other_files') as $index => $file) {
                $fileContent = file_get_contents($file->getRealPath());
                $inputName = $request->input("other_files_names.$index");

                $project->documentInputs()->create([
                    'input_name' => $inputName,
                    'file_content' => $fileContent,
                ]);
            }
        }

        return redirect()->route('project.index')->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        return view('project.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'project_title' => 'required',
            'department_office' => 'required',
            'project_description' => 'required',
            'person_in_charge' => 'required',
            'project_date' => 'required|date',
            'other_files.*' => 'file|mimes:pdf', // Adjust file validation as needed
            'other_files_names.*' => 'required',
        ]);

        $project->update($request->except(['_token', '_method']));

        foreach ($project->documentInputs as $documentInput) {
            $index = array_search($documentInput->input_name, $request->other_files_names);

            if ($index !== false && $request->hasFile("other_files.$index")) {
                $fileContent = file_get_contents($request->file("other_files.$index")->getRealPath());

                $documentInput->update([
                    'file_content' => $fileContent,
                ]);
            }
        }

        return redirect()->route('project.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('project.index')->with('success', 'Project deleted successfully.');
    }
}

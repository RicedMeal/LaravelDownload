<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Projects;
use App\Models\DocumentInputs;

class CreateProjectForm extends Component
{
    //first form @livewire('create-project-form')   
    public $step = 1;

    public $project_title;
    public $department_office;
    public $project_description;
    public $person_in_charge;
    public $project_date;

    //second form after next button @livewire('create-project-form')    
    public $project_title_di;
    public $document_title;
    public $purchase_request_form;
    public $rfq_form;
    public $abstract_of_canvass_form;
    public $purchase_request_file;
    public $rfq_file;   
    public $abstract_of_canvass_file;
    public $materials_and_cost_estimates_file;
    public $budget_utilization_request_file;
    public $project_initiation_proposal_file;
    public $annual_procurement_plan_file;
    public $purchase_request_number_file;
    public $market_study_file;
    public $certificate_of_fund_allotment_file;
    public $csw_file;
    public $supplementary_document_file;

    public function render()
    {
        return view('livewire.Projects.create-project');
    }

    public function nextButton()
    {
        $validatedData = $this->validate([
            'project_title' => 'required|max:75',
            'department_office' => 'required|max:75',
            'project_description' => 'required|max:75',
            'person_in_charge' => 'required|max:75',
            'project_date' => 'required|date',
        ]);
        //validation error for debugging
        if ($this->errors->any()) {
            dd($this->errors->all());
        }

        Projects::create($validatedData);

        $this->step = 2;
    }
    //validation for document inputs
    public function submitForm()
    {
        $validatedData = $this->validate([
            'project_title_di' => 'required|max:75',
            'document_title' => 'required|max:75',
            'purchase_request_form' => 'required|file|mimes:pdf,doc,docx|max:1024',
            'rfq_form' => 'required|file|mimes:pdf,doc,docx|max:1024',
            'abstract_of_canvass_form' => 'required|file|mimes:pdf,doc,docx|max:1024',
            'purchase_request_file' => 'required|file|mimes:pdf,doc,docx|max:1024',
            'rfq_file' => 'required|file|mimes:pdf,doc,docx|max:1024',
            'abstract_of_canvass_file' => 'required|file|mimes:pdf,doc,docx|max:1024',
            'materials_and_cost_estimates_file' => 'required|file|mimes:pdf,doc,docx|max:1024',
            'budget_utilization_request_file' => 'required|file|mimes:pdf,doc,docx|max:1024',
            'project_initiation_proposal_file' => 'required|file|mimes:pdf,doc,docx|max:1024',
            'annual_procurement_plan_file' => 'required|file|mimes:pdf,doc,docx|max:1024',
            'purchase_request_number_file' => 'required|file|mimes:pdf,doc,docx|max:1024',
            'market_study_file' => 'required|file|mimes:pdf,doc,docx|max:1024',
            'certificate_of_fund_allotment_file' => 'required|file|mimes:pdf,doc,docx|max:1024',
            'csw_file' => 'required|file|mimes:pdf,doc,docx|max:1024',
            'supplementary_document_file' => 'required|file|mimes:pdf,doc,docx|max:1024',
        ]);
        //to process the multiple file upload
        $validatedData['purchase_request_form'] = $this->purchase_request_form->store('purchase_request_form');
        $validatedData['rfq_form'] = $this->rfq_form->store('rfq_form');
        $validatedData['abstract_of_canvass_form'] = $this->abstract_of_canvass_form->store('abstract_of_canvass_form');
        $validatedData['purchase_request_file'] = $this->purchase_request_file->store('purchase_request_file');
        $validatedData['rfq_file'] = $this->rfq_file->store('rfq_file');
        $validatedData['abstract_of_canvass_file'] = $this->abstract_of_canvass_file->store('abstract_of_canvass_file');
        $validatedData['materials_and_cost_estimates_file'] = $this->materials_and_cost_estimates_file->store('materials_and_cost_estimates_file');
        $validatedData['budget_utilization_request_file'] = $this->budget_utilization_request_file->store('budget_utilization_request_file');
        $validatedData['project_initiation_proposal_file'] = $this->project_initiation_proposal_file->store('project_initiation_proposal_file');
        $validatedData['annual_procurement_plan_file'] = $this->annual_procurement_plan_file->store('annual_procurement_plan_file');
        $validatedData['purchase_request_number_file'] = $this->purchase_request_number_file->store('purchase_request_number_file');
        $validatedData['market_study_file'] = $this->market_study_file->store('market_study_file');
        $validatedData['certificate_of_fund_allotment_file'] = $this->certificate_of_fund_allotment_file->store('certificate_of_fund_allotment_file');
        $validatedData['csw_file'] = $this->csw_file->store('csw_file');
        $validatedData['supplementary_document_file'] = $this->supplementary_document_file->store('supplementary_document_file'); 
        
        DocumentInputs::create($validatedData);

        //optional: success message after submit and redirect to a page
        session()->flash('message', 'Project Created Successfully.');
        return redirect()->to('/');
    }

}


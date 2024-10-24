@extends('layouts.app')
@section('title')Helpdesk - Update Ticket @endsection
@section('header')Helpdesk @endsection <!--pageheader-->
@section('active-header')Edit ticket @endsection <!--active pageheader-->

@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Edit Ticket</h5>
            <div class="card-body">
                <form action="{{ route('helpdesk.update', $ticket->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="subject" class="col-form-label">Subject</label>
                        <input id="subject" name="subject" type="text" class="form-control" value="{{ old('subject', $ticket->subject) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $ticket->description) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="department">Department</label>
                        <select class="form-control" id="department" name="department" required>
                            <option value="" {{ $ticket->department == '' ? 'selected' : '' }}>Select Department</option>
                            <option value="Recruitment" {{ $ticket->department == 'Recruitment' ? 'selected' : '' }}>Recruitment</option>
                            <option value="Training" {{ $ticket->department == 'Training' ? 'selected' : '' }}>Training and Development</option>
                            <option value="Compensation" {{ $ticket->department == 'Compensation' ? 'selected' : '' }}>Compensation and Benefits</option>
                            <option value="EmployeeRelations" {{ $ticket->department == 'EmployeeRelations' ? 'selected' : '' }}>Employee Relations</option>
                            <option value="OrganizationalDevelopment" {{ $ticket->department == 'OrganizationalDevelopment' ? 'selected' : '' }}>Organizational Development</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="priority">Priority</label>
                        <select class="form-control" id="priority" name="priority" required>
                            <option {{ $ticket->priority == 'Low' ? 'selected' : '' }}>Low</option>
                            <option {{ $ticket->priority == 'Medium' ? 'selected' : '' }}>Medium</option>
                            <option {{ $ticket->priority == 'High' ? 'selected' : '' }}>High</option>
                            <option {{ $ticket->priority == 'Urgent' ? 'selected' : '' }}>Urgent</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" id="category" name="category" required>
                            <option value="" {{ $ticket->category == '' ? 'selected' : '' }}>Select Category</option>
                            
                            <!-- Recruitment Categories -->
                            <option class="Recruitment" value="Hiring Process" {{ $ticket->category == 'Hiring Process' ? 'selected' : '' }}>Hiring Process</option>
                            <option class="Recruitment" value="Onboarding" {{ $ticket->category == 'Onboarding' ? 'selected' : '' }}>Onboarding</option>
                            <option class="Recruitment" value="NewHire" {{ $ticket->category == 'NewHire' ? 'selected' : '' }}>New Hire Orientation</option>
                            
                            <!-- Training Categories -->
                            <option class="Training" value="Leadership Development" {{ $ticket->category == 'Leadership Development' ? 'selected' : '' }}>Leadership Development</option>
                            <option class="Training" value="Professional Development" {{ $ticket->category == 'Professional Development' ? 'selected' : '' }}>Professional Development</option>
                            <option class="Training" value="Training Request" {{ $ticket->category == 'Training Request' ? 'selected' : '' }}>Training Request</option>
                            
                            <!-- Compensation Categories -->
                            <option class="Compensation" value="Benefits Inquiry" {{ $ticket->category == 'Benefits Inquiry' ? 'selected' : '' }}>Benefits Inquiry</option>
                            <option class="Compensation" value="Compensation Review" {{ $ticket->category == 'Compensation Review' ? 'selected' : '' }}>Compensation Review</option>
                            <option class="Compensation" value="Payroll Discrepancy" {{ $ticket->category == 'Payroll Discrepancy' ? 'selected' : '' }}>Payroll Discrepancy</option>
                            
                            <!-- Employee Relations Categories -->
                            <option class="EmployeeRelations" value="Conflict Resolution" {{ $ticket->category == 'Conflict Resolution' ? 'selected' : '' }}>Conflict Resolution</option>
                            <option class="EmployeeRelations" value="Employee Complaints" {{ $ticket->category == 'Employee Complaints' ? 'selected' : '' }}>Employee Complaints</option>
                            <option class="EmployeeRelations" value="Workplace Issues" {{ $ticket->category == 'Workplace Issues' ? 'selected' : '' }}>Workplace Issues</option>
                            
                            <!-- Organizational Development Categories -->
                            <option class="OrganizationalDevelopment" value="Organizational Change" {{ $ticket->category == 'Organizational Change' ? 'selected' : '' }}>Organizational Change</option>
                            <option class="OrganizationalDevelopment" value="Restructuring" {{ $ticket->category == 'Restructuring' ? 'selected' : '' }}>Restructuring</option>
                            <option class="OrganizationalDevelopment" value="Cultural Transformation" {{ $ticket->category == 'Cultural Transformation' ? 'selected' : '' }}>Cultural Transformation</option>
                        </select>
                    </div>
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="customFile" name="file">
                        <label class="custom-file-label" for="customFile">Attach file</label>
                    </div>
                    <div class="form-group row text-right">
                        <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0 ml-auto">
                            <button type="submit" class="btn btn-space btn-primary">Update</button>
                            <a href="#" class="btn btn-space btn-secondary" onclick="window.history.back()">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    document.getElementById('department').addEventListener('change', function() {
        // Kunin ang napiling department
        var selectedDepartment = this.value;
        
        // Kunin ang lahat ng options sa category
        var categoryOptions = document.querySelectorAll('#category option');

        // I-loop ang mga options at itago o ipakita batay sa napiling department
        categoryOptions.forEach(function(option) {
            if (option.value === "") {
                option.style.display = "block"; // Palaging ipakita ang "Select Category"
            } else if (option.classList.contains(selectedDepartment)) {
                option.style.display = "block"; // Ipakita ang option kung ito ay kasama sa napiling department
            } else {
                option.style.display = "none"; // Itago ang option kung hindi ito kasama
            }
        });

        // I-reset ang category dropdown kung kinakailangan
        document.getElementById('category').value = ""; // I-reset ang category
    });
</script>
@endsection

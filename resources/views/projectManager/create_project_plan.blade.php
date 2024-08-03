<!DOCTYPE html>
<html lang="en">

@include('projectManager.css')

<body>
<div class="main-wrapper">

<!-- partial:partials/_sidebar.html -->
@include('projectManager.sidebar')
<!-- partial -->

<div class="page-wrapper">
    <!-- partial:partials/_navbar.html -->
    @include('projectManager.header')
    <div class="page-content" style="margin-left:100px">
        <div class="row profile-body">
            <!-- left wrapper end -->
            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-9 middle-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Create Project Plan</h6>
                                
                                <form class="forms-sample" method="POST" action="{{ url('add_new_project_plan') }}">
                                    @csrf
                                    <!-- Project Name -->
                                    <div class="mb-3">
                                        <label class="form-label">Project Name</label>
                                        <select class="form-control" id="project" name="project" required>
                                            <option value="" disabled selected>Select Project by clicking here </option>
                                           
                                            @foreach($projects as $project)
                                                <option value="{{ $project->id }}">{{ $project->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('project')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!-- Plan Details -->
                                    <div class="mb-3">
                                        <label for="plandetails" class="form-label">Plan Details</label>
                                        <textarea class="form-control" id="plandetails" name="plan_details" required></textarea>
                                        @error('plan_details')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!-- Status -->
                                    <div class="mb-3">
                                        <label for="status">Status</label>
                                        <select class="form-control" id="status" name="status" required>
                                            <option value="pending">Pending</option>
                                            <option value="in_progress">In Progress</option>
                                            <option value="completed">Completed</option>
                                        </select>
                                        @error('status')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!-- Start Date -->
                                    <div class="mb-3">
                                        <label for="start_date">Start Date</label>
                                        <input type="date" class="form-control" id="start_date" name="start_date" required>
                                        @error('start_date')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!-- End Date -->
                                    <div class="mb-3">
                                        <label for="end_date">End Date</label>
                                        <input type="date" class="form-control" id="end_date" name="end_date" required>
                                        @error('end_date')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!-- Deadline -->
                                    <div class="mb-3">
                                        <label for="deadline" class="form-label">Deadline</label>
                                        <input type="date" class="form-control" id="deadline" name="deadline" required>
                                        @error('deadline')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    <a href="{{ route('projectManager.dashboard') }}" class="btn btn-secondary">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- middle wrapper end -->
            <!-- right wrapper start -->
            <div class="d-none d-xl-block col-xl-3">
                <div class="row">
                </div> 
            </div>
            <!-- right wrapper end -->
        </div>
    </div>
    <!-- partial:partials/_footer.html -->
    @include('projectManager.footer')
    <!-- partial -->
</div>
</div>

<!-- core:js -->
@include('projectManager.js')

</body>
</html>

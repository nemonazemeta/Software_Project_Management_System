<!DOCTYPE html>
<html lang="en">

@include('developer.css')

<body>
<div class="main-wrapper">

    <!-- partial:partials/_sidebar.html -->
    @include('developer.sidebar')

    <!-- partial -->

    <div class="page-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('developer.header')

        <div class="page-content">
            <div class="table-responsive">
                <table class="table table-hover mb-1">
                    <thead>
                        <tr>
                            <th class="pt-0">S. NO</th>
                            <th class="pt-0">Project Name</th>
                            <th class="pt-0">Description</th>
                            <th class="pt-0">Status</th>
                            <th class="pt-0">Start Date</th>
                            <th class="pt-0">Deadline</th>
                            <th class="pt-0">Creator</th>
                            <th class="pt-0">Veiw</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $count = 0;
                        @endphp
                        @foreach($projects as $project)
                            @php
                                $count++;
                            @endphp
                            <tr>
                                <td>{{ $count }}</td>
                                <td>{{ $project->name }}</td>
                                <td>{!! Str::limit($project->description, 30) !!}</td>
                                <td>{{ $project->status }}</td>
                                <td>{{ $project->start_date }}</td>
                                <td>{{ $project->deadline }}</td>
                                <td>{{ $project->creator ? $project->creator->firstname : 'N/A' }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ url('view_project_details_developer', $project->id) }}">Deatils</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- partial:partials/_footer.html -->
        @include('developer.footer')
        <!-- partial -->
    </div>
</div>

<!-- core:js -->

@include('developer.js')

</body>
</html>

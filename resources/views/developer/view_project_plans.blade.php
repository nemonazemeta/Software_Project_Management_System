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


<<<<<<< HEAD
         <div class="page-content"  style="margin-left:100px">
=======
         <div class="page-content"  style="margin-left:50px">
>>>>>>> b260690166f437c962fb8f5a07530bce5cae6fac
         
         <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
<<<<<<< HEAD
                            <th class="pt-0">S. NO</th>
                            <th class="pt-0">Project Name</th>
                            <th class="pt-0">Description</th>
                            <th class="pt-0">Status</th>
                            <th class="pt-0">Deadline</th>
                            <th class="pt-0" v>Start Date</th>
                            <th class="pt-0">End Date</th>
                            <th class="pt-0">Category</th>
                            <th class="pt-0">Creator</th>
                            <th class="pt-0">Updater</th>
                            <th class="pt-0">Actions</th>
=======
                        <th class="pt-0">S. NO</th>
                        <th class="pt-0">Category Name</th>
                        <th class="pt-0">Description</th>
                        <th class="pt-0">Created By</th>
                        <th class="pt-0"> Select View Project Category</th>
>>>>>>> b260690166f437c962fb8f5a07530bce5cae6fac
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $count = 0;
                        @endphp
<<<<<<< HEAD
                        @foreach($projects as $project)
=======
                        @foreach($category as $datas)
>>>>>>> b260690166f437c962fb8f5a07530bce5cae6fac
                            @php
                                $count++;
                            @endphp
                            <tr>
                                <td>{{ $count }}</td>
<<<<<<< HEAD
                                <td>{{ $project->project_name }}</td>
                                <td>{!!Str::limit($project->description,30)!!}</td>
                                <td>{{ $project->status }}</td>
                                <td>{{ $project->deadline }}</td>
                                <td>{{ $project->start_date }}</td>
                                <td>{{ $project->end_date }}</td>
                                <td>{{ $project->category_id }}</td>
                                <td>{{ $project->creator ? $project->creator->firstname : 'N/A' }}</td>
                                <td>{{ $project->updater ? $project->updater->firstname : 'N/A' }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{url('view_details_project', ['id' => $project->id]) }}">view</a>
                                   
                                </td>
=======
                                <td>{{$datas->cat_name}}</td>
                                <td>{!! Str::limit($datas->description,30)!!}</td>
                                <td>{{ $datas->creator ? $datas->creator->firstname : 'N/A' }}</td>
                                

                      <td>
                        <a class="btn btn-info" href="{{url('view_projects_by_category_developer',$datas->id)}}">Select</a>
                      </td>
>>>>>>> b260690166f437c962fb8f5a07530bce5cae6fac
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
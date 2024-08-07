<!DOCTYPE html>
<html lang="en">
  @include('admin.css')

<body>
<div class="main-wrapper">

<!-- partial:partials/_sidebar.html -->
   @include('admin.sidebar')

<!-- partial -->

<div class="page-wrapper">
            
    <!-- partial:partials/_navbar.html -->
    
         @include('admin.header')  


         <div class="page-content"  style="margin-left:100px">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                  <thead>
                    <tr>
                      <th class="pt-0">S. NO</th>
                      <th class="pt-0">First Name</th>
                      <th class="pt-0">Last Name</th>
                      <th class="pt-0">Email</th>
                      <th class="pt-0">Phone</th>
                      <th class="pt-0">Gender</th>
                      <th class="pt-0">Role</th>
                      <th class="pt-0">View Detail</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $count = 0;
                    @endphp
                    @foreach($data as $datas)
                    @php
                        $count++;
                    @endphp
                    <tr>
                      <td>{{$count}}</td>
                      <td>{{$datas->firstname}}</td>
                      <td>{{$datas->lastname}}</td>
                      <td>{{$datas->email}}</td>
                      <td>{{$datas->phone}}</td>
                      <td>{{$datas->gender}}</td>
                      <td>{{$datas->getRoleNames()->first()}}</td>
                      <td>
                        <a class="btn btn-secondary"  href="{{url('view_employee_detail',$datas->id)}}">View</a>
                      </td>

                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
         </div>
         
			<!-- partial:partials/_footer.html -->
		@include('admin.footer')  
			<!-- partial -->
		</div>
	</div>

	<!-- core:js -->
	@include('admin.js')
    

</body>
</html>    


@extends('layouts.admin')
@section('title', 'People')
@section('content')
<div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
  <div class="app-header white bg b-b">
    <div class="navbar" data-pjax>
      <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
        <i class="ion-navicon"></i>
      </a>
      <div class="navbar-item pull-left h5" id="pageTitle">People</div>
      <!-- nabar right -->
 
      <!-- / navbar right -->
    </div>
  </div>

  <div class="app-body">

    <!-- ############ PAGE START-->
    <div class="padding">
      <div class="box">
        <div class="box-header">
          <a href="{{url('admin/people/create')}}"><button class="btn-sm btn-primary">Add</button></a>
        </div>
        <div class="box-body">
          Search: <input id="filter" type="text" class="form-control input-sm w-auto inline m-r"/>
        </div>
        <div>
          <table class="table m-b-none" data-ui-jp="footable" data-filter="#filter" data-page-size="5">
            <thead>
              <tr>
                <th data-toggle="true">
                  ID
                </th>
                <th>
                  Name
                </th>
                <th data-hide="phone,tablet">
                  Upload
                </th>
                <th data-hide="phone,tablet">
                  Link
                </th>
                <th data-hide="phone,tablet" data-name="Date Of Birth">
                  Group
                </th>
                <th data-hide="phone">
                  Status
                </th> 
                <th>Edit</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($people as $p)
              <tr>
                <td>{{$p->id}}</td>
                <td><a href="#">{{$p->name}}</a></td>
                <td>{{$p->thumbnail}}</td>
                <td>{{$p->link}}</td>
                <td data-value="78025368997">{{$p->group}}</td>
                <td data-value="1"><span class="label success" title="Active">Active</span></td>
                <td><a href="{{url('admin/people/edit',$p->id)}}"><button class="btn-sm btn-warning">Edit</button></a></td>
              </tr>
              @endforeach
            </tbody>
            <tfoot class="hide-if-no-paging">
              <tr>
                <td colspan="5" class="text-center">
                  <ul class="pagination"></ul>
                </td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
    <!-- ############ PAGE END-->
  </div>
</div>
@endsection
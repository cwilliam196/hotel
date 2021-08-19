@extends('layout.headerHome')

@section('title', 'User Management')

@extends('layout.sideBarHome')
    
@section('container')
<div class="container-fluid py-4">
  
  @if (session('status'))
  <div>
    <div class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
      <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
      <span class="alert-text text-white">{{session('status')}}</span>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
  </div>
  @endif

    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Table Users</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">name</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">email</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">email verified</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">role</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">created at</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $u)
                      
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                        </div>
                        {{-- <div>
                          <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                        </div> --}}
                        <div class="d-flex flex-column justify-content-center">
                          {{-- <h6 class="mb-0 text-sm">John Michael</h6> --}}
                          <p class="text-xs text-secondary mb-0 justify-content-center ">{{$loop->iteration}}</p>
                        </div>
                      </div>
                    </td>

                    <td>
                      <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                        </div>
                        {{-- <div>
                          <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                        </div> --}}
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{$u->name}}</h6>
                        </div>
                      </div>
                    </td>

                    <td>
                      <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                        </div>
                        {{-- <div>
                          <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                        </div> --}}
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{$u->email}}</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">@if ($u->email_verified_at == null)
                          -
                      @endif{{$u->email_verified_at}}</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                      @if ($u->role == true)
                      <span class="badge badge-sm bg-gradient-success">admin</span>
                      @else
                      <span class="badge badge-sm bg-gradient-danger">user</span>
                      @endif
                     
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{$u->created_at}}</span>
                    </td>
                    {{-- <td class="align-middle text-center">
                      <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Edit
                      </a>
                    </td> --}}
                    <td class="text-xs font-weight-bold align-middle text-center">
                      <span class="my-2 text-xs">
                        <a href="users/{{$u->id}}/edit" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                          <i class="fas fa-user-edit text-secondary" aria-hidden="true"></i>
                        </a>                                                           
                        <span>
                          <form action="{{$u->id}}" method="GET" class="d-inline">
                            @method('delete')
                            @csrf
                            <a onclick="return confirm('Are you sure?')" href="{{route('destroy', $u->id)}}"><i class="cursor-pointer fas fa-trash text-secondary"></i></a>

                          </form>
                          
                        </span>
                      </span>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    
@endsection
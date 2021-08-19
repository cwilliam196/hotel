@extends('layout.headerHome')

@section('title', 'Invoice')

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
            <h6>Table Rooms</h6>
            {{-- <div class="col-12 text-end">
                <a class="btn bg-gradient-dark mb-0 align-right" href="{{ route('add') }}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New Rooms</a>
              </div> --}}
          </div>
          
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Invoice ID</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Amount</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($invoice as $i)
                      
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
                          <h6 class="mb-0 text-sm">{{$i->invoice_id}}</h6>
                        </div>
                      </div>
                    </td>

                    <td>
                      <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{$i->description}}</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Rp. {{number_format($i->amount,2,',','.')}}</h6>
                          </div>
                    </td>
                    {{-- <td class="align-middle text-center text-sm">
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">
                              @if ($r->status == true)
                              <span class="badge badge-sm bg-gradient-success">Tersedai</span>
                              @else
                              <span class="badge badge-sm bg-gradient-danger">Sedang Terisi</span>
                              @endif
                                
                            </h6>
                        </div>
                    </td> --}}
                    
                    {{-- <td class="align-middle">
                      <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Edit
                      </a>
                    </td> --}}
                    <td class="text-xs font-weight-bold align-middle text-center">
                      <span class="my-2 text-xs">
                        <a href="invoice/{{$i->id}}/edit" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit Room">
                          <i class="fas fa-user-edit text-secondary" aria-hidden="true"></i>
                        </a>                                                           
                        <span>
                          <i onclick="confirm('Are you sure you want to remove the user from this group?') || event.stopImmediatePropagation()" wire:click="delete(8)" class="cursor-pointer fas fa-trash text-secondary" aria-hidden="true"></i>
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
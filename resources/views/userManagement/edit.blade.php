@extends('layout.headerHome')

@section('title', 'Edit User')

@extends('layout.sideBarHome')

@section('container')
<div class="row">
    <div class="col-12 col-lg-8 m-auto">
        <form class="multisteps-form__form mb-8" action="{{route('update',$user->id)}}" method="POST" style="height: 479px;">
            @method('patch')
            @csrf
            <!--single form panel-->
            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
            <h5 class="font-weight-bolder">Edit User</h5>
            <div class="multisteps-form__content">

                <div class="row mt-3">
                    <div class="col-12 col-sm-13">
                        <label>First Name</label>
                        <div class="controls">
                            <input class="multisteps-form__input form-control " type="text" id="name" name="name" placeholder="{{ $user->name }}" value="{{ $user->name }}">
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div wire:ignore>
                        <label>User Role</label>
                        <select name="role" id="role" class="col-12 col-sm-13 mt-4 mt-sm-0">
                            <option value="">--Please choose an option--</option>
                            <option value="0">User</option>
                            <option value="1">Admin</option>
                        </select>
                        </div>
                    </div>
                <div class="row mt-3">
                    <div class="col-12 col-sm-13">
                        <label>email</label>
                        <div class="">
                            <input  class="multisteps-form__input form-control " type="email" id="email" name="email" placeholder="{{ $user->email }}" value="{{ $user->email }}">
                        </div>
                    </div>
                    
                </div>
                {{-- <div class="row mt-3">
                    <div class="col-12 col-sm-6">
                        <label>Password</label>
                        <div class="">
                            <input class="multisteps-form__input form-control " type="password" placeholder="******" onfocus="focused(this)" onfocusout="defocused(this)">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                        <label>Repeat Password</label>
                        <div class="">
                            <input class="multisteps-form__input form-control " type="password" placeholder="******" onfocus="focused(this)" onfocusout="defocused(this)">
                        </div>
                    </div>
                </div> --}}
                <div class="button-row d-flex mt-4">
                    <button class="btn bg-gradient-dark ms-auto mb-0" type="submit">Submit</button>
                </div>
            </div>
        </div>                                                                                                             
        </div>
    </form>
    </div>
</div>

@endsection
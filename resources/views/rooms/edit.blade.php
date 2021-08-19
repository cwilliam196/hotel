@extends('layout.headerHome')

@section('title', 'Edit Rooms')

@extends('layout.sideBarHome')

@section('container')
<div class="row">
    <div class="col-12 col-lg-8 m-auto">
        <form class="multisteps-form__form mb-8" action="{{route('update',$room->id)}}" method="POST" style="height: 479px;">
            @method('patch')
            @csrf
            <!--single form panel-->
            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
            <h5 class="font-weight-bolder">Edit Rooms</h5>
            <div class="multisteps-form__content">



                <div class="multisteps-form__content">
                    <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                            <label>Number Room</label>
                            <div class="">
                                <input class="multisteps-form__input form-control " type="text" id="number" name="number" placeholder="{{ $room->number }}" value="{{ $room->number }}">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>cost</label>
                            <div class="">
                                <select name="cost" id="cost" class="col-12 col-sm-13 mt-4 mt-sm-0">
                                    <option value="{{$room->cost}}" >{{number_format($room->cost,2,',','.')}}</option>
                                    <option value="850000">Rp. 850.000,00</option>
                                    <option value="1000000">Rp. 1.000.000,00</option>
                                    <option value="1500000">Rp. 1.500.000,00</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div wire:ignore>
                            <label>Status</label>
                            <select name="status" id="status" class="col-12 col-sm-13 mt-4 mt-sm-0">
                                <option value="">--Please choose an option--</option>
                                <option value="0">Tidak Tersedia</option>
                                <option value="1">Tersedia</option>
                            </select>
                            </div>
                        </div>

                    <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                            <label>Facilities</label>
                            <div class="">
                                <div class="">
                                    
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="Single Bed" name="Single Bed">
                                    <label class="form-check-label" for="Single Bed">Single Bed</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="Double Bed" name="Double Bed">
                                    <label class="form-check-label" for="Double Bed">Double Bed</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="Breakfast" name="Breakfast">
                                    <label class="form-check-label" for="Breakfast">Breakfast</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="Dinner" name="Dinner">
                                    <label class="form-check-label" for="Dinner">Dinner</label>
                                </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="button-row d-flex mt-4">
                        <button class="btn bg-gradient-dark ms-auto mb-0" type="submit">Submit</button>
                    </div>
                </div>
            </div>

               
                
               
                
            </div>
        </div>                                                                                                             
        </div>
    </form>
    </div>
</div>

@endsection
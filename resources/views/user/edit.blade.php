
@extends('frontend.home')
@section('title', 'Edit Users')
@section('title-content', 'Edit Users')
@section('content')
    @if(count($errors)>0)
        @foreach($errors->all() as $error)
        <div class="col-md-12 col-sm-12 col-xl-12">
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        </div>
        @endforeach
    @endif

    @if(Session::has('success'))
        <div class="col-sm-12 col-md-12 col-xl-12">
            <div class="alert alert-success" role="alert">
                {!! Session('success') !!}
            </div>
        </div>
    @endif
    <div class="col-sm-12 col-md-12 col-xl-12">
        <a href="{{ route('user.show', $user->id) }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_content"> 
                <form action="{{ route('user.update', $user->id) }}" method="post" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">    
                    @csrf
                    @method('patch')
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="profile_title">
                                <div class="col-md-6"><h2>Information</h2></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="ln_solid"></div>

                            <div class="col-xs-12 form-group has-feedback">
                                <input class="form-control has-feedback-left" name="name" value="{{ $user->name }}" id="inputSuccess1" type="text" placeholder="First Name">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <div class="col-xs-12 form-group has-feedback">
                                <input class="form-control has-feedback-left" name="email" value="{{ $user->email }}" id="inputSuccess2" type="email" placeholder="Email">
                                <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <div class="col-xs-12 form-group has-feedback">
                                <input class="form-control has-feedback-left" name="phone" value="{{ $user->phone }}" id="inputSuccess3" type="text" placeholder="Phone">
                                <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <div class="col-xs-12 form-group has-feedback">
                                <input class="form-control has-feedback-left" name="address" value="{{ $user->address }}" id="inputSuccess4" type="text" placeholder="Address">
                                <span class="fa fa-road form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <div class="col-xs-12 form-group has-feedback">
                                <input class="form-control has-feedback-left" name="image" id="inputSuccess5" type="file" placeholder="Image" accept="image/x-png,image/gif,image/jpeg">
                                <span class="fa fa-image form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-xs-12 form-group has-feedback">
                                <div class="profile_img">
                                    <div id="crop-avatar">
                                        <!-- Current avatar -->
                                        <img title="Change the avatar" class="img-responsive avatar-view" alt="Avatar" style="max-width:100px;" src="{{asset($user->image)}}">
                                    </div>
                                </div>
                            </div>
                            

                            <div class="col-xs-12 form-group has-feedback">
                                <input class="form-control has-feedback-left" name="signature" id="inputSuccess5" type="file" placeholder="signature" accept="image/x-png,image/gif,image/jpeg">
                                <span class="fa fa-image form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-xs-12 form-group has-feedback">
                                <div class="profile_img">
                                    <div id="crop-avatar">
                                        <!-- Current avatar -->
                                        <img title="Change the avatar" class="img-responsive avatar-view" alt="Avatar" style="max-width:100px;" src="{{asset($user->signature)}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="profile_title">
                                <div class="col-md-6"><h2>Level</h2></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="ln_solid"></div>

                            @if(Auth::user()->level->capacity == 10)
                            <input type="hidden" name="level" value="{{$user->level_id}}">
                            <input type="hidden" name="division" value="{{$user->division_id}}">
                            
                            <div class="col-xs-12 form-group has-feedback" style="display:none;">
                                <label for="position" class="title">Position</label>
                                <select name="position[]" class="form-control select2_multiple form-control" multiple="multiple">
                                    @foreach($positions as $position)
                                    <option value="{{ $position->id }}" @foreach($user->positions as $user_pos) {{ ($user_pos->id == $position->id ? 'selected' : '' ) }} @endforeach>{{ $position->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @else
                                <div class="col-xs-12 form-group has-feedback">
                                    <label for="position" class="title">Level</label>
                                    <select name="level" class="form-control">
                                        <option value="">Please Select Level</option>
                                        @foreach($levels as $level)
                                            <option value="{{ $level->id }}" {{ ($user->level_id == $level->id ? 'selected' : '') }} >{{ $level->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-xs-12 form-group has-feedback">
                                    <label for="position" class="title">Division</label>
                                    <select name="division" class="form-control">
                                        <option value="">Please Select Division</option>
                                        @foreach($divisions as $division)
                                            <option value="{{ $division->id }}" {{ ($user->division_id == $division->id ? 'selected' : '' ) }}>{{ $division->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-xs-12 form-group has-feedback">
                                    <label for="position" class="title">Position</label>
                                    <select name="position[]" class="form-control select2_multiple form-control" multiple="multiple">
                                        @foreach($positions as $position)
                                        <option value="{{ $position->id }}" @foreach($user->positions as $user_pos) {{ ($user_pos->id == $position->id ? 'selected' : '' ) }} @endforeach>{{ $position->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            @endif

                            <div class="col-xs-12 form-group has-feedback">
                                <label for="position" class="title">Password</label>
                                <input class="form-control" name="password" id="inputSuccess6" type="password" placeholder="Password">
                            </div>
                            <div class="col-xs-12 form-group has-feedback">
                                <label for="position" class="title">Password Confirmation</label>
                                <input class="form-control" name="password_confirmation" id="inputSuccess7" type="password" placeholder="Password Confirm">
                            </div>

                            <div class="col-xs-12 form-group">
                                <button class="btn btn-primary">Save User</button>
                            </div>                  
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <!-- Select2 -->
    <link href="/frontend/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
@endsection

@section('js')
    <!-- Parsley -->
    <script src="/frontend/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Select2 -->
    <script src="/frontend/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="/frontend/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <script>
        $(function () {

            $('.select2_multiple').select2();
            
        });
  </script>
@endsection
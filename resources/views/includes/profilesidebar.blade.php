<div class="profile-sidebar">
    <!-- SIDEBAR USERPIC -->
    <div class="profile-userpic">
        <img src="{{asset('images/gavatar.png')}}" class="img-responsive" alt="">
    </div>
    <!-- END SIDEBAR USERPIC -->
    <!-- SIDEBAR USER TITLE -->
    <div class="profile-usertitle">
        <div class="profile-usertitle-name">
            {{$profile->first_name.' '.$profile->last_name}}
        </div>
        <div class="profile-usertitle-job">
            {{$profile->user->name}}
        </div>
    </div>
    <!-- END SIDEBAR USER TITLE -->
    <!-- SIDEBAR BUTTONS -->
    <div class="profile-userbuttons">
        @if ($user->id != $profile->user->id)
        <button type="button" class="btn btn-success btn-sm">Follow</button>
        <button type="button" class="btn btn-danger btn-sm">Message</button>
        @endif
    </div>
    <!-- END SIDEBAR BUTTONS -->
</div>

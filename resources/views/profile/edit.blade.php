@include('layouts.index')

<div class="header-container">
    <h1 class="header-text">Edit Profile</h1>
</div>

<div style="margin-left:300px;">
    <div>

        <!-- Update Profile Information Form -->
        <div>
            <div>
                @include('profile.partials.profile-extra-info-form')
            </div>
        </div>

        <br><hr>
        
        <div>
            <div>
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <br><hr>

        <!-- Update Password Form -->
        <div>
            <div>
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <br><hr>

        <!-- Delete User Form -->
        <div>
            <div>
                @include('profile.partials.delete-user-form')
            </div>
        </div>

        <br>

    </div>
</div>

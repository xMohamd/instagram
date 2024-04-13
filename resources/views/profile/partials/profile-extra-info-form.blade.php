<head>
    <link rel="stylesheet" href="{{ asset('css/edit-profile.css') }}">
</head>
<section>
    <h2>{{ __('Avatar, Bio, Website, and Gender Settings') }}</h2>
    <div>
        <form method="post" enctype="multipart/form-data" action="{{ route('profile.update') }}">
            @csrf
            @method('patch')
            <div class="profile-data">
                <!-- Display Avatar -->
                @if(auth()->user()->avatar)
                    <img src="{{ asset(auth()->user()->avatar) }}" alt="Avatar" class="profile-photo" id="avatar-preview">
                @endif

                <!-- Profile Info -->
                <div class="profile-info">
                    <p class="profile-user-name">{{ auth()->user()->name }}</p>
                    <p class="profile-real-name">{{ auth()->user()->username }}</p>
                </div>

                <!-- Upload Avatar -->
                <div class="change-photo-section">
                    <label for="formFile" class="btnn profile-photo-btn">Change photo</label>
                    <input name="avatar" type="file" id="formFile" style="display: none;" onchange="previewAvatar(this)">
                </div>
            </div>

            <!-- Website Input -->
            <div class="profile-website">
                <x-input-label for="website" :value="__('Website')" />
                <x-text-input id="website" name="website" type="text" :value="old('website', auth()->user()->website)" />
            </div>
            
            <!-- Bio Input -->
            <div class="profile-bio">
                <x-input-label for="bio" :value="__('Bio')" />
                <x-text-input id="bio" name="bio" type="text" :value="old('bio', auth()->user()->bio)" />
            </div>

            <!-- Gender Input -->
            <div class="profile-gender">
                <x-input-label for="gender" :value="__('Gender')" />
                <select id="gender" name="gender">
                    <option value="">Select Gender</option>
                    <option value="female" {{ old('gender', auth()->user()->gender) === 'female' ? 'selected' : '' }}>Female</option>
                    <option value="male" {{ old('gender', auth()->user()->gender) === 'male' ? 'selected' : '' }}>Male</option>
                    <option value="other" {{ old('gender', auth()->user()->gender) === 'other' ? 'selected' : '' }}>Prefer not to say</option>
                </select>
            </div>

            <!-- Save Button -->
            <button class="btnn profile-photo-btn">{{ __('Save') }}</button>
        </form>
    </div>
</section>

<script>
    function previewAvatar(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('avatar-preview').src = e.target.result;
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

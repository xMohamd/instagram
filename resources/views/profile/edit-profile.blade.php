<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
    <link rel="stylesheet" href="{{ asset('css/EditProfile.css') }}">
</head>
<body>
<main>
    <h2>Edit Profile</h2>
    <br>
    <div class="profile-data">
        <img src="{{ asset('path_to_user_avatar') }}" alt="Profile Photo" class="profile-photo">
        <div class="profile-info">
            <p class="profile-user-name">{{ Auth::user()->username }}</p>
            <p class="profile-real-name">{{ Auth::user()->name }}</p>
        </div>
        <button class="btn profile-photo-btn">Change photo</button>
    </div>
    <br>
    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <!-- Name -->
        <div class="profile-name">
            <label for="name">Name</label>
            <input id="name" type="text" name="name" value="{{ Auth::user()->name }}">
        </div>
        <br>
        <!-- Website -->
        <div class="profile-website">
            <label for="website">Website</label>
            <textarea id="website" name="website" placeholder="Website">{{ Auth::user()->website }}</textarea>
        </div>
        <br>
        <!-- Bio -->
        <div class="profile-bio">
            <label for="bio">Bio</label>
            <textarea id="bio" name="bio" maxlength="150" placeholder="Enter Bio Here">{{ Auth::user()->bio }}</textarea>
            <div id="bio-counter"></div>
        </div>
        <br>
        <!-- Gender -->
        <div class="profile-gender">
            <label for="gender">Gender</label>
            <select id="gender" name="gender">
                <option value="">Select Gender</option>
                <option value="female" {{ Auth::user()->gender === 'female' ? 'selected' : '' }}>Female</option>
                <option value="male" {{ Auth::user()->gender === 'male' ? 'selected' : '' }}>Male</option>
                <option value="other" {{ Auth::user()->gender === 'other' ? 'selected' : '' }}>Prefer not to say</option>
            </select>
        </div>
        <br>
        <button type="submit" class="btn profile-submit-btn">Submit</button>
    </form>
</main>
<script>
    const bioTextarea = document.getElementById('bio');
    const bioCounter = document.getElementById('bio-counter');

    bioTextarea.addEventListener('input', function() {
        const maxLength = parseInt(bioTextarea.getAttribute('maxlength'));
        const currentLength = bioTextarea.value.length;
        bioCounter.textContent = `${currentLength}/${maxLength}`;
    });

    const initialLength = bioTextarea.value.length;
    const maxLength = parseInt(bioTextarea.getAttribute('maxlength'));
    bioCounter.textContent = `${initialLength}/${maxLength}`;
</script>
</body>
</html>

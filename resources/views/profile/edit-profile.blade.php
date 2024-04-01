<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
    <link rel="stylesheet" href="{{ asset('css/edit-profile.css') }}">
</head>
<body>
<main>
    <h2>Edit Profile</h2>
    <br>
    <div class="profile-data">
        <img src="{{ asset('images/3.png') }}" alt="Profile Photo" class="profile-photo">
        <div class="profile-info">
            <p class="profile-user-name">zeinabradwan88</p>
            <p class="profile-real-name">Zeinab Radwan</p>
        </div>
        <button class="btn profile-photo-btn">Change photo</button>
    </div>
    <br>
    <div class="profile-bio">
        <label for="bio">Bio</label>
        <textarea id="bio" placeholder="Enter Bio Here" maxlength="150">Turning passion into profession | Future Software Engineer | aspiring chef 🧘‍♀️🍲</textarea>
        <div id="bio-counter"></div>
    </div>
    <br>
    <button class="btn profile-submit-btn">Submit</button>
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
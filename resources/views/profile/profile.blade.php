<head>
    <title>User Profile</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="{{ asset('css/profile-style.css') }}">
</head>
<header>
    <div class="container">
        <div class="profile">
            <div class="profile-image">
                <img src="{{ asset('images/3.png') }}" alt="Profile photo">
            </div>
            <div class="profile-user-settings">
                <h1 class="profile-user-name"><a href="{{ route('profile.show', Auth::user()->username) }}">{{ Auth::user()->username }}</a></h1>
                <button class="btn profile-edit-btn" onclick="redirectToEditProfile()">Edit Profile</button>
                <button class="btn profile-settings-btn" aria-label="profile settings"><img src="{{ asset('images/setting.png') }}" style="width:28px;"></button>
            </div>
            <div class="profile-stats">
                <ul>
                    <li><span class="profile-stat-count">6</span> posts</li>
                    <li><span class="profile-stat-count">0</span> followers</li>
                    <li><span class="profile-stat-count">0</span> following</li>
                </ul>
            </div>
            <div class="profile-bio">
                <p><span class="profile-real-name"><a href="{{ Auth::user()->website }}">{{ Auth::user()->full_name }}</a></span></p>
                <p style="font-size: 14px;">{{ Auth::user()->bio }}</p>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="container">
        <hr>
        <div class="buttons-container">
            <button class="transparent-btn"><img src="{{ asset('images/posts.png') }}" alt="Posts"> <span>POSTS</span></button>
            <button class="transparent-btn"><img src="{{ asset('images/saved.png') }}" alt="Saved"> <span>SAVED</span></button>
            <button class="transparent-btn"><img src="{{ asset('images/tag.png') }}" alt="Tagged"> <span>TAGGED</span></button>
        </div>      
        <div class="gallery">
            <div class="gallery-item" tabindex="0">
                <img src="{{ asset('images/5.png') }}" class="gallery-image" alt="post media">
                <div class="gallery-item-info">
                    <ul>
                        <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 56</li>
                        <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 2</li>
                    </ul>
                </div>
            </div>
            <div class="gallery-item" tabindex="0">
				<img src="{{ asset('images/4.png')}}" class="gallery-image" alt="post media">
				<div class="gallery-item-info">
					<ul>
						<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 89</li>
						<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 5</li>
					</ul>
				</div>
			</div>
			<div class="gallery-item" tabindex="0">
				<img src="{{ asset('images/6.png')}}" class="gallery-image" alt="post media">
				<div class="gallery-item-type">
					<span class="visually-hidden">Gallery</span><i class="fas fa-clone" aria-hidden="true"></i>
				</div>
				<div class="gallery-item-info">
					<ul>
						<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 42</li>
						<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 1</li>
					</ul>
				</div>
			</div>
			<div class="gallery-item" tabindex="0">
				<img src="{{ asset('images/3.png')}}" class="gallery-image" alt="post media">
				<div class="gallery-item-info">
					<ul>
						<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 38</li>
						<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 0</li>
					</ul>
				</div>
			</div>
			<div class="gallery-item" tabindex="0">
				<img src="{{ asset('images/2.png')}}" class="gallery-image" alt="post media">
				<div class="gallery-item-info">
					<ul>
						<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 47</li>
						<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 1</li>
					</ul>
				</div>
			</div>
			<div class="gallery-item" tabindex="0">
				<img src="{{ asset('images/1.png')}}" class="gallery-image" alt="post media">
				<div class="gallery-item-info">
					<ul>
						<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 94</li>
						<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 3</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
    <script>
    function redirectToEditProfile() {
        window.location.href = '/edit-profile';
    }
    </script>
</main>
@php
  $isLikedByUser = $post->likes->contains(auth()->user()) ? 'text-danger' : '';
  $isCommentedByUser = $post->comments->contains('user', auth()->user()) ? 'text-primary' : '';
@endphp
<div class="card p-0 border-0 rounded-0" style="max-width: 470px">
  <div class="card-header px-0 bg-white border-0">
    <p class="card-title fs-5">
      <a class="d-flex align-items-center link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
        href="#" role="button">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle" height="22"
          alt="Avatar" loading="lazy" />&nbsp {{ $post->user->username }}
      </a>
      <span class="text-body-secondary fs-6">{{ $post->created_at->diffForHumans() }}</span>
    </p>
  </div>
  <img src="{{ asset('images/img2.jpg') }}" class="p-0 w-100 img-fluid rounded-1"
    data-bs-target="#product-modal-{{ $post->id }}" data-bs-toggle="modal" />
  <div class="card-body px-0">
    <div class="row d-flex justify-content-between align-content-center">
      <div class="col-8 d-flex justify-content-start align-content-center gap-3">
        <button class="btn bg-transparent border-0 p-0">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" with="24" height="24"
            class="bi bi-heart {{ $isLikedByUser }}" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
          </svg>
        </button>
        <button class="btn bg-transparent border-0 p-0" data-bs-target="product-modal-{{ $post->id }}"
          data-bs-toggle="modal">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
            class="bi bi-chat {{ $isCommentedByUser }}" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105" />
          </svg>
        </button>
        <button class="btn bg-transparent border-0 p-0">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-send"
            viewBox="0 0 16 16">
            <path
              d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z" />
          </svg>
        </button>
      </div>
      <div class="col-4 d-flex justify-content-end">
        <button class="btn bg-transparent border-0 p-0">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
            class="bi bi-bookmark-fill" viewBox="0 0 16 16">
            <path
              d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2" />
          </svg>
        </button>
      </div>
    </div>
    <div class="row">
      <p>
        <span class="fw-bold">{{ $post->likes_count }}</span> likes,
        <span class="fw-bold">{{ $post->comments_count }}</span> comments
      </p>
    </div>
    <p class="card-text">
      {{ $post->caption }}
    </p>

  </div>
  <div id="product-modal-{{ $post->id }}" class="modal fade" abindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
            <div class="col-6 h-100">
              <img src="{{ $post->media->url }}" class="p-0 w-100 img-fluid" />
            </div>
            <div class="col-6">
              <div class=" px-0 bg-white border-0" data-bs-target=".modal" data-bs-toggle="modal">
                <p class="fs-5">
                  {{ $post->user->username }}
                  <span class="text-body-secondary fs-6">3 mins ago</span>
                </p>
              </div>
              <div class="px-0">
                <div class="row d-flex justify-content-between align-content-center">
                  <div class="col-8 d-flex justify-content-start align-content-center gap-3">
                    <button class="btn bg-transparent border-0 p-0">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" with="24" height="24"
                        class="bi bi-heart {{ $isLikedByUser }}" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                          d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                      </svg>
                    </button>
                    <button class="btn bg-transparent border-0 p-0">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-chat {{ $isCommentedByUser }}" viewBox="0 0 16 16">
                        <path
                          d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105" />
                      </svg>
                    </button>
                    <button class="btn bg-transparent border-0 p-0">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-send" viewBox="0 0 16 16">
                        <path
                          d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z" />
                      </svg>
                    </button>
                    <button class="btn bg-transparent border-0 p-0">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                        <path
                          d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2" />
                      </svg>
                    </button>
                  </div>
                </div>
                <div class="row">
                  <p>
                    <span class="fw-bold">{{ $post->likes_count }}</span> likes,
                    <span class="fw-bold">{{ $post->comments_count }}</span> comments
                  </p>
                </div>
                <p>
                  {{ $post->caption }}
                </p>
                <form class="mb-2" action="" method="POST">
                  @csrf
                  <input type="hidden" name="post_id" value="{{ $post->id }}">
                  <input class="border-0" type="text" placeholder="Add a comments..." name="comment">
                </form>
                <div class="row">
                  <div class="col-12">
                    @foreach ($post->comments as $comment)
                      <div class="row">
                        <div class="col-1">
                          <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle"
                            height="22" alt="Avatar" loading="lazy" />
                        </div>
                        <div class="col-11 p-0">
                          <p class="fw-bold p-0 my-0">{{ $comment->user->username }}</p>
                          <p class="p-0 my-0">{{ $comment->comment }}</p>
                          <hr>
                        </div>
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

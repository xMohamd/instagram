<div class="card p-0 border-0 rounded-0" style="max-width: 470px;">
  <div class="card-header px-0 bg-white border-0" data-bs-target=".modal" data-bs-toggle="modal">
    <p class="card-title fs-5">
      Name
      <span class="text-body-secondary fs-6">3 mins ago</span>
    </p>
  </div>
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('images/img2.jpg') }}" class="p-0 w-100 img-fluid img-thumbnail" style="height: 50vh"/>
      </div>
      <div class="carousel-item">
        <img src="https://i.ibb.co/Jqh3rHv/img1.jpg" class="p-0 w-100 img-fluid img-thumbnail" style="height: 50vh"/>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/img2.jpg') }}" class="p-0 w-100 img-fluid img-thumbnail" style="height: 50vh"/>
      </div>
      <div class="carousel-item">
        <img src="https://i.ibb.co/Jqh3rHv/img1.jpg" class="p-0 w-100 img-fluid img-thumbnail" style="height: 50vh"/>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="card-body px-0">
    <div class="row d-flex justify-content-between align-content-center">
      <div class="col-8 d-flex justify-content-start align-content-center gap-3">
        <button class="btn bg-transparent border-0 p-0">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" with="24" height="24"
            class="bi bi-heart-fill text-danger" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
          </svg>
        </button>
        <button class="btn bg-transparent border-0 p-0">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chat"
            viewBox="0 0 16 16">
            <path
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
      <p><span class="fw-bold">15</span> likes, <span class="fw-bold">3</span> comments</p>
    </div>
    <p class="card-text">
      This is a wider card with supporting text below as a natural lead-in
      to additional content. This content is a little bit longer.
    </p>
  </div>
  <div class="modal fade" abindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-body">
          <p>
            This is a wider modal with supporting text below as a natural
            lead-in to additional content. This content is a little bit
            longer.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

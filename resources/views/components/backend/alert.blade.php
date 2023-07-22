<div id="liveToast" class="position-fixed toast hide" role="alert" aria-live="assertive" aria-atomic="true" style="top: 20px; right: 20px; z-index: 1000;">
  <div class="toast-header">
    <div class="d-flex align-items-center flex-grow-1">
      <div class="flex-shrink-0">
        <img class="avatar avatar-sm avatar-circle" src="{{asset('backend/img/160x160/img4.jpg')}}" alt="Image description">
      </div>
      <div class="flex-grow-1 ms-3">
        <h5 class="mb-0 text-{{session('error')!= null?'danger':'success'}}" >
        {{session('error')!= null?session('error'):session('status')}}
        </h5>
        @if($errors->any())  
      <div class="row alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif
      </div>
      <div class="text-end">
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>
  </div>
</div>
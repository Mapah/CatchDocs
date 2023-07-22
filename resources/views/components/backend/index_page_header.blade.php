<div class="page-header">
          <div class="row align-items-center">
              <div class="col-md-9 mb-2 mb-sm-0">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb breadcrumb-no-gutter">
                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">{{$user}}</a></li>
                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">{{$title}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Aperçu</li>
                  </ol>
                </nav>

                <h2 class="page-header-title">{{$title1}}  <span class="badge bg-primary text-light ms-1">{{$size}}</span></h2>
              </div>
              <div class="col-md-3 mb-2 mb-sm-0">
                <a class="btn btn-success btn-md " href="{{url('/'.strtolower($title).'/create')}}" >
                  <i class="bi-plus-circle-fill me-1"></i>
                  Créer {{$title}}
                </a>
              </div>

          </div>
        </div>

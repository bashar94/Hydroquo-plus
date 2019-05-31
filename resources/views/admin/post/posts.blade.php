@extends('admin.layouts.app')

@section('content')
    @include('admin.layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-8 mb-5 mb-xl-0">
                
                <div class="card shadow">
                    <div class="card-header border-0">
                        <nav class="nav nav-pills nav-justified mb-3">
                          <a class="nav-link active" href="#">All</a>
                          <a class="nav-link" href="#">Draft</a>
                          <a class="nav-link" href="#">Trash</a>
                          <div>
                              <form class="navbar-search navbar-search-light form-inline mr-3 d-none d-md-flex ml-lg-auto">
                                <div class="form-group mb-0">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Search" type="text">
                                    </div>
                                </div>
                            </form>
                          </div>
                        </nav>
                        

                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Posted ON</th>
                                    <th scope="col"></th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            
                            @foreach ($posts as $post)
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="mb-0 text-sm"><a href="{{ url('blog/'.$post->id.'/'.$post->slug) }}" target="_blank">{{ $post->title }}</a></span>
                                            </div>
                                        </div>
                                    </th>

                                    <td>
                                        Razeen
                                    </td>

                                    <td>
                                       {{ date("F j, Y, g:i a", strtotime($post->created_at)) }}
                                    </td>

                                    
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="{{ url('dashboard/edit/'.$post->id) }}">Edit</a>
                                                <a class="dropdown-item" href="#">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                {{ $posts->links() }}

            </div> 
        </div>
        
      <!--   @include('admin.layouts.footers.auth') -->
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
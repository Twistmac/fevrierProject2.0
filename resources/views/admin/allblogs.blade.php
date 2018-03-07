@include('admin.head')

<div id="main-content" class="main-content container-fluid">
     @if(Session::has('success')) 
            <div class="alert alert-success">
                <strong>Information ! </strong> {{Session::get('success')}}
            </div>
            @endif
            <div class="row-fluid page-head">
                <h2 class="page-title"><i class="fontello-icon-monitor"></i> Gestion du Blog <small> Tableau de bord dde la gestion du Blog</small></h2>
                <div class="page-bar">
                    <div class="btn-toolbar"> </div>
                </div>
            </div>
            <!-- // page head -->
            
            <div id="page-content" class="page-content">
                
                <!-- /navbar -->
                
                <section>
                    <div class="page-header">
                        <h3><i class="fontello-icon-picture-2"></i> Listes de tous les articles du Blog </h3>
                        <p>Ceci est la liste de tous les articles publiés dans la partie Blog. Vous pouvez supprimer avec le bouton <b>"Delete"</b> ou modifier avec le bouton <b>"Edit"</b> ou les mettre à la Une grâce au bouton <b>"Favoris"</b>. </p>
                    </div>
                    <ul class="thumbnails equal-height">
                        <!-- // item -->
                        @php $i=0 @endphp
                        @foreach($listes_blog as $blogs)
                        <li class="span3">
                            <div class="thumbnail bg-gray-light text-center">
                                <div class="equalize">
                                    <div class="well well-nice"> <a href="#"><img class="radius3" src="{{url('/images/'.$blogs->urlimage1)}}"></a>
                                    </div>
                                    <div class="caption text-center">
                                        <p><b>{{$blogs->titre}}</b></p>
                                        <p class="img-desc">{!! $blogs->contenu!!}</p>
                                    </div>
                                </div>
                                <p class="action"> <a class="btn btn-small" href="{{ route('blog.update',$blogs->slug)}}"><i class="fontello-icon-edit"></i> Edit</a> 
                                    <a class="btn btn-small" data-dismiss="modal" data-toggle="modal" data-target="#dynamicModal{{$i}}">Delete</a> 
                                    <a class="btn btn-small" href="#"><i class="fontello-icon-star-1"></i> Favoris</a> </p>
                            </div>
                             <!-- Modal -->
                                <div id="dynamicModal{{$i}}" class="modal fade" role="dialog">
                                  <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Suppression article</h4>
                                      </div>
                                      <div class="modal-body">
                                        <p>Voulez vous vraiment supprimer l'article <br><b>{{ucfirst($blogs->titre)}}</b>  </p>
                                      </div>
                                      <div class="modal-footer">
                                        <a type="button" class="btn btn-primary" href="{{route('blog.delete',$blogs->slug)}}">supprimer</a>
                                        <button type="reset" class="btn btn-default" data-dismiss="modal">annuler</button>
                                      </div>
                                    </div>

                                  </div>
                                </div>
                        </li>
                        <!-- // item -->
                        @php $i++ @endphp
                        @endforeach
                    </ul>
                    <!-- // Example row --> 
                   
                    {!! paginationAdmin($listes_blog) !!}
                </section>
            </div>
            <!-- // page content --> 
            
        </div>

@include('admin.foot')
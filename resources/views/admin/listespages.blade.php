@include('admin.head')

<div id="main-content" class="main-content container-fluid">
            <div class="row-fluid page-head">
                <h2><i class="fontello-icon-easel"></i> Gestionnaire des Publicités <small>Listes des pages </small></h2>
                <div class="page-bar">
                    <div class="btn-toolbar"> </div>
                </div>
            </div>
            <hr>

<div class="widget widget-box widget-recent page-content">
                                <div class="widget-header">
                                    <h4><i class="fontello-icon-user"></i>Listes des pages possédant des publicités</h4>
                                </div>
                                <div class="widget-content">
                                    <div class="widget-body">
                                        <ul class="widget-list list-bordered">

                                        	@foreach($pages as $pubs)

                                            <li class="media">
                                                <div class="media-left"> <a class="img-shadow" href="{{ route('admin.pub.name', $pubs->nompage) }}"><img class="thumb media-object" src="{{link_img('assets/images/' . $pubs->illustrationimg)}}" width="167" height="96"></a> </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading"> <a href="{{ route('admin.pub.name', $pubs->nompage) }}">Page " {{ $pubs->nompage }} "</a> <small>du Front-Office.</small></h4>
                                                    <ul class="data inline">
                                                        <li><strong>By:</strong> <a href="javascript:void(0);"> Administrateur</a></li>
                                                        <li class="divider-vertical"></li>
                                                        <li><strong>{{ $pubs->updated_at }}</strong>, 09:27 AM</li>
                                                        <li class="divider-vertical"></li>
                                                        <li><a href="{{ route($pubs->lien) }}"> Accéder à la page </a></li>
                                                    </ul>
                                                    <p class="post">{{ $pubs->description }}</p>
                                                </div>
                                            </li>

                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>


</div>


@include('admin.foot')
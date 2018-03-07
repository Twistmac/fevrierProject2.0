@include('admin.head')

 <!-- // sidebar -->
        <div id="main-content" class="main-content container-fluid">
            <div class="row-fluid page-head">
                @if(Session::has('success')) 
                    <div class="alert alert-danger">
                        <strong>Succes ! </strong> {{Session::get('success')}}
                    </div>
                @endif
                <h2 class="page-title"><i class="aweso-icon-list-alt"></i> Gestion du contenu de la page d'{{ $slug}} </h2>
                <div class="page-bar">
                    <div class="btn-toolbar"> </div>
                </div>
            </div>
            <!-- // page head -->
            
            <div id="page-content" class="page-content">

                 <form method="post" action="{{route('pages.update')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token()}}">
                    <input type="hidden" name="parameter" value="{{$slug}}"> 
                    @foreach($contenus as $key => $value)
                    <section>
                        <div class="page-header">
                           <h3><i class="fontello-icon-article-alt opaci35"></i>Ceci est un {{ ucfirst(substr($key, 0, -1)) }}</h3>
                        </div>
                        <div class="row-fluid">
                                <div class="well well-nice">
                                    <h4 class="simple-header">{{ ucfirst($key) }} <small>Ajouter un nouveau contenu</small></h4>
                                    <div class="control-group">
                                        <textarea id="wysiBooEditorBlack" class="input-block-level" style="height: 100px" name="{{$key}}">{{ $value }}</textarea>
                                    </div>
                                </div>
                            <!-- // Column -->
                        </div>
                        <!-- // Sample row ----------------------------------------------------------- Wysiwyg editors --> 
                    </section>
                    @endforeach
                    <!-- fin contenu des options / conditions -->
                     <div class="form-actions no-margin-bootom">
                         <button type="submit" class="btn btn-green">Tout sauvegarder</button>
                         <button type="reset" class="btn cancel">Tout annuler</button>
                    </div>
                </form>
                    <!-- // Sample row ----------------------------------------------------------- Dual select box -->  

                </section>
                
            </div>
            <!-- // page content --> 
            
        </div>

@include('admin.foot')
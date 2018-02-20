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
                <section>
                  
                    <div class="page-header">
                        <h3><i class="fontello-icon-article-alt opaci35"></i> Gestion des mots-clés <small>Ajouter des mots-clés</small></h3>
                    </div>

                    <!-- // Sample row ----------------------------------------------------------- Dual select box -->
                    
                    
                    <!-- // Sample row ----------------------------------------------------------- Dual select box -->
                    
                    <div class="row-fluid">
                        <form class="form-dark">
                            <div class="well well-nice">
                                <ul class="inline">
                                    <li class="listbox-left span5">
                                        <h4 class="simple-header">
                                            <button id="box5Clear" class="btn btn-small btn-yellow pull-right" type="button"><i class="fontello-icon-filter"></i> Reinit.</button>
                                            Listes des mots-clés</h4>
                                        <input id="box5Filter" class="input-block-level" type="text">
                                        <select id="box5View" multiple="multiple" class="input-block-level" style="height:210px">
                                            <option value="501649">Immobilier</option>
                                            <option value="501497">Immeuble</option>
                                            <option value="501053">Location</option>
                                            <option value="500001">Australie</option>
                                            <option value="501227">Maison luxueuse</option>
                                            <option value="501610">Villa</option>
                                            <option value="501514">Appartement</option>
                                            <option value="501656">Terrain à vendre</option>
                                            <option value="501050">Piscine</option>
                                            <option value="501075">Garage</option>
                                            <option value="501493">Salle de bain</option>
                                            <option value="501562">Cuisine</option>
                                            <option value="500676">Range</option>
                                            <option value="501460">Achats</option>
                                            <option value="500004">Vente</option>
                                            <option value="500336">Conseil placement</option>
                                        </select>
                                        <span id="box5Counter" class="countLabel"></span>
                                        <select id="box5Storage">
                                        </select>
                                    </li>
                                    <li class="listbox-control span2 text-center">
                                        <h4 class="simple-header">Actions</h4>
                                        <ul class="listbox-menu well well-nice">
                                            <li>
                                                <button id="to6" class="btn btn-block" type="button"><i class="fontello-icon-to-end-1"></i></button>
                                            </li>
                                            <li>
                                                <button id="allTo6" class="btn btn-block" type="button"><i class="fontello-icon-to-end-alt"></i></button>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <button id="allTo5" class="btn btn-block" type="button"><i class="fontello-icon-to-start-alt"></i></button>
                                            </li>
                                            <li>
                                                <button id="to5" class="btn btn-block" type="button"><i class="fontello-icon-to-start-1"></i></button>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <button class="btn btn-green btn-block" type="submit">Valider les mots-clés</button>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="listbox-right span5">
                                        <h4 class="simple-header">
                                            <button id="box6Clear" class="btn btn-small btn-yellow pull-right" type="button"><i class="fontello-icon-filter"></i> Reinit.</button>
                                            <i class="fontello-icon-list-4"></i> Mots-clés selectionnés </h4>
                                        <input id="box6Filter" class="input-block-level" type="text">
                                        <select id="box6View" multiple="multiple" class="input-block-level" style="height:210px">
                                        </select>
                                        <span id="box6Counter" class="countLabel"></span>
                                        <select id="box6Storage">
                                        </select>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                    <!-- // Sample row ----------------------------------------------------------- Dual select box -->  

                </section>
                
            </div>
            <!-- // page content --> 
            
        </div>

@include('admin.foot')
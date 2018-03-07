@include('admin.head')
        <!-- // sidebar -->
        
        <div id="main-content" class="main-content container-fluid">
            @if(Session::has('success')) 
            <div class="alert alert-danger">
                <strong>Succes ! </strong> {{Session::get('success')}}
            </div>
            @endif
            <div class="row-fluid page-head">
                <h2 class="page-title"><i class="aweso-icon-list-alt"></i> Gestion de Blog <small>Ajout d'un article dans Blog </small></h2>
                <div class="page-bar">
                    <div class="btn-toolbar"> </div>
                </div>
            </div>
            <!-- // page head -->
            
            <div id="page-content" class="page-content">
                <section>
                    <div class="page-header">
                        <h3><i class="fontello-icon-article-alt opaci35"></i> Intégrer un article venant de l'exterieur <small>Intégrer dans Blog</small></h3>
                    </div>

                    <!-- bouton react Modal -->

                     <a href="#responsive" class="btn btn-success cancel margin-right5" data-toggle="modal">Intégrer un article venant de l'exterieur</a>

                    <!-- Modal Responsive Integrer un article à blog -->

                    <div id="responsive" class="modal hide fade" tabindex="-1" data-width="760">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fontello-icon-cancel-1"></i></button>
                            <h4>Intégration d'un contenu exterieur</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row-fluid">
                                <div class="span6">

                    <form method="post" action="{{route('blog.store')}}" enctype="multipart/form-data" 
                                data-upload-template-id="template-upload-1" data-download-template-id="template-download-1">
                        <input type="hidden" name="link" value="link">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <h4>Lien : </h4>
                                    <p>
                                        <input type="text" class="input-block-level" name="lien" placeholder="https://"/>
                                    </p>
                                    <h4>Titre : </h4>
                                    <p>
                                        <input type="text" class="input-block-level" name="titre"/>
                                    </p>
                                    <h4>Description : </h4>
                                    <p>
                                        <textarea class="input-block-level" rows="12" name="contenu"></textarea> 
                                    </p>
                                </div>
                                <div class="span6">
                                    <h4 class="simple-header"> Image d'illustration <small>Taille standard</small> </h4>
                                    <div class="well well-black inline">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 120px;"> <img src="http://www.placehold.it/200x120/EFEFEF/AAAAAA&text=no+image" /> </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div> <span class="btn btn-file"> <span class="fileupload-new">Select image</span> <span class="fileupload-exists">Change</span>
                                                 <input type="file" name="file" id="file">
                                                </span> <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a> </div>
                                        </div>
                                        <!-- // image upload --> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-boo">Annuler</button>
                            <button type="submit" class="btn btn-green">Enregistrer</button>
                        </div>
                </form>

                    </div>

                    <!-- Fin Modal Responsive -->


                    <div class="page-header">
                        <h3><i class="fontello-icon-article-alt opaci35"></i> Titre <small>Ajouter un nouveau Titre</small></h3>
                    </div>
                    <form method="post" action="{{route('blog.store')}}" enctype="multipart/form-data" 
                                data-upload-template-id="template-upload-1" data-download-template-id="template-download-1">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="well well-nice form-dark">
                        <div class="control-group">
                            <textarea id="wysiBooEditorBlack" class="input-block-level" style="height: 100px" name="blog_titre" placeholder="Enter text ..."></textarea>
                        </div>
                    </div>
                    <div class="page-header">
                        <h3><i class="fontello-icon-article-alt opaci35"></i> Gestion des contenus <small>Ajouter un paragraphe</small></h3>
                    </div>
                    <div class="row-fluid">
                            <div class="well well-nice">
                                <h4 class="simple-header">Paragraphe <small>Ajouter un nouveau paragraphe</small></h4>
                                <div class="control-group">
                                    <textarea id="wysiBooEditor" class="input-block-level" style="height: 160px" name="blog_paragraphe" placeholder="Enter text ..."></textarea>
                                </div>
                            </div>
                    </div>
                </section>
                
                <section>
                	
                    <div class="page-header">
                        <h3><i class="fontello-icon-article-alt opaci35"></i> Gestion des mots-clés <small>Ajouter des mots-clés</small></h3>
                    </div>

                    <div class="row-fluid">
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
                                        <select id="box6View" multiple="multiple" class="input-block-level" style="height:210px" name="mot-cles[]">
                                        </select>
                                        <span id="box6Counter" class="countLabel"></span>
                                        <select id="box6Storage">
                                        </select>
                                    </li>
                                </ul>
                            </div>
                    </div>
                    <!-- // Sample row ----------------------------------------------------------- Dual select box -->  


                     <div class="page-header">
                        <h3><i class="fontello-icon-monitor opaci35"></i> Ajout des mots-clés <small>Ajouter de nouveaux mots-clés</small></h3>
                    </div>
                     <!-- // form item -->                                                 
                    <label for="metaArticleKeywords" class="control-label">Ecrire les mots-clés</label>                                                 
                    <input id="metaArticleKeywords" class="span4" type="text" name="metaArticleKeywords" value="" /> 
                    <span class="help-block">Écrivez ou sélectionnez une étiquette et appuyez sur "entrer" ou "virgule" pour les ajouter.</span> 
                    <button class="btn btn-green pull-right" type="submit">Enregistrer les mots-clés</button>
                                                <!-- // form item --> 

                     <div class="page-header">
                        <h3><i class="fontello-icon-monitor opaci35"></i> Chargement des fichiers <small>Uploder plusieurs fichiers</small></h3>
                    </div>
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="well well-nice well-box "> 
                                    <noscript>
                                    <input type="hidden" name="redirect" value="http://blueimp.github.com/jQuery-File-Upload/">
                                    </noscript>
                                    <!-- // navbar -->
                                    <!-- // section item -->
                                    
                                    <div class="section-content">
                                        <div class="row-fluid">
                                            <div class="well well-nice no-margin">
                                                <ul class="span8 unstyled">
                                                    <li>La taille maximale des fichiers est de <strong>5 MB</strong></span>.</li>
                                                    <li>Les fichiers images autorisés sont (<strong>JPG, GIF, PNG</strong>) </li>
                                                    <li>Avec la fonctionnalité <strong>drag &amp; drop</strong> vous pouvez importer vos fichiers depuis vos navigateures Google Chrome, Mozilla Firefox et Apple Safari.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>


                    
                </section>
                
                <section>
                    <div class="row-fluid margin-bottom30">
                        <div class="span5">
                            <div class="row-fluid margin-bottom20">
                                <div class="span6">
                                    <h4 class="simple-header"> Charger les fichiers <small>Taille fixe</small> </h4>
                                    <div class="well well-nice inline">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-preview thumbnail" style="width: 200px; height: 120px;"></div>
                                            <div> <span class="btn btn-file"> <span class="fileupload-new">Select image</span> <span class="fileupload-exists">Change</span>
                                                <input type="file" name="file" id="file">
                                                </span> <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // Example row --> 

                        <div class="form-actions no-margin-bootom">
                            <button type="submit" class="btn btn-green">Tout sauvegarder</button>
                            <button class="btn cancel" type="reset">Tout annuler</button>
                        </div>
                     </form>   
                </section>
                
            </div>
            <!-- // page content --> 
            
        </div>
        <!-- // main-content --> 
        
    </div>
    <!-- // main-container  -->
 @include('admin.foot')
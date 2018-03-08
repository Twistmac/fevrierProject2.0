@include('admin.head')
<div class="main-content container-fluid">
                   <div id="page-content" class="page-content">
                       <!-- <section>
                           <div class="page-header">
                               <h3>Gestion des utilisateurs en général</h3>
                           </div>
                           <div>
                               <h4>Filtre de recherche</h4>
                               <legend>
                                   <input id="nom" type="text" name="iptRechercheClient" placeholder="Nom/Nom agence">
                                   <select id="lstTypeCategorie">
                                       <option value="Membre"> Membre</option>
                                       <option value="Vendeur Constructeur"> Vendeur Constructeur</option>
                                       <option value="Vendeur Promoteur"> Vendeur Promoteur</option>
                                       <option value="APL"> AFA</option>
                                       <option value="AFA"> APL</option>
                                   </select>
                                   <input id="nombre" type="text" name="nombre" placeholder="Nombre par page">
                                   <a class="btn btn-success" href="#">Recherche</a>
                               </legend>
                           </div>
                           <div class="row-fluid margin-bottom16">
                               <div class="span12">
                                   <div class="widget widget-simple widget-table">
                                       <table id="tableMembre" class="table boo-table table-striped table-hover">
                                           <thead>
                                               <tr>
                                                 <th scope="col">
                                                   <label class="checkbox">
                                                       <input class="checkbox" type="checkbox" value="option1">
                                                   </label>
                                                 </th>
                                                   <th scope="col">Rang</th>
                                                   <th scope="col">Photo/Logo <span class="column-sorter"></span></th>
                                                   <th scope="col">Nom/Nom agence <span class="column-sorter"></span></th>
                                                   <th scope="col">Categorie <span class="column-sorter"></span></th>
                                                   <th scope="col">Sous-categorie <span class="column-sorter"></span></th>
                                                   <th scope="col">Date inscription <span class="column-sorter"></span></th>
                                                   <th scope="col">Statut<span class="column-sorter"></span></th>
                                                   <th scope="col">Detail<span class="column-sorter"></span></th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               <tr>
                                                   <td>
                                                       <label class="checkbox">
                                                           <input class="checkbox" type="checkbox" value="option1">
                                                       </label>
                                                   </td>
                                                   <td>1A</td>
                                                   <td>
                                                       <img class="thumb" src="assets/img/profil.png" width="50">
                                                   </td>
                                                   <td>RAFALIMANANA Njakaharisoa Andrinirina</td>
                                                   <td>Client</td>
                                                   <td>Acheteur</td>
                                                   <td>13/12/1994</td>
                                                   <td>
                                                       <label class="checkbox">
                                                           <input class="checkbox" type="checkbox" value="option1"> Actif
                                                       </label>
                                                   </td>
                                                   <td>
                                                       <a class="btn btn-warning" href="#">Detail</a>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <label class="checkbox">
                                                           <input class="checkbox" type="checkbox" value="option1">
                                                       </label>
                                                   </td>
                                                   <td>2B</td>
                                                   <td>
                                                       <img class="thumb" src="assets/img/logoNew.png" width="50">
                                                   </td>
                                                   <td>Oktobone</td>
                                                   <td>AFA</td>
                                                   <td>Vendeur</td>
                                                   <td>13/12/1994</td>
                                                   <td>
                                                       <label class="checkbox">
                                                           <input class="checkbox" type="checkbox" value="option1"> Actif
                                                       </label>
                                                   </td>
                                                   <td>
                                                       <a class="btn btn-warning" href="#">Detail</a>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <label class="checkbox">
                                                           <input class="checkbox" type="checkbox" value="option1">
                                                       </label>
                                                   </td>
                                                   <td>1C</td>
                                                   <td>
                                                       <img class="thumb" src="assets/img/logoNew.png" width="50">
                                                   </td>
                                                   <td>Oktobone</td>
                                                   <td>APL</td>
                                                   <td>Vendeur</td>
                                                   <td>13/12/1994</td>
                                                   <td>
                                                       <label class="checkbox">
                                                           <input class="checkbox" type="checkbox" value="option1"> Actif
                                                       </label>
                                                   </td>
                                                   <td>
                                                       <a class="btn btn-warning" href="#">Detail</a>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <label class="checkbox">
                                                           <input class="checkbox" type="checkbox" value="option1">
                                                       </label>
                                                   </td>
                                                   <td>1A</td>
                                                   <td>
                                                       <img class="thumb" src="assets/img/profil.png" width="50">
                                                   </td>
                                                   <td>RAFALIMANANA Njakaharisoa Andrinirina</td>
                                                   <td>Client</td>
                                                   <td>Acheteur</td>
                                                   <td>13/12/1994</td>
                                                   <td>
                                                       <label class="checkbox">
                                                           <input class="checkbox" type="checkbox" value="option1"> Actif
                                                       </label>
                                                   </td>
                                                   <td>
                                                       <a class="btn btn-warning" href="#">Detail</a>
                                                   </td>
                                               </tr>
                                           </tbody>
                                       </table>

                                   </div>
                                   <div class="pagination pagination-btn pull-right">
                                       <ul>
                                           <li class="disabled">
                                               <a href="#">Precedent</a>
                                           </li>
                                           <li>
                                               <a href="#">1</a>
                                           </li>
                                           <li class="active">
                                               <a href="#">2</a>
                                           </li>
                                           <li>
                                               <a href="#">3</a>
                                           </li>
                                           <li>
                                               <a href="#">4</a>
                                           </li>
                                           <li>
                                               <a href="#">Suivant</a>
                                           </li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </section> -->

                       <section>
                                <div class="page-header">
                                    <h3><i class="opaci35 aweso-icon-table"></i> Tous les Partie prénant</h3>
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="widget widget-simple widget-table">
                                            <table id="exampleDTCF" class="table table-striped table-content table-condensed boo-table table-hover bg-blue-light">
                                                <thead>
                                                    <tr id="HeadersRow0">
                                                        <th scope="col"><input type="checkbox" class="checkbox check-all" data-tableid="exampleDTCF" value="ON" name="check-all"></th>
                                                        <th scope="col">Rang <span class="column-sorter"></span></th>
                                                        <th scope="col">Photo/ logo <span class="column-sorter"></span></th>
                                                        <th scope="col">Nom personne/ agence <span class="column-sorter"></span></th>
                                                        <th scope="col">N° Réf <span class="column-sorter"></span></th>
                                                        <th scope="col">Catégorie <span class="column-sorter"></span></th>
                                                        <th scope="col">Sous-Catégorie <span class="column-sorter"></span></th>
                                                        <th scope="col">Date Inscription<span class="column-sorter"></span></th>
                                                        <th scope="col">Statut<span class="column-sorter"></span></th>
                                                        <th scope="col">Vue <span class="column-sorter"></span></th>
                                                    </tr>
                                                    <tr id="filter-row" class="filter">
                                                        <th></th>
                                                        <th>Order ID</th>
                                                        <th>Customer ID</th>
                                                        <th class="hidden-phone hidden-tablet">Order Date</th>
                                                        <th>Shipped Date</th>
                                                        <th>Freight</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr id="FootersRow0" class="total">
                                                        <th></th>
                                                        <th>Total sum</th>
                                                        <th></th>
                                                        <th class="hidden-phone hidden-tablet"></th>
                                                        <th></th>
                                                        <th class="text-right"></th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <tr id="DataRow0">
                                                        <td><input type="checkbox" class="checkbox check-row" value="0" name="checkRow"></td>
                                                        <td>10248</td>
                                                        <td>VINET</td>
                                                        <td>04/08/2012</td>
                                                        <td>16/08/2012</td>
                                                        <td>32.38</td>
                                                    </tr>
                                                    <tr id="DataRow1">
                                                        <td><input type="checkbox" class="checkbox check-row" value="1" name="checkRow"></td>
                                                        <td>10249</td>
                                                        <td>TOMSP</td>
                                                        <td>05/08/2012</td>
                                                        <td>10/08/2012</td>
                                                        <td>11.61</td>
                                                    </tr>
                                                    <tr id="DataRow2">
                                                        <td><input type="checkbox" class="checkbox check-row" value="2" name="checkRow"></td>
                                                        <td>10250</td>
                                                        <td>HANAR</td>
                                                        <td>08/08/2012</td>
                                                        <td>12/08/2012</td>
                                                        <td>65.83</td>
                                                    </tr>
                                                    <tr id="DataRow3">
                                                        <td><input type="checkbox" class="checkbox check-row" value="3" name="checkRow"></td>
                                                        <td>10251</td>
                                                        <td>VICTE</td>
                                                        <td>08/08/2012</td>
                                                        <td>15/08/2012</td>
                                                        <td>41.34</td>
                                                    </tr>
                                                    <tr id="DataRow4">
                                                        <td><input type="checkbox" class="checkbox check-row" value="4" name="checkRow"></td>
                                                        <td>10252</td>
                                                        <td>SUPRD</td>
                                                        <td>09/08/2012</td>
                                                        <td>11/08/2012</td>
                                                        <td>51.3</td>
                                                    </tr>
                                                    <tr id="DataRow5">
                                                        <td><input type="checkbox" class="checkbox check-row" value="5" name="checkRow"></td>
                                                        <td>10253</td>
                                                        <td>HANAR</td>
                                                        <td>10/08/2012</td>
                                                        <td>16/08/2012</td>
                                                        <td>58.17</td>
                                                    </tr>
                                                    <tr id="DataRow6">
                                                        <td><input type="checkbox" class="checkbox check-row" value="6" name="checkRow"></td>
                                                        <td>10254</td>
                                                        <td>CHOPS</td>
                                                        <td>11/08/2012</td>
                                                        <td>23/08/2012</td>
                                                        <td>22.98</td>
                                                    </tr>
                                                    <tr id="DataRow7">
                                                        <td><input type="checkbox" class="checkbox check-row" value="7" name="checkRow"></td>
                                                        <td>10255</td>
                                                        <td>RICSU</td>
                                                        <td>12/08/2012</td>
                                                        <td>15/08/2012</td>
                                                        <td>148.33</td>
                                                    </tr>
                                                    <tr id="DataRow8">
                                                        <td><input type="checkbox" class="checkbox check-row" value="8" name="checkRow"></td>
                                                        <td>10256</td>
                                                        <td>WELLI</td>
                                                        <td>15/08/2012</td>
                                                        <td>17/08/2012</td>
                                                        <td>13.97</td>
                                                    </tr>
                                                    <tr id="DataRow9">
                                                        <td><input type="checkbox" class="checkbox check-row" value="9" name="checkRow"></td>
                                                        <td>10257</td>
                                                        <td>HILAA</td>
                                                        <td>16/08/2012</td>
                                                        <td>22/08/2012</td>
                                                        <td>81.91</td>
                                                    </tr>
                                                    <tr id="DataRow10">
                                                        <td><input type="checkbox" class="checkbox check-row" value="10" name="checkRow"></td>
                                                        <td>10258</td>
                                                        <td>ERNSH</td>
                                                        <td>17/08/2012</td>
                                                        <td>23/08/2012</td>
                                                        <td>140.51</td>
                                                    </tr>
                                                    <tr id="DataRow11">
                                                        <td><input type="checkbox" class="checkbox check-row" value="11" name="checkRow"></td>
                                                        <td>10259</td>
                                                        <td>CENTC</td>
                                                        <td>18/08/2012</td>
                                                        <td>25/08/2012</td>
                                                        <td>3.25</td>
                                                    </tr>
                                                    <tr id="DataRow12">
                                                        <td><input type="checkbox" class="checkbox check-row" value="12" name="checkRow"></td>
                                                        <td>10260</td>
                                                        <td>OTTIK</td>
                                                        <td>19/08/2012</td>
                                                        <td>29/08/2012</td>
                                                        <td>55.09</td>
                                                    </tr>
                                                    <tr id="DataRow13">
                                                        <td><input type="checkbox" class="checkbox check-row" value="13" name="checkRow"></td>
                                                        <td>10261</td>
                                                        <td>QUEDE</td>
                                                        <td>19/08/2012</td>
                                                        <td>30/08/2012</td>
                                                        <td>3.05</td>
                                                    </tr>
                                                    <tr id="DataRow14">
                                                        <td><input type="checkbox" class="checkbox check-row" value="14" name="checkRow"></td>
                                                        <td>10262</td>
                                                        <td>RATTC</td>
                                                        <td>22/08/2012</td>
                                                        <td>19/09/2012</td>
                                                        <td>48.29</td>
                                                    </tr>
                                                    <tr id="DataRow15">
                                                        <td><input type="checkbox" class="checkbox check-row" value="15" name="checkRow"></td>
                                                        <td>10263</td>
                                                        <td>ERNSH</td>
                                                        <td>23/08/2012</td>
                                                        <td>20/09/2012</td>
                                                        <td>146.06</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- // DATATABLE - DTCF -->

                                        </div>
                                        <!-- // Widget -->

                                    </div>
                                    <!-- // Column -->

                                </div>
                                <!-- // Example row -->

                            </section>

                   </div>
               </div>
           </div>




@include('admin.foot')

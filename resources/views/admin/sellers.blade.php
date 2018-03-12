@include('admin.head')
<div class="main-content container-fluid">
               <div id="page-content" class="page-content tab-content">
                <div class="tab-pane active" id="TabPage1">
                    <h2>Vendreus<small> .Constructeurs /.Promoteurs</small></h2>
                    <hr class="strong margin-0x">
                    <div class="row-fluid">
                        <div class="span12">
                            <!-- Base Tabs - use only .tabbable -->
                            <div class="tabbable tabbable-bordered tabs-top">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#TabTop1" data-toggle="tab">Tous</a></li>
                                    <li><a href="#TabTop2" data-toggle="tab">Constructeurs</a></li>
                                    <li><a href="#TabTop3" data-toggle="tab">Promoteurs</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="TabTop1">
                                      <section>
                                          <div class="page-header">
                                              <h3><small> .Vendeurs </small></h3>
                                          </div>
                                           <div class="row-fluid margin-bottom16">
                                               <div class="span12">
                                                   <div class="widget widget-simple widget-table">
                                                       <table id="exampleDTA" class="table boo-table table-striped table-hover">
                                                           <thead>
                                                               <tr>
                                                                 <th scope="col">
                                                                   <label class="checkbox">
                                                                       <input class="checkbox" type="checkbox" value="option1">
                                                                   </label>
                                                                 </th>
                                                                   <th scope="col">Rang <span class="column-sorter"></span></th>
                                                                   <th scope="col">Photo / Avatar <span class="column-sorter"></span></th>
                                                                   <th scope="col">Non / agence <span class="column-sorter"></span></th>
                                                                   <th scope="col">n° réf <span class="column-sorter"></span></th>
                                                                   <th scope="col">Catégorie <span class="column-sorter"></span></th>
                                                                   <th scope="col">Sous-catégorie <span class="column-sorter"></span></th>
                                                                   <th scope="col">Date inscription <span class="column-sorter"></span></th>
                                                                   <th scope="col">Statut <span class="column-sorter"></span></th>
                                                               </tr>
                                                           </thead>
                                                           <tbody>
                                                               <tr>
                                                                 <td>
                                                                     <label class="checkbox">
                                                                         <input class="checkbox" type="checkbox" value="option1">
                                                                     </label>
                                                                 </td>
                                                                   <td>1</td>
                                                                   <td>
                                                                       <img class="thumb" src="{{link_img('admin/img/profil.png')}}" width="50">
                                                                   </td>
                                                                   <td>Colin Nixon</td>
                                                                   <td>CLI-xxxxx</td>
                                                                   <td>Seller</td>
                                                                   <td>Builder</td>
                                                                   <td>02/10/1986</td>
                                                                   <td>
                                                                      <label class="checkbox">
                                                                          <input class="checkbox" type="checkbox" value="option1">
                                                                      </label>
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                 <td>
                                                                     <label class="checkbox">
                                                                         <input class="checkbox" type="checkbox" value="option1">
                                                                     </label>
                                                                 </td>
                                                                   <td>2</td>
                                                                   <td>
                                                                       <img class="thumb" src="{{link_img('admin/img/profil.png')}}" width="50">
                                                                   </td>
                                                                   <td>Naida Bennett</td>
                                                                   <td>CLI-xxxxx</td>
                                                                   <td>Seller</td>
                                                                   <td>Developper</td>
                                                                   <td>04/21/1959</td>
                                                                   <td>
                                                                      <label class="checkbox">
                                                                          <input class="checkbox" type="checkbox" value="option1">
                                                                      </label>
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                 <td>
                                                                     <label class="checkbox">
                                                                         <input class="checkbox" type="checkbox" value="option1">
                                                                     </label>
                                                                 </td>
                                                                   <td>3</td>
                                                                   <td>
                                                                       <img class="thumb" src="{{link_img('admin/img/profil.png')}}" width="50">
                                                                   </td>
                                                                   <td>Danielle Myers</td>
                                                                   <td>CLI-xxxxx</td>
                                                                   <td>Membre</td>
                                                                   <td>Non-enregistrés</td>
                                                                   <td>12/11/1971</td>
                                                                   <td>
                                                                      <label class="checkbox">
                                                                          <input class="checkbox" type="checkbox" value="option1">
                                                                      </label>
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                 <td>
                                                                     <label class="checkbox">
                                                                         <input class="checkbox" type="checkbox" value="option1">
                                                                     </label>
                                                                 </td>
                                                                   <td>4</td>
                                                                   <td>
                                                                       <img class="thumb" src="{{link_img('admin/img/profil.png')}}" width="50">
                                                                   </td>
                                                                   <td>Whitney Jones</td>
                                                                   <td>CLI-xxxxx</td>
                                                                   <td>Membre</td>
                                                                   <td>enregistrés</td>
                                                                   <td>08/09/1976</td>
                                                                   <td>
                                                                      <label class="checkbox">
                                                                          <input class="checkbox" type="checkbox" value="option1">
                                                                      </label>
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                 <td>
                                                                     <label class="checkbox">
                                                                         <input class="checkbox" type="checkbox" value="option1">
                                                                     </label>
                                                                 </td>
                                                                   <td>5</td>
                                                                   <td>
                                                                       <img class="thumb" src="{{link_img('admin/img/profil.png')}}" width="50">
                                                                   </td>
                                                                   <td>Marvin Bell</td>
                                                                   <td>CLI-xxxxx</td>
                                                                   <td>APL</td>
                                                                   <td></td>
                                                                   <td>10/17/1979</td>
                                                                   <td>
                                                                      <label class="checkbox">
                                                                          <input class="checkbox" type="checkbox" value="option1">
                                                                      </label>
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                 <td>
                                                                     <label class="checkbox">
                                                                         <input class="checkbox" type="checkbox" value="option1">
                                                                     </label>
                                                                 </td>
                                                                   <td>6</td>
                                                                   <td>
                                                                       <img class="thumb" src="{{link_img('admin/img/profil.png')}}" width="50">
                                                                   </td>
                                                                   <td>Lucas Melendez</td>
                                                                   <td>CLI-xxxxx</td>
                                                                   <td>APL</td>
                                                                   <td></td>
                                                                   <td>02/25/1967</td>
                                                                   <td>
                                                                      <label class="checkbox">
                                                                          <input class="checkbox" type="checkbox" value="option1">
                                                                      </label>
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                 <td>
                                                                     <label class="checkbox">
                                                                         <input class="checkbox" type="checkbox" value="option1">
                                                                     </label>
                                                                 </td>
                                                                   <td>7</td>
                                                                   <td>
                                                                       <img class="thumb" src="{{link_img('admin/img/profil.png')}}" width="50">
                                                                   </td>
                                                                   <td>Devin Harris</td>
                                                                   <td>CLI-xxxxx</td>
                                                                   <td>AFA</td>
                                                                   <td></td>
                                                                   <td>01/09/1990</td>
                                                                   <td>
                                                                      <label class="checkbox">
                                                                          <input class="checkbox" type="checkbox" value="option1">
                                                                      </label>
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                 <td>
                                                                     <label class="checkbox">
                                                                         <input class="checkbox" type="checkbox" value="option1">
                                                                     </label>
                                                                 </td>
                                                                   <td>8</td>
                                                                   <td>
                                                                       <img class="thumb" src="{{link_img('admin/img/profil.png')}}" width="50">
                                                                   </td>
                                                                   <td>Tucker Graves</td>
                                                                   <td>CLI-xxxxx</td>
                                                                   <td>Yorba Linda</td>
                                                                   <td>Long Beach</td>
                                                                   <td>12/03/1962</td>
                                                                   <td>
                                                                      <label class="checkbox">
                                                                          <input class="checkbox" type="checkbox" value="option1">
                                                                      </label>
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                 <td>
                                                                     <label class="checkbox">
                                                                         <input class="checkbox" type="checkbox" value="option1">
                                                                     </label>
                                                                 </td>
                                                                   <td>9</td>
                                                                   <td>
                                                                       <img class="thumb" src="{{link_img('admin/img/profil.png')}}" width="50">
                                                                   </td>
                                                                   <td>Linus Carpenter</td>
                                                                   <td>CLI-xxxxx</td>
                                                                   <td>Attleboro</td>
                                                                   <td>Long Beach</td>
                                                                   <td>03/06/1975</td>
                                                                   <td>
                                                                      <label class="checkbox">
                                                                          <input class="checkbox" type="checkbox" value="option1">
                                                                      </label>
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                 <td>
                                                                     <label class="checkbox">
                                                                         <input class="checkbox" type="checkbox" value="option1">
                                                                     </label>
                                                                 </td>
                                                                   <td>10</td>
                                                                   <td>
                                                                       <img class="thumb" src="{{link_img('admin/img/profil.png')}}" width="50">
                                                                   </td>
                                                                   <td>Quinlan Lindsay</td>
                                                                   <td>CLI-xxxxx</td>
                                                                   <td>San Antonio</td>
                                                                   <td>Long Beach</td>
                                                                   <td>10/19/1963</td>
                                                                   <td>
                                                                      <label class="checkbox">
                                                                          <input class="checkbox" type="checkbox" value="option1">
                                                                      </label>
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                 <td>
                                                                     <label class="checkbox">
                                                                         <input class="checkbox" type="checkbox" value="option1">
                                                                     </label>
                                                                 </td>
                                                                   <td>11</td>
                                                                   <td>
                                                                       <img class="thumb" src="{{link_img('admin/img/profil.png')}}" width="50">
                                                                   </td>
                                                                   <td>Jolie Ryan</td>
                                                                   <td>CLI-xxxxx</td>
                                                                   <td>Yonkers</td>
                                                                   <td>Long Beach</td>
                                                                   <td>12/17/1969</td>
                                                                   <td>
                                                                      <label class="checkbox">
                                                                          <input class="checkbox" type="checkbox" value="option1">
                                                                      </label>
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                 <td>
                                                                     <label class="checkbox">
                                                                         <input class="checkbox" type="checkbox" value="option1">
                                                                     </label>
                                                                 </td>
                                                                   <td>12</td>
                                                                   <td>
                                                                       <img class="thumb" src="{{link_img('admin/img/profil.png')}}" width="50">
                                                                   </td>
                                                                   <td>Roanna Adkins</td>
                                                                   <td>CLI-xxxxx</td>
                                                                   <td>Wynne</td>
                                                                   <td>Long Beach</td>
                                                                   <td>07/20/1980</td>
                                                                   <td>
                                                                      <label class="checkbox">
                                                                          <input class="checkbox" type="checkbox" value="option1">
                                                                      </label>
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                 <td>
                                                                     <label class="checkbox">
                                                                         <input class="checkbox" type="checkbox" value="option1">
                                                                     </label>
                                                                 </td>
                                                                   <td>13</td>
                                                                   <td>
                                                                       <img class="thumb" src="{{link_img('admin/img/profil.png')}}" width="50">
                                                                   </td>
                                                                   <td>Berk Clemons</td>
                                                                   <td>CLI-xxxxx</td>
                                                                   <td>Madison</td>
                                                                   <td>Long Beach</td>
                                                                   <td>09/10/1963</td>
                                                                   <td>
                                                                      <label class="checkbox">
                                                                          <input class="checkbox" type="checkbox" value="option1">
                                                                      </label>
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                 <td>
                                                                     <label class="checkbox">
                                                                         <input class="checkbox" type="checkbox" value="option1">
                                                                     </label>
                                                                 </td>
                                                                   <td>14</td>
                                                                   <td>
                                                                       <img class="thumb" src="{{link_img('admin/img/profil.png')}}" width="50">
                                                                   </td>
                                                                   <td>Tamara Stokes</td>
                                                                   <td>CLI-xxxxx</td>
                                                                   <td>Edmond</td>
                                                                   <td>Long Beach</td>
                                                                   <td>01/14/1981</td>
                                                                   <td>
                                                                      <label class="checkbox">
                                                                          <input class="checkbox" type="checkbox" value="option1">
                                                                      </label>
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                 <td>
                                                                     <label class="checkbox">
                                                                         <input class="checkbox" type="checkbox" value="option1">
                                                                     </label>
                                                                 </td>
                                                                   <td>15</td>
                                                                   <td>
                                                                       <img class="thumb" src="{{link_img('admin/img/profil.png')}}" width="50">
                                                                   </td>
                                                                   <td>Shoshana Hodges</td>
                                                                   <td>CLI-xxxxx</td>
                                                                   <td>Reading</td>
                                                                   <td>Long Beach</td>
                                                                   <td>11/12/1986</td>
                                                                   <td>
                                                                      <label class="checkbox">
                                                                          <input class="checkbox" type="checkbox" value="option1">
                                                                      </label>
                                                                   </td>
                                                               </tr>
                                                           </tbody>
                                                       </table>
                                                       <!-- // DATATABLE - DTA -->

                                                   </div>
                                                   <!-- // Column -->

                                               </div>
                                               <!-- // Column -->

                                           </div>
                                     <!-- // Example row -->

                                 </section>
                                    </div>
                                    <!-- // tab 1 -->

                                    <div class="tab-pane" id="TabTop2">
                                      <section>
                                          <div class="page-header">
                                              <h3><small> .Constructeurs </small></h3>
                                          </div>
                                           <div class="row-fluid margin-bottom16">
                                               <div class="span12">
                                                   <div class="widget widget-simple widget-table">
                                                       <table id="exampleDTA" class="table boo-table table-striped table-hover">
                                                           <thead>
                                                               <tr>
                                                                 <th scope="col">
                                                                   <label class="checkbox">
                                                                       <input class="checkbox" type="checkbox" value="option1">
                                                                   </label>
                                                                 </th>
                                                                   <th scope="col">Rang <span class="column-sorter"></span></th>
                                                                   <th scope="col">Photo / Avatar <span class="column-sorter"></span></th>
                                                                   <th scope="col">Non / agence <span class="column-sorter"></span></th>
                                                                   <th scope="col">n° réf <span class="column-sorter"></span></th>
                                                                   <th scope="col">Catégorie <span class="column-sorter"></span></th>
                                                                   <th scope="col">Sous-catégorie <span class="column-sorter"></span></th>
                                                                   <th scope="col">Date inscription <span class="column-sorter"></span></th>
                                                                   <th scope="col">Statut <span class="column-sorter"></span></th>
                                                               </tr>
                                                           </thead>
                                                           <tbody>
                                                               <tr>
                                                                 <td>
                                                                     <label class="checkbox">
                                                                         <input class="checkbox" type="checkbox" value="option1">
                                                                     </label>
                                                                 </td>
                                                                   <td>1</td>
                                                                   <td>
                                                                       <img class="thumb" src="{{link_img('admin/img/profil.png')}}" width="50">
                                                                   </td>
                                                                   <td>Colin Nixon</td>
                                                                   <td>CLI-xxxxx</td>
                                                                   <td>Seller</td>
                                                                   <td>Builder</td>
                                                                   <td>02/10/1986</td>
                                                                   <td>
                                                                      <label class="checkbox">
                                                                          <input class="checkbox" type="checkbox" value="option1">
                                                                      </label>
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                 <td>
                                                                     <label class="checkbox">
                                                                         <input class="checkbox" type="checkbox" value="option1">
                                                                     </label>
                                                                 </td>
                                                                   <td>2</td>
                                                                   <td>
                                                                       <img class="thumb" src="{{link_img('admin/img/profil.png')}}" width="50">
                                                                   </td>
                                                                   <td>Naida Bennett</td>
                                                                   <td>CLI-xxxxx</td>
                                                                   <td>Seller</td>
                                                                   <td>Developper</td>
                                                                   <td>04/21/1959</td>
                                                                   <td>
                                                                      <label class="checkbox">
                                                                          <input class="checkbox" type="checkbox" value="option1">
                                                                      </label>
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                 <td>
                                                                     <label class="checkbox">
                                                                         <input class="checkbox" type="checkbox" value="option1">
                                                                     </label>
                                                                 </td>
                                                                   <td>3</td>
                                                                   <td>
                                                                       <img class="thumb" src="{{link_img('admin/img/profil.png')}}" width="50">
                                                                   </td>
                                                                   <td>Danielle Myers</td>
                                                                   <td>CLI-xxxxx</td>
                                                                   <td>Membre</td>
                                                                   <td>Non-enregistrés</td>
                                                                   <td>12/11/1971</td>
                                                                   <td>
                                                                      <label class="checkbox">
                                                                          <input class="checkbox" type="checkbox" value="option1">
                                                                      </label>
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                 <td>
                                                                     <label class="checkbox">
                                                                         <input class="checkbox" type="checkbox" value="option1">
                                                                     </label>
                                                                 </td>
                                                                   <td>4</td>
                                                                   <td>
                                                                       <img class="thumb" src="{{link_img('admin/img/profil.png')}}" width="50">
                                                                   </td>
                                                                   <td>Whitney Jones</td>
                                                                   <td>CLI-xxxxx</td>
                                                                   <td>Membre</td>
                                                                   <td>enregistrés</td>
                                                                   <td>08/09/1976</td>
                                                                   <td>
                                                                      <label class="checkbox">
                                                                          <input class="checkbox" type="checkbox" value="option1">
                                                                      </label>
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                 <td>
                                                                     <label class="checkbox">
                                                                         <input class="checkbox" type="checkbox" value="option1">
                                                                     </label>
                                                                 </td>
                                                                   <td>5</td>
                                                                   <td>
                                                                       <img class="thumb" src="{{link_img('admin/img/profil.png')}}" width="50">
                                                                   </td>
                                                                   <td>Marvin Bell</td>
                                                                   <td>CLI-xxxxx</td>
                                                                   <td>APL</td>
                                                                   <td></td>
                                                                   <td>10/17/1979</td>
                                                                   <td>
                                                                      <label class="checkbox">
                                                                          <input class="checkbox" type="checkbox" value="option1">
                                                                      </label>
                                                                   </td>
                                                               </tr>

                                                           </tbody>
                                                       </table>
                                                       <!-- // DATATABLE - DTA -->

                                                   </div>
                                                   <!-- // Column -->

                                               </div>
                                               <!-- // Column -->

                                           </div>
                                     <!-- // Example row -->

                                 </section>
                                    </div>
                                    <!-- // tab 2 -->

                                    <div class="tab-pane" id="TabTop3">
                                      <section>
                                          <div class="page-header">
                                              <h3><small> .Promoteurs </small></h3>
                                          </div>
                                           <div class="row-fluid margin-bottom16">
                                               <div class="span12">
                                                   <div class="widget widget-simple widget-table">
                                                       <table id="exampleDTA" class="table boo-table table-striped table-hover">
                                                           <thead>
                                                               <tr>
                                                                 <th scope="col">
                                                                   <label class="checkbox">
                                                                       <input class="checkbox" type="checkbox" value="option1">
                                                                   </label>
                                                                 </th>
                                                                   <th scope="col">Rang <span class="column-sorter"></span></th>
                                                                   <th scope="col">Photo / Avatar <span class="column-sorter"></span></th>
                                                                   <th scope="col">Non / agence <span class="column-sorter"></span></th>
                                                                   <th scope="col">n° réf <span class="column-sorter"></span></th>
                                                                   <th scope="col">Catégorie <span class="column-sorter"></span></th>
                                                                   <th scope="col">Sous-catégorie <span class="column-sorter"></span></th>
                                                                   <th scope="col">Date inscription <span class="column-sorter"></span></th>
                                                                   <th scope="col">Statut <span class="column-sorter"></span></th>
                                                               </tr>
                                                           </thead>
                                                           <tbody>
                                                               <tr>
                                                                 <td>
                                                                     <label class="checkbox">
                                                                         <input class="checkbox" type="checkbox" value="option1">
                                                                     </label>
                                                                 </td>
                                                                   <td>1</td>
                                                                   <td>
                                                                       <img class="thumb" src="{{link_img('admin/img/profil.png')}}" width="50">
                                                                   </td>
                                                                   <td>Colin Nixon</td>
                                                                   <td>CLI-xxxxx</td>
                                                                   <td>Seller</td>
                                                                   <td>Builder</td>
                                                                   <td>02/10/1986</td>
                                                                   <td>
                                                                      <label class="checkbox">
                                                                          <input class="checkbox" type="checkbox" value="option1">
                                                                      </label>
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                 <td>
                                                                     <label class="checkbox">
                                                                         <input class="checkbox" type="checkbox" value="option1">
                                                                     </label>
                                                                 </td>
                                                                   <td>2</td>
                                                                   <td>
                                                                       <img class="thumb" src="{{link_img('admin/img/profil.png')}}" width="50">
                                                                   </td>
                                                                   <td>Naida Bennett</td>
                                                                   <td>CLI-xxxxx</td>
                                                                   <td>Seller</td>
                                                                   <td>Developper</td>
                                                                   <td>04/21/1959</td>
                                                                   <td>
                                                                      <label class="checkbox">
                                                                          <input class="checkbox" type="checkbox" value="option1">
                                                                      </label>
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                 <td>
                                                                     <label class="checkbox">
                                                                         <input class="checkbox" type="checkbox" value="option1">
                                                                     </label>
                                                                 </td>
                                                                   <td>3</td>
                                                                   <td>
                                                                       <img class="thumb" src="{{link_img('admin/img/profil.png')}}" width="50">
                                                                   </td>
                                                                   <td>Danielle Myers</td>
                                                                   <td>CLI-xxxxx</td>
                                                                   <td>Membre</td>
                                                                   <td>Non-enregistrés</td>
                                                                   <td>12/11/1971</td>
                                                                   <td>
                                                                      <label class="checkbox">
                                                                          <input class="checkbox" type="checkbox" value="option1">
                                                                      </label>
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                 <td>
                                                                     <label class="checkbox">
                                                                         <input class="checkbox" type="checkbox" value="option1">
                                                                     </label>
                                                                 </td>
                                                                   <td>4</td>
                                                                   <td>
                                                                       <img class="thumb" src="{{link_img('admin/img/profil.png')}}" width="50">
                                                                   </td>
                                                                   <td>Whitney Jones</td>
                                                                   <td>CLI-xxxxx</td>
                                                                   <td>Membre</td>
                                                                   <td>enregistrés</td>
                                                                   <td>08/09/1976</td>
                                                                   <td>
                                                                      <label class="checkbox">
                                                                          <input class="checkbox" type="checkbox" value="option1">
                                                                      </label>
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                 <td>
                                                                     <label class="checkbox">
                                                                         <input class="checkbox" type="checkbox" value="option1">
                                                                     </label>
                                                                 </td>
                                                                   <td>5</td>
                                                                   <td>
                                                                       <img class="thumb" src="{{link_img('admin/img/profil.png')}}" width="50">
                                                                   </td>
                                                                   <td>Marvin Bell</td>
                                                                   <td>CLI-xxxxx</td>
                                                                   <td>APL</td>
                                                                   <td></td>
                                                                   <td>10/17/1979</td>
                                                                   <td>
                                                                      <label class="checkbox">
                                                                          <input class="checkbox" type="checkbox" value="option1">
                                                                      </label>
                                                                   </td>
                                                               </tr>

                                                           </tbody>
                                                       </table>
                                                       <!-- // DATATABLE - DTA -->

                                                   </div>
                                                   <!-- // Column -->

                                               </div>
                                               <!-- // Column -->

                                           </div>
                                     <!-- // Example row -->

                                 </section>
                                    </div>
                                    <!-- // tab 3 -->

                                </div>
                            </div>
                            <!-- // Tabs TOP - .tabbable-bordered -->
                            <hr class="margin-xxx">
                        </div>
                    </div>
            </div>
            </div>
            </div>
@include('admin.foot')

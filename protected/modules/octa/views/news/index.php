<?php







/* 



 * To change this license header, choose License Headers in Project Properties.



 * To change this template file, choose Tools | Templates



 * and open the template in the editor.



 */



?>



<div class="col-sm-12">



    <div id="success-alert" class="alert alert-success" style="display:none"></div>



                <section class="panel">



                    <header class="panel-heading" style="text-align: center">



                        CMS Table



                        



                        



                    </header>



                    <div class="col-sm-12" style="text-align: center">



<!--                        <div style="padding:10px;">



                            <h4>Search</h4>



                        <form id="search-vendor" method="POST" action="<?php echo Yii::app()->createUrl('octa/vendor/search');?>">



                             <div class="form-group">



                            <label class="col-lg-2 control-label">CMS Name</label>



                            <div class="col-lg-2">



                                <input type="text" class="form-control" name="vendor" required="required"/>



                            </div>



                            <div class="col-lg-2">



                              <input type="submit" class="btn btn-primary"  value="Search"/>  



                            </div>



                             </div> 



                             



                        </form> 



                            <div class="col-lg-2"><a  href="<?php echo Yii::app()->createUrl("octa/cms/addcms");?>"  class="btn btn-success" >Add new Vendor</a></div>



                            



                        </div>-->



                        



                        



                       



                    </div>



                    <div class="panel-body" id="vendor-row">



                        <table class="table  table-hover general-table" >



                            <thead>



                            <tr>



								<th>Page Title</th>

								<th>Created Date</th>

                                <th>Edit/Delete </th>



                            </tr>



                            </thead>



                            <tbody>



                            <?php foreach ($cms as $cmss) { ?>



                            <tr id="row-<?php echo $cmss->id;?>">



                                <td><a href="<?php echo Yii::app()->createUrl("octa/news/edit",array("id"=>$cmss->id));?>"><?php echo $cmss->title ?></a></td>


								<td><?=$cmss->date_added?></td>
                                



                                <td>



                                    <a href="<?php echo Yii::app()->createUrl("octa/news/edit",array("id"=>$cmss->id));?>"><img src="<?php echo Yii::app()->baseUrl?>/images/write.png" alt=""/></a>



                                    <a  href="<?php echo Yii::app()->createUrl("octa/news/delete",array("id"=>$cmss->id));?>" onclick="return confirm('Are you sure you want to Delete CMS?');"  ><img src="<?php echo Yii::app()->baseUrl?>/images/delete-icon.png" alt=""/></a>



                                </td>



                            </tr>



                            <?php } ?>



                           



                            </tbody>



                        </table>



                    </div>



                    



                        <div style="text-align: center">



                     <?php                        



    $this->widget('CLinkPager', array(



        'pages' => $pages,



        'header' =>  "<nav>",



        'nextPageLabel' => 'Next',



        'prevPageLabel' => 'Prev',



        'selectedPageCssClass' => 'active',



        'hiddenPageCssClass' => 'disabled',



        'htmlOptions' => array(



            'class' => 'pagination',



        )



    ))



    ?>



                    </div>



                    



                </section>



            </div>
















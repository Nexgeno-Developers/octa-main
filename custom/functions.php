<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//*************************************
    function pic_status($ab)
    {
        $img=explode(".",$ab);
        $p_ext=$img[0].rand(0,50).".".$img[1];
        return $p_ext;
    }
//////////////////////********************

      function UploadImages($images,$id,$path,$class)
      {
           foreach ($images as $image => $pic) 
           {
               $extension= $pic->extensionName;
               
               if ($extension=="jpg" || $extension=="png" || $extension=="jpeg" || $extension=="gif" || $extension=="JPG" || $extension=="JPEG" || $extension=="PNG" || $extension=="GIF" )
               {
                   if (!file_exists(Yii::app()->basePath."/../".$path."/".$id))
                   {
                       mkdir (Yii::app()->basePath."/../".$path."/".$id, 0777, true);
                    }
                   // if (!empty($pic) && !file_exists(Yii::app()->basePath."/../".$path."/".$id."/".$pic ))
                     if (!empty($pic))
                    {
                       $imageName = pic_status($pic);

                        $model = new StrngthPagesImages();
                        $model->image=$imageName;
                        $model->st_pg_id=$id;
                        $model->status=1;
                        $model->save();
                       // $model->image->saveAs(Yii::app()->basePath."/../".$path."/".$id."/".$pic);
                        $pic->saveAs(Yii::app()->basePath."/../".$path."/".$id."/".$imageName);
                     }
                }
            }
         }
        
      function  CheckImages($images)
      {
          $flag= true;
          foreach ($images as $image => $pic) {
                            $extension= $pic->extensionName;
                             if ($extension=="jpg" || $extension=="png" || $extension=="jpeg" || $extension=="gif" || $extension=="JPG" || $extension=="JPEG" || $extension=="PNG" || $extension=="GIF" )
                                {
                                 
                                }
                                else
                                {
                                    $flag=false;
                                    $error="Image extension not valid";
                                    break;
                                }
                             }
                             return $flag;
      }

//*******************************************************************************
////            $cri = new CDbCriteria();
//                              $cri->condition="user_id=:user_id and  group_id=:group_id";
//                              $cri->params=array(":user_id"=>$id,":group_id"=>$groupName );
//                                 $strngthPaggroupmembers = GroupMembers::model()->find($cri);
//*******************************************************************************
   function getting_pages_main($tab)   
   {
       $returnpages='';
       $pages ='';
       
       if($tab=='strength')
       {
          $pages = StrngthPages::model()->findAll();
          
//          echo '<pre>';
//          print_r($pages);
//          die('strnght pages');
       }    
       
       if(!empty($pages))
       {

           foreach($pages as $page)
           {
               //<?php echo Yii::app()->createUrl("main/default/addreview")
               $returnpages.= '<li><a href="'.Yii::app()->createUrl("main/default/strength",array("id"=>$page->id)).'">'.$page->title.'</a></li>';
           }    
       }    
       
       
       
       return $returnpages;
       
   } 
  //****************************************************************************
         function UploadImages2($images,$id,$path,$class)
      {
           foreach ($images as $image => $pic) 
           {
               $extension= $pic->extensionName;
               if ($extension=="jpg" || $extension=="png" || $extension=="jpeg" || $extension=="gif" || $extension=="JPG" || $extension=="JPEG" || $extension=="PNG" || $extension=="GIF" )
               {
                   if (!file_exists(Yii::app()->basePath."/../".$path."/".$id))
                   {
                       mkdir (Yii::app()->basePath."/../".$path."/".$id, 0777, true);
                    }
                    if (!empty($pic) && !file_exists(Yii::app()->basePath."/../".$path."/".$id."/".$pic ))
                    {
                        $model = new ProductPagesImages();
                        $model->image=$pic;
                        $model->pr_pg_id=$id;
                        $model->status=1;
                        $model->save();
                        $model->image->saveAs(Yii::app()->basePath."/../".$path."/".$id."/".$pic );
                     }
                }
            }
         }
//******************************************************************************
         
function getting_product_pages_main()   
{
       $returnpages='';
       $pages ='';
       
       $pages = ProductPages::model()->findAll();
       
       if(!empty($pages))
       {

           foreach($pages as $page)
           {
               //<?php echo Yii::app()->createUrl("main/default/addreview")
               $returnpages.= '<li><a href="'.Yii::app()->createUrl("main/default/product",array("id"=>$page->id)).'">'.$page->title.'</a></li>';
           }    
       }    
       
       
       
       return $returnpages;
       
   } 
//*****************************************************************************
      function UploadImages3($images,$id,$path,$class)
      {
           foreach ($images as $image => $pic) 
           {
               $extension= $pic->extensionName;
               if ($extension=="jpg" || $extension=="png" || $extension=="jpeg" || $extension=="gif" || $extension=="JPG" || $extension=="JPEG" || $extension=="PNG" || $extension=="GIF" )
               {
                   if (!file_exists(Yii::app()->basePath."/../".$path."/".$id))
                   {
                       mkdir (Yii::app()->basePath."/../".$path."/".$id, 0777, true);
                    }
                    if (!empty($pic) && !file_exists(Yii::app()->basePath."/../".$path."/".$id."/".$pic ))
                    {
                        $model = new QuailtyAssuranceImages();
                        $model->image=$pic;
                        $model->qu_pg_id=$id;
                        $model->status=1;
                        $model->save();
                        $model->image->saveAs(Yii::app()->basePath."/../".$path."/".$id."/".$pic );
                     }
                }
            }
         }
//*****************************************************************************
 function getting_quality_assurance()   
{
       $returnpages='';
       $pages ='';
       
       $pages = QualityAssurance::model()->findAll();
       
       if(!empty($pages))
       {

           foreach($pages as $page)
           {
               //<?php echo Yii::app()->createUrl("main/default/addreview")
               $returnpages.= '<li><a href="'.Yii::app()->createUrl("main/default/quality",array("id"=>$page->id)).'">'.$page->title.'</a></li>';
           }    
       }    
       
       
       
       return $returnpages;
       
   } 



//**********************************************************************************************************************

 function UploadEventImages($images,$id,$path,$class)
 {
           foreach ($images as $image => $pic) 
           {
               $extension= $pic->extensionName;
               if ($extension=="jpg" || $extension=="png" || $extension=="jpeg" || $extension=="gif" || $extension=="JPG" || $extension=="JPEG" || $extension=="PNG" || $extension=="GIF" )
               {
                   if (!file_exists(Yii::app()->basePath."/../".$path."/".$id))
                   {
                       mkdir (Yii::app()->basePath."/../".$path."/".$id, 0777, true);
                    }
                    if (!empty($pic) && !file_exists(Yii::app()->basePath."/../".$path."/".$id."/".$pic ))
                    {
						$imageName = pic_status($pic);

                        $model = new  GalleryImages();
                   //     $model->image=$pic;
                       $model->image=$imageName;
                        $model->ev_pg_id=$id;
                        $model->status=1;
                        $model->save();
                      //  $model->image->saveAs(Yii::app()->basePath."/../".$path."/".$id."/".$pic );
                        $pic->saveAs(Yii::app()->basePath."/../".$path."/".$id."/".$imageName);

                     }
                }
            }
         }
        
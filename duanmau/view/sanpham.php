<div class="row mb">
            <div class="boxtrai mr">
            <div class="row mb ">
        
                    <div class="boxtitle">San pham <strong><?=$tendm?></strong></div>
                    <div class= " row boxcontent">
                        <?php
                  $i=0;
                  foreach ($dssp as $sp){
                   extract($sp);
                   $linksp="index.php?act=sanphamct&idsp=".$id;
                   $hinh=$img_path.$img;
                   if(($i==2)||($i==5)||($i==8)||($i=11)){
                       $mr="";
                   }else{
                       $mr="mr";
                   }
                   echo '<div class="boxsp '.$mr.'">
                    <div class="row img">  <a href="'.$linksp.'"><img src="'.$hinh.'" alt="" width=100%></a></div> 
                    <div class="price">
                     <p>'.$price.''." ".'VND</p> 
                     <a href="'.$linksp.'">'.$name.'</a>
                    </div>
                    
                   </div>';
                   $i+=1;
                  }
                  ?>

                    </div>
                </div>
               
              
            </div>
            <div class="boxphai">
              <?php  include "boxright.php" ;?>
        </div>
        </div>
      
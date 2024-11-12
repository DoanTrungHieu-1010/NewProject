<div class="row mb">
            <div class="boxtrai mr">
               <div class="row">
                <div class="banner">
                <section id="slideshow">
            <div class="slide fade">
                <img src="view/images/banner1.png" alt="Slide 1">
            </div>
            <div class="slide fade">
                <img src="view/images/banner2.png" alt="Slide 2">
            </div>
            <div class="slide fade">
                <img src="view/images/banner3.png" alt="Slide 3">
            </div>
        </section>
<br>



             </div>
               </div>
               <div class="row">
                <?php 
                $i=0;
                 foreach ($spnew as $sp){
                  extract($sp);
                  $hinh=$img_path.$img;
                  if(($i==2)||($i==5)||($i==8)){
                      $mr="";
                  }else{
                      $mr="mr";
                  }
                  $linksp="index.php?act=sanphamct&idsp=".$id;
                  echo '<div class="boxsp '.$mr.'">
                   <div class="row img"><img src="'.$hinh.'" alt="" width=100% ></div> 
                   <div class="price">
                    <p>'.$price.''." ".'VND</p> 
                    <a href="'.$linksp.'">'.$name.'</a>
                   </div>
                   
                  </div>';
                  $i+=1;
                 }
                ?>
                  <!-- <div class="boxsp mr">
                    <img src="view/images/iphone13.jpg" alt="" width="100%">
                    <p>$80</p>
                    <a href="#">Labtop</a>
                  </div>
                  <div class="boxsp mr">
                    <img src="view/images/iphone13.jpg" alt="" width="100%" >
                    <p>$80</p>
                    <a href="#">Labtop</a>
                  </div>
                  <div class="boxsp ">
                    <img src="view/images/iphone13.jpg" alt="" width="100%">
                    <p>$80</p>
                    <a href="#">Labtop</a>
                  </div>
                  <div class="boxsp mr">
                    <img src="view/images/iphone13.jpg" alt="" width="100%">
                    <p>$80</p>
                    <a href="#">Labtop</a>
                  </div>
                  <div class="boxsp mr">
                    <img src="view/images/iphone13.jpg" alt=""width="100%" >
                    <p>$80</p>
                    <a href="#">Labtop</a>
                  </div>
                  <div class="boxsp ">
                    <img src="view/images/iphone13.jpg" alt=""width="100%" >
                    <p>$80</p>
                    <a href="#">Labtop</a>
                  </div>
                  <div class="boxsp mr">
                    <img src="view/images/iphone13.jpg" alt="" width="100%">
                    <p>$80</p>
                    <a href="#">Labtop</a>
                  </div>
                  <div class="boxsp mr">
                    <img src="view/images/iphone13.jpg" alt="" width="100%">
                    <p>$80</p>
                    <a href="#">Labtop</a>
                  </div>
                  <div class="boxsp ">
                    <img src="view/images/iphone13.jpg" alt="" width="100%">
                    <p>$80</p>
                    <a href="#">Labtop</a>
                  </div>
                 -->
               </div>
            </div>
        <div class="boxphai">
        <?php  include "boxright.php" ;?>
        </div>
        </div>
      
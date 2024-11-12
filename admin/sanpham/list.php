<div class="row">
        <div class="row formtitle mb"><h1>Danh sách loại hàng</h1></div>
        <form action="index.php?act=listsp" method="post">
                   <input type="text" name="kyw">
                   <select name="iddm">
                    <option value="@" selected> Tất cả </option>
                <?php 
                 foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="'.$id.'">'.$name.'</option>';
                 }
                ?>
               </select>
               <input type="submit" name="listok" value="ok">
                </form>
        <div class="row formcontent">
            <div class="row mb10 formdsloai">
               
                <table>
                    <tr>
                        <th></th>
                        <th>Mã loại</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình</th>
                        <th>Giá</th>
                        <th>Lượt xem</th>
                    </tr>
                     <?php
                        foreach ($listsanpham as $sanpham) {
                            extract($sanpham);
                            $suasp="index.php?act=suasp&id=" .$id;
                            $xoasp="index.php?act=xoasp&id=" .$id;
                            $hinhpath="../upload/".$img;
                            if(is_file($hinhpath)){
                                $hinh="<img src='".$hinhpath."' height='80'>";
                            }else{
                                $hinh="no photo";
                            }
                            echo  '
                            <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                         <td>'.$hinh.'</td>
                         <td>'.$price.'</td>
                         <td>'.$luotxem.'</td>
                        <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a><a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
                    </tr>
                            ';
                        }
                     ?>

                </table>
            </div>
          
               <div class="row mb10">
                  <a href="index.php?act=adddm&id"><input type="button" value="Nhập thêm"></a> 
               </div>
        </div>
       
    </div>
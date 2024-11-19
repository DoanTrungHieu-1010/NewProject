<div class="row">
    <div class="row formtitle">
        <h1>Danh sách tai khoan</h1>
    </div>
    <div class="row formcontent">
        <div class="row mb10 formdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>Mã TK</th>
                    <th>Ten dang nhap</th>
                    <th>Mat khau</th>
                    <th>Email</th>
                    <th>Dia chi</th>
                    <th>Dien thoai</th>
                    <th>Vai tro</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listtaikhoan as $taikhoan) {
                    extract($taikhoan);
                    $suatk = "index.php?act=suatk&id=" . $id;
                    $xoatk = "index.php?act=xoatk&id=" . $id;
                    echo  '
                            <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>' . $id . '</td>
                        <td>' . $user . '</td>
                        <td>' . $pass . '</td>
                        <td>' . $email . '</td>
                        <td>' . $address . '</td>
                        <td>' . $tel . '</td>
                        <td>' . $role . '</td>
                        <td><a href="' . $suatk . '"><input type="button" value="Sửa"></a><a href="' . $xoatk . '"><input type="button" value="Xóa"></a></td>
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
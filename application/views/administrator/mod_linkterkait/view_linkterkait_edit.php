<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit LInk Terkait</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/edit_linkterkait',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                    <tbody>
                      <input type='hidden' name='id' value='$rows[id_link_terkait]'>
                      <tr><th scope='row' width='120px'>Judul</th>             <td><input type='text' class='form-control' name='a' value='$rows[judul_menu]' required></td></tr>
                      <tr><th scope='row'>Detail</th>             <td><textarea class='form-control' name='b' style='height:200px' required>$rows[detail_menu]</textarea></td></tr>
                      <tr><th scope='row'>url</th>             <td><input type='text' class='form-control' name='c' value='$rows[link]' required></td></tr>
                      </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='index.php'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();

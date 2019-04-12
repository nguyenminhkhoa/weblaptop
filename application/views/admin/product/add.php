<?php
// load ra file head
$this->load->view('admin/product/head', $this->data);
?>
<div class="line"></div>

<div class="wrapper">

    <!-- Form -->
    <form enctype="multipart/form-data" method="post" action="<?php echo admin_url('product/add'); ?>" id="form" class="form">
        <fieldset>
            <div class="widget">
                <div class="title">
                    <img class="titleIcon" src="<?php echo public_url(); ?>/admin/images/icons/dark/add.png">
                    <h6>Thêm mới Sản phẩm</h6>
                </div>

                <ul class="tabs">
                    <li><a href="#tab1">Thông tin chung</a></li>
                    

                </ul>

                <div class="tab_container">
                    <div class="tab_content pd0" id="tab1">
                        <div class="formRow">
                            <label for="param_name" class="formLeft">Tên sản phẩm:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input type="text" _autocheck="true" id="param_name" name="name"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('name'); ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="formRow">
                            <label class="formLeft">Hình ảnh:<span class="req">*</span></label>
                            <div class="formRight">
                                <input type="file" name="image" id="image">

                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="formRow">
                            <label class="formLeft">Ảnh kèm theo:</label>
                            <div class="formRight">
                                <input type="file" multiple="" name="image_list[]" id="image_list">

                            </div>
                            <div class="clear"></div>
                        </div>

                        <!-- Price -->
                        <div class="formRow">
                            <label for="param_price" class="formLeft">
                                Giá :
                                <span class="req">*</span>
                            </label>
                            <div class="formRight">
		<span class="oneTwo">
			<input type="text" _autocheck="true" class="format_number" id="param_price" style="width:100px" name="price">
			<img src="<?php echo public_url(); ?>/admin/crown/images/icons/notifications/information.png" style="margin-bottom:-8px" title="Giá bán sử dụng để giao dịch" class="tipS">
		</span>
                                <span class="autocheck" name="price_autocheck"></span>
                                <div class="clear error" name="price_error"><?php echo form_error('price'); ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <!-- Price -->
                        <div class="formRow">
                            <label for="param_discount" class="formLeft">
                                Giảm giá (VND)
                                <span></span>:
                            </label>
                            <div class="formRight">
		<span>
			<input type="text" class="format_number" id="param_discount" style="width:100px" name="discount">
			<img src="<?php echo public_url(); ?>/admin/crown/images/icons/notifications/information.png" style="margin-bottom:-8px" title="Số tiền giảm giá" class="tipS">
		</span>
                                <span class="autocheck" name="discount_autocheck"></span>
                                <div class="clear error" name="discount_error"></div>
                            </div>
                            <div class="clear"></div>
                        </div>


                        <div class="formRow">
                            <label for="param_cat" class="formLeft">Danh mục:<span class="req">*</span></label>
                            <div class="formRight">
                                <select name="catalog">
                                    <option value=""></option>
                                    <!-- kiem tra danh muc co danh muc con hay khong -->
                                    <?php foreach ($catalog_list as $row): ?>
                                        <option value="<?php echo $row->id_catalog; ?>" <?php echo $this->input->get('catalog') == $row->id_catalog ? 'selected': '' ?> ><?php echo $row->name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <span class="autocheck" name="cat_autocheck"></span>
                                <div class="clear error" name="cat_error"><?php echo form_error('catalog'); ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>


                        <!-- warranty -->
                        <div class="formRow">
                            <label for="param_warranty" class="formLeft">
                                Bảo hành :
                            </label>
                            <div class="formRight">
                                <span class="oneFour"><input type="text" id="param_warranty" name="warranty"></span>
                                <span class="autocheck" name="warranty_autocheck"></span>

                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="formRow">
                            <label for="param_sale" class="formLeft">Tặng quà:</label>
                            <div class="formRight">
                                <span class="oneTwo"><textarea cols="" rows="4" id="param_sale" name="gifts"></textarea></span>
                                <span class="autocheck" name="sale_autocheck"></span>

                            </div>
                            <div class="clear"></div>
                        </div>					         <div class="formRow hide"></div>
                    </div>

                    <div class="tab_content pd0" id="tab2">

                        <div class="formRow">
                            <label for="param_site_title" class="formLeft">Title:</label>
                            <div class="formRight">
                                <span class="oneTwo"><textarea cols="" rows="4" _autocheck="true" id="param_site_title" name="site_title"></textarea></span>
                                <span class="autocheck" name="site_title_autocheck"></span>

                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="formRow">
                            <label for="param_meta_desc" class="formLeft">Meta description:</label>
                            <div class="formRight">
                                <span class="oneTwo"><textarea cols="" rows="4" _autocheck="true" id="param_meta_desc" name="meta_desc"></textarea></span>
                                <span class="autocheck" name="meta_desc_autocheck"></span>

                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="formRow">
                            <label for="param_meta_key" class="formLeft">Meta keywords:</label>
                            <div class="formRight">
                                <span class="oneTwo"><textarea cols="" rows="4" _autocheck="true" id="param_meta_key" name="meta_key"></textarea></span>
                                <span class="autocheck" name="meta_key_autocheck"></span>

                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow hide"></div>
                    </div>

                    <div class="tab_content pd0" id="tab3">
                        <div class="formRow">
                            <label class="formLeft">Nội dung:</label>
                            <div class="formRight">
                                <textarea class="editor" id="param_content" name="content"></textarea>
                                <div class="clear error" name="content_error"><?php echo form_error('content'); ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow hide"></div>
                    </div>


                </div><!-- End tab_container-->

                <div class="formSubmit">
                    <input type="submit" class="redB" value="Thêm mới">
                    <input type="reset" class="basic" value="Hủy bỏ">
                </div>
                <div class="clear"></div>
            </div>
        </fieldset>
    </form>
</div>
<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css"/>
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/jquery.nested.sortable.css')); ?>"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Edit Menu')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                <?php echo $__env->make('backend/partials/message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><?php echo e(__('Edit Menu')); ?></h4>
                        <form action="<?php echo e(route('admin.menu.update',$page_post->id)); ?>" id="menu_update_form" method="post"
                              enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <textarea  id="menu_content" name="menu_content" style="display: none;" class="form-control" ><?php echo e($page_post->content); ?></textarea>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label><?php echo e(__('Language')); ?></label>
                                        <select name="lang" id="language" class="form-control">
                                            <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php if($lang->slug == $page_post->lang): ?> selected <?php endif; ?> value="<?php echo e($lang->slug); ?>"><?php echo e($lang->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="title"><?php echo e(__('Title')); ?></label>
                                        <input type="text" class="form-control" id="title" name="title"
                                               value="<?php echo e($page_post->title); ?>">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="menu-left-side-content">
                                        <h3 class="title"><?php echo e(__('Add menu items')); ?></h3>
                                        <div class="accordion accordion-wrapper" id="add_menu_item_accordion">
                                            <div class="card">
                                                <div class="card-header" id="page-list-items">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link" type="button"
                                                                data-toggle="collapse"
                                                                data-target="#page-list-items-content"
                                                                aria-expanded="true"
                                                                aria-controls="page-list-items-content">
                                                            <?php echo e(__('Pages')); ?>

                                                        </button>
                                                    </h2>
                                                </div>
                                                <?php
                                                    $default_lang = get_default_language();
                                                    $static_page_list = ['About','Service','Faq','Team','Work'];
                                                ?>
                                                <div id="page-list-items-content" class="collapse show"
                                                     aria-labelledby="page-list-items"
                                                     data-parent="#add_menu_item_accordion">
                                                    <div class="card-body">
                                                        <ul class="page-list-ul">
                                                            <li>
                                                                <label class="menu-item-title">
                                                                    <input type="checkbox" class="menu-item-checkbox"
                                                                           value="1">
                                                                    <?php echo e(__('Home')); ?>

                                                                </label>
                                                                <input type="hidden" class="menu-item-title"
                                                                       value="<?php echo e(__('Home')); ?>">
                                                                <input type="hidden" class="menu-item-url"
                                                                       value="<?php echo e('[url]'); ?>">
                                                                <input type="hidden" class="menu-item-db-id" value="">
                                                            </li>
                                                            <li>
                                                                <label class="menu-item-title">
                                                                    <input type="checkbox" class="menu-item-checkbox"
                                                                           value="2">
                                                                    <?php if(!empty(get_static_option('about_page_'.$default_lang.'_name'))): ?> <?php echo e(get_static_option('about_page_'.$default_lang.'_name')); ?> <?php else: ?> <?php echo e(__('About')); ?>  <?php endif; ?>
                                                                </label>
                                                                <input type="hidden" class="menu-item-title"
                                                                       value="<?php echo e(__('About')); ?>">
                                                                <input type="hidden" class="menu-item-url"
                                                                       value="<?php echo e('[url]/about'); ?>">
                                                                <input type="hidden" class="menu-item-db-id" value="">
                                                            </li>
                                                            <li>
                                                                <label class="menu-item-title">
                                                                    <input type="checkbox" class="menu-item-checkbox"
                                                                           value="3">
                                                                    <?php if(!empty(get_static_option('service_page_'.$default_lang.'_name'))): ?> <?php echo e(get_static_option('service_page_'.$default_lang.'_name')); ?> <?php else: ?> <?php echo e(__('Service')); ?>  <?php endif; ?>
                                                                </label>
                                                                <input type="hidden" class="menu-item-title"
                                                                       value="<?php echo e(__('Service')); ?>">
                                                                <input type="hidden" class="menu-item-url"
                                                                       value="<?php echo e('[url]/service'); ?>">
                                                                <input type="hidden" class="menu-item-db-id" value="">
                                                            </li>
                                                            <li>
                                                                <label class="menu-item-title">
                                                                    <input type="checkbox" class="menu-item-checkbox"
                                                                           value="4">
                                                                    <?php if(!empty(get_static_option('work_page_'.$default_lang.'_name'))): ?> <?php echo e(get_static_option('work_page_'.$default_lang.'_name')); ?> <?php else: ?> <?php echo e(__('Work')); ?>  <?php endif; ?>
                                                                </label>
                                                                <input type="hidden" class="menu-item-title"
                                                                       value="<?php echo e(__('Work')); ?>">
                                                                <input type="hidden" class="menu-item-url"
                                                                       value="<?php echo e('[url]/work'); ?>">
                                                                <input type="hidden" class="menu-item-db-id" value="">
                                                            </li>
                                                            <li>
                                                                <label class="menu-item-title">
                                                                    <input type="checkbox" class="menu-item-checkbox"
                                                                           value="5">
                                                                    <?php if(!empty(get_static_option('team_page_'.$default_lang.'_name'))): ?> <?php echo e(get_static_option('team_page_'.$default_lang.'_name')); ?> <?php else: ?> <?php echo e(__('Team')); ?>  <?php endif; ?>
                                                                </label>
                                                                <input type="hidden" class="menu-item-title"
                                                                       value="<?php echo e(__('Team')); ?>">
                                                                <input type="hidden" class="menu-item-url"
                                                                       value="<?php echo e('[url]/team'); ?>">
                                                                <input type="hidden" class="menu-item-db-id" value="">
                                                            </li>
                                                            <li>
                                                                <label class="menu-item-title">
                                                                    <input type="checkbox" class="menu-item-checkbox"
                                                                           value="6">
                                                                    <?php if(!empty(get_static_option('faq_page_'.$default_lang.'_name'))): ?> <?php echo e(get_static_option('faq_page_'.$default_lang.'_name')); ?> <?php else: ?> <?php echo e(__('Faq')); ?>  <?php endif; ?>
                                                                </label>
                                                                <input type="hidden" class="menu-item-title"
                                                                       value="<?php echo e(__('Faq')); ?>">
                                                                <input type="hidden" class="menu-item-url"
                                                                       value="<?php echo e('[url]/faq'); ?>">
                                                                <input type="hidden" class="menu-item-db-id" value="">
                                                            </li>
                                                            <li>
                                                                <label class="menu-item-title">
                                                                    <input type="checkbox" class="menu-item-checkbox"
                                                                           value="8">
                                                                    <?php echo e(__('Blog')); ?>

                                                                </label>
                                                                <input type="hidden" class="menu-item-title"
                                                                       value="<?php echo e(__('Blog')); ?>">
                                                                <input type="hidden" class="menu-item-url"
                                                                       value="<?php echo e('[url]/blog'); ?>">
                                                                <input type="hidden" class="menu-item-db-id" value="">
                                                            </li>
                                                            <li>
                                                                <label class="menu-item-title">
                                                                    <input type="checkbox" class="menu-item-checkbox"
                                                                           value="9">
                                                                    <?php echo e(__('Contact')); ?>

                                                                </label>
                                                                <input type="hidden" class="menu-item-title"
                                                                       value="<?php echo e(__('Contact')); ?>">
                                                                <input type="hidden" class="menu-item-url"
                                                                       value="<?php echo e('[url]/contact'); ?>">
                                                                <input type="hidden" class="menu-item-db-id" value="">
                                                            </li>
                                                            <?php $__currentLoopData = $all_page; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <li>
                                                                    <label class="menu-item-title">
                                                                        <input type="checkbox"
                                                                               class="menu-item-checkbox" value="9">
                                                                        <?php if(in_array($data->title,$static_page_list)): ?> <?php echo e(get_static_option(strtolower($data->title).'_page_'.$default_lang.'_name')); ?> <?php else: ?> <?php echo e(__($data->title)); ?> <?php endif; ?>
                                                                    </label>
                                                                    <input type="hidden" class="menu-item-title"
                                                                           value="<?php echo e($data->title); ?>">
                                                                    <input type="hidden" class="menu-item-url"
                                                                           value="<?php echo e('[url]/p/'.$data->id.'/'.Str::slug($data->title)); ?>">
                                                                    <input type="hidden" class="menu-item-db-id"
                                                                           value="<?php echo e($data->id); ?>">
                                                                </li>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </ul>
                                                        <div class="form-group">
                                                            <button type="button" id="add_page_to_menu"
                                                                    class="btn btn-primary btn-xs mt-4 pr-4 pl-4"><?php echo e(__('Add To Menu')); ?></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="custom-links">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button"
                                                                data-toggle="collapse"
                                                                data-target="#custom-links-content"
                                                                aria-expanded="false"
                                                                aria-controls="custom-links-content">
                                                            <?php echo e(__('Custom Links')); ?>

                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="custom-links-content" class="collapse"
                                                     aria-labelledby="custom-links"
                                                     data-parent="#add_menu_item_accordion">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="custom_url"><strong><?php echo e(__("URL")); ?></strong></label>
                                                            <input type="text" name="custom_url" id="custom_url"
                                                                   class="form-control"
                                                                   placeholder="<?php echo e(__('https://')); ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="custom_label_text"><strong><?php echo e(__("Link Text")); ?></strong></label>
                                                            <input type="text" name="custom_label_text"
                                                                   id="custom_label_text" class="form-control"
                                                                   placeholder="<?php echo e(__('label text')); ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="button" id="add_custom_links"
                                                                    class="btn btn-primary btn-xs mt-4 pr-4 pl-4"><?php echo e(__('Add To Menu')); ?></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                   <div class="menu-structure-wrapper">
                                       <div class="card">
                                           <div class="card-header">
                                               <h3 class="title"><?php echo e(__('Menu Structure')); ?></h3>
                                           </div>
                                           <div class="card-body">
                                               <section id="drop_down_menu_builder_wrapper">
                                                   <ol class="sortable ui-sortable mjs-nestedSortable-branch mjs-nestedSortable-expanded">
                                                       <?php if(!empty($page_post->content)): ?>
                                                           <?php
                                                                $cc = 0;
                                                                $parent_item_count = 0;
                                                               $menu_content = json_decode($page_post->content);
                                                           ?>
                                                       <?php $__currentLoopData = $menu_content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                               <?php
                                                                   if ($cc > 0 && $cc == $parent_item_count){ print '</ol>'; $cc = 0; }
                                                                  if (!empty($data->parent_id) && $data->depth > 0){
                                                                       if  ($cc == 0){
                                                                           print '<ol>';
                                                                           $parent_item_count = get_child_menu_count($menu_content,$data->parent_id);
                                                                       }else{  print '</li>'; }
                                                                   }else{ print '</li>'; }

                                                               ?>
                                                           <li style="display: list-item;"
                                                               class="mjs-nestedSortable-branch mjs-nestedSortable-expanded"
                                                               id="menuItem_<?php echo e($data->id); ?>" data-title="<?php echo e($data->menuTitle); ?>" data-url="<?php echo e($data->menuUrl); ?>">
                                                               <div class="menuDiv">
                                                                   <span title="Click to show/hide children" class="disclose ui-icon ui-icon-minusthick"><span></span></span>
                                                                   <span>
                                                                       <span data-id="1" class="itemTitle">
                                                                           <?php if(in_array($data->menuTitle,$static_page_list)): ?> <?php echo e(get_static_option(strtolower($data->menuTitle).'_page_'.$default_lang.'_name')); ?> <?php else: ?> <?php echo e(__($data->menuTitle)); ?> <?php endif; ?>
                                                                       </span>
                                                                       <span title="Click to delete item." data-id="<?php echo e($data->id); ?>" class="deleteMenu ui-icon ui-icon-closethick"><span></span></span>
                                                                   </span>
                                                               </div>

                                                           <?php if (!empty($data->parent_id) && $data->depth > 0){ $cc++;} ?>
                                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                       <?php else: ?>
                                                           <li style="display: list-item;"
                                                               class="mjs-nestedSortable-branch mjs-nestedSortable-expanded"
                                                               id="menuItem_1" data-title="<?php echo e(__('Home')); ?>" data-url="<?php echo e('[url]'); ?>">
                                                               <div class="menuDiv">
                                                                   <span title="Click to show/hide children" class="disclose ui-icon ui-icon-minusthick"><span></span></span>
                                                                   <span>
                                                               <span data-id="1" class="itemTitle"><?php echo e(__('Home Page')); ?></span>
                                                               <span title="Click to delete item." data-id="1" class="deleteMenu ui-icon ui-icon-closethick"><span></span></span>
                                                           </span>
                                                               </div>
                                                           </li>
                                                       <?php endif; ?>
                                                   </ol>
                                               </section><!-- END #demo -->
                                           </div>
                                       </div>
                                   </div>
                                    <div class="form-group">
                                        <button type="submit" id="menu_structure_submit_btn" class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Update Changes')); ?></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
    <script src="<?php echo e(asset('assets/backend/js/jquery.mjs.nestedSortable.js')); ?>"></script>
    <script>
        $(document).ready(function () {

            var ns = $('ol.sortable').nestedSortable({
                forcePlaceholderSize: true,
                handle: 'div',
                helper: 'clone',
                items: 'li',
                opacity: .6,
                placeholder: 'placeholder',
                revert: 250,
                tabSize: 25,
                tolerance: 'pointer',
                toleranceElement: '> div',
                maxLevels: 2,
                isTree: true,
                expandOnHover: 700,
                startCollapsed: false,
            });

            $(document).on('click','.disclose', function () {
                $(this).closest('li').toggleClass('mjs-nestedSortable-collapsed').toggleClass('mjs-nestedSortable-expanded');
                $(this).toggleClass('ui-icon-plusthick').toggleClass('ui-icon-minusthick');
            });

            $(document).on('click','.deleteMenu',function () {
                var id = $(this).attr('data-id');
                $('#menuItem_' + id).remove();
            });


            $(document).on('click', '#add_custom_links', function (e) {
                e.preventDefault();
                var customUrl = $('#custom_url').val();
                var labelText = $('#custom_label_text').val();
                if(customUrl =='' ){ $('#custom_url').addClass('error');}
                if(labelText =='' ){ $('#custom_label_text').addClass('error'); }

                if(customUrl !='' && labelText != ''){
                    var menuLength = $('ol.sortable li').length + 1;
                    $('#drop_down_menu_builder_wrapper ol.sortable').append('<li style="display: list-item;"\n' +
                        'class="mjs-nestedSortable-branch mjs-nestedSortable-expanded"\n' +
                        'id="menuItem_'+menuLength+'" data-title="'+labelText+'" data-url="'+customUrl+'">\n' +
                        '<div class="menuDiv">\n' +
                        '<span title="Click to show/hide children" class="disclose ui-icon ui-icon-minusthick"><span></span></span>\n' +
                        '<span>\n' +
                        '<span data-id="2" class="itemTitle">'+labelText+'</span>\n' +
                        '<span title="Click to delete item." data-id="'+menuLength+'" class="deleteMenu ui-icon ui-icon-closethick"><span></span></span>\n' +
                        '</span>\n' +
                        '</div>\n' +
                        '</li>');
                    $('#custom_url').removeClass('error');
                    $('#custom_label_text').removeClass('error');
                }

            });
            $(document).on('click', '#add_page_to_menu', function (e) {
                e.preventDefault();

                var selectedMenuItem = $('#page-list-items-content ul li').find('input[type="checkbox"]:checked');
                if (selectedMenuItem.length > 1){
                    $.each(selectedMenuItem,function (index,value) {
                        var el = $(this);
                        el.attr('checked',false);
                        var menuLength = $('ol.sortable li').length + 1;
                        var selectedMenuTitle = el.parent().next().val();
                        var selectedMenuUrl = el.parent().next().next().val();
                        var selectedMenuDbId = el.parent().next().next().next().val();
                        $('#drop_down_menu_builder_wrapper ol.sortable').append('<li style="display: list-item;"\n' +
                            'class="mjs-nestedSortable-branch mjs-nestedSortable-expanded"\n' +
                            'id="menuItem_'+menuLength+'" data-title="'+selectedMenuTitle+'" data-url="'+selectedMenuUrl+'">\n' +
                            '<div class="menuDiv">\n' +
                            '<span title="Click to show/hide children" class="disclose ui-icon ui-icon-minusthick"><span></span></span>\n' +
                            '<span>\n' +
                            '<span data-id="2" class="itemTitle">'+selectedMenuTitle+'</span>\n' +
                            '<span title="Click to delete item." data-id="'+menuLength+'" class="deleteMenu ui-icon ui-icon-closethick"><span></span></span>\n' +
                            '</span>\n' +
                            '\n' +
                            '</div>\n' +
                            '</li>');
                    })
                }else{
                    selectedMenuItem.attr('checked',false);
                    var selectedMenuTitle = selectedMenuItem.parent().next().val();
                    var selectedMenuUrl = selectedMenuItem.parent().next().next().val();
                    var selectedMenuDbId = selectedMenuItem.parent().next().next().next().val();
                    var menuLength = $('ol.sortable li').length + 1;
                    $('#drop_down_menu_builder_wrapper ol.sortable').append('<li style="display: list-item;"\n' +
                        'class="mjs-nestedSortable-branch mjs-nestedSortable-expanded"\n' +
                        'id="menuItem_'+menuLength+'" data-title="'+selectedMenuTitle+'" data-url="'+selectedMenuUrl+'">\n' +
                        '<div class="menuDiv">\n' +
                        '<span title="Click to show/hide children" class="disclose ui-icon ui-icon-minusthick"><span></span></span>\n' +
                        '<span>\n' +
                        '<span data-id="2" class="itemTitle">'+selectedMenuTitle+'</span>\n' +
                        '<span title="Click to delete item." data-id="'+menuLength+'" class="deleteMenu ui-icon ui-icon-closethick"><span></span></span>\n' +
                        '</span>\n' +
                        '\n' +
                        '</div>\n' +
                        '</li>');
                }

            });

            $(document).on('click','#menu_structure_submit_btn',function(e){
               e.preventDefault();
                var arrr = $('ol.sortable').nestedSortable('toArray', {startDepthCount: 0});
                arrr.shift();
                $('#menu_content').val(JSON.stringify(arrr));
                console.log(arrr);
                $('#menu_update_form').submit();
            });

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/bizzcox/@core/resources/views/backend/pages/menu/edit.blade.php ENDPATH**/ ?>
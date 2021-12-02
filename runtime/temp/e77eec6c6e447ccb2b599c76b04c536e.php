<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"C:\inetpub\wwwroot\MDYS006/application/admin\view\cj\info.html";i:1638323111;s:66:"C:\inetpub\wwwroot\MDYS006\application\admin\view\public\head.html";i:1638323113;s:66:"C:\inetpub\wwwroot\MDYS006\application\admin\view\public\foot.html";i:1638323113;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $title; ?> - <?php echo lang('admin/public/head/title'); ?></title>
    <link rel="stylesheet" href="/MDYS006/static/layui/css/layui.css">
    <link rel="stylesheet" href="/MDYS006/static/css/admin_style.css?<?php echo $MAC_VERSION; ?>">
    <script type="text/javascript" src="/MDYS006/static/js/jquery.js"></script>
    <script type="text/javascript" src="/MDYS006/static/layui/layui.js"></script>
    <script>
        var ROOT_PATH="/MDYS006",ADMIN_PATH="<?php echo $_SERVER['SCRIPT_NAME']; ?>", MAC_VERSION="v10";
    </script>
</head>
<body>
<div class="page-container">
    <div class="layui-tab layui-tab-brief">
        <!--添加采集点 start-->
        <div class="layui-tab-content">
            <form class="layui-form" name="myform" method="post" id="myform">
                <input type="hidden" name="data[nodeid]" value="<?php echo $data['nodeid']; ?>">
                <div class="layui-tab layui-tab-card" style="min-height: 430px;">
                    <ul class="layui-tab-title">
                        <li class="layui-this"><?php echo lang('admin/cj/rule_url'); ?></li>
                        <li><?php echo lang('admin/cj/rule_content'); ?></li>
                        <li><?php echo lang('admin/cj/rule_diy'); ?></li>
                        <li><?php echo lang('admin/cj/adv_config'); ?></li>
                    </ul>
                    <div class="layui-tab-content">
                        <!--网址规则 start-->
                        <div class="layui-tab-item layui-show">
                            <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
                                <legend><?php echo lang('base_info'); ?></legend>
                            </fieldset>
                            <div class="layui-form-item">
                                <label class="layui-form-label"><?php echo lang('admin/cj/rule_name'); ?>：</label>
                                <div class="layui-input-block" style="width: 60%">
                                    <input type="text" name="data[name]" placeholder="" value="<?php echo $data['name']; ?>" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label"><?php echo lang('admin/cj/page_charset'); ?>：</label>
                                <div class="layui-input-block">
                                    <input type="radio" name="data[sourcecharset]" value="GBK" title="GBK" <?php if($data['sourcecharset'] == 'GBK'): ?>checked='checked'<?php endif; ?>>
                                    <input type="radio" name="data[sourcecharset]" value="UTF-8" title="UTF-8" <?php if($data['sourcecharset'] == 'UTF-8'): ?>checked='checked'<?php endif; ?>>
                                    <input type="radio" name="data[sourcecharset]" value="BIG5" title="BIG5" <?php if($data['sourcecharset'] == 'BIG5'): ?>checked='checked'<?php endif; ?>>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label"><?php echo lang('admin/cj/cj_model'); ?>：</label>
                                <div class="layui-input-block">
                                    <input type="radio" name="data[mid]" value="1" title="<?php echo lang('vod'); ?>" <?php if($data['mid'] != '2'): ?>checked='checked'<?php endif; ?>>
                                    <input type="radio" name="data[mid]" value="2" title="<?php echo lang('art'); ?>" <?php if($data['mid'] == '2'): ?>checked='checked'<?php endif; ?>>
                                </div>
                            </div>

                            <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
                                <legend><?php echo lang('admin/cj/url_collect'); ?></legend>
                            </fieldset>
                            <div class="layui-form-item">
                                <label class="layui-form-label"><?php echo lang('admin/cj/url_type'); ?>：</label>
                                <div class="layui-input-block">
                                    <input type="radio" name="data[sourcetype]" id="_1" value="1" lay-filter="sourcetype" title="<?php echo lang('admin/cj/sequence_url'); ?>" <?php if($data['sourcetype'] == 1): ?>checked='checked'<?php endif; ?>>
                                    <input type="radio" name="data[sourcetype]" id="_2" value="2" lay-filter="sourcetype" title="<?php echo lang('admin/cj/multi_url'); ?>" <?php if($data['sourcetype'] == 2): ?>checked='checked'<?php endif; ?>>
                                    <input type="radio" name="data[sourcetype]" id="_3" value="3" lay-filter="sourcetype" title="<?php echo lang('admin/cj/one_url'); ?>" <?php if($data['sourcetype'] == 3): ?>checked='checked'<?php endif; ?>>
                                </div>
                            </div>
                            <div id="url_type_1" <?php if($data['sourcetype'] != 1): ?>style="display:none"<?php endif; ?>>
                                <div class="layui-form-item">
                                    <label class="layui-form-label"><?php echo lang('admin/cj/cj_url'); ?>：</label>
                                    <div class="layui-input-inline" style="width: 60%;">
                                        <input type="text" name="urlpage1" id="urlpage_1" placeholder="http://..." value="<?php echo $data['urlpage']; ?>" class="layui-input">
                                        <div class="layui-form-mid layui-word-aux">
                                            (如：http://www.phpcms.cn/help/rumen/(*).html,<?php echo lang('use'); ?>(*)<?php echo lang('admin/cj/wildcard_tip'); ?>。
                                        </div>
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label"><?php echo lang('admin/cj/page_num_config'); ?>：</label>
                                    <div class="layui-form-mid"><?php echo lang('start'); ?></div>
                                    <div class="layui-input-inline" style="width: 60px;">
                                        <input type="text" name="data[pagesize_start]" value="<?php echo $data['pagesize_start']; ?>" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid"> <?php echo lang('end'); ?></div>
                                    <div class="layui-input-inline" style="width: 60px;">
                                        <input type="text" name="data[pagesize_end]" value="<?php echo $data['pagesize_end']; ?>" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid"><?php echo lang('admin/cj/page_num_increment'); ?></div>
                                    <div class="layui-input-inline" style="width: 60px;">
                                        <input type="text" name="data[par_num]" value="<?php echo $data['par_num']; ?>" class="layui-input">
                                    </div>
                                    <div class="layui-input-inline" style="width:10%;">
                                        <a class="layui-btn" onclick="testUrl();" href="javascript:;"><?php echo lang('test'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <!--多个网址-->
                            <div id="url_type_2" class="layui-form-item" <?php if($data['sourcetype'] != 2): ?>style="display:none"<?php endif; ?>>
                                <label class="layui-form-label"><?php echo lang('admin/cj/cj_url'); ?>：</label>
                                <div class="layui-input-inline" style="width: 60%;">
                                    <textarea class="layui-textarea" name="urlpage2" id="urlpage_2"><?php echo $data['urlpage']; ?></textarea>
                                    <div class="layui-form-mid layui-word-aux">
                                        <?php echo lang('admin/cj/one_per_line'); ?>
                                    </div>
                                </div>
                            </div>
                            <!--单一网址-->
                            <div id="url_type_3" class="layui-form-item" <?php if($data['sourcetype'] != 3): ?>style="display:none"<?php endif; ?>>
                                <label class="layui-form-label"><?php echo lang('admin/cj/cj_url'); ?>：</label>
                                <div class="layui-input-inline" style="width: 60%;">
                                    <input type="text" name="urlpage3" id="urlpage_3" placeholder="http://..." value="<?php echo $data['urlpage']; ?>" class="layui-input">
                                </div>
                            </div>

                            <div class="layui-form-item">
                                <label class="layui-form-label"><?php echo lang('admin/cj/url_config'); ?>：</label>
                                <div class="layui-form-mid"><?php echo lang('admin/cj/url_must_contain'); ?></div>
                                <div class="layui-input-inline" style="width: 160px;">
                                    <input type="text" name="data[url_contain]" value="<?php echo $data['url_contain']; ?>" class="layui-input">
                                </div>
                                <div class="layui-form-mid"> <?php echo lang('admin/cj/url_not_contain'); ?></div>
                                <div class="layui-input-inline" style="width: 160px;">
                                    <input type="text" name="data[url_except]" value="<?php echo $data['url_except']; ?>" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label"><?php echo lang('admin/cj/collect_interval'); ?>：</label>
                                <div class="layui-input-inline">
                                    <textarea name="data[url_start]" class="layui-textarea"><?php echo $data['url_start']; ?></textarea>
                                </div>
                                <div class="layui-form-mid"><?php echo lang('to'); ?></div>
                                <div class="layui-input-inline">
                                    <textarea name="data[url_end]" class="layui-textarea"><?php echo $data['url_end']; ?></textarea>
                                </div>
                            </div>
                        </div>

                        <!--网址规则 end-->
                            <!--内容规则 start-->
                        <div class="layui-tab-item">
                            <blockquote class="layui-elem-quote layui-text" style="margin:20px 0;border-left-color: #ff5722;">
                                    <?php echo lang('admin/cj/wildcard_prompt'); ?>
                            </blockquote>
                            <div class="layui-btn-group">
                                    <a class="layui-btn" href="javascript:void(0);" onclick="showAll(this);"><?php echo lang('expand_all'); ?></a>
                                    <a class="layui-btn" href="javascript:void(0);" onclick="hideAll(this);"><?php echo lang('fold_all'); ?></a>
                            </div>
                            <div class="layui-collapse" lay-filter="lay_state" style="margin: 20px 0;">
                                    <div class="layui-colla-item">
                                        <h2 class="layui-colla-title"><?php echo lang('admin/cj/title_rule'); ?></h2>
                                        <div class="layui-colla-content layui-show">
                                            <div class="layui-form-item">
                                                <label class="layui-form-label"><?php echo lang('admin/cj/match_rule'); ?>：</label>
                                                <div class="layui-input-inline w300">
                                                    <textarea name="data[title_rule]" id="title_rule" class="layui-textarea"><?php echo $data['title_rule']; ?></textarea>
                                                    <div class="layui-form-mid layui-word-aux">
                                                        <?php echo lang('use'); ?>"<a href="javascript:insertText('title_rule', '[内容]')"> [内容] </a>"<?php echo lang('admin/cj/wildcard_tip'); ?>
                                                    </div>
                                                </div>
                                                <div class="layui-form-mid"><?php echo lang('admin/cj/filter_rule'); ?>：</div>
                                                <div class="layui-input-inline w300">
                                                    <textarea name="data[title_html_rule]" id="title_html_rule" class="layui-textarea"><?php echo $data['title_html_rule']; ?></textarea>
                                                    <div class="layui-form-mid layui-word-aux">
                                                        <input type="button" value="<?php echo lang('select'); ?>" class="layui-btn layui-btn-xs" onclick="add_tag('title_html_rule')">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <div class="layui-colla-item">
                                    <h2 class="layui-colla-title"><?php echo lang('admin/cj/type_rule'); ?></h2>
                                    <div class="layui-colla-content layui-show">
                                        <div class="layui-form-item">
                                            <label class="layui-form-label"><?php echo lang('admin/cj/match_rule'); ?>：</label>
                                            <div class="layui-input-inline w300">
                                                <textarea name="data[type_rule]" id="type_rule" class="layui-textarea"><?php echo $data['type_rule']; ?></textarea>
                                                <div class="layui-form-mid layui-word-aux">
                                                    <?php echo lang('use'); ?>"<a href="javascript:insertText('content_rule', '[内容]')"> [内容] </a>"<?php echo lang('admin/cj/wildcard_tip'); ?>
                                                </div>
                                            </div>
                                            <div class="layui-form-mid"><?php echo lang('admin/cj/filter_rule'); ?>：</div>
                                            <div class="layui-input-inline w300">
                                                <textarea name="data[type_html_rule]" id="type_html_rule" class="layui-textarea"><?php echo $data['type_html_rule']; ?></textarea>
                                                <div class="layui-form-mid layui-word-aux">
                                                    <input type="button" value="<?php echo lang('select'); ?>" class="layui-btn layui-btn-xs" onclick="add_tag('type_html_rule')">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                    <div class="layui-colla-item">
                                        <h2 class="layui-colla-title"><?php echo lang('admin/cj/content_rule'); ?></h2>
                                        <div class="layui-colla-content layui-show">
                                            <div class="layui-form-item">
                                                <label class="layui-form-label"><?php echo lang('admin/cj/match_rule'); ?>：</label>
                                                <div class="layui-input-inline w300">
                                                    <textarea name="data[content_rule]" id="content_rule" class="layui-textarea"><?php echo $data['content_rule']; ?></textarea>
                                                    <div class="layui-form-mid layui-word-aux">
                                                        <?php echo lang('use'); ?>"<a href="javascript:insertText('content_rule', '[内容]')"> [内容] </a>"<?php echo lang('admin/cj/wildcard_tip'); ?>
                                                    </div>
                                                </div>
                                                <div class="layui-form-mid"><?php echo lang('admin/cj/filter_rule'); ?>：</div>
                                                <div class="layui-input-inline w300">
                                                    <textarea name="data[content_html_rule]" id="content_html_rule" class="layui-textarea"><?php echo $data['content_html_rule']; ?></textarea>
                                                    <div class="layui-form-mid layui-word-aux">
                                                        <input type="button" value="<?php echo lang('select'); ?>" class="layui-btn layui-btn-xs" onclick="add_tag('content_html_rule')">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layui-colla-item">
                                        <h2 class="layui-colla-title"><?php echo lang('admin/cj/page_mode'); ?></h2>
                                        <div class="layui-colla-content layui-show">
                                            <div class="layui-form-item">
                                                <input type="radio" name="data[content_page_rule]" id="_1" value="1" title="<?php echo lang('admin/cj/list_all_mode'); ?>" lay-filter="content_page_rule" <?php if($data['content_page_rule'] != 2): ?>checked="checked"<?php endif; ?>>
                                                <input type="radio" name="data[content_page_rule]" id="_2" value="2" title="<?php echo lang('admin/cj/next_page_mode'); ?>" lay-filter="content_page_rule" <?php if($data['content_page_rule'] == 2): ?>checked="checked"<?php endif; ?>>
                                            </div>

                                            <div class="layui-form-item" id="nextpage" <?php if($data['content_page_rule'] != '2'): ?>style="display:none"<?php endif; ?>>
                                                <label class="layui-form-label"><?php echo lang('admin/cj/next_page_rule'); ?>：</label>
                                                <div class="layui-input-inline w600">
                                                    <input type="text" name="data[content_nextpage]" class="layui-input" value="<?php echo $data['content_nextpage']; ?>">
                                                    <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/cj/next_page_tip'); ?></div>
                                                </div>
                                            </div>
                                            <div class="layui-form-item">
                                                <label class="layui-form-label"><?php echo lang('admin/cj/match_rule'); ?>：</label>
                                                从 <textarea rows="5" cols="40" name="data[content_page_start]" id="content_page_start"><?php echo $data['content_page_start']; ?></textarea> <?php echo lang('to'); ?>
                                                <textarea rows="5" cols="40" name="data[content_page_end]" id="content_page_end"><?php echo $data['content_page_end']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>

                        <!--内容规则 end-->
                        <!--自定义规则 start-->
                        <div class="layui-tab-item" id="customize_config">

                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    <a class="layui-btn layui-btn-sm layui-btn-normal" href="javascript:;" onclick="add_caiji()"><?php echo lang('admin/cj/add_group'); ?></a>
                                </div>
                            </div>

                            <?php if(is_array($data['customize_config']) || $data['customize_config'] instanceof \think\Collection || $data['customize_config'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['customize_config'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <div class="layui-form-item mt10">
                                <label class="layui-form-label"><?php echo lang('admin/cj/rule_name'); ?>：</label>
                                <div class="layui-input-inline"><input type="text" name="data[customize_config][name][]" placeholder="" value="<?php echo $vo['name']; ?>" class="layui-input"></div>
                                <div class="layui-form-mid"><?php echo lang('admin/cj/rule_name_en'); ?>：</div>
                                <div class="layui-input-inline"><input type="text" name="data[customize_config][en_name][]" placeholder="" value="<?php echo $vo['en_name']; ?>" class="layui-input"></div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label"><?php echo lang('admin/cj/match_rule'); ?>：</label>
                                <div class="layui-input-inline">
                                    <textarea name="data[customize_config][rule][]" id="role_'+caiji+'" class="layui-textarea"><?php echo $vo['rule']; ?></textarea>
                                    <div class="layui-form-mid layui-word-aux"><?php echo lang('use'); ?>"<a href="javascript:insertText('title_rule', '[内容]')"> [内容] </a>"<?php echo lang('admin/cj/wildcard_tip'); ?>    </div>
                                </div>
                                <div class="layui-form-mid"><?php echo lang('admin/cj/filter_rule'); ?>：</div>
                                <div class="layui-input-inline">
                                    <textarea name="data[customize_config][html_rule][]" id="content_html_rule_'+caiji+'" class="layui-textarea"><?php echo $vo['html_rule']; ?></textarea>
                                    <div class="layui-form-mid layui-word-aux"><a class="layui-btn layui-btn-xs" href="javascript:;" onclick="add_tag('content_html_rule_'+caiji+'')"><?php echo lang('select'); ?></a></div>
                                </div>
                            </div>
                            <hr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>

                        </div>
                        <!--自定义规则 end-->
                        <!--高级配置 start-->
                        <div class="layui-tab-item">

                            <div class="layui-form-item">
                                <label class="layui-form-label"><?php echo lang('admin/cj/content_page'); ?>：</label>
                                <div class="layui-input-block">
                                    <input type="radio" name="data[content_page]" value="0" title="<?php echo lang('admin/cj/no_page'); ?>">
                                    <div class="layui-unselect layui-form-radio layui-form-radioed">
                                        <i class="layui-anim layui-icon"></i>
                                        <div><?php echo lang('admin/cj/no_page'); ?></div>
                                    </div>
                                    <input type="radio" name="data[content_page]" value="1" title="<?php echo lang('admin/cj/original_page'); ?>" checked>
                                    <div class="layui-unselect layui-form-radio layui-form-radioed">
                                        <i class="layui-anim layui-icon"></i>
                                        <div><?php echo lang('admin/cj/original_page'); ?></div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="layui-form-item">
                                <label class="layui-form-label"><?php echo lang('admin/cj/import_sort'); ?>：</label>
                                <div class="layui-input-block">
                                    <input type="radio" name="data[coll_order]" value="1" title="<?php echo lang('admin/cj/same_to_site'); ?>">
                                    <div class="layui-unselect layui-form-radio layui-form-radioed">
                                        <i class="layui-anim layui-icon"></i>
                                        <div><?php echo lang('admin/cj/same_to_site'); ?></div>
                                    </div>
                                    <input type="radio" name="data[coll_order]" value="2" title="<?php echo lang('admin/cj/opposite_to_site'); ?>" checked>
                                    <div class="layui-unselect layui-form-radio layui-form-radioed">
                                        <i class="layui-anim layui-icon"></i>
                                        <div><?php echo lang('admin/cj/opposite_to_site'); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--高级配置 end-->
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-input-block w150" style="margin:20px auto;">
                        <button type="submit" name="dosubmit" id="dosubmit" class="layui-btn layui-btn-fluid"><?php echo lang('btn_save'); ?></button>
                    </div>
                </div>
            </form>
        </div>
        <!--添加采集点 end-->
    </div>
</div>
<style>
    .ib{display: inline-block;}
</style>
<div id="html_rule_show" class="aui_content" style="display:none; padding: 20px 25px;">
    <label class="ib" style="width:120px"><input type="checkbox" name="html_rule" id="_1" value="<p([^>]*)>(.*)</p>[|]"> &lt;p&gt;</label>
    <label class="ib" style="width:120px"><input type="checkbox" name="html_rule" id="_2" value="<a([^>]*)>(.*)</a>[|]"> &lt;a&gt;</label>
    <label class="ib" style="width:120px"><input type="checkbox" name="html_rule" id="_3" value="<script([^>]*)>(.*)</script>[|]"> &lt;script&gt;</label>
    <label class="ib" style="width:120px"><input type="checkbox" name="html_rule" id="_4" value="<iframe([^>]*)>(.*)</iframe>[|]"> &lt;iframe&gt;</label>
    <label class="ib" style="width:120px"><input type="checkbox" name="html_rule" id="_5" value="<table([^>]*)>(.*)</table>[|]"> &lt;table&gt;</label>
    <label class="ib" style="width:120px"><input type="checkbox" name="html_rule" id="_6" value="<span([^>]*)>(.*)</span>[|]"> &lt;span&gt;</label>
    <label class="ib" style="width:120px"><input type="checkbox" name="html_rule" id="_7" value="<b([^>]*)>(.*)</b>[|]"> &lt;b&gt;</label>
    <label class="ib" style="width:120px"><input type="checkbox" name="html_rule" id="_8" value="<img([^>]*)>[|]"> &lt;img&gt;</label>
    <label class="ib" style="width:120px"><input type="checkbox" name="html_rule" id="_9" value="<object([^>]*)>(.*)</object>[|]"> &lt;object&gt;</label>
    <label class="ib" style="width:120px"><input type="checkbox" name="html_rule" id="_10" value="<embed([^>]*)>(.*)</embed>[|]"> &lt;embed&gt;</label>
    <label class="ib" style="width:120px"><input type="checkbox" name="html_rule" id="_11" value="<param([^>]*)>(.*)</param>[|]"> &lt;param&gt;</label>
    <label class="ib" style="width:120px"><input type="checkbox" name="html_rule" id="_12" value="<div([^>]*)>[|]"> &lt;div&gt;</label>
    <label class="ib" style="width:120px"><input type="checkbox" name="html_rule" id="_13" value="</div>[|]"> &lt;/div&gt;</label>
    <label class="ib" style="width:120px"><input type="checkbox" name="html_rule" id="_14" value="<!--([^>]*)-->[|]"> &lt;!-- --&gt;</label>
    <br>
    <div class="bk15"></div>
    <center><input type="button" value="<?php echo lang('check_all'); ?>" class="button" onclick="selectall('html_rule')"> <input type="button" class="button" value="<?php echo lang('check_other'); ?>" onclick="anti_selectall('html_rule')"></center>
</div>

<script type="text/javascript" src="/MDYS006/static/js/admin_common.js?<?php echo $MAC_VERSION; ?>"></script>
<script type="text/javascript">
    layui.use(['element','form','upload','layer'],function () {
        // 操作对象
        var element = layui.element;
        form = layui.form
                , layer = layui.layer
                , $ = layui.jquery
                , upload = layui.upload;

        form.on('radio(sourcetype)',function (data) {
            var num = 4;
            for (var i=1; i<=num; i++){
                if (data.value==i){
                    $('#url_type_'+i).show();
                } else {
                    $('#url_type_'+i).hide();
                }
            }
        });
        form.on('radio(content_page_rule)',function (data) {
            $('#nextpage').hide();
            if(data.value==2){
                $('#nextpage').show();
            }
        });



        //监听折叠
        element.on('collapse(lay_state)', function(data){
            //layer.msg('展开状态：'+ data.show);
        });
    });

    function selectall(obj) {
        $("input[name='"+obj+"']").each(function(i,n){
            this.checked = true;
        });
    }
    function anti_selectall(obj) {
        $("input[name='"+obj+"']").each(function(i,n){
            if (this.checked) {
                this.checked = false;
            } else {
                this.checked = true;
            }});
    }
    //折叠面板
    function showAll(_this) {
        $(_this).parents(".layui-btn-group").siblings(".layui-collapse").children(".layui-colla-item").children(".layui-colla-content").addClass("layui-show");
    }
    function hideAll(_this) {
        $(_this).parents(".layui-btn-group").siblings(".layui-collapse").children(".layui-colla-item").children(".layui-colla-content").removeClass("layui-show");
    }

    //  包含内容
    function insertText(id, text) {
        $('#' + id).focus();
        var str = document.selection.createRange();
        str.text = text;
    }

    function add_tag(id) {
        var index = layer.open({
            type: 1
            ,title: "<?php echo lang('admin/cj/filter_rule'); ?>" //不显示标题栏
            ,closeBtn: 1
            ,area: '600px;'
            ,shade: 0.8
            ,id: 'LAY_layuipro' //设定一个id，防止重复弹出
            ,btn: ["<?php echo lang('add'); ?>", "<?php echo lang('cancel'); ?>"]
            ,btnAlign: 'c'
            ,moveType: 1 //拖拽模式，0或者1
            ,content: $('#html_rule_show')
            ,yes: function(layero){
                var str = '';
                $("input[name='html_rule']:checked").each(function(){
                    str+=$(this).val()+"\n";
                });
                alert(str);
                $("#"+id).val(str);
                layer.close(index);
            }
        });
    }

    var caiji=0;
    function add_caiji()
    {
        $('#customize_config').append('<div class="layui-form-item mt10"><label class="layui-form-label"><?php echo lang('rule_name'); ?>：</label><div class="layui-input-inline"><input type="text" name="data[customize_config][name][]" placeholder="" value="" class="layui-input"></div><div class="layui-form-mid"><?php echo lang('rule_name_en'); ?>：</div><div class="layui-input-inline"><input type="text" name="data[customize_config][en_name][]" placeholder="" value="" class="layui-input"></div></div><div class="layui-form-item"><label class="layui-form-label"><?php echo lang('admin/cj/match_rule'); ?>：</label><div class="layui-input-inline"><textarea name="data[customize_config][rule][]" id="role_'+caiji+'" class="layui-textarea"></textarea><div class="layui-form-mid layui-word-aux"><?php echo lang('use'); ?>"<a href="javascript:insertText(\'title_rule\', \'[内容]\')"> [内容] </a>"<?php echo lang('admin/cj/wildcard_tip'); ?>    </div></div><div class="layui-form-mid"><?php echo lang('admin/cj/filter_rule'); ?>：</div><div class="layui-input-inline"><textarea name="data[customize_config][html_rule][]" id="content_html_rule_'+caiji+'" class="layui-textarea"></textarea><div class="layui-form-mid layui-word-aux"><a class="layui-btn layui-btn-xs" href="javascript:;" onclick="add_tag(\'content_html_rule_'+caiji+'\')"><?php echo lang('select'); ?></a></div></div></div><hr>');
        caiji++;
    }

    function testUrl() {
        var data = $('#myform').serialize();

        layer.open({
            type: 2
            ,title: 'test'
            ,closeBtn: 1
            ,area: ['500px;','400px']
            ,shade: 0.8
            ,id: 'LAY_testUrl' //设定一个id，防止重复弹出
            ,btn: ["<?php echo lang('close'); ?>"]
            ,btnAlign: 'c'
            ,moveType: 1 //拖拽模式，0或者1
            ,content: '<?php echo url('show_url'); ?>?call=1&' +data
        });
    }


</script>
</body>
</html>
<?php /* Smarty version Smarty-3.1.18, created on 2017-09-21 18:08:34
         compiled from "app\admin\view\User\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2127059c38fa2c82611-19657170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc23c12c8ed2208bfa42a530167364e7836be468' => 
    array (
      0 => 'app\\admin\\view\\User\\edit.html',
      1 => 1505961956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2127059c38fa2c82611-19657170',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'c' => 0,
    'rs' => 0,
    'rs3' => 0,
    'v2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59c38fa2d411f2_52604917',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c38fa2d411f2_52604917')) {function content_59c38fa2d411f2_52604917($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form method="post" action="?c=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
&act=save&id=<?php echo $_smarty_tpl->tpl_vars['rs']->value['id'];?>
">
	<div class="panel panel-default" style="margin-top: 15px;">
		<div class="panel-heading">
			<h3 class="panel-title">
				<i class="fa fa-user"></i>
				编辑会员信息
			</h3>
		</div>
		<div id="panel-collapse-4" class="collapse in" style="height: auto;">
			<div class="panel-heading">
				
			</div>
			<div class="panel-body">

				<div class="tab-content form-horizontal">
					<div class="form-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-3">用户名</label>
									<div class="col-md-9">
										<p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['rs']->value['username'];?>
</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-3">账号状态</label>
									<div class="col-md-4">
										<select name="status" class="form-control">
											<option value="1" <?php if ($_smarty_tpl->tpl_vars['rs']->value['status']==1) {?>selected<?php }?> >通过</option>
											<option value="0" <?php if ($_smarty_tpl->tpl_vars['rs']->value['status']==0) {?>selected<?php }?> >禁止</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-3">真实姓名</label>
									<div class="col-md-9">
										<input name="fullname" type="text"
											id="fullname" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['fullname'];?>
" />
										<p class="help-block">真实姓名长度在20个字符以内</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-3">昵称</label>
									<div class="col-md-9">
										<input name="nickname" type="text"
											id="nickname" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['nickname'];?>
"
											class="form-control"  />
									</div>
								</div>
							</div>
                        </div>    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-3">性别</label>
                                    <div class="col-md-9 p-t-7">
                                        <span class="">
                                            <input id="sex_0" type="radio"
                                                name="sex" value="0"
                                                <?php if ($_smarty_tpl->tpl_vars['rs']->value['sex']==0) {?>checked<?php }?> />
                                            <label for="sex_0">保密</label>
                                            <input id="sex_1" type="radio"
                                                name="sex" value="1" <?php if ($_smarty_tpl->tpl_vars['rs']->value['sex']==1) {?>checked<?php }?> />
                                            <label for="sex_1">男</label>
                                            <input id="sex_2" type="radio"
                                                name="sex" value="2" <?php if ($_smarty_tpl->tpl_vars['rs']->value['sex']==2) {?>checked<?php }?> />
                                            <label for="sex_2">女</label>
                                        </span>
                                    </div>
                                </div>
                            </div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-3">生日</label>
									<div class="col-md-9">
										<input name="birthday" type="text"
											class="form-control datepicker" data-date-format="yyyy-mm-dd"
											data-lang="zh-CN" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['birthday'];?>
" />
									</div>
								</div>
							</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-3">电子邮件</label>
                                    <div class="col-md-9">
                                        <input name="email" type="text"
                                            value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['email'];?>
"
                                            id="email"
                                            class="form-control" />
                                        <p class="help-block">请输入正确电子邮件，长度在1-256个字符以内</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-3">手机号码</label>
                                    <div class="col-md-9">
                                        <input name="phone" type="text"
                                            id="phone" class="form-control num" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['phone'];?>
" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-3">详细地址</label>
                                    <div class="col-md-9">
                                        <input name="address" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['address'];?>
" />
                                        <p class="help-block">详细地址必须控制在250个字符以内</p>
                                    </div>
                                </div>
                            </div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-3">会员分类</label>
									<div class="col-md-4">
										<select name="cate" class="form-control">
                                            <?php if ($_smarty_tpl->tpl_vars['rs']->value['cate']==null) {?>
                                            <option value="3">请选择</option>
                                            <?php }?>
                                            
                                            <?php if ($_smarty_tpl->tpl_vars['rs']->value['cate']!=null) {?>
                                            <?php  $_smarty_tpl->tpl_vars['v2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v2']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rs3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v2']->key => $_smarty_tpl->tpl_vars['v2']->value) {
$_smarty_tpl->tpl_vars['v2']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v2']->key;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['rs']->value['cate']==$_smarty_tpl->tpl_vars['v2']->value['id']) {?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['cate'];?>
"><?php echo $_smarty_tpl->tpl_vars['v2']->value['name'];?>
</option>
                                            <?php }?>                                                                   
                                            <?php } ?>
                                            <?php }?>
                                            
                                            <?php  $_smarty_tpl->tpl_vars['v2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v2']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rs3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v2']->key => $_smarty_tpl->tpl_vars['v2']->value) {
$_smarty_tpl->tpl_vars['v2']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v2']->key;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['rs']->value['cate']!=$_smarty_tpl->tpl_vars['v2']->value['id']) {?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['v2']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v2']->value['name'];?>
</option>
                                            <?php }?>
                                            <?php } ?>
										</select>
									</div>
								</div>
							</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 hide">
                                <div class="form-group">
                                    <label class="control-label col-md-3">注册日期</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static">2014-12-08 14:48:18</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 hide">
                                <div class="form-group">
                                    <label class="control-label col-md-3">最后登录日期</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static">2014-12-08 14:48:18</p>
                                    </div>
                                </div>
                            </div>


                        </div>
						<div class="form-actions fluid">
							<div class="col-md-offset-4 col-md-9">
							     <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['id'];?>
" name="id" />
								<input type="submit" value="保 存" class="btn btn-primary" />
								<a href="?c=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
" class="btn btn-default">返 回</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("Public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>

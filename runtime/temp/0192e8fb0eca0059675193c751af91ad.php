<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:42:"template/default_pc/html/comment\ajax.html";i:1638323117;}*/ ?>
<div class="block-comments" data-block-id="video_comments_video_comments">
										<form>
											<label class="field-label">评论</label>
											<div class="block-new-comment" style="display: block;">
												<div class="generic-error hidden"></div>
												<div>
													<div class="row">
														<div class="smileys-support">
															
															<textarea class="textarea comment_content" id="comment_message" name="comment_content" rows="3" placeholder=""></textarea>
															<div class="field-error down"></div>
														</div>
													</div>
													<div class="bottom">
														<input type="button" class="submit comment_submit" value="发送">
													</div>
												</div>
											</div>
										</form>
<?php $__TAG__ = '{"num":"5","paging":"yes","order":"desc","by":"id","id":"vo","key":"key"}';$__LIST__ = model("Comment")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;endforeach; endif; else: echo "" ;endif; ?>
										<div class="list-comments hidden" style="display: block;">
											<div id="video_comments_video_comments">
												<div class="margin-fix" id="video_comments_video_comments_items">
												
												<?php if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ?>
													<div class="item hidden">
														<div class="image">
															
																<span class="no-thumb ">没有照片</span>
														</div>

														<div class="text">
															<span class="comment-options">
																<span class="comment-rating digg_num"><?php echo $vo['comment_up']; ?></span>
																<a class="comment-like digg_link" data-id="<?php echo $vo['comment_id']; ?>" data-mid="4" data-type="up" href="javascript:;">+1</a>
																<a class="comment-dislike digg_link" data-id="<?php echo $vo['comment_id']; ?>" data-mid="4" data-type="down" href="javascript:;">-1</a>
															</span>
															<span class="comment-info">
																<a class="username"><?php echo $vo['comment_name']; ?></a>
																<?php echo date('Y-m-d H:i:s',$vo['comment_time']); ?>
															</span>
															<p class="comment-text">
																«<span class="original-text"><?php echo mac_em_replace($vo['comment_content']); ?></span>»
															</p>
														</div>
													</div>
													<?php endforeach; endif; else: echo "" ;endif; ?>
													
													
												</div>

											</div>
										</div>
									</div>
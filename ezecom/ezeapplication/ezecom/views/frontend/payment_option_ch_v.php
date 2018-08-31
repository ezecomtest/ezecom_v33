<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php echo $title ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <?php
			/* Top Header */
			$this->load->view('header/frontend_header');
			$this->load->view('header/header_all');
			$this->load->view('header/main_nav_user_v');
	    ?>
	</head>
<body>
<div class="container-fluid">
	<div class="container">
		<div class="row top-mg">
			<div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12 padding">
				<div class="payment-option-img">
					<img class="img-responsive" src="<?php echo base_url()?>images/support/payment/support-payment.jpg"/>
				</div>
			</div>
			<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12 padding">
				<div class="payment-option">
					<h3 class="ezeBill">支付您的EZECOM法案</h3>
					<p class="first">只需几只鼠标点击就可以了</p>
					<p class="second">
						为方便客户，我们提供多种不同的付款方式。除了在线支付账单或通过智能手机支付账单外，我们所有的办公室都可以用现金支付账单。此页面提供了所有方法的概述，并提供了逐步说明，因此您可以选择最适合您或您公司的方法。
					</p>
				</div>
			</div>
		</div>
		<div class="row mg-top">
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
				<!--<div class="payment-detail">
					<p>For your convenience we offer a number of different payment options. 
					Besides paying your bill online or via your mobile phone, at all our offices you can pay your bill in cash.
					This page gives you an overview of all methods, with a step by step instruction.
					So you can choose what fits best for you or your business.</p>
				</div>-->
			</div>
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		</div>
		<div class="row mg-bt">
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 row-no-padding mg-bt-location">
				<a href="<?=base_url();?>support/payment#aba" data-toggle="tab" data-id="aba">
					<div class="aba active-now">
						<p class="text-position">ABA银行</p>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 row-no-padding mg-bt-location">
				<a href="<?=base_url();?>support/payment#anz" data-toggle="tab" data-id="anz">
					<div class="anz">
						<p class="text-position">ANZ Royal</p>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 row-no-padding mg-bt-location">
				<a href="<?=base_url();?>support/payment#acleda" data-toggle="tab" data-id="acleda">
					<div class="acleda">
						<p class="text-position">ACLEDA Unity</p>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 row-no-padding ">
				<a href="<?=base_url();?>support/payment#cellcard" data-toggle="tab" data-id="cellcard">
					<div class="cellcard">
						<p class="text-position">Cellcard付款柜台</p>
					</div>
				</a>
			</div>
		</div>
		<div class="row mg-bt">
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 row-no-padding mg-bt-location">
				<a href="<?=base_url();?>support/payment#Maybank" data-toggle="tab" data-id="Maybank">
					<div class="Maybank">
						<p class="text-position">Maybank分行付款</p>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 row-no-padding mg-bt-location">
				<a href="<?=base_url();?>support/payment#wing" data-toggle="tab" data-id="wing">
					<div class="wing">
						<p class="text-position">Wing付款</p>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 row-no-padding mg-bt-location">
				<a href="<?=base_url();?>support/payment#wing-app" data-toggle="tab" data-id="wing-app">
					<div class="wing-app">
						<p class="text-position">Wing 程序账单支付</p>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 row-no-padding mg-bt-location">
				<a href="<?=base_url()?>support/payment#payment" data-toggle="tab" data-id="payment">
					<div class="download">
						<p class="text-position">付款选项书</p>
					</div>
				</a>
			</div>
		</div>
		<!--<div class="row">
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
				<div class="tab-content">
					<div id="cellcard" class="tab-pane rl_tabs-pane nn_tabs-pane active payment-tap">
						<h1 class="text-center">Payment Cellcard Counters</h1>
					</div>
					<div id="Maybank" class="tab-pane rl_tabs-pane nn_tabs-pane payment-tap">
						<h1 class="text-center">Maybank Internet Banking</h1>
					</div>
				</div>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		</div>-->
		<div class="tab-content">
			<div id="aba" class="tab-pane rl_tabs-pane nn_tabs-pane active payment-tap">
					<div class="row"><h1 class="text-center top-header">ABA银行</h1></div>
					<div class="row bg-color clear-mg">
					<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
						<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
							<div class="wrapper-content">
								<h1 class="header">用ABA BANKING支付您的EZECOM账单</h1>
								<p>作为 <b>ABA</b> 账户持有人，您可以在舒适的家中或世界任何地方管理您的财务。</p>
								<ol>
									<li>访问 <a href="https://www.ababank.com/" target="_blank">www.ababank.com</a> 并单击iBanking按钮</li>
									<li>使用您的用户名和密码登录您的iBanking账户</li>
									<li>转到“付款”菜单，然后单击子菜单中的“快速付款”</li>
									<li>选择“Internet Providers”并单击“EZECOM”</li>
									<li>输入您的“发票编号”，您的账单金额和货币（美元）</li>
									<li>点击“支付”</li>
									<li>单击“确定”以确认付款</li>
									<li>输入动态验证码</li>
									<li>将显示您的付款确认</li>
								</ol>
								<p>
									有关如何注册ABA银行账户的完整信息，请前往最近的ABA银行或查看ABA银行网站上的详细信息。
								</p>
								<h1 class="header">使用ABA ATM支付您的EZECOM账单</h1>
								<p>如果您是ABA账户持有人，您可以在所有ABA ATM上支付您的EZECOM账单</p>
								<ol>
									<li>将ABA银行卡插入ABA ATM</li>
									<li>选择首选语言</li>
									<li>输入您的PIN码</li>
									<li>选择“更多服务”菜单</li>
									<li>选择“账单支付”</li>
									<li>选择“EZECOM”</li>
									<li>输入“发票编号”</li>
									<li>输入账单的美元金额</li>
									<li>确认或拒绝已打印的收据</li>
									<li>确认输入信息是否正确（是=流程事务，否=取消事务，然后您可以再次启动该过程。</li>
									<li>您的付款已处理完毕！我们建议您保留打印的收据以备将来参考。</li>
								</ol>
							</div>
						</div>
					</div>
			</div> <!-- End ABA -->
			
			<div id="anz" class="tab-pane rl_tabs-pane nn_tabs-pane payment-tap">
					<div class="row"><h1 class="text-center top-header">ANZ Royal</h1></div>
					<div class="row bg-color clear-mg">
					<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
						<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
							<div class="wrapper-content">
								<h1 class="header">向ANZ Royal银行支付您的EZECOM账单</h1>
								<p>您可以在家中或世界任何地方的几个简单步骤中使用您的ANZ皇家账户支付您的EZECOM账单。</p>
								<ol>
									<li>访问 <a href="http://www.anzroyal.com/en/Personal/" target="_blank">www.anzroyal.com</a></li>
									<li>登录您的网上银行账户</li>
									<li>转到“资金转账”并点击“账单付款”</li>
									<li>在“来自账户”下拉列表中，选择“要从中扣款的账户”</li>
									<li>在“Biller Name”下拉列表中，选择“EZECOM”</li>
									<li>输入您的6位数EZECOM“发票编号”</li>
									<li>输入您要支付的账单金额</li>
									<li>如果要立即付款，请选择“立即”。或者，选择“一旦开启”并选择您要支付的未来日期</li>
									<li>处理完交易后，将显示确认信息</li>
								</ol>
								<p>
									有关如何注册ANZ皇家网上银行账户的完整信息，请访问离您最近的ANZ Royal或访问网站。
								</p>
								<h1 class="header">使用ANZ Royal Branch Deposit支付您的EZECOM账单</h1>
								<p>您可以免费向所有ANZ Royal分支机构支付EZECOM发票。</p>
								<ol>
									<li>前往您选择的ANZ皇家办公室</li>
									<li>转到转移柜台</li>
									<li>将您的发票和现金金额交给收银员。</li>
									<li>您的发票将由ANZ Royal处理</li>
								</ol>
								<p>
									有关如何注册ANZ Royal账户的完整信息，请访问离您最近的ANZ Royal或访问他们的网站。
								</p>
							</div>
						</div>
					</div>
			</div> <!-- ANZ -->
					
			<div id="acleda" class="tab-pane rl_tabs-pane nn_tabs-pane payment-tap">
					<div class="row"><h1 class="text-center top-header">Acleda Unity</h1></div>
					<div class="row bg-color clear-mg">
					<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
						<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
							<div class="wrapper-content">
								<h1 class="header">按照这些简单的步骤，通过ACLEDA用手机支付账单。</h1>
								<p>
									您可以通过手机上的ACLEDA Unity支付EZECOM发票。
								</p>
								<ol>
									<li>转到ACLEDA Unity菜单</li>
									<li>选择“账单支付”进行账单支付</li>
									<li>选择“付账单”</li>
									<li>选择“EZECOM”</li>
									<li>选择您要付款的账户。</li>
									<li>选择您的付款的消费者编号。如果您没有，请选择“创建新的消费者编号”以输入您的Ezecom客户ID。</li>
									<li>输入您的客户ID（例如14523）并按“下一步”</li>
									<li>输入账单的美元金额，然后按“下一步”</li>
									<li>请验证您的付款详情，然后按“是”。</li>
									<li>您的付款已成功处理</li>
								</ol>
								<p>
									有关如何注册ACLEDA账户的完整信息，请访问离您最近的ACLEDA分支机构。
								</p>
			
							</div>
						</div>
					</div>
			</div> <!-- ACLEDA -->
			
			<div id="cellcard" class="tab-pane rl_tabs-pane nn_tabs-pane payment-tap">
					<div class="row">
						<h1 class="text-center top-header">Cellcard付款柜台</h1>
					</div>
					<div class="row bg-color clear-mg">
					<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
					<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
						<div class="wrapper-content">
							<p class="">
								您可以免费向选定的Cellcard办事处支付EZECOM发票。
							</p>
							<ol>
								<li>前往您选择的Cellcard办事处</li>
								<li>去收银台</li>
								<li>将收据发票和现金金额交给收银员</li>
								<li>您的发票将由Cellcard工作人员处理</li>
								<li>金边有5个地点，全国有4个地方可以支付您的EZECOM发票：</li>
							</ol>

							<p><b>金边Cellcard总部 </b> <br/>地址：金边市隆边区四壁湾分区西哈努克大道门牌33号
							</p> 
							

							<p><b>金边客户服务和销售中心（堆谷）<br/></b>
								地址：金边市堆谷区万古湖1分区289号路门牌46号 
							</p> 
							

							<p><b>金边客户服务和销售中心（俄罗斯市场）<br/></b>
								地址：金边市桑园区朱德奔1分区155号路门牌166（E0, E1）号
							</p> 
							

							<p><b>金边客户服务和销售中心（干隆街）</b><br/>
								地址：金边市玛卡拉区友谊分区128号和169号转角门牌219号
							</p> 
							

							<p><b>金边客户服务和销售中心（金满城）</b> <br/>
							地址：金边市桑园区水坝分区钻石路（金满城购物中心主入口对面）门牌D25号 
							</p> 
							

							<p><b>暹粒代表处</b><br/>
							地址：暹粒省暹粒县Svay Dangkum分区Sivutha路门牌50号 
							</p> 
							<p></p>

							<p><b>马德望代表处</b><br/>
							地址：马德望省马德望县 Svai Pau乡20 Usaphea村第38组门牌98-100号
							</p> 
							

							<p><b>西哈努克神代表处</b><br/>
							地址：西哈努克省西哈努克市4号分区2号村独立路门牌118号
							</p> 
						
							<p><b>磅针代表处</b><br/>
							地址：磅针省磅针县Veal Vong乡4号村 
							</p> 
							

						</div>
							
						</div>
						<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
					</div>
			</div> <!-- End Cellcard -->
			<div id="Maybank" class="tab-pane rl_tabs-pane nn_tabs-pane payment-tap">
					<div class="row"><h1 class="text-center top-header">Maybank分行付款</h1></div>
					<div class="row bg-color clear-mg">
					<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
						<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
							<div class="wrapper-content">
								<p>您可以免费向所有Maybank分支机构支付EZECOM或TELCOTECH发票。</p>
								<ol>
									<li>前往您选择的Maybank分行</li>
									<li>前往转移柜台</li>
									<li>将收据发票和现金金额交给收银员</li>
									<li>您的发票将由Maybank处理</li>
								</ol>
								<p>
									有关如何注册Maybank账户的完整信息。请去您最近的Maybank或访问网站。
								</p>
								<h1 class="header">M2U Maybank网上银行按照以下简单步骤通过M2U支付账单：</h1>
								<p>
									访问<a href="http://www.maybank2u.com.kh/"> www.maybank2u.com.kh </a> 并登录
								</p>
								<p><b>在主屏幕上：</b></p>
								<ol>
									<li>选择“账单支付”</li>
									<li>选择“一次性付款”</li>
								</ol>
								<p><b>在一次性付款的第1/3步</b></p>
								<ol>
									<li>单击Biller Institution的下拉列表</li>
									<li>选择“EZECOM / TELCOTECH”</li>
									<li>单击“继续”</li>
								</ol>
								<p><b>在一次性付款的第2/3步</b></p>
								<ol>
									<li>填写发票编号</li>
									<li>填写客户ID</li>
									<li>填写订户姓名</li>
									<li>以美元填写您的账单金额</li>
									<li>选择付款日期（可以是当前日期和未来日期）</li>
									<li>单击“继续”继续</li>
								</ol>
								<p><b>在一次性付款的第3/3步</b></p>
								<ol>
									<li>重新检查/确认付款的详细信息</li>
									<li>单击“确认”以显示“成功付款状态”</li>
								</ol>
								<p>
									我们建议您打印收据以供参考。有关如何注册M2U账户的完整信息，请访问离您最近的Maybank分行或访问他们的网站。
								</p>
							</div>
						</div>
					</div>
			</div><!-- Maybank -->
			
			<!-- Wing Bill Payment -->
			<div id="wing" class="tab-pane rl_tabs-pane nn_tabs-pane payment-tap">
					<div class="row"><h1 class="text-center top-header">Wing付款</h1></div>
					<div class="row bg-color clear-mg">
					<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
						<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
							<div class="wrapper-content">
								<p>按照这些简单的步骤，通过Wing用手机支付账单。</p>
								<ol>
									<li>拨打* 989＃进入Wing菜单</li>
									<li>输入您的WING账号否，然后按发送</li>
									<li>输入“5”并按“发送”</li>
									<li>输入“6”并按发送</li>
									<li>输入“3”并按“发送” </li>
									<li>输入您的客户ID，然后按“发送”</li>
									<li>以美元输入金额，然后按发送</li>
									<li>输入您的WING账户的密码（4位数），然后按发送</li>
								</ol>
								<p>
									有关如何注册WING账户的完整信息，请访问离您最近的WING商店或访问 <a href="https://www.wingmoney.com/en/" target="_blank">www.wingmoney.com</a>
								</p>
							</div>
						</div>
					</div>
			</div>
			
			<!-- Wing App -->
			<div id="wing-app" class="tab-pane rl_tabs-pane nn_tabs-pane payment-tap">
					<div class="row"><h1 class="text-center top-header">Wing 程序账单支付</h1></div>
					<div class="row bg-color clear-mg">
					<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
						<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
							<div class="wrapper-content">
								<p>使用适用于Android和iOS的移动Wing Money App更方便。通过以下方式支付账单 </p>
								<ol>
									<li>从Play商店（Android手机）App Store（IOS手机）下载Wing Money</li>
									<li>注册您的Wing App账户</li>
									<li>登录您的Wing App账户</li>
									<li>在“Biller List”中选择“Bill payment”选择“Internet”并选择“EZECOM”</li>
									<li>以美元输入“客户ID”和“金额”，然后选择“支付”</li>
									<li>查看付款信息，然后选择“确认”</li>
									<li>输入您的WING账户的密码（4位数），然后选择“继续”</li>
									<li>您将收到成功支付账单的短信通知</li>
								</ol>
								<p>
									有关如何注册WING账户的完整信息，请访问离您最近的WING商店或访问 <a href="https://www.wingmoney.com/en/" target="_blank">www.wingmoney.com</a>
								</p>
							</div>
						</div>
					</div>
			</div>
			
			<!-- Payment Book  -->
			<div id="payment" class="tab-pane rl_tabs-pane nn_tabs-pane payment-tap">
					<div class="row"><h1 class="text-center top-header">付款选项书 </h1></div>
					<div class="row bg-color clear-mg">
					<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
						<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
							<div class="wrapper-content">
								<p>请下载付款选项书如下：</p>
								<a href="<?php echo base_url()?>elFindermaster/files/pdf/payment-book.pdf">下载书</a>
							</div>
						</div>
					</div>
			</div>
			
		</div>
	</div>
</div>          
<!-- FOOTER -->
<?php $this->load->view("footer/footer_user_v")?> 

<!-- BACK TOP TOP BUTTON -->
<div id="back-to-top" data-spy="affix" data-offset-top="300" class="back-to-top hidden-xs hidden-sm affix-top">
  <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-up"></i></button>
</div>
 
</body>
</html>
<script type="text/javascript">
	(function($) {
		// Back to top
		$('#back-to-top').on('click', function(){
			$("html, body").animate({scrollTop: 0}, 500);
			return false;
		});
	})(jQuery);
	
	jQuery(function($){
		$('#pop-up-form').click(function() {
			$('.form-wrapper').toggle('500');
		});
	
		$('#btn-close').click(function(e) {
            $('.form-wrapper').toggle('500');
        });
	
	});
</script>

<script type="text/javascript">
$(document).ready(function () {
	$('a .aba').click(function(e) {
		
		$('a .anz').removeClass('active-now');
		$('a .acleda').removeClass('active-now');
		$('a .cellcard').removeClass('active-now');
		$('a .Maybank').removeClass('active-now');
		$('a .wing').removeClass('active-now');
		$('a .wing-app').removeClass('active-now');
		$('a .download').removeClass('active-now');
		/* Active bg */
		var imageUrl = "<?php echo base_url()?>images/support/payment/download.png";
		$('.download').css('background-image', 'url(' + imageUrl + ')');
		$(this).addClass('active-now');
		e.preventDefault();
	});
	
	$('a .anz').click(function(e) {
		
		$('a .aba').removeClass('active-now');
		$('a .acleda').removeClass('active-now');
		$('a .cellcard').removeClass('active-now');
		$('a .Maybank').removeClass('active-now');
		$('a .wing').removeClass('active-now');
		$('a .wing-app').removeClass('active-now');
		$('a .download').removeClass('active-now');
		/* Active bg */
		var imageUrl = "<?php echo base_url()?>images/support/payment/download.png";
		$('.download').css('background-image', 'url(' + imageUrl + ')');
		$(this).addClass('active-now');
		e.preventDefault();
	});
	
	$('a .acleda').click(function(e) {
		
		$('a .aba').removeClass('active-now');
		$('a .anz').removeClass('active-now');
		$('a .cellcard').removeClass('active-now');
		$('a .Maybank').removeClass('active-now');
		$('a .wing').removeClass('active-now');
		$('a .wing-app').removeClass('active-now');
		$('a .download').removeClass('active-now');
		/* Active bg */
		var imageUrl = "<?php echo base_url()?>images/support/payment/download.png";
		$('.download').css('background-image', 'url(' + imageUrl + ')');
		$(this).addClass('active-now');
		e.preventDefault();
	});
	
	$('a .cellcard').click(function(e) {
		
		$('a .aba').removeClass('active-now');
		$('a .anz').removeClass('active-now');
		$('a .acleda').removeClass('active-now');
		$('a .Maybank').removeClass('active-now');
		$('a .wing').removeClass('active-now');
		$('a .wing-app').removeClass('active-now');
		$('a .download').removeClass('active-now');
		/* Active bg */
		var imageUrl = "<?php echo base_url()?>images/support/payment/download.png";
		$('.download').css('background-image', 'url(' + imageUrl + ')');
		$(this).addClass('active-now');
		e.preventDefault();
	});
	
	$('a .Maybank').click(function(e) {
		
		$('a .aba').removeClass('active-now');
		$('a .anz').removeClass('active-now');
		$('a .acleda').removeClass('active-now');
		$('a .cellcard').removeClass('active-now');
		$('a .wing').removeClass('active-now');
		$('a .wing-app').removeClass('active-now');
		$('a .download').removeClass('active-now');
		/* Active bg */
		var imageUrl = "<?php echo base_url()?>images/support/payment/download.png";
		$('.download').css('background-image', 'url(' + imageUrl + ')');
		$(this).addClass('active-now');
		e.preventDefault();
	});
	
	$('a .wing').click(function(e) {
		
		$('a .aba').removeClass('active-now');
		$('a .anz').removeClass('active-now');
		$('a .acleda').removeClass('active-now');
		$('a .cellcard').removeClass('active-now');
		$('a .Maybank').removeClass('active-now');
		$('a .wing-app').removeClass('active-now');
		$('a .download').removeClass('active-now');
		/* Active bg */
		var imageUrl = "<?php echo base_url()?>images/support/payment/download.png";
		$('.download').css('background-image', 'url(' + imageUrl + ')');
		$(this).addClass('active-now');
		e.preventDefault();
	});
	
	$('a .wing-app').click(function(e) {
		
		$('a .aba').removeClass('active-now');
		$('a .anz').removeClass('active-now');
		$('a .acleda').removeClass('active-now');
		$('a .cellcard').removeClass('active-now');
		$('a .Maybank').removeClass('active-now');
		$('a .wing').removeClass('active-now');
		$('a .download').removeClass('active-now');
		/* Active bg */
		var imageUrl = "<?php echo base_url()?>images/support/payment/download.png";
		$('.download').css('background-image', 'url(' + imageUrl + ')');
		$(this).addClass('active-now');
		e.preventDefault();
	});
	
	$('a .download').click(function(e) {
		
		$('a .aba').removeClass('active-now');
		$('a .anz').removeClass('active-now');
		$('a .acleda').removeClass('active-now');
		$('a .cellcard').removeClass('active-now');
		$('a .Maybank').removeClass('active-now');
		$('a .wing').removeClass('active-now');
		$('a .wing-app').removeClass('active-now');
		/* Active bg */
		var imageUrl = "<?php echo base_url()?>images/support/payment/hover-download.png";
		$('.download').css('background-image', 'url(' + imageUrl + ')');
		$(this).addClass('active-now');
		e.preventDefault();
	});
}); 
</script>
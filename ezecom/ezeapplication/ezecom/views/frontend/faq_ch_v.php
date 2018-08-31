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
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-img-padding">
				<div class="wrapper-top">
					<img  class="img-responsive" src="<?php echo base_url()?>/images/support/faq/faq.jpg"/>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="all-features mg-bt-last">
					<div class="row mg-top mg-bt">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<a href="<?=base_url();?>support/faq#general" data-toggle="tab" data-id="general">
								<div class="general active-now">
									<p class="text-position">一般</p>
								</div>
							</a>
						</div>
						<!--<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<a href="<?=base_url();?>support/faq#ibizcloud" data-toggle="tab" data-id="ibizcloud">
								<div class="ibizcloud">
									<p class="text-position">ibizCloud</p>
								</div>
							</a>
						</div>-->
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<a href="<?=base_url();?>support/faq#email" data-toggle="tab" data-id="email">
								<div class="email">
									<p class="text-position">电子邮件</p>
								</div>
							</a>
							
						</div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<a href="<?=base_url();?>support/faq#internet-connection" data-toggle="tab" data-id="internet-connection">
								<div class="internet-connection">
									<p class="text-position">网络连接</p>
								</div>
							</a>
						</div>
					</div>
					<div class="row">
						<!--<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<a href="<?=base_url();?>support/faq#email" data-toggle="tab" data-id="email">
								<div class="email">
									<p class="text-position">Email</p>
								</div>
							</a>
							
						</div>-->
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<a href="<?=base_url();?>support/faq#email-problems" data-toggle="tab" data-id="email-problems">
								<div class="email-problems">
									<p class="text-position">电子邮件 - 问题</p>
								</div>
							</a>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<a href="<?=base_url();?>support/faq#security" data-toggle="tab" data-id="security">
								<div class="security">
									<p class="text-position">安全</p>
								</div>
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
						<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-10">
							<div class="bd-bt"></div>
						</div>
						<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
					</div>
					<div class="row">
						<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<!-- Content -->
							<div class="tab-content">
									<div id="general" class="tab-pane rl_tabs-pane nn_tabs-pane active payment-tap">
									<h2>一般</h2>
									<h1 id="q1" class="faqheading q1"  style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#a1">EZECOM在该国的互联网服务覆盖范围是什么？</h1>
									<div id="a1" class="panel-collapse collapse">
									<p style="font-size: 16px;">我们的光纤互联网和网络基础设施覆盖整个柬埔寨王国的所有城市和省份。</p>
									</div>
									<h1 id="q2" class="faqheading q2" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#a2">我可以从EZECOM购买最快的互联网选项？</h1>
									<div id="a2" class="panel-collapse collapse">
									<p style="font-size: 16px;">我们的FTTX基础设施提供高速千兆传输性能。如果您有具体问题，请联系我们的销售团队。请致电023 23 81 81或085 888 181联系我们 ，或发送电子邮件至<a href="mailto:websales@ezecom.com.kh">websales@ezecom.com.kh!</a></p>
									</div>
									<h1 class="faqheading q3" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#a3">注册并在我的办公室使用新的互联网连接需要多长时间？</h1>
									<div id="a3" class="panel-collapse collapse">
									<p style="font-size: 16px;">根据您的办公室所在地和安装团队的可用性，我们的新客户连接将在收到付款后的3至7个工作日内激活。</p>
									</div>
									</div>
									<div id="ibizcloud" class="tab-pane rl_tabs-pane nn_tabs-pane payment-tap">
									<h2 >ibizCloud</h2>
									<h1 class="faqheading q1" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#b1">What is the redundancy plan for EZECOM ibizCloud Service?</h1>
									<div id="b1" class="panel-collapse collapse">
									<p style="font-size: 16px;">Virtualized hardware environment of EZECOM ibizCloud adopts fully redundant design:</p>
									<ul style="font-size: 16px;">
									<li>Hardware equipments are hosted in the carrier-grade data centre’s standard server cabinets with dual power source for each cabinet.</li>
									<li>Physical servers with multiple power supplies.</li>
									<li>Multiple connections to WAN per physical server.</li>
									<li>Distributed parity volumes (RAID 5) across the physical servers of a grid to enable automated recovery of appliances.</li>
									<li>Multiple Internet upstream paths for both local and international access.</li>
									</ul>
									</div>
									<h1 class="faqheading q2" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#b2">Will EZECOM help me to install software to the VM?</h1>
									<div id="b2" class="panel-collapse collapse">
									<p style="font-size: 16px;">EZECOM ibizCloud only offers VMs running CentOS or Windows OS (IaaS), Internet connections (BaaS) and dedicated connections (DBaaS, ODVLL) to customers at this stage. Software-as-a-Service may be developed in the future when we see potential market in particular software industry.</p>
									</div>
									<h1 class="faqheading q3" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#b3">Are there any limitations on usage for EZECOM ibizCloud Service?</h1>
									<div id="b3" class="panel-collapse collapse">
									<p style="font-size: 16px;">In order to ensure the computing resources can be fairly used among the subscribers, EZECOM had developed an Acceptable Use Policy to provide guidelines to end users; the guideline is attached in the service order form and can be sent to users upon request.</p>
									</div>
									<h1 class="faqheading q4" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#b4">If I have subscribed more than one VM, can I share the purchased resources among the VMs?</h1>
									<div id="b4" class="panel-collapse collapse">
									<p style="font-size: 16px;">Subscribed resources are not on shared basis. Each VM’s capacity is independent to each other and cannot be transferred.</p>
									</div>
									<h1 class="faqheading q5" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#b5">What is the support plan for EZECOM ibizCloud Service?</h1>
									<div id="b5" class="panel-collapse collapse">
									<p style="font-size: 17px;">For technical support, a 7x24x365 Call Center had been set up by EZECOM and International</p>
									<p style="font-size: 17px;">Network Operation Centre to response customers by email (websales@ezecom.com.kh) and phone call (023 238 181).</p>
									</div>
									<h1 class="faqheading q6" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#b6">If my VM does not work, will EZECOM provide backup points for restoration?</h1>
									<div id="b6" class="panel-collapse collapse">
									<p style="font-size: 17px;">Customers may subscribe backup service for their VM, which is a value-added service for quick recovery. Daily rates are applied. Customer is responsible for the backup and restoring of Customer Content* under any circumstances. * Customer Content means the Third Party Software that Client installs and hosts on the Services, and any other content, materials or data that Client uses, installs, uploads or hosts on the Services.</p>
									</div>
									<h1 class="faqheading q7" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#b7">How does EZECOM ibizCloud separate customer’s data from one another?</h1>
									<div id="b7" class="panel-collapse collapse">
									<p style="font-size: 17px;">Cloud system controls all I/O and components as well as tunnels through the network. A zero-trust security model has been implemented to automatically restrict incoming and outgoing traffic only to the assigned IP addresses, drop and ignore any packets launched outside a VM</p>
									</div>
									<h1 class="faqheading q8" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#b8">Is VM snapshot supported?</h1>
									<div id="b8" class="panel-collapse collapse">
									<p style="font-size: 17px;">Yes, customers may subscribe backup service for their VM, which is a value-added service for quick recovery. Daily rates are applied.</p>
									</div>
									<h1 class="faqheading q9" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#b9">Does ibizCloud have High Availability design?</h1>
									<div id="b9" class="panel-collapse collapse">
									<p style="font-size: 17px;">EZECOM provides a built-in high availability platform, which is equipped with full hardware redundancy that single point of failure is protected. For BaaS, DBaaS and ODVLL service, connectivity is provisioned via fully redundant EZECOM-MPLS network and local Internet with SLA.</p>
									</div>
									<h1 class="faqheading q10" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#b10">What is the SLA for EZECOM ibizCloud Service?</h1>
									<div id="b10" class="panel-collapse collapse">
									<p style="font-size: 17px;">Monthly Uptime Percentage - 99.9%. Please refer to EZECOM ibizCloud Service Level Agreement for more detail.</p>
									</div>
									</div>
									<div id="internet-connection" class="tab-pane rl_tabs-pane nn_tabs-pane payment-tap">
									<h2 class="rl_tabs-title nn_tabs-title"><a id="anchor-internet-connection" class="anchor"></a>网络连接</h2>
									<h1 class="faqheading q1" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#c1">为什么我的网络这么慢？</h1>
									<div id="c1" class="panel-collapse collapse">
									<p style="font-size: 17px;">互联网访问速度缓慢可能是多种因素造成的，例如：</p>
									<ul style="font-size: 17px;">
									<li>在某些情况下，指定的Web / Internet服务器过载或链接到拥挤/填充路由的Internetwork。</li>
									<li>需要检查您的计算机和/或设备的硬件升级和/或软件优化。在许多情况下，计算机速度慢导致互联网体验缓慢。</li>
									<li>全球/大陆互联网上游连接因其他海洋活动（如捕鱼，海洋研究或海洋开发）而中断/损坏。</li>
									</ul>
									</div>
									<h1 class="faqheading q2" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#c2">如何让我的WiFi访问更稳定？</h1>
									<div id="c2" class="panel-collapse collapse">
									<p style="font-size: 17px;"><strong>安装无线/ WiFi接入点/路由器时，请务必查看以下建议：</strong></p>
									<ul style="font-size: 17px;">
									<li>与我们的销售团队或呼叫中心联系，了解适合您需求的推荐品牌和型号的无线接入点/路由器。</li>
									<li>在无线接入用户将要工作的建筑物中选择一个良好的中央和平衡的位置点。</li>
									<li>使用强密码并定期更新固件，确保您的AP /路由器安全并受到保护。</li>
									</ul>
									</div>
									<h1 class="faqheading q3" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#c3">如何优化办公室的互联网使用？</h1>
									<div id="c3" class="panel-collapse collapse">
									<p style="font-size: 17px;">我们强烈建议客户评估其办公网络设置和业务需求。监控并测量使用情况，这样您就可以了解如何改善网络和互联网设置。网上有几种技术工具可用于塑造网络流量图。此外，实施防火墙策略是一个很好的例程。改善互联网接入最重要的方面是用户的教育。鼓励用户负责任，高效，安全地使用互联网。
									</p>
									</div>
									</div>
									<div id="email" class="tab-pane rl_tabs-pane nn_tabs-pane payment-tap">
									<h2 class="rl_tabs-title nn_tabs-title"><a id="anchor-email" class="anchor"></a>电子邮件</h2>
									<h1 class="faqheading q1" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#d1">如何通过网络邮件管理我的电子邮件？</h1>
									<div id="d1" class="panel-collapse collapse">
									<p style="font-size: 17px;">许多人大多使用笔记本电脑或智能手机访问他们的电子邮件但是，有时您需要在临时计算机上快速访问您的电子邮件。例如，您的设备电量耗尽而您忘记了充电器。这就是网络邮件有用的时候。这是访问您的电子邮件的链接。 <a href="http://webmail.ezecom.com.kh" target="_blank">http://webmail.ezecom.com.kh</a>
登录到您的网络邮件后，您还可以管理自动回复，转发到其他地址并更改密码。

									</p>
									
									</div>
									<h1 class="faqheading q2" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#d2">哪些电子邮件客户端兼容EZECOM电子邮件服务器？</h1>
									<div id="d2" class="panel-collapse collapse">
									<ul style="font-size: 17px;">
									<li>Outlook 2003</li>
									<li>Windows 8 Mail</li>
									<li>Mac Mail</li>
									<li>iPhone 和 iPad</li>
									<li>Android</li>
									</ul>
									</div>
									<h1 class="faqheading q3" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#d3">电子邮件的最佳做法是什么？</h1>
									<div id="d3" class="panel-collapse collapse">
									<p style="font-size: 17px;">以下是确保您的企业电子邮件通信交付的建议。由于黑客试图利用对计算机系统的访问来开发垃圾邮件和恶意电子邮件的问题日益严重，今天的电子邮件服务器系统配备了复杂的工具和规则（发件人策略）来应对恶意攻击。有时，由于发件人服务器不符合接收方的发件人策略框架（SPF），因此无法将电子邮件传递给收件人。这是应该做的事情。</p>
									<p style="font-size: 17px;"><strong>可以:</strong></p>
									<ul style="font-size: 17px;">
									<li>确保您的电子邮件递送服务器符合标准SPF (请参阅 <a href="http://openspf.org/" target="_blank">http://openspf.org</a>)</li>
									<li>通过应用更新和安全修复程序来保护服务器安全</li>
									<li>使您的电子邮件简单而独特</li>
									<li>保护您的系统免受病毒和恶意软件攻击</li>
									<li>如果您需要向客户推送广告，请使用mailchip.com等外部大众传送服务</li>
									<li>使用现代和安全的文件共享平台来共享大文件</li>
									</ul>
									<p style="font-size: 17px;"><strong>不可以:</strong></p>
									<ul style="font-size: 17px;">
									<li>使用您的企业电子邮件系统发送广告电子邮件</li>
									<li>一次发送给太多收件人（超过50个）</li>
									<li>发送大文件（大于10Mb）</li>
									<li>在电子邮件签名中包含图片</li>
									</ul>
									</div>
									<h1 class="faqheading q4" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#d4">访问我的EZECOM电子邮件账户时出现问题。帮帮我！</h1>
									<div id="d4" class="panel-collapse collapse">
									<p style="font-size: 17px;">如果您使用网络邮件按照 URL <a href="http://webmail.ezecom.com.kh/" target="_blank">http://webmail.ezecom.com.kh</a>, 阅读和发送电子邮件，请确保您的用户名（电子邮件地址）和密码正确无误。</p>
									<p style="font-size: 17px;">如果您忘记了密码，请拨打我们的电话中心号码023 23 81 81，并确保获得您的EZECOM客户ID详细信息和您的国民身份证/国际护照，以验证您对该账户的所有权。如果电子邮件账户已在贵公司注册，请确保存在相关文档。解决此问题的另一种方法是直接联系分配到您账户的销售人员。</p>
									</div>
									<h1 class="faqheading q5" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#d5">我公司的电子邮件地址没有收到电子邮件。帮帮我！</h1>
									<div id="d5" class="panel-collapse collapse">
									<p style="font-size: 17px;">首先，您应该咨询您的同事，看看他们是否遇到了同样的问题。从用户的角度来看，大多数人会尝试从他们的个人电子邮件中发送测试电子邮件进行验证。这不是一个糟糕的方法，因为您可以快速收到退回邮件，其中包含无法联系到您的地址的问题的线索。一些事情可能导致电子邮件无法访问：</p>
									<ul style="font-size: 17px;">
									<li>错误的地址</li>
									<li>发件人邮件服务器不符合收件人ISP或电子邮件托管公司。例如，发件人服务器的信誉率很低，或者邮件被阻止为垃圾邮件。</li>
									<li>无法访问或不可用接收电子邮件服务器</li>
									</ul>
									<p style="font-size: 17px;">有关如何改进电子邮件传递策略的详细信息，请参阅有关发件人策略框架（openspf.org）和域密钥识别邮件（dkim.org）的更多信息。</p>
									<p style="font-size: 17px;">请点击此链接查看EZECOM电子邮件服务器状态。大多数Web和电子邮件托管公司都提供后端登录到cPanel和WHM界面，作为监视和排除电子邮件服务故障的良好窗口。</p>
									</div>
									<h1 class="faqheading q6" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#d6">一些收件人无法收到我的电子邮件，但其他人可以。帮帮我！</h1>
									<div id="d6" class="panel-collapse collapse">
									<p style="font-size: 17px;">假设您的同事正在接收电子邮件，但您不能，这里有一些场景可能会导致识别问题。</p>
									<ul style="font-size: 17px;">
									<li>错误的地址</li>
									<li>您的邮箱已满</li>
									<li>收件人的电子邮件系统遇到问题，包括Outlook，Mail或Thunderbird等邮件客户端程序连接到服务器时出现问题</li>
									<li>由于垃圾邮件过滤保护，您的电子邮件客户端程序或防病毒软件已移动或阻止来自特定发件人的电子邮件</li>
									</ul>
									<p style="font-size: 17px;">要快速证明上述问题的预测，您可以简单地尝试从个人电子邮件发送测试电子邮件，以进一步将故障排除步骤升级到系统管理员级别。</p>
									</div>
									</div>
									<div id="email-problems" class="tab-pane rl_tabs-pane nn_tabs-pane payment-tap">
									<h2 class="rl_tabs-title nn_tabs-title"><a id="anchor-email-problems" class="anchor"></a>电子邮件 - 问题</h2>
									<h1 class="faqheading q1" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#e1">垃圾邮件发送者如何影响您的IP声誉？</h1>
									<div id="e1" class="panel-collapse collapse">
									<p style="font-size: 17px;">垃圾邮件发送者窃取用户账户并破坏利用安全漏洞的邮件服务器。一旦账户或服务器遭到入侵，就会发送大量垃圾邮件 - 所有这些都是在您不知情的情况下进行的。当电子邮件接收者看到来自您的账户或服务器的垃圾邮件时，他们可能暂时阻止您</p>
									</div>
									<h1 class="faqheading q2" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#e2">如果我的IP地址被列入黑名单，我该怎么办？</h1>
									<div id="e2" class="panel-collapse collapse">
									<p style="font-size: 17px;">您可以通过许多在线免费搜索工具检查您的IP。例如：</p>
									<p style="font-size: 17px;"><a href="http://mxtoolbox.com/" target="_blank">http://mxtoolbox.com</a></p>
									<p style="font-size: 17px;"><a href="https://www.spamhaus.org/lookup/" target="_blank">https://www.spamhaus.org/lookup/</a></p>
									<p style="font-size: 17px;"><a href="http://www.sorbs.net/lookup.shtml" target="_blank">http://www.sorbs.net/lookup.shtml</a></p>
									<p style="font-size: 17px;"><a href="http://www.uceprotect.net/en/rblcheck.php" target="_blank">http://www.uceprotect.net/en/rblcheck.php</a></p>
									</div>
									<h1 class="faqheading q3" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#e3">如果我的IP地址被列入黑名单，我该怎么办？</h1>
									<div id="e3" class="panel-collapse collapse">
									<p style="font-size: 17px;">您需要使用以下方法从黑名单中删除您的IP：</p>
									<ul style="font-size: 17px;">
									<li>自助删除。有一些黑名单具有自助删除功能，可让您从列表中删除您的IP地址，而不会有太多麻烦。但是，在执行此操作之前，您需要确保已解决任何问题。如果您没有再次列出您的IP地址，下次将其删除将不容易。</li>
									<li>基于时间的删除。大多数黑名单都有一个内置的自动过程，可在一到两周内删除较低级别的列表（轻易犯罪的IP地址）。但是，如果IP地址多次发送垃圾邮件或发送大量垃圾邮件，则删除的时间段会更长。</li>
									</ul>
									</div>
									<h1 class="faqheading q4" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#e4">为什么我不能发送邮件？</h1>
									<div id="e4" class="panel-collapse collapse">
									<p style="font-size: 17px;">许多原因可能会导致此问题：</p>
									<ul style="font-size: 17px;">
									<li>邮件客户端配置不正确</li>
									<li>您的IP已被列入黑名单</li>
									<li>收件人的邮件服务拒绝您的邮件</li>
									<li>您的消息已被Ezecom SpamFilter阻止</li>
									</ul>
									</div>
									<h1 class="faqheading q5" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#e5">我如何知道哪台计算机在我的网络中广播垃圾邮件？</h1>
									<div id="e5" class="panel-collapse collapse">
									<p style="font-size: 17px;">您可以通过使用软件工具扫描哪个设备连续访问端口25来了解这一点。一些用于此的工具示例是Scanport，Wireshark和Microtek。</p>
									</div>
									<h1 class="faqheading q6" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#e6">如何保护我的网络免受垃圾邮件侵扰？</h1>
									<div id="e6" class="panel-collapse collapse">
									<p style="font-size: 17px;">您可能需要执行以下操作来保护LAN免受垃圾邮件的侵害：</p>
									<ul style="font-size: 17px;">
									<li>扫描网络上的所有计算机是否有病毒</li>
									<li>查看您的操作系统是否有任何已知且需要的“补丁”（更新和修复）</li>
									<li>更安全地配置路由器</li>
									<li>建立并实施更强大的密码</li>
									<li>正确配置邮件服务器</li>
									<li>确保正向和反向DNS记录都正确无误</li>
									</ul>
									</div>
									<h1 class="faqheading q7" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#e7">如何启用自动转发和自动回复？</h1>
									<div id="e7" class="panel-collapse collapse">
									<ul style="font-size: 17px;">
									<li>通过 <a href="http://webmail.ezecom.com.kh/" target="_blank">webmail.ezecom.com.kh</a></li>
									<li>单击Webmail窗口右上角的“设置”</li>
									<li>单击“设置中的过滤器”</li>
									<li>单击左侧第三个面板中的第二个（+）加号</li>
									<li>将出现过滤器定义窗口</li>
									</ul>
									<p style="font-size: 17px;">设置自动转发：</p>
									<ul style="font-size: 17px;">
									<li>在执行以下操作框中，请选择重定向消息到</li>
									<li>然后键入转发电子邮件到第二个框</li>
									<li>完成后点击保存</li>
									</ul>
									<p style="font-size: 17px;">设置自动回复：</p>
									<ul style="font-size: 17px;">
									<li>在执行以下操作框中，请选择回复消息</li>
									<li>键入邮件正文，主题</li>
									<li>然后填写我的其他电子邮件地址</li>
									<li>完成后点击“保存”按钮</li>
									</ul>
									</div>
									<h1 class="faqheading q8" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#e8">为什么我收到这么多垃圾邮件？</h1>
									<div id="e8" class="panel-collapse collapse">
									<p style="font-size: 17px;">造成这种情况的原因有几个：</p>
									<ul style="font-size: 17px;">
									<li>您使用电子邮件在互联网上的未知网站上注册</li>
									<li>其他人计算机上的恶意软件/病毒已检查其通讯簿并将垃圾邮件发送到您的邮箱</li>
									</ul>
									</div>
									<h1 class="faqheading q9" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#e9">当我的邮件被Ezecom SpamFilter阻止时该怎么办？</h1>
									<div id="e9" class="panel-collapse collapse">
									<p style="font-size: 17px;">EZECOM具有多层SPAM过滤网关，可防止垃圾邮件离开网络。</p>
									<p style="font-size: 17px;">如果您发送的邮件看起来像垃圾邮件，那么我们的SpamFilter会阻止它们。</p>
									<p style="font-size: 17px;">如果您认为您的邮件已被Ezecom SpamFilter阻止，请联系IT支持团队。</p>
									</div>
									<h1 class="faqheading q10" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#e10">如果我被阻止，我会看到哪些错误消息？</h1>
									<div id="e10" class="panel-collapse collapse">
									<table id="email-table">
									<tbody>
									<tr><th style="text-align: center; border-bottom: 1px solid #ccc;">序号</th><th style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #cccccc; text-align: left; padding-left: 30px;">代码</th></tr>
									<tr>
									<td>1</td>
									<td>451 目前不接受来自您的ip-psmtp的邮件</td>
									</tr>
									<tr>
									<td>2</td>
									<td>421 STRING（STRING）遗憾的是, 1.2.3.4中的某些消息未发送。请再试一次。 请再试一次。我们限制每小时和每天可以发送的邮件数量。您也可以参考http://mail.live.com/mail/troubleshooting.aspx#errors。</td>
									</tr>
									<tr>
									<td>3</td>
									<td>421 STRING.r1000.mx.aol.com服务不可用 - 稍后再试</td>
									</tr>
									<tr>
									<td>4</td>
									<td>554 (RTR:BL) http://postmaster.info.aol.com/errors/554rtrbl.html</td>
									</tr>
									<tr>
									<td>5</td>
									<td>475来自您网络的访问受到限制，请稍后再试</td>
									</tr>
									<tr>
									<td>6</td>
									<td>550拒绝：1.2.3.4，在http://csi.cloudmark.com/STRING上列出以进行补救。</td>
									</tr>
									<tr>
									<td>7</td>
									<td>421 STRING cox 1.2.3.4被阻止 - 错误代码：CDRBL  - 有关详细信息，请参阅http://postmaster.cox.net/confluence/display/postmaster/Error+Codes上的错误代码部分。</td>
									</tr>
									<tr>
									<td>8</td>
									<td>571来自1.2.3.4的电子邮件目前被Verizon Online的STRING系统阻止。电子邮件发件人或电子邮件服务提供商可以访问http://www.verizon.net/whitelist并请求删除该块。数</td>
									</tr>
									<tr>
									<td>9</td>
									<td>554 5.7.1  - 错误：邮件被拒绝 -  <1.2.3.4>  - 请参阅http://postmaster.rr.com/amIBlockedByRR?ip=1.2.3.4</td>
									</tr>
									<tr>
									<td>10</td>
									<td>421 4.4.2服务超时。</td>
									</tr>
									</tbody>
									</table>
									</div>
									</div>
									<div id="security" class="tab-pane rl_tabs-pane nn_tabs-pane payment-tap">
									<h2 class="rl_tabs-title nn_tabs-title"><a id="anchor-security" class="anchor"></a>安全</h2>
									<h1 class="faqheading q1" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#f1">我的孩子如何安全地使用互联网？</h1>
									<div id="f1" class="panel-collapse collapse">
									<p style="font-size: 17px;">儿童安全的互联网接入至关重要。因此，我们强烈建议客户探索如何避免滥用内容，剥削，被盗身份和其他网络犯罪的持续教育。还有技术解决方案可以保护您的计算机和设备免受下面列出的潜在问题的影响。</p>
									<ul style="font-size: 17px;">
									<li>Google安全搜索选项  – 登录Google并启用安全搜索 (此处为更多信息 <a href="http://goo.gl/xhJukA" target="_blank">http://goo.gl/xhJukA</a>)</li>
									<li>OpenDNS (<a href="http://www.opendns.com/home-internet-security/" target="_blank">http://www.opendns.com/home-internet-security/</a>) 全面且易于设置的家庭和办公室互联网过滤和保护系统</li>
									<li>NetNanny (<a href="http://www.netnanny.com/" target="_blank">www.netnanny.com</a>) 是个人和企业互联网内容过滤解决方案的最受好评的在线保护之一</li>
									</ul>
									</div>
									<h1 class="faqheading q2" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#f2">什么是网络钓鱼邮件？我怎样才能保护自己免受伤害？</h1>
									<div id="f2" class="panel-collapse collapse">
									<p style="font-size: 17px;">创建网络钓鱼电子邮件是为了针对具有恶意意图的特定人群收集计算机用户的用户名ID和密码等信息，并升级对网上银行，电子邮件账户，社交媒体账户和公司内部系统等敏感网站的访问。</p>
									<p style="font-size: 17px;">由于意识到这种不道德的意图，人们可以通过查找垃圾邮件发送者通常不包含的特定有效详细信息来预测网络钓鱼电子邮件。</p>
									<p style="font-size: 17px;">您的全名和账户详细信息等可靠信息通常由您的银行，组织或系统提供商在有关公告或广告系列的电子邮件中显示。同样重要的是要始终向银行核实您需要的更改或行动。

从技术上讲，您可以通过实施端点安全软件（如防病毒套件和电子邮件保护系统）来保护您的设备。最后但同样重要的是，您应该通过将电子邮件发送到abuse@ezecom.com.kh来报告此类可疑活动，以便将来进行调查并为柬埔寨打击网络欺诈做出贡献。
</p>
									</div>
									<h1 class="faqheading q3" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#f3">我应该问自己的ICT安全问题是什么？</h1>
									<div id="f3" class="panel-collapse collapse">
									<p style="font-size: 17px;">ICT安全威胁是真实的，因此在工作和个人方面跟上最新信息非常重要。保持您的设备，密码安全并受到控制。</p>
									
									<ul style="font-size: 17px;">
									<li>确保您的密码很复杂，因此不容易猜到。如果您必须在某个地方写下来或与某人分享，您应该确信他们不会落入坏人之手。</li>
									<li>由于您可能需要保留许多设备和登录账户，这些账户也需要不时更新，因此可能需要使用密码管理工具。了解Apple Keychain，KeePass，LastPass和Dashlane。</li>
									</ul>
									<p style="font-size: 17px;">在设备上安装或接受新应用程序时，请熟悉可信来源。在您的设备上使用防病毒或防恶意软件防护系统，实现更多层安全性。</p>
									<p style="font-size: 17px;">通过新闻了解有关信息安全的更多信息，以及如何针对新的网络线程（如系统漏洞，中间人攻击和系统补丁需求）采取措施。</p>
									</div>
									<h1 class="faqheading q4" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#f4">如何最大限度地提高重要信息的安全性？</h1>
									<div id="f4" class="panel-collapse collapse">
									<p style="font-size: 17px;">当赌注很高时，由于有针对性的违规尝试，您的敏感信息和业务可能会面临风险。了解系统的结构及其缺点将使您在不方便的时候保护系统的机会很大。</p>
									<p style="font-size: 17px;">与IT人员一起密切关注系统访问日志。确保访问历史记录安全可供将来查看和分析。一旦掌握了有关上游尝试的大量信息，请联系我们的代表。我们的技术团队将很乐意为您提供具体案例方面的帮助。我们还与CamCERT（柬埔寨计算机应急响应小组）密切合作，协助事件响应程序。</p>
									</div>
									<h1 class="faqheading q5" style="font-size: 17px;" data-toggle="collapse" data-parent="#accordion" data-target="#f5">我每次登录网站时都收到了证书错误消息。我应该担心吗？我该如何解决这个问题？</h1>
									<div id="f5" class="panel-collapse collapse">
									<p style="font-size: 17px;">大多数网站（包括登录和敏感信息）通过使用SSL（安全套接字层）或HTTPS证书来加密用户计算机和服务器系统之间的信息来保护事务。以前，组织使用VPN（虚拟专用网络）来保护使用公共Internet访问信息。但是，随着对移动员工的需求不断增长，向HTTPS的转变被广泛采用。</p>
									<p style="font-size: 17px;">不幸的是，一个老练的黑客会尝试通过尝试执行中间人攻击来绕过安全线路，通常是在当时连接无线设备的网络提供商处。黑客的机器将运行伪造的自签名证书以使用户感到困惑。因此，最新的浏览器将通过生成证书错误消息来警告潜在威胁的危险。您应该与系统管理员联系以报告事件以进行更好的分析。您的系统管理员可能会建议使用传统VPN连接作为替代解决方案。</p>
									</div>
									</div>
							</div> <!-- End Content -->
						</div>
						<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
					</div>
					<div class="row mg-top mg-bt">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="khmer">
								<h2 class="text-center">高棉语/英语</h2>
								<p class="text-center desk-num">服务台号码（24/7）</p>
								<p class="text-center phone-num">+855(0)23 238 181 <br/>
									+855(0)85 888 181
								</p>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="english">
								<h2 class="text-center">说中文</h2>
								<p class="text-center desk-num">服务台号码</p>
								<p class="text-center working-hour">(周一至周五：上午8:00至下午5:30)</p>
								<p class="text-center working-hour">(周六：上午8:00  - 上午12:00)</p>
								<p class="text-center phone-num">+855(0)89 777 696</p>
							</div>
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
<!-- BACK TO TOP BUTTON -->
<script type="text/javascript">
	/* mouse hover change img src */
	
	
	/* function hover(element){
		if(element=="general"){
			var imageUrl = "<?php echo base_url()?>images/support/faq/hover-general.png";
			$('.general').css('background-image', 'url(' + imageUrl + ')');
		}
	}
	
	function unhover(element) {
		if(element=="general"){
			var imageUrl = "<?php echo base_url()?>images/support/faq/general.png";
			$('.general').css('background-image', 'url(' + imageUrl + ')');
		}
	} */
	
	/* function hover(element){
		if(element=="General"){
			document.getElementById("General").src = "<?php echo base_url()?>images/support/faq/hover-general.png";
		}if(element=="ibizCloud"){
			document.getElementById("ibizCloud").src = "<?php echo base_url()?>images/support/faq/hover-ibizcloud.png";
		}else if(element=="Internet-Connection"){
			document.getElementById("Internet-Connection").src = "<?php echo base_url()?>images/support/faq/hover-internet-connection.png";
		}else if(element=="Email"){
			document.getElementById("Email").src = "<?php echo base_url()?>images/support/faq/hover-email.png";
		}else if(element=="Email-pro"){
			document.getElementById("Email-pro").src = "<?php echo base_url()?>images/support/faq/hover-email-problem.png";
		}else if(element=="Security"){
			document.getElementById("Security").src = "<?php echo base_url()?>images/support/faq/hover-security.png";
		}
		
	} */
	
	/*function unhover(element) {
		if(element=="General"){
			document.getElementById("General").src = "<?php echo base_url()?>images/support/faq/general.png";
		}else if(element=="ibizCloud"){
			document.getElementById("ibizCloud").src = "<?php echo base_url()?>images/support/faq/ibizcloud.png";
		}else if(element=="Internet-Connection"){
			document.getElementById("Internet-Connection").src = "<?php echo base_url()?>images/support/faq/internet-connection.png";
		}else if(element=="Email"){
			document.getElementById("Email").src = "<?php echo base_url()?>images/support/faq/email.png";
		}else if(element=="Email-pro"){
			document.getElementById("Email-pro").src = "<?php echo base_url()?>images/support/faq/email-problem.png";
		}else if(element=="Security"){
			document.getElementById("Security").src = "<?php echo base_url()?>images/support/faq/security.png";
		}
		
	} */
</script>

<script type="text/javascript">
$(document).ready(function () {
	var imageUrl = "<?php echo base_url()?>images/support/faq/hover-general.png";
	$('.general').css('background-image', 'url(' + imageUrl + ')');
	
		$('.all-features a .general').click(function(e) {
			$('.all-features a .ibizcloud').removeClass('active-now');
			$('.all-features a .internet-connection').removeClass('active-now');
			$('.all-features a .email').removeClass('active-now');
			$('.all-features a .email-problems').removeClass('active-now');
			$('.all-features a .security').removeClass('active-now');
			/* Active bg */
			var imageUrl = "<?php echo base_url()?>images/support/faq/hover-general.png";
			var imageUrl_ibiz = "<?php echo base_url()?>images/support/faq/ibizcloud.png";
			var imageUrl_internet = "<?php echo base_url()?>images/support/faq/internet-connection.png";
			var imageUrl_email = "<?php echo base_url()?>images/support/faq/email.png";
			var imageUrl_email_pro = "<?php echo base_url()?>images/support/faq/email-problem.png";
			var imageUrl_security = "<?php echo base_url()?>images/support/faq/security.png";
			$('.security').css('background-image', 'url(' + imageUrl_security + ')');
			$('.email-problems').css('background-image', 'url(' + imageUrl_email_pro + ')');
			$('.email').css('background-image', 'url(' + imageUrl_email + ')');
			$('.general').css('background-image', 'url(' + imageUrl + ')');
			$('.ibizcloud').css('background-image', 'url(' + imageUrl_ibiz + ')');
			$('.internet-connection').css('background-image', 'url(' + imageUrl_internet + ')');
			
			$(this).addClass('active-now');
			e.preventDefault();
		});
		
		$('.all-features a .ibizcloud').click(function(e) {
			$('.all-features a .general').removeClass('active-now');
			$('.all-features a .internet-connection').removeClass('active-now');
			$('.all-features a .email').removeClass('active-now');
			$('.all-features a .email-problems').removeClass('active-now');
			$('.all-features a .security').removeClass('active-now');
			/* Active bg */
			var imageUrl_ibiz = "<?php echo base_url()?>images/support/faq/hover-ibizcloud.png";
			var imageUrl_gen = "<?php echo base_url()?>images/support/faq/general.png";
			var imageUrl_internet = "<?php echo base_url()?>images/support/faq/internet-connection.png";
			var imageUrl_email = "<?php echo base_url()?>images/support/faq/email.png";
			var imageUrl_email_pro = "<?php echo base_url()?>images/support/faq/email-problem.png";
			var imageUrl_security = "<?php echo base_url()?>images/support/faq/security.png";
			$('.security').css('background-image', 'url(' + imageUrl_security + ')');
			$('.email-problems').css('background-image', 'url(' + imageUrl_email_pro + ')');
			$('.email').css('background-image', 'url(' + imageUrl_email + ')');
			$('.ibizcloud').css('background-image', 'url(' + imageUrl_ibiz + ')');
			$('.general').css('background-image', 'url(' + imageUrl_gen + ')');
			$('.internet-connection').css('background-image', 'url(' + imageUrl_internet + ')');
			
			$(this).addClass('active-now');
			e.preventDefault();
			
		});
		
		$('.all-features a .internet-connection').click(function(e) {
			$('.all-features a .general').removeClass('active-now');
			$('.all-features a .ibizcloud').removeClass('active-now');
			$('.all-features a .email').removeClass('active-now');
			$('.all-features a .email-problems').removeClass('active-now');
			$('.all-features a .security').removeClass('active-now');
			/* Active bg */
			var imageUrl_ibiz = "<?php echo base_url()?>images/support/faq/ibizcloud.png";
			var imageUrl = "<?php echo base_url()?>images/support/faq/general.png";
			var imageUrl_internet = "<?php echo base_url()?>images/support/faq/hover-internet-connection.png";
			var imageUrl_email = "<?php echo base_url()?>images/support/faq/email.png";
			var imageUrl_email_pro = "<?php echo base_url()?>images/support/faq/email-problem.png";
			var imageUrl_security = "<?php echo base_url()?>images/support/faq/security.png";
			$('.security').css('background-image', 'url(' + imageUrl_security + ')');
			$('.email-problems').css('background-image', 'url(' + imageUrl_email_pro + ')');
			$('.email').css('background-image', 'url(' + imageUrl_email + ')');
			$('.ibizcloud').css('background-image', 'url(' + imageUrl_ibiz + ')');
			$('.general').css('background-image', 'url(' + imageUrl + ')');
			$('.internet-connection').css('background-image', 'url(' + imageUrl_internet + ')');
			$(this).addClass('active-now');
			e.preventDefault();
		});
		
		
		$('.all-features a .email').click(function(e) {
			$('.all-features a .general').removeClass('active-now');
			$('.all-features a .ibizcloud').removeClass('active-now');
			$('.all-features a .internet-connection').removeClass('active-now');
			$('.all-features a .email-problems').removeClass('active-now');
			$('.all-features a .security').removeClass('active-now');
			/* Active bg */
			var imageUrl_ibiz = "<?php echo base_url()?>images/support/faq/ibizcloud.png";
			var imageUrl = "<?php echo base_url()?>images/support/faq/general.png";
			var imageUrl_internet = "<?php echo base_url()?>images/support/faq/internet-connection.png";
			var imageUrl_email = "<?php echo base_url()?>images/support/faq/hover-email.png";
			var imageUrl_email_pro = "<?php echo base_url()?>images/support/faq/email-problem.png";
			var imageUrl_security = "<?php echo base_url()?>images/support/faq/security.png";
			$('.security').css('background-image', 'url(' + imageUrl_security + ')');
			$('.email-problems').css('background-image', 'url(' + imageUrl_email_pro + ')');
			$('.ibizcloud').css('background-image', 'url(' + imageUrl_ibiz + ')');
			$('.general').css('background-image', 'url(' + imageUrl + ')');
			$('.internet-connection').css('background-image', 'url(' + imageUrl_internet + ')');
			$('.email').css('background-image', 'url(' + imageUrl_email + ')');
			
			$(this).addClass('active-now');
			$(this).addClass('active-now');
			e.preventDefault();
		});
		
		
		$('.all-features a .email-problems').click(function(e) {
			$('.all-features a .general').removeClass('active-now');
			$('.all-features a .ibizcloud').removeClass('active-now');
			$('.all-features a .internet-connection').removeClass('active-now');
			$('.all-features a .email').removeClass('active-now');
			$('.all-features a .security').removeClass('active-now');
			/* Active bg */
			var imageUrl_ibiz = "<?php echo base_url()?>images/support/faq/ibizcloud.png";
			var imageUrl = "<?php echo base_url()?>images/support/faq/general.png";
			var imageUrl_internet = "<?php echo base_url()?>images/support/faq/internet-connection.png";
			var imageUrl_email = "<?php echo base_url()?>images/support/faq/email.png";
			var imageUrl_email_pro = "<?php echo base_url()?>images/support/faq/hover-email-problem.png";
			var imageUrl_security = "<?php echo base_url()?>images/support/faq/security.png";
			$('.security').css('background-image', 'url(' + imageUrl_security + ')');
			$('.email-problems').css('background-image', 'url(' + imageUrl_email_pro + ')');
			$('.ibizcloud').css('background-image', 'url(' + imageUrl_ibiz + ')');
			$('.general').css('background-image', 'url(' + imageUrl + ')');
			$('.internet-connection').css('background-image', 'url(' + imageUrl_internet + ')');
			$('.email').css('background-image', 'url(' + imageUrl_email + ')');
			
			$(this).addClass('active-now');
			e.preventDefault();
		});
		
		
		$('.all-features a .security').click(function(e) {
			$('.all-features a .general').removeClass('active-now');
			$('.all-features a .ibizcloud').removeClass('active-now');
			$('.all-features a .internet-connection').removeClass('active-now');
			$('.all-features a .email').removeClass('active-now');
			$('.all-features a .email-problems').removeClass('active-now');
			/* Active bg */
			var imageUrl_ibiz = "<?php echo base_url()?>images/support/faq/ibizcloud.png";
			var imageUrl = "<?php echo base_url()?>images/support/faq/general.png";
			var imageUrl_internet = "<?php echo base_url()?>images/support/faq/internet-connection.png";
			var imageUrl_email = "<?php echo base_url()?>images/support/faq/email.png";
			var imageUrl_email_pro = "<?php echo base_url()?>images/support/faq/email-problem.png";
			var imageUrl_security = "<?php echo base_url()?>images/support/faq/hover-security.png";
			$('.security').css('background-image', 'url(' + imageUrl_security + ')');
			$('.email-problems').css('background-image', 'url(' + imageUrl_email_pro + ')');
			$('.ibizcloud').css('background-image', 'url(' + imageUrl_ibiz + ')');
			$('.general').css('background-image', 'url(' + imageUrl + ')');
			$('.internet-connection').css('background-image', 'url(' + imageUrl_internet + ')');
			$('.email').css('background-image', 'url(' + imageUrl_email + ')');
			
			$(this).addClass('active-now');
			e.preventDefault();
		});
		
	}); 
	
	
</script>
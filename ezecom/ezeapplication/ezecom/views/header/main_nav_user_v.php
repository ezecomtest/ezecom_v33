<!-- Main Navigation import CSS-->
<link href="<?php echo base_url()?>assets/css/css_v3/navigation_menu.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Main Navigation import JS-->
<script src="<?php echo base_url(); ?>assets/js/js_v3/jquery-latest.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/js_v3/nav_dropdown_menu.js"></script>

<div class="container-fluid" style="background-color:#d1d2d4">
	<div class="container">
		<nav id='cssmenu'>
			<div id="head-mobile"></div>
			<div class="button"></div>
			<ul>
				<?php if($this->session->userdata("language")==1){?>
					<li class="<?php if($this->uri->segment(1)=="" or $this->uri->segment(1)=="homepage"){echo "active";} ?>"><a href="<?php echo base_url()?>">Home</a></li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==3){?>
					<li class="<?php if($this->uri->segment(1)=="" or $this->uri->segment(1)=="homepage"){echo "active";} ?>"><a href="<?php echo base_url()?>">主页</a></li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==""){?>
					<li class="<?php if($this->uri->segment(1)=="" or $this->uri->segment(1)=="homepage"){echo "active";} ?>"><a href="<?php echo base_url()?>">Home</a></li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==1){?>
					<li ><a><span style="<?php if($this->uri->segment(1)=="our-company"){echo "color:#7961a9";} ?>">Our Company</span> <span class="glyphicon glyphicon-menu-down resize-angle-down"></span></a>
						<ul>
							<li><a href="<?php echo base_url()?>our-company/company-profile">Company Profile</a></li>
							<li><a href="<?php echo base_url()?>our-company/quality-management-system">Quality Management System</a></li>
							<li><a href="<?php echo base_url()?>our-company/childsafe-certification">ChildSafe Certification</a></li>
							<li><a href="<?php echo base_url()?>our-company/our-partnerships">Our Partnerships</a>
								<!--<ul>
									<li><a href="<?php echo base_url()?>our-company/our-partnerships">Good Will Partners</a></li>
									<li><a href="<?php echo base_url()?>our-company/our-partnership/ezecampus">EzeCampus</a></li>
									<li><a href="<?php echo base_url()?>our-company/our-partnership/student-discount">Student Discount</a></li>
								</ul>-->
							</li>
							<li><a href="<?php echo base_url()?>our-company/corporate-social-responsibility">Corporate Social Responsibility</a></li>
							<li><a href="<?php echo base_url()?>our-company/community">Community</a></li>
							<li><a href="<?php echo base_url()?>our-company/career-opportunities">Career Opportunities</a></li>
						</ul>
					</li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==3){?>
					<li ><a><span style="<?php if($this->uri->segment(1)=="our-company"){echo "color:#7961a9";} ?>">公司业务</span> <span class="glyphicon glyphicon-menu-down resize-angle-down"></span></a>
						<ul>
							<li><a href="<?php echo base_url()?>our-company/company-profile">公司简介</a></li>
							<li><a href="<?php echo base_url()?>our-company/quality-management-system">质量管理体系</a></li>
							<li><a href="<?php echo base_url()?>our-company/childsafe-certification">ChildSafe 计划</a></li>
							<li><a href="<?php echo base_url()?>our-company/our-partnerships">我们的伙伴</a>
								<!--<ul>
									<li><a href="<?php echo base_url()?>our-company/our-partnerships">Good Will Partners</a></li>
									<li><a href="<?php echo base_url()?>our-company/our-partnership/ezecampus">EzeCampus</a></li>
									<li><a href="<?php echo base_url()?>our-company/our-partnership/student-discount">Student Discount</a></li>
								</ul>-->
							</li>
							<li><a href="<?php echo base_url()?>our-company/corporate-social-responsibility">企业社会责任 </a></li>
							<li><a href="<?php echo base_url()?>our-company/community">社区</a></li>
							<li><a href="<?php echo base_url()?>our-company/career-opportunities">工作机会</a></li>
						</ul>
					</li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==""){?>
					<li ><a><span style="<?php if($this->uri->segment(1)=="our-company"){echo "color:#7961a9";} ?>">Our Company</span> <span class="glyphicon glyphicon-menu-down resize-angle-down"></span></a>
						<ul>
							<li><a href="<?php echo base_url()?>our-company/company-profile">Company Profile</a></li>
							<li><a href="<?php echo base_url()?>our-company/quality-management-system">Quality Management System</a></li>
							<li><a href="<?php echo base_url()?>our-company/childsafe-certification">ChildSafe Certification</a></li>
							<li><a href="<?php echo base_url()?>our-company/our-partnerships">Our Partnerships</a>
								<!--<ul>
									<li><a href="<?php echo base_url()?>our-company/our-partnerships">Good Will Partners</a></li>
									<li><a href="<?php echo base_url()?>our-company/our-partnership/ezecampus">EzeCampus</a></li>
									<li><a href="<?php echo base_url()?>our-company/our-partnership/student-discount">Student Discount</a></li>
								</ul>-->
							</li>
							<li><a href="<?php echo base_url()?>our-company/corporate-social-responsibility">Corporate Social Responsibility</a></li>
							<li><a href="<?php echo base_url()?>our-company/community">Community</a></li>
							<li><a href="<?php echo base_url()?>our-company/career-opportunities">Career Opportunities</a></li>
						</ul>
					</li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==1){?>
					<li><a><span style="<?php if($this->uri->segment(1)=="our-services"){echo "color:#7961a9";} ?>">Our Services</span> <span class="glyphicon glyphicon-menu-down resize-angle-down"></span></a>
					   <ul>
						  <li><a>Internet Access <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href="<?php echo base_url()?>our-services/internet-access/dedicated-internet-access">Dedicated Internet</a></li>
								<li><a href="<?php echo base_url()?>our-services/internet-access/EzeBiz">EzeBiz</a></li>
								<li><a href="<?php echo base_url()?>our-services/internet-access/EzeSurf">EzeSurf</a></li>
							 </ul>
						  </li>
						  <li><a>Enterprise Network <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href="<?php echo base_url()?>our-services/enterprise-network/international-private-leased-circuit">IPLC</a></li>
								<li><a href="<?php echo base_url()?>our-services/enterprise-network/domestic-private-leased-circuit">DPLC</a></li>
								<li><a href="<?php echo base_url()?>our-services/enterprise-network/mpls">MPLS</a></li>
								<li><a href="<?php echo base_url()?>our-services/enterprise-network/vpls">VPLS</a></li>
							 </ul>
						  </li>
						  <li><a>Cloud Services <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href="<?php echo base_url()?>our-services/cloud-service/microsoft-cloud-service">Microsoft Cloud Service</a></li>
								<!--<li><a href="<?php echo base_url()?>our-services/cloud-service/amazon-web-service">Amazon Web Service</a></li>-->
							 </ul>
						  </li>
						  <li><a>Data Centre & Hosting <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href='<?php echo base_url()?>our-services/hosting/colocation'>Co-location</a></li>
								<!--<li><a href='<?php echo base_url()?>our-services/hosting/disaster-recovery-center'>DRC</a></li>-->
								<li><a href='<?php echo base_url()?>our-services/hosting/cpanel-web-hosting'>Web Hosting</a></li>
								<!--<li><a href='<?php echo base_url()?>our-services/hosting/virtual-pbx'>VPBX</a></li>-->
							 </ul>
						  </li>
						  <li><a>Cyber Security <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href='<?php echo base_url()?>our-services/cyber-security/ddos'>DDoS Mitigation Service</a></li>
								<!--<li><a href='<?php echo base_url()?>our-services/cyber-security/web-application-firewall'>Web Application Firewall</a></li>-->
								<!--<li><a href='<?php echo base_url()?>our-services/cyber-security/managed-network-security'>Managed Network Security</a></li>-->
							 </ul>
						  </li>
						  <li><a>Value Added Services <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
								  <ul>
									<li><a href='<?php echo base_url()?>our-services/value-added-service/live-stream-service'>Live Stream Service</a></li>
								  </ul>
							 <!--<ul>
								<li><a href='<?php echo base_url()?>our-services/value-added-service/voice-over-ip'>VoIP</a></li>
								<li><a href='<?php echo base_url()?>our-services/value-added-service/EzeTV'>EzeTV</a></li>
							 </ul>-->
						  </li>
					   </ul>
					</li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==3){?>
					<li><a><span style="<?php if($this->uri->segment(1)=="our-services"){echo "color:#7961a9";} ?>">产品及服务</span> <span class="glyphicon glyphicon-menu-down resize-angle-down"></span></a>
					   <ul>
						  <li><a>互联网 <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href="<?php echo base_url()?>our-services/internet-access/dedicated-internet-access">Dedicated Internet</a></li>
								<li><a href="<?php echo base_url()?>our-services/internet-access/EzeBiz">EzeBiz</a></li>
								<li><a href="<?php echo base_url()?>our-services/internet-access/EzeSurf">EzeSurf</a></li>
							 </ul>
						  </li>
						  <li><a>企业网络 <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href="<?php echo base_url()?>our-services/enterprise-network/international-private-leased-circuit">IPLC</a></li>
								<li><a href="<?php echo base_url()?>our-services/enterprise-network/domestic-private-leased-circuit">DPLC</a></li>
								<li><a href="<?php echo base_url()?>our-services/enterprise-network/mpls">MPLS</a></li>
								<li><a href="<?php echo base_url()?>our-services/enterprise-network/vpls">VPLS</a></li>
							 </ul>
						  </li>
						  <li><a>云服务 <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href="<?php echo base_url()?>our-services/cloud-service/microsoft-cloud-service">Microsoft Cloud Service</a></li>
								<!--<li><a href="<?php echo base_url()?>our-services/cloud-service/amazon-web-service">Amazon Web Service</a></li>-->
							 </ul>
						  </li>
						  <li><a>数据中心和托管 <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href='<?php echo base_url()?>our-services/hosting/colocation'>Co-location</a></li>
								<!--<li><a href='<?php echo base_url()?>our-services/hosting/disaster-recovery-center'>DRC</a></li>-->
								<li><a href='<?php echo base_url()?>our-services/hosting/cpanel-web-hosting'>Web Hosting</a></li>
								<!--<li><a href='<?php echo base_url()?>our-services/hosting/virtual-pbx'>VPBX</a></li>-->
							 </ul>
						  </li>
						  <li><a>网络安全 <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href='<?php echo base_url()?>our-services/cyber-security/ddos'>DDoS Mitigation Service</a></li>
								<!--<li><a href='<?php echo base_url()?>our-services/cyber-security/web-application-firewall'>Web Application Firewall</a></li>-->
								<!--<li><a href='<?php echo base_url()?>our-services/cyber-security/managed-network-security'>Managed Network Security</a></li>-->
							 </ul>
						  </li>
						  <li><a>增值服务 <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
								  <ul>
									<li><a href='<?php echo base_url()?>our-services/value-added-service/live-stream-service'>Live Stream Service</a></li>
								  </ul>
							 <!--<ul>
								<li><a href='<?php echo base_url()?>our-services/value-added-service/voice-over-ip'>VoIP</a></li>
								<li><a href='<?php echo base_url()?>our-services/value-added-service/EzeTV'>EzeTV</a></li>
							 </ul>-->
						  </li>
					   </ul>
					</li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==""){?>
					<li><a><span style="<?php if($this->uri->segment(1)=="our-services"){echo "color:#7961a9";} ?>">Our Services</span> <span class="glyphicon glyphicon-menu-down resize-angle-down"></span></a>
					   <ul>
						  <li><a>Internet Access <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href="<?php echo base_url()?>our-services/internet-access/dedicated-internet-access">Dedicated Internet</a></li>
								<li><a href="<?php echo base_url()?>our-services/internet-access/EzeBiz">EzeBiz</a></li>
								<li><a href="<?php echo base_url()?>our-services/internet-access/EzeSurf">EzeSurf</a></li>
							 </ul>
						  </li>
						  <li><a>Enterprise Network <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href="<?php echo base_url()?>our-services/enterprise-network/international-private-leased-circuit">IPLC</a></li>
								<li><a href="<?php echo base_url()?>our-services/enterprise-network/domestic-private-leased-circuit">DPLC</a></li>
								<li><a href="<?php echo base_url()?>our-services/enterprise-network/mpls">MPLS</a></li>
								<li><a href="<?php echo base_url()?>our-services/enterprise-network/vpls">VPLS</a></li>
							 </ul>
						  </li>
						  <li><a>Cloud Services <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href="<?php echo base_url()?>our-services/cloud-service/microsoft-cloud-service">Microsoft Cloud Service</a></li>
								<!--<li><a href="<?php echo base_url()?>our-services/cloud-service/amazon-web-service">Amazon Web Service</a></li>-->
							 </ul>
						  </li>
						  <li><a>Data Centre & Hosting <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href='<?php echo base_url()?>our-services/hosting/colocation'>Co-location</a></li>
								<!--<li><a href='<?php echo base_url()?>our-services/hosting/disaster-recovery-center'>DRC</a></li>-->
								<li><a href='<?php echo base_url()?>our-services/hosting/cpanel-web-hosting'>Web Hosting</a></li>
								<!--<li><a href='<?php echo base_url()?>our-services/hosting/virtual-pbx'>VPBX</a></li>-->
							 </ul>
						  </li>
						  <li><a>Cyber Security <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href='<?php echo base_url()?>our-services/cyber-security/ddos'>DDoS Mitigation Service</a></li>
								<!--<li><a href='<?php echo base_url()?>our-services/cyber-security/web-application-firewall'>Web Application Firewall</a></li>-->
								<!--<li><a href='<?php echo base_url()?>our-services/cyber-security/managed-network-security'>Managed Network Security</a></li>-->
							 </ul>
						  </li>
						  <li><a>Value Added Services <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
								  <ul>
									<li><a href='<?php echo base_url()?>our-services/value-added-service/live-stream-service'>Live Stream Service</a></li>
								  </ul>
							 <!--<ul>
								<li><a href='<?php echo base_url()?>our-services/value-added-service/voice-over-ip'>VoIP</a></li>
								<li><a href='<?php echo base_url()?>our-services/value-added-service/EzeTV'>EzeTV</a></li>
							 </ul>-->
						  </li>
					   </ul>
					</li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==1){?>
					<li><a><span style="<?php if($this->uri->segment(1)=="support"){echo "color:#7961a9";} ?>">Support</span> <span class="glyphicon glyphicon-menu-down resize-angle-down"></span></a>
						<ul>
							<li><a href='<?php echo base_url()?>support/faq'>FAQ's</a></li>
							<li><a href='<?php echo base_url()?>support/customer-service'>Customer Service</a></li>
							<li><a href='<?php echo base_url()?>support/payment'>Payment Options</a></li>
							<li><a href='<?php echo base_url()?>support/setup-email'>EzeMail Setup</a></li>
							<li><a target="_blank" href='http://mail.ezecom.com.kh/'>EzeMail</a></li>
							<li><a target="_blank" href='http://bandwidth.ezecom.com.kh/'>Speed Test</a></li>
							<li><a target="_blank" href='https://csm.ezecom.com.kh/uam/login.cgi?uri=/uam/customer/'>User Account Management</a></li>
						</ul>
					</li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==3){?>
					<li><a><span style="<?php if($this->uri->segment(1)=="support"){echo "color:#7961a9";} ?>">支持</span> <span class="glyphicon glyphicon-menu-down resize-angle-down"></span></a>
						<ul>
							<li><a href='<?php echo base_url()?>support/faq'>常问问题</a></li>
							<li><a href='<?php echo base_url()?>support/customer-service'>客户服务</a></li>
							<li><a href='<?php echo base_url()?>support/payment'>付款选项</a></li>
							<li><a href='<?php echo base_url()?>support/setup-email'>EzeMail设置</a></li>
							<li><a target="_blank" href='http://mail.ezecom.com.kh/'>EzeMail</a></li>
							<li><a target="_blank" href='http://bandwidth.ezecom.com.kh/'>速度测试</a></li>
							<li><a target="_blank" href='https://csm.ezecom.com.kh/uam/login.cgi?uri=/uam/customer/'>用户账户管理</a></li>
						</ul>
					</li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==""){?>
					<li><a><span style="<?php if($this->uri->segment(1)=="support"){echo "color:#7961a9";} ?>">Support</span> <span class="glyphicon glyphicon-menu-down resize-angle-down"></span></a>
						<ul>
							<li><a href='<?php echo base_url()?>support/faq'>FAQ's</a></li>
							<li><a href='<?php echo base_url()?>support/customer-service'>Customer Service</a></li>
							<li><a href='<?php echo base_url()?>support/payment'>Payment Options</a></li>
							<li><a href='<?php echo base_url()?>support/setup-email'>EzeMail Setup</a></li>
							<li><a target="_blank" href='http://mail.ezecom.com.kh/'>EzeMail</a></li>
							<li><a target="_blank" href='http://bandwidth.ezecom.com.kh/'>Speed Test</a></li>
							<li><a target="_blank" href='https://csm.ezecom.com.kh/uam/login.cgi?uri=/uam/customer/'>User Account Management</a></li>
						</ul>
					</li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==1){?>
					<li><a><span style="<?php if($this->uri->segment(1)=="media-center"){echo "color:#7961a9";} ?>">Media Centre</span> <span class="glyphicon glyphicon-menu-down resize-angle-down"></span></a>
						<ul>
							<li><a href='<?php echo base_url()?>media-center/news-events'>News and Events</a></li>
							<li><a href='<?php echo base_url()?>media-center/live-cambodia-radio'>Radio Live Stream</a></li>
							<li><a href='<?php echo base_url()?>media-center/live-traffic-camera'>Live Traffic Camera</a></li>
							<!--<li><a href='<?php echo base_url()?>media-center/promotion'>Promotion</a></li>-->
						</ul>
					</li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==3){?>
					<li><a><span style="<?php if($this->uri->segment(1)=="media-center"){echo "color:#7961a9";} ?>">媒体中心</span> <span class="glyphicon glyphicon-menu-down resize-angle-down"></span></a>
						<ul>
							<li><a href='<?php echo base_url()?>media-center/news-events'>新闻与事件</a></li>
							<li><a href='<?php echo base_url()?>media-center/live-cambodia-radio'>电台直播</a></li>
							<li><a href='<?php echo base_url()?>media-center/live-traffic-camera'>实时交通摄像头</a></li>
							<!--<li><a href='<?php echo base_url()?>media-center/promotion'>Promotion</a></li>-->
						</ul>
					</li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==""){?>
					<li><a><span style="<?php if($this->uri->segment(1)=="media-center"){echo "color:#7961a9";} ?>">Media Centre</span> <span class="glyphicon glyphicon-menu-down resize-angle-down"></span></a>
						<ul>
							<li><a href='<?php echo base_url()?>media-center/news-events'>News and Events</a></li>
							<li><a href='<?php echo base_url()?>media-center/live-cambodia-radio'>Radio Live Stream</a></li>
							<li><a href='<?php echo base_url()?>media-center/live-traffic-camera'>Live Traffic Camera</a></li>
							<!--<li><a href='<?php echo base_url()?>media-center/promotion'>Promotion</a></li>-->
						</ul>
					</li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==1){?>
					<li class="<?php if($this->uri->segment(1)=="contact-us"){echo "active";} ?>" ><a href='<?php echo base_url()?>contact-us'>Contact Us</a></li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==3){?>
					<li class="<?php if($this->uri->segment(1)=="contact-us"){echo "active";} ?>" ><a href='<?php echo base_url()?>contact-us'>联系我们</a></li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==""){?>
					<li class="<?php if($this->uri->segment(1)=="contact-us"){echo "active";} ?>" ><a href='<?php echo base_url()?>contact-us'>Contact Us</a></li>
				<?php } ?>
			</ul>
			
			<a href='#' class="collection"><img class="img-responsive burger-menu" src="<?php echo base_url()?>assets/images/menu_v3_icon/burger-menu.svg"/></a>
			
	</nav>
	</div>
</div>

<!-- Menu Fix -->
<div id="menu-fix">
	<div class="container middle-menu">
		<nav id='cssmenu'>
			<div id="head-mobile"></div>
			<div class="button"></div>
			<ul>
				<?php if($this->session->userdata("language")==1){?>
					<li class="<?php if($this->uri->segment(1)=="" or $this->uri->segment(1)=="homepage"){echo "active";} ?>"><a href="<?php echo base_url()?>">Home</a></li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==3){?>
					<li class="<?php if($this->uri->segment(1)=="" or $this->uri->segment(1)=="homepage"){echo "active";} ?>"><a href="<?php echo base_url()?>">主页</a></li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==""){?>
					<li class="<?php if($this->uri->segment(1)=="" or $this->uri->segment(1)=="homepage"){echo "active";} ?>"><a href="<?php echo base_url()?>">Home</a></li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==1){?>
					<li><a><span style="<?php if($this->uri->segment(1)=="our-company"){echo "color:#7961a9";} ?>">Our Company</span> <span class="glyphicon glyphicon-menu-down resize-angle-down"></span></a>
						<ul>
							<li><a href="<?php echo base_url()?>our-company/company-profile">Company Profile</a></li>
							<li><a href="<?php echo base_url()?>our-company/quality-management-system">Quality Management System</a></li>
							<li><a href="<?php echo base_url()?>our-company/childsafe-certification">ChildSafe Certification</a></li>
							<li><a href="<?php echo base_url()?>our-company/our-partnerships">Our Partnerships</a>
								<!--<ul>
									<li><a href="<?php echo base_url()?>our-company/our-partnerships">Good Will Partners</a></li>
									<li><a href="<?php echo base_url()?>our-company/our-partnership/ezecampus">EzeCampus</a></li>
									<li><a href="<?php echo base_url()?>our-company/our-partnership/student-discount">Student Discount</a></li>
								</ul>-->
							</li>
							<li><a href="<?php echo base_url()?>our-company/corporate-social-responsibility">Corporate Social Responsibility</a></li>
							<li><a href="<?php echo base_url()?>our-company/community">Community</a></li>
							<li><a href="<?php echo base_url()?>our-company/career-opportunities">Career Opportunities</a></li>
						</ul>
					</li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==3){?>
					<li><a><span style="<?php if($this->uri->segment(1)=="our-company"){echo "color:#7961a9";} ?>">公司业务</span> <span class="glyphicon glyphicon-menu-down resize-angle-down"></span></a>
						<ul>
							<li><a href="<?php echo base_url()?>our-company/company-profile">公司简介</a></li>
							<li><a href="<?php echo base_url()?>our-company/quality-management-system">质量管理体系</a></li>
							<li><a href="<?php echo base_url()?>our-company/childsafe-certification">ChildSafe 计划</a></li>
							<li><a href="<?php echo base_url()?>our-company/our-partnerships">我们的伙伴</a>
								<!--<ul>
									<li><a href="<?php echo base_url()?>our-company/our-partnerships">Good Will Partners</a></li>
									<li><a href="<?php echo base_url()?>our-company/our-partnership/ezecampus">EzeCampus</a></li>
									<li><a href="<?php echo base_url()?>our-company/our-partnership/student-discount">Student Discount</a></li>
								</ul>-->
							</li>
							<li><a href="<?php echo base_url()?>our-company/corporate-social-responsibility">企业社会责任</a></li>
							<li><a href="<?php echo base_url()?>our-company/community">社区</a></li>
							<li><a href="<?php echo base_url()?>our-company/career-opportunities">工作机会</a></li>
						</ul>
					</li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==""){?>
					<li><a><span style="<?php if($this->uri->segment(1)=="our-company"){echo "color:#7961a9";} ?>">Our Company</span> <span class="glyphicon glyphicon-menu-down resize-angle-down"></span></a>
						<ul>
							<li><a href="<?php echo base_url()?>our-company/company-profile">Company Profile</a></li>
							<li><a href="<?php echo base_url()?>our-company/quality-management-system">Quality Management System</a></li>
							<li><a href="<?php echo base_url()?>our-company/childsafe-certification">ChildSafe Certification</a></li>
							<li><a href="<?php echo base_url()?>our-company/our-partnerships">Our Partnerships</a>
								<!--<ul>
									<li><a href="<?php echo base_url()?>our-company/our-partnerships">Good Will Partners</a></li>
									<li><a href="<?php echo base_url()?>our-company/our-partnership/ezecampus">EzeCampus</a></li>
									<li><a href="<?php echo base_url()?>our-company/our-partnership/student-discount">Student Discount</a></li>
								</ul>-->
							</li>
							<li><a href="<?php echo base_url()?>our-company/corporate-social-responsibility">Corporate Social Responsibility</a></li>
							<li><a href="<?php echo base_url()?>our-company/community">Community</a></li>
							<li><a href="<?php echo base_url()?>our-company/career-opportunities">Career Opportunities</a></li>
						</ul>
					</li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==1){?>
					<li><a><span style="<?php if($this->uri->segment(1)=="our-services"){echo "color:#7961a9";} ?>">Our Services</span> <span class="glyphicon glyphicon-menu-down resize-angle-down"></span></a>
					   <ul>
						  <li><a>Internet Access <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href="<?php echo base_url()?>our-services/internet-access/dedicated-internet-access">Dedicated Internet</a></li>
								<li><a href="<?php echo base_url()?>our-services/internet-access/EzeBiz">EzeBiz</a></li>
								<li><a href="<?php echo base_url()?>our-services/internet-access/EzeSurf">EzeSurf</a></li>
							 </ul>
						  </li>
						  <li><a>Enterprise Network <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href="<?php echo base_url()?>our-services/enterprise-network/international-private-leased-circuit">IPLC</a></li>
								<li><a href="<?php echo base_url()?>our-services/enterprise-network/domestic-private-leased-circuit">DPLC</a></li>
								<li><a href="<?php echo base_url()?>our-services/enterprise-network/mpls">MPLS</a></li>
								<li><a href="<?php echo base_url()?>our-services/enterprise-network/vpls">VPLS</a></li>
							 </ul>
						  </li>
						  <li><a>Cloud Services <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href="<?php echo base_url()?>our-services/cloud-service/microsoft-cloud-service">Microsoft Cloud Service</a></li>
								<!--<li><a href="<?php echo base_url()?>our-services/cloud-service/amazon-web-service">Amazon Web Service</a></li>-->
							 </ul>
						  </li>
						  <li><a>Data Centre & Hosting <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href='<?php echo base_url()?>our-services/hosting/colocation'>Co-location</a></li>
								<!--<li><a href='<?php echo base_url()?>our-services/hosting/disaster-recovery-center'>DRC</a></li>-->
								<li><a href='<?php echo base_url()?>our-services/hosting/cpanel-web-hosting'>Web Hosting</a></li>
								<!--<li><a href='<?php echo base_url()?>our-services/hosting/virtual-pbx'>VPBX</a></li>-->
							 </ul>
						  </li>
						  <li><a>Cyber Security <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href='<?php echo base_url()?>our-services/cyber-security/ddos'>DDoS Mitigation Service</a></li>
								<!--<li><a href='<?php echo base_url()?>our-services/cyber-security/web-application-firewall'>Web Application Firewall</a></li>-->
								<!--<li><a href='<?php echo base_url()?>our-services/cyber-security/managed-network-security'>Managed Network Security</a></li>-->
							 </ul>
						  </li>
						  <li><a>Value Added Services <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
								  <ul>
									<li><a href='<?php echo base_url()?>our-services/value-added-service/live-stream-service'>Live Stream Service</a></li>
								  </ul>
							 <!--<ul>
								<li><a href='<?php echo base_url()?>our-services/value-added-service/voice-over-ip'>VoIP</a></li>
								<li><a href='<?php echo base_url()?>our-services/value-added-service/EzeTV'>EzeTV</a></li>
							 </ul>-->
						  </li>
					   </ul>
					</li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==3){?>
					<li><a><span style="<?php if($this->uri->segment(1)=="our-services"){echo "color:#7961a9";} ?>">产品及服务</span> <span class="glyphicon glyphicon-menu-down resize-angle-down"></span></a>
					   <ul>
						  <li><a>互联网 <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href="<?php echo base_url()?>our-services/internet-access/dedicated-internet-access">Dedicated Internet</a></li>
								<li><a href="<?php echo base_url()?>our-services/internet-access/EzeBiz">EzeBiz</a></li>
								<li><a href="<?php echo base_url()?>our-services/internet-access/EzeSurf">EzeSurf</a></li>
							 </ul>
						  </li>
						  <li><a>企业网络 <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href="<?php echo base_url()?>our-services/enterprise-network/international-private-leased-circuit">IPLC</a></li>
								<li><a href="<?php echo base_url()?>our-services/enterprise-network/domestic-private-leased-circuit">DPLC</a></li>
								<li><a href="<?php echo base_url()?>our-services/enterprise-network/mpls">MPLS</a></li>
								<li><a href="<?php echo base_url()?>our-services/enterprise-network/vpls">VPLS</a></li>
							 </ul>
						  </li>
						  <li><a>云服务 <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href="<?php echo base_url()?>our-services/cloud-service/microsoft-cloud-service">Microsoft Cloud Service</a></li>
								<!--<li><a href="<?php echo base_url()?>our-services/cloud-service/amazon-web-service">Amazon Web Service</a></li>-->
							 </ul>
						  </li>
						  <li><a>数据中心和托管 <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href='<?php echo base_url()?>our-services/hosting/colocation'>Co-location</a></li>
								<!--<li><a href='<?php echo base_url()?>our-services/hosting/disaster-recovery-center'>DRC</a></li>-->
								<li><a href='<?php echo base_url()?>our-services/hosting/cpanel-web-hosting'>Web Hosting</a></li>
								<!--<li><a href='<?php echo base_url()?>our-services/hosting/virtual-pbx'>VPBX</a></li>-->
							 </ul>
						  </li>
						  <li><a>网络安全 <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href='<?php echo base_url()?>our-services/cyber-security/ddos'>DDoS Mitigation Service</a></li>
								<!--<li><a href='<?php echo base_url()?>our-services/cyber-security/web-application-firewall'>Web Application Firewall</a></li>-->
								<!--<li><a href='<?php echo base_url()?>our-services/cyber-security/managed-network-security'>Managed Network Security</a></li>-->
							 </ul>
						  </li>
						  <li><a>增值服务 <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
								  <ul>
									<li><a href='<?php echo base_url()?>our-services/value-added-service/live-stream-service'>Live Stream Service</a></li>
								  </ul>
							 <!--<ul>
								<li><a href='<?php echo base_url()?>our-services/value-added-service/voice-over-ip'>VoIP</a></li>
								<li><a href='<?php echo base_url()?>our-services/value-added-service/EzeTV'>EzeTV</a></li>
							 </ul>-->
						  </li>
					   </ul>
					</li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==""){?>
					<li><a><span style="<?php if($this->uri->segment(1)=="our-services"){echo "color:#7961a9";} ?>">Our Services</span> <span class="glyphicon glyphicon-menu-down resize-angle-down"></span></a>
					   <ul>
						  <li><a>Internet Access <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href="<?php echo base_url()?>our-services/internet-access/dedicated-internet-access">Dedicated Internet</a></li>
								<li><a href="<?php echo base_url()?>our-services/internet-access/EzeBiz">EzeBiz</a></li>
								<li><a href="<?php echo base_url()?>our-services/internet-access/EzeSurf">EzeSurf</a></li>
							 </ul>
						  </li>
						  <li><a>Enterprise Network <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href="<?php echo base_url()?>our-services/enterprise-network/international-private-leased-circuit">IPLC</a></li>
								<li><a href="<?php echo base_url()?>our-services/enterprise-network/domestic-private-leased-circuit">DPLC</a></li>
								<li><a href="<?php echo base_url()?>our-services/enterprise-network/mpls">MPLS</a></li>
								<li><a href="<?php echo base_url()?>our-services/enterprise-network/vpls">VPLS</a></li>
							 </ul>
						  </li>
						  <li><a>Cloud Services <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href="<?php echo base_url()?>our-services/cloud-service/microsoft-cloud-service">Microsoft Cloud Service</a></li>
								<!--<li><a href="<?php echo base_url()?>our-services/cloud-service/amazon-web-service">Amazon Web Service</a></li>-->
							 </ul>
						  </li>
						  <li><a>Data Centre & Hosting <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href='<?php echo base_url()?>our-services/hosting/colocation'>Co-location</a></li>
								<!--<li><a href='<?php echo base_url()?>our-services/hosting/disaster-recovery-center'>DRC</a></li>-->
								<li><a href='<?php echo base_url()?>our-services/hosting/cpanel-web-hosting'>Web Hosting</a></li>
								<!--<li><a href='<?php echo base_url()?>our-services/hosting/virtual-pbx'>VPBX</a></li>-->
							 </ul>
						  </li>
						  <li><a>Cyber Security <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
							 <ul>
								<li><a href='<?php echo base_url()?>our-services/cyber-security/ddos'>DDoS Mitigation Service</a></li>
								<!--<li><a href='<?php echo base_url()?>our-services/cyber-security/web-application-firewall'>Web Application Firewall</a></li>-->
								<!--<li><a href='<?php echo base_url()?>our-services/cyber-security/managed-network-security'>Managed Network Security</a></li>-->
							 </ul>
						  </li>
						  <li><a>Value Added Services <span class="glyphicon glyphicon-menu-right resize-font"></span></a>
								  <ul>
									<li><a href='<?php echo base_url()?>our-services/value-added-service/live-stream-service'>Live Stream Service</a></li>
								  </ul>
							 <!--<ul>
								<li><a href='<?php echo base_url()?>our-services/value-added-service/voice-over-ip'>VoIP</a></li>
								<li><a href='<?php echo base_url()?>our-services/value-added-service/EzeTV'>EzeTV</a></li>
							 </ul>-->
						  </li>
					   </ul>
					</li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==1){?>
					<li><a><span style="<?php if($this->uri->segment(1)=="support"){echo "color:#7961a9";} ?>">Support</span> <span class="glyphicon glyphicon-menu-down resize-angle-down"></span></a>
						<ul>
							<li><a href='<?php echo base_url()?>support/faq'>FAQ's</a></li>
							<li><a href='<?php echo base_url()?>support/customer-service'>Customer Service</a></li>
							<li><a href='<?php echo base_url()?>support/payment'>Payment Options</a></li>
							<li><a href='<?php echo base_url()?>support/setup-email'>EzeMail Setup</a></li>
							<li><a target="_blank" href='http://mail.ezecom.com.kh/'>EzeMail</a></li>
							<li><a target="_blank" href='http://bandwidth.ezecom.com.kh/'>Speed Test</a></li>
							<li><a target="_blank" href='https://csm.ezecom.com.kh/uam/login.cgi?uri=/uam/customer/'>User Account Management</a></li>
						</ul>
					</li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==3){?>
					<li><a><span style="<?php if($this->uri->segment(1)=="support"){echo "color:#7961a9";} ?>">支持</span> <span class="glyphicon glyphicon-menu-down resize-angle-down"></span></a>
						<ul>
							<li><a href='<?php echo base_url()?>support/faq'>常问问题</a></li>
							<li><a href='<?php echo base_url()?>support/customer-service'>客户服务</a></li>
							<li><a href='<?php echo base_url()?>support/payment'>付款选项</a></li>
							<li><a href='<?php echo base_url()?>support/setup-email'>EzeMail设置</a></li>
							<li><a target="_blank" href='http://mail.ezecom.com.kh/'>EzeMail</a></li>
							<li><a target="_blank" href='http://bandwidth.ezecom.com.kh/'>速度测试</a></li>
							<li><a target="_blank" href='https://csm.ezecom.com.kh/uam/login.cgi?uri=/uam/customer/'>用户账户管理</a></li>
						</ul>
					</li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==""){?>
					<li><a><span style="<?php if($this->uri->segment(1)=="support"){echo "color:#7961a9";} ?>">Support</span> <span class="glyphicon glyphicon-menu-down resize-angle-down"></span></a>
						<ul>
							<li><a href='<?php echo base_url()?>support/faq'>FAQ's</a></li>
							<li><a href='<?php echo base_url()?>support/customer-service'>Customer Service</a></li>
							<li><a href='<?php echo base_url()?>support/payment'>Payment Options</a></li>
							<li><a href='<?php echo base_url()?>support/setup-email'>EzeMail Setup</a></li>
							<li><a target="_blank" href='http://mail.ezecom.com.kh/'>EzeMail</a></li>
							<li><a target="_blank" href='http://bandwidth.ezecom.com.kh/'>Speed Test</a></li>
							<li><a target="_blank" href='https://csm.ezecom.com.kh/uam/login.cgi?uri=/uam/customer/'>User Account Management</a></li>
						</ul>
					</li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==1){?>
					<li><a><span style="<?php if($this->uri->segment(1)=="media-center"){echo "color:#7961a9";} ?>">Media Centre</span> <span class="glyphicon glyphicon-menu-down resize-angle-down"></span></a>
						<ul>
							<li><a href='<?php echo base_url()?>media-center/news-events'>News and Events</a></li>
							<li><a href='<?php echo base_url()?>media-center/live-cambodia-radio'>Radio Live Stream</a></li>
							<li><a href='<?php echo base_url()?>media-center/live-traffic-camera'>Live Traffic Camera</a></li>
							<!--<li><a href='<?php echo base_url()?>media-center/promotion'>Promotion</a></li>-->
						</ul>
					</li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==3){?>
					<li><a><span style="<?php if($this->uri->segment(1)=="media-center"){echo "color:#7961a9";} ?>">媒体中心</span> <span class="glyphicon glyphicon-menu-down resize-angle-down"></span></a>
						<ul>
							<li><a href='<?php echo base_url()?>media-center/news-events'>新闻与事件</a></li>
							<li><a href='<?php echo base_url()?>media-center/live-cambodia-radio'>电台直播</a></li>
							<li><a href='<?php echo base_url()?>media-center/live-traffic-camera'>实时交通摄像头</a></li>
							<!--<li><a href='<?php echo base_url()?>media-center/promotion'>Promotion</a></li>-->
						</ul>
					</li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==""){?>
					<li><a><span style="<?php if($this->uri->segment(1)=="media-center"){echo "color:#7961a9";} ?>">Media Centre</span> <span class="glyphicon glyphicon-menu-down resize-angle-down"></span></a>
						<ul>
							<li><a href='<?php echo base_url()?>media-center/news-events'>News and Events</a></li>
							<li><a href='<?php echo base_url()?>media-center/live-cambodia-radio'>Radio Live Stream</a></li>
							<li><a href='<?php echo base_url()?>media-center/live-traffic-camera'>Live Traffic Camera</a></li>
							<!--<li><a href='<?php echo base_url()?>media-center/promotion'>Promotion</a></li>-->
						</ul>
					</li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==1){?>
					<li class="<?php if($this->uri->segment(1)=="contact-us"){echo "active";} ?>" ><a href='<?php echo base_url()?>contact-us'>Contact Us</a></li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==3){?>
					<li class="<?php if($this->uri->segment(1)=="contact-us"){echo "active";} ?>" ><a href='<?php echo base_url()?>contact-us'>联系我们 </a></li>
				<?php } ?>
				
				<?php if($this->session->userdata("language")==""){?>
					<li class="<?php if($this->uri->segment(1)=="contact-us"){echo "active";} ?>" ><a href='<?php echo base_url()?>contact-us'>Contact Us</a></li>
				<?php } ?>
				
			</ul>
			<a href='#' class="collection"><img class="img-responsive burger-menu" src="<?php echo base_url()?>assets/images/menu_v3_icon/burger-menu.svg"/></a>
	</nav>
	</div>
</div>


<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div id="menu-collection"><!-- menu collection -->
					<div class="container">
						<div class="row">
							<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<?php if($this->session->userdata("language")==1){?>
								<h4>Our Company</h4>
								<div class="our-company-block">
									<ul>
										<li><a href="<?php echo base_url();?>our-company/company-profile">Company Profile</a></li>
										<li><a href="<?php echo base_url();?>our-company/quality-management-system">Quality Management System</a></li>
										<li><a href="<?php echo base_url();?>our-company/childsafe-certification">ChildSafe Certification</a></li>
										<li><a href="<?php echo base_url()?>our-company/our-partnerships">Our Partnerships</a></li>
										<!--<li>
											<strong>Our Partnerships</strong>
											<ul class="partnerships">
												<li><a href="<?php echo base_url()?>our-company/our-partnerships">Good Will Partners</a></li>
												<li><a href="<?php echo base_url()?>our-company/our-partnership/ezecampus">EzeCampus</a></li>
												<li><a href="<?php echo base_url()?>our-company/our-partnership/student-discount">Student Discount</a></li>
											</ul>
										</li>-->
										<li><a href="<?php echo base_url();?>our-company/corporate-social-responsibility">Corporate Social Responsibility</a></li>
										<li><a href="<?php echo base_url();?>our-company/community">Community</a></li>
										<li><a href="<?php echo base_url();?>our-company/career-opportunities">Career Opportunities</a></li>
										
									</ul>
								</div>
							<?php } ?>
							
							<?php if($this->session->userdata("language")==3){?>
								<h4>公司业务</h4>
								<div class="our-company-block">
									<ul>
										<li><a href="<?php echo base_url();?>our-company/company-profile">公司简介</a></li>
										<li><a href="<?php echo base_url();?>our-company/quality-management-system">质量管理体系</a></li>
										<li><a href="<?php echo base_url();?>our-company/childsafe-certification">ChildSafe 计划</a></li>
										<li><a href="<?php echo base_url()?>our-company/our-partnerships">我们的伙伴</a></li>
										<!--<li>
											<strong>Our Partnerships</strong>
											<ul class="partnerships">
												<li><a href="<?php echo base_url()?>our-company/our-partnerships">Good Will Partners</a></li>
												<li><a href="<?php echo base_url()?>our-company/our-partnership/ezecampus">EzeCampus</a></li>
												<li><a href="<?php echo base_url()?>our-company/our-partnership/student-discount">Student Discount</a></li>
											</ul>
										</li>-->
										<li><a href="<?php echo base_url();?>our-company/corporate-social-responsibility">企业社会责任</a></li>
										<li><a href="<?php echo base_url();?>our-company/community">社区</a></li>
										<li><a href="<?php echo base_url();?>our-company/career-opportunities">工作机会</a></li>
										
									</ul>
								</div>
							<?php } ?>
							
							<?php if($this->session->userdata("language")==""){?>
								<h4>Our Company</h4>
								<div class="our-company-block">
									<ul>
										<li><a href="<?php echo base_url();?>our-company/company-profile">Company Profile</a></li>
										<li><a href="<?php echo base_url();?>our-company/quality-management-system">Quality Management System</a></li>
										<li><a href="<?php echo base_url();?>our-company/childsafe-certification">ChildSafe Certification</a></li>
										<li><a href="<?php echo base_url()?>our-company/our-partnerships">Our Partnerships</a></li>
										<!--<li>
											<strong>Our Partnerships</strong>
											<ul class="partnerships">
												<li><a href="<?php echo base_url()?>our-company/our-partnerships">Good Will Partners</a></li>
												<li><a href="<?php echo base_url()?>our-company/our-partnership/ezecampus">EzeCampus</a></li>
												<li><a href="<?php echo base_url()?>our-company/our-partnership/student-discount">Student Discount</a></li>
											</ul>
										</li>-->
										<li><a href="<?php echo base_url();?>our-company/corporate-social-responsibility">Corporate Social Responsibility</a></li>
										<li><a href="<?php echo base_url();?>our-company/community">Community</a></li>
										<li><a href="<?php echo base_url();?>our-company/career-opportunities">Career Opportunities</a></li>
										
									</ul>
								</div>
							<?php } ?>
							
							</div>
							<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<?php if($this->session->userdata("language")==1){?>
								<h4>Our Services</h4>
								<div class="our-service-block">
									<ul>
										<li>
											<strong>Internet Access</strong>
											<ul class="services">
												<li><a href="<?php echo base_url();?>our-services/internet-access/dedicated-internet-access">Dedicated Internet</a></li>
												<li><a href="<?php echo base_url();?>our-services/internet-access/EzeBiz">EzeBiz</a></li>
												<li><a href="<?php echo base_url();?>our-services/internet-access/EzeSurf">EzeSurf</a></li>
											</ul>
										</li>
										<li>
											<strong>Enterprise Network</strong>
											<ul class="ent_network">
												<li><a href="<?php echo base_url();?>our-services/enterprise-network/international-private-leased-circuit">IPLC</a></li>
												<li><a href="<?php echo base_url();?>our-services/enterprise-network/domestic-private-leased-circuit">DPLC</a></li>
												<li><a href="<?php echo base_url();?>our-services/enterprise-network/mpls">MPLS</a></li>
												<li><a href="<?php echo base_url();?>our-services/enterprise-network/vpls">VPLS</a></li>
											</ul>
										</li>
										<li>
											<strong>Cloud Services</strong>
											<ul class="cloud_services">
												<li><a href="<?php echo base_url();?>our-services/cloud-service/microsoft-cloud-service">Microsoft Cloud Service</a></li>
												<!--<li><a href="<?php echo base_url();?>our-services/cloud-service/amazon-web-service">Amazon Web Service</a></li>-->
											</ul>
										</li>
										<li>
											<strong>Data Centre & Hosting</strong>
											<ul class="hosting">
												<li><a href="<?php echo base_url();?>our-services/hosting/colocation">Co-location</a></li>
												<!--<li><a href="<?php echo base_url();?>our-services/hosting/disaster-recovery-center">DRC</a></li>-->
												<li><a href="<?php echo base_url();?>our-services/hosting/cpanel-web-hosting">Web Hosting</a></li>
												<!--<li><a href="<?php echo base_url();?>our-services/hosting/virtual-pbx">VPBX</a></li>-->
											</ul>
										</li>
									
									</ul>
								</div>
							<?php } ?>
							
							<?php if($this->session->userdata("language")==3){?>
								<h4>产品及服务</h4>
								<div class="our-service-block">
									<ul>
										<li>
											<strong>互联网</strong>
											<ul class="services">
												<li><a href="<?php echo base_url();?>our-services/internet-access/dedicated-internet-access">Dedicated Internet</a></li>
												<li><a href="<?php echo base_url();?>our-services/internet-access/EzeBiz">EzeBiz</a></li>
												<li><a href="<?php echo base_url();?>our-services/internet-access/EzeSurf">EzeSurf</a></li>
											</ul>
										</li>
										<li>
											<strong>企业网络</strong>
											<ul class="ent_network">
												<li><a href="<?php echo base_url();?>our-services/enterprise-network/international-private-leased-circuit">IPLC</a></li>
												<li><a href="<?php echo base_url();?>our-services/enterprise-network/domestic-private-leased-circuit">DPLC</a></li>
												<li><a href="<?php echo base_url();?>our-services/enterprise-network/mpls">MPLS</a></li>
												<li><a href="<?php echo base_url();?>our-services/enterprise-network/vpls">VPLS</a></li>
											</ul>
										</li>
										<li>
											<strong>云服务</strong>
											<ul class="cloud_services">
												<li><a href="<?php echo base_url();?>our-services/cloud-service/microsoft-cloud-service">Microsoft Cloud Service</a></li>
												<!--<li><a href="<?php echo base_url();?>our-services/cloud-service/amazon-web-service">Amazon Web Service</a></li>-->
											</ul>
										</li>
										<li>
											<strong>数据中心和托管</strong>
											<ul class="hosting">
												<li><a href="<?php echo base_url();?>our-services/hosting/colocation">Co-location</a></li>
												<!--<li><a href="<?php echo base_url();?>our-services/hosting/disaster-recovery-center">DRC</a></li>-->
												<li><a href="<?php echo base_url();?>our-services/hosting/cpanel-web-hosting">Web Hosting</a></li>
												<!--<li><a href="<?php echo base_url();?>our-services/hosting/virtual-pbx">VPBX</a></li>-->
											</ul>
										</li>
									
									</ul>
								</div>
							<?php } ?>
							
							<?php if($this->session->userdata("language")==""){?>
								<h4>Our Services</h4>
								<div class="our-service-block">
									<ul>
										<li>
											<strong>Internet Access</strong>
											<ul class="services">
												<li><a href="<?php echo base_url();?>our-services/internet-access/dedicated-internet-access">Dedicated Internet</a></li>
												<li><a href="<?php echo base_url();?>our-services/internet-access/EzeBiz">EzeBiz</a></li>
												<li><a href="<?php echo base_url();?>our-services/internet-access/EzeSurf">EzeSurf</a></li>
											</ul>
										</li>
										<li>
											<strong>Enterprise Network</strong>
											<ul class="ent_network">
												<li><a href="<?php echo base_url();?>our-services/enterprise-network/international-private-leased-circuit">IPLC</a></li>
												<li><a href="<?php echo base_url();?>our-services/enterprise-network/domestic-private-leased-circuit">DPLC</a></li>
												<li><a href="<?php echo base_url();?>our-services/enterprise-network/mpls">MPLS</a></li>
												<li><a href="<?php echo base_url();?>our-services/enterprise-network/vpls">VPLS</a></li>
											</ul>
										</li>
										<li>
											<strong>Cloud Services</strong>
											<ul class="cloud_services">
												<li><a href="<?php echo base_url();?>our-services/cloud-service/microsoft-cloud-service">Microsoft Cloud Service</a></li>
												<!--<li><a href="<?php echo base_url();?>our-services/cloud-service/amazon-web-service">Amazon Web Service</a></li>-->
											</ul>
										</li>
										<li>
											<strong>Data Centre & Hosting</strong>
											<ul class="hosting">
												<li><a href="<?php echo base_url();?>our-services/hosting/colocation">Co-location</a></li>
												<!--<li><a href="<?php echo base_url();?>our-services/hosting/disaster-recovery-center">DRC</a></li>-->
												<li><a href="<?php echo base_url();?>our-services/hosting/cpanel-web-hosting">Web Hosting</a></li>
												<!--<li><a href="<?php echo base_url();?>our-services/hosting/virtual-pbx">VPBX</a></li>-->
											</ul>
										</li>
									
									</ul>
								</div>
							<?php } ?>
							
							</div>
							<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
								<?php if($this->session->userdata("language")==1){?>
									<div class="our-services-continue">
										<ul>
											<li>
												<strong>Cyber Security</strong>
												<ul class="security-services">
													<li><a href="<?php echo base_url();?>our-services/cyber-security/ddos">DDoS Mitigation Service</a></li>
													<!--<li><a href="<?php echo base_url();?>our-services/cyber-security/web-application-firewall">Web Application Firewall</a></li>-->
													<!--<li><a href="<?php echo base_url();?>our-services/cyber-security/managed-network-security">Managed Network Security</a></li>-->
												</ul>
											</li>
											<li>
												<strong>Value Added Services</strong>
												 <ul>
													<li><a href='<?php echo base_url()?>our-services/value-added-service/live-stream-service'>Live Stream Service</a></li>
												 </ul>
												<!--<ul class="add_services">
													<li><a href="<?php echo base_url();?>our-services/value-added-service/voice-over-ip">VoIP</a></li>
													<li><a href="<?php echo base_url();?>our-services/value-added-service/EzeTV">EzeTV</a></li>
												</ul>-->
											</li>
										</ul>
									</div>
								<?php } ?>
								
								<?php if($this->session->userdata("language")==3){?>
									<div class="our-services-continue">
										<ul>
											<li>
												<strong>网络安全</strong>
												<ul class="security-services">
													<li><a href="<?php echo base_url();?>our-services/cyber-security/ddos">DDoS Mitigation Service</a></li>
													<!--<li><a href="<?php echo base_url();?>our-services/cyber-security/web-application-firewall">Web Application Firewall</a></li>-->
													<!--<li><a href="<?php echo base_url();?>our-services/cyber-security/managed-network-security">Managed Network Security</a></li>-->
												</ul>
											</li>
											<li>
												<strong>增值服务</strong>
												 <ul>
													<li><a href='<?php echo base_url()?>our-services/value-added-service/live-stream-service'>Live Stream Service</a></li>
												 </ul>
												<!--<ul class="add_services">
													<li><a href="<?php echo base_url();?>our-services/value-added-service/voice-over-ip">VoIP</a></li>
													<li><a href="<?php echo base_url();?>our-services/value-added-service/EzeTV">EzeTV</a></li>
												</ul>-->
											</li>
										</ul>
									</div>
								<?php } ?>
								
								<?php if($this->session->userdata("language")==""){?>
									<div class="our-services-continue">
										<ul>
											<li>
												<strong>Cyber Security</strong>
												<ul class="security-services">
													<li><a href="<?php echo base_url();?>our-services/cyber-security/ddos">DDoS Mitigation Service</a></li>
													<!--<li><a href="<?php echo base_url();?>our-services/cyber-security/web-application-firewall">Web Application Firewall</a></li>-->
													<!--<li><a href="<?php echo base_url();?>our-services/cyber-security/managed-network-security">Managed Network Security</a></li>-->
												</ul>
											</li>
											<li>
												<strong>Value Added Services</strong>
												 <ul>
													<li><a href='<?php echo base_url()?>our-services/value-added-service/live-stream-service'>Live Stream Service</a></li>
												 </ul>
												<!--<ul class="add_services">
													<li><a href="<?php echo base_url();?>our-services/value-added-service/voice-over-ip">VoIP</a></li>
													<li><a href="<?php echo base_url();?>our-services/value-added-service/EzeTV">EzeTV</a></li>
												</ul>-->
											</li>
										</ul>
									</div>
								<?php } ?>
								
							</div>
							<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<?php if($this->session->userdata("language")==1){?>
								<h4>Media Center</h4>
								<div class="media-center-block">
									<ul>
										<li><a href="<?php echo base_url()?>media-center/news-events">News and Events</a></li>
										<li><a href="<?php echo base_url()?>media-center/live-cambodia-radio">Radio Live Stream</a></li>
										<li><a href="<?php echo base_url();?>media-center/live-traffic-camera">Live Traffic Camera</a></li>
										<!--<li><a href='<?php echo base_url()?>media-center/promotion'>Promotion</a></li>-->
																						   
									</ul>
								</div>
							<?php } ?>
							
							<?php if($this->session->userdata("language")==3){?>
								<h4>媒体中心</h4>
								<div class="media-center-block">
									<ul>
										<li><a href="<?php echo base_url()?>media-center/news-events">新闻与事件</a></li>
										<li><a href="<?php echo base_url()?>media-center/live-cambodia-radio">电台直播</a></li>
										<li><a href="<?php echo base_url();?>media-center/live-traffic-camera">实时交通摄像头</a></li>
										<!--<li><a href='<?php echo base_url()?>media-center/promotion'>Promotion</a></li>-->
																						   
									</ul>
								</div>
							<?php } ?>
							
							<?php if($this->session->userdata("language")==""){?>
								<h4>Media Center</h4>
								<div class="media-center-block">
									<ul>
										<li><a href="<?php echo base_url()?>media-center/news-events">News and Events</a></li>
										<li><a href="<?php echo base_url()?>media-center/live-cambodia-radio">Radio Live Stream</a></li>
										<li><a href="<?php echo base_url();?>media-center/live-traffic-camera">Live Traffic Camera</a></li>
										<!--<li><a href='<?php echo base_url()?>media-center/promotion'>Promotion</a></li>-->
																						   
									</ul>
								</div>
							<?php } ?>
							
							<?php if($this->session->userdata("language")==1){?>
								<h4>Support</h4>
								<div class="support-block">
									<ul>
										<li><a href="<?php echo base_url();?>support/faq">FAQ's</a></li>
										<li><a href="<?php echo base_url();?>support/customer-service">Customer Service</a></li>
										<li><a href="<?php echo base_url();?>support/payment">Payment Options</a></li>
										<li><a href="<?php echo base_url();?>support/setup-email">EzeMail Setup</a></li>
										<li><a target="_blank" href="https://webmail.ezecom.com.kh/">EzeMail</a></li>
										<li><a target="_blank" href="http://bandwidth.ezecom.com.kh/">Speed Test</a></li>	
										<li><a target="_blank" href="https://csm.ezecom.com.kh/uam/login.cgi?uri=/uam/customer/">User Account Management</a></li>
																						 
									</ul>
								</div>
							<?php } ?>
							
							<?php if($this->session->userdata("language")==3){?>
								<h4>支持</h4>
								<div class="support-block">
									<ul>
										<li><a href="<?php echo base_url();?>support/faq">常问问题</a></li>
										<li><a href="<?php echo base_url();?>support/customer-service">客户服务</a></li>
										<li><a href="<?php echo base_url();?>support/payment">付款选项</a></li>
										<li><a href="<?php echo base_url();?>support/setup-email">EzeMail设置</a></li>
										<li><a target="_blank" href="https://webmail.ezecom.com.kh/">EzeMail</a></li>
										<li><a target="_blank" href="http://bandwidth.ezecom.com.kh/">速度测试</a></li>	
										<li><a target="_blank" href="https://csm.ezecom.com.kh/uam/login.cgi?uri=/uam/customer/">用户账户管理</a></li>
																						 
									</ul>
								</div>
							<?php } ?>
							
							<?php if($this->session->userdata("language")==""){?>
								<h4>Support</h4>
								<div class="support-block">
									<ul>
										<li><a href="<?php echo base_url();?>support/faq">FAQ's</a></li>
										<li><a href="<?php echo base_url();?>support/customer-service">Customer Service</a></li>
										<li><a href="<?php echo base_url();?>support/payment">Payment Options</a></li>
										<li><a href="<?php echo base_url();?>support/setup-email">EzeMail Setup</a></li>
										<li><a target="_blank" href="https://webmail.ezecom.com.kh/">EzeMail</a></li>
										<li><a target="_blank" href="http://bandwidth.ezecom.com.kh/">Speed Test</a></li>	
										<li><a target="_blank" href="https://csm.ezecom.com.kh/uam/login.cgi?uri=/uam/customer/">User Account Management</a></li>
																						 
									</ul>
								</div>
							<?php } ?>
							
							</div>
					</div>
				</div> 
			</div> <!-- end of menu collection -->
		</div>
	
	</div>
</div>
</div>

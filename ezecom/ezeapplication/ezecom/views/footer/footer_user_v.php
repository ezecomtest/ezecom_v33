<div class="container-fluid bg-navigation-footer">
	<div class="container">
		<div class="row">
			<div class="wrapper-navig-footer">
				<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6" >
				<div class="section-footer">
					<?php if($this->session->userdata("language")==1){?>
						<h6>Internet Access</h6>
					<?php } ?>
					
					<?php if($this->session->userdata("language")==3){?>
						<h6>互联网</h6>
					<?php } ?>
					
					<?php if($this->session->userdata("language")==""){?>
						<h6>Internet Access</h6>
					<?php } ?>
					
					<ul>
						<li><a href="<?php echo base_url()?>our-services/internet-access/dedicated-internet-access">Dedicated Internet</a></li>
						<li><a href="<?php echo base_url()?>our-services/internet-access/EzeBiz">EzeBiz</a></li>
						<li><a href="<?php echo base_url()?>our-services/internet-access/EzeSurf">EzeSurf</a></li>
					</ul>
					
					<?php if($this->session->userdata("language")==1){?>
						<h6>Enterprise Network</h6>
					<?php } ?>
					
					<?php if($this->session->userdata("language")==3){?>
						<h6>企业网络</h6>
					<?php } ?>
					
					<?php if($this->session->userdata("language")==""){?>
						<h6>Enterprise Network</h6>
					<?php } ?>
					
					<ul>
						<li><a href="<?php echo base_url()?>our-services/enterprise-network/international-private-leased-circuit">IPLC</a></li>
						<li><a href="<?php echo base_url()?>our-services/enterprise-network/domestic-private-leased-circuit">DPLC</a></li>
						<li><a href="<?php echo base_url()?>our-services/enterprise-network/mpls">MPLS</a></li>
						<li><a href="<?php echo base_url()?>our-services/enterprise-network/vpls">VPLS</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
				<div class="section-footer">
					<?php if($this->session->userdata("language")==""){?>
						<h6>Cloud Service</h6>
					<?php } ?>
					
					<?php if($this->session->userdata("language")==3){?>
						<h6>云服务</h6>
					<?php } ?>
					
					<?php if($this->session->userdata("language")==""){?>
						<h6>Cloud Service</h6>
					<?php } ?>
					
					<ul>
						<li><a href="<?php echo base_url()?>our-services/cloud-service/microsoft-cloud-service">Microsoft Cloud Services</a></li>
						<!--<li><a href="<?php echo base_url()?>our-services/cloud-service/amazon-web-service">Amazon Web Service</a></li>-->
					</ul>
					<?php if($this->session->userdata("language")==""){?>
						<h6>Hosting</h6>
					<?php } ?>
					
					<?php if($this->session->userdata("language")==3){?>
						<h6>托管</h6>
					<?php } ?>
					
					<?php if($this->session->userdata("language")==""){?>
						<h6>Hosting</h6>
					<?php } ?>
					
					<ul>
						<li><a href="<?php echo base_url()?>our-services/hosting/colocation">Co-location</a></li>
						<!--<li><a href="<?php echo base_url()?>our-services/hosting/disaster-recovery-center">DRC</a></li>-->
						<li><a href="<?php echo base_url()?>our-services/hosting/cpanel-web-hosting">Web Hosting</a></li>
						<!--<li><a href="<?php echo base_url()?>our-services/hosting/virtual-pbx">VPBX</a></li>-->
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
				<div class="section-footer">
					<?php if($this->session->userdata("language")==1){?>
						<h6>Cyber Security</h6>
					<?php } ?>
					
					<?php if($this->session->userdata("language")==3){?>
						<h6>网络安全</h6>
					<?php } ?>
					
					<?php if($this->session->userdata("language")==""){?>
						<h6>Cyber Security</h6>
					<?php } ?>
					
					<ul>
						<li><a href="<?php echo base_url()?>our-services/cyber-security/ddos">DDoS Mitigation Service</a></li>
						<!--<li><a href="<?php echo base_url()?>our-services/cyber-security/web-application-firewall">Web Application Firewall</a></li>-->
						<!--<li><a href="<?php echo base_url()?>our-services/cyber-security/managed-network-security">Managed Network Security</a></li>-->
					</ul>
					<?php if($this->session->userdata("language")==1){?>
						<h6>VAS</h6>
					<?php } ?>
					
					<?php if($this->session->userdata("language")==3){?>
						<h6>增值服务</h6>
					<?php } ?>
					
					<?php if($this->session->userdata("language")==""){?>
						<h6>VAS</h6>
					<?php } ?>
					
						<ul>
							<li><a href='<?php echo base_url()?>our-services/value-added-service/live-stream-service'>Live Stream Service</a></li>
						</ul>
					<!--<ul>
						<li><a href="<?php echo base_url()?>our-services/value-added-service/voice-over-ip">VoIP</a></li>
						<li><a href="<?php echo base_url()?>our-services/value-added-service/EzeTV">EzeTV</a></li>
					</ul>-->
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
				<div class="section-footer">
					<?php if($this->session->userdata("language")==1){?>
						<h6>Media Centre</h6>
						<ul>
							<li><a href="<?php echo base_url()?>media-center/news-events">News & Events</a></li>
							<li><a href="<?php echo base_url()?>media-center/live-cambodia-radio">Radio Live Stream</a></li>
							<li><a href="<?php echo base_url()?>media-center/live-traffic-camera">Live Traffic Camera</a></li>
							<!--<li><a href='<?php echo base_url()?>media-center/promotion'>Promotion</a></li>-->
						</ul>
					<?php } ?>
					
					<?php if($this->session->userdata("language")==3){?>
						<h6>媒体中心</h6>
						<ul>
							<li><a href="<?php echo base_url()?>media-center/news-events">新闻与事件</a></li>
							<li><a href="<?php echo base_url()?>media-center/live-cambodia-radio">电台直播</a></li>
							<li><a href="<?php echo base_url()?>media-center/live-traffic-camera">实时交通摄像头</a></li>
							<!--<li><a href='<?php echo base_url()?>media-center/promotion'>Promotion</a></li>-->
						</ul>
					<?php } ?>
					
					<?php if($this->session->userdata("language")==""){?>
						<h6>Media Centre</h6>
						<ul>
							<li><a href="<?php echo base_url()?>media-center/news-events">News & Events</a></li>
							<li><a href="<?php echo base_url()?>media-center/live-cambodia-radio">Radio Live Stream</a></li>
							<li><a href="<?php echo base_url()?>media-center/live-traffic-camera">Live Traffic Camera</a></li>
							<!--<li><a href='<?php echo base_url()?>media-center/promotion'>Promotion</a></li>-->
						</ul>
					<?php } ?>
					
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
				<div class="section-footer">
					<?php if($this->session->userdata("language")==1){?>
						<h6>Support</h6>
						<ul>
							<li><a href="<?php echo base_url()?>support/faq">FAO’s</a></li>
							<li><a href="<?php echo base_url()?>support/customer-service">Customer Service</a></li>
							<li><a href="<?php echo base_url()?>support/payment">Payment Option</a></li>
							<li><a href="<?php echo base_url()?>support/setup-email">EzeMail Setup</a></li>
							<li><a href="http://ezecom.speedtest.net/" target="_blank">Speed Test</a></li>
							<li><a href="https://csm.ezecom.com.kh/uam/login.cgi?uri=/uam/customer/" target="_blank">User Account Management</a></li>
						</ul>
					<?php }?>
					
					<?php if($this->session->userdata("language")==3){?>
						<h6>支持</h6>
						<ul>
							<li><a href="<?php echo base_url()?>support/faq">常问问题</a></li>
							<li><a href="<?php echo base_url()?>support/customer-service">客户服务</a></li>
							<li><a href="<?php echo base_url()?>support/payment">付款选项</a></li>
							<li><a href="<?php echo base_url()?>support/setup-email">EzeMail设置</a></li>
							<li><a href="http://ezecom.speedtest.net/" target="_blank">速度测试</a></li>
							<li><a href="https://csm.ezecom.com.kh/uam/login.cgi?uri=/uam/customer/" target="_blank">用户账户管理</a></li>
						</ul>
					<?php }?>
					
					<?php if($this->session->userdata("language")==""){?>
						<h6>Support</h6>
						<ul>
							<li><a href="<?php echo base_url()?>support/faq">FAO’s</a></li>
							<li><a href="<?php echo base_url()?>support/customer-service">Customer Service</a></li>
							<li><a href="<?php echo base_url()?>support/payment">Payment Option</a></li>
							<li><a href="<?php echo base_url()?>support/setup-email">EzeMail Setup</a></li>
							<li><a href="http://ezecom.speedtest.net/" target="_blank">Speed Test</a></li>
							<li><a href="https://csm.ezecom.com.kh/uam/login.cgi?uri=/uam/customer/" target="_blank">User Account Management</a></li>
						</ul>
					<?php }?>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
				<div class="section-footer set-padding">
					<?php if($this->session->userdata("language")==1){?>
						<h6>Follow Us</h6>
					<?php }?>
					<?php if($this->session->userdata("language")==3){?>
						<h6>跟着我们</h6>
					<?php }?>
					<?php if($this->session->userdata("language")==""){?>
						<h6>Follow Us</h6>
					<?php }?>
					<ul>
						<li><img  class="fb" src="<?php echo base_url()?>images/footer/social-icon-facebook.svg"/><a href="https://www.facebook.com/ezecom/" target="_blank">Facebook</a></li>
						<li><img  class="linkin" src="<?php echo base_url()?>images/footer/social-icon-linkedin.svg"/><a href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQFjhPwfnFlbiwAAAWJlRKPgJs3U7q7mghYytI9MJRWEsnw1sMG86SwDviOxfBwfzs8kKhPeHMdlBjxU2zlAI2MomFgP0KaBI2O0prumunLzKWrJIjCf7sZ_S16RHU8g5Lz1ZeE=&originalReferer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fezecom%2F" target="_blank">LinkedIn</a></li>
						<li><img  class="instagram" src="<?php echo base_url()?>images/footer/social-icon-instagram.svg"/><a href="https://www.instagram.com/ezecommedias/" target="_blank" >Instagram</a></li>
						<li><img  class="youtube" src="<?php echo base_url()?>images/footer/social-icon-youtube.svg"/><a href="https://www.youtube.com/user/EZECOMCambodiaISP" target="_blank">YouTube</a></li>
						<li><img  class="gplus" src="<?php echo base_url()?>images/footer/social-icon-googleplus.svg"/><a href="https://plus.google.com/109195830334920857995" target="_blank">Google+</a></li>
					</ul>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid bg-footer">
	<div class="container">
		<?php if($this->session->userdata("language")==1){?>
			<p class="text-center txt-copyright">2018 EZECOM Co., Ltd. All Rights Reserved</p>
		<?php } ?>
		<?php if($this->session->userdata("language")==3){?>
			<p class="text-center txt-copyright">2018 EZECOM Co.，Ltd. 保留所有权利</p>
		<?php } ?>
		<?php if($this->session->userdata("language")==""){?>
			<p class="text-center txt-copyright">2018 EZECOM Co., Ltd. All Rights Reserved</p>
		<?php } ?>
	</div>
</div>
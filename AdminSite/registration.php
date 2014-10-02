<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <!--Head-->
	<?php
		$headtitle = 'Tawkur - Register';
		include '../mainContent/adminhead.php';
	?>
	<!-- CSS Page Style -->    
	<link rel="stylesheet" href="../assets/css/pages/page_log_reg_v2.css"> <!-- Login -->
	<link rel="stylesheet" href="../assets/css/pages/page_log_reg_v1.css">
</head> 

<body>

<!--=== Content Part ===-->    
<div class="container">
	<img src="../assets/img/tawkur Logo_transparent.png" class="img-responsive center-block">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
			<form action="" id="sky-form1" class="reg-page sky-form">
				<div class="reg-header">
					<h2>Register a new account</h2>
					<p>Already Signed Up? Click <a href="login.php" class="color-green"><b>Sign In</b></a> to login your account.</p>                    
				</div>

				<div class="input-group margin-bottom-20">					
					<input type="text" class="form-control" placeholder="First Name">
					<span class="input-group-addon"><i class="fa fa-user"></i></span>
				</div>
				<div class="input-group margin-bottom-20">					
					<input type="text" class="form-control" placeholder="Last Name">
					<span class="input-group-addon"><i class="fa fa-user"></i></span>
				</div>                   
				<section>
					<label class="input">
						<i class="icon-append fa fa-envelope"></i>
						<input type="email" placeholder="Email" name="email">
					</label>
				</section>

				<div class="row">
					<div class="col-sm-6">
						<section>
			               <label class="input">
			                  <i class="icon-append fa fa-lock"></i>
			                  <input type="text" placeholder="Password" name="minVal">
			                </label>
			            </section> 
					</div>
					<div class="col-sm-6">
						<section>
			               <label class="input">
			                  <i class="icon-append fa fa-key"></i>
			                  <input type="text" placeholder="Confirm Password" name="minVal">
			                </label>
			            </section> 
					</div>
				</div>
				<section>
	                <label class="input">
		                <i class="icon-append fa fa-phone"></i>
		                <input type="tel" placeholder="Phone Number" name="phone" id="phone">
	                </label>
                </section>
                <section>
	                <label class="input">
		                <i class="icon-append fa fa-file-text-o"></i>
		                <input type="text" placeholder="Registration Code" name="digits">
	                </label>
                </section>

				<hr>
				 <label class="checkbox">
		            <input type="checkbox"> 
		            <p>I read the <a target="_blank" data-toggle="modal" data-target=".termsAndCondition"><b>Terms and Conditions</b></a></p>
		             <!-- Large modal -->
                        <div class="modal fade termsAndCondition" tabindex="-1" role="dialog" aria-labelledby="termsAndConditionModal" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">x</button>
                                        <h4 id="myLargeModalLabel" class="modal-title">Terms and Conditions</h4>
                                    </div>
                                    <div style="max-height: 500px; overflow-y: scroll;" class="modal-body">
                                        <p>Welcome to TAWKUR!  TAWKUR is a safe social platform designed for kids and governed by parents.  We provide Safe Social for Kids™, and confidence for parents, in the digital age.  
										</p>
										<p>TAWKUR, LLC (“Tawkur”, “we” or “us”) is pleased to provide to you with our apps, sites, software, servers, content, products and services (together, “Tawkur Services”).  These terms of use govern your use and our provision of all Tawkur Services, whether through our apps, sites, software, servers or when via third-party platforms. 
										</p>
										<p>PLEASE READ THESE TERMS CAREFULLY BEFORE USING THE TAWKUR SERVICES.  ANY DISPUTE BETWEEN YOU AND US MUST BE RESOLVED BY INDIVIDUAL BINDING ARBITRATION. PLEASE READ THE ARBITRATION PROVISION IN THESE TERMS AS IT AFFECTS YOUR RIGHTS UNDER THIS CONTRACT.  NOTHING IN THESE TERMS IS INTENDED TO AFFECT YOUR RIGHTS UNDER THE LAW IN YOUR USUAL PLACE OF RESIDENCE. IF THERE IS A CONFLICT BETWEEN THOSE RIGHTS AND THESE TERMS, YOUR RIGHTS UNDER APPLICABLE LOCAL LAW WILL PREVAIL.  
										</p>
										<p>These terms are a contract between Tawkur and you (for yourself and on behalf of any minor child to whom you are parent or legal guardian and whom you permit to use Tawkur Services (“Your Children”)).  You must read and agree to these terms before using Tawkur Services or permitting Your Children to use Tawkur Services.  These terms of use supersede any previous agreements relating to Tawkur Services.  We may change these terms at any time, effective thirty (30) days following notice of such change, which may be posted on the Tawkur Services and need not be specifically provided to you, except as required by law.  If at any time you do not agree to these terms, please discontinue using Tawkur Services right away.  Finally, if you do not comply with these terms, we may suspend your use of Tawkur Services and terminate our relationship with you.  These terms incorporate our Acceptable Use Policy www.tawkur.com/terms and our Privacy Policy www.tawkur.com/Privacy. 
										</p>
										<p><u>USER GENERATED CONTENT</u></p>
										<p>The Tawkur Services may allow you to communicate, submit, upload or otherwise make available text, images, audio, video, or other content (“User Generated Content”), which may be accessible and viewable by other uses of the Tawkur Services with whom you have given approval to communicate.  Access to these features may be subject to age restrictions. You may not submit or upload User Generated Content that is defamatory, harassing, threatening, bigoted, hateful, violent, vulgar, obscene, pornographic, or otherwise offensive or that harms or can reasonably be expected to harm any person or entity, whether or not such material is protected by law.
										</p>
										<p>We do not claim ownership to your User Generated Content; however, you grant us a non-exclusive, sublicensable, irrevocable and royalty-free worldwide license under all copyrights, trademarks, patents, trade secrets, privacy and publicity rights and other intellectual property rights to use, reproduce, transmit, print, publish, distribute, redistribute, copy, index, adapt, translate, create derivative works based upon, make available and otherwise exploit such User Generated Content as necessary to provide the features and functionality available to you via the Tawkur Services.  
										</p>
										<p>Important examples of our current and intended uses of your User Generated Content include permitting communication among Tawkur users who have approval to communicate using the Tawkur Services, and storing and retrieving information regarding Your Children’s use of the Tawkur Services, including usage logs, chat transcripts and audio and video recordings and making it available to you as parent or legal guardian, as well as to the parent or legal guardian of any minor child with whom Your Children communicate using the Tawkur Services.
										</p>
										<p>You represent and warrant that your User Generated Content conforms to these terms and that you own or have the necessary rights and permissions, without the need for payment to any other person or entity, to use and exploit, and to authorize us to use and exploit, your User Generated Content in all manners contemplated by these terms. 
										</p>
										<p>You agree to indemnify and hold us and our subsidiary and affiliated companies, and each of their respective employees and officers, harmless from any demands, loss, liability, claims or expenses (including attorneys’ fees), made against us by any third party arising out of or in connection with our use and exploitation of your User Generated Content. You also agree not to enforce any moral rights, ancillary rights or similar rights in or to the User Generated Content against us or our licensees, distributors, agents, representatives and other authorized users, and agree to procure the same agreement not to enforce from others who may possess such rights.
										</p>
										<p>We have the right but not the obligation to monitor, screen, post, remove, modify, store and review User Generated Content or communications sent through the Tawkur Services, at any time  and for any reason, including to ensure that the User Generated Content or communication conforms to these terms, without prior notice to you. We are not responsible for, and do not endorse or guarantee, the opinions, views, advice or recommendations posted or sent by users.
										</p>
										<p><u>ACCOUNTS</u></p>
										<p>Some Tawkur Services permit or require you to create an account to participate or to secure additional benefits. You agree to provide and maintain accurate, current and complete information, including your contact information for notices and other communications from us and your payment information. You agree not to impersonate or misrepresent your affiliation with any person or entity, including using another person’s username, password or other account information, or another person’s name or likeness, or provide false details for a parent or guardian. You agree that we may take steps to verify the accuracy of information you provide, including contact information for a parent or guardian. We have adopted and implemented a policy that provides for the termination, in appropriate circumstances, of the accounts of users who are repeat infringers of copyright.
										</p>
										<p><u>PASSWORDS AND SECURITY</u></p>
										<p>You are responsible for taking reasonable steps to maintain the confidentiality of your username and password, and you are responsible for all activities under your account that you can reasonably control. You agree to promptly notify us of any unauthorized use of your username, password or other account information, or of any other breach of security that you become aware of involving the Tawkur Services. The security, integrity and confidentiality of your information are extremely important to us.  We have implemented technical, administrative and physical security measures that are designed to protect your information from unauthorized access, disclosure, use and modification.
										</p>
										<p><u>PAYMENT</u></p>
										<p>Some Tawkur Services require that you pay us to use them.  Pricing for these services is clearly disclosed when you agree to pay for them, along with any automatic renewal terms, and we do not offer refunds of any kind.  We utilize the services of third-party payment providers to collect payments from you, and your interactions with these providers is governed by their own terms of use.
										</p>
										<p><u>OUR RIGHTS</u></p>
										<p>The Tawkur Services are our copyrighted property or the copyrighted property of our licensors or licensees and all trademarks, service marks, trade names, trade dress and other intellectual property rights in the Tawkur Services are owned by us or our licensors or licensees. We retain full and complete ownership of the Tawkur Services.
										</p>
										<p><u>YOUR RIGHTS</u></p>
										<p>If a Tawkur Service is configured to enable the use of software, content, virtual items or other materials owned or licensed by us, we grant you a limited, non-exclusive, non-sublicensable, non-transferable license to access and use such software, content, virtual item or other material for your personal, noncommercial use only.
										</p>
										<p><u>PROHIBITED USES</u></p>
										<p>No element of the Tawkur Services may be used or exploited in any way other than as part of the Tawkur Services offered to you.  You may not decompile, reverse engineer, disassemble or otherwise reduce any Tawkur Service to a human-readable form; remove identification, copyright or other proprietary notices; or access or use any Tawkur Service in an unlawful or unauthorized manner or in a manner that suggests an association with our products, services or brands. You may not access or use any Tawkur Service in violation of United States export control and economic sanctions requirements. By acquiring services, content or software through the Tawkur Services, you agree that your access to and use of the services, content or software will comply with those requirements.  You agree not to knowingly or recklessly introduce a virus or other harmful component, or otherwise tamper with, impair or damage any Tawkur Service or connected network, or interfere with any person or entity’s use or enjoyment of any Tawkur Service.   Additionally, you agree not to access, monitor or copy any element of the Tawkur Services using a robot, spider, scraper or other automated means or manual process without our express written permission.
										</p>
										<p><u>THIRD PARTIES</u></p>
										<p>
										If you access a Tawkur Service using an Apple iOS, Android or Microsoft Windows-powered device, Apple Inc., Google, Inc. or Microsoft Corporation, respectively, are a third-party beneficiary to this contract. However, these third-party beneficiaries are not a party to this contract and are not responsible for the provision or support of the Tawkur Services. You agree that your access to the Tawkur Services using these devices also will be subject to the usage terms set forth in the applicable third-party beneficiary’s terms of service.
										</p>
										<p><u>MOBILE NETWORKS</u></p>
										<p>When you access the Tawkur Services through a mobile network, your network or roaming provider’s messaging, data and other rates and fees will apply. Downloading, installing or using certain Tawkur Services may be prohibited or restricted by your network provider and not all Tawkur Services may work with your network provider or device.
										</p>
										<p><u>SUBMISSIONS AND UNSOLICITED IDEAS</u></p>
										<p>In connection with anything you submit to us, such as product feedback and suggestions, whether or not solicited by us, you agree that creative ideas, suggestions or other materials you submit are not being made in confidence or trust and that no confidential or fiduciary relationship is intended or created between you and us in any way, and that you have no expectation of review, compensation or consideration of any type.
										</p>
										<p><u>CLAIMS OF COPYRIGHT INFRINGEMENT</u></p>
										<p>
										Notifications of claimed copyright infringement and counter notices must be sent to our designated agent, as follows: 
										</p>
										<p>
										Provider Legal Name: 					Tawkur LLC
										</p>
										<p>Provider DBAs:						Tawkur
										</p>
										<p>Agent to receive notification of claimed infringement:	David R. Brown
										</p>
										<p>	Agent’s Address:					70 W. Madison St., Suite 3500, Chicago, IL 60602
										</p>
										<p>Telephone / facsimile / email:				312-977-4400 / 312-977-4405 / ipdocket@uhlaw.com	
										</p>
										<p>We are only able to accept notices in the languages into which these terms are made available by us. We will respond expeditiously to claims of copyright infringement committed using the Tawkur Services that are reported to our Designated Copyright Agent, identified above, in accordance with the U.S. Digital Millennium Copyright Act of 1998 (“DMCA”) or, as applicable, other laws.  With respect to Tawkur Services hosted in the United States, these notices must include the required information set forth in the DMCA and described in detail here.
										</p>
										<p><u>DISCLAIMERS AND LIMITATIONS OF LIABILITY</u></p>
										<p>THE TAWKUR SERVICES ARE PROVIDED “AS IS” AND “AS AVAILABLE.” WE DISCLAIM ALL REPRESENTATIONS AND WARRANTIES TO THE MAXIMUM EXTENT PERMITTED BY LAW, WHETHER EXPRESS, IMPLIED OR STATUTORY, WITH RESPECT TO THE TAWKUR SERVICES INCLUDING WITHOUT LIMITATION, WARRANTIES OR CONDITIONS OF QUALITY, PERFORMANCE, NON-INFRINGEMENT, MERCHANTABILITY, OR FITNESS FOR USE FOR A PARTICULAR PURPOSE. WE DO NOT REPRESENT OR WARRANT THAT THE TAWKUR SERVICES WILL ALWAYS BE AVAILABLE, ACCESSIBLE, UNINTERRUPTED, TIMELY, SECURE, ACCURATE, COMPLETE AND ERROR-FREE OR WILL OPERATE WITHOUT ERROR.  WE ARE NOT LIABLE TO YOU FOR INDIRECT, INCIDENTAL, SPECIAL OR CONSEQUENTIAL DAMAGES, INCLUDING LOST PROFITS AND PROPERTY DAMAGE, EVEN IF WE WERE ADVISED OF THE POSSIBILITY OF SUCH DAMAGES, NOR WILL WE BE HELD LIABLE FOR DELAY OR FAILURE IN PERFORMANCE RESULTING FROM CAUSES BEYOND OUR REASONABLE CONTROL. IN NO EVENT WILL OUR TOTAL LIABILITY TO YOU FOR ALL DAMAGES, LOSSES AND CAUSES OF ACTION EXCEED ONE HUNDRED U.S. DOLLARS (US $100.00).  THESE DISCLAIMERS AND LIMITATIONS DO NOT AFFECT YOUR RIGHTS AS A CONSUMER OR PURPORT TO LIMIT LIABILITY THAT CANNOT BE EXCLUDED UNDER THE LAW IN YOUR USUAL PLACE OF RESIDENCE.
										</p>
										<p><u>CHOICE OF LAW AND FORUM</u></p>
										<p>These terms are governed by and construed in accordance with the laws of the State of Illinois and the laws of the United States, without giving effect to any conflict of law principles.  Subject to the mandatory arbitration provisions of these terms, you agree that any action at law or in equity arising out of or relating to these terms or the Tawkur Services must be filed, and that venue properly lies, only in the state or federal courts located in Chicago, Illinois, United States of America and you consent and submit to the personal jurisdiction of such courts for the purposes of litigating such action.
										</p>
										<p>BINDING ARBITRATION</p>
										<p>You and Tawkur agree to arbitrate all disputes between you and Tawkur or its affiliates, except disputes relating to the enforcement of Tawkur or its affiliates’ intellectual property rights. “Dispute” includes any dispute, action or other controversy between you and us concerning the Tawkur Services or these terms, whether in contract, tort, warranty, statute or regulation, or other legal or equitable basis.  In the event of a dispute, you or Tawkur must send to the other party a notice of dispute, which is a written statement that sets forth the name, address and contact information of the party giving the notice, the facts giving rise to the dispute, and the relief requested. You must send any notice of dispute to us at 70 W. Madison St., Suite 3500, Chicago, IL 60602, Attention: Tawkur Legal/Arbitration Notice. We will send any notice of dispute to you at the contact information we have for you. You and Tawkur will attempt to resolve a dispute through informal negotiation within sixty (60) days from the date the notice of dispute is sent. After sixty (60) days, you or we may commence arbitration. You may also litigate a dispute in small claims court if the dispute meets the requirements to be heard in small claims court, whether or not you negotiated informally first.  If you and Tawkur do not resolve a dispute by informal negotiation or in small claims court, the dispute will be settled by binding arbitration before a neutral arbitrator whose decision will be final except for a limited right of appeal under the U.S. Federal Arbitration Act.  YOU ARE GIVING UP THE RIGHT TO LITIGATE A DISPUTE IN COURT BEFORE A JUDGE OR JURY.  Arbitration will be administered by the American Arbitration Association (the “AAA”) under its Commercial Arbitration Rules and its Supplementary Procedures for Consumer Related Disputes.  For more information, visit www.adr.org or, in the United States, call 800-778-7879. Arbitration may be conducted in person, through the submission of documents, by phone, or online. The arbitrator may award damages to you individually as a court could, including declaratory or injunctive relief, but only to the extent required to satisfy your individual claim.  Unless the arbitrator finds the arbitration was frivolous or brought for an improper purpose, Tawkur will pay all filing, AAA, and arbitrator’s fees and expenses. If the arbitrator issues you an award that is greater than the value of our last written settlement offer made before an arbitrator was selected (or if we did not make a settlement offer before an arbitrator was selected), then we will pay you the amount of the award or US $100.00, whichever is greater, and pay your attorney, if any, the amount of attorneys’ fees, and reimburse any expenses (including expert witness fees and costs) that you or your attorney reasonably accrue for investigating, preparing and pursuing your claim in arbitration. We waive any right to seek an award of attorneys’ fees and expenses in connection with any non-frivolous arbitration between you and us.  If you are a resident of the United States, arbitration will take place at any reasonable location convenient for you. For residents outside the United States, arbitration will be initiated in Chicago, Illinois, United States of America, and you and Tawkur agree to submit to the personal jurisdiction of the federal or state courts located there, in order to compel arbitration, stay proceedings pending arbitration, or confirm, modify, vacate or enter judgment on the award entered by the arbitrator. </p>
										<p><u>WAIVER OF CLASS ACTION</u></p>
										<p>PROCEEDINGS TO RESOLVE OR LITIGATE A DISPUTE IN ANY FORUM WILL BE CONDUCTED ON AN INDIVIDUAL BASIS. Neither you nor Tawkur will seek to have a dispute heard as a class action, private attorney general action, or in any other proceeding in which either party acts or proposes to act in a representative capacity.  No arbitration or proceeding can be combined with another without the prior written consent of all parties to the arbitration or proceeding. If the class action waiver is found to be illegal or unenforceable as to all or some parts of a dispute, those parts will be severed and proceed in a court of law, with the remaining parts proceeding in arbitration.
										</p>
										<p><u>MISCELLANEOUS PROVISIONS</u></p>
										<p>If any provision of these terms is found to be unlawful, void or for any reason unenforceable, then that provision will be deemed severable from these terms and will not affect the validity and enforceability of any remaining provisions.  The provisions of these terms which by their nature should survive the termination of these terms will survive such termination.  No waiver of any provision of these terms by us will be deemed a further or continuing waiver of such provision or any other provision, and our failure to assert any right or provision under these terms will not constitute a waiver of such right or provision.
										</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button data-dismiss="modal" class="btn-u btn-u-danger" type="button">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Large modal -->
		        </label>
		        <label class="checkbox">
		            <input type="checkbox"> 
		            <p>I read the <a target="_blank" data-toggle="modal" data-target=".privacyPolicy"><b>Privacy Policy</b></a></p>
                        <div class="modal fade privacyPolicy" tabindex="-1" role="dialog" aria-labelledby="privacyPolicyModal" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">x</button>
                                        <h4 id="myLargeModalLabel" class="modal-title">Privacy Policy</h4>
                                    </div>
                                    <div style="max-height: 500px; overflow-y: scroll;" class="modal-body">
                                        <p>	<b>1.Introduction.</b><br></p>
										<p>	
										Welcome to TAWKUR!  TAWKUR is a safe social platform designed for kids and governed by parents.  We provide Safe Social for Kids™, and confidence for parents, in the digital age.  
										</p><br><p>
										Tawkur LLC (“Tawkur”, “we” or “us”) is committed to protecting the privacy of children who use our applications, websites, software, content, products and services (together, “Tawkur Services”).  To help ensure a safe and rewarding online experience for users of the Tawkur Services, this Privacy Policy describes our information collection, use, and disclosure practices with respect to children under the age of 13 (“children” or a “child”).  Please read this Privacy Policy carefully to understand our practices.  If you do not agree with the practices described in this Privacy Policy, please do not use any of the Tawkur Services.  This Privacy Policy applies to all information collected, used, or disclosed in connection with the use of the Tawkur Services.
										</p><br><p>
										This Privacy Policy and our information collection practices are designed to comply with the provisions of the Children’s Online Privacy Protection Act (“COPPA”).  For additional information regarding COPPA, please visit the Federal Trade Commission’s website.
										</p><br>
										<p>	<b>2.	Information We Collect and How We Use It.</b></p>	
										<p>
										The Tawkur Services are primarily targeted towards children and include activities that may collect, use, and/or disclose personal information from users in connection with their use of the Tawkur Services.  Below is a summary of the potential instances of collection and an outline of how and when we will provide notice to, and seek parental consent of, a parent or legal guardian (“parent”) prior to collecting, using, or disclosing any personal information.  To the extent that we collect any personal information from children, we will retain that information only so long as reasonably necessary to fulfill the purpose of collecting such information, and ensure the security of our users and our services, or as required by law.  In the event that we discover that we have collected information from a child in a manner that is inconsistent with the requirements of this Privacy Policy or COPPA, we will either delete the information or immediately notify the parent and seek the appropriate consent for such collection.
										</p><br><br>
										<p>	
										A.	Registration.  
										</p>	
										<p>
										In connection with the use of the Tawkur Services, children can, and may be required to, register with our websites and mobile applications.  Such registration, however, is not necessarily required prior to exploring certain areas and content on our websites and mobile applications.  During the registration process, we may ask the child to provide certain information for notification and security purposes, including the child’s first name and a parent or guardian’s email address, as well as a username and password to establish the child’s profile.  We may also ask for birth dates to verify the age of the child.  We strongly advise that children never provide any personal information in their usernames.  Please note that children are not required to provide any personal information, but certain features of the Tawkur Services, such as the Tawkur messaging feature (“Tawkur Messaging”), cannot function without it.  Accordingly, children that do not provide the requested information may not have access to certain features of the Tawkur Services. 
										</p><br><p>
										Consistent with the requirements of COPPA, prior to collecting any personal information from a child, we will ask for a parent or guardian’s email address to obtain parental consent.  The only exception to this practice is the request of the child’s first name, username, and password, which are required to register with the Tawkur Services and the mobile application and to participate in Tawkur Messaging.  Children will not be able to participate in Tawkur Messaging until we have received consent from the child’s parent or legal guardian.  If you believe that your child is participating in an activity that collects personal information and you have not provided us with your consent to such participation, please feel free to contact us at privacy@tawkur.com.  We will not use the parent’s email address provided for consent purposes to market to the parent, unless the parent has expressly opted in to email marketing or has separately participated in an activity that allows for such email contact.  
										</p><p>	
										B.	Content Generated by a Child and Messaging.
										</p>	
										<p>
										Certain activities offered by the Tawkur Services, including Tawkur Messaging, permit children to create or manipulate content, including pictures or videos of a child, which may be shared to other users.  Tawkur Messaging will also permit children to directly communicate with one or more other registered users of the Tawkur Services for whom we have received parental consent.  We will not provide monitoring or pre-screening services prior to the child’s insertion of personal information into such content.  Accordingly, we will require parental consent prior to any child’s use of the Tawkur Messaging.  
										</p>
										<br><p>
										We may, however, use software that monitors all conversations within Tawkur Messaging for inappropriate words and phrases, such as profane language, and notifies via email, text messaging or another method of communication the parent of a child if content created by, or sent to, such child contained such information.  A parent will also have the ability to create alerts for certain words or phrases, which will notify the parent each time the their child creates any content containing those words or phrases (including name, address, or other personal information of a child) and permit the adult to edit or delete such information.   
										</p><br>
										<p>
										We strongly encourage parents and children using the Tawkur Services and Tawkur Messaging never to disclose personal information about themselves or a third party.  We also recommend that parents closely monitor their children’s use of the Tawkur Services and Tawkur Messaging. 
										</p>
										<p>	
										C.	Email Contact with Children.
										</p>	
										<p>
										On occasion, in order to respond to a question or request from a child, we may request a child’s online contact information, such as an email address.  Following our response to the question or request from the child, we will immediately remove this information from our records.
										</p><br><p>
										In connection with some of the activities within the Tawkur Services, we may request or collect a child’s online contact information, including an email address, in order to communicate with the child on future occasions.  This contact information will not be used for marketing purposes or sold to third parties, but may be used to provide updates about certain Tawkur Services or Tawkur Messaging.  A parent may choose to opt-out of this service and limit or prohibit us from contacting the parent’s child through email by following the procedures discussed in Section 3 of this Privacy Policy.
										</p>
										<p>	
										
										D.	Third Parties and Disclosure.
										</p>	
										<p>
										We do not permit children to publicly post any personal information (such as through social media sites or email messaging) through the Tawkur Services or the mobile app.  Children, however, may take and share screen shots of their activities or otherwise discuss their participation in the Tawkur Services or Tawkur Messaging through social media apps or email messages.  
										</p><br><p>
										We may also disclose personal information of children using the Tawkur Services to third parties under limited circumstances, including the following:
										</p><br>
										<ul>
										<li><p>	To our service providers when necessary to provide a professional, technology, or support function reasonably required to provide the Tawkur Services;</p>	 </li>
										<li><p>	To protect the integrity of our sites, applications, or other technology;</p>	</li>
										<li><p>	To enable use to take precautions against liability; </p>	</li><li>
										</li><li><p>	To facilitate the investigation related to public safety or to protect the safety of a child using the Tawkur Services; or </p>	</li>
										<li><p>	As permitted or required by law.</p>	</li>
										</ul>
										<b><p>3.	Parental Consent and Contact Information.</p></b><br>
										<p>	
										A parent will be provided with direct notice (the “Notice”) of this Privacy Policy and our information collection practices when the parent’s child registers a first name, username, and password.  Children will not be able to provide any additional personal information through the Tawkur Services before we receive parental consent.  The Notice will inform the parent of their rights with respect to our collection, use, and disclosure of the personal information of the parent’s child.  If the parent fails to consent within a reasonable time after receiving our request for consent, we will remove the parent’s contact information from our records.  Once provided, parental consent to our information collection practices may be revoked at any time with respect a particular username and associated account.  A Parent can also request that we edit or delete any personal information that we have collected, as well as request that we delete such information from our records.  
										</p><br><p>
										We will also maintain records of all chats and messages that are shared or exchanged by any of our registered users.  These records will be securely deleted from our records after a reasonable period of time and will not be shared with any third parties for any purposes, other than those disclosed in this Privacy Policy.  For a fee, a parent may obtain access to all such records to the extent and for the time period that we retain them.  Directions for obtaining these services are provided on the Tawkur website under our FAQ section.  Once removed from our records, neither we nor any parent will be able to access to such records.  Please also be aware the revocation of consent to our information collection practices may lead to the termination of your child’s ability to participate in the Tawkur Services.
										</p><br><p>
										A parent may use any of the methods described below if the parent wishes to obtain access, edit, or delete the personal information that we have collected from the parent’s child, or to opt out of any future email contact that we may have with the parent’s child:
										</p><br>
										<ol>
										<li><p>	A.	Visit the home page of the Tawkur site at www.tawkur.com and log into your account to review the chat and message logs that we have stored in our records for each child.  This may involve a fee;
										</p>	</li>
										<li><p>	B.	Log into the mobile application using the child’s username and password and edit any information contained in the child’s “My Profile” section; 
										</p>	</li>
										<li><p>	C.	Log into the parent account associated with the child’s account to review the chat and message logs that we have stored in our records.  This may involve a fee; or
										</p>	</li>
										<li><p>	D.	Contact Tawkur directly to request access to, change, or delete the personal information of the parent’s child by sending us an email at privacy@tawkur.com or by calling us at +1.312.470.8055.
										</p>	</li>
										</ol>
										
										
										<p>	Parents may also contact us by mail at:<br></p><p>	
										</p><p>	Tawkur LLC</p>	
											<p>	7144 N Harlem Ave</p>	
											<p>	Suite 198</p>	
											<p>	Chicago, IL  60631-1005</p>	
											<p>	Any correspondence regarding our information collection practices or this Privacy Policy should include the child’s username and the parent’s email address and telephone number.  To protect the privacy and security of children registered to use the Tawkur Services, we will take reasonable steps to help verify a parent’s identity before granting access to any child’s personal information.
										</p><p>	
										4.	Security.
										</p>	
										<p>	
										The security of the personal information that we collect is important to us.  Accordingly, we have established appropriate physical, electronic, and managerial procedures to safeguard and help prevent unauthorized access, maintain data security, and correctly use the information we collect online.  Anytime we transfer, use, or disclose the personal information we collect, consistent with the practices described in this Privacy Policy or permitted under COPPA, we will take reasonable steps to safeguard the privacy of that personal information.  
										</p>
										
										<p>
										The Tawkur Services are operated using servers and transmission infrastructure owned and operated by third parties and data is not necessarily encrypted in transit or at rest.  Although we use industry standard precautions to protect any and all information we collect from children, we cannot guarantee that such information will not be subject to such a security breach.  Any transmission of personal information is at your own risk.  We are not responsible for circumvention of any privacy settings or security measures we provide.
										</p><p>	
										5.	Changes to this Privacy Policy.</p>	
										
										<p>
										The terms of this Privacy Policy were last revised as of the date identified at the beginning of this Privacy Policy.  We may, from time to time and in our sole discretion, change the terms of this Privacy Policy or our information collection practices to accommodate new technologies, industry practices, regulatory requirements, or for other purposes.  We will provide you with notice of, and, when required by COPPA, obtain your consent to, any material changes to the terms of this Privacy Policy or our information collection practices.
										</p>
										<p>
										As required under COPPA, we will not collect, use, or disclose personal information in ways that are materially different from the practices described in this Privacy Policy.  If you believe that Tawkur has not responded to your inquiry or your inquiry has not be satisfactorily addressed, you may contact the United States Federal Trade Commission (FTC) through its online customer complaint form available at https://ftccomplaintassistant.gov/#crnt&amp;panel1-1.
										</p>
										<p>	
										<b>Children’s Online Privacy Protection Act (COPPA) Privacy Notice</b></p>	
										<p>Your child has entered information (their first name, username, password, and your email address) on the Tawkur website and / or mobile application in order to register a profile, and has identified you as his / her parent or legal guardian (“parent”).  Tawkur LLC’s (“Tawkur”, “we” or “our”) applications, websites, software, content, products and services (collectively the “Tawkur Services”) are designed to help ensure a safe and rewarding online experience for children of all ages.  Subject to our Terms of Use http://www.tawkur.com/Terms, Tawkur is the sole owner of all information that is collected through the use of the Tawkur Services and such information will be kept confidential in compliance with the Children’s Online Privacy Protection Act (COPPA).  Parents may review our complete privacy policy at http://www.tawkur.com/Privacy (“Privacy Policy”), which further discusses our information collection practices and your parental rights in greater detail.
										
										</p>
										<p>
										We received your email address in connection with your child’s registration of a username and password with the Tawkur Services, which is required to participate in certain features of the Tawkur Services, including a peer-to-peer messaging function (“Tawkur Messaging”).  Your child will not be able to provide, and we will not collect, any additional personal information through the Tawkur Services unless and until we have received your consent, as provided in this notice.  
										</p><br>
										<p>
										Once you provide your consent to your child’s use of the Tawkur Services, which consent may be revoked at any time, we may collect, use, or disclose certain personal information from your child, as described below:
										</p><br>
										<ol>
										<li><p>	We collect the first and last name of each of our registered child users, which is used for monitoring participation in the Tawkur Services, as well as other internal uses as described in our Privacy Policy.
										</p>	</li>
										<li><p>	Children may disclose personal information through their personal profile and through Tawkur Messaging, which information we will also collect and retain as a component of our record-keeping process.
										</p>	</li>
										<li><p>	We may contact you or your child through an email address for future purposes, including responding to requests from the child, providing notice of new or updated activities in the Tawkur Services, or providing other similar notifications.  You may deny or opt-out of any future contact with you or your child by following the procedures discussed below.
										</p>	</li>
										<li><p>	Except as provided in our Privacy Policy and required by law, we will not disclose any personal information to third parties, nor will we permit third parties to collect any personal information through the Tawkur Services or Tawkur Messaging, other than with other registered users of the Tawkur Services.
										</p>	</li>
										<li><p>	We will not require children to disclose more information than is reasonably necessary to participate in an activity.
										</p>	</li>
										<li><p>	For a fee, a parent may activate optional functionality permitting the review of any personal information that we collect, use, or disclose, including their child’s Tawkur Messaging conversation history.  A parent may revoke consent to such practices at any time, which may limit or prevent the child’s participation in the Tawkur Services.
										</p>	</li>
										<li><p>	If you do not respond to this notice within a reasonable time, we will permanently delete your contact information, and the account creation information provided by your child, from our records.
										</p>	</li>
										<ol>
										<br>
										<p>
										To provide your consent to our information collection practices as described in this Privacy Policy, you will need to make a one-time registration fee of $1.00 using either a credit card, debit card, or other online payment method.   The contact person for any inquiries regarding this notice, our information collection practices, or our Privacy Policy is provided below. If you wish to revoke or deny your consent, or if you wish to prohibit us from any future contact with your child through their email address, you may send us an email at privacy@tawkur.com.  The contact person for any inquiries regarding this notice, our information collection practices, or our Privacy Policy is:
										</p>
										<br>
											<p>	Tawkur LLC</p>	
											<p>	7144 N Harlem Ave</p>	
											<p>	Suite 198</p>	
											<p>	Chicago, IL  60631-1005</p>	
										
										
										
										</ol></ol>
                                    </div>
                                    <div class="modal-footer">
                                        <button data-dismiss="modal" class="btn-u btn-u-danger" type="button">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
		        </label>
		        <label class="checkbox">
		            <input type="checkbox"> 
		            <p>I understand the $1.00 <a target="_blank" data-toggle="modal" data-target=".coppaCompliance"><b>COPPA Compliance</b></a> fee</p>
		            <div class="modal fade coppaCompliance" tabindex="-1" role="dialog" aria-labelledby="coppaComplianceModal" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">x</button>
                                        <h4 id="myLargeModalLabel" class="modal-title">COPPA Compliance</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>  Thank you for joining the Tawkur family! Tawkur is a safe social platform designed for 
										kids and governed by parents. We provide Safe Social for Kids™, and confidence for 
										parents, in the digital age. </p> 
										 
										<p>Tawkur LLC is committed to protecting the privacy of children who use our applications. 
										To help ensure a safe and rewarding online experience, our Privacy Policy describes our 
										information collection, use, and disclosure practices with respect to children under the 
										age of 13. </p>
										 
										<p>This Privacy Policy and our information collection practices are designed to comply with 
										the provisions of the Children’s Online Privacy Protection Act (“COPPA”). </p>
										 
										<p>In order to comply with COPPA, we must obtain verifiable parental consent by making a 
										one-time charge of $1.00. Please review our Privacy Policy and then select Next to pay 
										the one-time fee confirming your consent. </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button data-dismiss="modal" class="btn-u btn-u-danger" type="button">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
		        </label>
		                                
		        <div class="row">
		            <div class="col-md-10 col-md-offset-1">
		                <button type="submit" class="btn-u btn-block">Register</button>                
		            </div>
		        </div>
			</form>
		</div>
	</div>
</div><!--/container-->
<!--=== End Content Part ===-->

<!--=== Scripts ===-->
<?php include '../mainContent/adminscripts.php';?>
<!-- Login/Registration -->
<script type="text/javascript">
    $.backstretch([
      "../assets/img/bg/5.jpg",
      "../assets/img/bg/4.jpg",
      ], {
        fade: 1000,
        duration: 7000
    });
</script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29166220-1']);
  _gaq.push(['_setDomainName', 'htmlstream.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        Masking.initMasking();
        Validation.initValidation();
    });
</script>
<!--=== End Scripts ===-->

</body>
</html> 
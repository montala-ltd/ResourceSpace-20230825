<?php
#
# simplesaml info page
#

include '../../../include/db.php';
include_once '../../../include/general.php';
include '../../../include/authenticate.php'; if (!checkperm('a')) {exit ($lang['error-permissiondenied']);}


include "../../../include/header.php";
?>
<div class="BasicsBox">

<style type="text/css">p{padding-bottom:0px;}.c20{font-size:15pt;color:#000000}.c16{font-style:italic;font-weight:bold}.c17{font-size:18pt;font-weight:bold}.c10{padding-top:8pt;padding-bottom:8pt}.c13{padding:0;margin:0}.c4{font-size:10pt;font-family:"Courier New"}.c1{font-family:"Calibri"}.c2{margin-left:36pt}.c18{page-break-after:avoid}.c19{color:#446644}.c8{padding-left:0pt}.c15{padding-top:3pt}.c14{text-align:right}.c7{background-color:#eeeeee}.c9{background-color:#ffff00}.c21{padding-top:14pt}.c6{height:11pt}.title{padding-top:0pt;color:#000000;font-size:26pt;padding-bottom:3pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}.subtitle{padding-top:0pt;color:#666666;font-size:15pt;padding-bottom:16pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}li{color:#000000;font-size:11pt;font-family:"Arial"}p{margin:0;color:#000000;font-size:11pt;font-family:"Arial"}h1{padding-top:20pt;color:#000000;font-size:20pt;padding-bottom:6pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h2{padding-top:18pt;color:#000000;font-size:16pt;padding-bottom:6pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h3{padding-top:16pt;color:#434343;font-size:14pt;padding-bottom:4pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h4{padding-top:14pt;color:#666666;font-size:12pt;padding-bottom:4pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h5{padding-top:12pt;color:#666666;font-size:11pt;padding-bottom:4pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h6{padding-top:12pt;color:#666666;font-size:11pt;padding-bottom:4pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;font-style:italic;orphans:2;widows:2;text-align:left}</style>

<h1 class="c0 c18"><a name="h.xqe0czpyrg8t"></a><span>ResourceSpace - Simplesaml plugin configuration</span></h1><p class="c0"><span class="c1">This plugin utilises the simplesamlphp application (</span><span class="c1 c11"><a class="c12" href="https://www.google.com/url?q=https://simplesamlphp.org/&amp;sa=D&amp;usg=AFQjCNGjuMdlDR4x3kifEWn57zqMNsCeMA">https://simplesamlphp.org/</a></span><span class="c1">). Please refer to the documentation for this project detailed configuration instructions</span></p><p class="c0 c6"><span class="c1"></span></p><p class="c0"><span class="c1">These instructions are very basic and assume that you already have a working IdP (Identity provider) that is compliant with SAML 2.0 or other supported standard. </span></p><p class="c0 c6"><span class="c1"></span></p><p class="c0"><span class="c1">&nbsp;</span><span>To enable the web directory of simplesaml (plugins/simplesaml/lib/www). This is useful for decoding metadata for use in config files and retrieving metadata that can be used by the IdP..</span></p><p class="c0"><span class="c1">&nbsp; </span></p><ol class="c13 lst-kix_ouatfrwgzrbv-0 start" start="1"><li class="c0 c2 c8"><span class="c1">Copy the sample configuration files from </span><span class="c16 c1">plugins/simplesaml/lib/config-templates/</span><span class="c1"> to </span><span class="c16 c1"> plugins/simplesaml/lib/config/</span><span class="c1"> and the sample metadata files from </span><span class="c16 c1">plugins/simplesaml/lib/metadata-templates/</span><span class="c1"> to </span><span class="c16 c1"> plugins/simplesaml/lib/metadata/</span></li></ol>
<ol class="c13 lst-kix_ouatfrwgzrbv-0 start" start="2"><li class="c0 c2 c8"><span class="c1">Ensure the password, email contact and secret salt are changed in </span><span class="c16 c1">plugins/simplesaml/lib/config/config.php</span><span class="c1">&nbsp;as below</span></li></ol><p class="c0 c2"><span class="c1">&nbsp;</span></p><p class="c0 c2"><span class="c4">&nbsp;* This password must be kept secret, and modified from the default value 123.</span></p><p class="c0 c2"><span class="c4">&nbsp;* This password will give access to the installation page of simpleSAMLphp with</span></p><p class="c0 c2"><span class="c4">&nbsp;* metadata listing and diagnostics pages.</span></p><p class="c0 c2"><span class="c4">&nbsp;* You can also put a hash here; run "bin/pwgen.php" to generate one.</span></p><p class="c0 c2"><span class="c4">&nbsp;*/</span></p><p class="c0 c2"><span class="c4 c9">'auth.adminpassword' &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;=&gt; 'Please_Change_Me',</span></p><p class="c0 c2"><span class="c4">'admin.protectindexpage' &nbsp; &nbsp; &nbsp; &nbsp;=&gt; true,</span></p><p class="c0 c2"><span class="c4">'admin.protectmetadata' &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;=&gt; true,</span></p><p class="c0 c2"><span class="c4">&nbsp;</span></p><p class="c0 c2"><span class="c4">/**</span></p><p class="c0 c2"><span class="c4">&nbsp;* This is a secret salt used by simpleSAMLphp when it needs to generate a secure hash</span></p><p class="c0 c2"><span class="c4">&nbsp;* of a value. It must be changed from its default value to a secret value. The value of</span></p><p class="c0 c2"><span class="c4">&nbsp;* 'secretsalt' can be any valid string of any length.</span></p><p class="c0 c2"><span class="c4">&nbsp;*</span></p><p class="c0 c2"><span class="c4">&nbsp;* A possible way to generate a random salt is by running the following command from a unix shell:</span></p><p class="c0 c2"><span class="c4">&nbsp;* tr -c -d '0123456789abcdefghijklmnopqrstuvwxyz' &lt;/dev/urandom | dd bs=32 count=1 2&gt;/dev/null;echo</span></p><p class="c0 c2"><span class="c4">&nbsp;*/</span></p><p class="c0 c2"><span class="c4 c9">'secretsalt' =&gt; 'pfm9xrt0hc87notrealkey09eeqf0a44',</span></p><p class="c0 c2"><span class="c4">&nbsp;</span></p><p class="c0 c2"><span class="c4">/*</span></p><p class="c0 c2"><span class="c4">&nbsp;* Some information about the technical persons running this installation.</span></p><p class="c0 c2"><span class="c4">&nbsp;* The email address will be used as the recipient address for error reports, and</span></p><p class="c0 c2"><span class="c4">&nbsp;* also as the technical contact in generated metadata.</span></p><p class="c0 c2"><span class="c4">&nbsp;*/</span></p><p class="c0 c2"><span class="c4 c9">'technicalcontact_name' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&gt; 'ResourceSpace Administrator',</span></p><p class="c0 c2"><span class="c4 c9">'technicalcontact_email'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&gt; 'admin@localhost',</span></p><p class="c0 c2"><span class="c1">&nbsp;</span></p><p class="c0 c2"><span class="c1">&nbsp;</span></p><p class="c0 c2"></p><ol class="c13 lst-kix_ouatfrwgzrbv-0 start" start="3">
  <li class="c0 c2 c8">
  <span class="c1">Unzip the</span><span class="c1"><a class="c12" href="https://www.google.com/url?q=http://www.zip&amp;sa=D&amp;usg=AFQjCNFahwxsw4XMkIo_OVHUit3Yx-fIiQ">&nbsp;</a></span><span class="c11 c1">www.zip</span><span class="c1">&nbsp;directory </span></li></ol>
<p></p><p></p><p class="c0"><span class="c1">&nbsp;</span></p><p class="c0"><span class="c1">&nbsp;</span></p><h2 class="c0 c18"><a name="h.16gz4xdpf4nf"></a><span>To configure the plugin</span></h2><p class="c0"><span class="c1">&nbsp;</span></p><ol class="c13 lst-kix_my4xtzfln29x-0 start" start="1"><li class="c0 c2 c8"><span class="c1">Edit </span><span class="c16 c1">plugins/simplesaml/lib/config/config.php</span></li><li class="c0 c2 c8"><span class="c1">Select the technology you want to use by setting values to true or false as below</span></li></ol><p class="c0"><span class="c1">&nbsp;</span></p><p class="c0 c2"><span class="c4">&nbsp;* Enable</span></p><p class="c0 c2"><span class="c4">&nbsp;*</span></p><p class="c0 c2"><span class="c4">&nbsp;* Which functionality in simpleSAMLphp do you want to enable. Normally you would enable only</span></p><p class="c0 c2"><span class="c4">&nbsp;* one of the functionalities below, but in some cases you could run multiple functionalities.</span></p><p class="c0 c2"><span class="c4">&nbsp;* In example when you are setting up a federation bridge.</span></p><p class="c0 c2"><span class="c4">&nbsp;*</span><span class="c4">/</span></p><p class="c0 c2"><span class="c4 c9">'enable.saml20-idp' &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;=&gt; true,</span></p><p class="c0 c2"><span class="c4 c9">'enable.shib13-idp' &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;=&gt; false,</span></p><p class="c0 c2"><span class="c4 c9">'enable.adfs-idp' &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;=&gt; false,</span></p><p class="c0 c2"><span class="c4 c9">'enable.wsfed-sp' &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;=&gt; false,</span></p><p class="c0 c2"><span class="c4 c9">'enable.authmemcookie' =&gt; false,</span></p><p class="c0"><span class="c1">&nbsp;</span></p><ol class="c13 lst-kix_my4xtzfln29x-0 start" start="3"><li class="c0 c2 c8" <p=""><span class="c1">Change this if necessary</span><p></p>
</li></ol><p class="c0"><span class="c1">&nbsp;</span></p><p class="c0 c2"><span class="c4">&nbsp;* A directory where simpleSAMLphp can save temporary files.</span></p><p class="c0 c2"><span class="c4">&nbsp;*</span></p><p class="c0 c2"><span class="c4">&nbsp;* SimpleSAMLphp will attempt to create this directory if it doesn't exist.</span></p><p class="c0 c2"><span class="c4">&nbsp;*/</span></p><p class="c0 c2"><span class="c4">'tempdir' &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&gt; 'resourcespace/filestore/tmp/simplesaml',</span></p><p class="c0 c6"><span class="c1"></span></p>

<ol class="c13 lst-kix_my4xtzfln29x-0 start" start="4"><li class="c0 c2 c8" <p=""><span class="c1">Edit the file </span><span class="c16 c1">plugins/simplesaml/lib/config/authsources.php.</span><span class="c1"> as per the instructions that follow</span><p></p>
</li></ol><p class="c0 c6"><span class="c16 c1"></span></p><p class="c0"><span class="c1">The following information is from </span><span class="c11"><a class="c12" href="https://www.google.com/url?q=https://simplesamlphp.org/docs/1.5/simplesamlphp-sp&amp;sa=D&amp;usg=AFQjCNGxGRQRp4gbonWR-YqjZMJy4u4uXw">https://simplesamlphp.org/docs/1.5/simplesamlphp-sp</a>.</span></p><p class="c0 c6"><span></span></p><h2 class="c0 c3"><a name="h.80qyk1bffeze"></a><span class="c17 c1">1 Configuring the SP</span></h2><p class="c0 c10"><span class="c1">The SP is configured by an entry in config/authsources.php.</span></p><p class="c0 c10"><span class="c1">This is a minimal authsources.php for a SP:</span></p><p class="c0 c2"><span class="c4 c0">&lt;?php<br>$config = array(<br><br> &nbsp; &nbsp;/* This is the name of this authentication source, and will be used to access it later. */<br> &nbsp; &nbsp;'default-sp' =&gt; array(<br> &nbsp; &nbsp; &nbsp; &nbsp;'saml:SP',<br> &nbsp; &nbsp;),<br>);<br></span></p><p class="c0 c10"><span class="c1">For more information about additional options available for the SP, see the </span><span class="c1 c19 c0"><a class="c12" href="https://www.google.com/url?q=https://simplesamlphp.org/docs/1.5/saml:sp&amp;sa=D&amp;usg=AFQjCNHQ1OTu3H0Hqb8988IduaheCK022A">saml:SP reference</a></span><span class="c1">.</span></p><p class="c0 c10"><span class="c1">If you want mulitple Service Providers in the same site and installation, you can add more entries in the authsources.php configuration. If so remember to set the EntityID explicitly. Here is an example:</span></p><p class="c0 c2"><span class="c4 c0">'sp1' =&gt; array(<br> &nbsp; &nbsp;'saml:SP',<br> &nbsp; &nbsp;'entityID' =&gt; 'https://sp1.example.org/',<br>),<br>'sp2' =&gt; array(<br> &nbsp; &nbsp;'saml:SP',<br> &nbsp; &nbsp;'entityID' =&gt; 'https://sp2.example.org/',<br>),<br></span></p><h3 class="c0 c21"><a name="h.fdmh47km05mn"></a><span class="c1 c20">1.1 Enabling a certificate for your Service Provider</span></h3><p class="c0 c10"><span class="c1">Some Identity Providers / Federations may require that your Service Providers holds a certificate. If you enable a certificate for your Service Provider, it may be able to sign requests and response sent to the Identity Provider, as well as receiving encrypted responses.</span></p><p class="c0 c10"><span class="c1">Create a self-signed certificate in the cert/ directory.</span></p><p class="c0"><span class="c4 c0">cd cert<br>openssl req -new -x509 -days 3652 -nodes -out saml.crt -keyout saml.pem<br></span></p><p class="c0 c10"><span class="c1">Then edit your authsources.php entry, and add references to your certificate:</span></p><p class="c0"><span class="c4 c0">'default-sp' =&gt; array(<br> &nbsp; &nbsp;'saml:SP',<br> &nbsp; &nbsp;'privatekey' =&gt; 'saml.pem',<br> &nbsp; &nbsp;'certificate' =&gt; 'saml.crt',<br>),<br></span></p><h2 class="c0 c3"><a name="h.y0bfjdd7h6ac"></a><span class="c17 c1">2 Adding IdPs to the SP</span></h2><p class="c0 c10"><span class="c1">The service provider you are configuring needs to know about the identity providers you are going to connect to it. This is configured by metadata stored in metadata/saml20-idp-remote.php and metadata/shib13-idp-remote.php. This is a minimal example of a metadata/saml20-idp-remote.php metadata file:</span></p><p class="c0"><span class="c1 c7">&lt;?php<br>$metadata['https://openidp.feide.no'] = array(<br> &nbsp; &nbsp;'SingleSignOnService' &nbsp;=&gt; 'https://openidp.feide.no/simplesaml/saml2/idp/SSOService.php',<br> &nbsp; &nbsp;'SingleLogoutService' &nbsp;=&gt; 'https://openidp.feide.no/simplesaml/saml2/idp/SingleLogoutService.php',<br> &nbsp; &nbsp;'certFingerprint' &nbsp; &nbsp; &nbsp;=&gt; 'c9ed4dfb07caf13fc21e0fec1572047eb8a7a4cb',<br>);<br></span></p><p class="c0 c10"><span class="c1">For more information about available options in the idp-remote metadata files, see the </span><span class="c1 c19"><a class="c12" href="https://www.google.com/url?q=https://simplesamlphp.org/docs/1.5/simplesamlphp-reference-idp-remote&amp;sa=D&amp;usg=AFQjCNFwZ71fWP9YNWU6WGwU8WzX_YIw1Q">IdP remote reference</a></span><span class="c1">.</span></p><p class="c0 c10"><span class="c1">If you have the metadata of the remote IdP as an XML file, you can use the built-in XML to simpleSAMLphp metadata converter, which by default is available as /admin/metadata-converter.php in your simpleSAMLphp installation.</span></p><p class="c0 c10"><span class="c1">Note that the idp-remote file lists all IdPs you trust. You should remove all IdPs that you don't use.</span></p><h2 class="c0 c3"><a name="h.b5wpus22x53e"></a><span class="c1 c17">3 Setting the default IdP</span></h2><p class="c0 c10"><span class="c1">An option in the authentication source allows you to configure which IdP should be used. This is the idp option.</span></p><p class="c0"><span class="c1 c7">&lt;?php<br>$config = array(<br><br> &nbsp; &nbsp;'default-sp' =&gt; array(<br> &nbsp; &nbsp; &nbsp; &nbsp;'saml:SP',<br><br> &nbsp; &nbsp; &nbsp; &nbsp;/*<br> &nbsp; &nbsp; &nbsp; &nbsp; * The entity ID of the IdP this should SP should contact.<br> &nbsp; &nbsp; &nbsp; &nbsp; * Can be NULL/unset, in which case the user will be shown a list of available IdPs.<br> &nbsp; &nbsp; &nbsp; &nbsp; */<br> &nbsp; &nbsp; &nbsp; &nbsp;'idp' =&gt; 'https://openidp.feide.no',<br> &nbsp; &nbsp;),<br>);<br></span></p><h2 class="c0 c3"><a name="h.z58hd5x0tdn2"></a><span class="c17 c1">4 Exchange metadata with the IdP</span></h2><p class="c0 c10"><span class="c1">If you do not have setup an IdP yourself, you could use the Feide OpenIdP to verify your Service Provider setup. The metadata for Feide OpenIdP is already included in the metadata distributed with simpleSAMLphp, so you can copy the metadata from metadata-templates where Feide OpenIdP is included.</span></p><p class="c0 c10"><span class="c1">But, in order to complete the connection between your SP and Feide OpenIdP, it is not sufficient that you have configured metadata for Feide OpenIdP. Feide OpenIdP also needs to add metadata for your SP.</span></p><p class="c0 c10"><span class="c1">Copy the SAML 2.0 XML Metadata document automcatically generated by simpleSAMLphp (as described below), and go to the OpenIdP Metadata Self-Service Registry:</span></p><ul class="c13 lst-kix_67xjkxh843fy-0 start"><li class="c0 c2 c8 c15"><span class="c1 c19"><a class="c12" href="https://www.google.com/url?q=https://openidp.feide.no/simplesaml/module.php/metaedit/index.php&amp;sa=D&amp;usg=AFQjCNF6u3AfVd6UzRqlh3xloA5SjlmWlA">Feide OpenIdP Metadata Self-Service Registry</a></span></li></ul><p class="c0 c10"><span class="c1">You need to login with an OpenIdP account to authenticate (you can create a new account if you do not have one already). Next, click the link 'Add from SAML 2.0 XML metadata', and paste in your SAML 2.0 XML Metadata, give it a proper name and description and click 'save'. Now you can test the SAML 2.0 Example on your SP, and try to login with Feide OpenIdP.</span></p><p class="c0 c10"><span class="c1">Before you can run the test examples, you need the people running the IdP to load the metadata for your SP. This metadata can be generated automatically. Links to the generated metadata can be found under the Metadata-tab on the front page.</span></p><h2 class="c0 c3"><a name="h.ijqdjuigu5wl"></a><span class="c17 c1">5 Test the SP</span></h2><p class="c0 c10"><span class="c1">After the metadata is is configured on the IdP, you should be able to test the configuration. The installation page of simpleSAMLphp has a link to test authentication sources. When you click the link, you should receive a list of authentication sources, including the one you have created for the SP.</span></p><p class="c0 c10"><span class="c1">After you click the link for that authentication source, you will be redirected to the IdP. After entering your credentials, you should be redirected back to the test page. The test page should contain a list of your attributes:</span></p><p class="c0 c6"><span></span></p><p class="c0 c6"><span></span></p><p class="c0 c6"><span></span></p>

</div>
<?php

include '../../../include/footer.php';

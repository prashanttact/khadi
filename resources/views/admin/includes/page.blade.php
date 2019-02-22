@include('admin/includes/header')
<?php if(@$data['slug']=='homepage'){?>
@include('admin/page/homepage')
<?php }
elseif(@$data['slug']=='about-us'){?>
@include('admin/page/aboutus')
<?php }
elseif(@$data['slug']=='contact-us'){?>
@include('admin/page/contactus')
<?php }
elseif(@$data['slug']=='disclaimer'){?>
@include('admin/page/disclaimer')
<?php }
elseif(@$data['slug']=='privacy-policy'){?>
@include('admin/page/privacy_policy')
<?php }
elseif(@$data['slug']=='terms-condition'){?>
@include('admin/page/terms_condition')
<?php }
elseif(@$data['slug']=='faq'){?>
@include('admin/page/faq')
<?php }
else{?>
@include($data['template'])
<?php }?>




@include('admin/includes/footer')


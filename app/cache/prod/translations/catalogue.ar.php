<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ar', array (
  'validators' => 
  array (
    'This value should be false.' => 'هذه القيمة يجب أن تكون خاطئة.',
    'This value should be true.' => 'هذه القيمة يجب أن تكون حقيقية.',
    'This value should be of type {{ type }}.' => 'هذه القيمة يجب ان تكون من نوع {{ type }}.',
    'This value should be blank.' => 'هذه القيمة يجب ان تكون فارغة.',
    'The value you selected is not a valid choice.' => 'القيمة المختارة ليست خيارا صحيحا.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'يجب ان تختار {{ limit }} اختيار على الاقل.|يجب ان تختار {{ limit }} اختيار على الاقل.|يجب ان تختار {{ limit }} اختيارات على الاقل.|يجب ان تختار {{ limit }} اختيار على الاقل.|يجب ان تختار {{ limit }} اختيار على الاقل.|يجب ان تختار {{ limit }} اختيار على الاقل.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'يجب ان تختار {{ limit }} اختيار على الاكثر.|يجب ان تختار {{ limit }} اختيار على الاكثر.|يجب ان تختار {{ limit }} اختيارات على الاكثر.|يجب ان تختار {{ limit }} اختيار على الاكثر.|يجب ان تختار {{ limit }} اختيار على الاكثر.|يجب ان تختار {{ limit }} اختيار على الاكثر.',
    'One or more of the given values is invalid.' => 'واحد أو أكثر من القيم المعطاه خاطئ.',
    'The fields {{ fields }} were not expected.' => 'القيم {{ fields }} لم تكن متوقعة.',
    'The fields {{ fields }} are missing.' => 'القيم {{ fields }} مفقودة.',
    'This value is not a valid date.' => 'هذه القيمة ليست تاريخا صالحا.',
    'This value is not a valid datetime.' => 'هذه القيمة ليست تاريخا و وقتا صالحا.',
    'This value is not a valid email address.' => 'هذه القيمة ليست عنوان بريد إلكتروني صحيح.',
    'The file could not be found.' => 'لا يمكن العثور على الملف.',
    'The file is not readable.' => 'الملف غير قابل للقراءة.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'الملف كبير جدا ({{ size }} {{ suffix }}).اقصى مساحه مسموح بها ({{ limit }} {{ suffix }}).',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'نوع الملف غير صحيح ({{ type }}). الانواع المسموح بها هى {{ types }}.',
    'This value should be {{ limit }} or less.' => 'هذه القيمة يجب ان تكون {{ limit }} او اقل.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'هذه القيمة طويلة جدا. يجب ان تكون {{ limit }} حرف او اقل.|هذه القيمة طويلة جدا. يجب ان تكون {{ limit }} حرف او اقل.|هذه القيمة طويلة جدا. يجب ان تكون {{ limit }} حروف او اقل.|هذه القيمة طويلة جدا. يجب ان تكون {{ limit }} حرف او اقل.|هذه القيمة طويلة جدا. يجب ان تكون {{ limit }} حرف او اقل.|هذه القيمة طويلة جدا. يجب ان تكون {{ limit }} حرف او اقل.',
    'This value should be {{ limit }} or more.' => 'هذه القيمة يجب ان تكون {{ limit }} او اكثر.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'هذه القيمة قصيرة جدا. يجب ان تكون {{ limit }} حرف او اكثر.|هذه القيمة قصيرة جدا. يجب ان تكون {{ limit }} حرف او اكثر.|هذه القيمة قصيرة جدا. يجب ان تكون {{ limit }} حروف او اكثر.|هذه القيمة قصيرة جدا. يجب ان تكون {{ limit }} حرف او اكثر.|هذه القيمة قصيرة جدا. يجب ان تكون {{ limit }} حرف او اكثر.|هذه القيمة قصيرة جدا. يجب ان تكون {{ limit }} حرف او اكثر.',
    'This value should not be blank.' => 'هذه القيمة يجب الا تكون فارغة.',
    'This value should not be null.' => 'هذه القيمة يجب الا تكون فارغة.',
    'This value should be null.' => 'هذه القيمة يجب ان تكون فارغة.',
    'This value is not valid.' => 'هذه القيمة غير صحيحة.',
    'This value is not a valid time.' => 'هذه القيمة ليست وقت صحيح.',
    'This value is not a valid URL.' => 'هذه القيمة ليست رابط الكترونى صحيح.',
    'The two values should be equal.' => 'القيمتان يجب ان تكونا متساويتان.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'الملف كبير جدا. اقصى مساحه مسموح بها {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'الملف كبير جدا.',
    'The file could not be uploaded.' => 'لم استطع استقبال الملف.',
    'This value should be a valid number.' => 'هذه القيمة يجب ان تكون رقم.',
    'This file is not a valid image.' => 'هذا الملف ليس صورة صحيحة.',
    'This is not a valid IP address.' => 'هذه القيمة ليست عنوان رقمى صحيح.',
    'This value is not a valid language.' => 'هذه القيمة ليست لغة صحيحة.',
    'This value is not a valid locale.' => 'هذه القيمة ليست موقع صحيح.',
    'This value is not a valid country.' => 'هذه القيمة ليست بلدا صالحا.',
    'This value is already used.' => 'هذه القيمة مستخدمة بالفعل.',
    'The size of the image could not be detected.' => 'لم استطع معرفة حجم الصورة.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'عرض الصورة كبير جدا ({{ width }}px). اقصى عرض مسموح به هو{{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'عرض الصورة صغير جدا ({{ width }}px). اقل عرض مسموح به هو{{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'طول الصورة كبير جدا ({{ height }}px). اقصى طول مسموح به هو{{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'طول الصورة صغير جدا ({{ height }}px). اقل طول مسموح به هو{{ min_height }}px.',
    'This value should be the user current password.' => 'هذه القيمة يجب ان تكون كلمة سر المستخدم الحالية.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'هذه القيمة يجب ان تحتوى على {{ limit }} حرف فقط.|هذه القيمة يجب ان تحتوى على {{ limit }} حرف فقط.|هذه القيمة يجب ان تحتوى على {{ limit }} حروف فقط.|هذه القيمة يجب ان تحتوى على {{ limit }} حرف فقط.|هذه القيمة يجب ان تحتوى على {{ limit }} حرف فقط.|هذه القيمة يجب ان تحتوى على {{ limit }} حرف فقط.',
    'The file was only partially uploaded.' => 'تم استقبال جزء من الملف فقط.',
    'No file was uploaded.' => 'لم يتم ارسال اى ملف.',
    'No temporary folder was configured in php.ini.' => 'لم يتم تهيئة حافظة مؤقتة فى ملف php.ini.',
    'Cannot write temporary file to disk.' => 'لم استطع كتابة الملف المؤقت.',
    'A PHP extension caused the upload to fail.' => 'احد اضافات PHP تسببت فى فشل استقبال الملف.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اكثر.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اكثر.|هذه المجموعة يجب ان تحتوى على {{ limit }} عناصر او اكثر.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اكثر.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اكثر.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اكثر.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اقل.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اقل.|هذه المجموعة يجب ان تحتوى على {{ limit }} عناصر او اقل.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اقل.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اقل.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اقل.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر فقط.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر فقط.|هذه المجموعة يجب ان تحتوى على {{ limit }} عناصر فقط.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر فقط.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر فقط.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر فقط.',
    'Invalid card number.' => 'رقم البطاقه غير صحيح.',
    'Unsupported card type or invalid card number.' => 'نوع البطاقه غير مدعوم او الرقم غير صحيح.',
    'This is not a valid International Bank Account Number (IBAN).' => 'الرقم IBAN (رقم الحساب المصرفي الدولي) الذي تم إدخاله غير صالح.',
    'This value is not a valid ISBN-10.' => 'هذه القيمة ليست ISBN-10 صالحة.',
    'This value is not a valid ISBN-13.' => 'هذه القيمة ليست ISBN-13 صالحة.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'هذه القيمة ليست ISBN-10 صالحة ولا ISBN-13 صالحة.',
    'This value is not a valid ISSN.' => 'هذه القيمة ليست ISSN صالحة.',
    'This value is not a valid currency.' => 'العُملة غير صحيحة.',
    'This value should be equal to {{ compared_value }}.' => 'القيمة يجب ان تساوي {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'القيمة يجب ان تكون اعلي من {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'القيمة يجب ان تكون مساوية او اعلي من {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'القيمة يجب ان تطابق {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'القيمة يجب ان تكون اقل من {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'القيمة يجب ان تساوي او تقل عن {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'القيمة يجب ان لا تساوي {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'القيمة يجب ان لا تطابق {{ compared_value_type }} {{ compared_value }}.',
    'This form should not contain extra fields.' => 'هذا النموذج يجب الا يحتوى على اى حقول اضافية.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'مساحة الملف المرسل كبيرة. من فضلك حاول ارسال ملف اصغر.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'قيمة رمز الموقع غير صحيحة. من فضلك اعد ارسال النموذج.',
    'fos_user.username.already_used' => 'الإسم المختار مسجل مسبقا',
    'fos_user.username.blank' => 'يرجى تعيين إسم المستخدم',
    'fos_user.username.short' => '[-Inf,Inf] إسم المستخدم قصير جدا',
    'fos_user.username.long' => '[-Inf,Inf] إسم المستخدم طويل جدا',
    'fos_user.email.already_used' => 'البريد الإلكتروني مسجل مسبقا',
    'fos_user.email.blank' => 'يرجى تعين البريد الإلكتروني',
    'fos_user.email.short' => '[-Inf,Inf] البريد الإلكتروني قصير',
    'fos_user.email.long' => '[-Inf,Inf] البريد الإلكتروني طويل',
    'fos_user.email.invalid' => 'البريد الإلكتروني غير صحيح',
    'fos_user.password.blank' => 'يرجى تعيين كلمة المرور',
    'fos_user.password.short' => '[-Inf,Inf]كلمة المرور قصيرة',
    'fos_user.password.mismatch' => 'كلمة المرور المدخلة غير مطابقة للكلمة الأصلية',
    'fos_user.new_password.blank' => 'يرجى تعيين كلمة مرور جديدة',
    'fos_user.new_password.short' => '[-Inf,Inf] كلمة المرور الجديدة قصيرة',
    'fos_user.current_password.invalid' => 'كلمة المرور المدخلة غير صحيحة',
    'fos_user.group.blank' => 'يرجى تعيين إسم المجموعة',
    'fos_user.group.short' => '[-Inf,Inf] إسم المجموعة طويل جدا',
    'fos_user.group.long' => '[-Inf,Inf] إسم المجموعة قصير جدا',
    'Ride From cannot be empty' => 'من فضلك قم بادخال مكان التوصيله (من)',
    'Ride To cannot be empty' => 'من فضلك قم بادخال مكان التوصيله (الى)',
    'Departure Date cannot be empty' => 'من فضلك قم بادخال تاريخ المغادرة ',
    'Price cannot be empty' => 'من فضلك قم بادخال اجرة الراكب',
    'Available Seats cannot be empty' => 'من فضلك قم بادخال عدد المقاعد',
    'Ride Type cannot be empty' => 'من فضلك قم بادخال نوع التوصيله',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'حدث خطأ اثناء الدخول.',
    'Authentication credentials could not be found.' => 'لم استطع العثور على معلومات الدخول.',
    'Authentication request could not be processed due to a system problem.' => 'لم يكتمل طلب الدخول نتيجه عطل فى النظام.',
    'Invalid credentials.' => 'معلومات الدخول خاطئة.',
    'Cookie has already been used by someone else.' => 'ملفات تعريف الارتباط(cookies) تم استخدامها من قبل شخص اخر.',
    'Not privileged to request the resource.' => 'ليست لديك الصلاحيات الكافية لهذا الطلب.',
    'Invalid CSRF token.' => 'رمز الموقع غير صحيح.',
    'Digest nonce has expired.' => 'انتهت صلاحية(digest nonce).',
    'No authentication provider found to support the authentication token.' => 'لا يوجد معرف للدخول يدعم الرمز المستخدم للدخول.',
    'No session available, it either timed out or cookies are not enabled.' => 'لا يوجد صلة بينك و بين الموقع اما انها انتهت او ان متصفحك لا يدعم خاصية ملفات تعريف الارتباط (cookies).',
    'No token could be found.' => 'لم استطع العثور على الرمز.',
    'Username could not be found.' => 'لم استطع العثور على اسم الدخول.',
    'Account has expired.' => 'انتهت صلاحية الحساب.',
    'Credentials have expired.' => 'انتهت صلاحية معلومات الدخول.',
    'Account is disabled.' => 'الحساب موقوف.',
    'Account is locked.' => 'الحساب مغلق.',
  ),
  'FOSUserBundle' => 
  array (
    'Bad credentials' => 'إسم المستخدم او كلمة المرور غير صحيحة',
    'group.edit.submit' => 'تحديث المجموعة',
    'group.show.name' => 'إسم المجموعة',
    'group.new.submit' => 'إنشاء مجموعة',
    'group.flash.updated' => 'تم تحديث المجموعة',
    'group.flash.created' => 'تم إنشاء المجموعة',
    'group.flash.deleted' => 'تم حـذف المجموعة',
    'security.login.username' => 'إسم المستخدم:',
    'security.login.password' => 'كلمة المرور:',
    'security.login.remember_me' => 'حفظ البيانات',
    'security.login.submit' => 'تسجيل دخول',
    'profile.show.username' => 'إسم المستخدم',
    'profile.show.email' => 'بريد إلكتروني',
    'profile.edit.submit' => 'تحديث',
    'profile.flash.updated' => 'تم تحديث الملف الشخصي',
    'change_password.submit' => 'تغيير كلمة المرور',
    'change_password.flash.success' => 'تم تغيير كلمة المرور',
    'registration.check_email' => 'لقد تم إرسال رسالة إلكترونية إلى %email% تحتوي على رابط يجب إتباعه لتفعيل حسابك الشخصي.',
    'registration.confirmed' => 'تهانينا %username%، لقد تم تفعيل حسابك.',
    'registration.back' => 'عودة إلى الصفحة الرئيسية',
    'registration.submit' => 'تسجيل',
    'registration.flash.user_created' => 'تم إنشاء حسابك بنجاح',
    'registration.email.subject' => '%username%! مرحبا',
    'registration.email.message' => 'مرحبا %username%!


 لتفعيل حسابك يرجى إتباع الرابط التالي %confirmationUrl%

شكرا،
فريق العمل.
',
    'resetting.password_already_requested' => 'لقد تم طلب كلمة المرور لهذا المستخدم خلال ال ٢٤ ساعة الماضية',
    'resetting.check_email' => 'لقد تم إرسال رسالة إلكترونية إلى %email%  يحتوي على رابط يجب إتباعه لإعادة تعيين كلمة المرور الخاصة بك.',
    'resetting.request.invalid_username' => 'إسم المستخدم او  البريد الالكتروني "%username%" غير موجود',
    'resetting.request.username' => 'إسم المستخدم او البريد الالكتروني:',
    'resetting.request.submit' => 'إعادة ضبط كلمة المرور',
    'resetting.reset.submit' => 'تغيير كلمة المرور',
    'resetting.flash.success' => 'تم إعادة ضبط كلمة المرور بنجاح',
    'resetting.email.subject' => 'إعادة ضبط كلمة المرور',
    'resetting.email.message' => 'مرحبا %username%!

لإعادة ضبط كلمة المرور يرجى إتباع الرابط التالي %confirmationUrl%

شكرا،
فريق العمل.
',
    'layout.logout' => 'خروج',
    'layout.login' => 'دخول',
    'layout.register' => 'تسجيل',
    'layout.logged_in_as' => 'تم الدخول بإسم %username%',
    'form.group_name' => 'إسم المجموعة :',
    'form.username' => 'إسم المستخدم :',
    'form.email' => 'البريد الإلكتروني :',
    'form.current_password' => 'كلمة المرور الحالية :',
    'form.password' => 'كلمة المرور :',
    'form.password_confirmation' => 'تأكيد :',
    'form.new_password' => 'كلمة المرور الجديدة :',
    'form.new_password_confirmation' => 'تأكيد كلمة المرور :',
  ),
  'messages' => 
  array (
    'Account Information Updated Successfully' => 'تم تعديل بياناتك الشخصية بنجاح',
  ),
));


return $catalogue;

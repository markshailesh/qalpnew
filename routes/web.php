<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Fronted Routes*/

Route::get('/', 'FrontController@index')->name('frontend');

Route::get('search','FrontController@search');
Route::get('/search_tutor_data', 'FrontController@search_tutor_data');
Route::get('/search_student_data', 'FrontController@search_student_data');

Route::get('/about', 'FrontController@about');
Route::get('/post_requirements', 'FrontController@post_requirements');
Route::get('/apply_for_job', 'FrontController@apply_for_job');
Route::get('/timeline_and_blog', 'FrontController@blog');
Route::get('/blog-details/{id}', 'FrontController@blog_details');
Route::get('/tutor-details/{id}', 'FrontController@tutor_details');
Route::get('/best-and-professional-home-tutor', 'FrontController@search_tutor');
Route::get('/home-tutor/{id}', 'FrontController@teacher_details');
Route::post('/dashboard/store_review', 'FrontController@store_review')->name('store_review');
Route::post('/s_new_req', 'FrontController@s_new_req')->name('s_new_req');
Route::post('/need_help', 'FrontController@need_help')->name('need_help');
Route::get('/student_details/{id}', 'FrontController@student_details');
Route::get('/sign_in', 'FrontController@sign_in')->name('sign_in');
Route::get('/student_sign_up', 'FrontController@ssign_up')->name('student_sign_up');
Route::get('/teacher_sign_up', 'FrontController@tsign_up')->name('teacher_sign_up');

//Forgot Password
Route::get('forgot_password', 'FrontController@forgot_password')->name('forgot_password');
Route::get('confirm_password', 'FrontController@confirm_password')->name('confirm_password');
Route::get('get-otp/{mobile_number}','SignupController@getOtp')->name('get.otp');
Route::post('save-new-password', 'SignupController@saveNewPassword')->name('save.new.password');

Route::get('/contact', 'FrontController@contact');
Route::get('/how_it_works', 'FrontController@how_it_works');
Route::get('/privacy_policy', 'FrontController@privacy_policy');
Route::get('/refund_policy', 'FrontController@refund_policy');
Route::get('/cancellation_policy', 'FrontController@cancellation_policy');
Route::get('/term_and_condition', 'FrontController@term_and_condition');
Route::get('/sitemap', function () {
    return view('frontend.sitemap');
});

Route::get('/dashboard', 'FrontController@dashboard');

Route::get('get_plan','DashboardController@get_plan');
Route::get('get_amount/{id}','DashboardController@get_amount');

Route::any('pay','DashboardController@payu')->name('payu');

Route::post('update_student/{id}', 'DashboardController@Update_student')->name('update_student');
Route::post('update_teacher/{id}', 'DashboardController@Update_teacher')->name('update_teacher');

Route::post('student_registration', 'SignupController@student_signup')->name('student_registration');
Route::post('teacher_registration', 'SignupController@teacher_signup')->name('teacher_registration');
Route::post('sign_in', 'SignupController@sign_in')->name('sign_in');
Route::get('/signOut', 'SignupController@signOut')->name('signOut');

/*Backend Routes*/



Route::get('/admin', function () {
      return redirect()->route('login');
});

Route::get('/fcft','User@fcft');
//Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


Auth::routes();
Route::group(['middleware' => ['auth']], function() {


Route::get('fronted.index', 'HomeController@index')->name('index');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/roles', 'RoleController');
Route::resource('/users', 'UserController');

Route::post('update_user_notification','UserController@update_user_notification')->name('update_user_notification');

Route::resource('students','StudentController');
Route::get('student_edit/{id}','StudentController@edit');

Route::resource('teacher','TeacherController');
Route::get('teacher_edit/{id}','TeacherController@edit');
Route::post('/teacher_update','TeacherController@update');
Route::post('/update_status_teacher','TeacherController@update_status');
Route::post('/update_verification_status','TeacherController@update_verification_status');


Route::post('/update_status_student','StudentController@update_status');
Route::get('/get_live_course','StudentController@liveIndex');
Route::get('/get_live_subject/{id}','StudentController@liveSubject');
Route::get('/get_live_session/{id}','StudentController@liveSession');
Route::post('/get_live_session_store','StudentController@liveSessionStore');
Route::post('/update_status_live','StudentController@update_status_live');
Route::post('/update_status_live_paid','StudentController@update_status_live_paid');
Route::get('live_edit/{id}','StudentController@edit_live');
Route::delete('live_delete/{id}','StudentController@delete_live');
Route::get('fcm_notification','StudentController@fcmNotification');

Route::resource('job_post','JobPostController');
Route::get('job_edit/{id}','JobPostController@edit');

Route::resource('enquiry','EnquiryController');
Route::get('need_help','EnquiryController@need_help');
Route::get('stud_enquiry','EnquiryController@stud_enquiry');
Route::get('purchase_history','PlanController@purchase_history')->name('purchase_history');
Route::get('user_pay_history/{id}','PlanController@user_pay_history');

Route::resource('blog','BlogController');
Route::get('blog_edit/{id}','BlogController@edit');
Route::post('/blog_update','BlogController@update');
Route::post('/update_status_blog','BlogController@update_status');

Route::resource('team','TeamController');
Route::get('team_edit/{id}','TeamController@edit');
Route::post('/team_update','TeamController@update');
Route::post('/update_status_team','TeamController@update_status');

Route::resource('plan','PlanController');
Route::get('plan_edit/{id}','PlanController@edit');
Route::post('/plan_update','PlanController@update');
Route::post('/update_status_plan','PlanController@update_status');


Route::resource('subject','SubjectController');
Route::get('subject_edit/{id}','SubjectController@edit');
Route::post('/subject_update','SubjectController@update');
Route::post('/update_status_subject','SubjectController@update_status');

Route::resource('course','CourseController');
Route::get('course_edit/{id}','CourseController@edit');
Route::post('/course_update','CourseController@update');
Route::post('/update_status_course','CourseController@update_status');

Route::resource('specilization','SpecilizationController');
Route::get('specilization_edit/{id}','SpecilizationController@edit');
Route::post('/specilization_update','SpecilizationController@update');
Route::post('/update_status_specilization','SpecilizationController@update_status');

Route::resource('language','LanguageController');
Route::get('language_edit/{id}','LanguageController@edit');
Route::post('/language_update','LanguageController@update');
Route::post('/update_status_language','LanguageController@update_status');

Route::post('wallet','DashboardController@wallet')->name('wallet');



/*Seach*/


Route::resource('chapters','ChapterController');
Route::get('chapter_edit/{id}','ChapterController@edit');
Route::post('/chapter_update','ChapterController@update');
Route::get('get_chapter/{id}','ChapterController@getChapter');
Route::post('/update_status_chapter','ChapterController@update_status');

Route::resource('topics','TopicController');
Route::get('topic_edit/{id}','TopicController@edit');
Route::post('/topic_update','TopicController@update');
Route::get('get_topic/{id}','TopicController@getTopic');
Route::post('/update_status_topic','TopicController@update_status');

Route::resource('contents','ContentController');
Route::get('content_edit/{id}','ContentController@edit');
Route::post('/content_update','ContentController@update');
Route::get('get_video_content/{id}','ContentController@getVideoContent');
Route::get('get_pdf_content/{id}','ContentController@getPdfContent');
Route::post('/update_status_content','ContentController@update_status');
Route::post('/update_status_content_fee','ContentController@update_status_fee');

Route::resource('tests','TestController');
Route::get('create_test/{id}','TestController@create');
Route::get('get_test/{id}','TestController@getTest');
Route::post('/save_test','TestController@store');
Route::post('/update_status_test','TestController@update_status');
Route::post('/update_status_test_fee','TestController@update_status_fee');
Route::get('/get_question/{id}','TestController@getQuestion');
Route::get('test_edit/{id}','TestController@edit');
Route::post('/test_update','TestController@update');
Route::delete('/question_delete/{id}','TestController@deleteQuestion');
Route::get('/edit_question/{id}','TestController@editQuestion');
Route::post('/update_question/{id}','TestController@updateQuestion');
Route::get('create_question/{id}','TestController@createQuestion');
Route::get('bank/{id}','TestController@bank');
Route::post('/save_question','TestController@saveQuestion');
Route::post('/question_detail','TestController@questionDetail');

Route::resource('question_banks','Question_bankController');
Route::get('/subject/{course_id}','Question_bankController@subject');
Route::get('/question_index/{id}','Question_bankController@questionindex');
Route::get('/question_create/{id}','Question_bankController@create');
Route::get('/edit_question_bank/{id}','Question_bankController@editQuestion');
Route::post('/update_question_bank/{id}','Question_bankController@updateQuestion');

Route::resource('sliders','SliderController');
Route::post('/update_status_slider','SliderController@update_status');
Route::get('slider_edit/{id}','SliderController@edit');
Route::post('/slider_update','SliderController@update');

Route::get('index_notification','SliderController@indexNotification');

Route::get('chat','SliderController@chat');
Route::post('save_chat','SliderController@saveChat');
Route::post('get_chat','SliderController@getMessage');

Route::get('get_courses','SliderController@get_course');
Route::get('get_year','SliderController@get_year');
Route::get('get_student','SliderController@get_student');
Route::post('post_course','SliderController@fcmNotificationCourse');
Route::post('post_year','SliderController@fcmNotificationYear');
Route::post('post_student','SliderController@fcmNotificationStudent');

Route::get('teacher_number_view/{teacher_id}', 'DashboardController@TeacherNumberView')->name('TeacherNumberView');
Route::get('student_number_view/{student_id}', 'DashboardController@StudentNumberView')->name('StudentNumberView');
Route::get('student_number_view_front/{student_id}', 'DashboardController@StudentNumberViewFront')->name('StudentNumberViewFront');

Route::post('image_upload_ajax','DashboardController@image_upload_ajax')->name('image_upload_ajax');

Route::get('convertSlug','BlogController@convertSlug');
Route::get('convertSlug', 'SignupController@convertSlug');
});

Route::post('other_reg','UserController@other_reg')->name('other_reg');

Route::post('otp_message','BlogController@otp_message');
Route::post('check_otp','BlogController@check_otp');
Route::post('check_email','BlogController@check_email');
Route::post('send_otp','BlogController@send_otp');

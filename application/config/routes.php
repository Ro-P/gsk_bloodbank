<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['adduser'] = "Donor/adddonor";
$route['addrecipient'] = "Recipient/addrecipient";
$route['bill'] = "Bill/CM_Bill";
$route['bill'] = "Bill/Final_Bill";
$route['home'] = "Home";
$route['login']="Login";
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['bg_group']='Serology/bg_group';
$route['donor_bg_group'] = 'Serology/donor_bg_group';
$route['patient_bg_validation'] = 'Serology/patient_bg_validation';

$route['Bag_return'] = 'Bag_return/reserve';
$route['Bag_return'] = 'Bag_return/reissueORrelease';
$route['Bag_issue'] = 'Bag_issue/BRBI';
$route['Bag_issue'] = 'Bag_issue/BBIM';

$route['rejection'] = 'Rejection_ctrl/adv_reac';
$route['rejection'] = 'Rejection_ctrl/pat_samp_rej';

$route['addRejDetails'] = 'Rejection_ctrl/addPatient';
$route['addAdvRejDetails'] = 'Rejection_ctrl/addAdvRej';

$route['bag_history'] = 'History_ctrl/bag';
$route['getBloodgroup'] = "History_ctrl/getBloodgroup";
$route['donor_history'] = 'History_ctrl/donor';
$route['getDonorInfo'] = "History_ctrl/getDonorInfo";
$route['Donor_PDF']  = "History_ctrl/generate_pdf";
$route['recipient_history'] = 'History_ctrl/recipient';
$route['getRecipientInfo'] = 'History_ctrl/getRecipientInfo';

$route['donor_reports'] = 'Reports_ctrl/donor_reports';
$route['getDonors'] = 'Reports_ctrl/getDonorInfo';

$route['loan_request'] = 'Loan_ctrl/loan_request';
$route['loan_bank'] = 'Loan_ctrl/loan_bank';
$route['loan_outward'] = 'Loan_ctrl/loan_outward';
$route['allot_fraction'] = 'Loan_ctrl/allot_fraction';
$route['send_fraction'] = 'Loan_ctrl/send_fraction';


$route['user_registration'] = 'Admin_ctrl/user_registration';
$route['user_registration_entry'] = 'Admin_ctrl/user_registration_entry';
$route['user_permission'] = 'Admin_ctrl/user_permission';
$route['user_deactivation'] = 'Admin_ctrl/user_deactivation';
$route['bill_delete'] = 'Admin_ctrl/bill_delete';
$route['patient_detail_edit'] = 'Admin_ctrl/patient_detail_edit';
$route['user_deactivation_action'] = "Admin_ctrl/user_deactivation_action";
$route['TTI'] = 'TTI/elisaSample';

//$route['patient_detail_edit'] = 'Admin_ctrl/patient_detail_edit';




$route['translate_uri_dashes'] = FALSE;
$route['check_login'] = "Login/user_login";
$route['bill'] = "Bill/CM_Bill";
$route['bill'] = "Bill/Final_Bill";
$route['component'] = "Component/process";
$route['component'] = "Component/separation";
$route['component'] = "Component/discard";
$route['component'] = "Component/autoclave";
$route['qc'] = "QC/blood_bags";
$route['qc'] = "QC/reports";

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- googel fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4">
    <div class="navbar p-2" style="background-color:#13585D; ;">
        <div class="nav_img">
            <img src="./yosi_logo.png" alt="yosi logo">
        </div>
        <div class="nav_el d-flex flex-wrap ">
            <a href="./dashboard.php"> <button type="button" class="btn btn-success" id="home">Home</button></a>
            <button type="button" class="btn btn-success ms-2">Practice Upload</button>
            <button type="button" class="btn btn-success ms-2">Practice Staff Export</button>
            <button class="btn btn-danger ms-2">Logout</button>
        </div>
    </div>
    <div class="col-md-5 mt-2"> 
		<h4 style="color:#09f; margin:0px"> Rome Office - 555101 </h4> 
		<input type="hidden" id="yosi_practice_id" value="555101">
	</div>
    <div class="d-flex justify-content-center align-content-center mt-3">
        <form style="width:740px; border: solid black 1px; color: #767676;" class="p-4">
            <div class="form-group row">
                <label class="col-md-6 mb-3">Enable Invite patient</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Enable_Invite_patient"  value="Y" checked="checked"> Enable
                    <input type="radio" name="Enable_Invite_patient"  value="N" class="ms-5 ms-2"> Disable
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-6 mb-3">Enable Survey in dashboard</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Enable_Survey_in_dashboard"  value="checked" checked="checked"> Enable
                    <input type="radio" name="Enable_Survey_in_dashboard"  value="checked" class="ms-5 ms-2"> Disable
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-6 mb-3">Manually send surveys via Yosi Dashboard</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Manually_send_surveys_via_Yosi_Dashboard"  value="checked"checked="checked"> Enable
                    <input type="radio" name="Manually_send_surveys_via_Yosi_Dashboard"  value="checked" class="ms-5 ms-2"> Disable
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-6 mb-3">Queue management</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Queue_management"  value="check" checked="checked"> Enable
                    <input type="radio" name="Queue_management"  value="check" class="ms-5 ms-2"> Disable
                </div>
            </div>  
            <div class="form-group row">
                <label class="col-md-6 mb-3">Enable appointment type for dashboard single invites</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Enable_appointment_type_for_dashboard_single_invites"  value="check" checked="checked"> Enable
                    <input type="radio" name="Enable_appointment_type_for_dashboard_single_invites"  value="check" class="ms-5 ms-2"> Disable
                </div>
            </div>  
            <div class="form-group row">
                <label class="col-md-6 mb-3">Enable provider for dashboard single invites</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Enable_provider_for-dashboard_single_invites"  value="check" checked="checked"> Enable
                    <input type="radio" name="Enable_provider_for-dashboard_single_invites"  value="check" class="ms-5 ms-2"> Disable
                </div>
            </div>
           
            <div class="form-group row">
                <label class="col-md-6 mb-3">Enhanced scheduling ['Old scheduling' must be enabled]</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Enhanced_scheduling"  value="check" checked="checked"> Enable
                    <input type="radio" name="Enhanced_scheduling"  value="check" class="ms-5 ms-2"> Disable
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-6 mb-3">Old scheduling</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Old_scheduling"  value="check" checked="checked"> Enable
                    <input type="radio" name="Old_scheduling"  value="check" class="ms-5 ms-2"> Disable
                 </div>
            </div>
            
             <div class="form-group row">
                <label class="col-md-6 mb-3">Appointment file upload notification</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Appointment_file_upload_notification"  value="check" checked="checked"> Enable 
                    <input type="radio" name="Appointment_file_upload_notification"  value="check" class="ms-5 ms-2"> Disable
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-6 mb-3">Dashboard PDF split</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Dashboard_PDF_split"  value="check" checked="checked"> Enable 
                    <input type="radio" name="Dashboard_PDF_split"  value="check" class="ms-5 ms-2"> Disable
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-6 mb-3">Contacting Patients</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Contacting_Patients"  value="check" checked="checked"> Enable 
                    <input type="radio" name="Contacting_Patients"  value="check" class="ms-5 ms-2"> Disable
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-md-6 mb-3">Show appointment type in dashboard patient list</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Show_appointment_type_in_dashboard_patient_list"  value="check" checked="checked"> Enable 
                    <input type="radio" name="Show_appointment_type_in_dashboard_patient_list"  value="check" class="ms-5 ms-2"> Disable
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-6 mb-3">Show provider in dashboard patient list</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Show_provider_in_dashboard_patient_list"  value="check" checked="checked"> Enable 
                    <input type="radio" name="Show_provider_in_dashboard_patient_list"  value="check" class="ms-5 ms-2"> Disable
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-6 mb-3">Add DOB field to single invite</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Add_DOB_field_to_single_invite"  value="check" checked="checked"> Enable 
                    <input type="radio" name="Add_DOB_field_to_single_invite"  value="check" class="ms-5 ms-2"> Disable
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-6 mb-3">Add gender field to Single invite</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Add_gender_field_to_Single_invite"  value="check" checked="checked"> Enable 
                    <input type="radio" name="Add_gender_field_to_Single_invite"  value="check" class="ms-5 ms-2"> Disable
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-6 mb-3">Enable download button to down load multiple patient PDFs from dashboard</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Enable_download_button"  value="check" checked="checked"> Enable 
                    <input type="radio" name="Enable_download_button"  value="check" class="ms-5 ms-2"> Disable
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-6 mb-3">Enable to view in-progress intake PDF form</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Enable_to_view"  value="check" checked="checked"> Enable 
                    <input type="radio" name="Enable_to_view"  value="check" class="ms-5 ms-2"> Disable
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-6 mb-3">Enable dashboard notification</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Enable_dashboard_notification"  value="check" checked="checked"> Enable 
                    <input type="radio" name="Enable_dashboard_notification"  value="check" class="ms-5 ms-2"> Disable
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-6 mb-3">Enable self scheduling dashboard notification</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Enable_self_scheduling"  value="check" checked="checked"> Enable 
                    <input type="radio" name="Enable_self_scheduling"  value="check" class="ms-5 ms-2"> Disable
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-6 mb-3">Enable eligibility in dashboard</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Enable_self_scheduling"  value="check" checked="checked"> Enable 
                    <input type="radio" name="Enable_self_scheduling"  value="check" class="ms-5 ms-2"> Disable
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-6 mb-3">Enable eligibility after appointment created</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Enable_eligibility"  value="check" checked="checked"> Enable 
                    <input type="radio" name="Enable_eligibility"  value="check" class="ms-5 ms-2"> Disable
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-6 mb-3">Enable Intesa</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Enable_Intesa"  value="check" checked="checked"> Enable 
                    <input type="radio" name="Enable_Intesa"  value="check" class="ms-5 ms-2"> Disable
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-6 mb-3">Enable Intera</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Enable_Intera"  value="check" checked="checked"> Enable 
                    <input type="radio" name="Enable_Intera"  value="check" class="ms-5 ms-2"> Disable
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-6 mb-3">Turn on TeleHealth calendar</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Turn_on_TeleHealth_calendar"  value="check" checked="checked"> Enable 
                    <input type="radio" name="Turn_on_TeleHealth_calendar"  value="check" class="ms-5 ms-2"> Disable
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-6 mb-3">Dashboard Refer Column</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Dashboard_Refer_Column"  value="check"> Enable 
                    <input type="radio" name="Dashboard_Refer_Column"  value="check" class="ms-5 ms-2" checked="checked"> Disable
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-6 mb-3">Display full schedule or only contacted patients</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Display_full"  value="check" checked="checked"> Scheduled 
                    <input type="radio" name="Display_full"  value="check" class="ms-5 ms-2 "> Only Contacted
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-6 mb-3">Practice notification when registration completed</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Practice_notification"  value="check" checked="checked"> Enable 
                    <input type="radio" name="Practice_notification"  value="check" class="ms-5 ms-2"> Disable
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-6 mb-3">Covid schedule</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Covid_schedule"  value="check" checked="checked"> Enable 
                    <input type="radio" name="Covid_schedule"  value="check" class="ms-5 ms-2"> Disable
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-6 mb-3">Two way communication for scheduled patients</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Two_way_communication"  value="check" checked="checked"> Enable 
                    <input type="radio" name="Two_way_communication"  value="check" class="ms-5 ms-2"> Disable
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-6 mb-3">Display patient's messages only in the corresponding location</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Display_patient"  value="check" checked="checked"> Yes 
                    <input type="radio" name="Display_patient"  value="check" class="ms-5 ms-2"> No
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-6 mb-3">Enable Two Way communication V2</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Enable_Two_Way_communication"  value="check"> Enable 
                    <input type="radio" name="Enable_Two_Way_communication"  value="check" class="ms-5 ms-2" checked="checked"> Disable
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-6 mb-3">Yosi Broadcast messaging</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Yosi_Broadcast_messaging"  value="check"> Enable 
                    <input type="radio" name="Yosi_Broadcast_messaging"  value="check" class="ms-5 ms-2" checked="checked"> Disable
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-6 mb-3">Appointment List View V2</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Appointment_List_View_V2"  value="check"> Enable 
                    <input type="radio" name="Appointment_List_View_V2"  value="check" class="ms-5 ms-2" checked="checked"> Disable
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-6 mb-3">Enable emr search for yosichat</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Enable_emr_search"  value="check"> Enable 
                    <input type="radio" name="Enable_emr_search"  value="check" class="ms-5 ms-2" checked="checked"> Disable
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-6 mb-3">Enable Medpod</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Enable_Medpod"  value="check"> Enable 
                    <input type="radio" name="Enable_Medpod"  value="check" class="ms-5 ms-2" checked="checked"> Disable
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-6 mb-3">Payment Contracttext Auto Update</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Payment_Contracttext_Auto_Update"  value="check" checked="checked"> Enable 
                    <input type="radio" name="Payment_Contracttext_Auto_Update"  value="check" class="ms-5 ms-2"> Disable
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-6 mb-3">Scan Card Support Text Flag</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Scan_Card_Support_Text_Flag"  value="check"> Enable 
                    <input type="radio" name="Scan_Card_Support_Text_Flag"  value="check" class="ms-5 ms-2" checked="checked"> Disable
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-6 mb-3">Enable HPI ROS Flag</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Enable_HPI_ROS_Flag"  value="check"> Enable 
                    <input type="radio" name="Enable_HPI_ROS_Flag"  value="check" class="ms-5 ms-2" checked="checked"> Disable
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-6 mb-3">Walkin Calendar Flag</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Walkin_Calendar_Flag"  value="check"> Enable 
                    <input type="radio" name="Walkin_Calendar_Flag"  value="check" class="ms-5 ms-2" checked="checked"> Disable
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-6 mb-3">Enable On Demand Form</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Enable_On_Demand_Form"  value="check"> Enable 
                    <input type="radio" name="Enable_On_Demand_Form"  value="check" class="ms-5 ms-2" checked="checked"> Disable
                </div>
            </div>

            
            <div class="form-group row">
                <label class="col-md-6 mb-3">Enable Instant Insurance update to Emr</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Enable_Instant_Insurance_update"  value="check"> Enable 
                    <input type="radio" name="Enable_Instant_Insurance_update"  value="check" class="ms-5 ms-2" checked="checked"> Disable
                </div>
            </div>

            
            <div class="form-group row">
                <label class="col-md-6 mb-3">Enable scheduling subscription</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Enable_scheduling_subscription"  value="check" checked="checked"> Enable 
                    <input type="radio" name="Enable_scheduling_subscription"  value="check" class="ms-5 ms-2"> Disable
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-md-6 mb-3">Enable intake subscription</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="nable_intake_subscription<"  value="check" checked="checked"> Enable 
                    <input type="radio" name="nable_intake_subscription<"  value="check" class="ms-5 ms-2"> Disable
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-md-6 mb-3">Enable eligibility verification and OCR</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Enable_eligibility_verification_and_OCR"  value="check"> Enable 
                    <input type="radio" name="Enable_eligibility_verification_and_OCR"  value="check" class="ms-5 ms-2" checked="checked"> Disable
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-md-6 mb-3">Check Contact Preference Appointment SMS for sending SMS</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Check_Contact"  value="check"> Enable 
                    <input type="radio" name="Check_Contact"  value="check" class="ms-5 ms-2" checked="checked"> Disable
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-md-6 mb-3">Intake New Design</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Intake_New_Design"  value="check"> Enable 
                    <input type="radio" name="Intake_New_Design"  value="check" class="ms-5 ms-2" checked="checked"> Disable
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-md-6 mb-3">Enable dashboard notes</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Enable_dashboard_notes"  value="check"> Enable 
                    <input type="radio" name="Enable_dashboard_notes"  value="check" class="ms-5 ms-2" checked="checked"> Disable
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-md-6 mb-3">Enable dashboard provider grouping</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Enable_dashboard_provider_grouping"  value="check"> Enable 
                    <input type="radio" name="Enable_dashboard_provider_grouping"  value="check" class="ms-5 ms-2" checked="checked"> Disable
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-md-6 mb-3">Enable dashboard multi views</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Enable_dashboard_multi_views"  value="check"> Enable 
                    <input type="radio" name="Enable_dashboard_multi_views"  value="check" class="ms-5 ms-2" checked="checked"> Disable
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-md-6 mb-3">Enable dashboard auto refresh</label>
                <div class="form-input col-6 ">
                    <input type="radio" name="Enable_dashboard_auto_refresh"  value="check"> Enable 
                    <input type="radio" name="Enable_dashboard_auto_refresh"  value="check" class="ms-5 ms-2" checked="checked"> Disable
                </div>
            </div>

            <div class="mt-3 d-flex align-content-center justify-content-center ">
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="button" class="btn btn-danger ms-2" >Cancel</button>
            </div>

    
        </form>
    </div>
</body>
</html>
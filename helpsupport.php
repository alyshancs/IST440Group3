<?php 
session_start(); 
if(!isset($_SESSION["user"])){ 
    header("Location:login.php"); 
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="helpsupportstyles.css">

<a href="index.php">
        <div style="text-align:left;" id="img">
                        <img src="EMESIS Logo.jpg" alt="EMESIS logo">
        </div>
</a>

</head>
<body>

        <div id="form">
		<div style="text-align:center;" id="header">
			<h1>HELP & SUPPORT</h1>
			<hr style="text-align:center;" id="line">
		</div>
		<div style="text-align:center;" id="subheader">
			<h2>Frequently Asked Questions</h2>
		</div>
		<div style="text-align:left;" id="faq">
			<p>What is EMESIS all about?</p>
		</div>
		<div style="text-align:left;" id="answer">
			<p>EMESIS stands for Emergency Medicine Secure Information System. We seek to modernize pre-hospital emergency medicine with a health information system that better connects EMS agencies with hospitals and other healthcare providers. Our primary goal is to improve patient outcomes through comprehensive and connected healthcare.</p>
		</div>
		<div style="text-align:left;" id="faq">
			<p>What can I do with this application?</p>
		</div>
		<div style="text-align:left;" id="answer">
			<p>The EMESIS patient search function allows ambulance crews to access patient information held by participating hospitals. This information includes current medications, allergies, medical history, and surgical history, and can be used by EMS providers to make better decisions during emergency situations.</p>
			<p>EMS providers can also enter the details of their encounters with patients into an activity log that is sent to the receiving emergency room and logged in the patient’s record. These details include the date and time of the encounter, the location, and pertinent patient information.</p>
		</div>
		<div style="text-align:left;" id="faq">
			<p>Who can access this application?</p>
		</div>
		<div style="text-align:left;" id="answer">
			<p>EMESIS is a platform that EMS agencies and hospital networks can opt to use. Participating hospitals and agencies determine which personnel are authorized to use it and what patient data can be searched. Only user credentials that match the approved personnel list are granted access to an account.</p>
		</div>
		<div style="text-align:left;" id="faq">
			<p>How can a hospital network or EMS agency partner with EMESIS?</p>
                </div>
                <div style="text-align:left;" id="answer">
                        <p>Please contact <u>partners@emesis.app</u> or call us at 1 (800) 555-5555 and select option 1.</p>
                </div>
                <div style="text-align:left;" id="faq">
			<p>Is patient information secure in the EMESIS app?</p>
		</div>
                <div style="text-align:left;" id="answer">
                        <p>Yes! HIPPA allows for the sharing of information between healthcare providers and EMS agencies, with provisions that define appropriate uses for patient information. Our application follows Health Information Exchange standards, The Privacy Rule, and all protocols specific to each hospital system that partners with us.</p>
               		<p>Along with our secure login feature and authorization of user accounts, we obtain data from secure hospital-maintained electronic health records, and we utilize encryption to protect data in transit.</p>
			<p>If patients do not want their information to be shared through the EMESIS app, they have the ability to opt out with their healthcare provider.</p>
		 </div>
                <div style="text-align:left;" id="faq">
			<p>How do I create an account?</p>
		</div>
		<div style="text-align:left;" id="answer">
			<p>On the EMESIS login page, there is a link at the bottom of the form that says, “Create an Account.” Click on the link and fill out all the fields in the Create Account form. *IMPORTANT* Do not use your personal email address. Use the email address that was given to you by your employer. Only accounts for authorized personnel will be approved.</p>
		</div>
		<div style="text-align:left;" id="faq">
			<p>How do I contact support?</p
		</div>
                <div style="text-align:left;" id="answer">
			<p>Call us at 1 (800) 555-5555 and select option 2 for 24/7 phone support. You can also contact us at <u>support@emesis.app</u>. Expect responses to emails within 1 business day.</p>
		</div>
		<div style="text-align:left;" id="faq">
			<p>How do I search for a patient record?</p>
		</div>
		<div style="text-align:left;" id="answer">
			<p>Once you have successfully logged into your account and are directed to the home screen, click on the “Patient Search” button and enter the first name, last name, and date of birth for the patient. All fields are required. Then click on the “Search for Patient” button. Your patient’s information will be displayed in a table, or you will see a message that says, “There are no results for your search!” if your patient is not in the system.</p>
		</div>
		<div style="text-align:left;" id="faq">
			<p>How do I create a new EMS chart?</p>
		</div>
		<div style="text-align:left;" id="answer">
			<p>On the home screen, select the “New EMT Record” button. Fill out the form and click the “Create New Encounter” button. Then, fill out the details in the Activity Log and click the “Save” button. The successfully stored information will be displayed, or you will receive an error message if a problem occurred.</p>
		</div>
		<div style="text-align:center;" id="subheader">
			<h2>Contact Us</h2>
		</div>
		<div style="text-align:center;" id="faq">
			<p>1 (800) 555-5555</p>
			<p>Office hours: M-F 8AM to 6PM EST /  Support: 24/7</p>
			<p>General:   <u>hello@emesis.app</u></p>
			<p>Support:   <u>support@emesis.app</u></p>
			<p>Partnerships:    <u>partners@emesis.app</u></p>
			<p>Careers:    <u>careers@emesis.app</u></p>
		</div>
                </form>
</body>
</html>


<?php session_start(); ?>

<?php include "connect.php"; ?>

<?php include 'vendor/autoload.php'; ?>




<?php




$query = "select * from client_info ORDER BY id DESC LIMIT 1 ";

$core_human = 0;
$spouse_common = 0;
$transfer = 0;
$additional_points = 0;

if($connect->query($query)){

   $ans =  $connect->query($query)->fetch_object();

   $core_human = $ans->education_value + $ans->work_canada + $ans->ielts_value_listening + $ans->ielts_value_reading + $ans->ielts_value_writing + $ans->ielts_value_speaking
   + $ans->age_value;
   $spouse_common = $ans->spouse_edu + $ans->spouse_work + $ans->spouse_ielts_listening + $ans->spouse_ielts_reading + $ans->spouse_ielts_writing + $ans->spouse_ielts_speaking;

   $transfer = $ans->language_edu + $ans->canada_work_ex_edu_level + $ans->language_foreign_ex + $ans->canada_foreign_ex + $ans->language_trade;
   if ($transfer >=100){

       $transfer = 100;
   }

   $additional_points = $ans->pro_nomination + $ans->offer_of_employment + $ans->canadian_education + $ans->siblings_canada;

    if ($additional_points >=600){

        $additional_points = 600;
    }

    $mdf = new \Mpdf\Mpdf();
    $hello  = "";
    $hello = "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\">
<HTML>
<HEAD>
	<META HTTP-EQUIV=\"CONTENT-TYPE\" CONTENT=\"text/html; charset=utf-8\">
	<TITLE>Comprehensive ranking report</TITLE>
	<META NAME=\"GENERATOR\" CONTENT=\"LibreOffice 4.1.6.2 (Linux)\">
	<META NAME=\"AUTHOR\" CONTENT=\"s.simab@gmail.com\">
	<META NAME=\"CREATED\" CONTENT=\"20181006;72300000000000\">
	<META NAME=\"CHANGEDBY\" CONTENT=\"Rupok\">
	<META NAME=\"CHANGED\" CONTENT=\"20181008;120300000000000\">
	<META NAME=\"AppVersion\" CONTENT=\"12.0000\">
	<META NAME=\"DocSecurity\" CONTENT=\"0\">
	<META NAME=\"HyperlinksChanged\" CONTENT=\"false\">
	<META NAME=\"LinksUpToDate\" CONTENT=\"false\">
	<META NAME=\"ScaleCrop\" CONTENT=\"false\">
	<META NAME=\"ShareDoc\" CONTENT=\"false\">
	<STYLE TYPE=\"text/css\">
	<!--
		@page { size: 8.5in 11in; margin-left: 0.5in; margin-right: 0.5in; margin-top: 0.49in; margin-bottom: 0.5in }
		P { margin-bottom: 0.08in; direction: ltr; widows: 2; orphans: 2 }
	-->
	</STYLE>
</HEAD>
<BODY LANG=\"en-US\" DIR=\"LTR\">
<DIV TYPE=HEADER>
	<TABLE WIDTH=100% CELLPADDING=5 CELLSPACING=0>
		<COL WIDTH=179*>
		<COL WIDTH=77*>
		<TR VALIGN=BOTTOM>
			<TD WIDTH=30% STYLE=\"border-top: none; border-bottom: 1px solid #00000a; border-left: none; border-right: none; padding-top: 0in; padding-bottom: 0.05in; padding-left: 0in; padding-right: 0in\">
				<P ALIGN=LEFT ><IMG SRC=\"Word_NewClient_html_5bce14f1.png\"  NAME=\"Picture 1\" ALIGN=LEFT HSPACE=12 WIDTH=40 HEIGHT=40 BORDER=0 ></P>
			</TD>
			<TD WIDTH=40% STYLE=\"border-top: none; border-bottom: 1px solid #00000a; border-left: none; border-right: none; padding-top: 0in; padding-bottom: 0.05in; padding-left: 0in; padding-right: 0in\">
				<P ALIGN=LEFT ><SPAN STYLE=\"text-transform: uppercase;\"><FONT SIZE=3><B>Comprehensive
				ranking report</B></FONT></SPAN></P>
			</TD>
			<TD WIDTH=30% BGCOLOR=\"#c45911\" STYLE=\" text-align:center; border-top: none; border-bottom: 1px solid #c45911; border-left: none; border-right: none; padding-top: 0in; padding-bottom: 0.05in; padding-left: 0in; padding-right: 0in\">
				<P style='color: white'>";

    $hello .= date('M d,Y');

    $hello.="</P>

			</TD>
		</TR>
	</TABLE>
	<P LANG=\"en-GB\" STYLE=\"margin-bottom: 0in; line-height: 100%\"><BR>
	</P>
</DIV>
<P STYLE=\"margin-bottom: 0.11in\"><A NAME=\"_GoBack\"></A><FONT COLOR=\"#2e74b5\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=4><SPAN LANG=\"en-GB\">Dear
";
    $hello .= $ans->name;

    $hello .= "</SPAN></FONT></FONT></FONT></P>
<P STYLE=\"margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=4><SPAN LANG=\"en-GB\">Thank
you for coming to Global Immigration Consultants Ltd , GULSAN. We are excited to
give you a bit more details about your current expected score for
Canada Immigration.</SPAN></FONT></FONT></P>
<P STYLE=\"margin-bottom: 0.11in\"><FONT COLOR=\"#2e74b5\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=7><SPAN LANG=\"en-GB\">CRS
Score Range: ";

    $hello .= points_between($ans->total_sum);
    $hello .= "</SPAN></FONT></FONT></FONT></P>
<P STYLE=\"margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=4><SPAN LANG=\"en-GB\">What
we have kept in mind:</SPAN></FONT></FONT></P>
<OL TYPE=A>
	<LI><P STYLE=\"margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=4><SPAN LANG=\"en-GB\">Core/human
	capital = ";

    $hello .= points_between($core_human);

    $hello .= "</SPAN></FONT></FONT></P>
	<LI><P STYLE=\"margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=4><SPAN LANG=\"en-GB\">Spouse
	or common-law partner factors = ";

    $hello .= points_between($spouse_common);
    $hello .= "</SPAN></FONT></FONT></P>
	<LI><P STYLE=\"margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=4><SPAN LANG=\"en-GB\">Transferability
	factors = ";

    $hello .= points_between($transfer);

    $hello .= "</SPAN></FONT></FONT></P>
	<LI><P STYLE=\"margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=4><SPAN LANG=\"en-GB\">Additional
	points  = ";

    $hello .= points_between($additional_points);

    $hello .= "</SPAN></FONT></FONT></P>
</OL>
<P STYLE=\"margin-left: 0.25in; margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=4><SPAN LANG=\"en-GB\">We’ve
used the following as instructed by you (the client).</SPAN></FONT></FONT></P>
<P STYLE=\"margin-left: 0.5in; margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=4><SPAN LANG=\"en-GB\"><B>Marital
Status: ";

    $hello .= $ans->marital_status;

    $hello .= "</B></SPAN></FONT></FONT></P>
<P STYLE=\"margin-left: 0.5in; margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=4><SPAN LANG=\"en-GB\"><B>IELTS
score: Listening: ";

    $hello .= $ans->ielts_value_listening .", ";
    $hello .= "Reading : ";

    $hello .= $ans->ielts_value_reading.", ";

    $hello .= "Writing : ";

    $hello .= $ans->ielts_value_writing.", ";

    $hello .= "Speaking: ";

    $hello .= $ans->ielts_value_speaking;

    $hello .= "</B></SPAN></FONT></FONT></P>
<P LANG=\"en-GB\" STYLE=\"margin-left: 0.5in; margin-bottom: 0.11in\"><BR><BR>
</P>
<P STYLE=\"margin-left: 0.5in; margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=4><SPAN LANG=\"en-GB\"><B>What
is my next step:</B></SPAN></FONT></FONT></P>
<P STYLE=\"margin-left: 0.5in; margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=4><SPAN LANG=\"en-GB\"><B>Please
speak to ";

    $hello .= $_SESSION['counselor_name'];
    $hello .=" and understand the procedure to move
on to the next step. The direct number is: ";

    $hello .=$_SESSION['counselor_phone'];
    $hello .="</B></SPAN></FONT></FONT></P>
<P STYLE=\"margin-bottom: 0.11in\"><FONT COLOR=\"#2e74b5\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=4 STYLE=\"font-size: 16pt\"><SPAN LANG=\"en-GB\">Why
the range:</SPAN></FONT></FONT></FONT></P>
<P STYLE=\"margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=3 STYLE=\"font-size: 13pt\"><SPAN LANG=\"en-GB\">The
National Occupational Classification (NOC) system assigns a four
digit code and job description for every occupation is the Canadian
labour market. It’s a nationally recognized and standardized system
that Immigration, Refugees and Citizenship Canada (IRCC) uses to
evaluate your work experience. Unless otherwise stated – this is
where more than 80% of general applications falter. In 2017, more
than 52% of applicants who received ITA globally got rejected due to
wrong NOC code. In 2017, all our applicants who received ITA are
already in Canada. We are proud to say that we have not had a single
rejections since 2014 with any PR application. However, unless it’s
extensively studied, we can not give you the exact CRS score. More
so, unless a lawyer goes through the specific requirements, we can’t
assure you on your CRS score with certainty. </SPAN></FONT></FONT>
</P>
<P STYLE=\"margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=3 STYLE=\"font-size: 13pt\"><SPAN LANG=\"en-GB\">Choosing
the right National Occupational Classification (NOC) code is one of
the most important parts of your immigration application. Whether
you’re applying through the federal Express Entry system, or to one
of many Provincial Nominee Programs (PNPs), choosing the right NOC
code can </SPAN></FONT></FONT><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=3 STYLE=\"font-size: 13pt\"><SPAN LANG=\"en-GB\"><I>make
or break your application</I></SPAN></FONT></FONT><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=3 STYLE=\"font-size: 13pt\"><SPAN LANG=\"en-GB\">.</SPAN></FONT></FONT></P>
<P STYLE=\"margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=3 STYLE=\"font-size: 13pt\"><SPAN LANG=\"en-GB\">If
you claim a NOC code that doesn’t actually match your work
experience, your application will be refused or returned to you. You
can’t expect the visa officer that’s reviewing your application
to ask you for clarification, or to choose the right NOC code. It’s
up to you to make sure that your NOC code matches your work
experience, and that you have documentation to prove it.</SPAN></FONT></FONT></P>
<P STYLE=\"margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=3 STYLE=\"font-size: 13pt\"><SPAN LANG=\"en-GB\">Every
NOC code has an associated job title, lead statement, and list of
major duties and responsibilities. When you’re choosing your NOC
code for immigration purposes, your actual job title and education
are not important. Your work experience has to match the lead
statement, and you should have performed most of the duties and
responsibilities listed. Because of that, your work experience might
fall under a couple of different NOC codes, or your official job
title might be associated with a NOC code that doesn’t actually
match your experience.</SPAN></FONT></FONT></P>
<P STYLE=\"margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=3 STYLE=\"font-size: 13pt\"><SPAN LANG=\"en-GB\">If
you have experience working in a couple of different industries or
positions, each of your past work experiences has its own NOC code.
For immigration purposes, you generally have to claim a primary NOC
code as well as NOC codes for each of your past positions. Depending
on the program you’re applying to, the NOC code that you should
claim as your primary one might change.</SPAN></FONT></FONT></P>
<P STYLE=\"margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=3 STYLE=\"font-size: 13pt\"><SPAN LANG=\"en-GB\">This
can make choosing the right NOC code complicated. An immigration
attorney can help you find the right NOC code: one that matches your
work experience and optimizes your chances of successfully applying
to immigrate to Canada.</SPAN></FONT></FONT></P>
<P STYLE=\"margin-bottom: 0.11in\"><FONT COLOR=\"#2e74b5\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=4><SPAN LANG=\"en-GB\">How
do we help in choosing your NOC code</SPAN></FONT></FONT></FONT></P>
<P STYLE=\"margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=3 STYLE=\"font-size: 13pt\"><SPAN LANG=\"en-GB\">To
prove that you’ve claimed the right NOC code, you have to provide
some supporting documentation in your application. The most important
piece of documentation is your employment reference letter.</SPAN></FONT></FONT></P>
<P STYLE=\"margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=3 STYLE=\"font-size: 13pt\"><SPAN LANG=\"en-GB\">An
employment reference letter for immigration is very different from a
reference letter that you would use job hunting. It might be more
helpful to think of it as an employment verification letter. It has
to be provided by your employer and ideally includes:</SPAN></FONT></FONT></P>
<UL>
	<LI><P STYLE=\"margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=3 STYLE=\"font-size: 13pt\"><SPAN LANG=\"en-GB\">your
	job title,</SPAN></FONT></FONT></P>
	<LI><P STYLE=\"margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=3 STYLE=\"font-size: 13pt\"><SPAN LANG=\"en-GB\">your
	salary,</SPAN></FONT></FONT></P>
	<LI><P STYLE=\"margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=3 STYLE=\"font-size: 13pt\"><SPAN LANG=\"en-GB\">the
	average hours you work per week,</SPAN></FONT></FONT></P>
	<LI><P STYLE=\"margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=3 STYLE=\"font-size: 13pt\"><SPAN LANG=\"en-GB\">the
	dates of your employment, and</SPAN></FONT></FONT></P>
	<LI><P STYLE=\"margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=3 STYLE=\"font-size: 13pt\"><SPAN LANG=\"en-GB\">a
	detailed list of your employment duties.</SPAN></FONT></FONT></P>
</UL>
<P STYLE=\"margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=3 STYLE=\"font-size: 13pt\"><SPAN LANG=\"en-GB\">We
help you assess each and every factor, understand the 4 codes, and
help you create and get the right documents that is guaranteed</SPAN></FONT></FONT><SUP><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=3 STYLE=\"font-size: 13pt\"><SPAN LANG=\"en-GB\">*</SPAN></FONT></FONT></SUP><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=3 STYLE=\"font-size: 13pt\"><SPAN LANG=\"en-GB\">
not be rejected. We ensure error free submission, to the extent where
we offer 100% refund on rejected applications where it’s rejected
due to our negligence. </SPAN></FONT></FONT>
</P>
<P LANG=\"en-GB\" STYLE=\"margin-bottom: 0.11in\"><BR><BR>
</P>
<P STYLE=\"margin-bottom: 0.11in\"><FONT COLOR=\"#5b9bd5\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=4><SPAN LANG=\"en-GB\">Your
next step</SPAN></FONT></FONT></FONT></P>
<P STYLE=\"margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=3 STYLE=\"font-size: 13pt\"><SPAN LANG=\"en-GB\">Since
you’re [Eligible/Not Eligible] your next step is to submit your
complete file for assessment via our ICCRC registered lawyer Ms.
Elisabeth Isakov (</SPAN></FONT></FONT><FONT COLOR=\"#000000\"><FONT FACE=\"Roboto Condensed, serif\"><SPAN STYLE=\"background: #ffffff\">R512148</SPAN></FONT></FONT><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=3 STYLE=\"font-size: 13pt\"><SPAN LANG=\"en-GB\">).
ICCRC is the national regulatory body that serves and protects the
public by overseeing licensed immigration and citizenship consultants
and international student advisors.</SPAN></FONT></FONT></P>
<P STYLE=\"margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=3 STYLE=\"font-size: 13pt\"><SPAN LANG=\"en-GB\">ICCRC’s
federal mandate stems from the Immigration and Refugee Protection Act
(IRPA) and the Citizenship Act which require anyone providing
Canadian immigration or citizenship advice or representation for a
fee or other consideration to be a member in good standing of ICCRC.
Exceptions are members in good standing of a law society in Canada or
the Chambre des notaires du Québec.</SPAN></FONT></FONT></P>
<P STYLE=\"margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=3 STYLE=\"font-size: 13pt\"><SPAN LANG=\"en-GB\">Individuals
providing Canadian immigration/citizenship services abroad are
subject to Canadian law even if they reside outside of Canada.</SPAN></FONT></FONT><FONT COLOR=\"#c00000\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=3 STYLE=\"font-size: 13pt\"><SPAN LANG=\"en-GB\">
It is an offense punishable by law to provide Canadian immigration
services for a fee or other consideration if not regulated by ICCRC,
a Canadian law society, or the Chambre des notaires du Québec.</SPAN></FONT></FONT></FONT></P>
<P STYLE=\"margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=3 STYLE=\"font-size: 13pt\"><SPAN LANG=\"en-GB\">You
can get more information via iccrc-crcic.ca </SPAN></FONT></FONT>
</P>
<P STYLE=\"margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=3 STYLE=\"font-size: 13pt\"><SPAN LANG=\"en-GB\">When
you are ready, please contact [counsellor name] at [counsellor
number] and follow your process of assessment as per ICCRC
regulations. Please note that this document is not to be regarded as
a final assessment, and both parties cannot be held accountable for
any difference in assessment. However, if deemed not eligible, you
will be refunded the full amount. </SPAN></FONT></FONT><FONT COLOR=\"#538135\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=3 STYLE=\"font-size: 13pt\"><SPAN LANG=\"en-GB\">(Deducting
15% Government VAT???)</SPAN></FONT></FONT></FONT></P>
<P STYLE=\"margin-bottom: 0.11in\"><FONT COLOR=\"#5b9bd5\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=3 STYLE=\"font-size: 13pt\"><SPAN LANG=\"en-GB\">When
is the right time to start the process?</SPAN></FONT></FONT></FONT></P>
<P STYLE=\"margin-bottom: 0.11in\"><FONT FACE=\"Aileron Thin, serif\"><FONT SIZE=3 STYLE=\"font-size: 13pt\"><SPAN LANG=\"en-GB\">Quite
frankly, immigration depends a lot on general political situation of
the said country. A prime example would be United States of America,
where we have noticed a major shift in general immigration policies
with the shift in command. Canada too, is prone to that. Having said
that, the current government plans to include 300,000 new immigrants
within their ecosystem every year. We believe the best time to
migrate to Canada – is now. </SPAN></FONT></FONT>
</P>
<P LANG=\"en-GB\" STYLE=\"margin-bottom: 0.11in\"><BR><BR>
</P>
<P LANG=\"en-GB\" STYLE=\"margin-bottom: 0.11in\"><BR><BR>
</P>
<P LANG=\"en-GB\" STYLE=\"margin-bottom: 0.11in\"><BR><BR>
</P>
<P LANG=\"en-GB\" STYLE=\"margin-bottom: 0.11in\"><BR><BR>
</P>
<P LANG=\"en-GB\" STYLE=\"margin-bottom: 0.11in\"><BR><BR>
</P>
<P LANG=\"en-GB\" STYLE=\"margin-bottom: 0.11in\"><BR><BR>
</P>
<P LANG=\"en-GB\" STYLE=\"margin-bottom: 0.11in\"><BR><BR>
</P>
<P STYLE=\"margin-bottom: 0.11in\"><SPAN LANG=\"en-GB\">General FAQ:
Canada Immigration</SPAN></P>
<OL>
	<LI><P STYLE=\"margin-bottom: 0.11in\"><SPAN LANG=\"en-GB\"><B>Do I need
	IELTS to Immigrate to Canada?</B></SPAN><SPAN LANG=\"en-GB\"><BR><BR>Yes,
	you do require IELTS to migrate to Canada. However, to understand
	what scores you would require it is advised to have your assessment
	completed by our ICCRC registered Lawyer Ms. Elisabeth Isakov.
	Rather than sitting for IELTS twice, it’s easier to complete the
	assessment first, and then complete your IELTS.<BR></SPAN><BR><BR>
	</P>
	<LI><P STYLE=\"margin-bottom: 0.11in\"><SPAN LANG=\"en-GB\"><B>Do I need
	to submit the required documents now?</B></SPAN><SPAN LANG=\"en-GB\"><BR><BR>We
	have another set of extensive questionnaires that lets us look
	in-depth to your work, your responsibilities and in general your
	Immigration related information. That does not take too long on your
	part – perhaps no more than 90 minutes – 120 minutes to
	complete. That alone would be okay for now. We will continue asking
	for other documents as we need it. <BR></SPAN><BR><BR>
	</P>
	<LI><P STYLE=\"margin-bottom: 0.11in\"><SPAN LANG=\"en-GB\"><B>Do I need
	a lawyer to submit my application? Can I not do it myself?</B></SPAN><SPAN LANG=\"en-GB\"><BR><BR>Please
	understand that you </SPAN><SPAN LANG=\"en-GB\"><B>do not need a
	lawyer </B></SPAN><SPAN LANG=\"en-GB\">to submit your application. You
	can submit your application by yourself. However, using an ICCRC
	registered lawyer ensures a. your time is not wasted with going
	through myriads of process that is unnecessary, b. you have an
	error-free submission, c. you have a clear picture of your
	application before you submit, d.  Since we are diligent in
	understanding immigration laws and procedure, your chances of
	rejection is next to nil. <BR><BR>In fact, we are so confident in
	our approach that we ensure that you only pay for the process that
	has been completed, and we offer money-back for processes that were
	jeopardised due to our negligence. Global Immigration Consultants
	Ltd is the only company that provides this in Bangladesh. <BR></SPAN><BR><BR>
	</P>
	<LI><P STYLE=\"margin-bottom: 0.11in\"><SPAN LANG=\"en-GB\"><B>Do you
	give guarantee?</B></SPAN><SPAN LANG=\"en-GB\"><BR><BR>As an ICCRC
	registered company, we only guarantee that our goodwill and
	error-free submission will lead to an application that has the
	highest chance of success. We cannot guarantee an outcome. <BR></SPAN><BR><BR>
	</P>
	<LI><P STYLE=\"margin-bottom: 0.11in\"><SPAN LANG=\"en-GB\"><B>How long
	does it take for the process to complete?</B></SPAN><SPAN LANG=\"en-GB\"><BR><BR>Official
	Express Entry timeline is roughly 6 – 8 months after receiving an
	ITA. However there are preparations before that, and it’s often
	seen that one might take up to a year to get to that stage. Having
	said that, the complete process should not take more than 2 years. </SPAN>
	</P>
</OL>
</BODY>
</HTML>";
    $mdf->WriteHTML($hello);
    $mdf->Output();




}
function points_between($total_sum){


    $start = $total_sum -10;

    $end = $total_sum +10;
    if ($total_sum == 0){
        $start = 0;
        $end = 0;
    }

    $between = $start.' - '.$end;

    return $between;





}



?>

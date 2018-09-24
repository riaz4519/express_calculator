<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="materialize/css/noUiSlider.css">
    <style>
        .noUi-value-large{
            font-size: 80%;
        }


        .spouse-show{
            display: block;
        }
        .spouse-remove{

            display: none;

        }
        .coreA-Value{

            font-weight: bold;

        }
        .coreA-position{
            margin-top: 20px;
            text-align: center;
        }
        .center-align-position{

            text-align: center;
            margin-top: 20px;
        }
    </style>

</head>
<body>


<div class="row hide-on-med-and-down">
    <div class="col blue-grey lighten-5 right-align z-depth-2" style="position: fixed;top: 10px;left: 10px">
        <h6>SCORE</h6>
        <h6></h6>
        <h5 class="score" id="score">0</h5>

    </div>
</div>
    <div class="container">

        <form method="post" action="">


            <h4 class="truncate">Express Entry Calculator</h4>
            <p class="flow-text">Make selections below to update your CRS score in real time. </p>

            <div class="row  z-depth-1 grey lighten-5 hoverable" style="padding: 5px;">
                <div class="switch col s10 ">

                    <label>
                        <small style="color: #9e9e9e;">Marital Status </small><br>
                        <span >single</span>
                        <input type="checkbox" class="married-status">
                        <span class="lever"></span>
                        <span>Married</span>
                    </label>
                </div>
                <div class="col s2">

                </div>


            </div>


            <div class="coreA">
            <h4 class="truncate section">Category A: Core / human capital</h4>

            <!-- Category A core -->
            <div class=" z-depth-1 grey lighten-5 hoverable" >

                <div class="row">

                    <div>
                        <div class="col s10">
                            <div class="range-field"  >
                                <small style="color: #9e9e9e;">Age:</small>
                                <input type="range" class="input-range take-value age-field" min="16" max="56" value="17"/>
                            </div>


                        </div>
                        <div class="col s2 center-align "style="margin-top:20px">
                            <b><span class="show-points-age score-board" >0</span></b>
                        </div>
                    </div>



                <!--education-->

                    <div>
                        <div class="col s10 " >
                            <small style="color: #9e9e9e;">Education</small>
                            <p>
                            <label>
                                <input class="with-gap   education" name="group3" value="0" type="radio"   />
                                <span>Less than secondary school (high school)</span>
                            </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap  education" name="group3" value="30" type="radio"  />
                                    <span>Secondary diploma (high school graduation)</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap education" name="group3" value="90" type="radio"  />
                                    <span>One-year degree, diploma or certificate from  a university, college, trade or technical school, or other institute</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap education" name="group3" value="98" type="radio"  />
                                    <span>Two-year program at a university, college, trade or technical school, or other institute</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap education" name="group3" value="120"type="radio"  />
                                    <span>Bachelor’s degree OR  a three or more year program at a university, college, trade or technical school, or other institute</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap education" name="group3" value="128"type="radio"  />
                                    <span>Two or more certificates, diplomas, or degrees. One must be for a program of three or more years</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap education" name="group3" value="135"type="radio"  />
                                    <span>Master’s degree, OR professional degree needed to practice in a licensed profession (For “professional degree,” the degree program must have been in: medicine, veterinary medicine, dentistry, optometry, law, chiropractic medicine, or pharmacy.)</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap education" name="group3" value="150" type="radio"  />
                                    <span>Doctoral level university degree (Ph.D.)</span>
                                </label>
                            </p>




                        </div>
                        <div class="col s2 center-align" style="margin-top:20px">

                            <b><span class="education-value score-board">0</span></b>


                        </div>
                    </div>



                </div>

                <!--end education-->


            </div>

            <!--end category-->

            <!--english-->

            <h4 class="truncate section">English:</h4>
            <div class=" z-depth-1 grey lighten-5 hoverable english-pro" >

                <div class="row">

                    <!--listening-->

                    <div class="col s3">
                        <div class="col s10 ">
                            <small style="color: #9e9e9e;">Listening</small>
                            <p>
                                <label>
                                    <input class="with-gap english-listening" value="0" name="group4" type="radio"  />
                                    <span>IELTS less than 4</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap english-listening" value="6" name="group4" type="radio"  />
                                    <span>IELTS 4.5 or 5 </span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap english-listening" value="9" name="group4" type="radio"  />
                                    <span>IELTS 5.5 </span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap english-listening" value="17" name="group4" type="radio"  />
                                    <span>IELTS 6.0 to 7.0 </span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap english-listening" value="23" name="group4" type="radio"  />
                                    <span>IELTS 7.5 </span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap english-listening" value="31" name="group4" type="radio"  />
                                    <span>IELTS 8.0 </span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap english-listening" value="34" name="group4" type="radio"  />
                                    <span>IELTS 8.5 to 9 </span>
                                </label>
                            </p>


                        </div>
                        <div class="col s2">
                            <b><span class="english-listening-value score-board">0</span></b>
                        </div>
                    </div>
                    <!--end listening-->

                    <!--reading-->

                    <div class="col s3">
                        <div class="col s10">
                            <small style="color: #9e9e9e;">Reading</small>
                            <p>
                                <label>
                                    <input class="with-gap english-reading" value=0 name="group5" type="radio"  />
                                    <span>None or less than 3.5</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap english-reading" value="6" name="group5" type="radio"  />
                                    <span>IELTS 3.5 to 4.0 </span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap english-reading" value="9" name="group5" type="radio"  />
                                    <span>IELTS 5.0 </span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap english-reading" value="17" name="group5" type="radio"  />
                                    <span>IELTS 5.5 to 6.0 </span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap english-reading" value="23" name="group5" type="radio"  />
                                    <span>IELTS 6.5</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap english-reading" value="31" name="group5" type="radio"  />
                                    <span>IELTS 7.0 </span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap english-reading" value="34" name="group5" type="radio"  />
                                    <span>IELTS 7.5 to 9</span>
                                </label>
                            </p>





                        </div>
                        <div class="col s2">
                            <b><span class="english-reading-value score-board">0</span></b>


                        </div>
                    </div>
                    <!--end reading-->

                    <!--writing-->

                    <div class="col s3">
                        <div class="col s10 " >
                            <small style="color: #9e9e9e;">Writing</small>
                            <p>
                                <label>
                                    <input class="with-gap english-writing" value="0" name="group6" type="radio"  />
                                    <span>None or less than 4</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap english-writing" value="6" name="group6" type="radio"  />
                                    <span>IELTS 4.0 to 4.5 </span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap english-writing" value="9" name="group6" type="radio"  />
                                    <span>IELTS 5.0</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap english-writing" value="17" name="group6" type="radio"  />
                                    <span>IELTS 6.0 </span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap english-writing" value="23" name="group6" type="radio"  />
                                    <span>IELTS 6.5 </span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap english-writing" value="31" name="group6" type="radio"  />
                                    <span>IELTS 7.0 </span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap english-writing" value="34" name="group6" type="radio"  />
                                    <span>IELTS 7.5 to 9 </span>
                                </label>
                            </p>






                        </div>
                        <div class="col s2">
                            <b><span class="english-writing-value score-board">0</span></b>


                        </div>
                    </div>
                    <!--end writing-->

                    <!--speaking-->

                    <div class="col s3">
                        <div class="col s10 ">
                            <small style="color: #9e9e9e;">Speaking</small>
                            <p>
                                <label>
                                    <input class="with-gap english-speaking" value="0" name="group7" type="radio"  />
                                    <span>None or less than 4</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap english-speaking" value="6" name="group7" type="radio"  />
                                    <span>IELTS 4.0 to 5.0 </span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap english-speaking" value="9" name="group7" type="radio"  />
                                    <span>IELTS 5.5 </span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap english-speaking" value="17" name="group7" type="radio"  />
                                    <span>IELTS 6.0 </span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap english-speaking" value="23" name="group7" type="radio"  />
                                    <span>IELTS 6.5 </span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap english-speaking" value="31" name="group7" type="radio"  />
                                    <span>IELTS 7.0 </span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap english-speaking" value="34" name="group7" type="radio"  />
                                    <span>IELTS 7.5 to 9 </span>
                                </label>
                            </p>






                        </div>
                        <div class="col s2">
                            <b><span class="english-speaking-value  score-board">0</span></b>


                        </div>
                    </div>
                    <!--end speaking-->



                </div>




            </div>

            <!-- end english-->



            <!--french -->

            <h4 class="truncate section">French:</h4>
            <div class=" z-depth-1 grey lighten-5 hoverable" >

                <div class="row">

                    <!--listening-->

                    <div class="col s3 ">
                        <div class="col s10 ">
                            <small style="color: #9e9e9e;">Listening</small>
                            <p>
                                <label>
                                    <input class="with-gap french-listening" name="group8" value="0" type="radio"  />
                                    <span>None or less than 4</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap french-listening" name="group8" value="0" type="radio"  />
                                    <span> TEF 145-180</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap french-listening" name="group8" value="1" type="radio"  />
                                    <span>TEF 181-216</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap french-listening" name="group8" value="1" type="radio"  />
                                    <span>TEF 217-248 </span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap french-listening" name="group8" value="3" type="radio"  />
                                    <span>TEF 249-279 </span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap french-listening" name="group8" value="3" type="radio"  />
                                    <span>TEF 280-297 </span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap french-listening" name="group8" value="6" type="radio"  />
                                    <span>TEF 298-315 </span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap french-listening" name="group8" value="6" type="radio"  />
                                    <span>TEF 316-333 </span>
                                </label>
                            </p>




                        </div>
                        <div class="col s2">
                            <b><span class="french-listening-value score-board">0</span></b>


                        </div>
                    </div>
                    <!--end listening-->

                    <!--reading-->

                    <div class="col s3">
                        <div class="col s10">
                            <small style="color: #9e9e9e;">Reading</small>
                            <p>
                                <label>
                                    <input class="with-gap french-reading" value="0" name="group9" type="radio"  />
                                    <span>None or less than 4</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap french-reading" value="0" name="group9" type="radio"  />
                                    <span> TEF 121-150</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap french-reading" value="1" name="group9" type="radio"  />
                                    <span>TEF 151-180</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap french-reading" value="1" name="group9" type="radio"  />
                                    <span>TEF 181-206 </span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap french-reading" value="3" name="group9" type="radio"  />
                                    <span>TEF 207-232 </span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap french-reading" value="3" name="group9" type="radio"  />
                                    <span>TEF 233-247 </span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap french-reading" value="6" name="group9" type="radio"  />
                                    <span>TEF 248-262 </span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap french-reading" value="6" name="group9" type="radio"  />
                                    <span>TEF 263-277 </span>
                                </label>
                            </p>




                        </div>
                        <div class="col s2">
                            <b><span class="french-reading-value score-board">0</span></b>


                        </div>
                    </div>
                    <!--end reading-->

                    <!--writing-->

                    <div class="col s3">
                        <div class="col s10 ">
                            <small style="color: #9e9e9e;">Writing</small>
                            <p>
                                <label>
                                    <input class="with-gap french-writing" value="0" name="group10" type="radio"  />
                                    <span>None or less than 4</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap french-writing" value="0" name="group10" type="radio"  />
                                    <span> TEF 181-225</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap french-writing" value="1" name="group10" type="radio"  />
                                    <span>TEF 226-270</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap french-writing" value="1" name="group10" type="radio"  />
                                    <span>TEF 217-309 </span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap french-writing" value="3" name="group10" type="radio"  />
                                    <span>TEF 310-348 </span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap french-writing" value="3" name="group10" type="radio"  />
                                    <span>TEF 349-370 </span>
                                </label>
                            </p>


                            <p>
                                <label>
                                    <input class="with-gap french-writing" value="6" name="group10" type="radio"  />
                                    <span>TEF 371-392 </span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap french-writing" value="6" name="group10" type="radio"  />
                                    <span>TEF 393-415 </span>
                                </label>
                            </p>




                        </div>
                        <div class="col s2">
                            <b><span class="french-writing-value score-board">0</span></b>


                        </div>
                    </div>
                    <!--end writing-->

                    <!--speaking-->

                    <div class="col s3">
                        <div class="col s10 ">
                            <small style="color: #9e9e9e;">Speaking</small>
                            <p>
                                <label>
                                    <input class="with-gap french-speaking" value="0" name="group11" type="radio"  />
                                    <span>None or less than 4</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap french-speaking" value="0" name="group11" type="radio"  />
                                    <span> TEF 181-225</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap french-speaking" value="1" name="group11" type="radio"  />
                                    <span>TEF 226-270</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap french-speaking" value="1" name="group11" type="radio"  />
                                    <span>TEF 271-309 </span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap french-speaking" value="3" name="group11" type="radio"  />
                                    <span>TEF 310-348 </span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap french-speaking" value="3" name="group11" type="radio"  />
                                    <span>TEF 349-370 </span>
                                </label>
                            </p>


                            <p>
                                <label>
                                    <input class="with-gap french-speaking" value="6" name="group11" type="radio"  />
                                    <span>TEF 371-392 </span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap french-speaking" value="6" name="group11" type="radio"  />
                                    <span>TEF 393-415 </span>
                                </label>
                            </p>




                        </div>
                        <div class="col s2">
                            <b><span class="french-speaking-value score-board">0</span></b>


                        </div>
                    </div>
                    <!--end speaking-->



                </div>




            </div>


            <!--end french-->

            <!--work-->

            <div class=" z-depth-1 grey lighten-5 hoverable" >
                <div class="row ">

                    <!--canadian-->

                    <div class="col s4">
                        <div class="col s10 ">
                            <small style="color: #9e9e9e;">Canadian Work experience</small>
                            <p>
                                <label>
                                    <input class="with-gap work-ex-canada" value="0" name="group12" type="radio"  />
                                    <span>No or Less Than 1 year</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap work-ex-canada"  value="40" name="group12" type="radio"  />
                                    <span>1 year</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap work-ex-canada"  value="53" name="group12" type="radio"  />
                                    <span>2 years</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap work-ex-canada" value="64" name="group12" type="radio"  />
                                    <span>3 years</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap work-ex-canada" value="72" name="group12" type="radio"  />
                                    <span>4 years</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap work-ex-canada" value="80" name="group12" type="radio"  />
                                    <span>5 years or more</span>
                                </label>
                            </p>






                        </div>
                        <div class="col s2">

                            <b><span class="work-ex-canada-value  score-board">0</span></b>


                        </div>
                    </div>
                    <!--end canadian-->

                    <!--foreign -->

                    <div class="col s4">
                        <div class="col s10 ">
                            <small style="color: #9e9e9e;">Foreign work experience</small>
                            <p>
                                <label>
                                    <input class="with-gap foreign-ex" name="group13" value="1" type="radio"  />
                                    <span>None or less than 1</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap foreign-ex" name="group13" value="2" type="radio"  />
                                    <span>1 or 2 years</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap foreign-ex" name="group13" value="3" type="radio"  />
                                    <span>3 years or more</span>
                                </label>
                            </p>


                        </div>
                        <div class="col s2">
                            <b><span class="foreign-ex-value  score-board">0</span></b>


                        </div>
                    </div>
                    <!--end foreign-->

                    <!--trade-->

                    <div class="col s4">
                        <div class="col s10 ">
                            <small style="color: #9e9e9e;">Canadian trade certificate</small>
                            <p>
                                <label>
                                    <input class="with-gap foreign-ex" name="group19" value="1" type="radio"  />
                                    <span>None </span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap foreign-ex " name="group19" value="2" type="radio"  />
                                    <span>Valid Canadian trade certificate</span>
                                </label>
                            </p>


                        </div>
                        <div class="col s2">

                            <b><span class="canadian-trade score-board">0</span></b>


                        </div>
                    </div>
                    <!--end trade-->




                </div>
                <div class="row truncate section blue-grey lighten-5">

                    <div class="col s10  blue-grey lighten-5">
                        <h4>Category A: Core / human capital subtotal:</h4>

                    </div>
                    <div class="col s2 coreA-position">
                        <p class="coreA-Value">0</p>

                    </div>

                </div>




            </div>

            </div>

            <!--end work-->

            <!-- spouse  -->

            <div class="spouse-area">
                <div class="spouse spouse-remove">


            <h5 id="" class="truncate section">Category B: Spouse / common-law partner</h5>

            <div class=" z-depth-1 grey lighten-5 hoverable" >







                    <!--education-->

                    <div class="row">
                        <div class="col s10 ">
                            <small style="color: #9e9e9e;">Education</small>
                            <p>
                                <label>
                                    <input class="with-gap spouse-education" name="group40" value="0" type="radio"  />
                                    <span>Less than secondary school (high school)</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap spouse-education" name="group40" value="2" type="radio"  />
                                    <span>Secondary school (high school graduation)</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap spouse-education" name="group40" value="6" type="radio"  />
                                    <span>One-year program at a university, college, trade or technical school, or other institute</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap spouse-education" name="group40" value="7" type="radio"  />
                                    <span>Two-year program at a university, college, trade or technical in school, or other institute</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap spouse-education" name="group40" value="8" type="radio"  />
                                    <span>Bachelor’s degree OR  a three or more year program at a university, college, trade or technical school, or other institute</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap spouse-education" name="group40" value="9" type="radio"  />
                                    <span>Two or more certificates, diplomas, or degrees. One must be for a program of three or more years</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap spouse-education" name="group40" value="10" type="radio"  />
                                    <span>Master’s degree, or professional degree needed to practice in a licensed profession (For “professional degree”, the degree program must have been in: medicine, veterinary medicine, dentistry, optometry, law, chiropractic medicine, or pharmacy.) 	</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap spouse-education" name="group40" value="10" type="radio"  />
                                    <span>Doctoral level university degree (PhD)</span>
                                </label>
                            </p>




                        </div>
                        <div class="col s2 center-align-position">

                            <b><span class="spouse-education-value score-board" >0</span></b>


                        </div>
                    </div>
                    <div class="row">

                        <!--canadian-->


                            <div class="col s10 ">
                                <small style="color: #9e9e9e;">Canadian Work experience</small>
                                <p>
                                    <label>
                                        <input class="with-gap spouse-ex-canada" name="group20" value="0" type="radio"  />
                                        <span>No or Less Than 1 year</span>
                                    </label>
                                </p>

                                <p>
                                    <label>
                                        <input class="with-gap spouse-ex-canada" name="group20" value="5" type="radio"  />
                                        <span>1 year</span>
                                    </label>
                                </p>

                                <p>
                                    <label>
                                        <input class="with-gap spouse-ex-canada" name="group20" value="7" type="radio"  />
                                        <span>2 years</span>
                                    </label>
                                </p>

                                <p>
                                    <label>
                                        <input class="with-gap spouse-ex-canada" name="group20" value="8" type="radio"  />
                                        <span>3 years</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap spouse-ex-canada" name="group20" value="9" type="radio"  />
                                        <span>4 years</span>
                                    </label>
                                </p>

                                <p>
                                    <label>
                                        <input class="with-gap spouse-ex-canada" name="group20" value="10" type="radio"  />
                                        <span>5 years or more</span>
                                    </label>
                                </p>






                            </div>
                            <div class="col s2 center-align">
                                <b><span class="spouse-ex-canada-value score-board" >0</span></b>


                            </div>
                        
                        <!--end canadian-->



                    </div>




                <!--end education-->


            </div>

            <!--english-->

            <h5 class="truncate section">Spouse's English or French:</h5>
            <div class=" z-depth-1 grey lighten-5 hoverable" >

                <div class="row">

                    <!--listening-->

                    <div class="col s6">
                        <div class="col s10 ">
                            <small style="color: #9e9e9e;">Listening</small>
                            <p>
                                <label>
                                    <input class="with-gap spouse-listening" name="group21" value="0" type="radio"  />
                                    <span>TEF 180 or ITELS 4.5  less </span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap spouse-listening" name="group21" value="1" type="radio"  />
                                    <span>TEF 181-248 - IELTS 5.0 to 5.5 </span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap spouse-listening" name="group21" value="3" type="radio"  />
                                    <span>TEF 181-248 - IELTS 6.0 to 7.5 </span>
                                </label>
                            </p>


                            <p>
                                <label>
                                    <input class="with-gap spouse-listening" name="group21" value="5" type="radio"  />
                                    <span>TEF 249-279 -IELTS 8.0 to 9.0</span>
                                </label>
                            </p>




                        </div>
                        <div class="col s2">
                            <b><span class="spouse-listening-value score-board" >0</span></b>


                        </div>
                    </div>
                    <!--end listening-->

                    <!--reading-->

                    <div class="col s6">
                        <div class="col s10 ">
                            <small style="color: #9e9e9e;">Reading</small>
                            <p>
                                <label>
                                    <input class="with-gap spouse-listening" name="group21" value="0" type="radio"  />
                                    <span>TEF 180 or ITELS 4.5  less </span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap spouse-listening" name="group21" value="1" type="radio"  />
                                    <span>TEF 181-248 - IELTS 5.0 to 5.5 </span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap spouse-listening" name="group21" value="3" type="radio"  />
                                    <span>TEF 181-248 - IELTS 6.0 to 7.5 </span>
                                </label>
                            </p>


                            <p>
                                <label>
                                    <input class="with-gap spouse-listening" name="group21" value="5" type="radio"  />
                                    <span>TEF 249-279 -IELTS 8.0 to 9.0</span>
                                </label>
                            </p>




                        </div>
                        <div class="col s2">
                            <b><span class="spouse-reading-value score-board" >0</span></b>


                        </div>
                    </div>
                    <!--end reading-->

                    <!--writing-->

                    <div class="col s6">
                        <div class="col s10 ">
                            <small style="color: #9e9e9e;">Writing</small>
                            <p>
                                <label>
                                    <input class="with-gap spouse-listening" name="group21" value="0" type="radio"  />
                                    <span>TEF 180 or ITELS 4.5  less </span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap spouse-listening" name="group21" value="1" type="radio"  />
                                    <span>TEF 181-248 - IELTS 5.0 to 5.5 </span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap spouse-listening" name="group21" value="3" type="radio"  />
                                    <span>TEF 181-248 - IELTS 6.0 to 7.5 </span>
                                </label>
                            </p>


                            <p>
                                <label>
                                    <input class="with-gap spouse-listening" name="group21" value="5" type="radio"  />
                                    <span>TEF 249-279 -IELTS 8.0 to 9.0</span>
                                </label>
                            </p>



                        </div>
                        <div class="col s2">
                            <b><span class="spouse-writing-value score-board" >0</span></b>


                        </div>
                    </div>
                    <!--end writing-->

                    <!--speaking-->

                    <div class="col s6">
                        <div class="col s10 ">
                            <small style="color: #9e9e9e;">Speaking</small>
                            <p>
                                <label>
                                    <input class="with-gap spouse-listening" name="group21" value="0" type="radio"  />
                                    <span>TEF 180 or ITELS 4.5  less </span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap spouse-listening" name="group21" value="1" type="radio"  />
                                    <span>TEF 181-248 - IELTS 5.0 to 5.5 </span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap spouse-listening" name="group21" value="3" type="radio"  />
                                    <span>TEF 181-248 - IELTS 6.0 to 7.5 </span>
                                </label>
                            </p>


                            <p>
                                <label>
                                    <input class="with-gap spouse-listening" name="group21" value="5" type="radio"  />
                                    <span>TEF 249-279 -IELTS 8.0 to 9.0</span>
                                </label>
                            </p>




                        </div>
                        <div class="col s2">
                            <b><span class="spouse-speaking-value score-board" >0</span></b>


                        </div>
                    </div>
                    <!--end speaking-->



                </div>
                <div class="row truncate section blue-grey lighten-5">

                    <div class="col s10  blue-grey lighten-5">
                        <h5>Category B: Spouse / common-law partner subtotal:</h5>

                    </div>
                    <div class="col s2 center-align-position">
                        <b><span class="spouse-subtotal" >0</span></b>

                    </div>

                </div>




            </div>

            <!-- end english-->


            <!-- end spouse-->

            </div>
            </div>

            <div class="row spouse-not-selected z-depth-1 light-blue accent-1 hoverable" style="padding: 8px">
                <p style="font-weight: 500">Please update your marital status to add information about your spouse or common-law partner.</p>

            </div>

            <!--category c-->


            <h5 class="truncate section">Category C: Skill transferability</h5>
            <div class=" z-depth-1 grey lighten-5 hoverable skill-transfer" >

                <div class="row">

                    <div class="col s12">
                        <div class="col s10">
                            <p>Official language and level of education</p>

                        </div>
                        <div class="col s2">
                            <b><span class="score-board-trans language-education" >0</span></b>
                        </div>

                    </div>
                    <div class="col s12">
                        <div class="col s10">
                            <p>Canadian work experience and level of education</p>

                        </div>
                        <div class="col s2">
                            <b><span class="score-board-trans canada-ex-edu" >0</span></b>
                        </div>

                    </div>
                    <div class="col s12">
                        <div class="col s10">
                            <p>Official language and foreign work experience</p>

                        </div>
                        <div class="col s2">
                            <b><span class="score-board-trans language-foreign" >0</span></b>
                        </div>

                    </div>
                    <div class="col s12">
                        <div class="col s10">
                            <p>Canadian and foreign work experience</p>

                        </div>
                        <div class="col s2">
                            <b><span class="score-board-trans canada-foreign" >0</span></b>
                        </div>

                    </div>


                    <div class="col s12">
                        <div class="col s10">
                            <p>Official language and trade certificate</p>

                        </div>
                        <div class="col s2">
                            <b><span class="score-board-trans trade-certificate" >0</span></b>
                        </div>

                    </div>


                </div>
                <div class="row truncate section blue-grey lighten-5">

                    <div class="col s10  blue-grey lighten-5">
                        <h5>Category C: Skill transferability subtotal:</h5>

                    </div>
                    <div class="col s2">
                        <b><span class="score-board trans-sub" >0</span></b>

                    </div>

                </div>




            </div>



            <!--end category D-->


            <div class="additional-subtotal">
            <h5 class="truncate section">Category D: Additional points:</h5>
            <div class=" z-depth-1 grey lighten-5 hoverable" >

                <div class="row">

                    <!--Provincial nomincation-->

                    <div class="col s6">
                        <div class="col s10 ">
                            <small style="color: #9e9e9e;">Provincial nomincation</small>
                            <p>
                                <label>
                                    <input class="with-gap provincial" name="group15"  value="0" type="radio"  />
                                    <span>None </span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap provincial" name="group15" value="600" type="radio"  />
                                    <span>valid certification of nomination</span>
                                </label>
                            </p>





                        </div>
                        <div class="col s2 ">
                            <b><span class="provincial-value score-additional">0</span></b>


                        </div>
                    </div>
                    <!--end Provincial nomincation-->

                    <!--offer of employment in Canada-->

                    <div class="col s6">
                        <div class="col s10 ">
                            <small style="color: #9e9e9e;">offer of employment in Canada</small>
                            <p>
                                <label>
                                    <input class="with-gap offer-em-canada" name="group16" value="0" type="radio"  />
                                    <span>None </span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap offer-em-canada" name="group16" value="200" type="radio"  />
                                    <span>Offer of employment in NOC 00xx </span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap offer-em-canada" name="group16" value="50" type="radio"  />
                                    <span>Offer of employment in other NOC O/A/B </span>
                                </label>
                            </p>

                        </div>
                        <div class="col s2">
                            <b><span class="offer-em-canada-value score-additional">0</span></b>


                        </div>
                    </div>
                    <!--end offer of employment in Canada-->

                    <!--Canadian Education-->

                    <div class="col s6">
                        <div class="col s10 ">
                            <small style="color: #9e9e9e;">Canadian Education</small>
                            <p>
                                <label>
                                    <input class="with-gap education-canada" name="group17" value="0"  type="radio"  />
                                    <span>None</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap education-canada" name="group17" value="15" type="radio"  />
                                    <span>Completed a one-year or two-year post-secondary program</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap education-canada" name="group17" value="30" type="radio"  />
                                    <span>Completed a three year program or higher</span>
                                </label>
                            </p>

                        </div>
                        <div class="col s2">
                            <b><span class="education-canada-value score-additional">0</span></b>


                        </div>
                    </div>
                    <!--end Canadian Education-->

                    <!--Siblings in Canada-->

                    <div class="col s6">
                        <div class="col s10 ">
                            <small style="color: #9e9e9e;">Siblings in Canada</small>
                            <p>
                                <label>
                                    <input class="with-gap sibling-canada" name="group18" value="0" type="radio"  />
                                    <span>None</span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input class="with-gap sibling-canada" name="group18" value="15" type="radio"  />
                                    <span>Brother or sister in Canada</span>
                                </label>
                            </p>

                        </div>
                        <div class="col s2">
                            <b><span class="sibling-canada-value score-additional">0</span></b>


                        </div>
                    </div>
                    <!--end Siblings in Canada-->
                    <div >

                    </div>



                </div>
                <div class="row truncate section blue-grey lighten-5">

                    <div class="col s10  blue-grey lighten-5">
                        <h5>Category D: Additional points subtotal:</h5>

                    </div>
                    <div class="col s2">

                        <b><span class="score-board score-additional-total">0</span></b>


                    </div>

                </div>




            </div>
            </div>

            <div class="row truncate section blue-grey lighten-5 hoverable">

                <div class="col s10 ">
                    <h3>Total Express Entry CRS score:</h3>

                </div>
                <div class="col s2">
                    <h3 class="score">0</h3>

                </div>

            </div>





        </form>

        <!-- Modal Trigger -->
        <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

        <!-- Modal Structure -->
        <div id="modal1" class="modal bottom-sheet">
            <div class="modal-content">
                <h4>Modal Header</h4>
                <p>A bunch of text</p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
            </div>
        </div>



    </div>

<script src="js/jquery.js"></script>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
<script type="text/javascript" src="materialize/js/noUiSlider.js"></script>

<script src="js/crs.js"></script>
<script src="js/range-slider.js"></script>

<script>

    (function ($) {
        $(function () {

            //initialize all modals
            $('.modal').modal();

            //now you can open modal from code
           // $('#modal1').modal('open');

            //or by click on trigger
            $('.trigger-modal').modal();

        }); // end of document ready
    })(jQuery);

</script>
</body>
</html>
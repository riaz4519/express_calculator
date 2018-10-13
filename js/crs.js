/**
 * Created by User on 9/17/2018.
 */

$(document).ready( function() {


    var crs_calculate_object = {

        marital_status:'SINGLE',

        age_value:0,

        education_value:0,
        ielts_status:'NULL',

        ielts_value:{
            listening:0,

            reading:0,

            writing:0,

            speaking:0
        },
        tef_status:'NULL',
        tef_value:{
            listening:0,

            reading:0,

            writing:0,

            speaking:0
        },
        work_canada:0,

        work_foreign:0,

        canadian_trade:0,

        spouse_edu:0,

        spouse_work:0,

        spouse_ielts_status:'NULL',

        spouse_ielts:{
            listening:0,

            reading:0,

            writing:0,

            speaking:0
        },
        language_edu:0,

        canada_work_ex_edu_level:0,

        language_foreign_ex:0,

        canada_foreign_ex:0,

        trade_status:'NULL',

        language_trade:0,

        pro_nomination:0,

        offer_of_employment:0,

        canadian_education:0,

        siblings_canada:0,

        total_sum:" ",

        ip:'NULL',

        email:'NULL',

        phone:'NULL',
        city:'NULL',
        name:'NULL'



    };

    /*age value change according to marital status*/

    /*end age value change*/

    function age_function() {



        var age = parseInt($('.age-field').val());

        /*with out spouse*/
        if ($('.spouse').hasClass('spouse-remove')) {


            if (age <= 17) {

                crs_calculate_object.age_value = 0;

                $('.show-points-age').text(0);
                console.log('age');

            }
            else if (age == 18) {

                crs_calculate_object.age_value = 88;

                $('.show-points-age').text(99);
                console.log('age');

            }
            else if (age == 19) {

                crs_calculate_object.age_value = 105;
                $('.show-points-age').text(105);
                console.log('age');

            }
            else if (age >= 20 && age <= 29) {
                crs_calculate_object.age_value = 110;
                $('.show-points-age').text(110);
                console.log('age');

            }
            else if (age == 30) {
                crs_calculate_object.age_value = 105;

                $('.show-points-age').text(105);
                console.log('age');

            }
            else if (age == 31) {

                crs_calculate_object.age_value = 99;
                $('.show-points-age').text(99);
                console.log('age');

            }
            else if (age == 32) {

                crs_calculate_object.age_value = 94;

                $('.show-points-age').text(94);
                console.log('age');

            }
            else if (age == 33) {

                crs_calculate_object.age_value = 88;
                $('.show-points-age').text(88);
                console.log('age');

            }
            else if (age == 34) {
                crs_calculate_object.age_value = 83;

                $('.show-points-age').text(83);
                console.log('age');

            }
            else if (age == 35) {
                crs_calculate_object.age_value = 77;
                $('.show-points-age').text(77);
                console.log('age');

            }
            else if (age == 36) {
                crs_calculate_object.age_value = 72;
                $('.show-points-age').text(72);
                console.log('age');

            }
            else if (age == 37) {
                crs_calculate_object.age_value = 66;
                $('.show-points-age').text(66);
                console.log('age');

            }
            else if (age == 38) {
                crs_calculate_object.age_value = 61;
                $('.show-points-age').text(61);
                console.log('age');

            }
            else if (age == 39) {
                crs_calculate_object.age_value = 55;
                $('.show-points-age').text(55);
                console.log('age');

            }
            else if (age == 40) {
                crs_calculate_object.age_value = 50;
                $('.show-points-age').text(50);
                console.log('age');

            }
            else if (age == 41) {
                crs_calculate_object.age_value = 39;
                $('.show-points-age').text(39);
                console.log('age');

            }
            else if (age == 42) {
                crs_calculate_object.age_value = 28;
                $('.show-points-age').text(28);
                console.log('age');

            }
            else if (age == 43) {
                crs_calculate_object.age_value = 17;
                $('.show-points-age').text(17);
                console.log('age');

            }
            else if (age == 44) {
                crs_calculate_object.age_value = 6;
                $('.show-points-age').text(6);
                console.log('age');

            }
            else if (age >= 45) {
                crs_calculate_object.age_value = 0;
                $('.show-points-age').text(0);
                console.log('age');

            }
        }
        /*with spouse*/
        else{

            if (age <= 17) {

                crs_calculate_object.age_value = 0;

                $('.show-points-age').text(0);
                console.log('age');

            }
            else if (age == 18) {
                crs_calculate_object.age_value = 90;
                $('.show-points-age').text(90);
                console.log('age');

            }
            else if (age == 19) {
                crs_calculate_object.age_value = 95;
                $('.show-points-age').text(95);
                console.log('age');

            }
            else if (age >= 20 && age <= 29) {
                crs_calculate_object.age_value = 100;
                $('.show-points-age').text(100);
                console.log('age');

            }
            else if (age == 30) {
                crs_calculate_object.age_value = 95;
                $('.show-points-age').text(95);
                console.log('age');

            }
            else if (age == 31) {
                crs_calculate_object.age_value = 90;
                $('.show-points-age').text(90);
                console.log('age');

            }
            else if (age == 32) {
                crs_calculate_object.age_value = 85;
                $('.show-points-age').text(85);
                console.log('age');

            } else if (age == 33) {
                crs_calculate_object.age_value = 80;
                $('.show-points-age').text(80);
                console.log('age');

            } else if (age == 34) {
                crs_calculate_object.age_value = 75;
                $('.show-points-age').text(75);
                console.log('age');

            }
            else if (age == 35) {
                crs_calculate_object.age_value = 70;
                $('.show-points-age').text(70);
                console.log('age');

            }
            else if (age == 36) {
                crs_calculate_object.age_value = 65;
                $('.show-points-age').text(65);
                console.log('age');

            }
            else if (age == 37) {
                crs_calculate_object.age_value = 60;
                $('.show-points-age').text(60);
                console.log('age');

            }
            else if (age == 38) {
                crs_calculate_object.age_value = 55;
                $('.show-points-age').text(55);
                console.log('age');

            }
            else if (age == 39) {
                crs_calculate_object.age_value = 50;
                $('.show-points-age').text(50);
                console.log('age');

            }
            else if (age == 40) {
                crs_calculate_object.age_value = 45;
                $('.show-points-age').text(45);
                console.log('age');

            }
            else if (age == 41) {
                crs_calculate_object.age_value = 35;
                $('.show-points-age').text(35);
                console.log('age');

            }
            else if (age == 42) {
                crs_calculate_object.age_value = 25;
                $('.show-points-age').text(25);
                console.log('age');

            }
            else if (age == 43) {
                crs_calculate_object.age_value = 15;
                $('.show-points-age').text(15);
                console.log('age');

            }
            else if (age == 44) {
                crs_calculate_object.age_value = 5;
                $('.show-points-age').text(5);
                console.log('age');

            }
            else if (age >= 45) {
                crs_calculate_object.age_value = 0;
                $('.show-points-age').text(0);
                console.log('age');

            }

        }
        scoreBoard();

    }


    $('.input-range').on('change',function () {

        age_function();

    });

    /*education radio*/

   $('.education').on('click',function () {

       level_of_education();


   });


   function level_of_education() {

       var education = parseInt($("input[name='group3']:checked").val());


       if (isNaN(education)){
           education = 0;
       }


       if ($('.spouse').hasClass('spouse-remove')) {


           $('.education-value').text(education);

       }else{
           if (education == 30){
               education = 28;

           }
           else if (education == 90){
               education = 84;

           }
           else if (education == 98){
               education = 91;

       }
           else if (education == 120){
               education = 112;

           }
           else if (education == 128){
               education = 119;

           }
           else if (education == 135){
               education = 126;

           }
           else if (education == 150){
               education = 140;

           }



           $('.education-value').text(education);
       }
       crs_calculate_object.education_value = education;
       scoreBoard();
       education_language();
       canadian_work_education();
       education_language();






   }



   /*function for official language pro*/

   function official_english_listening() {

       var listening = parseInt($("input[name='group4']:checked").val());

       if (isNaN(listening)){
           listening = 0;
       }

       if ($('.spouse').hasClass('spouse-remove')){

           $('.english-listening-value').text(listening);
           scoreBoard();

       }
       else{
           if (listening == 9 ){
               listening = 8;
           }
           else if(listening == 17){
               listening = 16;
           }
           else if(listening == 23){
               listening = 22;
           }
           else if(listening == 31){
               listening = 29;
           }
           else if(listening == 34){
               listening = 32;
           }


           $('.english-listening-value').text(listening);
           //scoreBoard();
           scoreBoard();

       }
       crs_calculate_object.ielts_value.listening = listening;

       scoreBoard();
       foreign_work_ex();




   }

   /*end of official language pro*/

   /*english listen*/

   $('.english-listening').on('click',function () {

       official_english_listening();

   });

   /*end english listen*/


    function official_english_reading(){

        var reading = parseInt($("input[name='group5']:checked").val());

        if (isNaN(reading)){
            reading = 0;
        }

        if ($('.spouse').hasClass('spouse-remove')){

            $('.english-reading-value').text(reading);
            scoreBoard();


        }
        else{
            if (reading == 9 ){
                reading = 8;
            }
            else if(reading == 17){
                reading = 16;
            }
            else if(reading == 23){
                reading = 22;
            }
            else if(reading == 31){
                reading = 29;
            }
            else if(reading == 34){
                reading = 32;
            }

            $('.english-reading-value').text(reading);
            scoreBoard();



        }
        crs_calculate_object.ielts_value.reading = reading;

        scoreBoard();
        foreign_work_ex();
        education_language();





    }

    /*english reading*/

    $('.english-reading').on('click',function () {



       official_english_reading();

    });

    /*end english reading*/


    function official_english_writing(){

        var writing = parseInt($("input[name='group6']:checked").val());

        if (isNaN(writing)){
            writing = 0;
        }

        if ($('.spouse').hasClass('spouse-remove')){

            $('.english-writing-value').text(writing);
            scoreBoard();


        }
        else{
            if (writing == 9 ){
                writing = 8;
            }
            else if(writing == 17){
                writing = 16;
            }
            else if(writing == 23){
                writing = 22;
            }
            else if(writing == 31){
                writing = 29;
            }
            else if(writing == 34){
                writing = 32;
            }

            $('.english-writing-value').text(writing);
            scoreBoard();



        }
        crs_calculate_object.ielts_value.writing = writing;

        scoreBoard();

        foreign_work_ex();
        education_language();





    }

    /*english writing*/

    $('.english-writing').on('click',function () {



        official_english_writing();

    });

    /*end english writing*/


    function official_english_speaking(){

        var speaking = parseInt($("input[name='group7']:checked").val());

        if (isNaN(speaking)){
            speaking = 0;
        }

        if ($('.spouse').hasClass('spouse-remove')){

            $('.english-speaking-value').text(speaking);

            scoreBoard();

        }
        else{
            if (speaking == 9 ){
                speaking = 8;

            }
            else if(speaking== 17){
                speaking = 16;

            }
            else if(speaking == 23){
                speaking = 22;

            }
            else if(speaking == 31){
                speaking = 29;
            }
            else if(speaking == 34){
                speaking = 32;

            }

            $('.english-speaking-value').text(speaking);
            scoreBoard();



        }

        crs_calculate_object.ielts_value.speaking = speaking;

        scoreBoard();
        foreign_work_ex();
        education_language();





    }

    /*english speaking*/

    $('.english-speaking').on('click',function () {



       official_english_speaking();

    });

    /*end english speaking*/





    function second_french_listening() {

        var listening = parseInt($("input[name='group8']:checked").val());

        if (isNaN(listening)){
            listening = 0;
        }

        if ($('.spouse').hasClass('spouse-remove')){

            $('.french-listening-value').text(listening);


        }
        else{

            $('.french-listening-value').text(listening);

        }

        crs_calculate_object.tef_value.listening = listening;

        scoreBoard();




    }

    /*french listen*/

    $('.french-listening').on('click',function () {

        second_french_listening();
    });

    /*end french listen*/


    function second_french_reading() {

        var reading = parseInt($("input[name='group9']:checked").val());

        if (isNaN(reading)){
            reading = 0;
        }

        if ($('.spouse').hasClass('spouse-remove')){

            $('.french-reading-value').text(reading);


        }
        else{

            $('.french-reading-value').text(reading);
            //scoreBoard();
        }

        crs_calculate_object.tef_value.reading = reading;

        scoreBoard();




    }

    /*french reading*/

    $('.french-reading').on('click',function () {



        second_french_reading();

    });

    /*end french reading*/


    function second_french_writing() {

        var writing = parseInt($("input[name='group10']:checked").val());

        if (isNaN(writing)){
            writing = 0;
        }

        if ($('.spouse').hasClass('spouse-remove')){

            $('.french-writing-value').text(writing);


        }
        else{

            $('.french-writing-value').text(writing);
            //scoreBoard();
        }

        crs_calculate_object.tef_value.writing = writing;

        scoreBoard();




    }

    /*french writing*/

    $('.french-writing').on('click',function () {



       second_french_writing();

    });

    /*end french writing*/


    function second_french_speaking() {

        var speaking = parseInt($("input[name='group11']:checked").val());

        if (isNaN(speaking)){
            speaking = 0;
        }

        if ($('.spouse').hasClass('spouse-remove')){

            $('.french-speaking-value').text(speaking);


        }
        else{

            $('.french-speaking-value').text(speaking);
            //scoreBoard();
        }

        crs_calculate_object.tef_value.speaking = speaking;
        scoreBoard();




    }

    /*french speaking*/

    $('.french-speaking').on('click',function () {



      second_french_speaking();
    });

    /*end french speaking*/


    /*married status*/

    $('.married-status').on('change',function () {

        var total_score = parseInt($('#score').text());
        var spouse_total = parseInt($('.spouse-subtotal').text());

        if ($('.spouse').hasClass('spouse-remove')){

            crs_calculate_object.marital_status = 'MARRIED';

            $('.spouse').removeClass('spouse-remove');
            $('.spouse-not-selected').addClass('spouse-remove');
            var add_spouse = total_score + spouse_total;

            $('.score').text(add_spouse);
            age_function();

            /*education change*/

            level_of_education();

            /*listening*/

            official_english_listening();

            /*reading*/

            official_english_reading();

            /*writing*/
            official_english_writing();

            /*speaking*/
            official_english_speaking();

            /*canada work ex*/
            canada_work_ex();



        }else{


            crs_calculate_object.marital_status = 'SINGLE';

            $('.spouse').addClass('spouse-remove');
            $('.spouse-not-selected').removeClass('spouse-remove');

            var remove_spouse = total_score - spouse_total;
            $('.score').text(remove_spouse);

            age_function();
            /*level of education*/
            level_of_education();

            /*listening*/

            official_english_listening();

            /*reading*/

            official_english_reading();

            /*writing*/
            official_english_writing();
            /*speaking*/
            official_english_speaking();
            /*canada work ex*/
            canada_work_ex();



        }



    });

    /*end married status*/






    function canada_work_ex() {

        var canada_work = parseInt($("input[name='group12']:checked").val());

        if (isNaN(canada_work)){
            canada_work = 0;
        }

        if ($('.spouse').hasClass('spouse-remove')){

            $('.work-ex-canada-value').text(canada_work);


        }
        else{

            if(canada_work == 40){
                canada_work = 35;
            }
            else if(canada_work == 53){
                canada_work = 46;
            }
            else if(canada_work == 64){
                canada_work = 56;

            }
            else if(canada_work == 72){
                canada_work = 63;

            }
            else if(canada_work == 80){
                canada_work = 70;

            }


            $('.work-ex-canada-value').text(canada_work);
            //scoreBoard();
        }
        crs_calculate_object.work_canada = canada_work;

        scoreBoard();
        foreign_work_ex();

        canadian_work_education();




    }

    /*work ex canada*/

    $('.work-ex-canada').on('click',function () {

       canada_work_ex();


    });

    /*end work ex canada*/



    function foreign_work_ex(){

        var canada_ex = parseInt($('.work-ex-canada-value').text());
       var foreign_work = parseInt($("input[name='group13']:checked").val());
       console.log(foreign_work);

       var work_total  = 0;

       var ielts_avg  =  0;



       /*for */

       var under7 = 0;
       var under9 = 0;
       var under5 = 0;


       $('.english-pro .score-board').each(function () {


           if (parseInt($(this).text()) >= 16 && parseInt($(this).text()) <= 28 ){

               under7++
           }
           else if (parseInt($(this).text()) >= 29 && parseInt($(this).text()) <= 34 ){

               under9++
           }
           if (parseInt($(this).text()) >= 6 && parseInt($(this).text()) <= 15){
               under5++;
           }
       });
       console.log("fds"+under5);

       if ($('input[name="group19"]:checked').val() == 2){


          if (under5 + under7 + under9 == 4){
              console.log('error2');

              if (under5 >= 1){

                  $('.trade-certificate').text(25);
                  crs_calculate_object.canadian_trade = 25;

              }
              else if (under7 >= 1 || under9 >=1){

                  $('.trade-certificate').text(50);
                  crs_calculate_object.canadian_trade = 15;
              }
          }
       }
       else {
           $('.trade-certificate').text(0);
       }
       console.log('fdsf'+under7);
       console.log('fdsf'+under9);

       var state_for_foreign_language = 0;
       var state_for_foreign_trade = 0;




    if ( under7 + under9 == 4){
        console.log('foreign'+foreign_work);

        if(under7 >=1){



            if (foreign_work == 2){

                crs_calculate_object.language_foreign_ex  = 13;

                $('.language-foreign').text(13);



            }
            else if (foreign_work == 3){
                crs_calculate_object.language_foreign_ex  = 25;
                $('.language-foreign').text(25);

            }
            else{
                crs_calculate_object.language_foreign_ex  = 0;
                $('.language-foreign').text(0)
            }
            state_for_foreign_language = 1
            console.log(state_for_foreign_language);
        }else{

            if (foreign_work == 2){
                crs_calculate_object.language_foreign_ex  = 25;

                $('.language-foreign').text(25);



            }
            else if (foreign_work == 3){
                crs_calculate_object.language_foreign_ex  = 50;
                $('.language-foreign').text(50);

            }
            else{
                crs_calculate_object.language_foreign_ex  = 0;
                $('.language-foreign').text(0)
            }
            state_for_foreign_language = 2;
            console.log(state_for_foreign_language);
        }

    }else {
        $('.language-foreign').text(0);
        crs_calculate_object.language_foreign_ex  = 0;
    }





       if (foreign_work == 1){

           $('.language-foreign').text(0);
           $('.canada-foreign').text(0);
           crs_calculate_object.language_foreign_ex = 0;
           crs_calculate_object.canada_foreign_ex = 0;

       }


       if (canada_ex  == 40){

           if(foreign_work == 2){
               $('.canada-foreign').text(13);
               crs_calculate_object.canada_foreign_ex = 13;
           }
           else if(foreign_work ==3){
               $('.canada-foreign').text(25);
               crs_calculate_object.canada_foreign_ex = 25;

           }
           else {
               $('.canada-foreign').text(0);
               crs_calculate_object.canada_foreign_ex = 25;
           }
           scoreBoard();

       }
       else if(canada_ex >40){
           if(foreign_work == 2){
               $('.canada-foreign').text(25);
               crs_calculate_object.canada_foreign_ex = 25;
           }
           else if(foreign_work ==3){
               $('.canada-foreign').text(50);
               crs_calculate_object.canada_foreign_ex = 50;

           }
           else {
               $('.canada-foreign').text(0);
               crs_calculate_object.canada_foreign_ex = 0;
           }

           scoreBoard();
       }











        scoreBoard();
        education_language();


    }

    /*work ex foreign*/

    $('.foreign-ex').on('click',function () {

        foreign_work_ex();



    });

    /*end work ex foreign*/


    /*provincial*/



    $('.provincial').on('click',function () {


        var provin = parseInt($(this).val());
        $('.provincial-value').text($(this).val());

        var additional_total = 0;

        $('.score-additional').each(function () {

            additional_total = additional_total + parseInt($(this).text());
        })

        if (additional_total > 600){
            additional_total = 600;
        }

        $('.score-additional-total').text(additional_total);

        scoreBoard();

        crs_calculate_object.pro_nomination = provin;

    });

    /*fdsf*/

    /*offer form canada*/

    $('.offer-em-canada').on('click',function () {

        var offer_canada = parseInt($(this).val());

        $('.offer-em-canada-value').text($(this).val());

        var additional_total = 0;

        $('.score-additional').each(function () {

            additional_total = additional_total + parseInt($(this).text());
        })

        if (additional_total > 600){
            additional_total = 600;
        }

        $('.score-additional-total').text(additional_total);

        crs_calculate_object.offer_of_employment = offer_canada;

        scoreBoard();

    });


    /*end offer form canada*/

    /*education canada value*/

    $('.education-canada').on('click',function () {
        var education_canada = parseInt($(this).val());

        $('.education-canada-value').text($(this).val());

        var additional_total = 0;

        $('.score-additional').each(function () {

            additional_total = additional_total + parseInt($(this).text());
        })

        if (additional_total > 600){
            additional_total = 600;
        }

        $('.score-additional-total').text(additional_total);

        crs_calculate_object.canadian_education = education_canada;

        scoreBoard();

    });


    /*end education canada value*/


    /*sibling canada value*/

    $('.sibling-canada').on('click',function () {

        var sibling_canda = parseInt($(this).val());

        $('.sibling-canada-value').text($(this).val());


        var additional_total = 0;

        $('.score-additional').each(function () {

            additional_total = additional_total + parseInt($(this).text());
        })

        if (additional_total > 600){
            additional_total = 600;
        }

        $('.score-additional-total').text(additional_total);

        crs_calculate_object.siblings_canada = sibling_canda;

        scoreBoard();

    });


    /*end sibling canada value*/

    /*spouse education*/


    $('.spouse-education').on('click',function () {

        $('.spouse-education-value').text($(this).val());

        crs_calculate_object.spouse_edu = parseInt($(this).val());

        //scoreBoard();
        marriedChange();

    });

    /*end spouse education*/


    /*spouse ex canada*/

    $('.spouse-ex-canada').on('click',function () {

        $('.spouse-ex-canada-value').text($(this).val());
        crs_calculate_object.spouse_work = parseInt($(this).val());
        //scoreBoard();
        marriedChange();

    });

    /*spouse listening*/
    $('.spouse-listening').on('click',function () {



        var value = $('input[name="group21"]:checked').val();

        $('.spouse-listening-value').text(value);

        crs_calculate_object.spouse_ielts.listening = value;

       scoreBoard();
        marriedChange();

    });

    /*spouse listening*/

    /*spouse reading*/
    $('.spouse-reading').on('click',function () {

        console.log('fsfsd');
        var value = $('input[name="group32"]:checked').val();

        $('.spouse-reading-value').text(value);

        crs_calculate_object.spouse_ielts.reading = value;
        scoreBoard();
        marriedChange();

    });

    /*spouse reading*/

    /*spouse writing*/
    $('.spouse-writing').on('click',function () {
        var value = $('input[name="group33"]:checked').val();

        $('.spouse-writing-value').text(value);

        crs_calculate_object.ielts_value.writing = value;
        scoreBoard();
        marriedChange();

    });

    /*spouse writing*/
    /*spouse writing*/
    $('.spouse-speaking').on('click',function () {

        var value = $('input[name="group34"]:checked').val();
        $('.spouse-speaking-value').text(value);

        crs_calculate_object.spouse_ielts.speaking = value;
        scoreBoard();
        marriedChange();


    });

    /*spouse writing*/


    /*Official language and level of education*/
    function education_language() {



        var education_for_c = parseInt($('.education-value').text());

        var under7 = 0;
        var under9 = 0;

        $('.english-pro .score-board').each(function () {


            if (parseInt($(this).text()) >= 16 && parseInt($(this).text()) <= 28 ){

                under7++
            }
            else if (parseInt($(this).text()) >= 29 && parseInt($(this).text()) <= 34 ){

                under9++
            }

        });


        if (under7 + under9 == 4){
            var startpoint13 = 0;
            var endpoints13 = 0;
            var startpoint125 = 0;
            var endpoints25 = 0;


            if ($('.spouse').hasClass('spouse-remove')){

                startpoint13 = 90;
                endpoints13 = 120;
                startpoint125 = 128;
                endpoints25 = 150;

            }else {
                startpoint13 = 84;
                endpoints13 = 112;
                startpoint125 = 119;
                endpoints25 = 140;
            }

            if (under7 >=1){


                if (education_for_c >= startpoint13 && education_for_c <= endpoints13){
                    $('.language-education').text(13);
                    crs_calculate_object.language_edu = 13;
                }
                else if (education_for_c >= startpoint125 && education_for_c <= endpoints25){
                    $('.language-education').text(25);
                    crs_calculate_object.language_edu = 25;
                }
                else{
                    $('.language-education').text(0);
                    crs_calculate_object.language_edu = 0;
                }



            }
            else{


                if (education_for_c >= startpoint13 && education_for_c <= endpoints13){
                    $('.language-education').text(25);
                    crs_calculate_object.language_edu = 25;
                }
                else if (education_for_c >= startpoint125 && education_for_c <= endpoints25){
                    $('.language-education').text(50);
                    crs_calculate_object.language_edu = 50;
                }
                else{
                    $('.language-education').text(0);
                    crs_calculate_object.language_edu = 0;
                }
                scoreBoard();

            }



        }
        else{
            $('.language-education').text(0);
            crs_calculate_object.language_edu = 0;
        }




        scoreBoard();






    }

    function canadian_work_education() {

        var startpoint13 = 0;
        var endpoints13 = 0;
        var startpoint125 = 0;
        var endpoints25 = 0;
        if ($('.spouse').hasClass('spouse-remove')){

            startpoint13 = 90;
            endpoints13 = 120;
            startpoint125 = 128;
            endpoints25 = 150;

        }else {
            startpoint13 = 84;
            endpoints13 = 112;
            startpoint125 = 119;
            endpoints25 = 140;
        }


        var canada_value = parseInt($('.work-ex-canada-value').text());
        var education_for_c = parseInt($('.education-value').text());

        if (canada_value >=35 && canada_value<=40 ){

            if (education_for_c >=startpoint13 && education_for_c <=endpoints13) {


                $('.canada-ex-edu').text(13);
                crs_calculate_object.canada_work_ex_edu_level = 13;

            }

            else if (education_for_c >=startpoint125 && education_for_c <=endpoints25){
                $('.canada-ex-edu').text(25);
                crs_calculate_object.canada_work_ex_edu_level = 25;

                }


        }

    if (canada_value >=46 && canada_value<= 80){

        if (education_for_c >=startpoint13 && education_for_c <=endpoints13) {
            $('.canada-ex-edu').text(25);
            crs_calculate_object.canada_work_ex_edu_level = 25;


        }

        else if (education_for_c >=startpoint125 && education_for_c <=endpoints25){
            $('.canada-ex-edu').text(50);
            crs_calculate_object.canada_work_ex_edu_level = 50;

        }


}

scoreBoard();




    }


    /*married status change*/
    function marriedChange() {
        var married_sum = 0;


        $('.spouse-area .score-board-sp').each(function () {

           married_sum = married_sum + parseInt($(this).text());
           console.log($(this).text());

        })

        $('.spouse-subtotal').text(married_sum);
        scoreBoard();



    }


    function scoreBoard(){

      var sum = 0;
      var sum_coreA = 0;
      var sum_D = 0;
      $('.score-board').each(function () {

          sum = sum + parseInt($(this).text());

      });

        var marr_sub = parseInt($('#spouse-subtotal').text());

      if ($('.married-status').is(':checked')){
          sum = sum + marr_sub;
      }
      else{

      }


      $('.score').text(sum);

      crs_calculate_object.total_sum = sum;

      $('.coreA .score-board').each(function () {

          sum_coreA = sum_coreA + parseInt($(this).text());

      });
      $('.coreA-Value').text(sum_coreA);

      $('.additional-subtotal .score-board').each(function () {

          sum_D = sum_D + parseInt($(this).text());

      });
      $('.additional-points').text(sum_D);

      var work_total = 0;
        $('.skill-transfer .score-board-trans').each(function () {
            work_total = work_total + parseInt($(this).text());

        });

        if (work_total >100){
            work_total = 100;
        }

        $('.trans-sub').text(work_total);

        console.log(crs_calculate_object);








  }

  $('.proceed-button').on('click',function () {


    var f_name = $('.first_name').val();

    var l_name = $('.last_name').val();

    var email = $('.email_client').val();

    var phone = $('.phone_client').val();

    if (f_name.length >0 && l_name.length > 0 && phone.length > 0){

        crs_calculate_object.phone = '+88'+phone;
        crs_calculate_object.name = f_name +' '+l_name;
        crs_calculate_object.email = email;

        $('.modal-get-client-name').modal('close');

        console.log(crs_calculate_object.name);



    }

    $('.print-button').on('click',function () {


        var count = 0;
        var store = [];

        for (var first_dimension in crs_calculate_object){

            var dimension1 = crs_calculate_object[first_dimension];

            if (typeof (dimension1) == "object"){


                for (var second_dimension in dimension1){

                    store[first_dimension+'_'+second_dimension] = dimension1[second_dimension];
                }


            }
            else{
                store[first_dimension] = dimension1;
            }


        }





        var arr = [];
        for (var i in store) {
            if (store.hasOwnProperty(i)) {
                arr.push([i, store[i]]);
            }
        }


        console.log(arr);



        $.ajax({
            type: "POST",
            url: 'process.php',
            data: {"students" :arr},
            cache: false,
            success: function(result){
                if ($.trim(result) === "done") {

                    window.open('http://localhost/officeMain/express_calculator/printing_page.php', '_blank');

                }else{
                    alert(result);
                }








            }
        });


    });






  });





});






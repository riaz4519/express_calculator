/**
 * Created by User on 9/17/2018.
 */

$(document).ready( function() {


    /*age value change according to marital status*/


        $('.married-status').on('change',function () {


        });

    /*end age value change*/

    function age_function() {

        var age = parseInt($('.age-field').val());

        /*with out spouse*/
        if ($('.spouse').hasClass('spouse-remove')) {


            if (age <= 17) {

                $('.show-points-age').text(0);
                console.log('age');

            }
            else if (age == 18) {

                $('.show-points-age').text(99);
                console.log('age');

            }
            else if (age == 19) {

                $('.show-points-age').text(105);
                console.log('age');

            }
            else if (age >= 20 && age <= 29) {

                $('.show-points-age').text(110);
                console.log('age');

            }
            else if (age == 30) {

                $('.show-points-age').text(105);
                console.log('age');

            }
            else if (age == 31) {

                $('.show-points-age').text(99);
                console.log('age');

            }
            else if (age == 32) {

                $('.show-points-age').text(94);
                console.log('age');

            } else if (age == 33) {

                $('.show-points-age').text(88);
                console.log('age');

            } else if (age == 34) {

                $('.show-points-age').text(83);
                console.log('age');

            }
            else if (age == 35) {

                $('.show-points-age').text(77);
                console.log('age');

            }
            else if (age == 36) {

                $('.show-points-age').text(72);
                console.log('age');

            }
            else if (age == 37) {

                $('.show-points-age').text(66);
                console.log('age');

            }
            else if (age == 38) {

                $('.show-points-age').text(61);
                console.log('age');

            }
            else if (age == 39) {

                $('.show-points-age').text(55);
                console.log('age');

            }
            else if (age == 40) {

                $('.show-points-age').text(50);
                console.log('age');

            }
            else if (age == 41) {

                $('.show-points-age').text(39);
                console.log('age');

            }
            else if (age == 42) {

                $('.show-points-age').text(28);
                console.log('age');

            }
            else if (age == 43) {

                $('.show-points-age').text(17);
                console.log('age');

            }
            else if (age == 44) {

                $('.show-points-age').text(6);
                console.log('age');

            }
            else if (age >= 45) {

                $('.show-points-age').text(0);
                console.log('age');

            }
        }
        /*with spouse*/
        else{

            if (age <= 17) {

                $('.show-points-age').text(0);
                console.log('age');

            }
            else if (age == 18) {

                $('.show-points-age').text(90);
                console.log('age');

            }
            else if (age == 19) {

                $('.show-points-age').text(95);
                console.log('age');

            }
            else if (age >= 20 && age <= 29) {

                $('.show-points-age').text(100);
                console.log('age');

            }
            else if (age == 30) {

                $('.show-points-age').text(95);
                console.log('age');

            }
            else if (age == 31) {

                $('.show-points-age').text(90);
                console.log('age');

            }
            else if (age == 32) {

                $('.show-points-age').text(85);
                console.log('age');

            } else if (age == 33) {

                $('.show-points-age').text(80);
                console.log('age');

            } else if (age == 34) {

                $('.show-points-age').text(75);
                console.log('age');

            }
            else if (age == 35) {

                $('.show-points-age').text(70);
                console.log('age');

            }
            else if (age == 36) {

                $('.show-points-age').text(65);
                console.log('age');

            }
            else if (age == 37) {

                $('.show-points-age').text(60);
                console.log('age');

            }
            else if (age == 38) {

                $('.show-points-age').text(55);
                console.log('age');

            }
            else if (age == 39) {

                $('.show-points-age').text(50);
                console.log('age');

            }
            else if (age == 40) {

                $('.show-points-age').text(45);
                console.log('age');

            }
            else if (age == 41) {

                $('.show-points-age').text(35);
                console.log('age');

            }
            else if (age == 42) {

                $('.show-points-age').text(25);
                console.log('age');

            }
            else if (age == 43) {

                $('.show-points-age').text(15);
                console.log('age');

            }
            else if (age == 44) {

                $('.show-points-age').text(5);
                console.log('age');

            }
            else if (age >= 45) {

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
       scoreBoard();






   }

   /*english listen*/

   $('.english-listening').on('click',function () {



       $('.english-listening-value').text($(this).val());
       scoreBoard();

   });

   /*end english listen*/

    /*english reading*/

    $('.english-reading').on('click',function () {



        $('.english-reading-value').text($(this).val());
        scoreBoard();

    });

    /*end english reading*/

    /*english writing*/

    $('.english-writing').on('click',function () {



        $('.english-writing-value').text($(this).val());
        scoreBoard();

    });

    /*end english writing*/

    /*english speaking*/

    $('.english-speaking').on('click',function () {



        $('.english-speaking-value').text($(this).val());
        scoreBoard();

    });

    /*end english speaking*/




    /*french listen*/

    $('.french-listening').on('click',function () {



        $('.french-listening-value').text($(this).val());
        scoreBoard();

    });

    /*end french listen*/

    /*french reading*/

    $('.french-reading').on('click',function () {



        $('.french-reading-value').text($(this).val());
        scoreBoard();

    });

    /*end french reading*/

    /*french writing*/

    $('.french-writing').on('click',function () {



        $('.french-writing-value').text($(this).val());
        scoreBoard();

    });

    /*end french writing*/

    /*french speaking*/

    $('.french-speaking').on('click',function () {



        $('.french-speaking-value').text($(this).val());
        scoreBoard();

    });

    /*end french speaking*/


    /*married status*/

    $('.married-status').on('change',function () {

        var total_score = parseInt($('#score').text());
        var spouse_total = parseInt($('.spouse-subtotal').text());

        if ($('.spouse').hasClass('spouse-remove')){


            $('.spouse').removeClass('spouse-remove');
            $('.spouse-not-selected').addClass('spouse-remove');
            var add_spouse = total_score + spouse_total;

            $('.score').text(add_spouse);
            age_function();

            /*education change*/

            level_of_education();

        }else{



            $('.spouse').addClass('spouse-remove');
            $('.spouse-not-selected').removeClass('spouse-remove');

            var remove_spouse = total_score - spouse_total;
            $('.score').text(remove_spouse);

            age_function();
            /*level of education*/
            level_of_education();

        }



    });

    /*end married status*/




    /*work ex canada*/

    $('.work-ex-canada').on('click',function () {

        $('.work-ex-canada-value').text($(this).val());
        scoreBoard();

    });

    /*end work ex canada*/

    /*work ex foreign*/

    $('.foreign-ex').on('click',function () {

        // $('.work-ex-canada-value').text($(this).val());
        if ($(this).val() == 2){

            var canada_ex = parseInt($('.work-ex-canada-value').text());
            console.log(canada_ex);
            if(canada_ex == 80 ){
                $('.foreign-ex-value').text(25);


            }
            else if(canada_ex ==  40){
                $('.foreign-ex-value').text(13);
            }
            else if(canada_ex ==  53){
                $('.foreign-ex-value').text(25);
            }
            else if(canada_ex ==  64){
                $('.foreign-ex-value').text(25);
            }
            else if(canada_ex ==  74){
                $('.foreign-ex-value').text(25);
            }
            else if(canada_ex ==  0){
                $('.foreign-ex-value').text(0);
            }








        }else if($(this).val() == 3){

            var canada_ex = parseInt($('.work-ex-canada-value').text());
            console.log(canada_ex);
            if(canada_ex == 80 ){
                $('.foreign-ex-value').text(50);
            }
            else if(canada_ex ==  40){
                $('.foreign-ex-value').text(25);
            }
            else if(canada_ex ==  53){
                $('.foreign-ex-value').text(50);
            }
            else if(canada_ex ==  64){
                $('.foreign-ex-value').text(50);
            }
            else if(canada_ex ==  74){
                $('.foreign-ex-value').text(50);
            }
            else if(canada_ex ==  0){
                $('.foreign-ex-value').text(0);
            }

        }

        scoreBoard();

    });

    /*end work ex foreign*/


    /*provincial*/

    $('.provincial').on('click',function () {

        $('.provincial-value').text($(this).val());
        scoreBoard();

    });

    /*fdsf*/

    /*offer form canada*/

    $('.offer-em-canada').on('click',function () {

        $('.offer-em-canada-value').text($(this).val());
        scoreBoard();

    });


    /*end offer form canada*/

    /*education canada value*/

    $('.education-canada').on('click',function () {

        $('.education-canada-value').text($(this).val());
        scoreBoard();

    });


    /*end education canada value*/


    /*sibling canada value*/

    $('.sibling-canada').on('click',function () {

        $('.sibling-canada-value').text($(this).val());
        scoreBoard();

    });


    /*end sibling canada value*/

    /*spouse education*/


    $('.spouse-education').on('click',function () {

        $('.spouse-education-value').text($(this).val());
        scoreBoard();
        marriedChange();

    });

    /*end spouse education*/


    /*spouse ex canada*/

    $('.spouse-ex-canada').on('click',function () {

        $('.spouse-ex-canada-value').text($(this).val());
        scoreBoard();
        marriedChange();

    });

    /*spouse listening*/
    $('.spouse-listening').on('click',function () {

        $('.spouse-listening-value').text($(this).val());
        scoreBoard();
        marriedChange();

    });

    /*spouse listening*/

    /*spouse reading*/
    $('.spouse-reading').on('click',function () {

        $('.spouse-reading-value').text($(this).val());
        scoreBoard();
        marriedChange();

    });

    /*spouse reading*/

    /*spouse writing*/
    $('.spouse-writing').on('click',function () {

        $('.spouse-writing-value').text($(this).val());
        scoreBoard();
        marriedChange();

    });

    /*spouse writing*/
    /*spouse writing*/
    $('.spouse-speaking').on('click',function () {

        $('.spouse-speaking-value').text($(this).val());
        scoreBoard();
        marriedChange();

    });

    /*spouse writing*/


    /*married status change*/



    function marriedChange() {
        var married_sum = 0;


        $('.spouse-area .score-board').each(function () {

           married_sum = married_sum + parseInt($(this).text());

        })

        $('.spouse-subtotal').text(married_sum);



    }

    /*end married status change*/









    function scoreBoard(){

      var sum = 0;
      var sum_coreA = 0;
      var sum_D = 0;
      $('.score-board').each(function () {

          sum = sum + parseInt($(this).text());

          //console.log($(this).text());

      });

      $('.score').text(sum);

      $('.coreA .score-board').each(function () {

          sum_coreA = sum_coreA + parseInt($(this).text());

      });
      $('.coreA-Value').text(sum_coreA);

      $('.additional-subtotal .score-board').each(function () {

          sum_D = sum_D + parseInt($(this).text());

      });
      $('.additional-points').text(sum_D);



  }



});
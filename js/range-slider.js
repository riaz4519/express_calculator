


var pipsSlider = document.getElementById('test-field');

noUiSlider.create(pipsSlider, {
    range: {
        min: 17,
        max: 48,
    },
    connect: true,
    step: 1,
    start: [17],
    pips: { mode: 'values',
        values: [18,45],
        density: 7},
    format: wNumb({
        decimals: 0
    })
});


$('.noUi-value.noUi-value-horizontal.noUi-value-large').each(function(){
    var val = $(this).html();
    val = recountVal(parseInt(val));
    $(this).html(val);
});

function recountVal(val){
    switch(val){
        case 18: return '17 or less'; break;
        case 20:return '';break;
        case 2:return '';break;
        case 45:return '45 and more';break;
        default :return '';break;
    }
}
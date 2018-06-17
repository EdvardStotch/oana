/**
 * Created by EDO on 6/6/2018.
 */
// $('input[type="range"]').rangeslider('destroy');
// $('input[type="range"]').rangeslider({
//
//     polyfill : false,
//     onInit : function() {
//         this.output = $( '<div class="range-output" />' ).insertAfter( this.$range ).html( this.$element.val() );
//     },
//     onSlide : function( position, value ) {
//         this.output.html( value );
//     }
// });

$("#range").ionRangeSlider({
    min: 10000,
    max: 100000,
    from: 10000,
    to: 100000,
    type: 'double',
    prefix: "$",
    grid: true,
    grid_num: 10,
    onFinish: function (data) {
        app.addRange(data.from_pretty, data.to_pretty);
        // console.log(data.from_pretty, data.to_pretty);
    },
});
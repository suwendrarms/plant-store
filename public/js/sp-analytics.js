/**
 * Sp Analyse [js]
 *
 * Developed By SperaLabs.com
 *  [A.L Pramuditha]
 *
 */
// var links = [];
// $(document).on("click", "a", function () {
//     sendData('/store-clicks', $(this).attr("href"));
// });

// $(window).on("load", function () {
//     sendData('/new-visitor', "empty");
// });

// $(document).ready(function () {
//     var start = new Date();
//     $(window).on('unload', function () {
//         var end = new Date();
//         var diff = Math.abs(new Date(end) - new Date(start));
//         var seconds = Math.floor(diff / 1000);
//         sendDataAsync('/page-visited-time', seconds, route);
//     });
// console.log('----dd');
// sendData(newVisitor);
// console.log(newVisitor);
// });


// function sendData(url) {
//     $.ajax({
//         url: url,
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         },
//         type: 'GET',
//         dataType: 'json',
//         data: [],
//         async: true,
//         success: function (response) {
//             console.log(response);
//             console.log('----------');
//         }
//     });
// }

// function sendDataAsync(url, spent_time, link) {
//     $.ajax({
//         url: url,
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         },
//         type: 'POST',
//         dataType: 'json',
//         data: {
//             spent_time: spent_time,
//             link: link,
//         },
//         async: false,
//         success: function (response) {
//             console.log(response);
//         }
//     });
// }

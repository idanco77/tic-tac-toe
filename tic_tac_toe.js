let x = Math.round(Math.random());
let name1;
let name2;

function loc() {
    location.reload();

}

function check() {
    
    name1 = $('#player1').val();
    name2 = $('#player2').val();
    $('.names').show();
    $('#details').addClass('hidden');
    $('.hi').removeClass('hi');
    if (x == 0) {
        $('#message-first').text(name2 + ' you play first');
        $('#message-first').slideDown();
    } else {
        $('#message-second').text(name1 + ' you play first');
        $('#message-second').slideDown();
    }
    names();
}



$('table').on('click', '.cl', function () {
    if (x % 2 == 0 && x <= 9) {
        $(this).find('.x').slideDown('slow');
        $(this).data('num', 2);
        $(this).click(false);

    } else if (x % 2 == 1 && x <= 9) {
        $(this).find('.o').slideDown('slow');
        $(this).data('num', 1);
        $(this).click(false);
    }
    $('#message-first').slideUp();
    $('#message-second').slideUp();
    x += 1;

    if (x >= 5) {
        let topLeft = $('#top-left').data('num');
        let middleLeft = $('#middle-left').data('num');
        let bottomLeft = $('#bottom-left').data('num');
        let topCenter = $('#top-center').data('num');
        let middleCenter = $('#middle-center').data('num');
        let bottomCenter = $('#bottom-center').data('num');
        let topRight = $('#top-right').data('num');
        let middleRight = $('#middle-right').data('num');
        let bottomRight = $('#bottom-right').data('num');

        let verticalLeft = topLeft + middleLeft + bottomLeft;
        let verticalMiddle = topCenter + middleCenter + bottomCenter;
        let verticalRight = topRight + middleRight + bottomRight;
        let horTop = topLeft + topCenter + topRight;
        let horMiddle = middleLeft + middleCenter + middleRight;
        let horBottom = bottomLeft + bottomCenter + bottomRight;
        let slash = topLeft + middleCenter + bottomRight;
        let backSlash = topRight + middleCenter + bottomLeft;

        if (verticalLeft == 3 || verticalMiddle == 3 || verticalRight == 3 || horTop == 3 || horMiddle == 3 || horBottom == 3 || slash == 3 || backSlash == 3) {
            $('#name').text(name1);
            $('#center').fadeIn();
            $('.cl').removeClass();
        } else if (verticalLeft == 6 || verticalMiddle == 6 || verticalRight == 6 || horTop == 6 || horMiddle == 6 || horBottom == 6 || slash == 6 || backSlash == 6) {
            $('#name').text(name2);
            $('#center').fadeIn();
            $('.cl').removeClass();
        }
    }
});

function names() {
    $('#p1').text(name1 + ' is O');
    $('#p2').text(name2 + ' is X');

}
let str = document.getElementById('str');
let res = document.getElementById('res');
str.addEventListener('click', check);
res.addEventListener('click', loc);

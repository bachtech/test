var rightCard = "<div class=\"right_card\"><a class=\"right_link\" href=\"\">wazzup</a></div>";
var leftCard = "<div class=\"left_card\"></div>";

$(".button").on("click", function () {
   $(".deck").append(leftCard);
   $(".deck").append(rightCard);
});

$(".right_link").on("click",function(){
    $(".right_card").addClass("hidden");
    $(".deck").append(rightCard);
});

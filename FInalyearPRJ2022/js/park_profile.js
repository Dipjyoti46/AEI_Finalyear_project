$(document).ready(function () {
    /*=========================      Slider Thumbs      =========================*/
    $(".slider-thumbs .thumbs img").click(function () {
      $(this).addClass("active").siblings().removeClass("active");
      var dataImg = $(this).data("value");
      $(".slider-thumbs .carsoule-items .slide-item").removeClass(
        "slide-item-active"
      );
      console.log($("#" + dataImg));
      $("#" + dataImg).addClass("slide-item-active");
      //$('.slider-thumbs .carsoule-items .slide-item').data('img' , dataImg).addClass('slide-item-active')
    });
  
    $(".arrow-thumbs").click(function () {
      var indexImg = $(".slider-thumbs .thumbs img.active").index();
      var lengthImg = $(".slider-thumbs .thumbs img").length;
      console.log(lengthImg, indexImg);
      //console.log($('.slider-thumbs .thumbs img.active').index())
      $(".slider-thumbs .thumbs img").removeClass("active");
      $(".slider-thumbs .carsoule-items .slide-item").removeClass(
        "slide-item-active"
      );
      if ($(this).data("value") === 0) {
        if (indexImg > 0) {
          var sum = indexImg - 1;
          console.log("sum =" + sum);
          var convertSum = sum.toString();
          console.log("convertSum =" + convertSum);
          $("#" + convertSum + "img").addClass("active");
          $("#" + convertSum).addClass("slide-item-active");
        } else if (indexImg == 0) {
          var sum = lengthImg - 1;
          console.log("sum =" + sum);
          var convertSum = sum.toString();
          console.log("convertSum =" + convertSum);
          $("#" + convertSum + "img").addClass("active");
          $("#" + convertSum).addClass("slide-item-active");
        }
      } else if ($(this).data("value") === 1) {
        if (indexImg >= 0 && indexImg != lengthImg - 1) {
          var sum = indexImg + 1;
          console.log("sum =" + sum);
          var convertSum = sum.toString();
          console.log("convertSum =" + convertSum);
          $("#" + convertSum + "img").addClass("active");
          $("#" + convertSum).addClass("slide-item-active");
        } else if (indexImg == lengthImg - 1) {
          var sum = lengthImg - lengthImg;
          console.log("sum =" + sum);
          var convertSum = sum.toString();
          console.log("convertSum =" + convertSum);
          $("#" + convertSum + "img").addClass("active");
          $("#" + convertSum).addClass("slide-item-active");
        }
      }
    });
    /*=========================      Slider Thumbs      =========================*/
  });
  
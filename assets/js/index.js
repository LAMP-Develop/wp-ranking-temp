// CSSインポート
import "../sass/app.scss";

// JSインポート
import "bootstrap";

$(window).on('load resize', function() {
  let w = $(window).width();
  let md = 991.98;
  if (w <= md) {
    // 画像src切り替え
    $(".img-switch").each(function () {
      $(this).attr("src", $(this).attr("src").replace("_pc", "_sp"));
      let srcset = $(this).attr("srcset");
      if (srcset != null) {
        let result = srcset.replace("_pc", "_sp");
        while (result !== srcset) {
          srcset = srcset.replace("_pc", "_sp");
          result = result.replace("_pc", "_sp");
        }
        $(this).attr("srcset", result);
      }
    });
  } else {
    // 画像src切り替え
    $(".img-switch").each(function () {
      $(this).attr("src", $(this).attr("src").replace("_sp", "_pc"));
      let srcset = $(this).attr("srcset");
      if (srcset != null) {
        let result = srcset.replace("_sp", "_pc");
        while (result !== srcset) {
          srcset = srcset.replace("_sp", "_pc");
          result = result.replace("_sp", "_pc");
        }
        $(this).attr("srcset", result);
      }
    });
  }
});

// $(function ($) {
  // let w = $(window).width();
  // let md = 991.98;

  // if (w <= md) {
  //   // 画像src切り替え
  //   $(".img-switch").each(function () {
  //     $(this).attr("src", $(this).attr("src").replace("_pc", "_sp"));
  //     let srcset = $(this).attr("srcset");
  //     if (srcset != null) {
  //       let result = srcset.replace("_pc", "_sp");
  //       while (result !== srcset) {
  //         srcset = srcset.replace("_pc", "_sp");
  //         result = result.replace("_pc", "_sp");
  //       }
  //       $(this).attr("srcset", result);
  //     }
  //   });
  // }

  // スムーススクロール
  // $('a[href^="#"]').on("click", function () {
  //   var speed = 500;
  //   var href = $(this).attr("href");
  //   var target = $(href == "#" || href == "" ? "html" : href);
  //   var position = target.offset().top - 100;
  //   $("html, body").animate({ scrollTop: position }, speed, "swing");
  //   return false;
  // });

  // スクロールイベント
  // $(window).on("scroll", function () {
  //   let s = $(window).scrollTop();
  // });
// });

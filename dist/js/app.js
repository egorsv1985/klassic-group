(() => {
  "use strict";
  document.addEventListener("DOMContentLoaded", function () {
    let t = !1;
    if (
      ((function () {
        const e = document.querySelector(".burger");
        e &&
          e.addEventListener("click", function (e) {
            t
              ? (((e = 500) => {
                  const o = document.querySelector("body");
                  if (t) {
                    const n = document.querySelectorAll("[data-lp]");
                    for (let t = 0; t < n.length; t++)
                      n[t].style.paddingRight = "0px";
                    (o.style.paddingRight = "0px"),
                      document.documentElement.classList.remove("lock"),
                      (t = !1),
                      setTimeout(function () {
                        (t = !0), console.log("Скролл разблокирован");
                      }, e);
                  }
                })(),
                console.log("Скролл разблокирован"))
              : (((e = 500) => {
                  const o = document.querySelector("body");
                  if (!t) {
                    const n = document.querySelectorAll("[data-lp]");
                    for (let t = 0; t < n.length; t++)
                      n[t].style.paddingRight =
                        window.innerWidth -
                        document.documentElement.clientWidth +
                        "px";
                    (o.style.paddingRight =
                      window.innerWidth -
                      document.documentElement.clientWidth +
                      "px"),
                      document.documentElement.classList.add("lock"),
                      (t = !0),
                      setTimeout(function () {
                        (t = !1), console.log("Скролл заблокирован");
                      }, e);
                  }
                })(),
                console.log("Скролл заблокирован")),
              document.documentElement.classList.toggle("open");
          });
      })(),
      document.getElementById("promo"))
    )
      new Swiper(".promoSwiper", {
        slidesPerView: 1,
        loop: !0,
        grabCursor: !0,
        keyboard: { enabled: !0 },
        navigation: {
          nextEl: ".promo .swiper-button-next",
          prevEl: ".promo .swiper-button-prev",
        },
        pagination: { el: ".promo .swiper-pagination", clickable: !0 },
      });
    new Swiper(".contentSwiper", {
      slidesPerView: 1,
      loop: !0,
      grabCursor: !0,
      keyboard: { enabled: !0 },
      navigation: {
        nextEl: ".content .swiper-button-next",
        prevEl: ".content .swiper-button-prev",
      },
      pagination: {
        el: ".content .swiper-pagination",
        clickable: !0,
        renderBullet: function (t, e) {
          return (
            '<span class="' +
            e +
            '"><span class="prev-slide">' +
            ("" + (t + 1)).slice(-2) +
            '</span><span class="slash"></span><span class="next-slide">' +
            ("" + this.slides.length).slice(-2) +
            "</span></span>"
          );
        },
      },
    });
    ((t) => {
      const e = new Image();
      (e.onload = e.onerror =
        () => {
          return (
            (t = 2 === e.height),
            document.documentElement.classList.add(t ? "webp" : "no-webp")
          );
          var t;
        }),
        (e.src =
          "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA");
    })(),
      "scroll" in window &&
        (function () {
          const t = document.querySelectorAll("[data-sticky]"),
            e = document.querySelector(".container");
          t.forEach((t) => {
            const o = parseInt(t.dataset.stickyTop) || 0,
              n = parseInt(t.dataset.stickyBottom) || 0,
              s = t.hasAttribute("data-sticky-header")
                ? document.querySelector("header.header").offsetHeight
                : 0,
              i = t.querySelector("[data-sticky-item]");
            if (!i) return;
            const l = t.offsetTop,
              c = l + t.offsetHeight;
            window.addEventListener("scroll", function () {
              const t = window.scrollY,
                a = i.getBoundingClientRect();
              if (t >= l && t <= c) {
                const l = a.top + t - (s + o),
                  r = c - (s + i.offsetHeight + n);
                if (t >= l && t <= r)
                  (i.style.position = "fixed"),
                    (i.style.bottom = "auto"),
                    (i.style.top = `${s + o}px`),
                    (i.style.right = "auto"),
                    (i.style.width = "auto"),
                    (i.style.maxWidth = "356px");
                else if (t > r) {
                  (i.style.position = "relative"),
                    (i.style.bottom = `${n}px`),
                    (i.style.top = "auto"),
                    (i.style.right = "auto"),
                    (i.style.width = "auto");
                  const t = e.offsetLeft + e.offsetWidth;
                  i.offsetLeft + i.offsetWidth >= t &&
                    (i.style.width = t - i.offsetLeft + "px");
                } else
                  (i.style.position = "relative"),
                    (i.style.bottom = "auto"),
                    (i.style.top = `${o}px`),
                    (i.style.right = "auto"),
                    (i.style.width = "auto");
              } else (i.style.position = "relative"), (i.style.bottom = "auto"), (i.style.top = "auto"), (i.style.right = "auto"), (i.style.width = "auto");
            });
          });
        })();
    const e = document.querySelectorAll("[data-popup]"),
      o = document.querySelectorAll("[data-close]");
    function n(t) {
      t.preventDefault();
      const e = this.getAttribute("data-popup"),
        o = document.querySelector(e);
      document.body.classList.toggle("popup-show"),
        o.classList.toggle("popup_show");
    }
    function s() {
      const t = document.querySelector(".popup_show");
      document.body.classList.remove("popup-show"),
        t.classList.remove("popup_show");
    }
    e.forEach(function (t) {
      t.addEventListener("click", n);
    }),
      o.forEach(function (t) {
        t.addEventListener("click", s);
      });
  });
})();

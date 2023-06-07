(() => {
  "use strict";
  document.addEventListener("DOMContentLoaded", function () {
    let e = !1;
    !(function () {
      const t = document.querySelector(".burger");
      t &&
        t.addEventListener("click", function (t) {
          e
            ? (((t = 500) => {
                const o = document.querySelector("body");
                if (e) {
                  const n = document.querySelectorAll("[data-lp]");
                  for (let e = 0; e < n.length; e++)
                    n[e].style.paddingRight = "0px";
                  (o.style.paddingRight = "0px"),
                    document.documentElement.classList.remove("lock"),
                    (e = !1),
                    setTimeout(function () {
                      (e = !0), console.log("Скролл разблокирован");
                    }, t);
                }
              })(),
              console.log("Скролл разблокирован"))
            : (((t = 500) => {
                const o = document.querySelector("body");
                if (!e) {
                  const n = document.querySelectorAll("[data-lp]");
                  for (let e = 0; e < n.length; e++)
                    n[e].style.paddingRight =
                      window.innerWidth -
                      document.documentElement.clientWidth +
                      "px";
                  (o.style.paddingRight =
                    window.innerWidth -
                    document.documentElement.clientWidth +
                    "px"),
                    document.documentElement.classList.add("lock"),
                    (e = !0),
                    setTimeout(function () {
                      (e = !1), console.log("Скролл заблокирован");
                    }, t);
                }
              })(),
              console.log("Скролл заблокирован")),
            document.documentElement.classList.toggle("open");
        });
    })();
    var t = document.getElementById("promo"),
      o = document.getElementById("works");
    if (t)
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
    if (o)
      new Swiper(".worksSwiper", {
        slidesPerView: 1,
        breakpoints: {
          576: { slidesPerView: 2, spaceBetween: 20 },
          992: { slidesPerView: 3, spaceBetween: 30 },
        },
        loop: !0,
        grabCursor: !0,
        keyboard: { enabled: !0 },
        navigation: {
          nextEl: ".works .swiper-button-next",
          prevEl: ".works .swiper-button-prev",
        },
      });
    ((e) => {
      const t = new Image();
      (t.onload = t.onerror =
        () => {
          return (
            (e = 2 === t.height),
            document.documentElement.classList.add(e ? "webp" : "no-webp")
          );
          var e;
        }),
        (t.src =
          "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA");
    })(),
      "scroll" in window &&
        (function () {
          const e = document.querySelectorAll("[data-sticky]"),
            t = document.querySelector(".container");
          e.forEach((e) => {
            const o = parseInt(e.dataset.stickyTop) || 0,
              n = parseInt(e.dataset.stickyBottom) || 0,
              s = e.hasAttribute("data-sticky-header")
                ? document.querySelector("header.header").offsetHeight
                : 0,
              i = e.querySelector("[data-sticky-item]");
            if (!i) return;
            const l = e.offsetTop,
              c = l + e.offsetHeight;
            window.addEventListener("scroll", function () {
              const e = window.scrollY,
                r = i.getBoundingClientRect();
              if (e >= l && e <= c) {
                const l = r.top + e - (s + o),
                  d = c - (s + i.offsetHeight + n);
                if (e >= l && e <= d)
                  (i.style.position = "fixed"),
                    (i.style.bottom = "auto"),
                    (i.style.top = `${s + o}px`),
                    (i.style.right = "auto"),
                    (i.style.width = "auto"),
                    (i.style.maxWidth = "356px");
                else if (e > d) {
                  (i.style.position = "relative"),
                    (i.style.bottom = `${n}px`),
                    (i.style.top = "auto"),
                    (i.style.right = "auto"),
                    (i.style.width = "auto");
                  const e = t.offsetLeft + t.offsetWidth;
                  i.offsetLeft + i.offsetWidth >= e &&
                    (i.style.width = e - i.offsetLeft + "px");
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
    const n = document.querySelectorAll("[data-popup]"),
      s = document.querySelectorAll("[data-close]");
    function i(e) {
      e.preventDefault();
      const t = this.getAttribute("data-popup"),
        o = document.querySelector(t);
      document.body.classList.toggle("popup-show"),
        o.classList.toggle("popup_show");
    }
    function l() {
      const e = document.querySelector(".popup_show");
      document.body.classList.remove("popup-show"),
        e.classList.remove("popup_show");
    }
    n.forEach(function (e) {
      e.addEventListener("click", i);
    }),
      s.forEach(function (e) {
        e.addEventListener("click", l);
      });
  });
})();

(function () {
  "use strict";
  var RM = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  var $ = function (s) {
    return document.querySelector(s);
  };

  var currentPage = location.pathname.split("/").pop() || "index.html";
  document.querySelectorAll(".nav a, .mob-menu a").forEach(function (a) {
    var href = a.getAttribute("href") || "";
    if (
      (currentPage === "index.html" && href === "index.html") ||
      (currentPage === "overmij.html" && href === "overmij.html") ||
      (currentPage === "mijnwerk.html" && href === "mijnwerk.html")
    ) {
      a.setAttribute("aria-current", "page");
    }
  });

  var io =
    "IntersectionObserver" in window
      ? new IntersectionObserver(
          function (entries) {
            entries.forEach(function (entry) {
              if (entry.isIntersecting) {
                entry.target.classList.add("in");
                io.unobserve(entry.target);
              }
            });
          },
          { threshold: 0.12 },
        )
      : null;
  function observe() {
    if (!io) return;
    document.querySelectorAll(".reveal:not(.in)").forEach(function (el) {
      io.observe(el);
    });
  }
  observe();

  var wanted = new URLSearchParams(location.search).get("filter");
  document.querySelectorAll(".chip").forEach(function (chip) {
    chip.addEventListener("click", function () {
      document.querySelectorAll(".chip").forEach(function (c) {
        c.setAttribute("aria-pressed", c === chip);
      });
      document.querySelectorAll("#grid .item").forEach(function (item) {
        var show =
          chip.dataset.f === "all" || item.dataset.cat === chip.dataset.f;
        item.hidden = !show;
        if (show) {
          item.style.animation = "none";
          item.offsetWidth;
          item.style.animation = "";
        }
      });
    });
  });

  if (wanted) {
    var wantedChip = document.querySelector('.chip[data-f="' + wanted + '"]');
    if (wantedChip) wantedChip.click();
  }

  var dialog = $("#lb");
  if (dialog) {
    var lightboxImage = dialog.querySelector("img");
    document.querySelectorAll(".item.pic").forEach(function (item) {
      item.addEventListener("click", function () {
        var image = item.querySelector("img");
        if (image && lightboxImage) {
          lightboxImage.src = image.src;
          lightboxImage.alt = image.alt;
          dialog.showModal();
        }
      });
    });
    dialog.addEventListener("click", function (e) {
      if (e.target !== lightboxImage) dialog.close();
    });
  }

  var hoverPic = $("#hpic");
  if (hoverPic) {
    document.querySelectorAll("#hob li").forEach(function (li) {
      li.addEventListener("pointerenter", function () {
        hoverPic.style.backgroundImage = 'url("' + li.dataset.image + '")';
        if (hoverPic.firstChild)
          hoverPic.firstChild.textContent = li.textContent;
        hoverPic.classList.add("on");
      });
      li.addEventListener("pointermove", function (e) {
        hoverPic.style.left = e.clientX + "px";
        hoverPic.style.top = e.clientY + "px";
      });
      li.addEventListener("pointerleave", function () {
        hoverPic.classList.remove("on");
      });
    });
  }

  var mobileMenu = $("#mob-menu"),
    burger = $("#burger-btn"),
    closeButton = $("#mob-close");
  function closeMobileMenu() {
    if (mobileMenu) mobileMenu.classList.remove("open");
  }
  if (burger && mobileMenu)
    burger.addEventListener("click", function () {
      mobileMenu.classList.add("open");
    });
  if (closeButton) closeButton.addEventListener("click", closeMobileMenu);
  if (mobileMenu)
    mobileMenu.querySelectorAll("a").forEach(function (a) {
      a.addEventListener("click", closeMobileMenu);
    });
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") closeMobileMenu();
  });

  var up = $("#up"),
    progress = $("#prog");
  if (up)
    up.addEventListener("click", function () {
      scrollTo({ top: 0, behavior: RM ? "auto" : "smooth" });
    });

  var hero = $("#hero"),
    name = $("#name"),
    lines = name ? name.querySelectorAll(".line") : [];
  var timelineSection = $("#tls"),
    timeline = $("#tlx"),
    sticky = $(".tl-sticky");
  var cur = { x: 0, y: 0, r: 0 },
    target = { x: 0, y: 0, r: 0 },
    inside = false;
  var t1 = 0,
    t2 = 0,
    tx = 0,
    shift = 0;
  if (hero && name) {
    hero.addEventListener("pointermove", function (e) {
      var n = name.getBoundingClientRect();
      inside = true;
      target.x = e.clientX;
      target.y = e.clientY;
      target.r = Math.max(90, n.height * 0.3);
    });
    hero.addEventListener("pointerleave", function () {
      inside = false;
    });
  }
  function layout() {
    if (
      !timelineSection ||
      !timeline ||
      !sticky ||
      !timelineSection.offsetParent
    )
      return;
    shift = Math.max(0, timeline.offsetWidth - innerWidth);
    timelineSection.style.height = sticky.offsetHeight + shift + "px";
  }
  window.addEventListener("resize", layout);
  window.addEventListener("load", layout);
  if (document.fonts) document.fonts.ready.then(layout);
  window.__layout = layout;

  function tick(time) {
    requestAnimationFrame(tick);
    if (hero && name && hero.offsetParent) {
      var n = name.getBoundingClientRect();
      if (!inside) {
        var a = RM ? 0 : time / 2200;
        target.x = n.left + n.width * (0.5 + 0.38 * Math.sin(a));
        target.y = n.top + n.height * (0.5 + 0.3 * Math.sin(a * 1.3 + 1));
        target.r = n.height * 0.24;
      }
      Object.keys(cur).forEach(function (k) {
        cur[k] += (target[k] - cur[k]) * 0.1;
      });
      if (!RM) {
        t1 += (Math.min(scrollY * 0.13, 90) - t1) * 0.07;
        t2 += (Math.min(scrollY * 0.07, 50) - t2) * 0.07;
      }
      lines.forEach(function (line, i) {
        var r = line.getBoundingClientRect();
        line.style.setProperty("--mx", cur.x - r.left + "px");
        line.style.setProperty("--my", cur.y - r.top + "px");
        line.style.setProperty("--gr", cur.r + "px");
        line.style.setProperty("--t", (i ? t2 : t1).toFixed(2) + "px");
      });
    }
    if (progress) {
      var maxScroll = document.documentElement.scrollHeight - innerHeight;
      progress.style.strokeDashoffset = (
        100.5 *
        (1 - (maxScroll > 0 ? scrollY / maxScroll : 0))
      ).toFixed(1);
    }
    if (up) up.classList.toggle("on", scrollY > 200);
    document.querySelectorAll(".bi").forEach(function (b) {
      var parent = b.parentNode;
      if (!parent.offsetParent) return;
      var rect = parent.getBoundingClientRect();
      b.style.transform =
        "translate3d(0," +
        ((rect.top + rect.height / 2 - innerHeight / 2) * -0.18).toFixed(1) +
        "px,0)";
    });
    if (timelineSection && timeline && sticky && timelineSection.offsetParent) {
      var r = timelineSection.getBoundingClientRect();
      var p = Math.min(
        1,
        Math.max(
          0,
          -r.top /
            Math.max(1, timelineSection.offsetHeight - sticky.offsetHeight),
        ),
      );
      tx += (p * shift - tx) * 0.15;
      timeline.style.transform = "translate3d(" + (-tx).toFixed(1) + "px,0,0)";
    }
  }
  requestAnimationFrame(tick);
})();

document.addEventListener("DOMContentLoaded", () => {
  const accordion = document.querySelector("#imageAccordion");

  if (!accordion) return;

  const items = [...accordion.querySelectorAll(".accordion-item")];

  let activeIndex = 0;
  let interval;
  let isHovered = false;

  // Maak thumbnails voor mobiel
  const thumbnails = document.createElement("div");
  thumbnails.className = "accordion-thumbnails";

  items.forEach((item, index) => {
    const thumbnail = document.createElement("button");
    thumbnail.className = "accordion-thumbnail";
    thumbnail.setAttribute("aria-label", `Toon project ${index + 1}`);

    const image = item.querySelector("img").cloneNode();
    thumbnail.appendChild(image);

    thumbnail.addEventListener("click", () => {
      activateItem(index);
      restartAutoplay();
    });

    thumbnails.appendChild(thumbnail);

    // Hover op desktop
    item.addEventListener("mouseenter", () => {
      if (window.innerWidth > 767) {
        activateItem(index);
      }
    });
  });

  accordion.after(thumbnails);

  function activateItem(index) {
    activeIndex = index;

    items.forEach((item, i) => {
      item.classList.toggle("active", i === index);
      item.setAttribute("aria-expanded", i === index);
    });

    [...thumbnails.children].forEach((thumbnail, i) => {
      thumbnail.classList.toggle("active", i === index);
    });
  }

  function nextItem() {
    const nextIndex = (activeIndex + 1) % items.length;
    activateItem(nextIndex);
  }

  function startAutoplay() {
    clearInterval(interval);

    interval = setInterval(() => {
      if (!isHovered) {
        nextItem();
      }
    }, 4000);
  }

  function restartAutoplay() {
    startAutoplay();
  }

  accordion.addEventListener("mouseenter", () => {
    isHovered = true;
  });

  accordion.addEventListener("mouseleave", () => {
    isHovered = false;
  });

  activateItem(0);
  startAutoplay();
});

window.addEventListener("scroll", function () {
  const nav = document.querySelector(".nav");

  if (window.scrollY > 0) {
    nav.classList.add("sticky");
  } else {
    nav.classList.remove("sticky");
  }
});

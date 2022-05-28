document.querySelector(".hamburger").addEventListener("click", () => {
  document.querySelector("nav .list-item").classList.toggle("nav-active");
});

const navigation = document.querySelector("nav");
const section = document.querySelector(".section-2");
 const options={
     rootMarrgin: "-200px"
 }
const sectionObserver = new IntersectionObserver(function (entries, observer) {
  if (!entries.isIntersecting) {
    navigation.classList.add("nav_scrolled");
  } else {
    navigation.classList.remove("nav_scrolled");
  }
}, options);
sectionObserver.observe(section)
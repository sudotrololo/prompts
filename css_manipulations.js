function parallax(event) {
    this.querySelectorAll(".parallax__item").forEach((item) => {
        let speed = item.getAttribute("data-speed");
        item.style.transform = `translate(${(event.clientX * speed) / 400}px, ${
            (event.clientY * speed) / 500
        }px)`;
    });
}

document.addEventListener("mousemove", parallax);

/* <div class="pics">
    <img data-speed="3" src="img/one.png" class="parallax__item" />
    <img data-speed="5" src="img/two.png" class="parallax__item" />
    <img data-speed="2" src="img/three.png" class="parallax__item" />
</div>; */

window.onload = function () {
    const typingDemo = document.querySelector('.typing-demo');

    // Reset animation on load to start fresh
    typingDemo.style.animation = 'none';
    typingDemo.offsetHeight; // Trigger reflow to reset the animation
    typingDemo.style.animation = 'typing 2s steps(19) forwards, blink .5s step-end infinite alternate';

    // Function to handle repeating the animation with a delay
    function repeatAnimation() {
        typingDemo.style.animation = 'none';
        typingDemo.offsetHeight; // Re-trigger reflow

        // Reapply the animation with a 5-second delay for each repeat
        setTimeout(() => {
            typingDemo.style.animation = 'typing 2s steps(19) 5s forwards, blink .5s step-end infinite alternate';
            setTimeout(repeatAnimation, 7000); // Call repeatAnimation after 7 seconds (2s typing + 5s delay)
        }, 10);
    }

    // Start the repeat loop after the first cycle completes
    setTimeout(repeatAnimation, 2000); // First call after initial 2-second typing animation
};




const tags = [
  "HTML", "CSS", "JavaScript", "Bootstrap", "jQuery", "Express.js",
  "EJS", "REST", "NodeJS", "PostgreSQL", "PHP", "MySQL"
];

const container = document.getElementById("orbitContainer");
const centerX = container.offsetWidth / 2;
const centerY = container.offsetHeight / 2;
const radius = Math.min(container.offsetWidth, container.offsetHeight) * 0.35;

const goldenAngle = Math.PI * (3 - Math.sqrt(5));
const tagElements = [];

tags.forEach((text, i) => {
  const tag = document.createElement("div");
  tag.className = "tag";
  tag.textContent = text;
  container.appendChild(tag);

  // Even spherical distribution
  const y = 1 - (i / (tags.length - 1)) * 2;
  const radiusAtY = Math.sqrt(1 - y * y);
  const theta = goldenAngle * i;

  tag.x0 = Math.cos(theta) * radiusAtY;
  tag.y0 = y;
  tag.z0 = Math.sin(theta) * radiusAtY;

  tagElements.push(tag);
});

let angleX = 0;
let angleY = 0;

function animate() {
  angleX += 0.003;
  angleY += 0.002;

  tagElements.forEach(tag => {
    // Apply 3D rotation
    const x1 = tag.x0 * Math.cos(angleY) - tag.z0 * Math.sin(angleY);
    const z1 = tag.x0 * Math.sin(angleY) + tag.z0 * Math.cos(angleY);
    const y1 = tag.y0 * Math.cos(angleX) - z1 * Math.sin(angleX);
    const z2 = tag.y0 * Math.sin(angleX) + z1 * Math.cos(angleX);

    const x = x1 * radius;
    const y = y1 * radius;
    const scale = 1 + z2 / 2;

    tag.style.transform = `
      translate3d(${centerX + x - tag.offsetWidth / 2}px, ${centerY + y - tag.offsetHeight / 2}px, ${z2 * radius}px)
      scale(${scale})
    `;
    tag.style.zIndex = Math.floor(scale * 100);
  });

  requestAnimationFrame(animate);
}

animate();





  $(document).ready(function () {
      $('.carousel').owlCarousel({
        margin: 20,
        loop: true,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        nav: true,
        navText: ["<span>‹</span>", "<span>›</span>"],
        responsive: {
          0: { items: 1 },
          700: { items: 2 },
          1000: { items: 3 }
        }
      });

      // Desktop: play video on hover
      $('.card').hover(function () {
        const video = $(this).find('.project-video')[0];
        const img = $(this).find('.project-img')[0];
        if (video && img) {
          img.style.display = 'none';
          video.style.display = 'block';
          video.play();
        }
      }, function () {
        const video = $(this).find('.project-video')[0];
        const img = $(this).find('.project-img')[0];
        if (video && img) {
          video.pause();
          video.currentTime = 0;
          video.style.display = 'none';
          img.style.display = 'block';
        }
      });

      // Mobile/Tablet: play video on long press
      $('.card').on('touchstart', function () {
        const card = $(this);
        card.data('timeout', setTimeout(() => {
          const video = card.find('.project-video')[0];
          const img = card.find('.project-img')[0];
          if (video && img) {
            img.style.display = 'none';
            video.style.display = 'block';
            video.play();
          }
        }, 800));
      });

      $('.card').on('touchend touchcancel', function () {
        clearTimeout($(this).data('timeout'));
      });
    });




        document.getElementById("year").textContent = new Date().getFullYear();


   
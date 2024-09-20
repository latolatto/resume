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

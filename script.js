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

const mountNode = document.getElementById("app");

class TagCloud extends React.Component {
  constructor(props) {
    super(props);
  }

  renderTagCloud() {
    try {
        const canvas = document.getElementById('myCanvas');
        const context = canvas.getContext('2d');
        
        // Scale the canvas for high-DPI screens (e.g., Retina)
        const scaleFactor = window.devicePixelRatio || 1;
        canvas.width = canvas.offsetWidth * scaleFactor;
        canvas.height = canvas.offsetHeight * scaleFactor;
        context.scale(scaleFactor, scaleFactor);
        
        // Start the TagCanvas with improved settings
        TagCanvas.Start("myCanvas", "tags", {
            textColour: "#08fdd8",
            outlineColour: "#ff00ff",
            reverse: true,
            depth: 1.5,
            maxSpeed: 0.05,
            wheelZoom: false,
            weightSize: 1.5,  // Optional weight size adjustment
            txtHeight: 1000,    // Set the text size directly
            outlineMethod: 'outline',  // Make the text edges clearer
            freezeActive: true,  // Stops rotation when hovering over text
        });
    } catch (e) {
        document.getElementById("myCanvasContainer").style.display = "none";
    }
}



  componentDidMount() {
    this.renderTagCloud();
  }

  componentWillUnmount() {}

  render() {
    return /*#__PURE__*/(
      React.createElement("div", { class: "skills-container" },null, /*#__PURE__*/
      React.createElement("div", { id: "myCanvasContainer" }, /*#__PURE__*/
      React.createElement("canvas", {  id: "myCanvas" }, /*#__PURE__*/
      React.createElement("p", null, "Anything in here will be replaced on browsers that do not support the canvas element"))), /*#__PURE__*/
      React.createElement("h1", { class: "header" }, "Tech stack"), /*#__PURE__*/





      React.createElement("div", { id: "tags" }, /*#__PURE__*/
      React.createElement("ul", null, /*#__PURE__*/
      React.createElement("li", null, /*#__PURE__*/
      React.createElement("a", { href: "/" }, "HTML")), /*#__PURE__*/

      React.createElement("li", null, /*#__PURE__*/
      React.createElement("a", { href: "/" }, "CSS")), /*#__PURE__*/

      React.createElement("li", null, /*#__PURE__*/
      React.createElement("a", { href: "/" }, "Bootstrap")), /*#__PURE__*/

      React.createElement("li", null, /*#__PURE__*/
      React.createElement("a", { href: "/" }, "Javascript")), /*#__PURE__*/


      React.createElement("li", null, /*#__PURE__*/
      React.createElement("a", { href: "/" }, "JQuery")), /*#__PURE__*/

      React.createElement("li", null, /*#__PURE__*/
      React.createElement("a", { href: "/" }, "Express.js")), /*#__PURE__*/

      React.createElement("li", null, /*#__PURE__*/
      React.createElement("a", { href: "/" }, "EJS")), /*#__PURE__*/

      React.createElement("li", null, /*#__PURE__*/
      React.createElement("a", { href: "/" }, "REST")), /*#__PURE__*/

      React.createElement("li", null, /*#__PURE__*/
      React.createElement("a", { href: "/" }, "NodeJS")), /*#__PURE__*/

      React.createElement("li", null, /*#__PURE__*/
      React.createElement("a", { href: "/" }, "PostgreSQL")), /*#__PURE__*/

      React.createElement("li", null, /*#__PURE__*/
      React.createElement("a", { href: "/" }, "PHP")), /*#__PURE__*/

      React.createElement("li", null, /*#__PURE__*/
      React.createElement("a", { href: "/" }, "MySQL")), /*#__PURE__*/


    ))));





  }}


ReactDOM.render( /*#__PURE__*/React.createElement(TagCloud, null), mountNode);
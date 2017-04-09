<body>
  <div id="container">
    <h1>Essai de rendu KATEX</h1>
    <p><span id="equation"></span></p>
    <script>
      katex.render('P(x)=\\frac{1}{\\sigma\\sqrt{2\\pi}}e^{-\\frac{(x-\\mu)^2}{2\\sigma ^2}}', equation, {
  displayMode: true,
  macros: {
    "\\RR": "\\mathbb{R}"
  }
});
    </script>
  </div>
</body>
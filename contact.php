<head>
  <title>Contact Me</title>
  <!-- Include custom CSS -->
</head>
<body>
<nav>
    <ul>
        <li><a href="index.php">Back to Home</a></li>
    </ul>
</nav>
  <main>
    <section>
      <h1>Contact Me</h1>
      <p>Have questions or inquiries? Get in touch with us!</p>
      <div>
        <h2>Contact Information</h2>
        <p>
          <strong>Address:</strong> 123 Tech Street, Cityville, State, Country
        </p>
        <p>
          <strong>Email:</strong> idelev@kinsta.com
        </p>
        <p>
          <strong>Phone:</strong> +1 (800) 123-4567
        </p>
      </div>
      <div>
        <h2>Contact Form</h2>
        <form action="/contact" method="post">
          <label for="name">Your Name:</label>
          <input type="text" id="name" name="name" required>

          <label for="email">Email Address:</label>
          <input type="email" id="email" name="email" required>

          <label for="subject">Subject:</label>
          <input type="text" id="subject" name="subject" required>

          <label for="message">Your Message:</label>
          <textarea id="message" name="message" rows="5" required></textarea>

          <button type="submit">Send Message</button>
        </form>
      </div>
    </section>
  </main>

</body>


<?php 
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>My Portfolio</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
  <h2>Portfolio</h2>
  <ul>
    <li onclick="showSection('home')">Home</li>
    <li onclick="showSection('about')">About</li>
    <li onclick="showSection('skills')">Skills</li>
    <li onclick="showSection('projects')">Projects</li>
    <li onclick="showSection('contact')">Contact</li>
    <?php if (isset($_SESSION['admin'])): ?>
      <li onclick="window.location.href='view_messages.php'">Messages</li>
      <li onclick="window.location.href='logout.php'">Logout</li>
    <?php else: ?>
      <li onclick="window.location.href='login.php'">Admin</li>
    <?php endif; ?>
  </ul>
</nav>
<section id="home" class="section">
  <h1>Hi, I'm Sudharshini Ragavi</h1>
  <p class="highlight">
    Aspiring Full Stack Developer | Building real-world web applications
  </p>
  <p>
    I build user-friendly web applications using HTML, CSS, PHP, and MySQL.
    I am passionate about creating practical projects and continuously improving my skills.
  </p>
  <a href="resume.png" download class="btn">Download Resume</a>
</section>
<section id="about" class="section hidden">
  <h2>About Me</h2>
  <p>
    I am a Diploma student currently pursuing my second year in Computer Engineering.
    I enjoy designing websites and developing user-friendly web applications.
  </p>
  <p>
    I am continuously improving my skills in Full Stack Development by building real-world projects.
  </p>
  <p>
    I am not an expert yet, but I am highly passionate and dedicated to learning and growing in this field.
  </p>
  <p class="why">
    <strong>Why Me?</strong><br>
    I am a quick learner who enjoys solving problems and building practical solutions.
    My strong interest in development helps me create better and more meaningful projects.
  </p>
</section>
<section id="skills" class="section hidden">
  <h2>Skills</h2>
  <p><strong>Frontend:</strong> HTML, CSS</p>
  <p><strong>Backend:</strong> PHP</p>
  <p><strong>Database:</strong> MySQL</p>
</section>
<section id="projects" class="section hidden">
  <h2>Projects</h2>
  <div class="project">
    <h3>Policy Management System</h3>
    <p>A web-based system to manage company policies and track employee acknowledgements efficiently.</p>
    <p><strong>Technologies:</strong> HTML, CSS, PHP, MySQL</p>
  </div>
  <div class="project">
    <h3>Notes Application</h3>
    <p>A simple web application that allows users to write and save notes for future use.</p>
    <p><strong>Technologies:</strong> HTML, CSS, JavaScript</p>
  </div>
  <div class="project">
    <h3>Personal Portfolio Website</h3>
    <p>A responsive portfolio website to showcase my skills, projects, and contact information.</p>
    <p><strong>Technologies:</strong> HTML, CSS, PHP</p>
  </div>
  <div class="project">
    <h3>Basic Calculator</h3>
    <p>A web-based calculator that performs basic arithmetic operations.</p>
    <p><strong>Technologies:</strong> HTML, CSS, JavaScript</p>
  </div>
  <div class="project">
    <h3>To-Do List Application</h3>
    <p>A task management application to help users organize and track daily activities.</p>
    <p><strong>Technologies:</strong> HTML, CSS, JavaScript</p>
  </div>
</section>
<section id="contact" class="section hidden">
  <h2>Contact Me</h2>
  <p>Email: yourname@email.com</p>
  <form action="save_message.php" method="POST">
    <input type="text" name="name" placeholder="Enter your name" required>
    <input type="email" name="email" placeholder="Enter your email" required>
    <textarea name="message" placeholder="Enter your message" required></textarea>
    <button type="submit">Send Message</button>
  </form>
</section>
<footer>
  <p>© 2026 Sudharshini Ragavi | All Rights Reserved</p>
</footer>
<script src="script.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Beautiful Homepage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <style>
    /* Center the heading with animation */
    .heading {
      text-align: center;
      animation: heading-appear 1s ease-in-out forwards;
    }

    @keyframes heading-appear {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Container for cards with flexbox for horizontal arrangement */
    .card-container {
      display: flex;
      justify-content: center;
      flex-wrap: wrap; /* Allow wrapping if needed */
      margin: 2rem auto;
    }

    /* Card styles with custom margin and animation */
    .card {
      margin: 1rem;
      animation: card-appear 1s ease-in-out forwards;
    }

    @keyframes card-appear {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <main>
    <h1 class="heading">This Week's Curriculum</h1>  <div class="card-container">
      <div class="card text-center border-primary">
        <div class="card-header bg-primary text-white">First Week: Validation and CRUD Operations</div>
        <div class="card-body">
          <p class="card-text">
            This week, we'll delve into the foundational aspects of web development:
            <ul>
              <li><strong>Data Validation:</strong> Ensuring data integrity by checking for valid input formats and ranges.</li>
              <li><strong>CRUD Operations:</strong> Mastering the core operations of Create, Read, Update, and Delete on databases.</li>
            </ul>
            By the end of this week, you'll be able to build robust and secure web applications.
          </p>
          <a href="sign.php" class="btn btn-primary">Sign Up Now</a>
        </div>
      </div>

      <div class="card text-center border-success">
        <div class="card-header bg-success text-white">Second Week: Routing and Templating</div>
        <div class="card-body">
          <p class="card-text">
            Master the fundamentals of routing and templating in web development:
            <ul>
              <li><strong>Routing:</strong> Define clear and user-friendly URLs for different sections of your application.</li>
              <li><strong>Templating:</strong> Separate your application logic from the presentation layer for cleaner code.</li>
            </ul>
            By the end of this week, you'll be able to create well-structured and organized web applications.
          </p>
          <a href="#" class="btn btn-success">Learn More</a>
        </div>
      </div>

      <div class="card text-center border-warning">
        <div class="card-header bg-warning text-white">Third Week: Server-Side Technologies</div>
        <div class="card-body">
          <p class="card-text">
            Explore the power of server-side technologies to enhance your web applications:
            <ul>
              <li><strong>Server-Side Scripting:</strong> Learn how to process data and handle user interactions on the server.</li>
              <li><strong>Databases:</strong> Master storing and retrieving data efficiently.</li>
            </ul
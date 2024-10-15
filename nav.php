<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact">Contact</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="nav" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="action">Action</a></li>
            <li><a class="dropdown-item" href="anotheraction">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="else">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      
      <!-- Separate Styled Sign In and Register Buttons -->
      <div style="display: flex; gap: 5px;"> <!-- Flex container with a small gap -->
        <a href="signin.php" class="btn btn-custom">Sign In</a>
        <a href="register.php" class="btn btn-custom">Register</a>
      </div>
      
    </div>
  </div>
</nav>

<style>
    .btn-custom {
        background-color: #00BFFF; /* Aqua blue background */
        color: white; /* Text color */
        border: none; /* Remove default border */
        padding: 10px 20px; /* Add some padding */
        text-decoration: none; /* No underline */
        display: inline-block; /* Make it behave like a button */
        border-radius: 0; /* Square corners */
        transition: background-color 0.3s; /* Smooth hover transition */
    }
    
    .btn-custom:hover {
        background-color: #87CEEB; /* Sky blue on hover */
    }
</style>

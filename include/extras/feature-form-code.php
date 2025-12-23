<form action="features-form.php" method="POST" id="emailForm">
    <div class="mb-3">
      <i class="fa fa-user" aria-hidden="true"></i> <input type="text" placeholder="Name" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
      <i class="fa fa-phone" aria-hidden="true"></i> <input type="tel" placeholder="Phone Number" class="form-control" id="number" name="number" required>
    </div>
    <div class="mb-3">
      <i class="fa fa-envelope" aria-hidden="true"></i> <input type="email" placeholder="Email Id" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
      <i class="fa fa-globe" aria-hidden="true"></i> <input type="text" placeholder="Website Address" class="form-control" id="website" name="website" required>
    </div>
    <div class="mb-3">
      <i class="fa fa-question" aria-hidden="true"></i> <textarea class="form-control" name="help" id="help" placeholder="How Can Help You?"></textarea>
    </div>
    <div class="mb-3">
      <input type="submit" value="Submit" class="SubmitBtn" id="SubmitBtn" name="SubmitBtn">
    </div>
  </form>
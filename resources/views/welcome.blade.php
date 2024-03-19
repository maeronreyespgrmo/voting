<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

<title>{{ config('app.name') }}</title>


<meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
<meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
<!-- Canonical SEO -->
<link rel="canonical" href="https://1.envato.market/vuexy_admin">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="/images/lagunaseal.png" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Page CSS -->
<link rel="stylesheet" href="/vuexy/assets/vendor/css/pages/cards-advance.css" />

<!-- Helpers -->
<script src="/vuexy/assets/vendor/js/helpers.js"></script>

<div class="container">
<div class="row">
<div class="col-md-6">
<h5>Official Ballot: 0301</h5>
</div>
</div>
<div class="row">
<div class="col-md-6">
<h5>Election of Officers 2024</h5>
</div>
</div>
<div class="row">
<div class="col-md-6">
<h5>March 21,2024 | 8am - 11:00am</h5>
</div>
</div>
<div class="row">
<div class="col-md-6">
<h5>Cultural Center of Laguna</h5>
</div>
</div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <table class="table  center-table">
        <thead>
          <tr>
            <th>
              Board of Directors<br>
              (Bumoto ng 3 Lamang)
            </th>
            <th>Election Committee<br>(Bumoto ng 3 Lamang)</th>
            <th>Audit Committee<br>(Bumoto ng 3 Lamang)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input class="form-check-input" name="director[]" type="checkbox">Bacanto, Joiphelyn C.</td>
            <td><input class="form-check-input" name="election_committee[]" type="checkbox">Abio Juan, P</td>
            <td><input class="form-check-input" name="audit_committee[]" type="checkbox">Carillaga, Rizza</td>
          </tr>
          <!-- Add more rows as needed -->
        </tbody>
      </table>
      <button class="btn btn-success btn-block">Submit Vote</button>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
function getCheckboxValues() {
alert()
}
</script>
</body>
</html>


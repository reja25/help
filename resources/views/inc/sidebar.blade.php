
<style>
    .nav-item a:hover {
        color:#00bc8c;
    }
</style>

<div class="card border-success mb-3" style="max-width: 50rem;">
<ul class="nav nav-pills flex-column ">
  <li class="nav-item">
    <a class="nav-link" href="{{ url('renter') }}">Dashboard</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('add') }}">Create</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('show') }}">Renter List</a>
  </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download" aria-expanded="false">Rent<span class="caret"></span></a>
        <div class="dropdown-menu" aria-labelledby="download">
            <a class="dropdown-item" href="{{ url('addh') }}">Add Rent</a>
            <a class="dropdown-item" href="{{ url('him') }}">Show Rent</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download" aria-expanded="false">Payment<span class="caret"></span></a>
        <div class="dropdown-menu" aria-labelledby="download">
            <a class="dropdown-item" href="{{ url('add_mrp') }}">Add Monthly payemnt</a>
            <a class="dropdown-item" href="{{ url('mrp') }}">Show Monthly payemnt</a>
        </div>
    </li>
</ul>
</div>

{{--
<script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>
--}}

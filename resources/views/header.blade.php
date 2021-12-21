
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="/assets/wallet.png"  width="40" height="32" role="img" aria-label="Home Finance">
        <h4 class="text-success ">HomeFinance</h4>
      </a>
@if (!(session()->has('user')))
<ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
  <li><a href="/" class="nav-link px-2 link-dark">Home</a></li>
  <li><a href="/features" class="nav-link px-2 link-dark">Features</a></li>
  <li><a href="/pricing" class="nav-link px-2 link-dark">Pricing</a></li>
  <li><a href="/faq" class="nav-link px-2 link-dark">FAQs</a></li>
  <li><a href="/about" class="nav-link px-2 link-dark">About</a></li>
</ul>
@endif
 
      <div class="col-md-3 text-end">
        @if(session()->has('user'))
           
            <a href="/logout"><button type="button" class="btn btn-success">
              Logut <i class="bi bi-box-arrow-right"></i></button></a>  
        @else
        <a href="/login"><button type="button" class="btn btn-outline-success me-2">Login</button></a>
        <a href="/register"><button type="button" class="btn btn-success">Sign-up</button></a>
        @endif
      </div>
      <form action="{{ route('themes.update') }}" method="put">
        @csrf

       <select name="theme">
           <option value="darkly">Dark</option>
           <option value="minty">Light</option>
        </select> 
      <button type="submit">enter</button>
      </form>
    </header>
  </div>
